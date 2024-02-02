@extends('layouts.layouts')

@section('title')
@parent - {{ $title }}
@endsection

@section('content')

    <div class="container">

        <form class="mt-5" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf    
        <div class="mb-3 mt-5">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="name" class="form-label">name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" 
            value="{{old('name')}}">
        </div>

        <div class="mb-3 mt-5">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="email" class="form-label">email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" 
            value="{{old('email')}}">
        </div>

        <div class="mb-3 mt-5">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="password" class="form-label">password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" 
            placeholder="password" value=""> 
        </div>

        <div class="mb-3 mt-5">
        
            <label for="password_confirmation" class="form-label">password_confirmation</label>
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" 
            id="password_confirmation" 
            placeholder="password" value=""> 
        </div>

        <div class="mb-3 mt-5 form_group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form_control-file" id="avatar" name="avatar">
        </div>

            <button type="submit" class="btn btn-danger">отправить</button>        
        </form>

    </div>
@endsection

