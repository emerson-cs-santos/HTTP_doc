<?php
    include('cabec.php');
?>

                    <h1 class="text-center"> Principais pontos sobre o HTTP</h1>
                </div> 
            </header>

            <main>
                <section>

                    <div class='row mt-5'>
                        <div class='col-4'>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">O que é?</h5>
                                    <p class="card-text">É a base da troca de informações na web quando falamos de cliente-servidor.</p>
                                    <p class="card-text">HTTP é o protocolo de comunicação padrão utilizado pelo navegadores, ou seja, ele define as regras utilizadas nas trocas de informações.	</p>
                                </div>
                            </div>
                        </div>

                        <div class='col-4'>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Como ela basicamente funciona?</h5>
                                    <p class="card-text">Requisições são realizadas pelo usuário, ao clicar em um link para abrir uma página html por exemplo. </p>
                                    <p class="card-text">O navegador vai receber essa página (utilizando por padrão a porta 80) e interpretar as marcações do HTML exibindo seu conteúdo devidamente formatado para o usuário.</p>
									<p class="card-text">Nessa requisição que é acionada quando por exemplo o usuário digita o nome do site no navegador, esse por sua vez utiliza o DNS para encontrar o endereço lógico (IP) do servidor onde o site se encontra.</p>
                                </div>
                            </div>
                        </div>     
                            
                        <div class='col-4'>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Imagens/HTTP.png" alt="Exemplo de comunicação">
                                <div class="card-body">
                                    <h5 class="card-title">Comunicação básica</h5>
                                    <p class="card-text">No lado de cima temos a interface do cliente, apresentado pelo navegador que dispara as requisições do usuário para o lado de baixo.</p>
                                    <p class="card-text">No lado de baixo tem a parte de processamento dessas Requisições, desde acesso ao banco de dados a regras de negócio tratando os dados recebidos/encontrados.</p>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class='row mt-5'>
                        <div class='col-4'>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Estado/Sessão</h5>
                                    <p class="card-text">HTTP não utiliza o conceito de "Estado", uma conexão continua entre os dois lados da comunicação</p>
									<p class="card-text">Ao invés disso ele utiliza a "Sessão" para saber se precisa enviar toda mensagem novamente ou a partir de algum ponto dela, mas isso requer o uso de cookies.</p>
                                </div>
                            </div>
                        </div>   
                            
                        <div class='col-4'>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Exemplo de requisição</h5>
                                    
									
									<img class="card-img-top" src="Imagens/HTTP_envio.png" alt="Exemplo de envio">
									<p class="card-text">Exemplo de uma requisão</p>
									
									
									<img class="card-img-top" src="Imagens/HTTP_resposta.png" alt="Exemplo de resposta">
									<p class="card-text">Exemplo de uma resposta do servidor. A partir do <a href="Exemplo.html">"!DOCTYPE html"</a> Para baixo, é a página HTML que vai ser exibida.</p>

                                </div>
                            </div>
                        </div> 
						
                        <div class='col-4'>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Detalhes de envio/Resposta</h5>
									<p class="card-text">Acesse a página abaixo para ver os detalhes desse processo:</p>
									<a href="Detalhes.php"> Detalhes</a>
                                </div>
                            </div>
                        </div>  						
                    </div>
                </section>
            </main>


<?php
    include('footer.php');
?>