@extends('layouts.layouts')

@section('title')

@endsection

@section('content')
    <h1>Start</h1>
    <form class="mt-5" action="" method="post">
        @csrf    
        <div class="mb-3 mt-5">
            <label for="text" class="form-label">Время года</label><br>
            <input type="text" name="month">
            <button type="submyt" class="btn btn-danger">отправить</button>   
        </div> 
    </form>

    @if(isset($month))
        @if($month==1 || $month == 2 || $month == 12 )
            <p>Зима</p>
        @elseif($month>=3 && $month <= 5)
            <p>Весна</p>
        @elseif($month>=6 && $month <= 8)
            <p>Лето</p>
        @elseif($month>=9 && $month <= 11)
            <p>Осень</p>
        @elseif($month < 1 || $month > 12)
            <p>Введите номер месяца</p>
        @endif
    @endif

@endsection