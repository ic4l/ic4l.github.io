<?php

namespace App\Controllers;

class Webconfig extends BaseController
{
	public function index()
	{
		$data = [
			'wconfig' => $cnfg = $this->webConfig->orderBy('id')->first()
		];

		return view('_page/_admin/web_config', $data);
	}


}
