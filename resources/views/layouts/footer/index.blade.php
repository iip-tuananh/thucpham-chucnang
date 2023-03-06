@if ( Route::currentRouteName() != 'lienHe')
   <section class="home-contact">
      <div class="container">
         <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
            style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
            <h2 class="text-uppercase">liên hệ chúng tôi</h2>
         </div>
         <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft" data-wow-duration="1s"
                  style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                  <div class="home-contact__img"> <noscript><img alt="dịch vụ"
                              style="width: 100%; height: auto;"
                              data-src="{{asset('frontend/images/contact-img.png')}}"
                              class="lazyload"
                              src="{{asset('frontend/images/contact-img.png')}}" /><noscript><img
                                 src="h{{asset('frontend/images/contact-img.png')}}"
                                 alt="dịch vụ" style="width: 100%; height: auto;" /></noscript><img
                              class="lazyload"
                              src="{{asset('frontend/images/contact-img.png')}}"
                              data-src="{{asset('frontend/images/contact-img.png')}}"
                              alt="dịch vụ" style="width: 100%; height: auto;"></div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s"
                  style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                  <div class="d-flex align-items-center h-100 home-contact__form">
                     <div role="form" class="wpcf7" id="wpcf7-f6743-o2" lang="vi" dir="ltr">
                        <div class="screen-reader-response">
                              <p role="status" aria-live="polite" aria-atomic="true"></p>
                              <ul></ul>
                        </div>
                        <form action="{{route('postcontact')}}" method="POST" class="wpcf7-form init"
                              novalidate="novalidate" data-status="init">
                              @csrf
                              <div class="home-contact__content">
                                 <div class="page-heading">
                                    <h2 class="text-uppercase">Yêu cầu báo giá</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                          <div class="form-group"> <span
                                                class="wpcf7-form-control-wrap your-name"><input type="text"
                                                      name="name" value="" size="40"
                                                      class="wpcf7-form-control wpcf7-text form-control"
                                                      aria-invalid="false" placeholder="Nhập họ tên" required></span></div>
                                    </div>
                                    <div class="col-12">
                                          <div class="form-group"> <span
                                                class="wpcf7-form-control-wrap your-email"><input type="text"
                                                      name="email" value="" size="40"
                                                      class="wpcf7-form-control wpcf7-text form-control"
                                                      aria-invalid="false"
                                                      placeholder="Nhập địa chỉ email" required></span></div>
                                    </div>
                                    <div class="col-12">
                                          <div class="form-group"> <span
                                                class="wpcf7-form-control-wrap your-tel"><input type="number"
                                                      name="phone" value="" size="40"
                                                      class="wpcf7-form-control wpcf7-text form-control"
                                                      aria-invalid="false"
                                                      placeholder="Nhập số điện thoại" required></span></div>
                                    </div>
                                    <div class="col-12">
                                          <div class="form-group"> <span
                                                class="wpcf7-form-control-wrap your-address"><input
                                                      type="text" name="location" value=""
                                                      size="40"
                                                      class="wpcf7-form-control wpcf7-text form-control"
                                                      aria-invalid="false" placeholder="Nhập địa chỉ" required></span>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                          <div class="form-group"> 
                                             <span class="wpcf7-form-control-wrap your-subject"><input
                                                      type="text" name="mess" value=""
                                                      size="40"
                                                      class="wpcf7-form-control wpcf7-text form-control"
                                                      aria-invalid="false"
                                                      placeholder="Thông tin cần báo giá">
                                             </span>
                                          </div>
                                    </div>
                                    <div class="col-12"> <button class="btn btn-gradient w-100"
                                             type="submit">Gửi</button></div>
                                 </div>
                              </div><input type="hidden" class="wpcf7-pum"
                                 value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}">
                              <div class="wpcf7-response-output" aria-hidden="true"></div><input
                                 class="js_cookies" name="_cookies" style="display: none;">
                        </form>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </section>
