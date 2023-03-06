<header class="page-header">
   <div class="page-topbar py-1 py-sm-2">
      <div class="container">
      </div>
   </div>
   <div class="page-topbar-bottom">
      <div class="container">
         <div class="d-flex align-items-center justify-content-between flex-column flex-md-row">
            <div class="page-menu-logo d-none d-lg-block">
               <a class="navbar-brand d-block mx-auto mx-md-0 page-logo mr-auto" href="{{route('home')}}" title="{{$setting->company}}" data-wpel-link="internal">
                  <img class="page-img-lap" src="{{$setting->logo}}" alt="logo">
               </a>
            </div>
            <div class="page-search"></div>
            <div class="d-flex d-md-none page-topbar-bottom__contact justify-content-between mt-2">
               <div class="page-email d-flex align-items-center"><i class="fa fa-envelope fa-2x text-primary"></i>
                     <div class="page-email-content ml-2"> <a href="mailto:{{$setting->email}}" title="email" rel="nofollow noopener">{{$setting->email}}</a></div>
               </div>
               <div class="page-phone d-flex align-items-center ml-3"><i class="fa fa-phone-square fa-2x text-primary"></i>
                     <div class="page-phone-content ml-2"> <a href="tel:{{$setting->phone1}}" title="email" rel="nofollow noopener" data-wpel-link="internal">{{$setting->phone1}}</a></div>
               </div>
            </div>
            <div class="d-none d-md-flex page-email align-items-center"> <i class="fa fa-envelope fa-2x text-primary"></i>
               <div class="page-email-content ml-2"> <a href="mailto:{{$setting->email}}" title="email" rel="nofollow noopener">{{$setting->email}}</a></div>
            </div>
            <div class="d-none page-phone d-md-flex align-items-center"><i class="fa fa-phone-square fa-2x text-primary"></i>
               <div class="page-phone-content ml-2"> <a href="tel:{{$setting->phone1}}" title="email" rel="nofollow noopener" data-wpel-link="internal">{{$setting->phone1}}</a></div>
            </div>
            
            <div class="page-topbar-social d-none d-md-block"> 
               <ul class="list-inline mb-0">
                  <li class="list-inline-item"> <a class="fab fa-facebook-f" href="{{$setting->facebook}}" title="Facebook" rel="nofollow noopener external noreferrer" target="_blank" data-wpel-link="external"></a></li>
                  <li class="list-inline-item"> <a class="fab fa-twitter" href="#" title="twitter" rel="nofollow noopener external noreferrer" target="_blank" data-wpel-link="external"></a></li>
                  <li class="list-inline-item"> <a class="fab fa-youtube" href="#" title="youtube" rel="nofollow noopener external noreferrer" target="_blank" data-wpel-link="external"></a></li>
                  <li class="list-inline-item"> <a class="fab fa-instagram" href="#" title="youtube" rel="nofollow noopener external noreferrer" target="_blank" data-wpel-link="external"></a></li>
                  <li class="list-inline-item"> <a class="fab fa-linkedin" href="#" title="linkin" rel="nofollow noopener external noreferrer" target="_blank" data-wpel-link="external"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="page-menu js-menu d-none d-lg-block fixed-menu">
      <div class="container">
         <div class="row">
         <div class="col-12 d-flex align-items-center justify-content-end">
            <div class="page-menu-nav">
               <nav class="navbar navbar-expand-lg p-0">
               <ul id="menu-menu-chinh" class="navbar-nav d-none d-lg-flex">
                  <li id="menu-item-7330"
                     class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-7330"><a
                     href="{{route('home')}}"
                     class="menu-item-link-class nav-link ">Trang chủ</a></li>
                  <li id="menu-item-7344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-7344 dropdown">
                     <a
                     class="menu-item-link-class nav-link dropdown-toggle d-flex ">Về Chúng Tôi<i
                        class="fa fa-caret-down ml-1" aria-hidden="true"></i></a>
                     <div class="dropdown-menu">
                     <ul id="dropdown-7344" class="containermenu megamenu-background sub-menu dropdown-content">
                        @foreach ($pageContent as $item)
                        <li id="menu-item-8083"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-8083">
                        <a href="{{route('pagecontent',['slug'=>$item->slug])}}"
                        class="menu-item-link-class ">{{$item->title}}</a>
                     </li>
                        @endforeach
                     </ul>
                     </div>
                  </li>
                  <li id="menu-item-7387"
                     class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-7387 dropdown">
                     <a href="javascript:void(0)"
                     class="menu-item-link-class nav-link dropdown-toggle d-flex ">Dịch Vụ Uỷ Thác <i
                        class="fa fa-caret-down ml-1" aria-hidden="true"></i></a>
                     <div class="dropdown-menu">
                     <ul id="dropdown-7387" class="containermenu megamenu-background sub-menu dropdown-content">
                        @foreach ($servicehome as $service)
                        <li id="menu-item-9432"
                           class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-9432">
                           <a href="{{route('serviceDetail',['slug'=>$service->slug])}}"
                           class="menu-item-link-class ">{{$service->name}}</a>
                        </li>
                        @endforeach
                     </ul>
                     </div>
                  </li>
                  @if (count($categoryhome) > 0)
                     <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-7387 dropdown">
                        <a href="{{route('allProduct')}}"
                        class="menu-item-link-class nav-link dropdown-toggle d-flex ">Mặt hàng hot <i
                           class="fa fa-caret-down ml-1" aria-hidden="true"></i></a>
                        <div class="dropdown-menu">
                        <ul class="containermenu megamenu-background sub-menu dropdown-content">
                           @foreach ($categoryhome as $cate)
                           <li id="menu-item-9432"
                              class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-9432">
                              <a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}"
                              class="menu-item-link-class ">{{languageName($cate->name)}}</a>
                           </li>
                           @endforeach
                        </ul>
                        </div>
                     </li>
                  @else
                     <li id="menu-item-7330"
                     class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-7330"><a
                     href="{{route('allProduct')}}"
                     class="menu-item-link-class nav-link ">Mặt hàng hot</a>
                     </li>
                  @endif
                  <li id="menu-item-70"
                     class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-70 dropdown">
                     <a href="javascript:void(0)"
                     class="menu-item-link-class nav-link dropdown-toggle d-flex ">Bảng Giá<i
                        class="fa fa-caret-down ml-1" aria-hidden="true"></i></a>
                     <div class="dropdown-menu">
                        <ul id="dropdown-70" class="containermenu megamenu-background sub-menu dropdown-content">
                              @foreach ($projects as $proj)
                              <li id="menu-item-10096"
                                 class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-10096">
                                 <a href="{{route('projectDetail',['slug'=>$proj->slug])}}"
                                 class="menu-item-link-class ">{{$proj->name}}</a>
                              </li>
                              @endforeach
                        </ul>
                     </div>
                  </li>
                  <li id="menu-item-9454"
                     class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children nav-item menu-item-9454 dropdown">
                     <a href="{{route('allListBlog')}}"
                     class="menu-item-link-class nav-link dropdown-toggle d-flex ">Tin tức<i
                        class="fa fa-caret-down ml-1" aria-hidden="true"></i></a>
                     <div class="dropdown-menu">
                     <ul id="dropdown-9454" class="containermenu megamenu-background sub-menu dropdown-content">
                        @foreach ($blogCate as $blog)
                           <li id="menu-item-9452"
                              class="menu-item menu-item-type-taxonomy menu-item-object-category nav-item menu-item-9452">
                              <a href="{{route('listCateBlog',['slug'=>$blog->slug])}}" class="menu-item-link-class ">{{languageName($blog->name)}}</a>
                           </li>
                        @endforeach
                     </ul>
                     </div>
                  </li>
                  <li id="menu-item-8019"
                     class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-8019"><a
                     href="{{route('lienHe')}}" class="menu-item-link-class nav-link ">LIÊN
                     HỆ</a></li>
               </ul>
               </nav>
            </div>
         </div>
         </div>
      </div>
   </div>
   <div class="page-menu-mobile js-menu d-block d-lg-none fixed-menu">
      <nav class="navbar navbar-expand-lg navbar-light ">
         <a class="navbar-brand" href="{{route('home')}}">
            <img class="c-box-img" src="{{$setting->logo}}" alt="{{$setting->company}}">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
         </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav menu-center ">
            <li class="nav-item ">
               <a class="nav-link dropdown" href="#">
                  <a class="nav-link d-inline">Về chúng tôi<a href="#" class="dropdown-toggle" id="navbarDropdown" 
                     role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($pageContent as $item)
                  <a class="dropdown-item" href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a>
                  @endforeach
               </div>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link dropdown" href="#">
                  <a class="nav-link d-inline">Dịch vụ ủy thác <a href="#" class="dropdown-toggle" id="navbarDropdown" 
                     role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($servicehome as $service)
                     <a href="{{route('serviceDetail',['slug'=>$service->slug])}}"
                     class="dropdown-item ">{{$service->name}}</a>
                  @endforeach
               </div>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="{{route('allProduct')}}">Mặt hàng hot</a>
            </li>
            <li class="nav-item ">
               <a class="nav-link dropdown" href="#">
                  <a class="nav-link d-inline">Bảng giá<a href="#" class="dropdown-toggle" id="navbarDropdown" 
                     role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($projects as $proj)
                     <a href="{{route('projectDetail',['slug'=>$proj->slug])}}"
                     class="dropdown-item">{{$proj->name}}</a>
                  @endforeach
               </div>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link dropdown" href="#">
                  <a class="nav-link d-inline" href="{{route('allListBlog')}}">Tin tức<a href="#" class="dropdown-toggle" id="navbarDropdown" 
                     role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </a>
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($blogCate as $blog)
                     <a href="{{route('listCateBlog',['slug'=>$blog->slug])}}" class="dropdown-item">{{languageName($blog->name)}}</a>
                  @endforeach
               </div>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a>
            </li>
         </ul>
         </div>
      </nav>
   </div>
</header>
