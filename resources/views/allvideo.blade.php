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
<div id="content" class="site-content">
   <main>
      <section class="nav-bredcrum">
         <div class="container">
            <div class=" w-100 ngaytao-bv "> 
               <a href="https://vlive-international.vn/vi/" title="Trang chủ"> Trang chủ </a>  / <span>Hợp tác kinh doanh</span> 
            </div>
         </div>
      </section>
      <section class="section_phanhoikhachhang">
         <div class="container">
            <div class="title_chungnhan  w-100">
               <h1><span>Phản hồi của khách hàng</span></h1>
            </div>
            <div class="khungphanhoi w-100">
               <div class="khungphanhoi_left col-md-3 col-sm-3 col-xs-12">
                  <ul>
                     <li>
                        <span class="tab-3 active" data-tab="#tab-3">
                           <h2>Đánh giá của Chuyên gia</h2>
                        </span>
                     </li>
                     <li>
                        <span class="tab-2" data-tab="#tab-2">
                           <h2>Cảm nhận khách hàng</h2>
                        </span>
                     </li>
                 
                  </ul>
               </div>
               <div class="khungphanhoi_right col-md-9 col-sm-9 col-xs-12">
                  <div class="content_phanhoi active" id="tab-3" style="margin-top: 0">
                     <div class="khungphanhoi111">
                        @foreach ($danhgiachuyengia as $item)
                         
                        <div class="box_phanhoi">
                           @if($item->link != null)
                           <a data-fancybox="" href="{{$item->link}}">
                              @else
                           <a data-fancybox="" href="#">
                              @endif
                              <div class="img_phanhoi">
                                 <img src="{{$item->image}}">
                                 <div class="iconplay">
                                    <img src="{{asset('frontend/img/iconplay.png')}}">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>{{$item->name}}</h3>
                              </div>
                           </a>
                        </div>
                        @endforeach
                 
                     </div>
                    
                  </div>
                  <div class="content_phanhoi" id="tab-2" style="margin-top: 0">
                    <div class="khungphanhoi111">
                        @foreach ($danhgiakhachhang as $item)
                         
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="{{$item->link}}">
                              <div class="img_phanhoi">
                                 <img src="{{$item->image}}">
                                 <div class="iconplay">
                                    <img src="{{asset('frontend/img/iconplay.png')}}">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>{{$item->name}}</h3>
                              </div>
                           </a>
                        </div>
                        @endforeach
                 
                     </div>
                  </div>
                  {{-- <div class="content_phanhoi" id="tab-4" style="margin-top: 0">
                     <div class="khungphanhoi111">
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/pBkyT3bGF3U">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/7-16517361069.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>V Live International đạt giải Thương hiệu nổi tiếng Châu Á – Thái Bình Dương 2021</h3>
                              </div>
                           </a>
                        </div>
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/11dz_hUj2CE">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/6-16517359200.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>V Live liên tiếp nhận được 2 giải thưởng do người tiêu dùng bình chọn trong tháng 12/2021</h3>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="xemtatcaphanhoi">
                        <a href="https://www.youtube.com/playlist?list=PLCpdsEKYBLaBOKHA6qUac3EmZ8JXaeHZO" target="blank" rel="nofollow">Xem tất cả Chứng nhận - Giải thưởng</a>
                     </div>
                  </div>
                  <div class="content_phanhoi active" id="tab-5" style="margin-top: 0">
                     <div class="khungphanhoi111">
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/QYq0wxVvkC8">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/68-16517366189.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>Công nghệ Collagen thủy phân trong sản phẩm V Neral có tác dụng gì với cơ thể?</h3>
                              </div>
                           </a>
                        </div>
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/UEwTFVD4Df0">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/69-16517365447.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>V Trition có tác dụng gì với người có vấn đề dạ dày?</h3>
                              </div>
                           </a>
                        </div>
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/pd7P91wygBw">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/70-16517364906.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>V Live có tác dụng gì với người bị tiểu đường?</h3>
                              </div>
                           </a>
                        </div>
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/s9-pc1VHazo">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/71-16517364287.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>Những ai nên hạn chế hoặc không nên sử dụng V Live?</h3>
                              </div>
                           </a>
                        </div>
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/VGZsrDI0k7w">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/72-16517363687.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>Tại sao V Oxy+ có vị chua nhưng khi dùng lúc đói lại rất tốt cho người bị đau dạ dày?</h3>
                              </div>
                           </a>
                        </div>
                        <div class="box_phanhoi">
                           <a data-fancybox="" href="https://www.youtube.com/watch?v=https://youtu.be/OeScYcXYxAI">
                              <div class="img_phanhoi">
                                 <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/73-16517362832.png">
                                 <div class="iconplay">
                                    <img src="https://vlive-international.vn/wp-content/themes/v4/assets/images/iconplay.png">
                                 </div>
                              </div>
                              <div class="des_phanhoi">
                                 <h3>Sản phẩm V Live có hại thận không? Sự kết hợp của V-Oxy+ và V-Trition thải độc hệ tiêu hóa</h3>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="xemtatcaphanhoi">
                        <a href="https://www.youtube.com/playlist?list=PLCpdsEKYBLaA30EEeMFKpWvgfUmnTYA2s" target="blank" rel="nofollow">Xem tất cả Kiến thức sản phẩm</a>
                     </div>
                  </div> --}}
               </div>
            </div>
         </div>
      </section>
   </main>
</div>
<!-- #content -->
@endsection
