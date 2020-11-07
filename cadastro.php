<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>




   <!--Inicio Modal -->
<div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="cadastro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadastro">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--Formulário Cadastro -->
      <form action="bd_cad.php" method="post">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
      <div id='resposta'></div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" name="senha" class="form-control" id="isenha" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputTel">Telefone</label>
    <input type="text" class="form-control" name="tel" id="tel"  maxlength="9"     onKeyPress = "tecla()" placeholder="00000-0000">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
</div>
  </div>
    </div>

   <!--Fim modal -->

  


<script>
//script para nao colocar letra no telefone
  function tecla(){
    evt = window.event;
    var tecla = evt.keyCode;

    if(tecla > 47 && tecla < 58){ 
      
    }
    else{
        alert('Precione apenas teclas numéricas');
      evt.preventDefault();
    }
  }

</script>
     <!--   Modal Login      -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


     <!--   Form Login      -->

      <form action="bd_login.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" name="senha" class="form-control" id="isenha" placeholder="Senha">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Logar</button>
</form>
</div>
</div>
  </div>
    </div>


     <!--    Script verificar se o Email ja Existe no BD     -->

    <script language="javascript">
    var email = $("#email"); 
        email.blur(function() { 
            $.ajax({ 
                url: 'verificaEmail.php', 
                type: 'POST', 
                data:{"email" : email.val()}, 
                success: function(data) { 
                console.log(data); 
                data = $.parseJSON(data); 
                $("#resposta").text(data.email);
            } 
        }); 
    }); 
</script>
