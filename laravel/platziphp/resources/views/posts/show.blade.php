@extends('layouts.default')

@section('content')
    <div class="container">
      <div class="col-sm-12">
        <h1>{{ $post->title }}</h1>
        <p>
          {{ $post->body }}
        </p>
      </div>
    </div>
@stop