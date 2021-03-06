@extends('layouts.default')

@section('content')
  <div class="container">
    <div class="col-sm-6 col-sm-offset-3">
      <h3 class="text-center">REGISTRO</h3>

      @include('partials.errors')

      <form action="{{ route('register_store_path') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Nombre:</label>
          <input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}">
        </div>
        <div class="form-group">
          <label for="email">Apellidos:</label>
          <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input class="form-control" type="text" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="password">Contraseña:</label>
          <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
          <label for="password">Confirmar Contraseña:</label>
          <input class="form-control" type="password" name="password_confirmation">
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="Registrar">
        </div>
      </form>
    </div>
  </div>
@stop