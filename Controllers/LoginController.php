<?php

	namespace controllers;

	class LoginController extends Controller{
		public function __construct($view, $model){
			parent::__construct($view, $model);
		}

		public function index(){
			if(isset($_POST['acao'])){
				if($this->model->validarLogin($_POST['login'], $_POST['senha'])){
					die('Logado com sucesso');
				}else{
					die('Falhou');
				}
			}
			$this->view->render('login.php', null, null);
		}

	}

?>