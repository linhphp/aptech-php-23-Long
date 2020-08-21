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
                <th scope="col" class="">Danh mục bài viết</th>
                <th scope="col" class="">Hình ảnh bài viết</th>
                <th scope="col" class="">Mô tả bài viết</th>
                <th scope="col" class="">Nội dung bài viết</th>
                <th scope="col" class="">Sữa/Xóa</th>   
              </tr>
            </thead>
            <tbody>
             @foreach($all_tintuc as $tintuc)
                <tr>
                    <td>{{$tintuc->id}}</td>
                    <td><a href="{{URL::to('baiviet/'.$tintuc->id)}}">{{$tintuc->title}}</a></td>
                    <td>
                    <?php $theloai = DB::table('Ltin')->where('id',$tintuc->ltin_id)->first(); ?>
                      
                      {{$theloai->name}}
                    
                    </td>
                    <td><img src="public/image/{{$tintuc->post_image}}"height="100" width="100"></td>
                    <td>{{$tintuc->description}}</td>
                    <td>{{$tintuc->content}}</td>
                    <td>
                    <button>Xóa</button>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table> 
        <hr>
        <span>{{ $all_tintuc->render() }}</span>
  </body>  
