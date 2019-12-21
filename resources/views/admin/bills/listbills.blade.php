@extends('admin.index')
@section('content')
<div class="row tm-content-row">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <h2 class="tm-block-title">List of Bills</h2>
            <p class="text-white">Status</p>
            <select class="custom-select" id="status">
                <!-- <option value="0">Select account</option> -->
                <option value="1">Done</option>
                <!-- <option value="2">Editor</option> -->
                <!-- <option value="3">Merchant</option> -->
                <option value="0">Pendent</option>
            </select>
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
                                <th scope="col">DATE ORDER</th>
                                <th scope="col">ID BILL</th>
                                <th scope="col">USER ORDER</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">TOTAL</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody id="listbills">
                            @foreach($listbill as $bll)
                            <tr>
                                <!-- <tr> -->
                                <td class="tm-product-name">{{$bll->date_order}}</td>
                                <td onclick='detailbill({{$bll->id}})' data-toggle="modal"
                                            data-target="#myModal2">{{$bll->id}}</td>
                                <td>{{$bll->users->full_name}}</td>
                                <td>{{$bll->users->email}}</td>
                                <td>{{$bll->total}}</td>
                                <td>{{$bll->users->address}}</td>
                                <td>@if($bll->status==1) Done @else Pendent @endif</td>
                                <td>
                                    <a class="tm-product-delete-link">
                                        <i class="far fa-credit-card tm-product-delete-icon"
                                            onclick='setidbill({{$bll->id}})' data-toggle="modal"
                                            data-target="#myModal1"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon"
                                            onclick='setidbill({{$bll->id}})' data-toggle="modal"
                                            data-target="#myModal"></i>
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
                                            <p>Bạn có muốn xóa hóa đơn này không?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="deleteuser" class="btn btn-primary"
                                                onclick="deletebill()">YES</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO and
                                                Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                            <p>Bạn có muốn hoàn thành hóa đơn này không?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="deleteuser" class="btn btn-primary"
                                                onclick="donebill()">YES</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO and
                                                Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal" tabindex="-1" role="dialog" id="myModal2" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Chi tiết hóa đơn</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="aaa"></p>
                                            </table>

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
@endsection
@section('scripts')

@endsection