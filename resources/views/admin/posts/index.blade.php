@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>POST</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col" colspan="4">Title</th>
        </tr>
      </thead>
      <tbody>
        {{-- stampo con un ciclo l'array $posts --}}
        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>
              <a href="{{ route('admin.posts.show', $post) }}"class="btn btn-success" scope="col">Show</a>
            </td>
            <td>
              <a href=""class="btn btn-primary" scope="col">Edit</a>
            </td>
            <td>
              <a href=""class="btn btn-danger" scope="col">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    <a class="btn btn-dark" href="{{ route('admin.index') }}"><< Back</a>
  </div>
@endsection