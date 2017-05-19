<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class TodoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $todos = todo::paginate(5);
    return view('todo.home', compact('todos'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('todo.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $todo = new todo;
    $this->validate($request, [
      'title' => 'required|unique:todos',
      'body' => 'required'
    ]);
    $todo->title = $request->title;
    $todo->body = $request->body;
    $todo->save();
    return redirect('/todo');
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $item = todo::find($id);
    return view('todo.show', compact('item'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $item = todo::find($id);
    return view('todo.edit', compact('item'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $todo = todo::find($id);
    $this->validate($request, [
      'title' => 'required',
      'body' => 'required'
    ]);
    $todo->title = $request->title;
    $todo->body = $request->body;
    $todo->save();
    session()->flash('message', 'Updated successfully');
    return redirect('/todo');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    todo::find($id)->delete();
    session()->flash('message', 'Deleted successfully');
    return redirect('/todo');
  }
}
