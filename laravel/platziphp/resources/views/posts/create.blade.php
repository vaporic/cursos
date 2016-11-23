@extends('layouts.default')

@section('content')
  <div class="container">
    <div class="col-sm-12">
      <h3 class="text-center">NUEVO POST</h3>

      @include('partials.errors')

      <form action="{{route('post_create_path')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Título</label>
          <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="body">Contenido</label>
          <textarea class="form-control" name="body" rows="10" cols="40">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
          <input class="btn btn-success" type="submit" value="Crear Post">
        </div>
      </form>
    </div>
  </div>
@stop