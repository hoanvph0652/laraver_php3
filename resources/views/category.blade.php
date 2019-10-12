@extends('layouts')
@section('title', 'Categories')
@section('contents')
<!-- Code -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories
        <small>Categories</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <section class="content container-fluid">
      @if(empty($categories))
      <p>No Data</p>
    @else
      <table class="table">
        <thead>
          <th>Id</th>
          <th>User_id</th>
          <th>Name</th>
            <th><a href="{{route('categories.create')}}" class="btn btn-success">Create</a></th>
        </thead>
        <tbody>
          @foreach($categories as $category)
            <tr>
              <td>{{$category['id']}}</td>
              <td>{{$category['user_id']}}</td>
              <td>{{$category['name']}}</td>
              <td>
                  <a href="{{ route('categories.show',['id'=>$category['id']]) }}" class="btn btn-success">Details</a>
               </td>
              <td><a href="{{ route('categories.edit',['id'=>$category['id']]) }}" class="btn btn-primary">Update</a></td>
              <td>                  
                <form action="{{ route('categories.delete',['id'=>$category['id']]) }}" method="POST">
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