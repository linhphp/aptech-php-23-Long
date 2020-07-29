@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent


<table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">NickName</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
          <td scope="row">{{$user->id}}</td>
          <td>{{$user->nickname}}</td>
          <td>
          <form action="{{route('users.destroy',$user->id)}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="delete">
            <button>Xoa</button>
          </form>
          </td>
          
          </tr>
        @endforeach
        </tbody>
</table>           

@endsection
