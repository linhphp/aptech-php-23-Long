<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
    </head>
    <body>
        <div class="div mt-3">
            <a href="{{route('users.index')}}">Trang chủ</a>
            
        </div>
       
        <div class="sidebar mt-3">
      
            <div class="text-primary">
                Liệt kê danh mục tin tức
                
            </div>  
            <a href="{{URL::to('/add-loaitin')}}">Thêm thể loại</a>    
        </div>
        <table class="table table-hover table-bordered mt-5">
            <thead>
                <tr class="text-center">
                    <th scope="col-4" class="">#</th>
                    <th scope="col-4" class="">Tên danh mục </th>
                    <th scope="col-4" class="">Sữa/Xóa</th>
                </tr>
            </thead>
            <tbody>
            @foreach($loaitin as $lt)
            <tr class="text-center">
                <td scope="row">{{$lt->id}}</td>
                <td scope="row">{{$lt->name}}</td>
                <td>
                <form action="{{URL::to('/detele-loaitin',$lt->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="delete">
                        <button>Xoa</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
                
        </table> 
    </body>
</html>
