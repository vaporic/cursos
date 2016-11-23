@extends('layouts.default')

@section('content')
  <div class="container">
    <div class="col-sm-6 col-sm-offset-3">
      <h3 class="text-center">INICIAR SESIÓN</h3>

      @if($errors->has())
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('auth_store_path') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Email:</label>
          <input class="form-control" type="text" name="email" value="">
        </div>
        <div class="form-group">
          <label for="password">Contraseña:</label>
          <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Mantener sesión abierta
            </label>
          </div>
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="Iniciar sesión">
        </div>
      </form>
    </div>
  </div>
@stop