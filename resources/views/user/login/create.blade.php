@extends('layouts.layouts')

@section('title')
@parent - {{ $title }}
@endsection

@section('content')

    <div class="container">
        <h2 class="mt-5">Aвторизация</h2>
        <form class="mt-5" action="{{ route('login.store') }}" method="POST">
        @csrf    
        <div class="mb-3 mt-5">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="email" class="form-label">email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" 
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

            <button type="submit" class="btn btn-danger">отправить</button>        
        </form>
    </div>
@endsection

