@extends('layouts.layouts')

@section('title')
@parent - {{ $title }}
@endsection

@section('content')
<a href="/main">Обновить страницу</a>
<p>{{ $counter }}</p>
<div class="container">
    @csrf   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">email_verified_at</th>
      <th scope="col">password</th>
      <th scope="col">remember_token</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">is_admin</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->email_verified_at }}</td>
      <td>{{ $user->password }}</td>
      <td>{{ $user->remember_token }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
      <td>{{ $user->is_admin }}</td>
    </tr>
    @endforeach
  </tbody>
</table> 
</div>
@endsection
