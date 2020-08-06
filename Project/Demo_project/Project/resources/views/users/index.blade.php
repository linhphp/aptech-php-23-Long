@extends('layout.master')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-2 p-0 ">
            <div class="sidebar">   
                <header>Danh mục sản phẩm </header>       
                <ul class="sub">
                    <li><a href="{{URL::to('/add-category')}}">Thêm danh mục</a></li>
                    <li><a href="{{URL::to('/all-category')}}">Liệt kê danh</a></li>
                    <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
                    <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>   
                </ul>  
            </div>
        </div>    
        <div class="col-10 d-block">
            <div class="row">
                <div class="col-4 bg-white">
                    <p>Sản phẩm 1</p>
                </div>
                <div class="col-4 bg-white">
                    <p>Sản phẩm 2</p>
                </div>
                <div class="col-4 bg-white">
                    <p>Sản phẩm 3</p>
                </div>
                <div class="col-4 bg-white">
                    <p>Sản phẩm 3</p>
                </div>
                <div class="col-4 bg-white">
                    <p>Sản phẩm 3</p>
                </div>
                <div class="col-4 bg-white">
                    <p>Sản phẩm 3</p>
                </div>
                
            </div>
            
        </div>
    </div>
</div>


@endsection
