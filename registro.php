<?php 

include 'db.php';
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT * FROM USUARIO WHERE USUARIO = '$usuario'";

$consulta = mysqli_query($con, $query);


$query2 = "SELECT * FROM USUARIO WHERE EMAIL = '$email'";

$consulta2 = mysqli_query($con, $query2);

if(mysqli_num_rows($consulta) == 1){

    header('location:cadastro.php?erroUsuario');

}elseif(mysqli_num_rows($consulta2) == 1) {


    header('location:cadastro.php?erroEmail');

}else {


$query = "INSERT INTO USUARIO (USUARIO, EMAIL, SENHA) VALUES ('$usuario', '$email', '$senha') ";


mysqli_query($con, $query);

header('location:sucesso.php');

}
 ?>