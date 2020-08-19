<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
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
    <div class="col-12">
        <section class="panel mt-3">
            <a href="{{route('users.index')}}">Trang chủ</a>
     
            <header class="col-6 mx-auto text-primary">
            
            Thêm sản phẩm
            
            </header>
            
            <?php
              $message = Session::get('thongbao');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  session::put('thongbao',null);
              }  
            ?>
            <div class="col-6 mx-auto d-flex">
                <form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mt-3 d-flex">
                            
                    <label class="col-md-3 col-form-label text-md-right" for="">Tên sản phẩm</label>
                                
                    <div class="col-9">
                        <input type="text"class="form-control" placeholder="Tên sản phẩm" name="product_name" > 
                    </div>    
                </div>
                <div class="mt-3 d-flex">
                            
                    <label class="col-md-3 col-form-label text-md-right" for="">Giá sản phẩm</label>
                            
                    <div class="col-9">
                        <input type="text"class="form-control" placeholder="Giá sản phẩm" name="product_price" > 
                    </div>
                           
                </div>
                <div class="mt-3 d-flex">
                            
                    <label class="col-md-3 col-form-label text-md-right" for="">Số lượng</label>
                            
                    <div class="col-9">
                        <input type="text"class="form-control" placeholder="Số lượng sản phẩm" name="product_unit" > 
                    </div>
                            
                </div>
                <div class="mt-3 d-flex">
                            
                    <label class="col-md-3 col-form-label text-md-right" for="">Mô tả sản phẩm</label>
                           
                    <div class="col-9">
                        <textarea type="text" class="form-control ckeditor" placeholder="Mô tả sản phẩm" name="product_desc" ></textarea> 
                    </div>
                </div>
                <div class="mt-3 d-flex">
                            
                    <label class="col-md-3 col-form-label text-md-right" for="">Danh mục </label>
                            
                    <div class="col-9">
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
                            
                </div>
                <div class="mt-3 d-flex"> 
                            
                    <label class="col-md-3 col-form-label text-md-right" for="name">Hình ảnh</label>
                            
                    <div class="col-9">
                        <input type="file" class="form-control rounded-0" id="name" placeholder="Hình ảnh sản phẩm" name="product_image" >
                    </div>
                            
                </div>
                    <button type="submit" name="add_product" class="btn-primary mt-3">Thêm sản phẩm</button>
                </div>
        </section>        
    </div>
</div>
