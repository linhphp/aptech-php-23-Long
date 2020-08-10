<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
    </head>
    <body>
        <div class="div mt-5">
            <a href="{{route('users.index')}}">Trang chủ</a> 
        </div>
        <div class="div mt-3 text-primary">
            Liệt kê danh mục sản phẩm
            
        </div>
        <table class="table table-hover table-bordered mt-5">
            <thead>
                <tr class="text-center">
                    <th scope="col-4" class="">#</th>
                    <th scope="col-4" class="">Tên danh mục sản phẩm</th>
                    <th scope="col-4" class="">Sữa/Xóa</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categorys as $cate)
            <tr class="text-center">
                <td scope="row">{{$cate->id}}</td>
                <td scope="row">{{$cate->cate_name}}</td>
                <td>
                    <form action="{{route('all_category.delete',$cate->id)}}" method="post">
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


       