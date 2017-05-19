@extends('layout.app')

@section('body')
  <div class="col-md-6 col-md-offset-3">
    <br/>
    <div class="text-right">
      <a href="/todo" class="btn btn-info">Back</a>
    </div>
    <h3>{{$item->title}}</h3>
    <p>{{$item->body}}</p>
  </div>
@endsection