@extends('layouts')
@section('title', 'Show')
@section('contents')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Show
                <small>Show</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">

            <form action="" method="POST">
                <div class="form-group">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" name="id" class="form-control" id="id" readonly="readonly" value="{{ $categories->id }}">
                </div>
                <div class="form-group">
                    <label for="user_id" class="form-label">User_id</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" readonly="readonly" value="{{ $categories->user_id }}">
                </div>              
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" readonly="readonly" value="{{ $categories->name }}">
                </div>                

            </form>
            <form action="{{route('categories.index')}}">
            @csrf
                <div class="form-group">
                    <button class="btn btn-danger">Back</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection