@extends('layout.app')

@section('body')
  <div class="col-md-6 col-md-offset-3">
    <br/>
    @include('todo.partials.message')
    <div class="text-right">
      <a href="/todo/create" class="btn btn-info">Add New</a>
    </div>
    <h1 class="text-center">Todo Lists</h1>
    <ul class="list-group">
      @foreach($todos as $todo)
        <li class="list-group-item">
          {{$todo->id}}.
          <a href="{{'/todo/' . $todo->id}}">{{$todo->title}}</a>
          ({{$todo->user['name']}})
          <span class="badge" style="margin-left: 10px;">
            <form action="{{'/todo/' . $todo->id}}" method="post">
              {{csrf_field()}}
              {{method_field('delete')}}
              <button type="submit" style="border: none; background-color: transparent;">
                Xóa
              </button>
            </form>
          </span>
          <span class="badge" style="margin-left: 10px;">
            <a href="{{'/todo/' . $todo->id . '/edit'}}" style="color: #fff;">
              Sửa
            </a>
          </span>
          <small class="pull-right">{{$todo->created_at->diffForHumans()}}</small>
        </li>
      @endforeach
    </ul>
    <div class="text-center">
      {{$todos->links()}}
    </div>
  </div>
@endsection