@extends('layout.master')
@section('content')
<div class="container ">
    <div class="active ">
        <h2>Giỏ hàng của bạn</h2>
    </div>
    <div class="table-responsive cart_info ">
    <?php
    $content = Cart::content();
    ?>
        <table class="table table-condensed text-white">
            <thead>
                <tr class="cart_menu">
                    <td>Sản phẩm</td>
                    <td>Mô tả</td>
                    <td>Giá</td>
                    <td>Số lượng</td>
                    <td>Tổng tiền</td>
                </tr>
            </thead>
            <tbody>
            @foreach($content as $v_content)
                <tr class="text-center">
                    
                    <td>{{$v_content->name}}</td>
                    <td>mô tả trống</td>
                    <td>{{number_format($v_content->price).''.'VND'}}</td>
                    <td>{{$v_content->qty}}</td>
                  
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection