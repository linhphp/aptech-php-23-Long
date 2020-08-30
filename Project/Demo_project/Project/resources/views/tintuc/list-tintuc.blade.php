<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
  </head>
  <body>
        <div class="div mt-5">
            <a href="{{route('users.index')}}">Trang chủ</a> 
        </div>
      <div class="div">
      Danh sách bài viết
      </div>
      <table class="table table-hover table-bordered mt-5">
            <thead>
              <tr class="text-center">
                <th scope="col" class="">#</th>
                <th scope="col" class="">Tên bài viết</th>
                <th scope="col" class="">Danh mục thể loại</th>
                <th scope="col" class="">Danh mục loại tin</th>
                <th scope="col" class="">Mô tả bài viết</th>
                <th scope="col" class="">Nội dung bài viết</th>
                <th scope="col" class="">Sửa | Xóa</th>   
              </tr>
            </thead>
            <tbody>
             @foreach($all_tintuc as $tt)
                <tr>
                    <td>{{$tt->id}}</td>
                    <td><a href="{{URL::to('baiviet/'.$tt->id)}}">{{$tt->title}}</a></td>
                    <td>{{$tt->Ltin->Tloai->name}}</td>
                    <td>{{$tt->Ltin->name}}</td>
                    <td>
                      <p>{{$tt->description}}</p> 
                      <img src="public/image/{{$tt->post_image}}"height="100" width="100">
                    </td>
                    <td>{{$tt->content}}</td>
                    <td class="text-center">
                     
                      <a href="{{URL::to('/edit-tintuc/'.$tt->id)}}">Sửa</a>
                       | 
                      <a href="{{URL::to('/delete-tintuc/'.$tt->id)}}">Xóa</a>
                      
                    </td>  
                </tr>
             @endforeach
            </tbody>
        </table> 
        <hr>
        <span>{{ $all_tintuc->render() }}</span>
  </body>  
