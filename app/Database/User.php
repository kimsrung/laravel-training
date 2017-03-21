<?php

namespace App\Database;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Database\Traits\ValidatorTrait;

class User extends Authenticatable
{
    use Notifiable, ValidatorTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    // Opposite to fillable
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email'
        ];
    }

    public function role()
    {
      return $this->belongsTo('App\Database\Role', 'role_id');
    }
}
