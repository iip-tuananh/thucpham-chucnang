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
                  <div class="col-md-2 col col-xs-12"></div>
                  <div class="col-md-8 col col-xs-12">
                     <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                          </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                      <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-2 col col-xs-12"></div>
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