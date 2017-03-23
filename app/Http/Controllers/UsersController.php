<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Database\User;
use App\Database\Role;

use Validator;
class UsersController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users.index')->with('users', $users);
  }

  public function edit(User $user)
  {
    $roles = Role::get()->pluck('description', 'id')->all();

    return view('users.edit')->with(['user' => $user, 'roles' => $roles]);
  }

  public function update(User $user, Request $r)
  {
    $user->validate($r->all());
    $user->update($r->all());

    return redirect()->to('/users')->withMessage('user updated success!!');
  }

  public function destroy(User $user)
  {
    $user->delete();

    return redirect()->route('user.list')->withMessage('user deleted successfully!!');
  }
}
