<?php
	namespace models;

	class LoginModel extends Model{
		public $login = 'admin';
		public $senha = 'admin';

		public function validarLogin($login, $senha){
			if($login == $this->login && $senha == $this->senha){
				return true;
			}else{
				return false;
			}
		}
	}


?>