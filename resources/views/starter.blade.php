@extends('layouts')
@section('title', 'HOME PAGE')
@section('contents')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      @if(empty($users))
        <p>No Data</p>
      @else
        <table class="table">
          <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>BirthDay</th>
            <th>Posts</th> 
            <th><a href="{{route('create')}}" class="btn btn-success">Create</a></th>

          </thead>
          <tbody>

            @foreach($users as $user)
            <tr>
               <td>{{ $user['id']}}</td>
               <td>{{ $user['name']}}</td>
               <td>{{ $user['email']}}</td>
               <td>{{ $user['phonenumber']}}</td>
               <td>{{ $user['birthday']}}</td>
               <td>{{ count($user['posts'])}}</td>
               <td>
                  <a href="{{ route('show',['id'=>$user['id']]) }}" class="btn btn-success">Details</a>
               </td>
              <td><a href="{{ route('edit',['id'=>$user['id']]) }}" class="btn btn-primary">Update</a></td>
              <td>                  
                <form action="{{ route('delete',['id'=>$user['id']]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </section>
  </div>
@endsection