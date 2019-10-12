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
                    <input type="text" name="id" class="form-control" id="id" readonly="readonly" value="{{ $posts->id }}">
                </div>
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" readonly="readonly" value="{{ $posts->title }}">
                </div>
                <div class="form-group">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" name="content" class="form-control" id="content" readonly="readonly" value="{{ $posts->content }}">
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label">Category_id</label>
                    <input type="text" name="category_id" class="form-control" id="category_id" readonly="readonly" value="{{ $posts->category_id }}">
                </div>                
                <div class="form-group">
                    <label for="user_id" class="form-label">User_id</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" readonly="readonly" value="{{ $posts->user_id }}">
                </div>              

            </form>
            <form action="{{route('posts.index')}}">
            @csrf
                <div class="form-group">
                    <button class="btn btn-danger">Back</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection