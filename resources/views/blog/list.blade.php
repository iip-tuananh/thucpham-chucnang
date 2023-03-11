@extends('layouts.main.master')
@section('title')
{{ $title_page }}
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{ url('' . $banners[0]->image) }}
@endsection
@section('css')
@endsection
@section('content')
<div id="content" class="site-content">
   <section class="bannerabout w-100" style="background: url({{asset('frontend/img/bannertrangtintuc-16401453093.png')}}) no-repeat center; ">
      <div class="box_desc_banner">
         <div class="container">
            <div class="box_desc_banner1 active">
               <p style="    color: #bd221e;">TẾ BÀO KHỎE MẠNH <br>
                  CƠ THỂ KHỎE MẠNH <br>
                  CUỘC SỐNG HẠNH PHÚC <br>
               </p>
            </div>
         </div>
      </div>
   </section>
   <section class="nav-bredcrum">
      <div class="container">
         <div class=" w-100 ngaytao-bv "> 
            <a href="{{route('home')}}" title="Trang chủ"> Trang chủ </a>  / <span>  {{ $title_page }}</span> 
         </div>
      </div>
   </section>
   <section class="section_tintuc">
      <div class="container">
         <div class="tabs_tintuc w-100">
            <ul class="tabs">
               @php
               $routecu = Route::current();
               @endphp
               @foreach ($blogCate as $cate)
               @foreach ($cate->typeCate as $type)
               @if ($type->slug== $slug_page)
               <li class="active">
                  @else
               <li>
                  @endif
                  <h2><a href="{{route('listTypeBlog',['slug'=>$type->slug])}}">{{languageName($type->name)}}</a></h2>
               </li>
               @endforeach
               @endforeach
            </ul>
         </div>
         <div class="khungtintuc w-100">
            @foreach ($blog as $item)
            <div class="item_tintuc ">
               <div class="img_tintuc">
                  <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                  <img width="600" height="450" src="{{$item->image}}" class="attachment-full size-full wp-post-image" alt="Top 6 thực phẩm chức năng hoa Anh Thảo chất lượng được chị em tin dùng" decoding="async" loading="lazy" srcset="{{$item->image}} 600w, {{$item->image}} 300w" sizes="(max-width: 600px) 100vw, 600px" />                                </a>
               </div>
               <h3><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h3>
               <span>{{$item->created_at}}</span>
               <div class="limit-text-3">
                  {!!languageName($item->description)!!}
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
</div>
<!-- #content -->
@endsection