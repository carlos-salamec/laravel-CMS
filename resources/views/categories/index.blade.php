@extends('layouts.app')
@section('title')
Categories
@endsection
@section('content')
<h1 class="text-center my-5">Categories</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-body">
        <ul class="list-group">
          @foreach($categories as $cat)
            <li class="list-group-item">
              {{ $cat->title }}
              <a href="/categories/{{$cat->id}}/delete" class="btn btn-danger btn-sm float-right m-1">Delete</a>
              <a href="/categories/{{$cat->id}}/edit" class="btn btn-info btn-sm float-right m-1">Edit</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
