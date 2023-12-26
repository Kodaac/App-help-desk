<?php
	
	session_start();

	session_destroy();
	header('Location: index.php');

	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';


	//remover índices do array de sessão
	//unset()

	unset($_SESSION['x']); //Tem inteligencia para remover o índice apenas se existir

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a variável de sessão
	//session_destroy()

	session_destroy(); //Sessão será destruida, porém apenas na proxima requisição é que não teremos mais acesso a variaveis de sessão

	//forçar um redirecionamento

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	*/


?>