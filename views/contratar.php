<div id="modal_contratar" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contratar um Plano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tab-content mt-1">
          <div id="grid_view" class="tab-pane fade show active" role="tabpanel">
            <div class="objects-grid gutters-sm mt-5">
              <div class="form-row col-md-12">
                <div class="object-vertical col-xl-6 col-md-12 mb-1">
                  <ul class="social-network social-circle container">
                    <li><a href="http://www.logtelplay.com.br/" class="logtelplay" title="Logtel Play"><i class="fa fa-play-circle"></i></a></li>
                    <li><a href="https://www.facebook.com/logtel.internet/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/logtel_internet" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/logtel_internet/" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                  </ul><br>
                  <h4 class="text-primary mt-2">FALE DIRETO COM UM CONSULTOR ONLINE PELA NOSSA CENTRAL DE VENDAS</h4>
                  <br>
                </div>
                <div class="object-vertical col-xl-6 col-md-12 mb-1">
                  <div class="row text-left mt-3">
                    <div class="col-2">
                      <i class="fa fa-whatsapp infobox-icon green-gradient"></i>
                    </div>
                    <div class="col-9 ml-4">
                      <h5>Central de Vendas</h5>
                      <a class="text-primary" href="https://api.whatsapp.com/send?phone=5561981956666&text=Ol%C3%A1%2C%20gostaria%20de%20Contratar%20um%20Combo%20da%20Logtel.%20Poderia%20me%20informar%20como%20fa%C3%A7o%3F">61 98195-6666</a><br>
                    </div>
                  </div>
                  <div class="row text-left mt-3">
                    <div class="col-2">
                      <i class="fa fa-envelope infobox-icon blue-gradient"></i>
                    </div>
                    <div class="col-9 ml-4">
                      <h5>E-mail</h5>
                      <a class="text-primary" href="email: vendas@logteltelecom.com.br"> vendas@logteltelecom.com.br</a><br>
                    </div>
                  </div>
                  <br><br>
                </div>
                <div class="card object-vertical col-xl-12 col-md-12 box-shadow1 mt-1" style="background-color:#cacaca21">
                  <div class="card-body">
                    <form class="mt-3" method="post" action="mail_vendas.php" style="font-weight: 600;">
                    <label class="">Escolha seu plano</label>
                      <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="25" value="25MEGA" name="plano-combo" class="custom-control-input">
                          <label class="custom-control-label" for="25">25Mb</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="100" value="100MEGA" name="plano-combo" class="custom-control-input">
                          <label class="custom-control-label" for="100">100Mb</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="240" value="240MEGA" name="plano-combo" class="custom-control-input">
                          <label class="custom-control-label" for="240">240Mb</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="400" value="400MEGA" name="plano-combo" class="custom-control-input">
                          <label class="custom-control-label" for="400">400MB</label>
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="form-group col-md-6">
                          <label for="nome">Nome</label>
                          <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="telefone">Telefone *</label>
                          <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="number" class="form-control" id="cep" maxlength="8" value="" name="cep">
                      </div>
                      <div class="form-row mt-3">
                        <div class="form-group col-md-5">
                          <label for="bairro">Bairro</label>
                          <input type="text" class="form-control form-control-inline" id="bairro" value="" name="bairro">
                        </div>
                        <div class="form-group col-md-5">
                          <label for="cidade">Cidade</label>
                          <input type="text" class="form-control form-control-inline" id="cidade" value="" name="cidade">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="numero">UF</label>
                          <input type="text" class="form-control form-control-inline" id="uf" value="" name="uf">
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="form-group col-md-9">
                          <label for="instalacao">Logradouro</label>
                          <input type="text" class="form-control form-control-inline" id="rua" value="" name="logradouro" >
                        </div>
                        <div class="form-group col-md-3">
                          <label for="numero">Número</label>
                          <input type="text" class="form-control form-control-inline" id="numero" value="" name="numero">
                        </div>
                      </div>

                      <button class="btn btn-secondary col-md-3 mb-3" type="submit">Enviar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>