@endif
<footer>
   <div class="text-center"><a class="go-top js-go-top show" id="go-top"
         title="back to top" rel="nofollow noopener" data-wpel-link="internal"><i class="fa fa-arrow-up"></i></a>
   </div>
   <div class="page-footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 mt-3 mt-md-0">
               @if ($setting->facebook !==null)
                  <h4 class="mb-4 page-footer__header">fanpage</h4>
                  <div class="fb-page" data-href="{{$setting->facebook}}"
                  data-width="" data-height="" data-small-header="false"
                  data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  </div>
               @endif
               <div class="page-footer-info mb-4 mt-4 mb-lg-0">
                  <h4 class="mb-3 page-footer__header">Liên hệ</h4>
                  @if ($setting->phone1)
                  <p class="mb-2 mb-md-3"><i class="fa fa-phone mr-2"></i>Hotline : <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
                  @endif
                  @if ($setting->phone2)
                  <p class="mb-2 mb-md-3"><i class="fa fa-phone mr-2"></i>Hotline 2: <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></p>
                  @endif
                  @if ($setting->email)
                  <p class="mb-2 mb-md-3"><i class="fa fa-envelope mr-2"></i>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                  </p>
                  @endif
                  <p class="mb-2 mb-md-3"><i class="fa fa-clock mr-2"></i>Giờ Làm Việc: 8:00-11:30 &amp; 13:30-17:00 Thứ
                  2 - Thứ 7</p>
               </div>
            </div>
            <div class="col-lg-3 mt-3 mt-md-0">
               <h4 class="mb-4 page-footer__header">Bản đồ</h4>
               {!!$setting->iframe_map!!}
            </div>
            <div class="col-lg-3">
               <div class="page-footer-info mb-4 mb-lg-0">
                  <h4 class="mb-3 page-footer__header">Tại Hà Nội</h4>
                     @foreach (json_decode($setting->address1) as $item)
                     @if ($item->name != "")
                        <p class="mb-2 mb-md-3">{{$item->name}}</p>
                     @endif
                     @if ($item->name_code != "")
                        <p class="mb-2 mb-md-3">Mã code : {{$item->name}}</p>
                     @endif
                     <p class="mb-2 mb-md-3">
                        @if ($item->address != "")
                        <i class="fa fa-home mr-2"></i>Văn Phòng: {{$item->address}}<br>
                        @endif
                        @if ($item->phone_number != "")
                        <i class="fa fa-phone mr-2"></i>Hotline : {{$item->phone_number}}
                        @endif
                     </p>
                     @endforeach
               </div>
               <div class="page-footer-info mb-4 mb-lg-0">
                  <h4 class="mb-3 page-footer__header">Tại Quảng Châu, Trung Quốc</h4>
                  @foreach (json_decode($setting->address2) as $item)
                     @if ($item->name != "")
                        <p class="mb-2 mb-md-3">
                           {{$item->name}}
                        </p>
                     @endif
                     @if ($item->name_code != "")
                        <p class="mb-2 mb-md-3">
                           收货名： {{$item->name_code}}
                        </p>
                     @endif
                     @if ($item->phone_number != "")
                        <p class="mb-2 mb-md-3">
                           电话 : <a href="tel:{{$item->phone_number}}"> {{$item->phone_number}} </a>
                        </p>
                     @endif
                     @if ($item->address != "")
                        <p class="mb-2 mb-md-3">
                           收货地址：{{$item->address}}
                        </p>
                     @endif
                     @if ($item->note != "")
                        <p class="mb-2 mb-md-3">
                           请标注外箱大写: {{$item->note}}
                        </p>
                     @endif
                  @endforeach
               </div>
            </div>
            <div class="col-lg-3">
               <div class="mb-4 mb-lg-0">
                  <h4 class="mb-3 page-footer__address">
                     Tại Bằng Tường, Trung Quốc
                  </h4>
                  @foreach (json_decode($setting->address3) as $item)
                     @if ($item->name != "")
                        <p class="mb-2 mb-md-3">
                           {{$item->name}}
                        </p>
                     @endif
                     @if ($item->name_code != "")
                        <p class="mb-2 mb-md-3">
                           收货名： {{$item->name_code}}
                        </p>
                     @endif
                     @if ($item->phone_number != "")
                        <p class="mb-2 mb-md-3">
                           电话 : <a href="tel:{{$item->phone_number}}"> {{$item->phone_number}} </a>
                        </p>
                     @endif
                     @if ($item->address != "")
                        <p class="mb-2 mb-md-3">
                           收货地址：{{$item->address}}
                        </p>
                     @endif
                     @if ($item->note != "")
                        <p class="mb-2 mb-md-3">
                           请标注外箱大写: {{$item->note}}
                        </p>
                     @endif
                  @endforeach
               </div>
            </div> 
         </div>
      </div>
   </div>
