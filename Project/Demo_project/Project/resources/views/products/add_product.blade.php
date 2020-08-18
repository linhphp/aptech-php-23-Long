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

@if(Session::has('thongbao'))
<div class="row">
{{Session::get('thongbao')}}
</div>
@endif 
<div class="row">
    <div class="col-lg-12">
        <section class="panel mt-3">
       <a href="{{route('users.index')}}">Trang chủ</a>
     
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
                            <select class="form-control mt-3" name="product_cate">
                                <option value="0">Chọn danh mục</option>

                                @foreach($categorys  as $category)
                                    <option value="{{$category->id}}">{{$category->cate_name}}</option>    
                                    @foreach($categorys as $cate)    
                                        @if($cate->product_cate |=0 && $cate->product_cate == $category->id)
                                            <option value="{{$cate->id}}">{{$cate->cate_name}}</option>      

                                        @endif    
                                    @endforeach
                                @endforeach
                            </select>       
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
