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

if ($type == 'admin') {
	$user = new Admin();
} else {
	$user = new Customer();
}
$user->show();