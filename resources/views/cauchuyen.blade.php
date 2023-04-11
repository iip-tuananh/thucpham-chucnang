@extends('layouts.main.master')
@section('title')
Câu chuyện thương hiệu
@endsection
@section('description')

@endsection
@section('image')

@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endsection
@section('content')
<div id="content" class="site-content">
    <div class="content-single">
       <div class="container container-single">
          <div class="nav-bredcrum">
             <div class="ngaytao-bv ">
                <div id="crumbs"><a href="{{route('home')}}">Trang chủ</a> / <a href="javascript:;">Câu chuyện thương hiệu</a></div>
             </div>
          </div>
          <main id="main" class="site-main">
             <div class="w-single container_news_detail">
               <div class="title_about  w-100">
                  <p class="h3"><span>Câu chuyện thương hiệu</span></p>
               </div>
               <br>
               <br>
               <div class="row">
         
                  <div class="col-md-12 col col-xs-12">                    
                    <div class="swiper mySwiper">
                      <div class="swiper-wrapper">
                        @php
                            $imgs =json_decode($cauchuyen->images);
                        @endphp
                        @foreach ($imgs as $img)
                           <div class="swiper-slide">
                           <img src="{{$img}}" />
                           </div>
                        @endforeach
                       
                  
                     </div>
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
             
               </div>
               
                <div class="row">
                  
                    <article class="post-587 page type-page status-publish hentry">
                        <div class="entry-content" style="font-size: 17px">
                                      {!!languageName($cauchuyen->content)!!}
                        </div>
                    </article>
         
                </div>
  
             </div>
          </main>
  
       </div>
    </div>
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

 </style>
 <!-- #content -->
@endsection