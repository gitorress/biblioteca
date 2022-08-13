<?php

	// Se o usuário não está logado, manda para página de login.
	if (!isset($_COOKIE['user'])){
		
		
		$_SESSION['msgerro'] = "Sessão expirada!";
		header("Location: login.php");
		
	};

?>