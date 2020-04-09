<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
  public function index($user)
    {
      $user = User::findOrFail($user); // return 404 if not found
      return view('profiles.index', [
        'user' => $user,
      ]);
    }
}
