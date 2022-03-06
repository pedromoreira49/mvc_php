<h2>My Home</h2>
<p>Clientes:</p>
<ul>
<?php
	$clientes = \Models\HomeModel::getClients();
	foreach ($clientes as $value) {
?>
	<li><?php echo $value['nome']; ?></li>
<?php

	}

?>

</ul>