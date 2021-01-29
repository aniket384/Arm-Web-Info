@extends('arm.layouts.master')
@section('title','Project')
@section('content')
<section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h2>Our <span class="highlight"><strong> Projects</strong></span></h2>
            <div class="clearfix">
            </div>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  @foreach($projects as $project)
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span6 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$project->name}}" style="width: 500px;height: 250px;" href="uploads/project/{{$project->image}}">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb ">{{$project->project_name}} <br>Know More</span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="uploads/project/{{$project->image}}" alt="{{$project->project_description}}" style="height:250px;width: 500px;">
                  </li>
                  <!-- End Item Project -->
                  @endforeach
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection