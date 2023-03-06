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
@endphp
P2
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="page-content">
   <nav class="site-breadcrumb" aria-label="breadcrumb" style="background-image: url({{asset('frontend/images/bg-breadcrumb.jpg')}})">
       <div class="container">
           <div class="h2 text-uppercase break-word text-white"><span class="break-word d-block">{{languageName($product->name)}}</span></div>
       </div>
   </nav>
   <section class="details-product">
    <div class="container">
        <div class="row margin-bottom-10 margin-bottom-20">
            <div class="col-md-6">
               <a data-src="{{$img[0]}}" data-fancybox="gallery">
                <img class="big-image" src="{{$img[0]}}" alt="{{languageName($product->name)}}" loading="lazy">
               </a>
            </div>
            <div class="c-box-small col-md-6">
               <div class="row">
                @foreach ($img as $key=>$item)
                    @if ($key !=0 && $key < 4 )
                    <div class="col-md-6 col-6 show-image">
                        <a data-src="{{$item}}" data-fancybox="gallery">
                        <img class="small-image" src="{{$item}}" alt="{{languageName($product->name)}}" loading="lazy">
                        </a>
                    </div>
                    @endif
                    @if ($key == 4)
                    <div class="col-md-6 col-6 show-image">
                        <a data-src="{{$item}}" data-fancybox="gallery">
                           <img class="small-image" src="{{$item}}" alt="{{languageName($product->name)}}" loading="lazy">
                           <p>XEM THÊM +{{count($img)-5}} ẢNH</p>
                        </a>
                     </div> 
                    @endif
                    @if ($key > 4)
                    <div class="col-md-6 col-6" hidden>
                        <a data-src="{{$item}}" data-fancybox="gallery">
                        <img class="small-image" src="{{$item}}" alt="{{languageName($product->name)}}" loading="lazy">
                        </a>
                     </div>
                    @endif
                @endforeach
               </div>
            </div>
         </div>
    </div>
   </section>
   <section class="single mb-0 mb-md-4 mt-md-0 mt-3">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="single-detail-content mb-4">
                       <div class="col-12 px-0">
                           <h1 class="h4 mb-3 entry-title text-justify text-dark">{{languageName($product->name)}}</h1>
                           <div class="single-detail-meta my-3"> <span class="mr-3 mr-md-5"><i class="fa fa-user mr-2 text-primary"></i>{{$setting->company}}</span> <span class="mr-3 mr-md-5"><i class="fas fa-calendar-alt mr-2 text-primary"></i>{{date('d-m-Y', strtotime($product->created_at))}}</span>
                               <p class="mt-2"><span><span><a href="{{route('home')}}" data-wpel-link="internal">Trang Chủ</a> » <span><a href="{{route('allProduct')}}" data-wpel-link="internal">Mặt hàng nhập khẩu</a> » <strong class="breadcrumb_last" aria-current="page">{{languageName($product->name)}}</strong></span></span></span></p>
                           </div>
                           <div class="text-justify the-content">
                               <p><span style="font-weight: 400;">{!!languageName($product->description)!!}</span></p>
                           </div>
                           <div class="text-justify the-content">
                            <p><span style="font-weight: 400;">{!!languageName($product->content)!!}</span></p>
                        </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
</main>
@endsection

