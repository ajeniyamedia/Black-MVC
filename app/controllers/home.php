<?php

class Home extends Controller
{
	protected $user;

	public function __construct(){
		$this->user = $this->model('User');
	}
	public function index($name = '')
	{
		$user = $this->user;
		$user->name = $name;
		
		$this->view('home/index', ['name' => $user->name]);	

	}


	public function create($fullname ='', $email = '', $phone= ''){

		// User::create([
		// 	'fullname' => $fullname,
		// 	'email' => $email,
		// 	'phone' => $phone
		// ]);
		$this->user->create([
			'fullname' => $fullname,
			'email' => $email,
			'phone' => $phone
		]);
	}
}