@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>POST</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
        </tr>
      </thead>
      <tbody>
        {{-- stampo con un ciclo l'array $posts --}}
        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>
    <a class="btn btn-dark" href="{{ route('admin.index') }}"><< Back</a>
  </div>
@endsection