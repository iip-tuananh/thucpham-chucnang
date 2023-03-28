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
<div id="content" class="site-content">
	<div class="page-contact">
	   <main>
		  <section class="bannerabout w-100" style="background-color:#307f2e ">
			 <div class="box_desc_banner">
				<div class="container">
				   <div class="box_desc_banner1 active">
					  <h1>
						 <p style="    color: #ffffff;"> LIÊN HỆ </p>
					  </h1>
				   </div>
				</div>
			 </div>
		  </section>
		  <section class="nav-bredcrum">
			 <div class="container">
				<div class=" w-100 ngaytao-bv "> 
				   <a href="{{route('home')}}" title="Trang chủ"> Trang chủ </a>  / <span>Liên hệ</span> 
				</div>
			 </div>
		  </section>
		  <section class="section_lienhe">
			 <div class="container">
				<div class="title_lienhe  w-100">
				   <h2>Liên hệ với chúng tôi</h2>
				</div>
				<div class="khunglienhe w-100" style="margin-top: 20px;">
				   <div class="row">
					  <div class="col-md-6 col-xs-12 noidunglienhe">
						 <h3 class="uppercase" style="box-sizing: border-box; color: rgb(51, 51, 51); width: 640.825px; margin-top: 0px; margin-bottom: 0.5em; text-rendering: optimizespeed; font-size: 1.25em; font-family: Roboto, sans-serif; line-height: 1.2; letter-spacing: 0.05em; text-transform: uppercase; background-color: rgb(255, 255, 255);"><strong><span style="color:#bd221e;">{{$setting->company}}</span></strong></h3>
						
						 <h3 class="uppercase" style="box-sizing: border-box; color: rgb(51, 51, 51); width: 640.825px; margin-top: 0px; margin-bottom: 0.5em; text-rendering: optimizespeed; font-size: 1.25em; font-family: Roboto, sans-serif; line-height: 1.2; letter-spacing: 0.05em; text-transform: uppercase; background-color: rgb(255, 255, 255);"><strong><span style="color:#bd221e;">TRỤ SỞ CHÍNH</span></strong></h3>
						 <p style="box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);">{!!$setting->address1!!}</p>
						 <div class="box_hotline_contact">
							<p>Hotline: <span>{{$setting->phone1}}</span></p>
							<p>Email: <span>{{$setting->email}}</span></p>
							<p>Website: <span>https://zentrum.vn/</span></p>
						 </div>
					  </div>
					  <div class="col-md-6 col-xs-12 formlienhe">
						 <div role="form" class="wpcf7" id="wpcf7-f2637-o1" lang="vi" dir="ltr">
							<div class="screen-reader-response">
							   <p role="status" aria-live="polite" aria-atomic="true"></p>
							   <ul></ul>
							</div>
							<form action="/vi/lien-he/#wpcf7-f2637-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
							   <div style="display: none;">
								  <input type="hidden" name="_wpcf7" value="2637" />
								  <input type="hidden" name="_wpcf7_version" value="5.5.6" />
								  <input type="hidden" name="_wpcf7_locale" value="vi" />
								  <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2637-o1" />
								  <input type="hidden" name="_wpcf7_container_post" value="0" />
								  <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
							   </div>
							   <div class="input_lienhe">
								  <span class="wpcf7-form-control-wrap text-902"><input type="text" name="text-902" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tên *" /></span>
							   </div>
							   <div class="input_lienhe">
								  <span class="wpcf7-form-control-wrap text-525"><input type="text" name="text-525" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Email *" /></span>
							   </div>
							   <div class="input_lienhe">
								  <span class="wpcf7-form-control-wrap text-663"><input type="text" name="text-663" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Điện thoại *" /></span>
							   </div>
							   <div class="input_lienhe">
								  <span class="wpcf7-form-control-wrap text-848"><input type="text" name="text-848" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Địa chỉ *" /></span>
							   </div>
							   <div class="input_lienhe">
								  <span class="wpcf7-form-control-wrap tieude"><input type="text" name="tieude" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tiêu đề *" /></span>
							   </div>
							   <div class="input_lienhe">
								  <p>                                <span class="wpcf7-form-control-wrap noidung"><textarea name="noidung" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nội dung"></textarea></span></p>
							   </div>
							   <div class="input_lienhe input_lienhe1">
								  <input type="submit" value="Gửi đi" class="wpcf7-form-control has-spinner wpcf7-submit" />
							   </div>
							   <p style="display: none !important;">
								  <label>&#916;<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="15"/><script>document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );</script>
							   </p>
							   <div class="wpcf7-response-output" aria-hidden="true"></div>
							</form>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </section>
		  <section class="section_map">
			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.437245878514!2d106.6888895141164!3d10.777784862117395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fc3631bb125%3A0x2c57b065dcfed645!2sV%20Live%20International!5e0!3m2!1svi!2s!4v1640279814710!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		  </section>
		  <script type="text/javascript">
			 $('#frmcontact input[type=text]')
			   .on('invalid', function(){
				 return this.setCustomValidity('Vui lòng điền trường này');
			   })
			   .on('input', function(){
				 return this.setCustomValidity('');
			   });
			   
		  </script>                    
	   </main>
	</div>
 </div>
 <!-- #content -->
@endsection
