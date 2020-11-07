<?php

include "head.php";
include "bd_conn.php";


$email = $_POST['email'];

$senha = $_POST['senha'];



$query = "SELECT * from usuario where email = '$email' ;";

$dados = mysqli_query($conn,$query);
$total = mysqli_num_rows($dados);

    if($total < 0 )
    {
        mysqli_close($conn); 
        echo "<script type='text/javascript'>";
        echo "alert('Usuário Invalído');";
        echo "window.location='menu.php';";
        echo "</script>";

    
    }else{

        mysqli_close($conn); 
        echo "<script type='text/javascript'>";
        echo "alert('Você Foi Logado com Sucesso');";
        echo "window.location='log_index.php';";
        echo "</script>";
        
    }

?>