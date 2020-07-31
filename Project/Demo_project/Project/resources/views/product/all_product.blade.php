@extends('layout.master')
@section('content')
<div class="div">
 Liệt kê danh mục
</div>
<table class="table table-hover table-bordered mt-5">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Tên sản phẩm</th>
            <th scope="col" class="">Giá sản phẩm</th>
          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <td>{{$product->product_name}}</td>
            <td></td>
        @endforeach    
        </tbody>
</table> 
@endsection          