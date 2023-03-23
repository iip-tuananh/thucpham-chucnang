@extends('layouts.main.master')
@section('title')
Câu hỏi thường gặp
@endsection
@section('description')

@endsection
@section('image')

@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="content" class="site-content">
    <div class="content-single">
       <div class="container container-single">
          <div class="nav-bredcrum">
             <div class="ngaytao-bv ">
                <div id="crumbs"><a href="{{route('home')}}">Trang chủ</a> / <a href="{{route('allreview')}}">Câu hỏi thường gặp</a></div>
             </div>
          </div>
          <main id="main" class="site-main">
             <div class="w-single container_news_detail">
               <div class="title_about  w-100">
                  <p class="h3"><span>Câu hỏi thường gặp</span></p>
               </div>
               
                <div class="row">
                    @foreach ($allreview as $item)
                    <div class="col-md-6 col-xs-12">
                        <div class="item-review">
                            <div class="img-review"><img style="width:70px; height:70px" src="{{$item->avatar}}" alt="" srcset=""></div>
                            <div class="content-review">
                                <strong>
                                    {{languageName($item->name)}}
                                </strong>
                                <br>
                                {{languageName($item->content)}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- .entry-content -->
             </div>
          </main>
          <!-- #main -->
{{--        
          <section class="news_other">
             <div class="container">
                <div class="title_about  w-100">
                   <p class="h3"><span>Tin liên quan</span></p>
                </div>
                <div class="khungtintuc w-100">
                    @foreach ($bloglq as $item)
                    @if($item->type_cate == $blog_detail->type_cate)
                        <div class="item_tintuc item_tintuckhac" style="display: block;">
                        <div class="img_tintuc">
                            <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                            <img width="2048" height="1365" src="{{$item->image}}" class="attachment-full size-full wp-post-image" alt="{{languageName($item->title)}}" decoding="async" loading="lazy" srcset="{{$item->image}} 2048w, {{$item->image}} 768w, {{$item->image}} 1920w, {{$item->image}} 1280w, {{$item->image}} 1536w, {{$item->image}} 300w, {{$item->image}} 450w, {{$item->image}} 600w" sizes="(max-width: 2048px) 100vw, 2048px" />                                   </a>
                        </div>
                        <p class="h4"><a ref="nofollow" href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></p>
                        </div>
                        @endif
                    @endforeach
               
                </div>
             </div>
          </section> --}}
       </div>
    </div>
 </div>
 <!-- #content -->
@endsection