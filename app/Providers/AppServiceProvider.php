<?php

namespace App\Providers;

use App\models\blog\Blog;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Session,View;
use App\models\website\Setting;
use App\models\website\Banner;
use Cart,Auth;
use App\models\PageContent;
use Laravel\Dusk\DuskServiceProvider;
use App\models\product\Category;
use App\models\language\Language;
use App\models\Province;
use App\models\Services;
use App\models\Promotion;
use App\models\blog\BlogCategory;
use App\models\Project;
use App\models\ReviewCus;
use App\models\website\Partner;
use App\models\product\Product;
use App\models\website\Prize;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) 
        {
            if(Auth::guard('customer')->user() != null){
                $profile = Auth::guard('customer')->user();
            }else{
                $profile = "";
            }
            $language_current = Session::get('locale');
            $promotio = Promotion::where('status',1)->orderBy('id','DESC')->get();
            $servicehome = Services::where('status',1)->limit(4)->orderBy('id','DESC')->get();
            $setting = Setting::first();
            $lang = Language::get();
            
            $pageContent = PageContent::where(['language'=>$language_current,'status'=> 1])->get();
            $categoryhome = Category::with([
                'typeCate' => function ($query) {
                    $query->with(['typetwo'])
                        ->where('status',1)
                        ->orderBy('id','DESC')
                        ->select('cate_id','id', 'name','avatar','slug','cate_slug'); 
                },
                'product' => function ($query) {
                    $query->latest(); // retrieve the latest products
                }
            ])
            ->where('status',1)
            ->orderBy('id','DESC')
            ->get(['id','name','imagehome','avatar','slug','content','description'])
            ->map(function ($query) {
                $query->setRelation('product', $query->product->take(10)); // retrieve the first 5 products and order them by ID
                return $query;
            });
            $banners = Banner::where(['status'=>1])->get(['id','image','link','title','description']);
            $cartcontent = session()->get('cart', []);
            $viewold = session()->get('viewoldpro', []);
            $compare = session()->get('compareProduct', []);
            $blogCate = BlogCategory::with([
                'typeCate' => function ($query){
                    $query->orderBy('id','DESC')->select('id','slug','name','avatar','category_slug');
                }
            ])
            ->where('status',1)
            ->orderBy('id','DESC')
            ->get(['id','name','slug','avatar'])->map(function ($query) {
                $query->setRelation('listBlog', $query->listBlog->take(5));
                return $query;
            });;
            $prosp= Product::where(['status'=>1])->orderBy('id','DESC')->get();
            $prospnoibat= Product::where(['status'=>1,'discountStatus'=>1])->orderBy('id','DESC')->get();
            $vechungtoi = PageContent::where(['status'=>1,'type'=>'ho-tro-khanh-hang','language'=>'vi'])->orderBy('id','DESC')->get();
            $projects = Project::where(['status'=>1])->get();
            $partner = Partner::where(['status' => 1])->get();
            $reviewcus = ReviewCus::where(['status' => 1])->get();
            $thuvien = Prize::where(['status' => 1])->get();
            $view->with([
                'promotio' => $promotio,
                'setting' => $setting,
                'pageContent' => $pageContent,
                'lang' => $lang,
                'banners'=>$banners,
                'profile' =>$profile,
                'categoryhome'=> $categoryhome,
                'cartcontent'=>$cartcontent,
                'viewold'=>$viewold,
                'compare'=>$compare,
                'blogCate'=>$blogCate,
                'servicehome'=>$servicehome,
                'projects'=>$projects,
                'partner'=>$partner,
                'reviewcus' => $reviewcus,
                'prosp'=>$prosp,
                'prospnoibat'=>$prospnoibat,
                'vechungtoi'=>$vechungtoi,
                'thuvien'=>$thuvien,
                ]);    
        });  
    }
}
