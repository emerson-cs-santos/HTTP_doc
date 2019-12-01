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
                                <p class="card-title font-weight-bold">A pergunta correta é porque não usar??</p>
                                <p class='card-text mb-1'>O "S" no final seginifica "secure" Seguro em português. A porta utilizada é a 443.</p>

                                <p class='card-text mb-0'>Quando utilizamos apenas o HTTP, qualquer pessoa pode ver e entender a requisição:</p>
                                <img class="card-img-top mb-2" src="Imagens/HTTP_nao_seguro.png" alt="Exemplo de comunicação">

                                <p class='card-text mb-0'>Quando utilizamos o HTTPS, isso é o que as pessoas poderão ver:</p>
                                <p class='card-text'> t8Fw6T8UV81pQfyhDkhebbz7+oiwldr1j2gHBB3L3RFTRsQCpaSnSBZ78Vme+DpDVJPvZdZUZHpzbbcqmSW1+3xXGsERHg9YDmpYk0VVDiRvw1H5miNieJeJ/FNUjgH0BmVRWII6+T4MnDwmCMZUI/orxP3HGwYCSIvyzS3MpmmSe4iaWKCOHQ== </p>

                                <p class='card-text'>No envio/resposta do HTTP não podemos impedir 100% que as requisições sejam interceptadas por outras pessoas, mas podemos fazer com que as informações apenas sejam legíveis para quem tiver autorização.</p>
                                <p class='card-text'>O que o HTTPS está fazendo é criptografando as informações e apenas quem está enviando/recebendo tem as chaves para remover essa proteção e ler a mensagem. Claro que nem utilizando esse método estamos complemente seguros, nenhum esquema de segurança é a prova de falhas.</p>

                                <p class="card-title font-weight-bold mb-0">Certificado SSL</p> 
                                <p class="card-title">Algumas empresas também utilizam um certificado SSL para comprovar a identidade do seu site, através de uma certificadora que tem reconhecimento público e ela garante que seu site é seguro emitindo esse certificado.</p>                               
                            </div>
                        </div>

 						
                    </div>
                    
                </section>
            </main>

<?php
    include('footer.php');
?>