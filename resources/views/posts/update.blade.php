@extends('layouts')
@section('title', 'Update')
@section('contents')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Update
                <small>Update</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <form action="{{ url('posts/update/' . $post->id ) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" name="content" class="form-control" id="content" value="{{ $post->content }}">
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label">Category_id</label>
                    <input type="text" name="category_id" class="form-control" id="category_id" value="{{ $post->category_id }}">
                </div>
                <div class="form-group">
                    <label for="user_id" class="form-label">User_id</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" value="{{ $post->user_id }}">
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>
            <form action="{{route('posts.index')}}">
            @csrf
                <div class="form-group">
                    <button class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection