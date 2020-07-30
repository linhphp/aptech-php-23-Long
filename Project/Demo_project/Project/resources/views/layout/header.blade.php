<div class="container my-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <div class="d-flex flex-row align-items-center">
        <div class="col-3">
          <form action="{{route('users.index')}}" method="get">
            <button class="btn btn-primary rounded-0 font-weight-bold">Home</button>
            
            
          </form>
        </div>
        <div class="col-6">
          <h1 class="text-center font-weight-bold text-uppercase">user project</h1>
        </div>
        <div class="col-3">
            <ul>  
              <li><a href ="{{URL::to('/login')}}">Dang Nhap</a></li>
              <li><a href ="">Dang Xuat</a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>