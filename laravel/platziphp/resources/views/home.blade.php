@extends('layouts.default')

@section('content')
    <div class="container">
      <div class="col-sm-12">
        <h1>Pueblos México</h1>
        @if($currentUser)
          <a class="btn btn-primary" href="{{ route('post_create_path') }}">Crear Post</a>
        @endif
        <hr>
        <ul class="list-unstyled">
          @if(count($posts) > 0)
            @foreach ($posts as $post)
              <li>
                <p class="lead">
                  <a href="{{ route('post_show_path', $post->id) }}">
                    {{ $post->title }}
                  </a>
                </p>
                <br>
                <small><strong>creado:</strong> {{ $post->created_at }}</small>
                <br>
                <small><strong>autor:</strong> {{ $post->user->first_name }} {{ $post->user->last_name }}</small>
                <hr>
              </li>
            @endforeach
          @else
            <li class="text-center">
              <h3>No existen post disponibles</h3>
            </li>
          @endif
        </ul>
      </div>
    </div>
@stop