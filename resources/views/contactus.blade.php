@extends('layouts.main.master')
@section('title')
    Liên hệ với chúng tôi
@endsection
@section('description')
    Liên hệ với chúng tôi
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="page-content">
	<nav class="site-breadcrumb  bg-contact" aria-label="breadcrumb" style="background-image: url({{url('frontend/images/bg-breadcrumb.jpg')}})">
		<div class="container">
			<h2 class="text-uppercase">Liên hệ<span class="text-truncate"> chúng tôi</span></h2>
		</div>
	</nav>
	<section class="box-page contact-page">
		<div class="container">
			<div class="contact-head">
				<div class="contact-title"> Cảm ơn bạn! <br> Đã quan tâm đến {{$setting->company}} <br></div>
				<div class="desc"> Chúng tôi là đơn vị đi đầu lĩnh vực Xuất nhập khẩu, cung cấp dịch vụ Nhập
					khẩu chính ngạch hàng hoá từ Trung Quốc về Việt Nam.</div>
			</div>
			<div class="contact-body">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-6">
						<div class="left">
							<div class="box-img"> <noscript>
								<img data-src="{{asset('frontend/images/contact-img.png')}}" 
									class="img-w100 lazyload" src="{{asset('frontend/images/contact-img.png')}}">
									<noscript><img src="{{asset('frontend/images/contact-img.png')}}" class="img-w100">
									</noscript><img src="{{asset('frontend/images/contact-img.png')}}" 
									data-src="{{asset('frontend/images/contact-img.png')}}" class="img-w100 lazyloaded"></div>
							<div class="box-body">
								<div class="contact-form-title">Liên hệ với {{$setting->company}}</div>
								<div class="desc text-uppercase">{{$setting->webname}}</div>
								<ul class="mb-3">
									<h4 class="contact-page_title">Tại Hà Nội</h4>
									@foreach (json_decode($setting->address1) as $item)
										@if ($item->address != "")
										<li> <span class="box-icon"> <i class="fa fa-map-marked-alt"></i>
										</span> <span>Văn phòng : {{$item->address}}</span></li>
										@endif
									@endforeach
									<li> <span class="box-icon"> <i class="fa fa-phone-alt"></i> </span>
										<span>Hotline : <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a> 
											@if ($setting->phone2)
											<br> Hotline 2 : <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a><br>
											@endif
										</span>
									</li>
									<li> <span class="box-icon"> <i class="fa fa-envelope"></i> </span>
										<span>{{$setting->email}}</span>
									</li>
									<li> <span class="box-icon"> <i class="fa fa-clock"></i> </span>
										<span>Giờ Làm Việc: 8:00-12:00 &amp; 13:30-17:00 Thứ 2 - Thứ
											7</span>
									</li>
								</ul>
								<ul>
									<h4 class="contact-page_title">Tại Bẳng Tường, Trung Quốc</h4>
									@foreach (json_decode($setting->address3) as $item)
										@if ($item->name != "")
											<p class="mb-2 mb-md-3">
												{{$item->name}}
											</p>
										@endif
										@if ($item->name_code != "")
											<p class="mb-2 mb-md-3">
												收货名： {{$item->name_code}}
											</p>
										@endif
										@if ($item->phone_number != "")
											<p class="mb-2 mb-md-3">
												电话 : <a href="tel:{{$item->phone_number}}"> {{$item->phone_number}} </a>
											</p>
										@endif
										@if ($item->address != "")
											<p class="mb-2 mb-md-3">
												收货地址：{{$item->address}}
											</p>
										@endif
										@if ($item->note != "")
											<p class="mb-2 mb-md-3">
												请标注外箱大写: {{$item->note}}
											</p>
										@endif
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-6 mt-4 mt-lg-0 contact-group-order">
						<div class="right order-second-show mb-5">
							<div class="contact-form">
								<div class="contact-form-title">Gửi tin nhắn đến chúng tôi</div>
								<div role="form" class="wpcf7" id="wpcf7-f8499-o1" lang="vi" dir="ltr">
									<div class="screen-reader-response">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
										<ul></ul>
									</div>
									<form action="{{route('postcontact')}}" method="POST" class="wpcf7-form init" novalidate="novalidate" data-status="init">
										@csrf
										<div class="form-group">
											<span class="wpcf7-form-control-wrap your-name">
												<input type="text" name="name" value="" size="40" class="control-inputs wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nhập họ tên *">
											</span>
										</div>
										<div class="form-group">
											<span class="wpcf7-form-control-wrap your-phone">
												<input type="tel" required name="phone" value="" class="control-inputs wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control" aria-required="true" aria-invalid="false" placeholder="Số điện thoại *">
											</span>
										</div>
										<div class="form-group">
											<span class="wpcf7-form-control-wrap your-email">
												<input type="text" name="email" value="" size="40" class="control-inputs wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Email">
											</span>
										</div>
										<div class="form-group">
											<span class="wpcf7-form-control-wrap your-note">
												<textarea name="mess" cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea form-control control-inputs" aria-invalid="false" placeholder="Nội dung"></textarea>
											</span>
										</div>
										<div class="box-button text-center">
											<input disabled id="contact-btn" type="submit" value="Gửi tin nhắn" class="wpcf7-form-control has-spinner wpcf7-submit btn btn-gradient">
										</div>
									</form>
								</div>
								<div class="contact-map mt-3">
									{!!$setting->iframe_map!!}
								</div>
							</div>
						</div>
						<div class="order-first-show">
							<h4 class="contact-page_title">Tại Quảng Châu, Trung Quốc</h4>
							@foreach (json_decode($setting->address2) as $item)
								@if ($item->name != "")
									<p class="mb-2 mb-md-3">
										{{$item->name}}
									</p>
								@endif
								@if ($item->name_code != "")
									<p class="mb-2 mb-md-3">
										收货名： {{$item->name_code}}
									</p>
								@endif
								@if ($item->phone_number != "")
									<p class="mb-2 mb-md-3">
										电话 : <a href="tel:{{$item->phone_number}}"> {{$item->phone_number}} </a>
									</p>
								@endif
								@if ($item->address != "")
									<p class="mb-2 mb-md-3">
										收货地址：{{$item->address}}
									</p>
								@endif
								@if ($item->note != "")
									<p class="mb-2 mb-md-3">
										请标注外箱大写: {{$item->note}}
									</p>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection
