<?php

    include_once("conexao.php");

    $email = $_POST['login'];
    $senha = md5($_POST['password']);

    $result = mysqli_query($conn,"SELECT senha FROM form
                                     WHERE email = '$email'");
            
    $resultado = mysqli_fetch_row($result);
 
    if($resultado != NULL){
        if($senha == $resultado[0]){
            echo "Acesso";
            setcookie("user", $email, time()+3600);

            header('location: table.php');
        }else{
            echo "Senha errada";
            header('location: login.php');
        }
    }else{
        header('location: login.php');
    };

    //mysqli_close($conn);

   // header('location: form.php');
    
?>