</footer>
<div class="copy-right">
   <div class="container">
      <div class="row">
         <div class="col-12"><a class="fanpage" target="_blank"
            title="fanpage image" rel="nofollow noopener external noreferrer" data-wpel-link="external"> &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
         <p class="mb-0 text-center text-white"><a class="fanpage"
               href="javascript:void(0)"  title="fanpage image"
               rel="nofollow noopener external noreferrer" data-wpel-link="external">Copyright {{date ('Y')}} by </a><a
               class="text-white text-uppercase" href="javascript:void(0)" title="home">{{$setting->company}}</a>.
               Design by <a class="text-white" href="https://sbtsoftware.vn/" title="SBT"
               data-wpel-link="internal">SBT Software.</a></p>
         </div>
      </div>
   </div>
</div>
<div class="contact" id="contact">
   <a href="tel:{{$setting->phone1}}" title="contact" rel="nofollow noopener"
   data-wpel-link="internal">
   <div class="contact-wrap"><span class="fa fa-phone-alt"></span></div>
   </a>
</div>
<div class="contact contact-right">
   <a href="https://zalo.me/{{$setting->phone1}}" title="contact"
   rel="nofollow noopener external noreferrer" target="_blank" data-wpel-link="external">
   <div class="contact-wrap"><svg width="27" height="26" viewBox="0 0 27 26" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
         d="M3.93511 0H23.095C25.1914 0 26.8908 1.70421 26.8908 3.80664V21.5515C26.8908 23.6539 25.1914 25.3581 23.095 25.3581H3.93511C1.83868 25.3581 0.139343 23.6539 0.139343 21.5515V3.80664C0.139343 1.70421 1.83868 0 3.93511 0Z"
         fill="white"></path>
      <path
         d="M4.81411 22.2462C4.70843 22.1995 4.63211 22.1469 4.7554 22.0417C4.83172 21.9833 4.91391 21.9307 4.9961 21.8781C5.76518 21.3813 6.4873 20.8378 6.96284 20.0372C7.36205 19.371 7.29748 18.9794 6.79845 18.4885C4.01567 15.7185 2.79454 12.4049 3.40511 8.48945C3.75149 6.28042 4.76714 4.36943 6.24659 2.70973C7.13896 1.70456 8.20159 0.892246 9.36401 0.214341C9.43446 0.173433 9.53427 0.161745 9.54601 0.0565532C9.52253 -0.00188688 9.48143 0.0156451 9.4462 0.0156451C7.46773 0.0156451 5.48926 -0.0252629 3.51665 0.0273331C1.62624 0.0857732 -0.00585505 1.54093 1.57898e-05 3.62724C0.0117575 9.72254 1.57898e-05 15.8178 1.57898e-05 21.919C1.57898e-05 23.8124 1.45011 25.3962 3.3464 25.4663C4.94914 25.5306 6.55188 25.478 8.16049 25.4721C8.27791 25.478 8.39532 25.4838 8.51274 25.4838H16.9902C19.1037 25.4838 21.2172 25.4955 23.3308 25.4838C25.2916 25.4838 26.8826 23.9059 26.8826 21.9599V21.9248V18.5061C26.8826 18.4243 26.912 18.3366 26.8591 18.2489C26.7535 18.2548 26.7124 18.3424 26.6536 18.4009C25.5147 19.5405 24.1703 20.458 22.6967 21.1067C19.0861 22.6904 15.411 22.8014 11.683 21.5274C11.3601 21.4106 11.0078 21.3989 10.6732 21.4807C10.1801 21.6034 9.69278 21.7495 9.2055 21.8956C7.77301 22.3397 6.31117 22.5384 4.81411 22.2462V22.2462ZM9.07047 12.3991C9.17028 12.2705 9.22311 12.1946 9.28182 12.1186C10.0509 11.1485 10.82 10.1784 11.5891 9.20242C11.8122 8.92191 12.0352 8.63555 12.1761 8.2966C12.3405 7.9109 12.1644 7.54857 11.7652 7.40831C11.5891 7.35572 11.4012 7.33234 11.2133 7.34403C10.1683 7.33818 9.11744 7.33818 8.07243 7.34403C7.92566 7.34403 7.77888 7.36156 7.63798 7.39662C7.30922 7.47844 7.10961 7.81155 7.1918 8.14466C7.25051 8.36673 7.42663 8.54205 7.64973 8.59465C7.79063 8.62971 7.9374 8.64724 8.08417 8.6414C8.71822 8.64724 9.35814 8.6414 9.99219 8.64724C10.0626 8.64724 10.1507 8.60049 10.2035 8.70568C10.1507 8.77581 10.0979 8.84594 10.045 8.91022C9.13505 10.0556 8.23094 11.2069 7.32096 12.3523C7.09787 12.6387 6.98045 12.9543 7.14483 13.3049C7.30922 13.6556 7.64386 13.7198 7.98436 13.7432C8.25442 13.7607 8.53035 13.7491 8.80628 13.7491C9.75736 13.7491 10.7026 13.7549 11.6536 13.7432C12.1585 13.7374 12.4286 13.4335 12.3758 12.966C12.3347 12.5978 12.0822 12.4049 11.6125 12.3991C10.7848 12.3932 9.95697 12.3991 9.07047 12.3991V12.3991ZM15.8807 9.32515C15.1468 8.68815 14.3366 8.64724 13.5441 9.11476C12.5812 9.67579 12.229 10.5933 12.3464 11.6569C12.4579 12.6504 12.8924 13.4627 13.9374 13.7958C14.5891 14.0062 15.1938 13.9302 15.728 13.4978C15.8689 13.3867 15.91 13.4101 16.0098 13.5328C16.2035 13.7783 16.5382 13.8718 16.8317 13.7607C17.1253 13.6731 17.319 13.4043 17.319 13.1004C17.3249 11.9316 17.3307 10.7628 17.319 9.59397C17.3131 9.12645 16.8728 8.8284 16.4149 8.92191C16.1625 8.97451 16.0216 9.14398 15.8807 9.32515ZM19.9491 11.4933C19.9257 12.9543 21.1409 14.0588 22.6673 13.9068C24.0705 13.7666 24.9805 12.7205 24.9335 11.242C24.8865 9.78098 23.7945 8.78165 22.2975 8.82841C20.8944 8.86931 19.9022 9.99136 19.9491 11.4933V11.4933ZM19.4325 10.3303C19.4325 9.41281 19.4384 8.50114 19.4325 7.58363C19.4325 7.11611 19.1331 6.82391 18.6869 6.82976C18.2525 6.8356 17.9648 7.1278 17.9589 7.57779C17.9531 7.85246 17.9589 8.12128 17.9589 8.39595V13.0419C17.9589 13.4043 18.182 13.7198 18.4756 13.7958C18.8807 13.9068 19.2975 13.6672 19.4032 13.264C19.4208 13.1939 19.4325 13.1237 19.4266 13.0478C19.4384 12.142 19.4325 11.2361 19.4325 10.3303V10.3303Z"
         fill="black"></path>
      <path
         d="M8.21338 25.4762C6.60025 25.4762 4.98121 25.5288 3.36808 25.4703C1.4595 25.3943 0 23.81 0 21.9216C0 15.824 0.0118178 9.72632 0 3.6228C0 1.53568 1.64858 0.0799601 3.54534 0.0273436C5.53074 -0.0252729 7.52204 0.015651 9.51334 0.015651C9.54879 0.015651 9.59606 -0.00188781 9.61379 0.056575C9.60197 0.161808 9.49561 0.1735 9.43061 0.214424C8.26065 0.892593 7.19114 1.70522 6.29298 2.71078C4.80985 4.37113 3.7817 6.27701 3.43307 8.49275C2.81855 12.4039 4.05351 15.7246 6.84842 18.4957C7.34477 18.9927 7.40977 19.3785 7.01387 20.045C6.53525 20.8459 5.80845 21.3896 5.03439 21.8866C4.95166 21.9333 4.86894 21.9918 4.78621 22.0444C4.66213 22.1497 4.73894 22.2023 4.8453 22.249C4.86894 22.3017 4.89848 22.3484 4.93394 22.3952C5.61346 22.9915 6.25753 23.6288 6.92524 24.2368C7.23841 24.5232 7.55158 24.8214 7.85294 25.1196C7.97702 25.2306 8.18383 25.2657 8.21338 25.4762V25.4762Z"
         fill="#006AAD"></path>
      <path
         d="M8.21261 25.4749C8.18335 25.2702 7.97851 25.2351 7.8556 25.1123C7.55711 24.8082 7.24692 24.5158 6.93673 24.2292C6.27538 23.621 5.63744 22.9836 4.96438 22.3871C4.92926 22.3403 4.9 22.2935 4.87659 22.2409C6.36902 22.5333 7.82634 22.3344 9.26024 21.8958C9.74602 21.7496 10.2318 21.6034 10.7234 21.4806C11.057 21.3929 11.4082 21.4104 11.7301 21.5274C15.4407 22.8023 19.1045 22.6853 22.7097 21.1063C24.1787 20.4572 25.519 19.5449 26.6544 18.4045C26.7129 18.346 26.7539 18.2583 26.8593 18.2524C26.9119 18.3343 26.8827 18.422 26.8827 18.5098V21.9309C26.8944 23.8842 25.3259 25.4749 23.3711 25.4924H23.3418C21.2348 25.5041 19.1279 25.4924 17.0209 25.4924H8.56378C8.44672 25.4807 8.32967 25.4749 8.21261 25.4749V25.4749Z"
         fill="#006AAD"></path>
      <path
         d="M9.09514 12.4393C9.97831 12.4393 10.8088 12.4335 11.6335 12.4393C12.0956 12.4452 12.3471 12.6381 12.3939 13.0063C12.4465 13.4681 12.1775 13.778 11.6745 13.7838C10.727 13.7955 9.7853 13.7897 8.83779 13.7897C8.56289 13.7897 8.29385 13.8013 8.01895 13.7838C7.67972 13.7663 7.34634 13.6961 7.18257 13.3454C7.0188 12.9946 7.13578 12.679 7.35804 12.3925C8.25876 11.2468 9.16532 10.0952 10.0719 8.94945C10.1245 8.8793 10.1772 8.80916 10.2298 8.74485C10.1713 8.64548 10.0894 8.69224 10.0193 8.6864C9.38758 8.68055 8.75006 8.6864 8.11838 8.68055C7.97216 8.68055 7.82594 8.66301 7.68557 8.63379C7.35219 8.55779 7.14748 8.22459 7.22351 7.89723C7.27615 7.6751 7.45162 7.49388 7.67387 7.44127C7.81424 7.4062 7.96046 7.38866 8.10669 7.38866C9.14778 7.38282 10.1947 7.38282 11.2358 7.38866C11.423 7.38282 11.6043 7.4062 11.7856 7.45296C12.1833 7.58741 12.3529 7.95569 12.195 8.3415C12.0546 8.67471 11.8324 8.96114 11.6101 9.24758C10.8439 10.2238 10.0777 11.1942 9.31154 12.1587C9.24721 12.2347 9.18872 12.3107 9.09514 12.4393V12.4393Z"
         fill="#006AAD"></path>
      <path
         d="M15.9401 9.32399C16.0801 9.1423 16.2259 8.97234 16.465 8.92545C16.9257 8.83167 17.3572 9.13058 17.3631 9.59946C17.3806 10.7716 17.3747 11.9438 17.3631 13.116C17.3631 13.4208 17.1648 13.6904 16.879 13.7783C16.5875 13.8897 16.2551 13.8017 16.0626 13.5497C15.9635 13.4266 15.9227 13.4032 15.7827 13.5146C15.252 13.9483 14.6514 14.0245 14.004 13.8135C12.966 13.4735 12.5403 12.6589 12.4237 11.6684C12.3012 10.5958 12.6569 9.68151 13.6133 9.11886C14.4064 8.64412 15.2112 8.68515 15.9401 9.32399V9.32399ZM13.8757 11.4632C13.8874 11.7211 13.969 11.9673 14.1207 12.1724C14.4356 12.5944 15.0362 12.6823 15.462 12.3658C15.5319 12.3131 15.5961 12.2486 15.6544 12.1724C15.981 11.727 15.981 10.9944 15.6544 10.5489C15.4911 10.3204 15.2345 10.1856 14.9604 10.1797C14.3189 10.1387 13.8699 10.6368 13.8757 11.4632V11.4632ZM19.9815 11.4984C19.9348 9.99214 20.9204 8.86684 22.32 8.82581C23.8071 8.77893 24.8917 9.78115 24.9384 11.2464C24.985 12.7292 24.0811 13.7783 22.6874 13.919C21.1653 14.0714 19.9582 12.9636 19.9815 11.4984V11.4984ZM21.4452 11.3577C21.4336 11.6508 21.521 11.938 21.696 12.1783C22.0167 12.6003 22.6174 12.6823 23.0373 12.3541C23.1014 12.3072 23.1539 12.2486 23.2064 12.19C23.5446 11.7446 23.5446 10.9944 23.2122 10.5489C23.0489 10.3262 22.7923 10.1856 22.5183 10.1797C21.8884 10.1445 21.4452 10.6251 21.4452 11.3577V11.3577ZM19.4683 10.3321C19.4683 11.2405 19.4741 12.149 19.4683 13.0574C19.4741 13.4735 19.1476 13.8193 18.7335 13.8311C18.6635 13.8311 18.5877 13.8252 18.5177 13.8076C18.2262 13.7314 18.0046 13.4208 18.0046 13.0515V8.3921C18.0046 8.11664 17.9987 7.84704 18.0046 7.57157C18.0104 7.12028 18.2961 6.82723 18.7277 6.82723C19.1709 6.82137 19.4683 7.11442 19.4683 7.5833C19.4741 8.4976 19.4683 9.41777 19.4683 10.3321V10.3321Z"
         fill="#006AAD"></path>
      <path
         d="M13.7938 11.4537C13.788 10.6327 14.2384 10.1377 14.8759 10.1726C15.1508 10.1843 15.4082 10.3182 15.5719 10.5453C15.8995 10.9821 15.8995 11.7158 15.5719 12.1584C15.2561 12.5776 14.6536 12.665 14.2267 12.3505C14.1565 12.2981 14.0921 12.2341 14.0336 12.1584C13.8874 11.9545 13.8055 11.71 13.7938 11.4537V11.4537ZM21.386 11.3489C21.386 10.6268 21.8305 10.1435 22.4622 10.1785C22.7371 10.1843 22.9945 10.324 23.1582 10.5453C23.4916 10.9879 23.4916 11.7391 23.1524 12.1758C22.8248 12.5893 22.2165 12.6592 21.8012 12.3331C21.7369 12.2865 21.6843 12.2282 21.6375 12.1642C21.462 11.9254 21.3801 11.6401 21.386 11.3489V11.3489Z"
         fill="white"></path>
      </svg></div>
   </a>
</div>
