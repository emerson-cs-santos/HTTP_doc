<?php
    include('cabec.php');
?>

                    <h1 class="text-center">Por dentro da requisição HTTP</h1>
                </div> 
            </header>

            <main>
                <section class='row'>
                    <div class='col-12'>
                        <header>
                            <h2 class='mt-5'>Detalhes do envio e retorno</h2>
                        </header>
						
                        <div class="card mb-5">
                            <img class="card-img-top" src="Imagens/HTTP_ENVIO_DETALHES.png" alt="Detalhes do Envio">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">Detalhes do envio</p>
								<ul>
									<li>
										<p class='card-text font-weight-bold mb-0'>Método utilizado</p>
										<p class="card-text">Geralmente utilizado GET ou POST, mas existem outros.</p>
									</li> 
									<li>
										<p class='card-text font-weight-bold mb-0'>Caminho</p>
										<p class="card-text">URL interna do servidor, não é mesma que se utiliza para acessar o site.</p>
									</li>
									<li>
										<p class='card-text font-weight-bold mb-0'>Versão</p>
										<p class="card-text">Versão do protolo HTTP, a 1.1 ou anterior são legiveis já a 2.0 utiliza estrutura binária.</p>
									</li>		

									<li>
										<p class='card-text font-weight-bold mb-0'>Cabeçalho</p>
										<p class="card-text">Pode conter informações opcionais como neste caso o idioma, mas o método POST por exemplo passa seu conteudo pelo cabeçalho.</p>
									</li>
								</ul>
                            </div>
                        </div>

                        <div class="card mb-5">
                            <img class="card-img-top" src="Imagens/HTTP_RESPOSTA_DETALHES.png" alt="Detalhes da Resposta">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">Detalhes da resposta</p>
								<ul>
									<li>
										<p class='card-text font-weight-bold mb-0'>Versão</p>
										<p class="card-text">A resposta utiliza a mesma versão do envio.</p>
									</li> 
									<li>
										<p class='card-text font-weight-bold mb-0'>Status</p>
										<p class="card-text">É retornado um código informando se deu tudo certo e uma breve mensagem.</p>
									</li>
									<li>
										<p class='card-text font-weight-bold mb-0'>Cabeçalho</p>
										<p class="card-text">Opcionalmente é retornado aqui os dados solicitados, mas as veses apenas o código de status como ok já pode ser o suficiente.</p>
									</li>
								</ul>
                            </div>
                        </div> 						
                    </div>
                    
                </section>
            </main>

<?php
    include('footer.php');
?>