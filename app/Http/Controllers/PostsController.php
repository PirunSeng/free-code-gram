<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    $imagePath = request('image')->store('uploads', 'public');
    $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200); // w: 1200px, h: 1200px
    $image->save();

    // auth()->user()->posts()->create($data);
    auth()->user()->posts()->create([
      'caption' => $data['caption'],
      'image' => $imagePath,
    ]);

    // dd(request()->all());
    return redirect('/profiles/' . auth()->user()->id);
  }
}
