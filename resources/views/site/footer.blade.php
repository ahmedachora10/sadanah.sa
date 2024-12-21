   <!-- ==================== Start Footer ==================== -->
<?php
$x = setting('x');
$instagram = setting('instagram');
$linkedin = setting('linkedin');
$telegram = setting('telegram');
$tiktok = setting('tiktok');
$snapchat = setting('snapchat');
$whatsapp = setting('whatsapp');
$youtube = setting('youtube');
$footer_ar = setting('footer_ar');
$footer_en = setting('footer_en');
$phone = setting('phone');
$email = setting('email');
$profileFile = setting('profile_file_'.app()->getLocale());
?>
   <footer class="modern-footer pt-80">
    <div class="footer-container">
      <div class="container ontop">
        <div class="row pb-30 bord-thin-bottom">
          <div class="col-lg-2">
            <div class="logo icon-img-120">
              <img src="{{asset('assets/imgs/logo-light.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-center justify-content-start">
            <h6 class="footer_title">
              @if (app()->getLocale() == 'ar')
              الشريك الذي لا يخون، والرقي والصون الذي يمتلك الإحساس والعقل والقوة الكامنة ليكون عونك على النجاح.
              @else
              The partner that never betrays, a preserves and holds the power that works in the sense of ascending passion to give you the success you need.
              @endif
            </h6>
          </div>
          <div class="col-lg-5">
            <div class="social-media d-flex justify-content-end">
              <ul class="rest d-flex align-items-center fz-14">
                <li class="cursor-pointer social_footer mx-2">
                  <a href="{{$x}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fa-brands fa-x-twitter"></i>
                  </a>
                </li>
                <li class="cursor-pointer social_footer mx-1">
                  <a href="{{$linkedin}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fab fa-linkedin mr-10"></i>
                  </a>
                </li>
                <li class="cursor-pointer social_footer mx-1 ">
                  <a href="{{$tiktok}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fab fa-tiktok mr-10"></i>
                  </a>
                </li>
                <li class="cursor-pointer social_footer mx-1 ">
                  <a href="{{$youtube}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fab fa-youtube mr-10"></i>
                  </a>
                </li>
                <li class="cursor-pointer social_footer mx-1 ">
                  <a href="{{$snapchat}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fab fa-snapchat mr-10"></i>
                  </a>
                </li>
                <li class="cursor-pointer social_footer mx-1">
                  <a href="{{$telegram}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fab fa-telegram mr-10"></i>
                  </a>
                </li>
                <li class="cursor-pointer social_footer mx-1">
                  <a href="{{$instagram}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fab fa-instagram mr-10"></i>
                  </a>
                </li>
                <li class="cursor-pointer social_footer mx-1">
                  <a href="{{$whatsapp}}" target="_blank" class="hover-anim social-icon"
                    ><i class="fab fa-whatsapp mr-10"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-80">
          <div class="col-lg-7">
            <div class="call-action">
              <h4 class="d-slideup wow ">
                <span class="sideup-text">
                  <span class="up-text">
                    @if (app()->getLocale() == 'ar')
                    {{$footer_ar}}
                    @else
                    {{$footer_en}}
                    @endif
                   </span>
                </span>
                <span class="sideup-text">
                  <span class="up-text underline"
                    ><a
                      href="{{route('contactus')}}"
                      class="main-color">
                      {{__('front.click here')}}
                    </a></span
                  >
                </span>
              </h4>
              <div class="info mt-80 d-flex align-items-center row">
                <div class="col-lg-6 col-12">
                  <a
                    href="#0"
                    class="butn butn-md butn-bord-thin radius-30 w-100 text-center"
                  >
                    <span class="text">
                      {{$email}}
                    </span>
                  </a>
                </div>
                <div class="col-lg-6 col- mt-4 mt-lg-0">
                  <a
                    href="#0"
                    class="butn butn-md butn-bord-thin radius-30 w-100 text-center">
                  <span class="text" style="direction: ltr; unicode-bidi: embed;">
                    {{$phone}}
                  </span>
                   </a>
                </div>
              </div>
              <div class="row">
                <div class="subscribe-minimal mt-4 col-12 col-lg-6">
                  <a
                    href="{{ asset($profileFile) }}"
                    class="butn butn-md butn-bord-thin radius-30 w-100 d-flex align-items-center justify-content-center"
                    download >
                    <span class="sub-title"
                      >{{__('front.Download Profile')}}</span
                    >
                    <i class="fas fa-cloud-download-alt"></i>
                  </a>
                </div>

                {{-- <div class="subscribe-minimal mt-4 col-lg-6">
                  <form action="contact.php">
                    <div class="form-group rest">
                      <input type="email" placeholder="Type Your Email" />
                      <button type="submit">
                        <i class="ti-arrow-top-right"></i>
                      </button>
                    </div>
                  </form>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-{{app()->getLocale() == 'ar' ? '3' : '4'}} offset-lg-1 bord-left">
            <div class="column">
              <h6 class="sub-title mb-30" >
                {{__('front.Useful Links')}}
              </h6>
              <div class="">
                <div class="">
                  <ul class="rest fz-14 row row-cols-1 row-cols-3 g-4">
                    <li class="mb-15 col">
                      <a href="{{route('home')}}" >{{__('front.home')}}</a>
                    </li>
                    <li class="mb-15 col">
                      <a href="{{route('blog')}}">{{__('front.Blogs')}}</a>
                    </li>

                    <li class="mb-15 col">
                      <a href="{{route('about')}}"
                        >{{__('front.about')}}</a
                      >
                    </li>
                    <li class="mb-15 col">
                      <a href="{{route('job')}}" >{{__('front.jobs')}}</a>
                    </li>
                    <li class="mb-15 col">
                      <a href="{{route('service')}}"
                        >{{__('front.services')}}</a
                      >
                    </li>
                    <li class="mb-15 col">
                      <a href="{{route('influencers')}}"
                        >{{__('front.Influencers')}}</a
                      >
                    </li>
                    <li class="mb-15 col">
                      <a
                        href="{{route('portfolio')}}"

                        >{{__('front.Portfolio')}}</a
                      >
                    </li>

                    <li class="mb-15 col">
                      <a href="{{route('contactus')}}"
                        >{{__('front.Contact Us')}}</a
                      >
                    </li>
                    {{-- <li class="col">
                      <a href="page-FAQS.html" data-i18n="faq">FAQS</a>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
            <div class="column mt-4 insta_footer">
              <h6 class="sub-title mb-30" data-i18n="insta"></h6>
              <div class="row">
                <div class="col-4">
                  <a href="" target="_blank">
                    <div class="image-insta">
                      <img
                        src="https://images.pexels.com/photos/9368777/pexels-photo-9368777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                      />
                      <div class="icon-insta">
                        <i class="fab fa-instagram"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="">
                    <div class="image-insta">
                      <img
                        src="https://images.pexels.com/photos/11911058/pexels-photo-11911058.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                      />
                      <div class="icon-insta">
                        <i class="fab fa-instagram"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="">
                    <div class="image-insta">
                      <img
                        src="https://images.pexels.com/photos/9368777/pexels-photo-9368777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                      />
                      <div class="icon-insta">
                        <i class="fab fa-instagram"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="">
                    <div class="image-insta">
                      <img
                        src="https://images.pexels.com/photos/1933239/pexels-photo-1933239.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                      />
                      <div class="icon-insta">
                        <i class="fab fa-instagram"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="#0">
                    <div class="image-insta">
                      <img
                        src="https://images.pexels.com/photos/9368777/pexels-photo-9368777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                      />
                      <div class="icon-insta">
                        <i class="fab fa-instagram"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center pt-30 pb-30 sub-bg mt-80">
          @if (app()->getLocale() == 'ar')
          <p class="fz-14" >
            جميع الحقوق محفوظة لشركة
           <span class="underline" style="color: var(--primary-color)">
             <img src="{{asset('assets/imgs/logo-light.png')}}" alt="سدنه" style="height: 20px; vertical-align: middle;">
           </span>
           ©{{date('Y')}}
         </p>
          @else
          <p class="fz-14" >

            All rights reserved to the company
            <span class="underline" style="color: var(--primary-color)">
                SADNAH
            </span>
            ©{{date('Y')}}
         </p>
          @endif

        </div>

      </div>
    </div>
  </footer>

  <!-- ==================== End Footer ==================== -->
</div>
</div>

<!-- jQuery -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.4.0.min.js')}}"></script>

<!-- plugins -->
<script src="{{asset('assets/js/plugins.js')}}"></script>

<script src="{{asset('assets/js/gsap.min.js')}}"></script>
<script src="{{asset('assets/js/ScrollSmoother.min.js')}}"></script>
<script src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('assets/js/smoother-script.js')}}"></script>
<script src="{{asset('assets/js/hscroll.js')}}"></script>
<script src="{{asset('assets/js/hscroll.js')}}"></script>

<!-- custom scripts -->
<script src="{{asset('assets/js/scripts.js')}}?v={{str()->random(5)}}"></script>
</body>
</html>
