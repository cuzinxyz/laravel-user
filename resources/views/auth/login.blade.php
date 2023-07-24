@extends('template.layout')

@section('title', 'Login')
@section('content')
<h1>Hi! I'm login page</h1>
@include('template.errors')
<form method="POST" action="" class="col-md-6">
    @csrf
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
  </form>



  <style>
    @import url('https://fonts.googleapis.com/css2?family=Mynerve&display=swap');
    .container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column
    }
    h1 {
        font-family: 'Mynerve', cursive;
        font-size: 48px;
    }
  </style>
@endsection
