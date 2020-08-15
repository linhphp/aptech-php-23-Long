<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
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
            
            Thêm danh mục loại tin
            </header>
            
                <div class="col-xs-4 col-md-4 mx-auto">
                    <form action="{{URL::to('add-loaitin')}}" method="post">
                    {{csrf_field()}}
                        <div class="div mt-3">
                            <label for="">Tên loại tin</label>
                            <textarea type="text"class="form-control" name="tenloaitin"placeholder="Tên loại tin" ></textarea> 
                        </div>
                        
                        <button type="submit" class="btn-primary mt-3">Thêm loại tin</button>
                    
                    </form>
                
                </div>
        </section>        
    </div>
</div>