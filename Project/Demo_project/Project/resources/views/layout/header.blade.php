<div class="header">
  <div class="d-flex flex-row ">
    <div class="col-12 px-0">
      <div class="d-flex flex-row align-items-center">
        <div class="col-3">
          <form action="{{route('users.index')}}" method="get">
            <a href="">Trang Chủ</a>  
          </form>
        </div>
        <div class="col-6">
          <h1 class="text-center font-weight-bold text-white ">SHOP BÁN HÀNG</h1>
        </div>
        <div class="col-3 text-center mt-3">
            <ul>  
              <li><a href ="{{URL::to('/login')}}">Đăng nhập</a></li>
              <li><a href ="">Đăng xuất</a></li>
            </ul>
        </div>
      </div>
    </div>
    
  </div>
</div>