@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('stylesheets/login/login-css.css')}}">
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

        <form action="/resetpass1/{{$users->id}}" method="post" class="login-form">
            @if(count($errors)>0)
            <div>
                @foreach($errors->all() as $err)
                {{$err}}
                @endforeach
            </div>
            @endif
            @if (Session::has('thongbao'))
            <div class="{{Session::get('flag')}}">{{Session::get('thongbao')}}</div>
<<<<<<< HEAD
            <div><a href="{{route('dang-nhap')}}">return login</a></div>
=======
>>>>>>> aaaaaaaaaaa
            @endif
            @if(Session::has('thongbao')==false)
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input id='regPassword' class="text email" type="password" name="password" placeholder="Password" required>
            <div id="errorLablePassword" style="color:red; display:none">Password phải lớn hơn 6 kí tự </div>
            <input id="rpass" class="text" type="password" name="re_password" placeholder="Confirm Password" required>
            <button type="submit">reset password</button>
            @endif
        </form>
        <!-- <p class="message">Not registered? <a href="{{route('dang-ky')}}">Create an account</a></p>
        <p class="message">Forgot password? <a href="{{route('forgot-pass')}}">Click reset password</a></p> -->
    </div>
</div>
@endsection