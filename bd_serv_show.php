<?php

include "head.php";
include "bd_conn.php";



$query ="SELECT * from servico WHERE cliente = 1;";

$dados = mysqli_query($conn,$query);


while ($row = mysqli_fetch_assoc($dados)) {

   echo '<div class="card" style="width: 18rem;">';
   echo  '<div class="card-header">';
   echo    '<button type="button" class="btn" >Serviço</button>';
   echo  '</div>';
    echo '<ul class="list-group list-group-flush">';


if($row["cabelo"] == 1)
{
    
    echo '<li class="list-group-item">Cabelo</li>';
   

}
if($row["barba"] == 1)
{
    
    echo '<li class="list-group-item">Barba</li>';
   
}
if($row["hidra"] == 1)
{
   
    echo '<li class="list-group-item">Hidratação</li>';
  
}
    
    echo '<li class="list-group-item">';
    echo $row["valor"];
    echo '</li>';
   echo ' </ul> </div>';

   echo '<br>';
   
    
       

}

   

  

      mysqli_close($conn); 

?>