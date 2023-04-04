<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product\Product;
use Cart,Auth,Redirect,DB;
use App\models\Bill\BillDetail;
use App\models\Bill\Bill;

class CartController extends Controller
{
    public function checkout(){
            $data['cart'] = session()->get('cart', []);
            $data['profile'] = Auth::guard('customer')->user();
            return view('cart.checkout',$data);
        
    }
    public function postBill(Request $request){
        $profile = Auth::guard('customer')->user();
        $cart = session()->get('cart', []);
        $code_bill = rand();
        DB::beginTransaction();
			try {
				$query = new Bill();
				$query->code_bill = $code_bill;
				$query->code_customer = $profile ? $profile->id : 0;
				$query->total_money = $request->total_money;
				$query->statu = 0;
				$query->note = $request->note;
                $query->cus_name = $request->billingName;
                $query->cus_phone = $request->billingPhone;
                $query->cus_email= $request->billingEmail;
                $query->cus_address= $request->billingAddress;
                $query->transport_price = $request->shippingMethod ? $request->shippingMethod : 0;
				$query->save();
                foreach($cart as $key => $item){
                    $billdetail = new BillDetail();
                    $billdetail->code_bill = $code_bill;
                    $billdetail->code_product = $item['id'];
                    $billdetail->name =languageName($item['name']);
                    $billdetail->price = $item['price'];
                    $billdetail->qty = $item['quantity'];
                    $billdetail->images = $item['image'];
                    $billdetail->discount = $item['discount'];
                    $billdetail->save();
                }
				DB::commit();
                $request->session()->forget('cart');
            return Redirect::to('/')->with('ong','Bạn đã đặt hàng thành công');
			} catch (\Throwable $e) {
			DB::rollBack();
			throw $e;
                return back()->with('error','Gửi đơn hàng thất bại');
			}
            

    }
    public function listCart(){
        $data['cart'] = session()->get('cart', []);
        return view('cart.list',$data);
    }
    public function addToCart(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart',[]);
        if (isset($request->quantity)) {
            if(isset($cart[$id])) {
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;

            } else {
                $cart[$id] = [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => $request->quantity,
                    "price" => $product->price,
                    "discount" => $product->discount,
                    "cate_slug" => $product->cate_slug,
                    "type_slug" => $product->type_slug,
                    "slug"=>$product->slug,
                    "image" => json_decode($product->images)[0],
                ];
            }
        } else {
            if(isset($cart[$id])) {
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
         
            } else {
                $cart[$id] = [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "discount" => $product->discount,
                    "cate_slug" => $product->cate_slug,
                    "type_slug" => $product->type_slug,
                    "slug"=>$product->slug,
                    "image" => json_decode($product->images)[0],
                    
                ];
            }
        }
        
        session()->put('cart', $cart);
        $data['cart'] = session()->get('cart',[]);
        $data['cartItemName'] = $cart[$id]['name'];
        $view2 = view('layouts.product.count-item', $data)->render();
        return response()->json([
            'html2' => $view2,
           
        ]);
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            $data['cart'] = session()->get('cart',[]);
            $data['cartItemName'] = $cart[$request->id]['name'];
            $view3 = view('cart.list-cart-ajax', $data)->render();
            return response()->json([
                'html3' => $view3,
            ]);
        }
        
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            $data['cart'] = session()->get('cart',[]);
            $view3 = view('cart.list-cart-ajax', $data)->render();
            $view2 = view('layouts.product.count-item', $data)->render();
            return response()->json([
                'html3' => $view3,
                'html2' => $view2,
            ]);
        }
    }
}
