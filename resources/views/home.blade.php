@extends('layouts.layouts')


@section('header')
@parent

@endsection

@section('content')
<section class="py-5 text-center container">
<div class="row py-lg-5">
  <div class="col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light">Album example</h1>
    <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
    <p>
      <a href="#" class="btn btn-primary my-2">Main call to action</a>
      <a href="#" class="btn btn-secondary my-2">Secondary action</a>
    </p>
  </div>
</div>
</section>
@auth

<div class="album py-5 bg-body-tertiary">

<div class="container">
 @foreach($posts as $post) 
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col">
      <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        <div class="card-body">
          <p class="card-text">{{ $post->title }}</p>
          <p class="card-text">{{ $post->content }}</p>
            @if (isset(auth()->user()->picture))
              <img src="{{ asset('public/storage2/picture/' . auth()->user()->picture) }}" alt="" height="40">
            @endif
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <small class="text-body-secondary">{{ $post->getDate() }}</small>
          </div>
        </div>
      </div>
    </div>
  </div> 
  @endforeach
  <div class="col-md-12">
    {{$posts->appends(['test' => request()->test])->links('vendor.pagination.bootstrap-4')}}
  </div>
@endauth
</div>
</div>
@endsection