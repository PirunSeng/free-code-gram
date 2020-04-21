<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // So, now we can just user User instead of \App\User

class ProfilesController extends Controller
{
  // public function index($user)
  //   {
  //     $user = User::findOrFail($user); // return 404 if not found
  //     return view('profiles.index', [
  //       'user' => $user,
  //     ]);
  //   } // equivalent to index func below

  public function index(User $user)
    {
      return view('profiles.index', compact('user'));
    }

  public function edit(User $user)
    {
      $this->authorize('update', $user->profile);
      return view('profiles.edit', compact('user'));
    }

  public function update(User $user)
    {
      $this->authorize('update', $user->profile);
      $data = request()->validate([
        'title' => 'required',
        'description' => 'required',
        'url' => 'url',
        'image' => '',

      ]);
      auth()->user()->profile()->update($data);
      return redirect("/profiles/{$user->id}");
    }
}
