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

            <form action="{{ url('categories/update/' . $category->id ) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="user_id" class="form-label">User_id</label>
                    <input type="text" name="user_id" class="form-control" id="user_id" value="{{ $category->user_id }}">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}">
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>
            <form action="{{route('categories.index')}}">
            @csrf
                <div class="form-group">
                    <button class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection