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
   <section class="bannerabout bannerabout1  w-100" style="background: url({{asset('frontend/img/banner.jpg')}}) no-repeat center; ">
      <div class="box_desc_banner">
         <div class="container">
            <div class="box_desc_banner1 active">
               {{-- <h1>
                  <p style="color:#fff"><b>Niềm đam mê sức khỏe </b> <br>của chúng tôi là nguyên<br> nhân ra đời <br><b>của chúng tôi</b></p>
               </h1> --}}
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
               <h2><span style="text-transform:uppercase">Giới thiệu chung</span></h2>
            </div>
         </div>
         <div class="khungsumenh">
            <div class="left_sumenh_new">
               <div class="title">
                  <span>Zentrum</span>
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
                  Zentrum trở thành nhà nhập khẩu và phân phối những sản phẩm thực phẩm từ Gai dầu và dinh dưỡng Organic đạt chuẩn Châu  u nhập khẩu từ CHLB Đức tốt nhất cho sức khỏe, đưa các sản phẩm tiếp cận đến các tỉnh thành tại Việt Nam và các nước khác.

                  Với năng lực và kiến thức chuyên môn tốt về y học & dinh dưỡng. Giúp cho khách hàng hiểu về giá trị của dinh dưỡng, sử dụng đúng cách mang lại hiệu quả cao nhất đối với mỗi khẩu phần ăn. Tạo niềm tin cao nhất cho khách hàng về chất lượng sản phẩm và phong cách phục vụ.
                  

                              
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
                  Đưa các sản phẩm từ Gai dầu và các sản phẩm thực phẩm Organic trở thành một phần thiết yếu trong việc chăm sóc sức khoẻ và chúng tôi tin rằng chúng tôi có trách nhiệm truyền tải kiến thức cho càng nhiều người càng tốt về tầm quan trọng và vai trò của endocannabinoid (hệ thống nội sinh) trong cơ thể.
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
   <section class="section_tamnhinsumenh" id="tamnhinsumenh">
      <div class="container">
         <div class="khungsanglap w-100">
            <div class="title">
               <h2><span>SẢN XUẤT &amp; CÔNG NGHỆ</span></h2>
            </div>
         </div>
         <div class="khungtamnhin">
            <div class="left_tamnhin">
               <div class="title">
                  <span>SẢN XUẤT</span>
               </div>
            </div>
            <div class="right_tamnhin">
               <div class="mota_tamnhin">
                  Quy trình sản xuất của nhà máy HaMix được kiểm định vô cùng kỹ lưỡng từ đầu vào, có hệ thống quản lý chất gây dị ứng nghiêm ngặt, đảm bảo sản xuất không bị ô nhiễm.
                  Trung tâm quá trình sản xuất của HaMix là sự kết tụ. Ngoài ra, máy sấy tầng sôi giúp cho quá trình sản xuất trở lên nhanh chóng và công nghệ phủ nhiều loại bột và hạt khác nhau. 
               </div>
            </div>
         </div>
         <div class="khungsumenh">
            <div class="left_sumenh">
               <div class="title">
                  <span>CÔNG NGHỆ</span>
               </div>
            </div>
            <div class="right_sumenh">
               <div class="mota_sumenh">
                  Nhà máy HaMix tự hào đi đầu công nghệ với nhiều trang thiết bị hiện đại, tân tiến bậc nhất Châu Âu. Công nghệ hoàn thiện và các tùy chọn chiết rót. 
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
                       {{$item->content}}
                     </div>
                  </div>
               @endforeach
             
            </div>
         </div>
      </div>
   </section>
   <section class="section_nhasanglap" id="nhasanglap">
      <div class="container">
         <div class="khungsanglap w-100">
            <div class="title">
               <h2><span>Video giới thiệu</span></h2>
               <br>
           
            </div>
            <div class="row">
            
             
                 
                  
                        @foreach ($videos_gioithieu as $item)
                         
                        <div class="col-md-6 col-xs-12">
                           <a data-fancybox="" href="{{$item->link}}">
                              <div class="img_phanhoi">
                                 <img src="{{$item->image}}">
                                 <div class="iconplay">
                                    <img src="{{asset('frontend/img/iconplay.png')}}">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3 >{{$item->name}}</h3>
                              </div>
                           </a>
                        </div>
                        @endforeach
                 
            
            </div>
         </div>
      </div>
   </section>
</main>
</div>
</div><!-- #content -->
@endsection
