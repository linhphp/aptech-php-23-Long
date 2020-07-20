@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<section >
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="style">#</th>
            <th scope="col" class="style">Name</th>
            <th scope="col" class="style">Email</th>
            <th scope="col" class="style">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('users.show',$user->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$users->links()}}</div>
    </div>
  </div>
</div>
</section>
    <script >
        function createBubble(){ 
            const section = document.querySelector('section')
            const createElement = document.createElement('div2')
            var size = Math.random() * 60;

            createElement.style.width = 20 + size + 'px';
            createElement.style.height = 20 + size + 'px';
            createElement.style.left = Math.random() * innerWidth + "px";
           
            section.appendChild(createElement);
            setTimeout(() =>{
                createElement.remove()
            },5000)
          }
        setInterval(createBubble,50)
    </script>
@endsection
