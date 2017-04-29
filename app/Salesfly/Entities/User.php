<?php
namespace Salesfly\Salesfly\Entities;

class User extends \Eloquent {

	protected $table = 'users';
    
    protected $fillable = ['name',
    'email','password','role_id','estado','image','nuevo'];
}