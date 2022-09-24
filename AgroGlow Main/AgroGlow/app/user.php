<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';
	protected $primaryKey = "userId";
	public $timestamps = false;

    protected $fillable = ['name', 'userName', 'email', 'DOB', 'password', 'contact'];
}