<?php

	session_start();
	include('conexao.php');

	//Variaveis que receberam o post
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = MD5($_POST['senha']);

	$query_select = "SELECT nome FROM usuario WHERE email = '$email' AND senha = '$senha'";
	$select = mysqli_query($conexao, $query_select);


	$row = mysqli_num_rows($select);

	if($row == 1) {
		echo"<script language='javascript' type='text/javascript'>
		alert('Já existe um cadastro com esses dados');window.location.href='index.php';</script>";
	} else {

		$query_cadastra = "INSERT INTO usuario (nome,email,senha) VALUES ('$nome','$email','$senha')";
		$insert = mysqli_query($conexao, $query_cadastra);

		echo"<script language='javascript' type='text/javascript'>
    	alert('Cadastro feito com sucesso!');window.location.href='index.php';</script>";
	}

?>