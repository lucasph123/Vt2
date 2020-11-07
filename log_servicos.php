
<?php
include "nav_log.php";
include "servico.php";
?>

</aside>
        <main class="col offset">
            <div class="row bg-light rounded-top w-75">
                <div class="col-2 py-3 ">
                    <h2> Serviços </h2>
                </div>
            </div>
            <div class="row bg-white rounded-bottom w-75 p-3">
                <div class="col-12 py-4  >
 


        
    <?php
    include "bd_serv_show.php";
    ?>
 
     
    




                <button type="button" data-toggle="modal" data-target="#servico" class="btn btn-primary">Adicionar Serviço</a>

                </div>
            </div>
        </main>
    </div>
</div>
