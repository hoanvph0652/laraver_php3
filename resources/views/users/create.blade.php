@extends('layouts')
@section('title', 'Create User')
@section('contents')
<!-- Code -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create
        <small>Create</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

   
    <form action="{{ route('store') }}" method="POST">
    @csrf
      <div class="form-group">
          <label class="form-label">Name</label>
          <input class="form-control" type="text" name="name">
      </div>
      <div class="form-group">
        <label class="form-label">Email</label>
        <input class="form-control" type="text" name="email">
      </div>
      <div class="form-group">
        <label class="form-label">PhoneNumber</label>
        <input class="form-control" type="text" name="phonenumber">
      </div>
      <div class="form-group">
        <label class="form-label" >Birthday</label>
        <input class="form-control" type="date" name="birthday">
      </div>
      <div class="form-group">
        <label class="form-label">Role</label>
        <input class="form-control" type="text" name="role">
      </div>
      <button class="btn btn-success">Submit</button>

    </form>
    <form action="{{route('index')}}">
      @csrf
      <div class="form-group">
        <button class="btn btn-danger">Cancel</button>
      </div>
    </form>
  </section>
</div>
@endsection