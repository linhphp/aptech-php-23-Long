@extends('layout.master')
@section('content')
<div class="div">
 Liệt kê sản phẩm
</div>
<table class="table table-hover table-bordered mt-5">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Tên sản phẩm</th>
            <th scope="col" class="">Danh mục sản phẩm</th>
            <th scope="col" class="">Hình ảnh sản phẩm</th>
            <th scope="col" class="">Giá sản phẩm</th>
            <th scope="col" class="">Mô tả sản phẩm</th>
            <th scope="col" class="">Số lượng sản phẩm</th>    
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr class="text-center">
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{"Chưa xong"}}</td>    
            <td><img src="public/image/{{$product->product_image}}"height="100" width="100"></td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_desc}}</td>
            <td>{{$product->product_unit}}</td>
                
          </tr>
          @endforeach          
        </tbody>
</table> 
@endsection
       