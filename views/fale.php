
<div id="modal_contratar" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contratar um Plano</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-body-blue">
            <h6 class="cardtitle4 p-3 text-center">Mande uuuma mensagem e entraremos em contato em até 24 horas.</h6>
                <div class="card col-md-10 offset-md-1">
                
                <form class="mt-3" method="post" action="mail.php">
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="50" name="plano-fale-conosco" class="custom-control-input">
                        <label class="custom-control-label" for="50">50Mb</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="50" name="plano-fale-conosco" class="custom-control-input">
                        <label class="custom-control-label" for="50">50Mb</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="120" name="plano-fale-conosco" class="custom-control-input">
                        <label class="custom-control-label" for="120">120Mb</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="150" name="plano-fale-conosco" class="custom-control-input">
                        <label class="custom-control-label" for="150">150MB</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="200" name="plano-fale-conosco" class="custom-control-input">
                        <label class="custom-control-label" for="200">200MB</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="240" name="plano-fale-conosco" class="custom-control-input">
                        <label class="custom-control-label" for="240">240MB</label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="instalacao">Endereço de Instalação</label>
                        <input type="text" class="form-control" id="instalacao" name="instalacao" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="6"></textarea>
                    </div>
                    
                    <button class="btn btn-secondary mb-3" type="submit">Enviar</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>







