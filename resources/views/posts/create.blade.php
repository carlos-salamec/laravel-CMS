@extends('layouts.app')
@section('title')
Add Post
@endsection
@section('content')
<div class="card card-default">
  <div class="card-header">
    {{ isset($post) ? 'Edit Post' : 'Add Post' }}
  </div>
  <div class="card-body">
    @include('partials.errors')
    <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      @if(isset($post))
        @method('PUT')
      @endif
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id='title' value="{{ isset($post) ? $post->title : '' }}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id='description' cols="5" rows="5">{{ isset($post) ? $post->description : '' }}</textarea>
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <input id="content" type="hidden" name="content" value="{{ isset($post) ? $post->content : '' }}">
        <trix-editor input="content"></trix-editor>
      </div>
      <div class="form-group">
        <label for="published_at">Published at</label>
        <input type="text" name="published_at" class="form-control" id='published_at' value="{{ isset($post) ? $post->published_at : '' }}">
      </div>
      @if(isset($post))
      <div class="form-group">
        <img src="{{ asset("storage/{$post->image}") }}" alt="" style="width:100%">
      </div>
      @endif
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id='image'>
      </div>
      <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" id="category_id" name="category_id">
          @foreach($categories as $category)
          <option value="{{ $category->id }}"
            @if(isset($post) && $category->id == $post->category_id)
            selected
            @endif
            >{{ $category->title }}</option>
          @endforeach
        </select>
      </div>
      @if($tags->count() > 0)
      <div class="form-group">
        <label for="tags">Tags</label>
        <select class="form-control tags-selector" id="tags" name="tags[]" multiple>
          @foreach($tags as $tag)
          <option value="{{ $tag->id }}"
            @if(isset($post) && $post->hasTag($tag->id))
            selected
            @endif
            >
            {{ $tag->title }}
          </option>
          @endforeach
        </select>
      </div>
      @endif
      <div class="form-group text-center">
        <button type="submit" class="btn btn-success">
          {{ isset($post) ? 'Update Post' : 'Create Post' }}
        </button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  flatpickr('#published_at', {
    enableTime: true
  })

  $(document).ready(function() {
    $('.tags-selector').select2();
});

</script>
Usage
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection
