<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		echo view('template/include/header');
		echo view('template/include/sidebar');
		echo view('template/index');
		echo view('template/include/footer');
	}
}