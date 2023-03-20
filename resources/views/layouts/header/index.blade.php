
<header id="header" data-lang="vi">
 
   <div class="topbar w-100">
      
      <div class="container">
    

        
        
         <div class=" container">
            <div class="row">

               <div class="col-md-4">
                     <ul class="ngonngu">	
                        <div class="image-item " style="display: flex;">
                           <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Việt" data-lang="vi" style="margin-right: 20px;">
                              <div>
                                 <img src="{{asset('frontend/img/flag-en.png')}}" alt="" loading="lazy">
                              </div>
                              <div>
                                 <span style="color: white" class="ngonngu">Tiếng Việt</span>
                              </div>
                           </a>
                           <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Đức" data-lang="de">
                              <div>
                                 <img style="height:22px;width:30px"src="{{asset('frontend/img/flag_ger.jpg')}}" alt="" loading="lazy">
                              </div>
                              <div>
                                 <span style="color: white" class="ngonngu">Tiếng Đức</span>
                              </div>
                           </a>
                        </div>
                     </ul>
               </div>
               <div class="col-md-4">
                  
                  <span>Hotline: {{$setting->phone1}}</span>&nbsp;&nbsp;&nbsp;
                  <span>Hotline: {{$setting->phone2}}</span>
                  
               </div>
               <div class=" col-md-4">
                  <div class="box_bar2_right">
                     <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                     </div>
                 
   
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
                           <a href="https://vlive-international.vn/vi/gioi-thieu/">VỀ Chúng tôi</a>
                           <ul >
                              <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                              <li><a href="{{route('aboutUs')}}">Giới thiệu tổng quan</a></li>
                       
                              <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="san-pham">Sản phẩm</a>
                           <ul >
                              @foreach ($categoryhome as $cate)
                              @foreach ($cate->product as $pro)
                              @php
                                  $img =json_decode($pro->images);
                              @endphp
                                 <li>
                                    <span><a href="{{route('detailProduct',['slug'=>$pro->slug])}}"><img  class="img-me" src="{{$img[0]}}">{{languageName($pro->name)}}</a></span>
                                 </li>
                              @endforeach
                              @endforeach
                             
                           </ul>
                        </li>
                        @foreach ($blogCate as $cate)
                        <li >
                           <a href="javascript:;">{{languageName($cate->name)}}</a>
                           <ul >
                            @foreach ($cate->typeCate as $type)
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
                     <li >
                        <a href="javascript:;">Tài Liệu</a>
                        <ul >
                           <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                           <li><a href="{{route('allvideo')}}">Phản hồi khách hàng</a></li>
                    
                           <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li>
                        </ul>
                     </li>
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
                     <a href="javascript:;">VỀ Chúng Tôi</a>
                     <ul class="submenu1">
                        <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                        <li><a href="{{route('aboutUs')}}">Giới thiệu tổng quan</a></li>
                 
                        <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li>
                     </ul>
                  </li>
                  <li class=" has_sub">
                     <a href="{{route('allProduct')}}">Sản phẩm</a>
                     <ul class="submenu1">
                        @foreach ($categoryhome as $cate)
                        @foreach ($cate->product as $pro)
                        @php
                            $img =json_decode($pro->images);
                        @endphp
                           <li>
                              <span><a href="{{route('detailProduct',['slug'=>$pro->slug])}}"><img  class="img-me" src="{{$img[0]}}">{{languageName($pro->name)}}</a></span>
                           </li>
                        @endforeach
                        @endforeach
                       
                     </ul>
                  </li>
                  @foreach ($blogCate as $cate)
                     <li class=" has_sub">
                        <a href="javascript:;">{{languageName($cate->name)}}</a>
                        <ul class="submenu1">
                         @foreach ($cate->typeCate as $type)
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
              
                    <li class=" has_sub">
                     <a href="javascript:;">Tài Liệu</a>
                     <ul class="submenu1">
                        <!-- 	<li><a href="gioi-thieu#trietly">Triết lý của chúng tôi</a></li> -->
                        <li><a href="{{route('allvideo')}}">Phản hồi khách hàng</a></li>
                 
                        <li><a href="{{route('chungnhan')}}">Chứng nhận chất lượng toàn cầu</a></li>
                     </ul>
                  </li>
                  <!-- <li class=""><a href="tuyen-dung/">Tuyển dụng</a></li>
                     <li class=" "><a href="lien-he/">Liên hệ</a></li> -->
               </ul>
              
            </nav>
         </div>
      </div>
   </div>
</header>