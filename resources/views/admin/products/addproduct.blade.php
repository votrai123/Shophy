@extends('admin.index')
@section('content')
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
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
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="{{asset('admin/products/addproducts')}}" enctype="multipart/form-data"  method="post" class="tm-edit-product-form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="productname"
                      type="text"
                      class="form-control validate"
                      placeholder="Product Name"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      required
                      name="descriptions"
                      placeholder="Description"
                    ></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name="category"
                    >
                      @foreach($categorys as $cateo)
                      <option value="{{$cateo->id}}" name="category" >{{$cateo->name}}</option>
                      @endforeach
                    </select>
                    <!-- <input type="text" name="category"> -->
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="unit"
                      >Unit</label
                    >
                    <input
                      class="form-control validate"
                      rows="3"
                      required
                      name="unit"
                      placeholder="Unit"
                      title="đơn vị tính"
                    >
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Unit Price
                          </label>
                          <input
                            id="unit_price"
                            name="unit_price"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                            placeholder="0$"
                            title="Unit Price > Promotion Price"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Promotion Price
                          </label>
                          <input
                            id="unit_promotion"
                            name="unit_promotion"
                            type="text"
                            placeholder="0$"
                            class="form-control validate"
                            required
                            title="Promotion Price < Unit Price"
                          />
                          <div id="errorLabprice" style="color:red; display:none">Promotion Price < Unit Price </div>
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" name="img" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
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