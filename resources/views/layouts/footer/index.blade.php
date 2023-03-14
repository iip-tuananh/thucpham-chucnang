<footer>
   <div class="footer_top">
      <div class="container">
         <div class="khungboxf w-100">
            <div class="box_icon">
               <div class="img_icon">
                  <a href="javascript:;"><img src="{{asset('frontend/img/vlivelayoutbosung02-16378120809.png')}}"></a>
               </div>
               <div class="des_icon">
                  <a href="javascript:;"><span>ĐỐI TÁC</span></a>
                  <p class="h3"> <a href="javascript:;">KINH DOANH</a></p>
               </div>
            </div>
            <div class="box_icon">
               <div class="img_icon">
                  <a href="javascript:;"><img src="{{asset('frontend/img/iconuser-16377672222.png')}}"></a>
               </div>
               <div class="des_icon">
                  <a href="javascript:;"><span>ĐĂNG KÝ</span></a>
                  <p class="h3"> <a href="javascript:;">CỘNG TÁC VIÊN</a></p>
               </div>
            </div>
            <div class="box_icon">
               <div class="img_icon">
                  <a href="tel:{{$setting->phone1}}"><img src="{{asset('frontend/img/iconphone-16377676886.png')}}"></a>
               </div>
               <div class="des_icon">
                  <a href="tel:{{$setting->phone1}}"><span>HOTLINE</span></a>
                  <p class="h3"> <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer_bottom">
      <div class="container">
         <div class="khungf w-100">
            <div class="col4">
               <a href="{{route('home')}}"><img src="{{$setting->logo}}"></a>
            </div>
            <div class="col4">
               <div class="motaf">
                  <p>
                    {{$setting->company}}
                  </p>
                  @php
                      $ad =json_decode($setting->address1);
                     
                  @endphp
                  @foreach ($ad as $item)
                  
                                    <p><strong>Văn phòng </strong> {{$item->address}}</p>
                      
                  @endforeach
                 
                 
                  <p>Liên hệ: {{$setting->phone1}}</p>
                  <p>{{$setting->email}}</p>
                  <p><strong>Thời gian làm việc:</strong> <br><strong>Sáng:</strong> Từ 8h30 đến 12h<br>
                     <strong>Chiều:</strong> 13h30 đến 17h30<br>
                     Từ thứ 2 đến thứ 7 hàng tuần.
                  </p>
               </div>
            </div>
            <div class="col4">
               <div class="mangxhf w-100">
                  {!!$setting->iframe_map!!}
               </div>
            </div>
         </div>
         <div class="linef2 w-100">
            <p>© Copyright 2023 , all rights reserved. Designed &amp; developed by SBT</p>
         </div>
      </div>
   </div>
</footer>