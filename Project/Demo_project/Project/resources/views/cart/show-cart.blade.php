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
        <table class="table table-condensed text-white text-center">
            <thead>
                <tr class="cart_menu">
                    <th>Hình ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thêm/Xóa</th>
                </tr>
            </thead>
            <tbody>
            @foreach($content as $v_content)
                <tr>
                    <td><img src="{{URL::to('public/image/'.$v_content->options->image)}}"width="70"></td>    
                    <td scope="col">{{$v_content->name}}</td>
                    <td scope="col">{{number_format($v_content->price).' '.'VNĐ'}}</td>
                    
                    <td scope="col">
                        <form action="{{URL::to('/update-cart')}}" method="post">
                        {{csrf_field()}}
                            <input class="text-center" type="text" value="{{$v_content->qty}}" name="quantity" size="2">

                            <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart"> 

                            <input type="submit" value="Thay đổi">
                        </form>
                    </td>
                    <td scope="col">
                        <?php
                            $subtotal = $v_content->price * $v_content->qty;
                            echo number_format($subtotal).' '.'VNĐ';
                        ?>
                    </td>
                    <td>
                    <a href="{{URL::to('/detele-cart/'.$v_content->rowId)}}">Xóa</a>
                    </td> 
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-sm6">
            <form action="{{URL::to('/login')}}">
            
                <div class="total_area float-right">
                    <ul>
                        <li>Thành tiền:<span> {{cart::subtotal().' '.'VNĐ'}}</span></li>
                        <li>Thuế: <span> {{cart::tax().' '.'VNĐ'}}</span></li>
                        <li>Phí vận chuyển:<span> Free </span></li>
                        <li>Tổng tiền: <span> {{cart::total().' '.'VNĐ'}}</span></li>
                
                        <button class="btn-sm mt-3" type="submit">Thanh toán</button>
                    
                    </ul> 
                </div>
            </form>   
        </div>
    </div>

</div>
@endsection