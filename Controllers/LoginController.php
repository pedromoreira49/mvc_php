<?php

	namespace controllers;

	class LoginController extends Controller{
		public function __construct($view, $model){
			parent::__construct($view, $model);
		}

		public function index(){
			$this->view->render('login.php', null, null);
		}

	}

?>