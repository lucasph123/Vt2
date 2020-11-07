<?php

include "head.php";
include "bd_conn.php";

$check1 = $_POST['check1-hidden'];

$check2 = $_POST['check2-hidden'];

$check3 = $_POST['check3-hidden'];

$check4 = $_POST['check4-hidden'];

$valor = $_POST['valor-hidden'];




echo $valor; 
echo $check1; 
echo $check2; 
echo $check3 ;
echo $check4;


/*
$query = "INSERT INTO servico (cabelo,barba,hidra,valor,cliente)
VALUES ('$check1','$check2','$check','$valor',1);";

$dados = mysqli_query($conn,$query);
      mysqli_close($conn); 


        echo "<script type='text/javascript'>";
        echo "alert('Você Foi Cadastrado com Sucesso');";
        echo "window.location='log_servicos.php';";
        echo "</script>";
*/


?>