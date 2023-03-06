@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <main id="page-content">
        <div class="page-slide bg-light">
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container slide-banner swiper-container-horizontal swiper-container-autoheight">
                            <div class="swiper-wrapper">
                                @foreach ($banners as $banner)
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="avatar">
                                            <img src="{{$banner->image}}" alt="" srcset="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-nhantin">
            <div class="container">
                <div class="box-nhantin">
                    <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                        style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                        <h2 class="text-uppercase">Liên hệ nhanh với chúng tôi
                        </h2>
                    </div>
                    <div role="form" class="wpcf7" id="wpcf7-f8500-o1" lang="vi" dir="ltr">
                        <form id="apply-form" action="{{route('postcontact')}}" method="POST">
                            @csrf
                            <div class="form-row justify-content-center">
                              <div class="col-auto">
                                <input type="email" name="email" required  class="form-control mb-2 input-form" id="inlineFormInput" placeholder="Email" value="">
                              </div>
                              <div class="col-auto">
                                <div class="input-group mb-2">
                                  <input type="tel"  name="phone"  class="form-control input-form" id="phone" placeholder="Số điện thoại" value="">
                                </div>
                              </div>
                              <div class="col-auto">
                                <button id="apply-btn" type="submit" class="btn btn-gradient" disabled>Đăng ký</button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-introduce">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                    <h2 class="text-uppercase">xuất nhập khẩu Eximco global</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="mb-4 text-justify"></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-promo">
            <div class="container">
                <div class="d-flex row justify-content-between">
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">10+</h3>
                        <p class="page-promo__text">Năm kinh nghiệm</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1.2s"
                        style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">1000+</h3>
                        <p class="page-promo__text">Khách hàng trên cả nước</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1.4s"
                        style="visibility: visible; animation-duration: 1.4s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">1000+</h3>
                        <p class="page-promo__text">Nhập khẩu thành công</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1.6s"
                        style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">30+</h3>
                        <p class="page-promo__text">Nhân sự giàu kinh nghiệm</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-12" data-wow-duration="1.8s"
                        style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">300+</h3>
                        <p class="page-promo__text">Đối tác trong các lĩnh vực</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-why-choose">
            <noscript>
            <img style="
               position: absolute;
               top: 0;
               left: 0;
               right: 0;
               bottom: 0;
               object-fit: cover;
               width: 100%;
               height: 100%;
               "
               data-src="{{asset('frontend/images/test2-01-2-scaled.jpg')}}"
               class="bg-why lazyload"
               src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="\
               />
            <noscript>
               <img
                  class="bg-why" src="{{asset('frontend/images/test2-01-2-scaled.jpg')}}"
                  style="
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  object-fit: cover;
                  width: 100%;
                  height: 100%;
                  " />
            </noscript>
            <img
               class="bg-why ls-is-cached lazyloaded"
               src="{{asset('frontend/images/bannerHome.jpg')}}"
               data-src="{{asset('frontend/images/bannerHome.jpg')}}"
               style="
               position: absolute;
               top: 0;
               left: 0;
               right: 0;
               bottom: 0;
               object-fit: cover;
               width: 100%;
               height: 100%;
               ">
            <div class="container">
               <h4 class="text-center text-uppercase text-white mb-4 pb-3 position-relative">{{$setting->company}} cam
                  kết dịch vụ
                  tốt nhất
               </h4>
               <div class="row">
                  <div class="col-md-4 col-6">
                     <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration=".5s"
                        style="visibility: visible; animation-duration: 0.5s; animation-name: zoomIn;">
                        <i class="fa fa-money page-why-choose__icon"></i>
                        <h3 class="h5 text-uppercase page-why-choose__header">Đơn giá hợp lý và cạnh
                           tranh
                        </h3>
                        <p class="page-why-choose__text">Bảng giá của các sản phẩm và dịch vụ cạnh
                           tranh
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-6">
                     <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration=".7s"
                        style="visibility: visible; animation-duration: 0.7s; animation-name: zoomIn;">
                        <i class="fa fa-handshake page-why-choose__icon"></i>
                        <h3 class="h5 text-uppercase page-why-choose__header">hỗ trợ pháp lý hải quan
                        </h3>
                        <p class="page-why-choose__text">Tư vấn mọi vấn đề pháp lý khi dùng dịch vụ</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-6">
                     <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration=".9s"
                        style="visibility: visible; animation-duration: 0.9s; animation-name: zoomIn;">
                        <i class="fa fa-check-circle page-why-choose__icon"></i>
                        <h3 class="h5 text-uppercase page-why-choose__header">chính sách đền bù uy tín
                        </h3>
                        <p class="page-why-choose__text">Theo hợp đồng</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-6">
                     <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration="1.1s"
                        style="visibility: visible; animation-duration: 1.1s; animation-name: zoomIn;">
                        <i class="fa fa-comments page-why-choose__icon"></i>
                        <h3 class="h5 text-uppercase page-why-choose__header">tư vấn hỗ trợ 24/7</h3>
                        <p class="page-why-choose__text">Tư vấn viên trực 24/24 để hỗ trợ khách hàng
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-6">
                     <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                        <i class="fa fa-users page-why-choose__icon"></i>
                        <h3 class="h5 text-uppercase page-why-choose__header">đội ngũ nhân sự chuyên
                           nghiệp
                        </h3>
                        <p class="page-why-choose__text">Chúng tôi sẵn sàng phục vụ tận tình, mọi lúc
                           mọi nơi
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-6">
                     <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration="1.5s"
                        style="visibility: visible; animation-duration: 1.5s; animation-name: zoomIn;">
                        <i class="fa fa-copyright page-why-choose__icon"></i>
                        <h3 class="h5 text-uppercase page-why-choose__header">nhanh chóng, chính xác
                        </h3>
                        <p class="page-why-choose__text">Thời gian giao hàng nhanh</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         @if (count($servicehome)>0)
           <section class="page-service">
            <div class="container">
               <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                  style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInDown;">
                  <h2 class="text-uppercase">dịch vụ nổi bật</h2>
               </div>
               <div class="c-box col">
                  <div class="c-box-service col-md-6 pl-md-0">
                     <div class="no-gutters d-flex">
                        @foreach ($servicehome as $key => $service)
                            <div class="c-item col-md-6 col-6 pl-3">
                                @if ($key %2 == 0)
                                    <div class="page-service__item text-center text-white wow fadeIn" data-wow-duration=".6s"
                                        style="visibility: visible; animation-duration: 0.6s; animation-name: fadeIn;">
                                        <h3 class="h6 text-uppercase page-service__text mb-0"><a
                                            href="{{route('serviceDetail',['slug'=>$service->slug])}}"
                                            title="{{$service->name}}" class="text-white"
                                            data-wpel-link="internal">{{$service->name}}</a>
                                        </h3>
                                    </div>
                                @else
                                <div class="page-service__item text-center text-white bg-blue2 wow fadeIn"
                                    data-wow-duration=".8s"
                                    style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                                    <h3 class="h6 text-uppercase page-service__text mb-0"><a
                                    href="{{route('serviceDetail',['slug'=>$service->slug])}}"
                                    title="{{ $service->name }}" class="text-white"
                                    data-wpel-link="internal">{{ $service->name }}</a></h3>
                                </div>
                                @endif
                            </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
           </section>  
         @endif
         @if (count($homePro)>0)
            <section class="home-products">
                <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInDown;">
                    <h2 class="text-uppercase">mặt hàng nhập khẩu</h2>
                </div>
                <div class="row">
                    @foreach ($homePro as $product)
                    @php
                        $img = json_decode($product->images);
                    @endphp
                    <div class="col-lg-4 mb-3 mb-md-4 wow fadeIn" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                        <div class="product position-relative overflow-hidden">
                            <a class="product-image d-block"
                            href="{{ route('detailProduct', ['slug'=>$product->slug])}}"
                            title="{{ languageName($product->name)}}t" data-wpel-link="internal">
                            <img class="c-product-img" src="{{$img[0]}}" alt="" srcset="">
                            </a>
                            <div class="product-body p-3 position-relative">
                            <h3 class="product-header text-uppercase mb-0 mb-md-2"> <a class="text-dark"
                                href="{{ route('detailProduct', ['slug'=>$product->slug])}}"
                                title="{{ languageName($product->name)}}"
                                data-wpel-link="internal">{{ languageName($product->name)}}</a>
                            </h3>
                            <div class="text-des">
                                {!!languageName($product->description)!!}
                            </div>
                            <div class="product-bottom d-flex justify-content-between align-items-center pt-4">
                                <span class="product-views"><i
                                    class="fa fa-clock mr-2"></i><span>{{date('d-m-Y', strtotime($product->created_at))}}</span></p></span>
                                <a class="btn btn-primary w-50 text-uppercase product-actions"
                                    href="{{ route('detailProduct', ['slug'=>$product->slug])}}"
                                    title="{{ languageName($product->name)}}"
                                    data-wpel-link="internal">Chi tiết</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </section>   
         @endif
        @if (count($partner)>0)
          <section class="page-partner">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInDown;">
                    <h2 class="text-uppercase">đối tác của chúng tôi</h2>
                </div>
                <div class="container">   
                    <!-- Slider main container -->
                    <div class="swiper-containerS">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach ($partner as $partners)
                              <div class="swiper-slide"> 
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta d-flex justify-content-center">
                                        <a rel="nofollow" target="_blank" href="{{$partners->link}}" class="seoquake-nofollow">
                                            <img src="{{$partners->image}}"
                                                class="img-fluid" alt="{{$partners->name}}">
                                        </a>
                                    </div>
                                </div>
                            </div>   
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
          </section>  
        @endif
        @if (count($reviewcus)>0)
          <section class="page-testimonial">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                    <h2 class="text-uppercase">khách hàng nói gì về chúng tôi</h2>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($reviewcus as $review)
                        <div class="swiper-slide pt-3">
                            <div class="owl-item cloned" style="width: 350px;">
                                <div class="item page-testimonial__item">
                                    <div class="images pt-3"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="{{$review->avatar}}"
                                                    class="lazyload"
                                                    src="{{$review->avatar}}"><noscript><img
                                                        src="{{$review->avatar}}"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="{{$review->avatar}}"
                                                    data-src="{{$review->avatar}}"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> 
                                        <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal">{{languageName($review->name)}}:
                                            <span style="font-size: 14px;">{!!languageName($review->content)!!}</span> 
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>  
        @endif
        @if (count($hotnews)>0)
           <section class="blog">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                    <h2 class="text-uppercase">tin tức mới nhất</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog__large blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;"> <a
                                class="d-block blog__img" href="{{route('detailBlog',['slug'=>$hotnews[0]->slug])}}"
                                title="{!!languageName($hotnews[0]->title)!!}" data-wpel-link="internal">
                                <noscript><img width="540" height="500"
                                        alt="{!!languageName($hotnews[0]->title)!!}"
                                        data-src="{{$hotnews[0]->image}}"
                                        class="attachment-home_main_thumb size-home_main_thumb wp-post-image lazyload"
                                        src="{{$hotnews[0]->image}}" /><noscript><img
                                            width="540" height="500"
                                            src="{{$hotnews[0]->image}}"
                                            class="attachment-home_main_thumb size-home_main_thumb wp-post-image"
                                            alt="{!!languageName($hotnews[0]->title)!!}" /></noscript><img class="c-blog-img"
                                        width="540" height="500"
                                        src="{{$hotnews[0]->image}}"
                                        data-src="{{$hotnews[0]->image}}"
                                        class="lazyload attachment-home_main_thumb size-home_main_thumb wp-post-image"
                                        alt="{!!languageName($hotnews[0]->title)!!}"> </a>
                            <div class="card-body px-0 pb-0 pb-lg-3">
                                <div class="blog-body-content">
                                    <h5 class="h6 card-title"> <a class="blog-heading"
                                            href="{{route('detailBlog',['slug'=>$hotnews[0]->slug])}}"
                                            title="{!!languageName($hotnews[0]->title)!!}"
                                            data-wpel-link="internal"> {!!languageName($hotnews[0]->title)!!}</a></h5>
                                    <div class="d-flex blog__meta mb-2">
                                        <p class="card-text mr-3 mb-0"><i
                                                class="fa fa-clock mr-2"></i><span>{{date('d-m-Y', strtotime($hotnews[0]->created_at))}}</span></p>
                                        <p class="card-text mb-0"><span id="rateMe"> <i
                                                    class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                    data-html="true" data-toggle="popover" data-placement="top"
                                                    title="Very bad"></i> <i class="fas fa-star py-1 px-0 rate-popover"
                                                    data-index="1" data-html="true" data-toggle="popover"
                                                    data-placement="top" title="Poor"></i> <i
                                                    class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                    data-html="true" data-toggle="popover" data-placement="top"
                                                    title="OK"></i> <i class="fas fa-star py-1 px-0 rate-popover"
                                                    data-index="3" data-html="true" data-toggle="popover"
                                                    data-placement="top" title="Good"></i> <i
                                                    class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                    data-html="true" data-toggle="popover" data-placement="top"
                                                    title="Excellent"></i> </span></p>
                                    </div>
                                    <p class="text-des">{{languageName($hotnews[0]->description)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        
                        @foreach ($hotnews as $keyBlog =>$blg)
                        @if ($keyBlog != 0)
                            <div class="card blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;">
                                <div class="row no-gutters"> <a class="col-4 col-md-3 blog__img"
                                        href="{{route('detailBlog',['slug'=>$blg->slug])}}"
                                        title="{{languageName($blg->title)}}"
                                        data-wpel-link="internal"> <noscript><img width="135" height="90"
                                                alt="{{languageName($blg->title)}}"
                                                data-srcset="{{$blg->image}}"
                                                data-src="{{$blg->image}}"
                                                data-sizes="(max-width: 135px) 100vw, 135px"
                                                class="attachment-home_thumb size-home_thumb wp-post-image lazyload"
                                                src="{{$blg->image}}" /><noscript><img
                                                    width="135" height="90"
                                                    src="{{$blg->image}}"
                                                    class="attachment-home_thumb size-home_thumb wp-post-image"
                                                    alt="App Aliwangwang là gì? Hướng dẫn tải và cài đặt Aliwangwang chi tiết nhất"
                                                    srcset="{{$blg->image}}"
                                                    sizes="(max-width: 135px) 100vw, 135px" /></noscript><img width="135"
                                                height="90"
                                                src="{{$blg->image}}"
                                                data-src="{{$blg->image}}"
                                                class="lazyload attachment-home_thumb size-home_thumb wp-post-image"
                                                alt="App Aliwangwang là gì? Hướng dẫn tải và cài đặt Aliwangwang chi tiết nhất"
                                                data-srcset="{{$blg->image}}"
                                                data-sizes="(max-width: 135px) 100vw, 135px"> </a>
                                    <div class="col-8 col-md-9">
                                        <div class="card-body py-0 px-2 px-lg-3">
                                            <h5 class="h6 card-title"> <a
                                                    href="{{route('detailBlog',['slug'=>$blg->slug])}}"
                                                    title="{{languageName($blg->title)}}"
                                                    data-wpel-link="internal">{{languageName($blg->title)}}</a></h5>
                                            <div class="d-flex blog__meta">
                                                <p class="card-text mr-3 mb-0"><i
                                                        class="fa fa-clock mr-2"></i><span>{{date('d-m-Y', strtotime($blg->created_at))}}</span></p>
                                                <p class="card-text mb-0"><span id="rateMe"> <i
                                                            class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                            data-html="true" data-toggle="popover" data-placement="top"
                                                            title="Very bad"></i> <i
                                                            class="fas fa-star py-1 px-0 rate-popover" data-index="1"
                                                            data-html="true" data-toggle="popover" data-placement="top"
                                                            title="Poor"></i> <i
                                                            class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                            data-html="true" data-toggle="popover" data-placement="top"
                                                            title="OK"></i> <i
                                                            class="fas fa-star py-1 px-0 rate-popover" data-index="3"
                                                            data-html="true" data-toggle="popover" data-placement="top"
                                                            title="Good"></i> <i
                                                            class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                            data-html="true" data-toggle="popover" data-placement="top"
                                                            title="Excellent"></i> </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                          @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section> 
        @endif
        
    </main>
    @if ($setting->statusPopup == 1)
    <div class="modal-contact">
        <div class="modal-contact-content">
            <a href="{{$setting->linkpopup}}">
                <img src="{{url($setting->popupimage)}}" alt="show-popup">
            </a>
        </div>
    </div>
    @endif
    
    <style>
        @media only screen and (max-width: 768px) {
            .modal-contact {
            display: none;
            position: fixed;
            z-index: 10;
            padding-top: 120px;
            padding-left: 0;
            padding-right: 0;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgb(0 0 0 / 52%);
            }
            .modal-contact-content {
                background-color: #f1f1f1;
                margin: auto;
                border: 1px solid #fff;
                width: 90%;
            }
        }
        @media only screen and (min-width: 768px) {
            .modal-contact {
            display: none;
            position: fixed;
            z-index: 10;
            padding-top: 120px;
            padding-left: 180px;
            padding-right: 180px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgb(0 0 0 / 52%);
            }
            .modal-contact-content {
                background-color: #f1f1f1;
                margin: auto;
                border: 1px solid #fff;
                width: 60%;
            }
        }
        .modal-contact-content img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection
