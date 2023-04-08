@extends('layouts.main.master')
@section('title')
Câu chuyện thương hiệu
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
                  
                    <article class="post-587 page type-page status-publish hentry">
                        <div class="entry-content" style="font-size: 17px">
                                      {{languageName($cauchuyen->content)}}
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