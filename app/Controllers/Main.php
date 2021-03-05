<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		return view('_page/_main/home');
	}

	public function books()
	{
		return view('_page/_main/books');
	}

	public function events()
	{
		return view('_page/_main/events');
	}

	public function about_us()
	{
		return view('_page/_main/about_us');
	}

	public function contact_us()
	{
		return view('_page/_main/contact_us');
	}


}
