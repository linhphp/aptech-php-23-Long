@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pull-left">
                    <h6 class="inner-title">Thông tin chi tiết sản phẩm</h6>
                </div>
                <div class="card " style="width: 18rem;">              
                <div class="d-flex justify-content-around ">
                    <img src="/public/image/{{$sanpham->product_image}}"height="200" width="250">
                </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$sanpham->product_name}}</h4>
                        <h5 class="card-title">{{$sanpham->product_price}}</h5>
                        <p class="card-title">{{$sanpham->product_desc}}</p>                     
                    </div>      
                </div>
            </div>
        </div>
        
    </div>

@endsection