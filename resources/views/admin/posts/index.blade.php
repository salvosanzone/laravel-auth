@extends('layouts.app')

@section('content')
  <div class="container">
    @if (session('deleted'))
      <div class="alert alert-danger" role="alert">
        {{ session('deleted') }}
      </div>
    @endif
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
              <a href="{{ route('admin.posts.edit', $post) }}"class="btn btn-primary" scope="col">Edit</a>
            </td>
            <td>
              <form onsubmit="return confirm('Sei sicuro di voler eliminare il post: {{ $post->title }}')" method="POST"
              action="{{ route('admin.posts.destroy', $post) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    {{ $posts->links() }}
    <a class="btn btn-dark mt-5" href="{{ route('admin.index') }}"><< Back</a>
  </div>
@endsection