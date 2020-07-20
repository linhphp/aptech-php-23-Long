<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User CRUD Laravel </title>
  <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  
</head>
 
<body>
  @include('layout.header')
  <hr>
  @section('content')
  @show
  <hr>
  @include('layout.footer')
</body>
 <style>
body{
  background-image:url('image/hinh1.jpg');
}
.style{
  color:#00ffff;
}
tr{
  color:#00ffff;
}
h1{
  color:#00ffff;
}
p{
  color:#00ffff;
}
section{
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
section div2 {
    position: absolute;
    bottom:0px;
    border-radius: 50%;
    pointer-events: none;
    box-shadow: inset 0 0 10px blue;
    animation: animate  4s linear infinite;
}
section div2:before{
     content: '';
     position: absolute;
     width: 100%;
     height: 100%;
     transform: scale(0.25) translate(-70%,-70%);
     background: radial-gradient(#fff, transparent);
     border-radius: 50%;
}
@keyframes animate {
    0%{
        transform: translate(20%);
        opacity: 1;
    }
    5%{
        transform: translate(10%);
        opacity: 1;
    }
    99%{
        opacity: 1;
    }
    100%{
        transform: translateY(-1200%);
        opacity: 0;
    }
}
</style>
</html>