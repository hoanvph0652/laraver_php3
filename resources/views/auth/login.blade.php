
@extends('layouts')
@section('title', 'POST')
@section('contents')
<!-- Code -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    </section>
	<form class="col-sm-6 col-sm-offset-3" method="POST" action="{{route('auth.login') }}">
		@csrf

		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" placeholder="EMAIL">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" placeholder="PASSWORD">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection