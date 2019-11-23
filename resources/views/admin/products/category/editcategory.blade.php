@extends('admin.index')
@section('content')
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Category</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
              @if(count($errors)>0)
              <div class="alert alert-danger">
              @foreach($errors->all() as $err)
                {{$err}} <br>
              @endforeach
              </div>
              @endif
                <form action="/admin/categorys/editcategorys/{{$categorys->id}}" method="post" class="tm-edit-product-form">
                @if(session('thongbao'))
              <div class="alert alert-success">{{session('thongbao')}}</div>
              @endif
                  <div class="form-group mb-3">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <label
                      for="name"
                      >Category Name
                    </label>
                    <input
                      id="name"
                      name="namecategory"
                      type="text"
                      value="{{$categorys->name}}"
                      class="form-control validate"
                      placeholder="Category Name"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <input                    
                      class="form-control validate tm-small"
                      rows="5"
                      name="descriptions"
                      type="text"
                      value="{{$categorys->description}}"
                      required
                      placeholder="Description"
                    >
                  </div>
              </div>
              <!--  -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection