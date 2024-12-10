@include('site.header')

      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Header ==================== -->

          <header
            class="page-header bg-img section-padding"
            data-background="assets/imgs/header/bg1.jpg"
            data-overlay-dark="9"
          >
            <div class="container pt-100">
              <div class="text-center">
                <h1 data-i18n="Blogs">{{__('front.Blogs')}}</h1>
                <div class="mt-15">
                  <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)" data-i18n="blogs">{{__('front.Blogs')}}
                  </span>
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== Start Blog ==================== -->

          <section class="blog-crev section-padding">
            <div class="container">
              <div class="row">

                @foreach ($blogs as $blog)
                    
                <div class="col-lg-4 col-12">
                  <div class="item sub-bg mb-40">
                    <div class="img">
                      <img src="{{asset('storage/'.$blog->image)}}" alt="blog" />
              
                    </div>
                    <div class="cont">
                      <div class="date fz-13 text-u ls1 mb-10 opacity-7">
                        <a href="{{route('blog.details',['id'=>$blog->id])}}">{{ $blog->created_at->format('d F Y') }}</a>
                      </div>
                      <h5 class="blog_cerv_title">
                        <!-- <a href="{{route('blog.details',['id'=>$blog->id])}}">
                          @if (session()->get('lang') == 'ar')
                          {{$blog->title_ar}}
                          @else  
                          {{$blog->title_en}}
                          @endif
                          </a> -->
                          <a href="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dignissimos esse sint nihil necessitatibus voluptatum doloremque magnam omnis, itaque, aperiam quia veritatis quas maiores. Sapiente eligendi eaque neque velit omnis?
                          </a>
                      </h5>
                      <a
                        href="{{route('blog.details',['id'=>$blog->id])}}"
                        class="d-flex align-items-center mt-30">
                        <span class="text mr-15" data-i18n="readMore">{{__('front.Read More')}}</span>
                        <span class="ti-arrow-top-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
                @endforeach

                  
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End Blog ==================== -->
        </main>
        @include('site.footer')
