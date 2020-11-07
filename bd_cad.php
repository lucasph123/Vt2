<?php

include "head.php";
include "bd_conn.php";

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$telefone = $_POST['tel'];


$query = "SELECT * from usuario where email = '$email' ;";

$dados = mysqli_query($conn,$query);
$total = mysqli_num_rows($dados);

    if($total > 0 )
    {
        mysqli_close($conn); 
        echo "<script type='text/javascript'>";
        echo "alert('Ocorreu um erro no seu cadastro');";
        echo "window.location='menu.php';";
        echo "</script>";

        
    }else{

        $query = "INSERT INTO usuario (nome,email,senha,telefone)
        VALUES ('$nome','$email','$senha','$telefone');";

        $dados = mysqli_query($conn,$query);

        mysqli_close($conn); 

        echo "<script type='text/javascript'>";
        echo "alert('Você Foi Cadastrado com Sucesso');";
        echo "window.location='menu.php';";
        echo "</script>";
        
    }

   



?>