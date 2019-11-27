@extends('admin.index')
@section('content')
<div class="row tm-content-row">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <h2 class="tm-block-title">List of Accounts</h2>
            <p class="text-white">Accounts</p>
            <select class="custom-select" id="role">
                <!-- <option value="0">Select account</option> -->
                <option value="1">Admin</option>
                <!-- <option value="2">Editor</option> -->
                <!-- <option value="3">Merchant</option> -->
                <option value="0">Customer</option>
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
                                <th scope="col">FULL NAME</th>
                                <th scope="col">BIRTH DAY</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        
                        <tbody  id="users">
                        @foreach($users as $us)
                            <tr>
                                <td class="tm-product-name">{{$us->full_name}}</td>
                                <td>{{$us->birth}}</td>
                                <td>{{$us->email}}</td>
                                <td>{{$us->phone}}</td>
                                <td>{{$us->address}}</td>
                                <td>
                                    <a href="#" class="tm-product-delete-link">
                                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                    </a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <!-- table container -->
                <a href="{{asset('admin/users/addusers')}}" class="btn btn-primary btn-block text-uppercase mb-3">Add new USER</a>
                <button class="btn btn-primary btn-block text-uppercase">
                    Delete selected products
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
