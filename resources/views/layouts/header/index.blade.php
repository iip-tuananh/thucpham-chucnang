<header id="header" data-lang="vi">
   <div class="topbar w-100">
      <div class="container">
         <div class="box_bar">
            <div class="box_bar1">
               <span>Hotline: {{$setting->phone1}}</span>
            </div>
            <div class="box_bar2">
               
               <div class="box_bar2_right">
                  <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                    
                  </div>
                  <!-- <ul class="ngonngu">	
                     <li class=""><a id="ngonnguen" href="" rel="en">En</a></li>
                     <li class="active"><a id="ngonnguvi" href="" rel="vi">Vi</a></li>
                     </ul> -->
                  {{-- <ul class="mangxh">
                     <li><a target="_blank" rel="nofollow" href="javascript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/camf-16390485651.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="javascript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/insf-16390485571.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="javascript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/ytf-16390485519.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="{{$setting->facebook}}"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/fbf-16390485416.png"></a></li>
                     <li><a target="_blank" rel="nofollow" href="javascript:;"><img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/twittervlive-16480310126.png"></a></li>
                  </ul> --}}
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
                        <li><a href="{{route('home')}}">Trang ch???</a></li>
                        <li>
                           <a href="https://vlive-international.vn/vi/gioi-thieu/">V??? Ch??ng t??i</a>
                           <ul >
                              <!-- 	<li><a href="gioi-thieu#trietly">Tri???t l?? c???a ch??ng t??i</a></li> -->
                              <li><a href="{{route('aboutUs')}}">Gi???i thi???u t???ng quan</a></li>
                       
                              <li><a href="{{route('chungnhan')}}">Ch???ng nh???n ch???t l?????ng to??n c???u</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="san-pham">S???n ph???m</a>
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
                        <a href="javascript:;">T??i Li???u</a>
                        <ul >
                           <!-- 	<li><a href="gioi-thieu#trietly">Tri???t l?? c???a ch??ng t??i</a></li> -->
                           <li><a href="{{route('allvideo')}}">Ph???n h???i kh??ch h??ng</a></li>
                    
                           <li><a href="{{route('chungnhan')}}">Ch???ng nh???n ch???t l?????ng to??n c???u</a></li>
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
                  <li><a href="{{route('home')}}">Trang ch???</a></li>
                  <li class=" has_sub">
                     <a href="javascript:;">V??? Ch??ng T??i</a>
                     <ul class="submenu1">
                        <!-- 	<li><a href="gioi-thieu#trietly">Tri???t l?? c???a ch??ng t??i</a></li> -->
                        <li><a href="{{route('aboutUs')}}">Gi???i thi???u t???ng quan</a></li>
                 
                        <li><a href="{{route('chungnhan')}}">Ch???ng nh???n ch???t l?????ng to??n c???u</a></li>
                     </ul>
                  </li>
                  <li class=" has_sub">
                     <a href="{{route('allProduct')}}">S???n ph???m</a>
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
                     <a href="javascript:;">T??i Li???u</a>
                     <ul class="submenu1">
                        <!-- 	<li><a href="gioi-thieu#trietly">Tri???t l?? c???a ch??ng t??i</a></li> -->
                        <li><a href="{{route('allvideo')}}">Ph???n h???i kh??ch h??ng</a></li>
                 
                        <li><a href="{{route('chungnhan')}}">Ch???ng nh???n ch???t l?????ng to??n c???u</a></li>
                     </ul>
                  </li>
                  <!-- <li class=""><a href="tuyen-dung/">Tuy???n d???ng</a></li>
                     <li class=" "><a href="lien-he/">Li??n h???</a></li> -->
               </ul>
              
            </nav>
         </div>
      </div>
   </div>
</header>