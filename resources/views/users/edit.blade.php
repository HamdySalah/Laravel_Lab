@extends('layout.app')

@section('content')
<h3>Edit a User no.{{$user->id}}</h3>
<form action="{{route('users.update',$user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
        value="{{$user->name}}">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="btn btn-success" type="submit">Submit</button>
</form>
@endsection
