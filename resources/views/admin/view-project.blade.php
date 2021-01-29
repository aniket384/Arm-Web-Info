@extends('admin.layouts.master')
@section('title','View Project')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-tasks"></i>
    </div>
    <div class="header-title">
        <h1>View Projects</h1>
            <small>Project List</small>
    </div>
</section>
    
<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-sm-12">
    <div class="panel panel-bd lobidrag">
    <div class="panel-heading">
    <div class="btn-group" id="buttonexport">
        <a href="#">
            <h4>Add Project</h4>
        </a>
    </div>
    </div>
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
    <div class="panel-body">
<!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
    <div class="btn-group">
    <div class="buttonexport" id="buttonlist"> 
        <a class="btn btn-add" href="{{url('4rmw3b/add-project')}}"> <i class="fa fa-plus"></i> Add Project
        </a>  
    </div>
           
    </div>
<!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
    <div class="table-responsive">
        <table id="table_id" class="table table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <td>ID</td>
                    <th>Project Name</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->project_name}}</td>
                    <td>
                        @if(!empty($project->image))
                        <img src="{{asset('/uploads/project/'.$project->image)}}" alt="" style="width:100px;">
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
<!-- /.content -->
        </div>
<!-- /.content-wrapper -->
@endsection