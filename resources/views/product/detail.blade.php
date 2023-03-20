@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
$anhchungnhan = json_decode($product->origin);
@endphp
P2
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="content" class="site-content">
    <div class="k2-page-title" style="background-color: #3BB44A">
       <div class="container">
          <h1 class="woocommerce-products-header__title">
            {{languageName($product->name)}}   
          </h1>
       </div>
    </div>
    <div class="k2-single-w">
       <div class="container">
          <div class="row">
              <div class="nav-bredcrum">
                 <div class=" w-100  ngaytao-bv ngaytao-bv-sp"> 
                    <a href="{{route('home')}}" title="Trang chủ"> Trang chủ </a>  / <span>Sản phẩm</span> / <span>{{languageName($product->name)}}</span>
                 </div>
              </div>
             <div class="col-xs-12 col-md-4">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

               <!-- Demo styles -->
             
          
               <!-- Swiper -->
             
               <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                 <div class="swiper-wrapper">
                  @foreach ($img as $item)
                     <div class="swiper-slide">
                     <img src="{{$item}}" />
                     </div>
                  @endforeach
                 </div>
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
               </div>
               <div thumbsSlider="" class="swiper mySwiper">
                 <div class="swiper-wrapper">
                  @foreach ($img as $item)
                     <div class="swiper-slide">
                     <img src="{{$item}}" />
                     </div>
                  @endforeach
                 </div>
               </div>
             
               <!-- Swiper JS -->
               <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
             
               <!-- Initialize Swiper -->
               <script>
                 var swiper = new Swiper(".mySwiper", {
                   spaceBetween: 10,
                   slidesPerView: 4,
                   freeMode: true,
                   watchSlidesProgress: true,
                 });
                 var swiper2 = new Swiper(".mySwiper2", {
                   spaceBetween: 10,
                   navigation: {
                     nextEl: ".swiper-button-next",
                     prevEl: ".swiper-button-prev",
                   },
                   thumbs: {
                     swiper: swiper,
                   },
                 });
               </script>
             </div>
             <div class="col-xs-12 col-md-8">
                <div class="k2-info-single details-product">
                   <div class="title_detail">
                      <h2 class="product_title entry-title">{{languageName($product->name)}}</h2>
                   </div>
                  
                   <div class="price_sp">
                      <span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price)}}&nbsp;<span class="woocommerce-Price-currencySymbol">VNĐ</span></bdi></span>
                      <p> (Giá đã bao gồm 10% thuế VAT)</p>
                   </div>
                   <div class="woocommerce-product-details__short-description mota_detailsp">
                    {!!languageName($product->description)!!}
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="content_detail" style="width: 100%;float: left;">
          <div class="container">
             <ul class="tabs">
                <li class="tab-link active tab-1" data-tab="#tab-1">
                   <h2><span>Giới thiệu </span></h2>
                </li>
                <li class="tab-link tab-2" data-tab="#tab-2">
                   <h2><span>THÀNH PHẦN VÀ CÔNG DỤNG</span></h2>
                </li>
                <li class="tab-link tab-3" data-tab="#tab-3">
                   <h2><span>Chứng nhận sản phẩm</span></h2>
                </li>
             </ul>
          </div>
          <div id="tab-1" class="tab-content active">
             <div class="container">
                <div class="container">
                    {!!languageName($product->content)!!}
           
                </div>
             </div>
          </div>
          <div id="tab-2" class="tab-content ">
             <div class="container product_data">
                {!!languageName($product->description)!!}
             </div>
          </div>
    
          <div id="tab-3" class="tab-content " style="background: #cdcfd0;padding: 50px 0;">
             <div class="container">
                <div class="grid-chungnhansp">
 
                  @php
                      $anhchungnhan = json_decode($product->origin);
                  @endphp
                  @if($anhchungnhan != null)
                    @foreach ($anhchungnhan as $item)
                        <div class="box_chungnhan">
                        <div class="img_chungnhan">
                           @dd($anhchungnhan);
                           @if($item != null)
                           <a data-fancybox="" href="{{$item}}"><img src="{{$item}}"></a>
                              @else
                           <a data-fancybox="" href="#">
                              @endif
                        </div>
                        </div>
                    @endforeach
                    @endif
                </div>
             </div>
          </div>
       </div>
    </div>
    <section class="section_video">
       <div class="container">
          <div class="title_about  w-100">
             <h2><span>Video giới thiệu</span></h2>
          </div>
        
          <div class="khungvideo w-100">
            @foreach ($video_sp as $item)
            @if($item->product_id == $product->id)
                <div class="item_video">
                <div class="img_video">
                    <a data-fancybox="" href="{{$item->link}}">
                        <img src="{{$item->image}}">
                        <div class="iconplay">
                            <img src="{{asset('frontend/img/iconplay.png')}}">
                        </div>
                    </a>
                </div>
                <div class="title_video">
                    <h3>{{$item->name}}</h3>
                </div>
                </div>
                @endif
            @endforeach
          </div>
       </div>
    </section>
 </div>
 <style>
              
   .swiper {
     width: 100%;
     height: 100%;
   }

   .swiper-slide {
     text-align: center;
     font-size: 18px;
     background: #fff;
     display: flex;
     justify-content: center;
     align-items: center;
   }

   .swiper-slide img {
     display: block;
     width: 100%;
     height: 100%;
     object-fit: cover;
   }



   .swiper {
     width: 100%;
     height: 300px;
     margin-left: auto;
     margin-right: auto;
   }

   .swiper-slide {
     background-size: cover;
     background-position: center;
   }

   .mySwiper2 {
     height: 80%;
     width: 100%;
   }

   .mySwiper {
     height: 20%;
     box-sizing: border-box;
     padding: 10px 0;
   }

   .mySwiper .swiper-slide {
     width: 25%;
     height: 100%;
     opacity: 0.4;
   }

   .mySwiper .swiper-slide-thumb-active {
     opacity: 1;
   }

   .swiper-slide img {
     display: block;
     width: 100%;
     height: 100%;
     object-fit: cover;
   }
 </style>
 <!-- #content -->
@endsection

