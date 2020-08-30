<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật loại tin</title>
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
            
            Cập nhật loại tin
            </header>
            
                <div class="col-xs-4 col-md-4 mx-auto">
                    <form action="{{URL::to('update-ltin/'.$loaitin->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
            
                        <div class="div mt-3">
                            <label for="">Tên loại tin</label>
                            <input type="text"class="form-control" placeholder="{{$loaitin->name}}"name="name">
                        </div>
                        <div class="div mt-3">
                            <label for="">Tên thể loại</label>
                            <select class="form-control" name="tloai_id">

                                @foreach($theloai as $tloai)
                                    <option 
                                    @if($loaitin->tloai_id == $tloai->id)
                                        {{"selected"}}                    
                                    @endif
                                    value="{{$tloai->id}}">{{$tloai->name}}</option>
                                @endforeach       
                            </select>
                        </div>
                        <div class="div mt-3 ">
                            <label for="">Tên loại tin mới</label>
                            <input type="text"class="form-control" placeholder="Tên loại tin mới" name="name">
                        </div>
                        <button type="submit" class="btn-primary mt-3">Cập nhật loại tin</button>
                    
                    </form>
                
                </div>
        </section>        
    </div>
</div>