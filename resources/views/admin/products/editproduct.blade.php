@extends('admin.index')
@section('content')
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
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
                <form action="/admin/products/editproducts/{{$products->id}}" enctype="multipart/form-data"  method="post" class="tm-edit-product-form">
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
                      value="{{$products->ProName}}"
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
                    >{{$products->ProDescription}}</textarea>
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
                      value="{{$products->ProUnit}}"
                      placeholder="Unit"
                      title="đơn vị tính"
                    >
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="pronew"
                      >Tình trạng</label
                    >
                  <select
                      class="custom-select tm-select-accounts"
                      name="pronew"
                    >
                      <option value="1" name="pronew" >Mới</option>
                      <option value="0" name="pronew" >Cũ</option>
                    </select>
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
                            value="{{$products->unit_price}}"
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
                            value="{{$products->promotion_price}}"
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
                <img class="tm-product-img-dummy mx-auto" src="{{asset($products  ->ProImage)}}">
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" name="img" onchange="readURL(this);" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                  
                </div>
                <img id="blah"  alt="Hình sau khi đổi sẽ hiện ở đây" />
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Edit Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
  <div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead>
                            <tr>
                                <!-- <th scope="col">&nbsp;</th> -->
                                <th scope="col">ID</th>
                                <th scope="col">FULL NAME</th>
                                <th scope="col">COMMENT</th>
                                <th scope="col">DATE CREATE</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        
                        <tbody  id="users">
                        @foreach($products->comment_product as $cm)
                            <tr>
                                <td>{{$cm->id}}</td>
                                <td>{{$cm->users->full_name}}</td>
                                <td>{{$cm->comment}}</td>
                                <td>{{$cm->create_at}}</td>
                                <td>
                                    <a  class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon" 
                                        onclick='setidcomment({{$cm->id}})' data-toggle="modal" data-target="#myModal"></i>
                                    </a>
                                </td>
                                
                            </tr>
                            @endforeach
                            <!-- Modal -->
                            <div class="modal" tabindex="-1" role="dialog" id="myModal" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thông báo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bạn có muốn xóa account này không?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="deleteuser" class="btn btn-primary"
                                            onclick="deletecomment()">YES</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO and
                                                Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection