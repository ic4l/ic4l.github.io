<?php namespace App\Controllers;

use App\Models\CrudModel;

class Admin extends BaseController
{
	protected $CrudModel;

	public function __construct()
	{
		$data = [];
		$this->CrudModel = new CrudModel();
	}

	public function index()
	{
		return view('_page/_admin/dashboard');
	}

	public function web_config()
	{
		$id = '1';
		$data['wconfig'] = $this->CrudModel->get_where('web_config', 'id', $id);

		return view('_page/_admin/web_config', $data);
	}


}
