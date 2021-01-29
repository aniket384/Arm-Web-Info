@extends('admin.layouts.master')
@section('title','Client Message')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-tasks"></i>
    </div>
    <div class="header-title">
        <h1>View Message</h1>
    </div>
</section>
    
<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-sm-12">
    <div class="panel panel-bd lobidrag">
    <div class="panel-heading">
    </div>
    <div class="panel-body">

    <div class="table-responsive">
        <table id="table_id" class="table table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <td>ID</td>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>E-mail</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
               @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->message}}</td>
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