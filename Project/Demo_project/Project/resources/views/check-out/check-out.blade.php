<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán đơn hàng</title>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
    
</head>
<body>
<div class="container"> 
<!-- @if(Session::has('thongbao'))
<div class="row">
{{Session::get('thongbao')}}
</div>
@endif -->
    <div class="row mt-4">
    <a href="{{route('users.index')}}">Trang chủ</a>
        <div class="col-lg-6 mx-auto">
            <section class="panel mt-3">
               
                <header class="col-md-6 mx-auto text-primary">Thanh toán đơn hàng</header>
              
                    <form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="mt-3">            
                            <label for="">Tên khách hàng</label> 
                            <input type="text"class="form-control" placeholder="Họ và tên" name="">        
                        </div>
                        <div class="mt-3">            
                            <label for="">Số điện thoại</label>       
                            <input type="text"class="form-control" placeholder="Số điện thoại" name="">        
                        </div>
                        <div class="mt-3">            
                            <label for="">Địa chỉ</label>      
                            <input type="text"class="form-control" placeholder="Địa chỉ" name="">            
                        </div>
                        <div class="mt-3">            
                            <label for="">Ghi chú</label>
                                
                            <textarea type="text" class="form-control ckeditor" placeholder="Ghi chú" name="product_desc" ></textarea> 
                        </div>
                        
                            <button type="submit" name="add_product" class="btn-primary mt-3">Thanh toán</button>
                        
                    </form>    
            </section>        
        </div>
    </div>
</div> 
</body>
</html>


    
