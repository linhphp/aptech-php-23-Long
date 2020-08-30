<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm loại tin</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">
</head>
<body>
    
</body>
</html>

<div class="row">
    <div class="col-lg-12">
        <section class="panel mt-3">
            <a href="{{route('users.index')}}">Trang chủ</a>

            <header class="col-xs-4 col-md-4 mx-auto text-primary">
            
            Thêm loại tin
            </header>
            
                <div class="col-xs-4 col-md-4 mx-auto">
                    <form action="{{URL::to('add-ltin')}}" method="post">
                    {{csrf_field()}}
                        <div class="div mt-3">
                            <label for="">Tên loại tin</label>
                            <input type="text"class="form-control" placeholder="Tên loại tin" name="tenloaitin">        
                        </div>
                        <div class="div">
                                <select class="form-control mt-3" name="tloai_id">
                                    <option value="0">Chọn thể loại</option>
                                    @foreach($theloai as $tloai)       
                                        <option value="{{$tloai->id}}">{{$tloai->name}}</option>        
                                     @endforeach
                                </select>
                            </div>
                        <button type="submit" class="btn-primary mt-3">Thêm loại tin</button>
                    
                    </form>
                
                </div>
        </section>        
    </div>
</div>