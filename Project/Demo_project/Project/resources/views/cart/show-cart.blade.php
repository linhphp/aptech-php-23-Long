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
                    <th>Hình ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
            @foreach($content as $v_content)
                <tr>
                    <td><img src="{{URL::to('public/image/'.$v_content->options->image)}}"width="70"></td>    
                    <td scope="col" class="">{{$v_content->name}}</td>
                    <td scope="col" class="">{{number_format($v_content->price).' '.'VNĐ'}}</td>
                    <td scope="col" class="">{{$v_content->qty}}</td>
                    <td scope="col" class="">
                        <?php
                            $subtotal = $v_content->price * $v_content->qty;
                            echo number_format($subtotal).' '.'VNĐ';
                        ?>
                    </td> 
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-sm6">
            <div class="total_area float-right">
                <ul>
                    <li>Tổng tiền: <span> {{cart::total().' '.'VNĐ'}}</span></li>
                    <li>Thuế: <span> {{cart::tax().' '.'VNĐ'}}</span></li>
                    <li>Phí vận chuyển:<span> 5km=Free,10km=5k</span></li>
                    <li>Thành tiền:<span> {{cart::subtotal().' '.'VNĐ'}}</span></li>
                </ul>

            </div>
        </div>
    </div>

</div>
@endsection