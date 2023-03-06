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
@endsection
@section('js')
@endsection
@section('content')
<main id="page-content">
    <nav class="site-breadcrumb" aria-label="breadcrumb"  style="background-image: url({{asset('frontend/images/bg-breadcrumb.jpg')}})">
        <div class="container">
            <div class="h2 text-uppercase break-word text-white"><span class="break-word d-block">{{languageName($blog_detail->title)}}</span></div>
        </div>
    </nav>
    <section class="single mb-0 mb-md-4 mt-md-0 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-detail-content mb-4">
                        <div class="col-12 px-0">
                            <h1 class="h4 mb-3 entry-title text-justify text-dark">{{languageName($blog_detail->title)}}</h1>
                            <div class="single-detail-meta my-3"> <span class="mr-3 mr-md-5"><i class="fa fa-user mr-2 text-primary"></i>{{$setting->company}}</span> <span class="mr-3 mr-md-5"><i class="fas fa-calendar-alt mr-2 text-primary"></i>
                                {{date_format($blog_detail->created_at,'d/m/Y')}}
                            </span>
                                <p class="mt-2"><span><span><a href="{{route('home')}}" data-wpel-link="internal">Trang Chủ</a> » <span><a href="{{route('allListBlog')}}" data-wpel-link="internal">Tin tức</a> » <strong class="breadcrumb_last" aria-current="page">{{languageName($blog_detail->title)}}</strong></span></span></span></p>
                            </div>
                             <div class="text-justify the-content">
                                    {!!languageName($blog_detail->description)!!}
                            <div>   
                            <div class="text-justify the-content">
                                    {!!languageName($blog_detail->content)!!}
                            <div>                             
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection