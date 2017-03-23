<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Database\Role;
use Validator;

class RolesController extends Controller
{
  public function index()
  {
    $roles = Role::all();
    return view('roles.index')->with('roles', $roles);
  }

  public function create()
  {
    return view('roles.create')->with([]);
  }

  public function save(Request $r)
  {
    $role = new Role();
    $role->validate($r->all());
    $role->save($r->all());

    return redirect()->to('/roles')->withMessage('role updated success!!');
  }
}
