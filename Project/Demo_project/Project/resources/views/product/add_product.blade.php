@extends('layout.master')

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
            <header class="col-xs-4 col-md-4 mx-auto text-primary">
            Thêm danh mục sản phẩm
            </header>
            <?php
              $message = Session::get('message');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  session::put('message',null);
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
                        <!-- <div class="div">  
                            <label for="name">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control rounded-0" id="name" placeholder="Hình ảnh sản phẩm" name="product_image" >
                        </div> -->
                        <button type="submit" name="add_product" class="btn-primary mt-3">Thêm sản phẩm</button>
                </div>
        </section>        
    </div>
</div>