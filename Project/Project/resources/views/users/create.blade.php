@extends('layout.master')
@section('content')
@component('layout.components.title')
create page
@endcomponent
@if(count($errors)>0)

  @foreach($errors->all() as $err)
  <div class="alert-danger alert">
  {{$err}}
  </div>
  @endforeach 
@endif
@if(Session::has('thongbao'))
<div class="row">
{{Session::get('thongbao')}}
</div>

@endif   
<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">Name</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="nickname">Nickname</label>
          <input type="text" class="form-control rounded-0" id="nickname" placeholder="NickName" name="nickname">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">email</label>
          <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="password">password</label>
          <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="re_password">Repassword</label>
          <input type="password" class="form-control rounded-0" id="re_password" placeholder="Repassword" name="re_password">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">Anhdaidien</label>
          <input type="file" class="form-control rounded-0" id="name" placeholder="Anhdaidien" name="Anhdaidien">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
            dang ky
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection