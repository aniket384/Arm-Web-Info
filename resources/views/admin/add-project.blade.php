@extends('admin.layouts.master')
@section('title','Add Project')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
      <i class="fa fa-product-hunt"></i>
      </div>
      <div class="header-title">
         <h1>Add Project</h1>
         <small>Add Project</small>
      </div>
   </section>
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
<!-- Main content -->
   <section class="content">
      <div class="row">
<!-- Form controls -->
      <div class="col-sm-12">
      <div class="panel panel-bd lobidrag">
      <div class="panel-heading">
      <div class="btn-group" id="buttonlist"> 
         <a class="btn btn-add " href="{{url('4rmw3b/view-project')}}"> 
            <i class="fa fa-eye"></i>  View Project </a>  
      </div>
      </div>
      <div class="panel-body">
      <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/4rmw3b/add-project')}}" method="post">
      {{csrf_field()}}
      <div class="form-group">
         <label>Project Name</label>
            <input type="text" class="form-control" placeholder="Enter Project Name" name="project_name" id="project_name" required>
      </div>
       <div class="form-group">
         <label>Project Description</label>
             <textarea name="project_description" id="project_description" class="form-control">
             </textarea>
      </div>
       <div class="form-group">
         <label>Project Link</label>
             <input type="text" class="form-control" placeholder="Enter Project Link" name="project_link" id="project_link" required>
      </div>
      <div class="form-group">
         <label>Project Image</label>
            <input type="file" name="image">
      </div>                        
      <div class="reset-button">
            <input type="submit" class="btn btn-success" value="Add-Project">
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
   </section>
<!-- /.content -->
      </div>
@endsection