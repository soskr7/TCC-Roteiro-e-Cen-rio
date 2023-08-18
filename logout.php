<?php
	session_start();
	session_destroy();
	unset($_SESSION["ID"]);
    unset($_SESSION["nome"]);
	header('location: index.php')
?>