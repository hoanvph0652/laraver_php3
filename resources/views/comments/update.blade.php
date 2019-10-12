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

            <form action="{{ url('comments/update/' . $comment->id ) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="post_id" class="form-label">Post_id</label>
                    <input type="text" name="post_id" class="form-control" id="post_id" value="{{ $comment->post_id }}">
                </div>
                <div class="form-group">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" name="content" class="form-control" id="content" value="{{ $comment->content }}">
                </div>
                <div class="form-group">
                    <label for="user_id" class="form-label">User_id</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" value="{{ $comment->user_id }}">
                </div>
                <div class="form-group">
                    <label for="is_active" class="form-label">Is_active</label>
                    <input type="text" name="is_active" class="form-control" id="is_active" value="{{ $comment->is_active }}">
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>
            <form action="{{route('comments.index')}}">
            @csrf
                <div class="form-group">
                    <button class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection