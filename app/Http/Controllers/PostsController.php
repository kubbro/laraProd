<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{

public function show($id)
{
    return "this is the show method yayyyy" . $id;
}

public function create()
{
    return "I am the method that creates stuff";
}

public function store()
{
		//
}

public function edit($id)
{
		//
}

public function update($id)
{
		//
}

public function destroy($id)
{
		//
}

public function contact()
{

//  $people = ['Edwin', 'Jose', 'James', 'Peter', 'Maria'];

  $people = ['fjfhfghfg'];

  return view('contact', compact('people'));

}

public function show_post($id, $name, $password)
{
  // return view('post')->with('id',$id);

  return view('post', compact('id', 'name', 'password'));
}

}
