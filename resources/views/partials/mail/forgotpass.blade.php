<html>

<body>
<h1 style='font-size:32px'>Xin chào {{$data['name']}} !!!</p>
    </h1>
    Please click the password reset button to reset your password
    <a href="{{url('resetpass/'.$data['id'])}}">Click Here!!! Reset password</a>
    </p>
</body>

</html>