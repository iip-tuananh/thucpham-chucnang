@extends('layouts.main.master')
@section('title')
    {{ $pagecontentdetail->title }}
@endsection
@section('description')
    {{ $pagecontentdetail->title }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<style>
    nav.site-breadcrumb {
        height: 300px;
    color: #307f2e;
}
</style>
    <main id="page-content">
        <nav class="site-breadcrumb" aria-label="breadcrumb"
            style="background-image: url({{ asset('frontend/img/tuan.jpg')}})">
            <div class="container">
                <div class="h2 text-uppercase break-word text-white"><span class="break-word d-block">
                        {{ $pagecontentdetail->title }}
                    </span></div>
            </div>
        </nav>
        <br>
        <section class="single mb-0 mb-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-detail-content mb-4">
                            <div class="col-12 px-0">
                               
                                <div class="single-detail-meta my-3"><span
                                        class="mr-3 mr-md-5"><i
                                            class="fas fa-calendar-alt mr-2 text-primary"></i>{{date_format($pagecontentdetail->created_at,'d/m/Y')}}</span>
                                </div>
                                 
                                <div class="text-justify the-content">
                                        {!!($pagecontentdetail->content)!!}
                                <div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
