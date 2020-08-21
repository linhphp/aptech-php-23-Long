<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài viết</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">

</head>
<body>
<a href="{{route('users.index')}}">Trang chủ</a>
<br>
<a href="{{URL::to('all-tintuc')}}">Quay lại danh sách bài viết</a>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel mt-3">

                    <div class="col-md-6 mx-auto">
                        <div class="mt-3">
                            <h2>{{$chitiet->title}}</h2> 
                        </div>               
                        <div class=" mt-3 ">
                            <img src="/public/image/{{$chitiet->post_image}}"height="400" width="450">
                        </div>
                        <div class="div mt-5">
                            <h4>{{$chitiet->description}}</h4>
                            <p>{{$chitiet->content}}</p>
                        </div>    
                    </div>
                 </section>
            </div>                 
        </div>    
    </div>   
</body>
</html>

