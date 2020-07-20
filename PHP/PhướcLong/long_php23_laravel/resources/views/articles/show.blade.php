@extends('layout.master')
@section('content')
@component('layout.components.title')
show page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Tile</th>
            <th scope="col" class="">Slug</th>
            <th scope="col" class="">Description</th>
            <th scope="col" class="">Content</th>
            <th scope="col" class="">Created Date</th>
            <th scope="col" class="">Updated Date</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->slug}}</td>
            <td>{{$article->description}}</td>
            <td>{{$article->content}}</td>
            <td>{{$article->created_at}}</td>
            <td>{{$article->updated_at}}</td>
            <td class="d-flex border-0 align-items-center">
              <form action="{{route('articles.edit',$article->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2 rounded-0">
                  Edit
                </button>
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection