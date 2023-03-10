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
<div id="content" class="site-content">
    <div class="page-home">
       <section class="main-slideshow">
          <div id="owl-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
             @foreach ($banners as $banner)
             <div class="owl-item">
                  <div class="slide__item">
                     <a href="https://vlive-international.vn/vi/gioi-thieu">	<img style="width: 100%" src="{{$banner->image}}"></a>
                     <div class="header-content">
                        <div class="container">
                           {{-- <div class="motaslider">TẾ BÀO KHỎE MẠNH <br>
                              CƠ THỂ KHỎE MẠNH <br>
                              CUỘC SỐNG HẠNH PHÚC <br>
                           </div> --}}
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
          </div>
       </section>
   
       <main>
          <section class="section1">
             <div class="container container_about">
                <div class="title_about  w-100">
                   <h2><span>Giới thiệu</span></h2>
                </div>
                <div class="des_about w-100">
                  {!!$gioithieu->description!!} 
                </div>
                <div class="reademore_about w-100">
                   <a href="{{route('aboutUs')}}">Xem chi tiết</a>
                </div>
             </div>
          </section>
          <section class="section2">
             <div class="container" style="text-align: center; color:white">
                <h2>SẢN PHẨM</h2>
                <br>
                
                        <div class="swiper mySwiper">
                           <div class="swiper-wrapper">
                  @foreach ($prosp as $pro)
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
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <style>
   .title.title_box0 {
    padding: 43px;
}
  </style>
          <section class="section3">
             <div class="container">
                <div class="box_gtsp">
                  @foreach ($prosp as$key=>$pro)
                  @php
                      
                      $img = json_decode($pro->images);
                  @endphp
                  @if($key %2== 0)
                     <div class="box_item bg-vang">
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
                     <div class="box_item bg-web">
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
                        <a href="" target="blank" rel="nofollow">Xem tất cả Kiến thức sản phẩm</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
 
</div>
<!-- #content -->
@endsection
