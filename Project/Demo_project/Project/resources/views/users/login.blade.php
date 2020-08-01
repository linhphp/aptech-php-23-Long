<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/bootstrap.css')}}">

</head>
<body>
<div class="container mx-5">
    <div class="row">
    <a href="{{route('users.index')}}">Home</a> 
        <div class="col-xs-4 col-md-4 mx-auto">
            <form action="{{route('users.login')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="text-danger mt-3 ">
                @if($errors->any())
                    <div class="div">
                        @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </div>
                @endif
                @if(Session::has('thongbao'))
                    <div class="row">
                    {{Session::get('thongbao')}}
                    </div>
                @endif  
                </div>
                
                <div class="form-group mt-3 ">
                    <label for="email">Email</label><br>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">

                </div>
                <div class="form-group">
                    <label for="password">Password</label><br>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <button type="submit"class="form-control btn-primary ">Login</button>

            </form>
        </div>
       
    </div>
</div>
</body>
</html>

