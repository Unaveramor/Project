@extends('layouts.layouts')

@section('title')
@parent - {{ $title }}
@endsection

@section('content')

<div class="conteiner">
    <div class="mt-5">
        <h1>Create Post</h1>
        @if ($errors->any())
        <div class="alert alert_denger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>

<div class="container">
    <form class="mt-5" action="" method="POST">
    @csrf    
    <div class="mb-3 mt-5">
            @error('title')
            <div class="alert alert-denger">{{ $message }}</div>
            @enderror

            <label for="title" class="form-label">title</label>
            <input type="text" name="title" class="form-control @error('title) is-invalid @enderror" id="title" placeholder="title">
        </div>
        <div class="mb-3">

        @error('content')
            <div class="alert alert-denger">{{ $message }}</div>
            @enderror  

            <label for="content" class="form-label">content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="5">{{old('content')}}</textarea>
        </div>
            @error('rubric_id')
            <div class="alert alert-denger">{{ $message }}</div>
            @enderror  

        <select class="form-select mt-3 @error('rubric_id') is-invalid @enderror" id="rubric_id" name="rubric_id">

            <option selected>выберите рубрику</option>
            @foreach ($rubrics as $key => $value)
            <option value="{{ $key }}"
            @if(old('rubric_id') == $key) selected @endif 
            > {{ $value }} </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-danger">отправить</button>        
    </form>

</div>

@endsection