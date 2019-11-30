<?php
    include('cabec.php');
?>

                    <h1 class="text-center">HTTP vs HTTPS</h1>
                </div> 
            </header>

            <main>
                <section class='row'>
                    <div class='col-12'>
                        <header>
                            <h2 class='mt-5'>Porque usar HTTPS?</h2>
                        </header>
						
                        <div class="card mb-5">
                            <img class="card-img-top" src="Imagens/HTTPS.png" alt="Detalhes do Envio">
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

 						
                    </div>
                    
                </section>
            </main>

<?php
    include('footer.php');
?>