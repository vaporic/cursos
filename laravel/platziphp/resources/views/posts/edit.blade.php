@extends('layouts.default')

@section('content')
  <div class="container">
    <div class="col-sm-12">
      <h3 class="text-center">EDITAR POST</h3>

      @include('partials.errors')

      <form action="{{route('post_update_path', $post->id)}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="title">Título</label>
          <input class="form-control" type="text" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
          <label for="body">Contenido</label>
          <textarea class="form-control" name="body" rows="10" cols="40">{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
          <input class="btn btn-success" type="submit" value="Editar Post">
        </div>
      </form>
    </div>
  </div>
@stop