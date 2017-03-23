<?php
namespace App\Database;

use Illuminate\Database\Eloquent\Model;
use App\Database\Traits\ValidatorTrait;

class Role extends Model {
  use ValidatorTrait;

  protected $table = 'role';
  protected $fillable = [
    'name',
    'description'
  ];

  public function rules()
  {
    return [
      'name' => 'required',
      'description' => 'required'
    ];
  }

  public function users()
    {
      return $this->hasMany('App\Database\User');
    }

}
