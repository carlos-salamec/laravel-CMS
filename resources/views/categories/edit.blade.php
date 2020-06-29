@extends('layouts.app')
@section('title')
Edit Category
@endsection
@section('content')
<h1 class="text-center my-5">Edit Category</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-body">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="list-group">
              @foreach($errors->all() as $error)
                <li class="list-group-item">
                  {{$error}}
                </li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/categories/{{$category->id}}" method="post">
          @csrf
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{$category->title}}">
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
