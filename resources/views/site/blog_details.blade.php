@include('site.header')

      <div id="smooth-content">
        <main class="main-bg">
          <!-- ==================== Start Slider ==================== -->

          <!-- ==================== Start Header ==================== -->

          <header
            class="page-header bg-img section-padding"
            data-background="assets/imgs/header/b5.jpg"
            data-overlay-dark="9"
          >
            <div class="container pt-100">
              <div class="text-center">
                <h1>
                  {{$blog->title}}
                </h1>
                <div class="mt-15">
                  <a href="{{route('home')}}" data-i18n="home">{{__('front.home')}}</a>
                  <span class="padding-rl-20">|</span>
                  <a href="{{route('blog')}}" data-i18n="blogs">{{__('front.Blogs')}}</a>
                  <span class="padding-rl-20">|</span>
                  <span style="color: var(--primary-color)">{{__('front.Details')}}</span>
                </div>
              </div>
            </div>
          </header>

          <!-- ==================== End Header ==================== -->

          <!-- ==================== End Slider ==================== -->

          <!-- ==================== Start Blog ==================== -->

          <section class="blog section-padding">
            <div class="container">
              <div class="row xlg-marg">
                <div class="col-lg-8">
                  <div class="main-post">
                    <div class="item pb-60">
                      <article>
                        <div class="mb-5">
                            <img src="{{asset($blog->thumbnail)}}" width="100%" height="474px" alt="{{$blog->title}}">
                            <span class="text-end text-muted fw-600 mt-3">{{ $blog->author }}</span>
                        </div>
                        <div class="title mt-30">
                          <h4>{{$blog->title}}</h4>
                        </div>
                        <div class="text mt-20">
                          <p>
                          {{$blog->content}}
                          </p>
                        </div>
                      </article>
                    </div>
                    <div class="info-area flex pt-50 bord-thin-top">
                      <div class="ml-auto">
                        <div class="share-icon flex">
                          <div class="valign">
                            <span data-i18n="share">{{__('front.Share')}} :</span>
                          </div>
                          <div>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"target="_blank" >
                              <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode(request()->fullUrl()) }}&hashtags=example,news">
                              <i class="fa-brands fa-x-twitter"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    @foreach ($comments as $comment)
                    <div class="author-area mt-50 bord-thin-bottom">
                      <div class="flex">
                        <div class="author-img mr-30">
                          <div class="img">
                            <img
                              src="{{asset('assets/imgs/blog/author.png')}}"
                              alt=""
                              class="circle-img"
                            />
                          </div>
                        </div>
                        <div class="cont valign">
                          <div class="full-width">
                            <h6 class="fw-600 mb-10">{{$comment->name}}</h6>
                            <p>
                              {{$comment->message}}
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach

                  </div>
                  <div class="comments-from mt-80">
                    <div class="mb-60">
                      <h3 data-i18n="leavComment">{{__('front.Leave a comment')}}</h3>
                    </div>
                    <form  method="post" action="{{route('add.comment')}}">
                      @csrf
                      <div class="messages"></div>
                      <input type="hidden" value="{{$blog->id}}" name="blog_id">
                      <div class="controls row">
                        <div class="col-lg-6">
                          <div class="form-group mb-30">
                            <label
                              class="mb-1"
                              for="name"
                              data-i18n="name"
                            >{{ trans('table.columns.name') }}</label>

                            <input
                              id="form_name"
                              type="text"
                              name="name"
                              required="required"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group mb-30">
                            <label
                              class="mb-1"
                              for="email"
                              data-i18n="email"
                            >{{ trans('table.columns.email') }}</label>
                            <input
                              id="form_email"
                              type="email"
                              name="email"
                              required="required"
                            />
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label
                              class="mb-1"
                              for="message"
                              data-i18n="message"
                            >{{ trans('table.columns.comment') }}</label>
                            <textarea
                              id="form_message"
                              name="message"
                              rows="4"
                              required="required"
                            ></textarea>
                          </div>
                          <div class="text-center">
                            <div class="mt-30">
                              <input type="submit" value="{{__('front.Post Comment')}}">
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar">
                    <div class="widget last-post-thum">
                      <h6 class="title-widget" data-i18n="latestPosts">
                        {{__('front.latest Posts')}}
                      </h6>
                      @foreach ($latest as $item)
                      <div class="item d-flex align-items-center">
                        <div>
                          <div class="img">
                            <a href="{{route('blog.details',$item)}}">
                              <img src="{{asset($item->thumbnail)}}" alt="" />
                              <span class="date">
                                <span>
                                  {{ $item->created_at->format('Y F d') }}
                                </span>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="cont">
                          <span class="tag"
                            ><a href="{{route('blog.details',$item)}}">
                              {{ $item->created_at->format('Y F d') }}
                            </a></span
                          >
                          <h6>
                            <a href="{{route('blog.details',$item)}}">
                              {{$item->title}}
                            </a
                            >
                          </h6>
                        </div>
                      </div>
                      @endforeach


                    </div>
                    {{-- <div class="widget tags">
                      <h6 class="title-widget" data-i18n="tags">Tags</h6>
                      <div>
                        <a href="blog-list.html">Creative</a>
                        <a href="blog-list.html">Design</a>
                        <a href="blog-list.html">Dark & Light</a>
                        <a href="blog-list.html">Minimal</a>
                        <a href="blog-list.html">sadnah</a>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ==================== End Blog ==================== -->

          <!-- ==================== Start recent Blog ==================== -->

          <!-- <section class="blog-list-half section-padding sub-bg">
            <div class="container">
              <div class="sec-head mb-80">
                <h6 class="sub-title main-color mb-25" data-i18n="ourBlog">
                  Our Blog
                </h6>
                <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                  <h2 class="fw-600" data-i18n="readLatest">Read Latest</h2>
                  <h2
                    class="fw-200"
                    style="margin-inline-start: 0.5rem"
                    data-i18n="readLatestNews"
                  >
                    News
                  </h2>
                  <div class="ml-auto">
                    <a href="blog-list.html" class="go-more">
                      <span class="text" data-i18n="viewPosts"
                        >View all posts</span
                      >
                      <span class="icon ti-arrow-top-right"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="item main-bg md-mb50">
                    <div class="row rest">
                      <div class="col-lg-6 col-md-5 img rest">
                        <img
                          src="assets/imgs/blog/b/2.jpg"
                          alt=""
                          class="img-post"
                        />
                        <div class="author d-flex align-items-center">
                          <div>
                            <div class="fit-img icon-img-50 circle">
                              <img src="assets/imgs/blog/author.png" alt="" />
                            </div>
                          </div>
                          <div class="ml-15 fz-14">
                            <div>
                              <span class="opacity-7" data-i18n="postedBy"
                                >Posted by</span
                              ><br />UI-sadanh
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-7 cont valign">
                        <div class="full-width">
                          <div class="tags mb-15">
                            <a href="blog-list.html">Marketing</a>
                          </div>
                          <h5>
                            <a href="blog-details.html"
                              >Free advertising for your online business.</a
                            >
                          </h5>
                          <span class="date fz-12 ls1 text-u opacity-7 mt-80"
                            >August 6, 2022</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="item main-bg">
                    <div class="row rest">
                      <div class="col-lg-6 col-md-5 img rest">
                        <img
                          src="assets/imgs/blog/b/3.jpg"
                          alt=""
                          class="img-post"
                        />
                        <div class="author d-flex align-items-center">
                          <div>
                            <div class="fit-img icon-img-50 circle">
                              <img src="assets/imgs/blog/author.png" alt="" />
                            </div>
                          </div>
                          <div class="ml-15 fz-14">
                            <div>
                              <span class="opacity-7" data-i18n="postedBy"
                                >Posted by</span
                              ><br />UI-ThemeZ
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-7 cont valign">
                        <div class="full-width">
                          <div class="tags mb-15">
                            <a href="blog-list.html">Marketing</a>
                            <a href="blog-list.html">Design</a>
                          </div>
                          <h5>
                            <a href="blog-details.html"
                              >Business meeting 2023 in San Francisco.</a
                            >
                          </h5>
                          <span class="date fz-12 ls1 text-u opacity-7 mt-80"
                            >August 6, 2022</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->

          <!-- ==================== End recent Blog ==================== -->
        </main>

        @include('site.footer')
