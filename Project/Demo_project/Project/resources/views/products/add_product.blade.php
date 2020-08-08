<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
</head>
<body>
    
</body>
</html>

<!-- @if(count($errors)>0)

  @foreach($errors->all() as $err)
  <div class="alert-danger alert">
  {{$err}}
  </div>
  @endforeach 
@endif
@if(Session::has('thongbao'))
<div class="row">
{{Session::get('thongbao')}}
</div>
@endif  -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel mt-3">
       <a href="{{route('users.index')}}">Back</a>
     
            <header class="col-xs-4 col-md-4 mx-auto text-primary">
            
            Thêm sản phẩm
            
            </header>
            
            <?php
              $message = Session::get('thongbao');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  session::put('thongbao',null);
              }  
            ?>
                <div class="col-xs-4 col-md-4 mx-auto">
                    <form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="div mt-3">
                            <label for="">Tên sản phẩm</label>
                            <input type="text"class="form-control" placeholder="Tên sản phẩm" name="product_name" > 
                        </div>
                        <div class="div">
                            <label for="">Giá sản phẩm</label>
                            <input type="text"class="form-control" placeholder="Giá sản phẩm" name="product_price" > 
                        </div>
                        <div class="div">
                            <label for="">Số lượng sản phẩm</label>
                            <input type="text"class="form-control" placeholder="Số lượng sản phẩm" name="product_unit" > 
                        </div>
                        <div class="div">
                            <label for="">Mô tả sản phẩm</label>
                            <textarea style="resize:none" class="form-control" placeholder="Mô tả sản phẩm" name="product_desc" ></textarea> 
                        </div>
                        <div class="div">
                            <label for="">Danh mục sản phẩm</label>
                            <input class="form-control rounded-0"  placeholder="Chọn danh mục" name="product_cate">   
                        </div>
                        <div class="div">  
                            <label for="name">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control rounded-0" id="name" placeholder="Hình ảnh sản phẩm" name="product_image" >
                        </div>
                        <button type="submit" name="add_product" class="btn-primary mt-3">Thêm sản phẩm</button>
                </div>
        </section>        
    </div>
</div>