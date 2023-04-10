
<header id="header" data-lang="vi">
 
   <div class="topbar w-100">
      
      <div class="container">
    

        
        
         <div class="box_bar">
            <div class="box_bar1">
               <span>Hotline: {{$setting->phone1}}</span>&nbsp;&nbsp;&nbsp;
               <span>Hotline: {{$setting->phone2}}</span>
               
            </div>
            <div class="box_bar2">
               <div class="box_bar2_right">
                  <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                  </div>
                  <ul class="ngonngu" >
                     <li><a  rel="nofollow" href="{{route('pagecontent',['slug'=>'dieu-khoan-su-dung'])}}" style="font-weight: 700">Điều Khoản sử dụng</a></li>
                     <li><a  rel="nofollow" href="{{route('lienHe')}}" style="font-weight: 700">Liên Hệ</a></li>
                  </ul>
                <ul class="ngonngu">	
                  <div class="image-item " style="display: flex; color:white">
                     <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Việt" data-lang="vi" >
                        <div>
                           <img style="height:22px;width:30px" src="{{asset('frontend/img/flag-vietnam.png')}}" alt="" loading="lazy">
                        </div>
                        {{-- <div>
                           <span style="color: white" class="ngonngu">Tiếng Việt</span>
                        </div> --}}
                     </a>
                     |
                     <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Đức" data-lang="de">
                        <div>
                           <img style="height:22px;width:30px"src="{{asset('frontend/img/flag-duc.png')}}" alt="" loading="lazy">
                        </div>
                        {{-- <div>
                           <span style="color: white" class="ngonngu">Tiếng Đức</span>
                        </div> --}}
                     </a>
                  </div>
                     </ul>

                  <ul class="mangxh">
                     <li><a target="_blank" rel="nofollow" href="{{$setting->intagram}}"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/camf-16390485651.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="javacript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/insf-16390485571.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="{{$setting->youtube}}"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/ytf-16390485519.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="{{$setting->facebook}}"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/fbf-16390485416.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="javascript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/twittervlive-16480310126.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="bottom_bar w-100">
      <div class="container">
         <div class="box_menu w-100">
            <div class="menumobile">
               <div id="wrap_menu_res">
                  <a href="#menu" title="Menu" id="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></a>
                  <nav id="menu">
                     <ul>
                        <li><a href="{{route('home')}}">Trang chủ</a></li>
                        <li>
                           <a href="javascript:;">VỀ Chúng tôi</a>
                           <ul >
                              <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                              <li><a href="{{route('aboutUs')}}">Giới thiệu chung</a></li>
                       
                              <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="{{route('allProduct')}}">Sản phẩm</a>
                           <ul >
                   
                              @foreach ($prosp as $pro)
                            
                              @php
                                  $img =json_decode($pro->images);
                              @endphp
                                 <li>
                                    <span><a href="{{route('detailProduct',['slug'=>$pro->slug])}}"><img  class="img-me" src="{{$img[0]}}">{{languageName($pro->name)}}</a></span>
                                 </li>
                      
                              @endforeach
                             
                           </ul>
                        </li>
                        @foreach ($blogCate as $key=>$cate)
                        <li >
                           <a href="javascript:;">{{languageName($cate->name)}}</a>
                           <ul >
                            @foreach ($cate->typeCate as $t=>$type)
                            @if($key == 0 && $t== 0)
                            <li >
                              <a href="javascript:;">Tài Liệu hỗ trợ</a>
                              <ul class="submenu2">
                                 <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                                 <li><a href="{{route('allvideo')}}">Phản hồi khách hàng</a></li>
                                 <li><a href="{{route('allreview')}}">Câu hỏi thường gặp</a></li>
                          
                                 {{-- <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li> --}}
                              </ul>
                           </li>
                           <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng </a></li>
                            @endif
                            <li>
                               <a  href="{{route('listTypeBlog',['slug'=>$type->slug])}}">{{languageName($type->name)}}</a>
                               <ul >
                                 @foreach ($type->listBlog as $blog)
                                 {{-- @dd($blog); --}}
                                    <li><a href="{{route('detailBlog',['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a></li>
                                 @endforeach
                               </ul>
                            </li>
                            @endforeach
                             
                             
                           </ul>
                        </li>
                     @endforeach
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="logotop">
               <a href="{{route('home')}}"><img src="{{$setting->logo}}"></a>
               <h1 class="hidden">{{$setting->company}}</h1>
            </div>
            <nav>
               <ul>
                  <li><a href="{{route('home')}}">Trang chủ</a></li>
                  <li class=" has_sub">
                     <a href="#">VỀ Chúng Tôi</a>
                     <ul class="submenu1">
                        <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                        <li><a href="{{route('aboutUs')}}">Giới thiệu chung</a></li>
                        <li><a href="{{route('cauchuyen')}}">Câu chuyện thương hiệu</a></li>
                        <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li>
                     </ul>
                  </li>
                  <li class=" has_sub">
                     <a href="{{route('allProduct')}}">Sản phẩm</a>
                     <ul class="submenu1">
                       
                        @foreach ($prosp as $pro)
                        @php
                            $img =json_decode($pro->images);
                        @endphp
                           <li>
                              <span><a href="{{route('detailProduct',['slug'=>$pro->slug])}}"><img  class="img-me" src="{{$img[0]}}">{{languageName($pro->name)}}</a></span>
                           </li>
                        @endforeach
                   
                       
                     </ul>
                  </li>
                  @foreach ($blogCate as $key=>$cate)
                     <li class=" has_sub">
                        <a href="javascript:;">{{languageName($cate->name)}}</a>
                        <ul class="submenu1">
                         @foreach ($cate->typeCate as $t=>$type)
                         @if($key == 0 && $t== 0)
                         <li >
                           <a href="javascript:;">Tài liệu hỗ trợ</a>
                           <ul class="submenu2">
                              <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                              <li><a href="{{route('thuvien')}}">Thư viện Zentrum</a></li>
                              <li><a href="{{route('allvideo')}}">Phản hồi khách hàng</a></li>
                              <li><a href="{{route('allreview')}}">Câu hỏi thường gặp</a></li>
                       
                              {{-- <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li> --}}
                           </ul>
                        </li>
                        <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng</a></li>
                         @endif
                         <li>
                            <a  href="{{route('listTypeBlog',['slug'=>$type->slug])}}">{{languageName($type->name)}}</a>
                            <ul class="submenu2">
                              @foreach ($type->listBlog as $blog)
                              {{-- @dd($blog); --}}
                                 <li><a href="{{route('detailBlog',['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a></li>
                              @endforeach
                            </ul>
                         </li>
                       
                         @endforeach
                          
                          
                        </ul>
                     </li>
                  @endforeach
              
              
                  <!-- <li class=""><a href="tuyen-dung/">Tuyển dụng</a></li>
                     <li class=" "><a href="lien-he/">Liên hệ</a></li> -->
               </ul>
               <div class="giohang_header">
                  <a href="{{route('listCart')}}"> <span>Giỏ hàng</span><img src="{{asset('frontend/img/iconcart1.png')}}">
   <span class="count count-item" id="count">{{count($cartcontent)}}</span>
</a>
</div>
              
            </nav>
           
         </div>
      </div>
   </div>
</header>