<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Phụ kiện điện tử  </title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <link rel="stylesheet" href="{{asset('/style.css')}}">
  
</head>
 
<body>

  @include('layout.header')
 
  <div class="sidebar">
    
    <header>Danh mục sản phẩm </header>
     
    <ul class="sub">
      <li><a href="{{URL::to('/add-category')}}">Thêm danh mục sản phẩm</a></li>
      <li><a href="{{URL::to('/all-category')}}">Liệt kê danh mục sản phẩm</a></li>
      <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
      <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>   
     </ul>  
  </div>
  @section('content') @show
  <hr>
  @include('layout.footer')
  @yield('script')
<!-- <style>
.container{
  background-image:url("/image/hinh1.jpg");
  
  
}
</style> -->

</body>
 
</html>