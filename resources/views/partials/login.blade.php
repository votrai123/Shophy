@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('stylesheets/login/login-css.css')}}" >
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="login-page">
  <div class="form">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->
    @if (Session::has('flag')) 
    <div class="{{Session::get('flag')}} product-title">{{Session::get('message')}}</div>
    @endif
    <form action="{{route('dang-nhap')}}" method="post" class="login-form">
   
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="text email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <button type="submit">login</button>
      
    </form>
    <p class="message">Not registered? <a href="{{route('dang-ky')}}">Create an account</a></p>
  </div>
</div>
@endsection