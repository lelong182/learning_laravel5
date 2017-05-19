@extends('layout.app')

@section('title', 'Songs')

@section('body')
  Songs are everything<br />
  @foreach($songs as $song)
    {{$song->title}}
  @endforeach
@endsection