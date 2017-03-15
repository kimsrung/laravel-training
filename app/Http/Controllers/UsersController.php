<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Database\User;

use Validator;
class UsersController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users.index')->with('users', $users);
  }

  public function edit($id)
  {
    $user = User::find($id);
    if($user)
    {
      return view('users.edit')->with('user', $user);
    }
    else
    {
      return redirect()->to('/users');
    }
  }

  public function update($id, Request $r)
  {
    $user = User::find($id);

    if($user) {
      $user->validate($r->all());
    }
  }
}
