@extends('layout.master')
@section('content')

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-2 p-0 ">
            <div class="sidebar">   
                <header>Danh mục sản phẩm </header>       
                <ul class="sub">
                    <li><a href="{{URL::to('/add-category')}}">Thêm danh mục</a></li>
                    <li><a href="{{URL::to('/all-category')}}">Liệt kê danh mục</a></li>
                    <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
                    <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>   
                </ul>  
            </div>
        </div>    
        <div class="col-10 d-block">
            <div class="row mt-3">
                @foreach($products as $pro)
                <div class="col-md-4">
                <form action="{{URL::to('/add-cart/'.$pro->id)}}">
                    <div class="card " style="width: 18rem;">
                       
                            <div class="d-flex justify-content-around ">
                                <img src="public/image/{{$pro->product_image}}"height="200" width="250">
                            </div>
                             <div class="card-body">
                                <div class="d-flex">
                                    <h4 class="card-title">{{$pro->product_name}}</h4>
                            
                                </div>
                                <a href="{{URL::to('thongtinsp/'.$pro->id)}}" >Chi tiết sản phẩm</a>

                                <h5 class="card-title">{{$pro->product_price}}</h5>
                                <p class="card-title">{{$pro->product_desc}}</p>
                                <label for="">Số lượng</label>
                                <input name="quantitys" type="number" min="1" value="1" id="num" name="num">
                                
                            
                                <button type="submit" onclick="addCart({{$pro->id}})" class="btn btn-primary">Mua ngay</button>
                                 
                            </div>      
                    </div>
                </form>     
                </div>   
                @endforeach
            </div>
            
        </div>
    </div>
</div>
<script>
    function addCart(id){
     num = $("#num").val();
     $post('addcart.php',{'id':id,'num':num},function(data){

     }); 
    }

</script>

@endsection
