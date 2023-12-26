<?php
	
	session_start();

	//Estamos trabalhando na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);
	
	//implode('#', $_POST);

	$texto = $_SESSION['id']. '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; 

	//PHP_EOL = PHP_END_OF_LINE - add quebra de linhas

	//fopen
	//Primeiro parâmetro: nome do arquivo - Segundo parâmetro: Indicar ação(abrir, ler, posicionar cursor) - Abre arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.hd','a' ); //Verificar modos fopen na documentação
	
	//Primeiro parâmetro: referencia do arquivo que abrimos - Segundo parâmetro: Oque eu quero escrever dentro do arquivo - Escreve arquivo
	fwrite($arquivo, $texto);

	//Fecha o arquivo passando a referencia do arquivo que foi aberto
	fclose($arquivo);

	header('Location: abrir_chamado.php');

?>