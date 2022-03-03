<?php

	namespace views;

	class View{
		public function render($body, $header = null, $footer){
			include('Views/templates/'.$body);
		}
	}

?>