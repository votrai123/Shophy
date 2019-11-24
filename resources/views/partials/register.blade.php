@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('stylesheets/login/register-css.css')}}" >
<br>
<br>
<br>

	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				@if(count($errors)>0)
					<div>
						@foreach($errors->all() as $err)
						{{$err}}
						@endforeach
					</div>
				@endif
				@if(Session::has('thanhcong'))
					<div>{{Session::get('thanhcong')}}</div>
				@endif
				<form action="{{route('dang-ky')}}" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input class="text" type="text" name="Fullname" placeholder="Fullname" required="">
					<input class="text email" type="text" name="Address" placeholder="Address" required="">
					<input class="text" type="text" id="iphone"name="Phone" placeholder="Phone" required>
					<input class="text email" type="date" name="bday">
					<input id='regEmail' class="text " type="email" name="email" placeholder="Email" required>
					<div id="existedEmail" style="color:red; display:none">Email này đã được dùng</div>
					<input id='regPassword' class="text email" type="password" name="password" placeholder="Password" required>
					<div id="errorLablePassword" style="color:red; display:none">Password phải lớn hơn 6 kí tự </div>
					<input  id="rpass" class="text" type="password" name="re_password" placeholder="Confirm Password" required>
					<!-- <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div> -->
					<button type="submit" >SIGNUP</button>
				</form>
				<p>Don't have an Account? <a href="{{route('dang-nhap')}}"> Login Now!</a></p>
			</div>
		</div>
	</div>
    <!-- //main -->
@endsection