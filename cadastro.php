<?php

    include_once("conexao.php");

    $nome = $_POST['nm_cliente'];
    $dt_nascimento =$_POST['dt_nascimento'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $telefone = $_POST['telefone'];

    $result = mysqli_query($conn,"INSERT INTO `cliente`(`nm_cliente`, `dt_nascimento`, `rua`, `bairro`, `numero`, `telefone`)
     VALUES ('$nome','$dt_nascimento','$rua','$bairro','$numero','$telefone')");


   mysqli_close($conn);

    header('location: cadastrousuario.php');
    
?>