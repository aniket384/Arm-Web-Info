@extends('arm.layouts.master')
@section('title','Home')
@section('content')
@if(Session::has('flash_message_error'))
                <div class="alert alert-sm alert-danger alert-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif

            @if(Session::has('flash_message_success'))
                <div class="alert alert-sm alert-success alert-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
  <div id="wrapper">
    <!-- toggle top area -->
    
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="{{asset('front_assets/img/slides/nivo/bg-1.jpeg')}}" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="{{asset('front_assets/img/slides/nivo/bg-2.jpeg')}}" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="{{asset('front_assets/img/slides/nivo/bg-3.jpg')}}" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Awesome <strong>features</strong></h2>
                  <p>
                    Website with awesome features are developed with latest technology and strong security.
                  </p>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Fully <strong>responsive</strong></h2>
                  <p>
                    Websites are fully responsive. User ca use int on any device with largest to smallest screen, their is no effect of it on device
                  </p>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Very <strong>customizable</strong></h2>
                  <p>
                    Our codes are very simple and every one can understand. Website can we easily customized
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Main features of <span class="highlight"><strong> website</strong></span> we develop!</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Corporate business</h6>
                    <p>
                      We build ecommerce and business website with trendy look and easy to use. We use latest frameworks and languages.
                    </p>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Responsive theme</h6>
                    <p>
                      We build website which can we used on any device, with full response and view.
                    </p>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Coded carefully</h6>
                    <p>
                      We always code in secured environment with easy to understand by any one. Our code are very easy to handel and maintain
                    </p>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-lock icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>FUlly Secured</h6>
                    <p>
                      Client security is our policy. We esure you about security, we always kept in mind while coding. Security of our websites are very strong and effective.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading">Technology Which We <strong>Use</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="React Native" href="{{asset('front_assets/img/works/full/react native.png')}}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb">React Native</span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{asset('front_assets/img/works/thumbs/react native.png')}}" style="height: auto; width: 52%" alt="React Native is a JavaScript framework for writing real, natively rendering mobile applications for iOS and Android.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Angular" href="{{asset('front_assets/img/works/full/angular.png')}}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb">Angular</span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{asset('front_assets/img/works/thumbs/angular.png')}}" style="height: auto; width: 52%" alt="AngularJS is a structural framework for dynamic web apps. It lets you use HTML as your template language.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Laravel" href="{{asset('front_assets/img/works/full/laravel.png')}}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb">Laravel</span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{asset('front_assets/img/works/thumbs/laravel.png')}}" style="height: auto; width: 52%" alt="Laravel is a web application framework with expressive, elegant syntax.Laravel attempts to take the pain out of development.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="WordPress" href="{{asset('front_assets/img/works/full/wordpress.png')}}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb">Wordpress</span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="{{asset('front_assets/img/works/thumbs/wordpress.png')}}" style="height: auto; width: 52%" alt="WordPress is the most popular open source Content Management System (CMS), used by approximately 75 million websites.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                </ul>
              </section>

            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- <div class="row">
          <div class="span12">
            <h4>Very satisfied <strong>clients</strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client1.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client2.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client3.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client4.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client5.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client6.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client1.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client2.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client3.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client4.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client5.png')}}" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="{{asset('front_assets/img/dummies/clients/client6.png')}}" class="client-logo" alt="" />
					</a>
              </li>
            </ul>
          </div>
        </div> -->
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection