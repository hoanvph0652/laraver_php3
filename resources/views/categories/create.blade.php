@extends('layouts')
@section('title', 'Post Create')
@section('contents')
<!-- Code -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Category
        <small>Create Category</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
   
    <form action="{{ route('categories.store') }}" method="POST">
    @csrf
      <div class="form-group">
        <label class="form-label" >User_id</label>
        <input class="form-control" type="text" name="user_id">
      </div>
      <div class="form-group">
        <label class="form-label">Name</label>
        <input class="form-control" type="text" name="name">
      </div>

      <button class="btn btn-success">Submit</button>

    </form>
    <form action="{{route('categories.index')}}">
      @csrf
      <div class="form-group">
        <button class="btn btn-danger">Cancel</button>
      </div>
    </form>
  </section>
</div>
@endsection