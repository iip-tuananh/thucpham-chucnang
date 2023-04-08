@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiperbloglq", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
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
                <div id="crumbs"><a href="{{route('home')}}">Trang chủ</a> / <a href="javascript:;">Tin tức</a> / <span class="current">{{languageName($blog_detail->title)}}</span></div>
             </div>
          </div>
          <main id="main" class="site-main">
             <div class="w-single container_news_detail">
               <div class="title_about  w-100">
                  <p class="h3">{{languageName($blog_detail->title)}}</p>
               </div>
               
                <div class="content_detailnews" style="font-size: 17px;">
                  
                   <div id="attachment_6517" class="wp-caption ">
                    {!!languageName($blog_detail->content)!!}
                   </div>
                </div>
                <!-- .entry-content -->
             </div>
          </main>
          <!-- #main -->
         
          
            
          <section class="news_other">
             <div class="container">
                <div class="title_about  w-100">
                   <p class="h3"><span>Tin liên quan</span></p>
                </div>
        
                <div class="khungtintuc w-100  mySwiperbloglq swiper">
                  <div class="swiper-wrapper">
                    @foreach ($bloglq as $item)
                    @if($item->type_cate == $blog_detail->type_cate)
                        <div class="item_tintuc item_tintuckhac swiper-slide" style="display: block;">
                        <div class="img_tintuc">
                            <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                            <img width="2048" height="300px" src="{{$item->image}}" class="attachment-full size-full wp-post-image tuancusi" alt="{{languageName($item->title)}}" decoding="async" loading="lazy" srcset="{{$item->image}} 2048w, {{$item->image}} 768w, {{$item->image}} 1920w, {{$item->image}} 1280w, {{$item->image}} 1536w, {{$item->image}} 300w, {{$item->image}} 450w, {{$item->image}} 600w" sizes="(max-width: 2048px) 100vw, 2048px" />                                   </a>
                        </div>
                        <p class="h4"><a ref="nofollow" href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></p>
                        </div>
                        @endif
                    @endforeach
               
                </div>
                </div>
             </div>
          </section>
          
       </div>
    </div>
 </div>
 <!-- #content -->
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
     .item_tintuckhac     object-fit: cover;
   }
 </style>
@endsection