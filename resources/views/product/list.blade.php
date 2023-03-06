@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<main id="page-content">
   <nav class="site-breadcrumb" aria-label="breadcrumb" style="background-image: url({{asset('frontend/images/bg-breadcrumb.jpg')}})">
       <div class="container">
           <div class="h2 text-uppercase text-white text-center">Danh mục: <span>{{$title}}</span></div>
       </div>
   </nav>
   <section class="archive-product mb-3 mb-lg-5">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="archive-product-content">
                       <div class="archive-product-head d-flex justify-content-between align-items-center">
                           <nav aria-label="breadcrumb">
                               <ol class="breadcrumb bg-transparent px-0 mb-0 mb-md-3">
                                   <li class="breadcrumb-item"><a href="{{route('home')}}" data-wpel-link="internal">Trang chủ</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                               </ol>
                           </nav>
                       </div>
                       <div class="row archive-article-list">
                        @foreach ($list as $listProduct)
                        @php
                            $img = json_decode($listProduct->images);
                        @endphp
                           <div class="col-lg-4">
                               <div class="card mb-4 border-primary">
                                <a class="w-100" href="{{route('detailProduct',['slug'=>$listProduct->slug])}}" title="{{languageName($listProduct->name)}}" data-wpel-link="internal"> 
                               <img class="c-listProduct-img" width="350" height="236" src="{{$img[0]}}"
                                data-src="{{$img[0]}}"
                                 class="card-img-top wp-post-image lazyloaded" alt="{{languageName($listProduct->name)}}" 
                                 data-srcset="{{$img[0]}}" 
                                  data-sizes="(max-width: 350px) 100vw, 350px" sizes="(max-width: 350px) 100vw, 350px" 
                                  srcset="{{$img[0]}}"> </a>
                                   <div class="card-body">
                                       <h5 class="card-title"> <a href="{{route('detailProduct',['slug'=>$listProduct->slug])}}" title="{{languageName($listProduct->name)}}" data-wpel-link="internal">{{languageName($listProduct->name)}}</a></h5>
                                       <p class="card-text text-secondary mb-2"><span class="text-primary"><i class="fa fa-clock mr-1"></i>{{date('d-m-Y', strtotime($listProduct->created_at))}}</span><span class="text-primary small ml-3 mr-3" id="rateMe"> <i class="fas fa-star py-1 px-0 rate-popover" data-index="0" data-html="true" data-toggle="popover" data-placement="top" title="Very bad"></i> <i class="fas fa-star py-1 px-0 rate-popover" data-index="1" data-html="true" data-toggle="popover" data-placement="top" title="Poor"></i> <i class="fas fa-star py-1 px-0 rate-popover" data-index="2" data-html="true" data-toggle="popover" data-placement="top" title="OK"></i> <i class="fas fa-star py-1 px-0 rate-popover" data-index="3" data-html="true" data-toggle="popover" data-placement="top" title="Good"></i> <i class="fas fa-star py-1 px-0 rate-popover" data-index="4" data-html="true" data-toggle="popover" data-placement="top" title="Excellent"></i> </span></p>
                                       <div class="card-text text-secondary text-des">
                                         {!!languageName($listProduct->description)!!}
                                       </div>
                                   </div>
                               </div>
                           </div> 
                        @endforeach
                       </div>
                       <nav class="d-flex justify-content-center">
                        {{$list->links()}}
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </section>
</main>
@endsection

