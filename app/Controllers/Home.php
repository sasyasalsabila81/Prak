<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}


	public function show()
	{
		$title ['judul'] = 'Table Mahasiswa';
		// $data ['nama'] = 'sasya salsabila';
		
		// $data ['npm'] = '1867051001';
		// $data ['semester'] = '5';
		// echo view('mahasiswa/header', $title);
		// echo view('mahasiswa/index', $data);
		// echo view('mahasiswa/footer');
	}

}
