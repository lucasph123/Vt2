<div class="modal fade" id="servico" tabindex="-1" style="imagens/fundo.jpg" role="dialog" aria-labelledby="servico" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="servico">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" value="1" name = "check1" style="transform: scale(1.5)" type="checkbox" onclick="myFunction()" id="Check1">
      <label class="form-check-label" for="gridCheck">
        Cabelo 20
      </label><br><br>
      <input class="form-check-input" value="1" name = "check2" style="transform: scale(1.5)" type="checkbox" onclick="myFunction()" id="Check2">
      <label class="form-check-label" for="gridCheck">
        Barba 10
      </label><br><br>
      <input class="form-check-input" value="1" name = "check3" style="transform: scale(1.5)" type="checkbox" onclick="myFunction()" id="Check3">
      <label class="form-check-label" for="gridCheck">
        Cabelo + Barba 25
      </label><br><br>
      <input class="form-check-input" value="1" name = "check4" style="transform: scale(1.5)" type="checkbox" onclick="myFunction()" id="Check4">
      <label class="form-check-label" for="gridCheck">
        Hidratação 20
      </label><br><br>
      <input class="form-check-input" value="1" style="transform: scale(1.5)" type="checkbox" onclick="myFunction()" id="Check5">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label><br><br>
      <input class="form-check-input" value="1" style="transform: scale(1.5)" type="checkbox" onclick="myFunction()" id="Check6">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label><br>
      <input type="hidden" id="valor" name="valor" >
    </div>
  </div>
  <h2 id="text2">Valor total = <a id="text"> <a id="text1">R$ </h2>

  <button type="button" data-toggle="modal"  data-dismiss="modal" data-target="#serv2"  class="btn btn-primary modalAlerta">Cadastrar</button>
</form>
</div>
</div>
  </div>
    </div>



<script>
    $('.modalAlerta').on('click', function(){
    var check1 = $("#Check1").val();
    var check2 = $("#Check2").val();
    var check3 = $("#Check3").val();
    var check4 = $("#Check4").val();
    var check5 = $("#Check5").val();
    var valor = $("#valor").val();


    $('#check1-hidden').val(check1);
    $('#check2-hidden').val(check2);
    $('#check3-hidden').val(check3);
    $('#check4-hidden').val(check4);
    $('#check5-hidden').val(check5);
    $('#valor-hidden').val(valor);
});
</script>









<script>
    function myFunction() {
  
  var checkBox1 = document.getElementById("Check1");
  var checkBox2 = document.getElementById("Check2");
  var checkBox3 = document.getElementById("Check3");
  var checkBox4 = document.getElementById("Check4");
  var checkBox5 = document.getElementById("Check5");
  var checkBox6 = document.getElementById("Check6");
  // Get the output text
  var text = document.getElementById("text");
  var preco = 0;
  // If the checkbox is checked, display the output text
  if (checkBox1.checked == true){

    document.getElementById("text").innerHTML = preco += 20;
    

  } if(checkBox2.checked == true) {
  
    document.getElementById("text").innerHTML = preco += 10;

  }if(checkBox3.checked == true) {
  
  document.getElementById("text").innerHTML = preco += 25;

}if(checkBox4.checked == true) {
  
  document.getElementById("text").innerHTML = preco += 20;

}if(checkBox5.checked == true) {
  
  document.getElementById("text").innerHTML = preco += 15;

}if(checkBox6.checked == true) {
  
  document.getElementById("text").innerHTML = preco += 15;

} else if(checkBox1.checked  != true && checkBox2.checked  != true && checkBox3.checked  != true && checkBox4.checked  != true && checkBox5.checked  != true && checkBox6.checked != true )
{
  document.getElementById("text").innerHTML = preco = 0;
}

document.getElementById("valor").value = preco;



}
</script>
<!-- Form Servico2 -->
<div class="modal fade" id="serv2" tabindex="-1" role="dialog" aria-labelledby="serv2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serv2">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form action="bd_serv.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
     
     
    </div>
    <div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Data</label>
  <div class="col-9">
    <input class="form-control" type="date" value="<?php date(); ?>" id="example-date-input">
   
  </div>
</div>

    <div class="form-group row">
  <label for="example-time-input" class="col-4 col-form-label">Horário</label>
  <div class="col-8">
    <input class="form-control" type="time" value="<?php time(); ?>" id="example-time-input">
  </div>
</div>

<select class="form-control">
<option value="" disabled selected>Escolha o Profissional</option>>
  <option>Jorge</option>
  <option>Luiz</option>
  <option>Gustavo</option>
</select>
    

    <input type="hidden" class="form-control" id="check1-hidden" name="check1-hidden">  
  <input type="hidden" class="form-control" id="check2-hidden" name="check2-hidden">
  <input type="hidden" class="form-control" id="check3-hidden" name="check3-hidden">  
  <input type="hidden" class="form-control" id="check4-hidden" name="check4-hidden">
  <input type="hidden" class="form-control" id="check5-hidden" name="check5-hidden">  
  <input type="hidden" class="form-control" id="valor-hidden" name="valor-hidden">  


  </div>
  <br><button type="submit" class="btn btn-primary">Logar</button></br>
</form>
</div>
</div>
  </div>
    </div>

