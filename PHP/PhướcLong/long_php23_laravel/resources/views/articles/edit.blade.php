@extends('layout.master')
@section('content')
@component('layout.components.title')
edit page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('articles.update',$article->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="Title">Title</label>
          <input type="text" class="form-control rounded-0" id="Title" placeholder="Name" name="name"
            value="{{$article->title}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="Slug">Slug</label>
          <input type="text" class="form-control rounded-0" id="email" placeholder="SlugDescripton" name="Slug"
            value="{{$article->slug}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="Descripton">Descripton</label>
          <input type="text" class="form-control rounded-0" id="email" placeholder="Descripton" name="Description"
            value="{{$article->descripton}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="content">Content</label>
          <input type="text" class="form-control rounded-0" id="email" placeholder="content" name="content"
            value="{{$article->content}}">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection