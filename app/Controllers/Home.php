<?php 
	
	namespace App\Controllers;

	/**
	 * @author: Angel Fuentes
	 */
	class Home extends BaseController
	{
		function index()
		{
			$data = ['title' => 'Bienvenido'];
			$this->loadView('home', $data);
		}

		private function loadView($view, $data)
		{
			echo view('layouts/user/header', $data);
			echo view($view);
			echo view('layouts/user/footer');
		}
	}

?>