@extends('arm.layouts.master')
@section('title','About Us')
@section('content')
<section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h2>Welcome to <strong>ARM Web Info</strong></h2>
            <p>
              ARM Web Info a newly started software company in partnership of three persons:-Aniket Mishra; Aman Bansal and Amit Singh Rajawat.Our Company works on latest technology and esures the client security.
            </p>
            <p>
              We work with all possible resources .It is not compoulsory to visit our office, you can book a website online just in by contacting us.We are always ready to work.Client happiness is our first priority
            </p>
            <p>
              ARM Web Info developes a website/application which is user friendly and requires less maintanence.We provide a new and trendy website which is unique and coded in secure envionment with all security features.
            </p>
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="{{asset('front_assets/img/works/full/image-02-full.jpg')}}" alt="" style="height: auto; width: auto;" />
                </li>
                <li>
                  <img src="{{asset('front_assets/img/works/full/image-03-full.jpg')}}" alt="" style="height: auto; width: auto;" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
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
        <div class="row">
          <div class="span12">
            <h4>Talented peoples behind ARM Web Info</h4>
          </div>
          <div class="span4">
            <img src="{{asset('front_assets/img/dummies/aniket.jpg')}}" alt="" class="img-polaroid" style="height: auto; width: 65%;" />
            <div class="roles">
              <p class="lead">
                <strong>Aniket Mishra</strong>
              </p>
              <p>
                General Manager/HR
              </p>
              <p>
                Laravel/Wordpress/Angular Designer
              </p>
              <p><a href="#" style="text-decoration: ">Know More</a></p>
            </div>
          </div>
          <div class="span4">
            <img src="{{asset('front_assets/img/dummies/amit.jpg')}}" alt="" class="img-polaroid" style="height: auto; width: 83%;" />
            <div class="roles">
              <p class="lead">
                <strong>Amit Singh Rajawat</strong>
              </p>
              <p>
                Founder
              </p>
              <p>
                Laravel API/Angular/ReactNative Developer
              </p>
              <p><a href="#" style="text-decoration: ">Know More</a></p>
            </div>
          </div>
          <div class="span4">
            <img src="{{asset('front_assets/img/dummies/aman.jpeg')}}" alt="" class="img-polaroid" style="height: auto; width: 54%;" />
            <div class="roles">
              <p class="lead">
                <strong>Aman Bansal</strong>
              </p>
              <p>
               CEO/MD
              </p>
              <p>
                Angular/ReactNative Designer
              </p>
              <p><a href="#" style="text-decoration: ">Know More</a></p>
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
        <div class="row">
          <div class="span6">
            <h4>More about us</h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							1. What we do </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>
                      We develop website and application which can be used on any platform.We create website and application using latest technology and innovative ideas.We always work according to our client, we develop as client require.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							2. Work process </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      You will get daily updates on your project which are under development.We provide a weakly report to the client about project.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							3. Security assurance </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      We always work in a secured environment, so dont't worry all your details are kept secret and after completing project all important information about your project is given in secured form, so no one can harm both of us.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							4. What we can deliver </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      We can make a website using:- Website on Angular+Laravel; Website on Only Laravel; Website on Wordpress.<br>
                      We Can make android/ios apps. using:- React Native, which is a latest and top treanding technology in app development market.<br>
                      We can customize an existing website in a new and fresh look. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <h4>Our expertise</h4>
            <label>Web Development:</label>
            <div class="progress progress-info progress-striped active">
              <div class="bar" style="width: 90%">
              </div>
            </div>
            <label>Wordpress :</label>
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width: 80%">
              </div>
            </div>
            <label>Android/IOS Application :</label>
            <div class="progress progress-warning progress-striped active">
              <div class="bar" style="width: 75%">
              </div>
            </div>
            <label>Customization :</label>
            <div class="progress progress-danger progress-striped active">
              <div class="bar" style="width: 70%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection