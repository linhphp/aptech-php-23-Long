@extends('layout.master')
@section('content')
@component('layout.components.title')
index page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Title</th>
            <th scope="col" class="">Slug</th>
            <th scope="col" class="">Description</th>
            <th scope="col" class="">Content</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach($articles as $article)
         <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->slug}}</td>
            <td>{{$article->description}}</td>
            <td>{{$article->content}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('articles.show',$article->id)}}" method="get">
                <button class="btn btn-sm btn-primary rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('articles.edit',$article->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                  Edit
                </button>
              </form>
             
                </button>
              </form>
            </td>
         </tr>
         @endforeach   
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection