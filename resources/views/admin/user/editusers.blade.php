@extends('admin.index')
@section('content')
      <div class="container mt-5">
        <!-- row -->
        <div class="row tm-content-row">
          
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Edit Account</h2>
              @if(count($errors)>0)
              <div class="alert alert-danger">
              @foreach($errors->all() as $err)
                {{$err}} <br>
              @endforeach
              </div>
              @endif
              @if(session('thongbao'))
              <div class="alert alert-success">{{session('thongbao')}}</div>
              @endif
              <form action="/admin/users/editusers/{{$users->id}}" method="post" class="tm-signup-form row">
                <div class="form-group col-lg-6">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <label for="name">Full Name</label>
                  <input
                    id="name"
                    name="fullname"
                    type="text"
                    value="{{$users->full_name}}"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="birthday">Birthday</label>
                  <input
                    id="birth"
                    name="birth"
                    type="date"
                    value="{{$users -> birth}}"
                    class="form-control validate"
                  />
                  </div>
                  <div class="form-group col-lg-6">
                  <label for="birthday">Address</label>
                  <textarea
                    id="address"
                    name="address"
                    type="text"
                    class="form-control validate"
                  >{{$users -> address}}</textarea>
                  </div>
                <div class="form-group col-lg-6">
                  <label for="email">Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    value="{{$users -> email}}"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password2">Re-enter Password</label>
                  <input
                    id="password2"
                    name="password2"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone">Phone</label>
                  <input
                    id="phone"
                    name="phone"
                    type="tel"
                    value="{{$users -> phone}}"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
            
            <p class="text-white">Accounts</p>
            <select class="custom-select" id="role">
                <!-- <option value="0">Select account</option> -->
                <option value="1">Admin</option>
                <!-- <option value="2">Editor</option> -->
                <!-- <option value="3">Merchant</option> -->
                <option value="0">Customer</option>
            </select>
        </div>

                
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                  Update Your Profile
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection