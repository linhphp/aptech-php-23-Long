<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục loại tin</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
    </head>
    <body>
        <div class="div mt-3">
            <a href="{{route('users.index')}}">Trang chủ</a>
            
        </div>
       
        <div class="sidebar mt-3">
      
            <div class="text-primary">
                Liệt kê danh mục loại tin
                
            </div>  
            <a href="{{URL::to('/add-ltin')}}">Thêm loại tin</a>    
        </div>
        <table class="table table-hover table-bordered mt-5">
            <thead>
                <tr class="text-center">
                    <th scope="col-4" class="">#</th>
                    <th scope="col-4" class="">Tên loại tin </th>
                    <th scope="col-4" class="">Sửa | Xóa</th>
                </tr>
            </thead>
            <tbody>
            @foreach($loaitin as $ltin)
            <tr class="text-center">
                <td scope="row">{{$ltin->id}}</td>
                <td scope="row">{{$ltin->name}}</td>
                <td>
                <a href="{{URL::to('/edit-ltin/'.$ltin->id)}}">Sửa</a>
                |
                <a href="{{URL::to('/delete-ltin/'.$ltin->id)}}">Xóa</a>
                </td>
            </tr>
            @endforeach
            </tbody>
                
        </table> 
    </body>
</html>
