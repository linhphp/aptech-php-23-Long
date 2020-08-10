@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="">
                    <h6 class="inner-title">Thông tin chi tiết sản phẩm</h6>
                </div>
                <div class="card " style="width: 18rem;">              
                <div class="d-flex justify-content-around ">
                    <img src="/public/image/{{$sanpham->product_image}}"height="200" width="250">
                </div>
                <form action="{{URL::to('/save-cart')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <span>
                    <div class="card-body">
                        <h4 class="card-title">{{$sanpham->product_name}}</h4>
                        <h5 class="card-title">{{$sanpham->product_price}}</h5>
                        <p class="card-title">{{$sanpham->product_desc}}</p>
                        <label for="">Số lượng</label>
                        <input name="qty" type="number" min="1" value="1"> 
                        <input name="productid_hidden" type="hidden" value="{{$sanpham->id}}">

                    </div>
                    <button type="submit"class="btn btn-primary ">Thêm vào giỏ hàng</button>     
                </span>
                </form>
                </div>
                
            </div>
        </div>
        
    </div>

@endsection