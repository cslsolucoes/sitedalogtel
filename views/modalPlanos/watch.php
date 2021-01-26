
<div id="modal_watch" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Watch Brasil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row text-center">
                <div class="col-md-6 align-middle">
                   
                    <h3 class="text-red e">FILMES, SÉRIES, DESENHOS E MUITA DIVERSÃO.</h3>
                    <a class="btn btn-danger mb-4" href="https://watch.tv.br/">
                        <i class="fa fa-play-circle text-white"></i>    
                        Acessar Watch
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <div id="carouselWatch" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselWatch" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselWatch" data-slide-to="1"></li>
                            <li data-target="#carouselWatch" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block slide-filme w-100" src="<?= $uri ?>/node_modules/img/watch/batman.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block slide-filme w-100" src="<?= $uri ?>/node_modules/img/watch/ht.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block slide-filme w-100" src="<?= $uri ?>/node_modules/img/watch/hp.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselWatch" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselWatch" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Plataformas de Acesso -->
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="watch_plataformas_acesso">
                    <h5 class="mb-0">
                        <div class="btn" data-toggle="collapse" data-target="#collapse_watch_plataformas_acesso" aria-expanded="true" aria-controls="collapse_watch_plataformas_acesso">
                            <i class="fa fa-plus-circle text-red"></i>    
                            Plataformas de Acesso
                        </div>
                    </h5>
                    </div>

                    <div id="collapse_watch_plataformas_acesso" class="collapse" aria-labelledby="watch_plataformas_acesso" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row text-center">
                            <h4 class="cardtitle1 col-md-4 mt-5">Pode Acessar do seu SmartPhone, SmartTV, Tablet e Notebook</h4>
                            <img src="<?= $uri ?>/node_modules/img/planos/watch_filmes.png" class="rounded mx-auto d-block img-planos col-md-6">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Primeiro acesso -->
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="watch_primeiro_acesso">
                    <h5 class="mb-0">
                        <div class="btn" data-toggle="collapse" data-target="#collapse_watch_primeiro_acesso" aria-expanded="true" aria-controls="collapse_watch_primeiro_acesso">
                            <i class="fa fa-plus-circle text-red"></i>    
                            Primeiro Acesso
                        </div>
                    </h5>
                    </div>

                    <div id="collapse_watch_primeiro_acesso" class="collapse" aria-labelledby="watch_primeiro_acesso" data-parent="#accordion">
                    <div class="card-body">
                        <div class="text-justify">
                            <p class="mt-5">
                                Assim que você se torna cliente <spam class="text-danger"> LOGTEL </spam>, seu acesso ao watch é liberado automaticamente, recebendo sua senha direto no email cadastrado.
                            </p>
                            <p class="mt-5">
                                Caso não tenha recebido sua senha pelo e-mail cadastrado, acesse o Esqueci minha senha 
                                <a class="btn-link text-danger" href="https://watch.tv.br/esqueci-minha-senha">
                                "https://watch.tv.br/esqueci-minha-senha"</a>,
                                coloque o email cadastrado para recuperar a senha
                            </p>
                            <p class="mt-5">
                                Ou ligue para nosso Suporte
            <spam class="ligue ml-3">
              <!-- <i class="fa fa-phone " aria-hidden="true"></i> -->
              61 4063-9001<br>
            </spam>
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="m-5">
                <h6 class="cardtitle1 mb-3 text-red"> A Watch é uma Plataforma de Striming onde o entretenimento te acompanha onde você estiver.</h6>
                <spam>
                    <i class="fa fa-check fa-lg text-red" aria-hidden="true"></i> 
                     Assista no celular, computador, na TV, chromecast e em diversos aparelhos e dispositivos. 
                </spam><br>
                <spam>
                    <i class="fa fa-check fa-lg text-red" aria-hidden="true"></i> 
                    Tenha acesso a conteúdos relevantes e diversificados dos maiores estúdios do mundo, 
                    com a opção de alugar os lançamentos do cinema no conforto da sua casa.
                </spam><br>
                <spam>
                    <i class="fa fa-check fa-lg text-red" aria-hidden="true"></i> 
                     Dirversão Infantil - O Noggin é o único serviço de assinatura em que a aprendizagem é dirigida pelos queridos personagens 
                     do Nick Jr. que seus filhos conhecem e amam! 
                </spam><br>
                <spam>
                    <i class="fa fa-check fa-lg text-red" aria-hidden="true"></i> 
                    Apresentado por especialistas com mais de 30 anos de experiência em educação divertida para as crianças em idade pré-escolar.
                </spam><br>
            </div>
        </div>
        <div class="modal-footer mt-5 col-md-3  ml-auto">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Sair</button>
        </div>
        </div>
    </div>
</div>
