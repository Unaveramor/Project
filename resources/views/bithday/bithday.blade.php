@extends('layouts.layouts')

@section('title')

@endsection

@section('content')
    <h1>happy day</h1>
    <form class="mt-5" action="" method="post">
        @csrf    
        <div class="mb-3 mt-5">
            <label for="text" class="form-label">введите день вашего рождения</label><br>
            <input type="text" name="day">
            <button type="submyt" class="btn btn-danger">отправить</button>   
        </div> 
    </form>

@endsection