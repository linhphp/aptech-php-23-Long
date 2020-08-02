<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Project  </title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
 
<body>

  @include('layout.header')
  <hr>
  <div class="nav-collapse">
  <div class="lefside-navigation">
    <ul class="sidebar-menu" id="nav-accordion">
      <li class="sub-menu">
        <span>Danh mục sản phẩm </span>
      </li>
        <ul class="sub">
          <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a> </li>
          <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a> </li>
        </ul>
    </ul>

  </div>
</div>
  <hr>
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