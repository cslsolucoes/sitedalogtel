
<?php include("../header.php")?>
<div class="pb-5" style="background-color:#f5f5f5;">

  <div class="thumb d-none d-xl-block">
    <img src="<?= $uri ?>/node_modules/img/bg.jpg"  class="portrait"  alt="Image" />
  </div>

  <div class="container">
    <div class="mt-5 mb-5">
      <div class="">
      <div class="tab-content">
        <div id="grid_view" class="tab-pane fade show active" role="tabpanel">
          <div class="objects-grid gutters-sm mt-5 offset-md-1">
            <div class="form-row col-md-12" >
              <div class="object-vertical col-xl-6 col-md-12 mb-4 mt-3" >
                <spam class="line-efect"  style="margin-left: 5px;"></spam>

                <h3 class="text-primary mt-1 text-justify mr-4">Aqui você pode ficar a vontade enviar suas sugestões</h3>
                <h6 class="text-primary text-justify mr-4 mt-3 mb-3">Preencha o formulário, nenhuma das informações é obrigatória, exceto a mensagem.</h6>
                <spam class="line-efect mb-5"  style="margin-left: 5px;"></spam>
                
                <div class="row text-left mt-5">
                    <div class="col-2">
                        <i class="fa fa-envelope infobox-icon blue-gradient"></i>
                    </div>
                    <div class="col-9">
                        <h5>E-mail</h5>
                        <a class="text-primary" href="email:contato@logtel.net.br">contato@logtel.net.br</a><br>
                    </div>
                </div>
                <div class="row text-left mt-5">
                    <div class="col-2">
                        <i class="fa fa-volume-control-phone fa-rotate infobox-icon cyan-gradient"></i>
                    </div>
                    <div class="col-9">
                        <h5>Telefone</h5>
                        <a class="text-primary" href="tel:40639001">61 4063-9001</a><br>
                    </div>
                </div>
                <div class="row text-left mt-5">
                  <div class="col-2">
                      <i class="fa fa-whatsapp infobox-icon green-gradient"></i>
                  </div>
                  <div class="col-9">
                      <h5>WhatsApp de Vendas</h5>
                        <a class="text-primary" href="https://api.whatsapp.com/send?phone=5561981956666&text=Ol%C3%A1%2C%20gostaria%20de%20Contratar%20um%20Combo%20da%20Logtel.%20Poderia%20me%20informar%20como%20fa%C3%A7o%3F">61 98195-6666</a><br>
                  </div>
                </div>
                <div class="row text-left mt-5">
                  <div class="col-2">
                      <i class="fa fa-map-marker infobox-icon yellow-gradient"></i>
                  </div>
                  <div class="col-9">
                      <h5>Endereço</h5>
                      <a class="text-primary" href="https://www.google.com/maps/place/Logtel+Internet/@-15.9264982,-48.0464351,17z/data=!4m5!3m4!1s0x935a2cfaeef65459:0xd0c91298660d786d!8m2!3d-15.9264982!4d-48.0442464">QC 05 Conjunto 09 Lote 02 - Riacho Fundo II, Brasília - DF, 71882-209</a><br>
                  </div>
                </div>
              </div>
              <div class="card object-vertical col-xl-6 col-md-12 mb-4 box-shadow1" >
              <div class="card-body">
                <form class="" method="post" action="../mail_contato.php">
                  <div class="form-group mt-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <input type="hidden" class="form-control" id="cpf" value="nulo" name="cpf">
                  </div>
                  <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                  </div>
<!--                   <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                  </div> -->
                  <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="6" required></textarea>
                  </div>
                  <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include("../views/barraConversao.php")?>
<?php include("suporte.php")?>


<?php include("../footer.php")?>
