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
<link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- Demo styles -->
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

  .autoplay-progress {
    position: absolute;
    right: 16px;
    bottom: 16px;
    z-index: 10;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: var(--swiper-theme-color);
  }

  .autoplay-progress svg {
    --progress: 0;
    position: absolute;
    left: 0;
    top: 0px;
    z-index: 10;
    width: 100%;
    height: 100%;
    stroke-width: 4px;
    stroke: var(--swiper-theme-color);
    fill: none;
    stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
    stroke-dasharray: 125.6;
    transform: rotate(-90deg);
  }
</style>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
 
  var swiper = new Swiper(".mySwiperbanner", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
   
  });
</script>
@endsection
@section('content')
<div id="content" class="site-content">
    <div class="page-home">
       <section class="main-slideshow">
         <div class="swiper mySwiperbanner">
            <div class="swiper-wrapper">
               @foreach ($banners as $banner)
               @if($banner->description != null)
               <div class="swiper-slide"><video width="100%" height="auto" autoplay muted loop src="{{asset('frontend/video/video1.mp4')}}">
      
                </video></div>
               @else
               <div class="swiper-slide"><img src="{{$banner->image}}" alt="" srcset=""></div>
               @endif
               @endforeach
            </div>
         </div>
       </section>
   
       <main>
          <section class="section1 animate__animated animate__fadeInDown">
             <div class="container container_about">
                <div class=" tieudechay">
                   <span >Giới thiệu</span>
                </div>
                <div class="des_about w-100">
                  {!!$gioithieu->description!!} 
                </div>
                <div id="xemthem" class="reademore_about w-100">
                   
                     <button alt="XEM CHI TIẾT" onclick="window.location.href='{{route('aboutUs')}}'">
                  
                        <i>X</i>
                        <i>E</i>
                        <i>M</i>
                        <i>&nbsp;</i>
                        <i>C</i>
                        <i>H</i>
                        <i>I</i>
                        <i>&nbsp;</i>
                        <i>T</i>
                        <i>I</i>
                        <i>Ế</i>
                        <i>T</i>
          
                      </button>
                </div>
             </div>
          </section>
          <section class="section2 animate__animated animate__fadeInRight">
             <div class="container" style="text-align: center; color:white">
                        <div class="swiper mySwiper">
                           <div class="swiper-wrapper">
                  @foreach ($prospnoibat as $pro)
                     @php
                           $img = json_decode($pro->images)
                     @endphp
                              <div class="swiper-slide item_sp">
                                 <a href="{{route('detailProduct',['slug'=>$pro->slug])}}"><img src="{{$img[0]}}"></a>
                                 </div>
                                 
                                 @endforeach
                              </div>
                              <div class="swiper-pagination"></div>
                           </div>
                           <br>
                           <br>
                           <div class="swiper mySwiperpartner">
                              <div class="swiper-wrapper">
                     @foreach ($partner as $item)
                       
                                 <div class="swiper-slide item_sp">
                                    <a href="javascript:;"><img src="{{$item->image}}"></a>
                                    </div>
                           @endforeach
                                 </div>
                                 <div class="swiper-pagination"></div>
                              </div>
             </div>
          </section>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Demo styles -->
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



  <!-- Swiper -->


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
         100: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      
         440: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
      },
    });
  </script>
    <script>
      var swiper = new Swiper(".mySwiperpartner", {
        slidesPerView: 6,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    
        breakpoints: {
         100: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        440: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 6,
          spaceBetween: 50,
        },
      },
      });
    </script>
  <style>
   .title.title_box0 {
    padding: 43px;
}
.destop-m{
   display: none;
}
@media only screen and (max-width:768px){
   .destop-t{
      display: none;
   }
   .destop-m{
      display: block ;
   }
}
  </style>
          <section class="section3">
             <div class="container">
                <div class="box_gtsp destop-t">
                  @foreach ($prospnoibat as$key=>$pro)
                  @php
                      
                      $img = json_decode($pro->images);
                  @endphp
                  @if($key %2== 0)
                     <div class="box_item bg-vang animate__animated animate__fadeInLeft">
                        <div class="box_left ">
                           <div class="title title_box0" style="padding: 40px">
                              <h2>{{languageName($pro->name)}}</h2>
                           </div>
                           <div class="des">
                             <div class="limit-text-4">
                                {!!languageName($pro->description)!!}
                             </div>
                             <br>

                              <a href="{{route('detailProduct',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                           </div>
                        </div>
                        <div class="box_right ">
                           <img src="{{$img[0]}}" alt="voxy-v-live">
                        </div>
                     </div>
                     @else
                     <div class="box_item bg-web animate__animated animate__fadeInRight">
                        <div class="box_left box_left1">
                           <div class="title title_box1" style="padding: 40px">
                              <h2 style="color: white">{{languageName($pro->name)}}</h2>
                           </div>
                           <div class="des">
                             <div class="limit-text-4" style="color: white" id="text-white">
                                {!!languageName($pro->description)!!}
                             </div>
                             <br>
                              <a href="{{route('detailProduct',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                           </div>
                        </div>
                        <div class="box_right ">
                           <img src="{{$img[0]}}" alt="voxy-v-live">
                        </div>
                     </div>
                  @endif
                  @endforeach
                 
                </div>
                <div class="box_gtsp destop-m">
                  @foreach ($prospnoibat as $pro)
                  @php
                      
                      $img = json_decode($pro->images);
                  @endphp
               
                     <div class="box_item bg-vang animate__animated animate__fadeInLeft">
                        <div class="box_left ">
                           <div class="title title_box0" style="padding: 40px">
                              <h2>{{languageName($pro->name)}}</h2>
                           </div>
                           <div class="des">
                             <div class="limit-text-4">
                                {!!languageName($pro->description)!!}
                             </div>
                             <br>

                              <a href="{{route('detailProduct',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                           </div>
                        </div>
                        <div class="box_right ">
                           <img src="{{$img[0]}}" alt="voxy-v-live">
                        </div>
                     </div>
                    
                  @endforeach
                 
                </div>
             </div>
          </section>
       </main>
    </div>
 </div>
 <div id="content" class="site-content">

   
      <section class="section_phanhoikhachhang">
         <div class="container">
            <div class="title_chungnhan  w-100">
               <h1><span>Phản hồi của khách hàng</span></h1>
            </div>
            <div class="khungphanhoi w-100">
            
               <div class="khungphanhoi_right col-md-12 col-sm-9 col-xs-12">
                  <div class="content_phanhoi active" id="tab-5" style="margin-top: 0">
                     <div class="khungphanhoi111">
                        @foreach ($video as $item)
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="{{$item->link}}">
                              <div class="img_phanhoi">
                                 <img src="{{$item->image}}">
                                 <div class="iconplay">
                                    <img src="{{asset('frontend/img/iconplay.png')}}">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>{{$item->name}}</h3>
                              </div>
                           </a>
                        </div>
                        @endforeach
                     </div>
                     <div class="xemtatcaphanhoi">
                        <a href="{{route('allvideo')}}"  rel="nofollow">Xem tất cả Kiến thức sản phẩm</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
 
</div>
<!-- #content -->
@endsection
