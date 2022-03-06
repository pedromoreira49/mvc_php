<?php
	namespace models;

	class HomeModel extends Model{
		public static function getClients(){
			$clientes = \MySql::connect()->prepare("SELECT * FROM clientes;");
			$clientes->execute();
			return $clientes->fetchAll();
		}
	}


?>