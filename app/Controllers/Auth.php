<?php 
	
	namespace App\Controllers;

	/**
	 * @author: Angel Fuentes
	 */
	class Auth extends BaseController
	{
		function index()
		{
			$data = ['title' => 'Iniciar Sesión'];
			$this->loadView('auth/login', $data);
		}

		function login()
		{
			$this->index();
		}

		function register()
		{
			$data = ['title' => 'Registrarse'];
			$this->loadView('auth/register', $data);
		}

		function email()
		{
			$data = ['title' => 'Restablecer contraseña'];
			$this->loadView('auth/email', $data);
		}

		function reset()
		{
			$data = ['title' => 'Restablecer contraseña'];
			$this->loadView('auth/reset', $data);
			
		}

		private function loadView($view, $data)
		{
			echo view('layouts/user/header', $data);
			echo view($view);
			echo view('layouts/user/footer');
		}
	}

?>