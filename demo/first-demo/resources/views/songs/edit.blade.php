@extends('layout.app')

@section('title', 'Edit Song')

@section('body')
  {{$song->title}}<br/>
  {{$song->artist}}
@endsection