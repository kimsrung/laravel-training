<?php
namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

  protected $table = 'role';
  protected $fillable = [
    'name',
    'description'
  ];

  public function users()
    {
      return $this->hasMany('App\Database\User');
    }

}
