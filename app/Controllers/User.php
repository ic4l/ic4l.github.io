<?php namespace App\Controllers;

date_default_timezone_set('Asia/Riyadh');

use App\Models\CrudModel;

class User extends BaseController
{
	protected $CrudModel;

	public function __construct()
	{
		$data = [];
		$this->CrudModel = new CrudModel();
	}

	public function index()
	{
		return redirect()->to('/');
	}

	public function user_list()
	{

		$data['users'] = $this->CrudModel->get_all('users_view');
		$data['user'] = $this->CrudModel->get_where('users_view', 'userid', user()->id);

		return view('_page/_admin/user_list', $data);
	}

	public function user_details($id = 0)
	{
		$data['user'] = $this->CrudModel->get_where('users_view', 'userid', $id);

		if(empty($data['user']) || empty($id)){
			return redirect()->to('user_list');
		}

		return view('_page/_admin/user_details', $data);
	}

	public function edit()
	{
		$id = $this->request->getVar('xUID');
		$data['user'] = $this->CrudModel->get_where('users_view', 'userid', $id);
		$data['groups'] = $this->CrudModel->get_all('auth_groups');

		return view('_page/_admin/user_edit', $data);

	}


	public function update()
	{
		if($this->request->getMethod() == 'post')
		{
			$rules = [
				'xFullname' 	=> 'required|min_length[3]'
			];

			if($this->request->getPost('cPasswd') != ''){
				$rules['xPasswd'] = 'required|min_length[3]';
				$rules['cPasswd'] = 'matches[xPasswd]';
			}

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {
			$dob = \DateTime::createFromFormat('d/m/Y', $this->request->getPost('xDOB'));
			$file = $this->request->getFile('xFile');

			$data = [
				'fullname'		=> mb_strtoupper($this->request->getPost('xFullname')),
				'nickname' 		=> $this->request->getPost('xNickname'),
				'pob' 				=> mb_strtoupper($this->request->getPost('xPOB')),
				'dob'					=> $dob->format('Y-m-d'),
				'gender' 			=> $this->request->getPost('xGender'),
				'mobile' 			=> $this->request->getPost('xMobile'),
				'facebook' 		=> $this->request->getPost('xFacebook'),
				'twitter' 		=> $this->request->getPost('xTwitter'),
				'instagram' 	=> $this->request->getPost('xInstagram'),
				'address' 		=> $this->request->getPost('xAddress'),
				'updated_at'	=> date("Y-m-d h:i:sa"),
			];

			if($this->request->getPost('xPasswd') != ''){
				$data2['passwd'] = password_hash($this->request->getPost('xPasswd'), PASSWORD_DEFAULT);
			}

			if($file != ''){
				$xUser = $this->CrudModel->get_where('users_view', 'userid', $this->request->getVar('uid'));

				if($xUser['image'] !== 'default.png')
				{
					unlink('./_assets/_images/_users/'.$xUser['image']);
				}
					$file->move('./_assets/_images/_users/', uniqid().'.'.$file->getExtension());
					$data['image'] = $file->getName();
			}

			$this->CrudModel->update_data_where('users_view', 'userid', $this->request->getVar('uid'), $data);

			// $datax['gid'] = $this->request->getVar('xRole');
			// $this->CrudModel->update_data_where('users_view', 'userid', $this->request->getVar('uid'), $datax);

			$session = session();
			$session->setFlashdata('xMSG', 'Updated');

			$data['user'] = $this->CrudModel->get_where('users_view', 'userid', $this->request->getVar('uid'));
			return view('_page/_admin/user_details', $data);
			}
		}

		$data['user'] = $this->CrudModel->get_where('users_view', 'userid', user()->id);
		$data['groups'] = $this->CrudModel->get_all('auth_groups');

		return view('_page/_admin/user_edit', $data);

	}

	public function role_update()
	{
		$uid = $this->request->getVar('uid');
		$data['gid'] = $this->request->getVar('xRole');

		$this->CrudModel->update_data_where('users_view', 'userid', $uid, $data);

		$session = session();
		$session->setFlashdata('xMSG', 'Updated');

		$data['user'] = $this->CrudModel->get_where('users_view', 'userid', $this->request->getVar('uid'));
		$data['groups'] = $this->CrudModel->get_all('auth_groups');
		return view('_page/_admin/user_edit', $data);
	}


}
