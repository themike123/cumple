<?php

namespace App\Controllers;
use App\Models\InvitacionModel;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		/*user default
		$data = [
			'username' => 'admin',
			'password' => password_hash('passPanelAdmin', PASSWORD_DEFAULT),
			'email'    => ''
		];		
		$userModel = new UserModel();		
		$userModel->insert($data);*/

		return view('welcome_message');
	}

	public function store()
	{	
		/*return redirect('/');*/
		/*$data = [
			'nombre' => $this->request->getVar('nombre_estudiante'),
			'nombre_tutor'    => $this->request->getVar('nombre_tutor'),
			'email'    => $this->request->getVar('email'),
			'celular'    => $this->request->getVar('celular'),
			'telefono'    => '',
			'domicilio'    => '',
			'referencia'    => '',

		];		
		$invitacionModel = new InvitacionModel();
		$invitacionModel->insert($data);*/

		return view('success_store');
	}


	public function list()
	{
		$invitacionModel = new InvitacionModel();
		$data = $invitacionModel->findAll();

		return view('list_students', ['data' => $data]);
	}

}
