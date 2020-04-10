<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function create() {
    return view('posts.create');
  }

  public function store() {
    $data = request()->validate([
      // 'notMandatoryField' => '' // field no validation, need to pass empty string
      'caption' => 'required',
      'image' => 'required|image',
      // 'image' => ['required', 'image'], // alternative way
    ]);

    auth()->user()->posts()->create($data);

    dd(request()->all());
  }
}
