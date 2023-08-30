@extends('layout.app')      
@section('title')
    Hamdy
@endsection
@section('content')
<div class="row py-5">
  <div class="cl-md-6">
    <h3>All Users</h3>
  </div>
  <div class="col-md-6">
    <button class="btn">
        <a href="/users/create" class="btn btn-primary">Create User</a>
    </button>
  </div>
</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created AT</th>
        <th scope="col">Updated AT</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
        <td><a href="{{route('users.show',$user->id)}}" class="btn btn-success">View</a></td>
        <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form class="d-inline" action="post" action="{{route('users.destroy',$user->id)}}">
            @method('delete')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>  
@endsection