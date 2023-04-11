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
<main>
    <section class="nav-bredcrum">
       <div class="container">
          <div class=" w-100 ngaytao-bv "> 
             <a href="{{route('home')}}" title="Trang chủ"> Trang chủ </a>  / <span>Hợp tác kinh doanh</span> 
          </div>
       </div>
    </section>
    <section class="section_chungnhan">
       <div class="container">
          <div class="title_chungnhan  w-100">
             <h1><span>Chứng nhận - tài liệu</span></h1>
          </div>
          <div class="danhmucchungnhan w-100">
             <ul class="tabs">
                @foreach ($list  as$key=>$cate)
            
                @if($key < 1)
                    <li class="tab-link tab-29 active" data-tab="#tab-{{$cate->id}}">
               @else
               <li class="tab-link tab-29 " data-tab="#tab-{{$cate->id}}">
               @endif
                    <h2 style="margin: 0"><span>{{languageName($cate->name)}}</span></h2>

                    </li>
                @endforeach
               
             </ul>
          </div>
       </div>
    </section>
    <section class="section_khungchungnhan">
       <div class="container">
        @foreach ($list as $key=>$cate)
        @if($key < 1)
            <div id="tab-{{$cate->id}}" style="margin-top: 0" class="tab-content active">
             @else
               <div id="tab-{{$cate->id}}" style="margin-top: 0" class="tab-content ">
                  @endif
            <div class="grid-chungnhan">
                @foreach ($cate->services as $item)
      
                    <div class="box_chungnhan">
                        <div class="img_chungnhan">
                            <a data-fancybox="gallery" data-thumb="{{$item->image}}" href="{{$item->image}}"><img src="{{$item->image}}"></a>
                        </div>
                    </div>
                @endforeach
           
            </div>
            </div>
        @endforeach
     
       </div>
    </section>
 </main>
 </div>
 </div><!-- #content -->
@endsection
