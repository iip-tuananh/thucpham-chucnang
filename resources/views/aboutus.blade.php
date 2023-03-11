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
   <section class="bannerabout bannerabout1  w-100" style="background: url(https://vlive-international.vn/wp-content/themes/v4/assets/images/bannertranggioithieu-16401452165.png) no-repeat center; ">
      <div class="box_desc_banner">
         <div class="container">
            <div class="box_desc_banner1 active">
               <h1>
                  <p style="color:#fff"><b>Niềm đam mê sức khỏe </b> <br>của chúng tôi là nguyên<br> nhân ra đời <br><b>của chúng tôi</b></p>
               </h1>
            </div>
         </div>
      </div>
   </section>
   <section class="nav-bredcrum">
      <div class="container">
         <div class=" w-100 ngaytao-bv "> 
            <a href="{{route('home')}}" title="Trang chủ"> Trang chủ </a>  / <span>Về chúng tôi</span>
         </div>
      </div>
   </section>
   <section class="section_tamnhinsumenh" id="tamnhinsumenh">
      <div class="container">
         <div class="khungsanglap w-100">
            <div class="title">
               <h2><span style="text-transform:uppercase">giới thiệu chung</span></h2>
            </div>
         </div>
         <div class="khungsumenh">
            <div class="left_sumenh">
               <div class="title">
                  <span>Giới thiệu</span>
               </div>
            </div>
            <div class="right_sumenh">
             
               <div class="content_sumenh">
                  {!!$gioithieu->content!!}
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section_tamnhinsumenh" id="tamnhinsumenh">
      <div class="container">
         <div class="khungsanglap w-100">
            <div class="title">
               <h2><span>TẦM NHÌN &amp; SỨ MỆNH</span></h2>
            </div>
         </div>
         <div class="khungtamnhin">
            <div class="left_tamnhin">
               <div class="title">
                  <span>TẦM NHÌN</span>
               </div>
            </div>
            <div class="right_tamnhin">
               <div class="mota_tamnhin">
                  Luôn dẫn đầu về sản phẩm chăm sóc sức khoẻ toàn diện với công nghệ tiên tiến nhất.                              
               </div>
            </div>
         </div>
         <div class="khungsumenh">
            <div class="left_sumenh">
               <div class="title">
                  <span>SỨ MỆNH</span>
               </div>
            </div>
            <div class="right_sumenh">
               <div class="mota_sumenh">
                  Luôn luôn cống hiến và không ngừng nghiên cứu để cho ra đời dòng sản phẩm thân thiện với cơ thể và hệ sinh lý nội tại của con người, giúp con người cải thiện sức khoẻ toàn diện trong thời gian ngắn nhất, và lan toả giải pháp tầm soát bệnh nền đến cộng đồng bằng cả trái tim.
               </div>
               <div class="content_sumenh">
                  <div class="item_muctieu">
                     <div class="img_muctieu">
                        <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/tm1-16379836961.png">
                     </div>
                     <div class="des_muctieu">
                        <span>Sức khỏe</span>
                        <p>Hỗ trợ và chăm sóc sức khỏe cho từng cá nhân thông qua những sản phẩm chất lượng</p>
                     </div>
                  </div>
                  <div class="item_muctieu">
                     <div class="img_muctieu">
                        <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/tm2-16379837162.png">
                     </div>
                     <div class="des_muctieu">
                        <span>Hạnh phúc</span>
                        <p>Ủng hộ thành quả cá nhân để lan tỏa hạnh phúc</p>
                     </div>
                  </div>
                  <div class="item_muctieu">
                     <div class="img_muctieu">
                        <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/tm3-16379837297.png">
                     </div>
                     <div class="des_muctieu">
                        <span> Phồn vinh</span>
                        <p>Tạo ra một doanh nghiệp không bị rào cản để tăng trưởng và phát triển kinh tế bền vững</p>
                     </div>
                  </div>
                  <div class="item_muctieu">
                     <div class="img_muctieu">
                        <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/tm4-16379837463.png">
                     </div>
                     <div class="des_muctieu">
                        <span>Phát triển</span>
                        <p>Thúc đẩy cá nhân phát triển không ngừng thông qua rèn luyện và hỗ trợ</p>
                     </div>
                  </div>
                  <div class="item_muctieu">
                     <div class="img_muctieu">
                        <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/tm5-16379837649.png">
                     </div>
                     <div class="des_muctieu">
                        <span> Phục vụ</span>
                        <p>Vun đắp trách nhiệm hợp tác và cống hiến cho xã hội</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section_nhasanglap" id="nhasanglap">
      <div class="container">
         <div class="khungsanglap w-100">
            <div class="title">
               <h2><span>Nhà sáng lập</span></h2>
           
            </div>
            <div class="row">
               @foreach ($founders as $item)
                  <div class=" col-md-6 col-xs-12" >
                     <div class="img_dd">
                        <img src="{{$item->image}}">
                     </div>
                     <div class="des_dd">
                        
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->position}}</p>
                     </div>
                     <div class="content_dd">
                        <div>Nhà Sáng lập &amp; cũng là Chủ Tịch Hội đồng Quản Trị Công ty VIM Consultancy (vim2u.com) – Công ty Tư vấn Đăng ký Kinh doanh, Dự án Đầu tư Đông Nam Á, BOT, BTO, BOO, BT, PPP, Đầu tư tại Đông Nam Á; Ông cũng là người sáng lập kiêm Giám đốc điều hành toàn cầu của V Live International.</div>
                        <div>&nbsp;</div>
                        <div>* Ông vinh dự được trao quyền đăng cai tổ chức Hội nghị thượng đỉnh Châu Á Thái Bình Dương của Phòng Thương mại Thanh niên Quốc tế (JCI) năm 2004 tại Penang, Malaysia và là Giám đốc Hội nghị. (<a href="https://www.youtube.com/watch?v=wAx0i8NyewM" target="_blank"><span style="color:#bd221e;">XEM VIDEO</span></a>)</div>
                        <div>* Ông đã thu hút thành công khoảng 5.000 người tham gia từ 20 quốc gia và tạo <span style="white-space: pre;">r</span>a khoản đầu tư lên đến 30 triệu RM;&nbsp;</div>
                        <div>* Ông còn là diễn giả của MATRADE Malaysia về chủ đề “Cách đầu tư vào một chuỗi cửa hàng ở Hà Nội tại Việt Nam”;&nbsp;</div>
                        <div>* Ông chịu trách nhiệm về các hoạt động đối ngoại cao cấp trong các chuyến thăm từ thiện kéo dài ba ngày của cựu Thủ tướng Malaysia, Tun Abdullah đến Thành phố Hồ Chí Minh, Việt Nam</div>
                     </div>
                  </div>
               @endforeach
             
            </div>
         </div>
      </div>
   </section>
   {{-- <section class="section_gioithieusp" id="giatrikhacbiet">
      <div class="container">
         <div class="khunggioithieusp w-100">
            <div class="left_gioithieusp">
               <div class="title">
               </div>
            </div>
            <div class="right_gioithieusp">
               <div class="title">
                  <span>Giá trị khác biệt</span>
               </div>
               <div class="mota_gioithieusp w-100">
                  Bạn có biết cơ thể cần hơn 160 yếu tố sức khỏe không? Nhưng liệu các tế bào của bạn đủ khỏe để có thể hấp thu hết tất cả? Mỗi sản phẩm của V Live International đều được thiết kế để giúp bạn phục hồi các Tế bào Khỏe mạnh và Sức khỏe Tráng kiện thông qua Công nghệ từ Đức.                              
               </div>
            </div>
         </div>
         <div class="title2_gtsp w-100">
            <h2>V LIVE ĐÃ SẴN SÀNG!</h2>
         </div>
         <div class="khunggioithieusp khunggioithieusp1 w-100">
            <div class="left_gioithieusp">
               <div class="img_gtsp">
                  <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/hinhgtsp-16378487674.png">
               </div>
            </div>
            <div class="right_gioithieusp">
               <div class="content_gioithieusp w-100">
                  <div>
                     <p style="box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);">Mỗi sản phẩm của V Live International đều được thiết kế để hỗ trợ bạn&nbsp;<span style="box-sizing: border-box; font-weight: bolder;">phục hồi các tế bào khỏe mạnh và sức khỏe lành mạnh</span>&nbsp;bằng&nbsp;<span style="box-sizing: border-box; font-weight: bolder;">công nghệ của Đức:</span></p>
                     <ul style="box-sizing: border-box; list-style-position: initial; list-style-image: initial; margin-top: 0px; padding: 0px; margin-bottom: 1.3em; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);">
                        <li style="box-sizing: border-box; line-height: 1.5; text-align: justify; margin-bottom: 0.1em; margin-left: 3em;">HBA – High Bio-Availability</li>
                        <li style="box-sizing: border-box; line-height: 1.5; text-align: justify; margin-bottom: 0.1em; margin-left: 3em;">NSP – Nutrient Sequence Precursor</li>
                        <li style="box-sizing: border-box; line-height: 1.5; text-align: justify; margin-bottom: 0.1em; margin-left: 3em;">TWS – Total Wellness Solution</li>
                     </ul>
                     <p style="box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-weight: bolder;">HBA – High Bio-Availability (Tính sinh khả dụng cao)</span><br style="box-sizing: border-box;">
                        Các dưỡng chất cần thiết để nuôi dưỡng tế bào cơ thể phải có năng lượng sinh học cao, nhờ vậy mới có thể kích hoạt các tế bào để hoạt động mỗi ngày với hiệu suất tối ưu nhất, bên cạnh đó vẫn giữ cho cơ thể bạn luôn khỏe mạnh.
                     </p>
                     <p style="box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-weight: bolder;">NSP – Nutrient Sequence Precursor (Tiền tố trình tự dinh dưỡng)</span><br style="box-sizing: border-box;">
                        Thực phẩm không phải là nguồn cung cấp dưỡng chất đầy đủ duy nhất. Thông qua công nghệ, cơ thể có thể hấp thu đồng thời tất cả các dưỡng chất thiết yếu.
                     </p>
                     <p style="box-sizing: border-box; margin-bottom: 1.3em; margin-top: 0px; text-align: justify; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-weight: bolder;">TWS – Total Wellness Solution (Chăm sóc sức khỏe toàn diện)</span><br style="box-sizing: border-box;">
                        Đây là giải pháp phát triển mang tính khoa học giúp lấy lại cân bằng và sức khỏe, mỗi sản phẩm là một thiết kế nhắm đến việc sửa chữa và tái tạo tế bào, mang lại kết quả trên từng cá nhân.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   {{-- <section class="section_chungnhan">
      <div class="container">
         <div class="bannerchungnhan w-100">
            <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/bannerchungnhan-16378491210.png">
         </div>
      </div>
   </section>
   <section class="section_trietly" id="trietly">
      <div class="container">
         <div class="khungtrietly w-100">
            <div class="left_trietly">
               <div class="title">
                  <span>Tế bào khỏe mạnh, <br> cơ thể tráng kiện!</span>
               </div>
            </div>
            <div class="right_trietly">
               <div class="title">
                  <span>Triết lý của chúng tôi</span>
               </div>
               <div class="content_trietly w-100">
                  <div background-color:="" font-size:="" helvetica="" id="input_line_0" lucida="" microsoft="" san="" sans="" segoe="" style="padding-top: 5px; color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><strong><span data-mention="Chúng tôi phát hiện ra rằng muốn giữ cho vóc dáng khỏe đẹp thì phải giữ cho các tế bào cơ thể khỏe mạnh, có như vậy, cơ thể mới hấp thu được nhiều dưỡng chất hơn. Có lẽ không nhiều người biết rằng tế bào của chúng ta sẽ suy giảm dần nếu không thể hấp thu dưỡng chất và khoáng chất cần thiết mỗi ngày." id="input_part_0" style="white-space: pre-wrap;">Chúng tôi phát hiện ra rằng muốn giữ cho vóc dáng khỏe đẹp thì phải giữ cho các tế bào cơ thể khỏe mạnh, có như vậy, cơ thể mới hấp thu được nhiều dưỡng chất hơn. Có lẽ không nhiều người biết rằng tế bào của chúng ta sẽ suy giảm dần nếu không thể hấp thu dưỡng chất và khoáng chất cần thiết mỗi ngày.</span></strong></span></div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="padding-top: 5px; color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_1" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="color:#bc1f1b;"><span style="font-size:22px;"><span data-mention="Một số yếu tố khác góp phần làm suy giảm tế bào và tổn hại sức khỏe:" id="input_part_0" style="white-space: pre-wrap;">Một số yếu tố khác góp phần làm suy giảm tế bào và tổn hại sức khỏe:</span></span></span></strong></span></div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_2" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><span data-mention="Thiếu không khí sạch" id="input_part_0" style="white-space: pre-wrap;">- Thiếu không khí sạch</span></span></div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_3" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><span data-mention="Nghỉ ngơi không đầy đủ" id="input_part_0" style="white-space: pre-wrap;">- Nghỉ ngơi không đầy đủ</span></span></div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_4" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><span data-mention="Áp lực và lối sống không lành mạnh khiến cho nồng độ pH với mức axit trong cơ thể vượt ngưỡng cùng với sự tích tụ độc tố cao" id="input_part_0" style="white-space: pre-wrap;">- Áp lực và lối sống không lành mạnh khiến cho nồng độ pH với mức axit trong cơ thể vượt ngưỡng cùng với sự tích tụ độc tố cao</span></span></div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_5" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><span data-mention="Ăn quá nhiều, quá nhanh" id="input_part_0" style="white-space: pre-wrap;">- Ăn quá nhiều, quá nhanh</span></span></div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_6" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><span data-mention="Chế độ ăn không cân bằng dinh dưỡng/thức ăn nhiều dầu mỡ" id="input_part_0" style="white-space: pre-wrap;">- Chế độ ăn không cân bằng dinh dưỡng/thức ăn nhiều dầu mỡ</span></span></div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_7" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#bc1f1b;"><strong><span style="font-size:22px;"><span data-mention="Các dấu hiệu cho thấy tế bào và tình trạng sức khỏe của bạn không ở trạng thái tốt nhất:" id="input_part_0" style="white-space: pre-wrap;">Các dấu hiệu cho thấy tế bào và tình trạng sức khỏe của bạn không ở trạng thái tốt nhất:</span></span></strong></span></span></div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">
                     <table border="0" cellpadding="1" cellspacing="1" style="width:400px;">
                        <tbody>
                           <tr>
                              <td>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_8" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Mất ngủ" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Mất ngủ</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_9" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Béo phì" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Béo phì</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_10" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Ho" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Ho</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_11" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Đau lưng" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Đau lưng</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_12" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Đau nửa đầu" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Đau nửa đầu</span></span></div>
                              </td>
                              <td>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_13" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Da nhạy cảm" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Da nhạy cảm</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_14" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Mệt mỏi" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Mệt mỏi</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_15" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Tiêu chảy" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Tiêu chảy</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_16" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);"><span style="box-sizing: border-box; font-family: arial, helvetica, sans-serif;"><span data-mention="Rụng tóc" id="input_part_0" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; white-space: pre-wrap;">- Rụng tóc</span></span></div>
                                 <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="box-sizing: border-box; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(253, 250, 244); color: rgb(0, 26, 51);">&nbsp;</div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <p>&nbsp;</p>
                  </div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_13" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_17" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: "><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#bc1f1b;"><strong><span style="font-size:22px;"><span data-mention="3 Yếu tố Sức khỏe cần thiết để có được tế bào khỏe mạnh:" id="input_part_0" style="white-space: pre-wrap;">3 Yếu tố Sức khỏe cần thiết để có được tế bào khỏe mạnh:</span></span></strong></span></span></div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="bangyeuto" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">
                     <table border="0" cellpadding="15" cellspacing="15" style="width:700px;">
                        <tbody>
                           <tr>
                              <td>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_18" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51);"><span style="font-family: arial, helvetica, sans-serif;"><strong><span data-mention="Nhiệt độ cơ thể" id="input_part_0" style="white-space: pre-wrap;">Nhiệt độ cơ thể</span></strong></span></div>
                                 <p background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51);"><span style="font-family: arial, helvetica, sans-serif; white-space: pre-wrap;">Duy trì nhiệt độ cơ thể ở mức 36,5°C, 365 ngày/năm để các tế bào sản sinh ra năng lượng.</span></p>
                              </td>
                              <td>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_21" lucida="" microsoft="" san="" sans="" segoe=""><strong style="font-family: arial, helvetica, sans-serif;"><span data-mention="Cân bằng Cân nặng và Cột sống" id="input_part_0" style="white-space: pre-wrap;">Cân bằng Cân nặng và Cột sống</span></strong></div>
                                 <p background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe=""><span style="white-space: pre-wrap; font-family: arial, helvetica, sans-serif;">Khôi phục tình trạng cân bằng của cân nặng và cột sống là điều rất quan trọng..</span></p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div background-color:="" font-size:="" helvetica="" id="input_line_21" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51);"><span style="font-family: arial, helvetica, sans-serif;"><strong><span data-mention="Cân bằng nồng độ pH của cơ thể" id="input_part_0" style="white-space: pre-wrap;">Cân bằng nồng độ pH của cơ thể</span></strong></span></div>
                                 <p background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51);"><span style="white-space: pre-wrap; font-family: arial, helvetica, sans-serif;">Đưa nồng độ pH từ ngưỡng vượt mức Axit hoặc Kiềm về độ pH Trung tính 7,035.</span></p>
                              </td>
                              <td>&nbsp;</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div background-color:="" font-size:="" helvetica="" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_18" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
                  <div background-color:="" font-size:="" helvetica="" id="input_line_20" lucida="" microsoft="" san="" sans="" segoe="" style="color: rgb(0, 26, 51); font-family: ">&nbsp;</div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
</main>
</div>
</div><!-- #content -->
@endsection
