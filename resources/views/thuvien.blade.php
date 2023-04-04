@extends('layouts.main.master')
@section('title')
Thư viện Zentrum
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
                <div id="crumbs"><a href="{{route('home')}}">Trang chủ</a> / <a href="{{route('allreview')}}">Thư viện Zentrum</a></div>
             </div>
          </div>
          <main id="main" class="site-main">
             <div class="w-single container_news_detail">
               <div class="title_about  w-100">
                  <p class="h3"><span>Thư viện Zentrum</span></p>
               </div>
               <br>
               <br>
               
                <div class="row">
                  
                    <article class="post-587 page type-page status-publish hentry">
                        <div class="entry-content">
                                      <p>Thư viện Zentrum là nơi tập hợp các tài liệu cũng như các phản hồi liên quan đến Zentrum. Các thông tin liên quan được sắp xếp theo từng danh mục cụ thể và liên kết minh chứng về phản hồi của người dùng, phân tích của chuyên gia, tài liệu, chứng chỉ&#8230;</p>
                                      @foreach ($thuvien as $item)
                                      <p><strong>{{$item->name}}</strong></p>
                                      <p>{{$item->image}} <a href="{{$item->link}}" target="_blank" rel="nofollow noopener"><strong>Xem chi tiết</strong></a></p>
                                      @endforeach
                        </div>
                    </article>
         
                </div>
  
             </div>
          </main>
  
       </div>
    </div>
 </div>
 <!-- #content -->
@endsection