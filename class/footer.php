<?php
$today = date('Y');

echo '<footer>
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-2">
                        <img src="image/img-logo-mhterras.png" width="120"/>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>Mapa do Site</h4>
                        <ul class="navbar-nav">
                            <li><a href="index.php" class="">inicio</a></li>
                            <li><a href="aempresa.php">a empresa</a></li>
                            <li><a href="produtos.php?acao=adubo">produtos</a></li>
                            <li><a href="servicos.php?acao=corte">serviços</a></li>
                            <li><a href="decoracao.php?acao=bancos">decorações</a></li>
                            <li><a href="paisagismo.php?acao=landscape">paisagismo</a></li>
                            <li><a href="orcamento.php">orçamentos</a></li>
                            <li><a href="servicos.php?acao=contrato">contrato de serviços</a></li>
                            <li><a href="contato.php">contato</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-md-3">
                        <h4>entreterimento</h4>
                        <ul class="navbar-nav">
                            <li><a href="" class="" data-toggle="modal" data-target="#ModalEucalipto">história do eucalipto</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-md-2">
                        <h4>contato</h4>
                        <ul class="navbar-nav contato">
                            <li><span>(11) 4154-6164</span></li>
                            <li><span>(11) 4154-7144</span></li>
                            <li><span>(11) 9.6833-5457</span></li>
                            <li><span>(11) 9.6833-5457</span></li>
                            <li></li>
                            <li><span>contato@mhterras.com.br</span></li>
                        </ul>
                    </div>
                    
                    <div class="col-md-2 col-xs-12" id="redes">
                        <h4 class="text-right">Siga-nos</h4>
                        <ul class="mt-3">
                            <li>
                                <a href="">
                                    <img id="redes" src="image/youtube.png" alt="Acesse o Youtube" title="Youtube"/>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img id="redes" src="image/instagram.png" alt="Acesse ao Instagram" title="Instagram"/>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/mhterraspaisagismo" target="_blank">
                                    <img id="redes" src="image/facebook.png" alt="Acesse o Facebook" title="Facebook"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12 pt-3 text-right direitos">
                        
                        &COPY;Mhterras e Pedras 2011 - 2020 | Todos os direitos reservados - Developed by 
                        <a href="http://www.hq-innit.com.br" target="_blank">HQ-InnIT</a>
                    </div>
                </div>
            </div>
        </footer>';

