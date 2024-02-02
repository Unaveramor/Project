@extends('layouts.layouts')

@section('title')

@endsection

@section('content')
    <h1>Start</h1>
    <form class="mt-5" action="" method="post">
    @csrf    
        <div class="mb-3 mt-5">
            <label for="text" class="form-label">день недели1</label><br>
            <input type="text" name="day">
            <button type="submyt" class="btn btn-danger">отправить</button>   
        </div> 
    </form>
    @if(isset($dayOfWeek))
        <p>День недели: {{ $dayOfWeek }}</p>
    @endif


@endsection