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
            <a href="{{route('users.index')}}">Trang chủ</a> 
              @if(Session::has('thongbao'))
              <div class="row">
              {{Session::get('thongbao')}}
              </div>
              @endif
        </div>
      <div class="div">
      Liệt kê sản phẩm
      </div>
      <?php
        $message = Session::get('thongbao');
        if($message){
          echo '<span class="text-alert alert-danger mt-3">'.$message.'</span>';
          session::put('thongbao',null);
          }  
      ?>
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
                <th scope="col" class="">Sửa/Xóa</th>   
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr class="text-center">
                <td>{{$product->id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->category_product->cate_name}}</td> 
                <td><img src="public/image/{{$product->product_image}}"height="100" width="100"></td>
                <td>{{$product->product_price}} VNĐ</td>
                <td>{{$product->product_desc}}</td>
                <td>{{$product->product_unit}}</td>
                <td>
                    <form action="{{route('all_product.delete',$product->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="delete">
                        <a href="{{URL::to('edit-product/'.$product->id)}}">Sửa</a>
                        <a href="">Xóa</a>
                    </form>
                </td>
                    
              </tr>
              @endforeach          
            </tbody>
        </table>
        <br><br>
        
          <span>{{ $products->render() }}</span>
        
        

  </body>  

       