<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
  </head>
  <body>
        <div class="div mt-5">
            <a href="{{route('users.index')}}">Home</a> 
        </div>
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
                <td>{{$product->product_cate}}</td>    
                <td><img src="public/image/{{$product->product_image}}"height="100" width="100"></td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_desc}}</td>
                <td>{{$product->product_unit}}</td>
                    
              </tr>
              @endforeach          
            </tbody>
        </table> 
  </body>  

       