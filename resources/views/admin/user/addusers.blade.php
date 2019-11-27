@extends('admin.index')
@section('content')
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add User</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Full Name
                    </label>
                    <input
                      id="name"
                      name="fullname"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Birth Day</label
                    >
                    <input
                      class="form-control validate"
                      rows="3"
                      type="date"
                      name="birth"
                      required
                    >
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Email</label
                    >
                    <input type="text" class="form-control validate" name="email">
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Password</label
                    >
                    <input type="password" class="form-control validate" name="password">
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Address</label
                    >
                    <input type="text" class="form-control validate" name="address">
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Phone Number</label
                    >
                    <input type="text" class="form-control validate" name="phone">
                  </div>
                  
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection