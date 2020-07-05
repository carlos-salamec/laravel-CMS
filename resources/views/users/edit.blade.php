@extends('layouts.app')

@section('content')
@include('partials.errors')
<div class="card">
    <div class="card-header">Update Profile</div>

    <div class="card-body">
        <form action="{{ route('users.update-profile') }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$user->name}}" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">About Me</label>
                <textarea name="about" id="about" class="form-control" cols='5' rows='5'>{{ $user->about }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Profile</button>
        </form>
    </div>
</div>
@endsection
