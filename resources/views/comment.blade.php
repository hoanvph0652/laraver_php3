@extends('layouts')
@section('title', 'Comment')
@section('contents')
<!-- Code -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Comments
        <small>Comments</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <section class="content container-fluid">
      @if(empty($comments))
      <p>No Data</p>
    @else
      <table class="table">
        <thead>
          <th>Id</th>
          <th>Post_id</th>
          <th>Content</th>
          <th>User_id</th>
          <th>Is_active</th>
            <th><a href="{{route('comments.create')}}" class="btn btn-success">Create</a></th>

        </thead>
        <tbody>
          @foreach($comments as $comment)
            <tr>
              <td>{{$comment['id']}}</td>
              <td>{{$comment['post_id']}}</td>
              <td>{{$comment['content']}}</td>
              <td>{{$comment['user_id']}}</td>
              <td>{{$comment['is_active']}}</td>
              <td>
                  <a href="{{ route('comments.show',['id'=>$comment['id']]) }}" class="btn btn-success">Details</a>
               </td>
              <td><a href="{{ route('comments.edit',['id'=>$comment['id']]) }}" class="btn btn-primary">Update</a></td>
              <td>                  
                <form action="{{ route('comments.delete',['id'=>$comment['id']]) }}" method="POST">
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