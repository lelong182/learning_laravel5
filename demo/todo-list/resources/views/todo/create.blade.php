@extends('layout.app')

@section('body')
  <div class="col-md-6 col-md-offset-3">
    <br/>
    <div class="text-right">
      <a href="/todo" class="btn btn-info">Back</a>
    </div>
    <h1>{{ucfirst(substr(Route::currentRouteName(), 5))}} Item</h1>
    <form class="form-horizontal" method="post" action="/todo/@yield('editId')">
      {{csrf_field()}}
      @section('editMethod')
      @show
      <div class="form-group">
        <div class="col-sm-10">
          <input type="text" class="form-control" name="title" value="@yield('editTitle')" placeholder="Title"/>
          <br/>
          <textarea class="form-control" name="body" rows="5" placeholder="Body">@yield('editBody')</textarea>
          <br/>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
    @include('todo.partials.errors')
  </div>
@endsection