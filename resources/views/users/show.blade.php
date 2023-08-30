@extends('layout.app')

@section('content')
<h3>ALL Users</h3>
<form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name" placeholder="Enter your name">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Created At</label>
        <input type="text" class="form-control" value="{{$user->created_at  }}" id="password"  name="password" placeholder="Enter your password">
      </div>
      <div class="mb-3">
      </div>
</form>
@endsection
