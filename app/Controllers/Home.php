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
		$images = array(
			2 => "invitacion.png",
			3 => "invitacion3.png",
			4 => "invitacion4.png",
			5 => "invitacion5.png",
			6 => "invitacion6.png",
			7 => "invitacion7.png",
			8 => "invitacion8.png",
			9 => "invitacion9.png",
			10 => "invitacion10.png"
		);

		/*return redirect('/');*/
		$data = [
			'nombre' => $this->request->getVar('nombre_estudiante'),
			'numero_personas' => $this->request->getVar('numero_personas'),
			'nombre_tutor'    => $this->request->getVar('nombre_tutor'),
			'email'    => $this->request->getVar('email'),
			'celular'    => '',
			'telefono'    => '',
			'domicilio'    => '',
			'referencia'    => '',

		];		
		$invitacionModel = new InvitacionModel();
		$invitacionModel->insert($data);

		$message = "
		<html>
		<head>
		<title>Invitación</title>
		</head>
		<body>
		<p><strong>IMPORTANTE: </strong>El acceso será acompañado de un mayor</p>
		</body>
		</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$from = "admin@expertosweb.mx";
		$to = "themike123work@gmail.com";
		$subject = "Invitacion 19 de Marzo";
		$headers .= "From:" . $from;

		mail($to,$subject,$message, $headers);

		return view('success_store');
	}


	public function list()
	{
		$invitacionModel = new InvitacionModel();
		$data = $invitacionModel->findAll();
		$numero_personas = 0;
		foreach ($data as &$item) {
			$numero_personas += $item['numero_personas'];
		}

		return view('list_students', ['data' => $data, "numero_personas" => $numero_personas]);
	}

}
