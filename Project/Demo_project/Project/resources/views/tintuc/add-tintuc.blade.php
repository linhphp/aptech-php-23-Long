@extends('layout.master')
@section('content')
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
                <!-- <a href="{{route('users.index')}}">Trang chủ</a> -->
                <header class="col-xs-4 col-md-6 mx-auto text-primary">Thêm bài viết</header>
                <?php
                    $message = Session::get('thongbao');
                    if ($message) {
                        echo '<span class="text-alert bg-primary">' . $message . '</span>';
                        session::put('thongbao', null);
                    }
                ?>
                <div class="col-md-6 mx-auto text-primary">
                    <form action="{{URL::to('/save-tintuc')}}" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="div mt-3">
                                <label for="">Tên bài viết</label>
                                <input type="text"class="form-control" placeholder="Tên bài viết" name="title">
                            </div>
                               
                            <div class="div">
                                <label class="mt-2" for="">Mô tả bài viết</label>
                                <input type="text"class="form-control" placeholder="Mô tả bài viết" name="description">
                            </div>

                            <div class="div">
                                <label class="mt-2" for="">Nội dung bài viết</label>
                                <textarea  class="form-control ckeditor" placeholder="Nội dung bài viết" name="content"></textarea>
                            </div>

                            <div class="div">
                                <select class="form-control mt-3 choose theloai" name="tloai_id" id="theloai" >
                                    <option value="0">--Chọn thể loại--</option>
                                    @foreach($theloai as $tloai)       
                                        <option value="{{$tloai->id}}">{{$tloai->name}}</option>        
                                     @endforeach
                                </select>
                            </div>
                            <div class="div">
                                <select class="form-control mt-3 choose loaitin" name="ltin_id" id="loaitin">
                                    <option value="0">--Chọn loại tin--</option>
                                    @foreach($loaitin as $ltin)       
                                        <option value="{{$ltin->id}}">{{$ltin->name}}</option>
                                     @endforeach
                                </select>
                            </div>

                            <div class="div">
                                <label class="mt-2" for="name">Hình ảnh bài viết</label>
                                <input type="file" class="form-control text-center " id="name" placeholder="Hình ảnh bài viết" name="post_image" >
                            </div>

                            <button type="submit" name="add_post" class="btn-primary mt-3 add">Thêm bài viết</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>
@endsection
@section('script')
  <script>
    $(document).ready(function(){
        
        $('.choose').change(function(){
            var action = $(this).attr('id');
            var idTheloai = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if(action =='theloai'){
                result = 'loaitin';
            }
            $.ajax({
                url:'{{url('/ajax-add')}}',
                method: 'post',
                data:{action:action,idTheloai:idTheloai,_token:_token},
                success:function(data){
                    $('#'+result).html(data);    
                }
            });
        });  
    });
  </script>                  
@endsection