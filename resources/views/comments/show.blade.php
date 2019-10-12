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
                    <input type="text" name="id" class="form-control" id="id" readonly="readonly" value="{{ $comments->id }}">
                </div>
                <div class="form-group">
                    <label for="post_id" class="form-label">Post_id</label>
                    <input type="text" name="post_id" class="form-control" id="post_id" readonly="readonly" value="{{ $comments->post_id }}">
                </div>
                <div class="form-group">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" name="content" class="form-control" id="content" readonly="readonly" value="{{ $comments->content }}">
                </div>
                <div class="form-group">
                    <label for="user_id" class="form-label">User_id</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" readonly="readonly" value="{{ $comments->user_id }}">
                </div>              
                <div class="form-group">
                    <label for="is_active" class="form-label">Category_id</label>
                    <input type="text" name="is_active" class="form-control" id="is_active" readonly="readonly" value="{{ $comments->is_active }}">
                </div>                

            </form>
            <form action="{{route('comments.index')}}">
            @csrf
                <div class="form-group">
                    <button class="btn btn-danger">Back</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection