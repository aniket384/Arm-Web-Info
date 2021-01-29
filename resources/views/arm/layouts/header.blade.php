<head>
  <meta charset="utf-8">
  <title> @yield('title')-ARM Web Info Pvt.Ltd.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{asset('front_assets/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('front_assets/css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('front_assets/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{asset('front_assets/css/jcarousel.css')}}" rel="stylesheet" />
  <link href="{{asset('front_assets/css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('front_assets/css/style.css')}}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{asset('front_assets/skins/default.css')}}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('front_assets/ico/favicon.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('front_assets/ico/favicon.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('front_assets/ico/favicon.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('front_assets/ico/favicon.png')}}" />
  <link rel="shortcut icon" href="{{asset('front_assets/ico/arm.png')}}" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">       
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="{{url('/')}}"><img src="{{asset('front_assets/img/armweb.png')}}" alt="" class="logo" style="height: auto;width: 65%; margin-top: 2%;" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-toggler">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown">
                      <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{url('/about')}}">About Us</a>
                    </li>
                    <li class="dropdown">
                      <a href="{{url('/projects')}}">Projects</a>
                    </li>
                    <li>
                      <a href="{{url('/contact')}}">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->