@extends('layouts.layouts')

@section('title')
@parent - {{ $title }}
@endsection

@section('content')

<div class="conteiner">
    <div class="mt-5">
        <h1>{{$title}}</h1>
        <!-- @if ($errors->any())
        <div class="alert alert_denger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->
    </div>
</div>

<div class="container">
    <form class="mt-5" action="" method="POST">
    @csrf  

        <div class="mb-3 mt-5">
        @error('name')
                <div class="alert alert-denger">{{ $message }}</div>
            @enderror  

            <label for="name" class="form-label">name</label>
            <input type="text" name="name" class="form-control @error('name) is-invalid @enderror" id="name" placeholder="name">
        </div>

        <div class="mb-3 mt-5">
        @error('email')
                <div class="alert alert-denger">{{ $message }}</div>
            @enderror  
            <label for="email" class="form-label">email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email">

        </div>

        <div class="mb-3 mt-5">
        @error('nomber')
                <div class="alert alert-denger">{{ $message }}</div>
            @enderror  
            <label for="nomber" class="form-label">nomber</label>
            <input type="text" name="nomber" class="form-control @error('nomber') is-invalid @enderror" id="nomber" placeholder="nomber">
        </div>

        <!-- <div class="mb-3 mt-5">
        @error('password')
                <div class="alert alert-denger">{{ $message }}</div>
            @enderror  
            <label for="password" class="form-label">password</label>
            <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="password">
        </div> -->

        <button type="submit" class="btn btn-danger">отправить</button>        
    </form>

</div>

@endsection