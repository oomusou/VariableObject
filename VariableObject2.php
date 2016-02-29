<?php
class Customer
{
	public function show() 
	{
		echo('I am a customer');

	}
}

class Admin
{
	public function show()
	{
		echo('I am a admin');
	}
}

$type = 'admin';
$className = ($type == 'admin') ? 'Admin' : 'Customer';
$user = new $className;
$user->show();