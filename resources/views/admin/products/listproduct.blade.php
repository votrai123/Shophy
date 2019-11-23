@extends('admin.index')
@section('content')
<div class="container mt-5">
    <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <div class="tm-product-table-container">
                    <table class="table table-hover tm-table-small tm-product-table">
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">PRODUCT NAME</th>
                                <th scope="col">CATEGORY</th>
                                <!-- <th scope="col">DESCRIPTION</th> -->
                                <th scope="col">UNIT PRICE</th>
                                <th scope="col">PROMOTION PRICE</th>
                                <!-- <th scope="col">IMAGE</th> -->
                                <th scope="col">UNIT</th>
                                <th scope="col">DATE CREATE</th>
                                <th scope="col">DATE UPDATE</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $proo)
                            <tr>
                            
                                <th scope="row"><input type="checkbox" /></th>
                                <td class="tm-product-name">{{$proo->ProName}}</td>
                                <td>{{$proo->id_type}}</td>
                                <!-- <td>{{$proo->ProDescription}}</td> -->
                                <td>{{$proo->unit_price}}</td>
                                <td>{{$proo->promotion_price}}</td>
                                <!-- <td>28 March 2019</td> -->
                                <td>{{$proo->ProUnit}}</td>
                                <td>{{$proo->created_at}}</td>
                                <td>{{$proo->updated_at}}</td>
                                <td>
                                    <a class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon" data-toggle="modal"
                                        onclick='setid({{$proo->id}})' data-target="#myModal1"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


                <!-- Modal -->
                <div class="modal" tabindex="-1" role="dialog" id="myModal1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thông báo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bạn có muốn xóa sản phẩm này không?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="deletecate" class="btn btn-primary"
                                                onclick="deletecate()">YES</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO and
                                                Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <!-- table container -->
                <a href="add-product.html" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
                <button class="btn btn-primary btn-block text-uppercase">
                    Delete selected products
                </button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <h2 class="tm-block-title">Product Categories</h2>
                <div class="tm-product-table-container">
                    <table class="table tm-table-small tm-product-table">
                        <tbody>
                            @foreach($categorys as $cate)
                            <tr>
                                <td><a class="tm-product-name"
                                        href="/admin/categorys/editcategorys/{{$cate->id}}">{{$cate->name}} </a></td>
                                <td class="text-center">
                                    <a class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon" data-toggle="modal"
                                            onclick='setid({{$cate->id}})' data-target="#myModal"></i>
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
                                            <p>Bạn có muốn xóa thể loại này không?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="deletecate" class="btn btn-primary"
                                                onclick="deletecate()">YES</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO and
                                                Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div>
                <!-- table container -->
                <button class="btn btn-primary btn-block text-uppercase mb-3">
                    Add new category
                </button>
            </div>
        </div>
    </div>
</div>
@endsection