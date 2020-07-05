@extends('layouts.app')
@section('title')
Add Tag
@endsection
@section('content')
<div class="card card-default">
  <div class="card-header">
    {{ isset($tag) ? 'Edit Tag' : 'Add Tag' }}
  </div>
  <div class="card-body">
    @include('partials.errors')
    <form action="{{ isset($tag) ? route('tags.update', $tag->id) : route('tags.store') }}" method="post">
      @csrf
      @if(isset($tag))
        @method('PUT')
      @endif
      <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ isset($tag) ? $tag->title : '' }}">
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-success">
          {{ isset($tag) ? 'Update' : 'Add' }}
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
