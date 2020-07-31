@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Địa chỉ nhận hàng</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body>

<div class="container">
    <h1>Địa chỉ nhận hàng</h1>
    <div class="row">
        <div class="div">
            <form>
                <div class="form-group">
                    <label>Select City:</label>
                    <select class="form-control" id="matp" name="city">
                        @foreach($thanhpho as $tp)
                        <option value="{{$tp->matp}}">{{$tp->name}}</option> 

                        @endforeach    
                    </select>
                </div>
                <div class="form-group">
                    <label>Select District:</label>
                    <select class="form-control" id="maqh" name="district">
                        @foreach($quanhuyen as $qh)
                        <option value="{{$qh->matp}}">{{$qh->name}}</option> 
                          
                        @endforeach    
                    </select>
                </div>
                <div class="form-group">
                    <label>Select Ward:</label>
                    <select class="form-control" id="xaid" name="ward">
                        @foreach($xaphuong as $xp)
                        <option value="{{$xp->xaid}}">{{$xp->name}}</option> 
                          
                        @endforeach    
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Địa chỉ:</label>
                    <input type="text"class="form-control" placeholder="Nhập địa chỉ" >
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
        $("#matp").change(function(){
           var idmatp = $(this).val();
           $.get("address/"+idmatp,function(data){
            $("#idmaqh").html(data);
           });   
        });
    });
    </script>
@endsection
</body>
</html>