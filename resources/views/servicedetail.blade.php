@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="page-content">
    <nav class="site-breadcrumb" aria-label="breadcrumb" style="background-image: url({{asset('frontend/images/bg-breadcrumb.jpg')}})">
        <div class="container">
            <div class="h2 text-uppercase break-word text-white"><span class="break-word d-block">{{($detail_service->name)}}</span></div>
        </div>
    </nav>
    <section class="single mb-0 mb-md-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-detail-content mb-4">
                        <div class="col-12 px-0">
                            <h1 class="h4 mb-3 entry-title text-justify text-dark">{{($detail_service->name)}}</h1>
                            <div class="single-detail-meta my-3"><span class="mr-3 mr-md-5"><i class="fas fa-calendar-alt mr-2 text-primary"></i>{{date_format($detail_service->created_at,'d/m/Y')}}</span></div>
                            <div class="text-justify">
                                <p style="text-align: justify;">
                                    <span style="font-weight: 400;">
                                        {!!languageName($detail_service->description)!!}
                                    </span>
                                </p>
                                <div class="text-justify the-content">
                                    {!!languageName($detail_service->content)!!}
                                <div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection