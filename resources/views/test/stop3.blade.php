@extends('layouts.layouts')

@section('title')

@endsection

@section('content')
    <h1>Start</h1>
    <form class="mt-5" action="" method="post">
        @csrf    
        <div class="mb-3 mt-5">
            <label for="text" class="form-label">Age</label><br>
            <input type="text" name="age">
            <button type="submyt" class="btn btn-danger">отправить</button>   
        </div> 
    </form>
    @if(isset($agee))
        @unless($agee > 18)
        <p>Вы не совершеннолетний</p>
        @endunless
    @endif
@endsection