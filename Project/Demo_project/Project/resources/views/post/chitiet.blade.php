<a href="{{route('users.index')}}">Trang chủ</a>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="">
                    <h3 class="inner-title">Thông tin bài viết</h3>
                </div>
                <div class="card ">
                    <h2>{{$chitiet->title}}</h2> 
                </div>               
                <div class="d-flex justify-content-around ">
                    <img src="/public/image/{{$chitiet->post_image}}"height="200" width="250">
                </div>
                <div class="div mt-5">
                    <h4>{{$chitiet->description}}</h4>
                    <p>{{$chitiet->content}}</p>
                    
                </div>
                
            </div>
        </div>
        
    </div>
