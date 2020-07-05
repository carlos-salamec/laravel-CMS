@extends('layouts.app')
@section('title')
Users
@endsection
@section('content')
  <div class="card card-default">
    <div class="card-header">
      Users
    </div>
    <div class="card-body">
      @if($users->count() > 0)
      <table class="table">
        <thead>
          <th>Avatar</th>
          <th>Name</th>
          <th>Email</th>
          <th></th>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>
                <img src="{{ Gravatar::src($user->email) }}" width="40px" height="40px" style="border-radius: 50%" alt="">
              </td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              @if(auth()->user()->isAdmin() && !$user->isAdmin())
              <td>
                <form action="{{ route('users.make-admin', $user->id) }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-success btn-sm">Make Admin</button>
                </form>
              </td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <h3 class="text-center">No users registered</h3>
      @endif
    </div>
  </div>
@endsection
