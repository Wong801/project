<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
   * Handle an incoming authentication request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function get()
  {
    $user = User::where ('id', Auth::user()->id)->first();
    $data = [
      'name' => $user->name,
      'email' => $user->email,
    ];
    return view('profile', $data);
  }
}
