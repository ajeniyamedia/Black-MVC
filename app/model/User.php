<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{
	
	public $name;

	public $timestamps = ['created_at', 'updated_at'];

	protected $fillable = ['fullname', 'email', 'phone'];
}