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
     
            <div class="col-md-3 col-xs-12">
               <a href="{{route('home')}}"><img class="logo-bot"src="{{$setting->logo}}"></a>
            </div>
            <div class="col-md-3 col-xs-12">
               <div class="motaf">
                  <p>
                    {{$setting->company}}
                  </p>
                  @php
                      $ad =json_decode($setting->address1);
                     
                  @endphp
                  @foreach ($ad as $item)
                  
                                    <p><strong>Địa điểm kinh doanh số 1 và văn phòng kinh doanh:</strong> {{$item->address}}</p>
                      
                  @endforeach
                 
                 
                  <p style="color:white">Liên hệ: <a style="color:white" href="tel:+{{$setting->phone1}}">{{$setting->phone1}}</a></p>
                  <p>{{$setting->email}}</p>
                  <p><strong>Thời gian làm việc:</strong> <br><strong>Sáng:</strong> Từ 8h30 đến 12h<br>
                     <strong>Chiều:</strong> 13h30 đến 17h30<br>
                     Từ thứ 2 đến thứ 7 hàng tuần.
                  </p>
               </div>
            </div>
           
            <div class="col-md-3 col-xs-12">
           
                    
                  <div class="mangxhf w-100">
                      <ul>
                         <li><a target="_blank" rel="nofollow" href="{{$setting->google}}"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/camf-16390485651.png"></a></li>
                         <li><a target="_blank" rel="nofollow" href="javascript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/insf-16390485571.png"></a></li>
                         <li><a target="_blank" rel="nofollow" href="{{$setting->GA}}"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/ytf-16390485519.png"></a></li>
                         <li><a target="_blank" rel="nofollow" href="{{$setting->facebook}}"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/fbf-16390485416.png"></a></li>
                         <li><a target="_blank" rel="nofollow" href="javascript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/twittervlive-16480310126.png"></a></li>
                      </ul>
                 
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
               <div class="mangxhf w-100">
                 <ul style="color: white">
                @foreach ($vechungtoi as $item)
                    {{$item->title}}
                @endforeach
                <p>2</p>
                 </ul>
               </div>
            </div>
           
     
      </div>
      <br>
      <div class="container" style="border-top: 1px solid white; text-align:center">
         <br>
         <p style="color: white">© Copyright 2023 , all rights reserved. Designed &amp; developed by SBT</p>
      </div>
   </div>
</footer>