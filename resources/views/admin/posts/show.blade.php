@extends('layouts.app')

@section('content')
  
  <div class="container d-flex justify-content-center">
    <div class="mb-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h1 class="card-title mb-0">Titolo del Post</h1>
          <h6>{{ $post->title }}</h6>
          <h4 class="card-subtitle mt-4">Contenuto</h4>
          <p class="card-text">{{ $post->content }}</p>
          <a href="#" class="card-link btn btn-primary">Edit</a>
          <a href="#" class="card-link btn btn-danger">Delete</a>
        </div>
      </div>
    </div> 
  </div>

  <div class="container d-flex align-items-end" style="height: 200px;" >
    <a href="{{ route('admin.posts.index') }}" class="btn btn-dark"><< Back</a>
  </div>
  
@endsection