@extends('layouts.main.master')
@section('title')
    {{ $detail_project->name }}
@endsection
@section('description')
    {{ $detail_project->description }}
@endsection
@section('image')
@endsection
@section('css')
    <style>
        table thead tr:nth-child(1) {
            background-color: #ea7a1f;
            color: #fff;
        }
    </style>
@endsection
@section('js')
@endsection
@section('content')
    <main id="page-content">
        <nav class="site-breadcrumb" aria-label="breadcrumb"
            style="background-image: url({{ asset('frontend/images/bg-breadcrumb.jpg') }})">
            <div class="container">
                <div class="h2 text-uppercase break-word text-white"><span
                        class="break-word d-block">{{ $detail_project->name }}</span></div>
            </div>
        </nav>
        <section class="single mb-0 mb-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-detail-content mb-4">
                            <div class="col-12 px-0">
                                <h1 class="h4 mb-3 entry-title text-justify text-dark">{{ $detail_project->name }}</h1>
                                <div class="single-detail-meta my-3"> <span class="mr-3 mr-md-5"><i
                                            class="fa fa-user mr-2 text-primary"></i>{{$setting->company}}</span> <span
                                        class="mr-3 mr-md-5"><i
                                            class="fas fa-calendar-alt mr-2 text-primary"></i>{{ date_format($detail_project->created_at, 'd/m/Y') }}</span>
                                </div>
                                <div class="text-justify">
                                    <p>{!! languageName($detail_project->description) !!}</p>
                                    <div class="text-justify the-content">
                                        {!! languageName($detail_project->content) !!}
                                        <div>
                                            <p>Liên hệ ngay với {{ $setting->company }} qua <span
                                                    style="color: #ff0000;"><strong>Hotline {{ $setting->phone1 }}</strong>
                                                </span>để được tư vấn trực tiếp hoặc để lại thông tin ngay dưới đây:</p>
                                            <div role="form" class="wpcf7" id="wpcf7-f6743-o1" lang="vi"
                                                dir="ltr">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form action="{{route('postcontact')}}" method="POST" class="wpcf7-form init"
                                                    novalidate="novalidate" data-status="init">
                                                    @csrf
                                                    <div style="display: none;"> <input type="hidden" name="_wpcf7"
                                                            value="6743"> <input type="hidden" name="_wpcf7_version"
                                                            value="5.5.3"> <input type="hidden" name="_wpcf7_locale"
                                                            value="vi"> <input type="hidden" name="_wpcf7_unit_tag"
                                                            value="wpcf7-f6743-o1"> <input type="hidden"
                                                            name="_wpcf7_container_post" value="0"> <input
                                                            type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                    </div>
                                                    <div class="home-contact__content">
                                                        <div class="page-heading">
                                                            <h2 class="text-uppercase"><span id="Yeu_cau_bao_gia">Yêu cầu
                                                                    báo giá</span></h2>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group"> <span
                                                                        class="wpcf7-form-control-wrap your-name"><input
                                                                            type="text" name="name" value=""
                                                                            size="40"
                                                                            class="wpcf7-form-control wpcf7-text form-control control-input"
                                                                            aria-invalid="false"
                                                                            placeholder="Nhập họ tên"></span></div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group"> <span
                                                                        class="wpcf7-form-control-wrap your-email"><input
                                                                            type="text" name="email"
                                                                            value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text form-control control-input"
                                                                            aria-invalid="false"
                                                                            placeholder="Nhập địa chỉ email"
                                                                            required></span></div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group"> <span
                                                                        class="wpcf7-form-control-wrap your-tel"><input
                                                                            type="text" name="phone" value=""
                                                                            size="40"
                                                                            class="wpcf7-form-control wpcf7-text form-control control-input"
                                                                            aria-invalid="false"
                                                                            placeholder="Nhập số điện thoại"></span></div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group"> <span
                                                                        class="wpcf7-form-control-wrap your-address"><input
                                                                            type="text" name="location"
                                                                            value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text form-control control-input"
                                                                            aria-invalid="false"
                                                                            placeholder="Nhập địa chỉ"></span></div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group"> <span
                                                                        class="wpcf7-form-control-wrap your-subject"><input
                                                                            type="text" name="mess"
                                                                            value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text form-control control-input"
                                                                            aria-invalid="false"
                                                                            placeholder="Thông tin cần báo giá"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12"> <button id ="send-btn" class="btn btn-gradient w-100"
                                                                    type="submit" disabled>Gửi</button></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
    </main>
@endsection
