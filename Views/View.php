<?php

	namespace views;

	class View{

		const DEFAULT_HEADER = 'header.php';
		const DEFAULT_FOOTER = 'footer.php';

		public function render($body, $header = null, $footer){
			if($header == null){
				include('Views/templates/'.self::DEFAULT_HEADER);
			}
			include('Views/templates/'.$body);
			if($body == null){
				include('Views/templates/'.self::DEFAULT_FOOTER);
			}
		}
	}

?>