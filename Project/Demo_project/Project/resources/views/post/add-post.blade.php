<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel mt-3">
                <a href="{{route('users.index')}}">Trang chủ</a>
                <header class="col-xs-4 col-md-6 mx-auto text-primary">Thêm bài viết</header>
                <?php
                    $message = Session::get('thongbao');
                    if ($message) {
                        echo '<span class="text-alert bg-primary">' . $message . '</span>';
                        session::put('thongbao', null);
                    }
                ?>
                <div class="col-md-6 mx-auto">
                    <form action="{{URL::to('/save-post')}}" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="div mt-3">
                                <label for="">Tên bài viết</label>
                                <input type="text"class="form-control" placeholder="Tên bài viết" name="title">
                            </div>
                                <!-- <div class="div">
                                    <label for="">Slug bài viết</label>
                                    <input type="text"class="form-control" placeholder="Tiêu đề bài viết" name="slug">
                                </div> -->
                            <div class="div">
                                <label class="mt-2" for="">Mô tả bài viết</label>
                                <input type="text"class="form-control" placeholder="Mô tả bài viết" name="description">
                            </div>
                            <div class="div">
                                <label class="mt-2" for="">Nội dung bài viết</label>
                                <textarea  class="form-control ckeditor" placeholder="Nội dung bài viết" name="content"></textarea>
                            </div>
                            <div class="div">
                                <select class="form-control mt-3" name="theloai_id">
                                    <option value="0">Chọn danh mục</option>
                                        @foreach($theloai as $tl)
                                            <!-- @if($tl->theloai_id ==0) -->
                                            <option value="{{$tl->id}}">{{$tl->name}}</option>
                                            @foreach($theloai as $tloai )

                                                @if($tloai->theloai_id |=0 && $tloai->theloai_id == $tl->id)
                                                    <option value="{{$tloai->id}}">{{$tloai->name}}</option>
                                                @endif
                                            @endforeach
                                            <!-- @endif  -->
                                        @endforeach
                                </select>
                            </div>
                            <div class="div">
                                <label class="mt-2" for="name">Hình ảnh bài viết</label>
                                <input type="file" class="form-control text-center " id="name" placeholder="Hình ảnh bài viết" name="post_image" >
                            </div>

                            <button type="submit" name="add_post" class="btn-primary mt-3">Thêm bài viết</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>
