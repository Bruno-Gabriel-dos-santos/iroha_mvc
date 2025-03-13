<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>infra rede Iroha</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/std.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column" >
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{ route('home') }}">Rede Iroha</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                           
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('buscador') }}">Buscador_Rede_Iroha</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('area.transacoes') }}">Area_de_transações</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            

            <br><br><br>
            
            <div class="container px-5 bg-dark">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Recursos Infra rede Iroha.</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Texto sobre infra rede iroha.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-outline-light btn-lg px-4 me-sm-3" href="#1">Processamento</a>
                                <a class="btn btn-outline-light btn-lg px-4 me-sm-3" href="#2">Armazenagem de Dados</a>
                                <a class="btn btn-outline-light btn-lg px-4 me-sm-3" href="#3">Hospegem de sites e serviços</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('img/pcb.jpg') }}" alt="..." /></div>
                </div>
            </div>
            <br><br>
            <div class="mt-5 w-75 mx-auto" id="1">
                <h1 class="text-center">Processamento.</h1><hr>
                <p>A rede Iroha disponibiliza a venda de recursos computacionais descentralizados através dos nós de sua rede, o valor e especificação das capacidades de processamento 
                    desejados são requisitados pelas ofertas de serviço dos nós e podem ser comprados por qualquer usuário da rede.<br> Um dos Principais pilares da internet e de qualquer 
                    sistema é o processamento, que basicamente se caracteriza pela quantidade de processador e memoria disponíveis em uma máquina ou na quantidade e capacidade 
                    de clusters que são várias máquinas unidas com o proposito de processar um dado/sistema em conjunto. Para tanto a rede Iroha fornece um livro de ofertas de seus 
                    nós com a dada capacidade computacional e preço/dia com cotação na moeda Iroha Money, onde qualquer um pode negociar comprando e vendendo esse direito ao uso do servidor 
                    contratado via um contrato/worker, que basicamente é um contrato de trabalho entre o nó e o usuário para o fornecimento do processamento/memoria contratado.<br>
                    O processamento então é alçado na quantidade de núcleos do nodo, em que é aferido um benckmark ao qual qualifica a sua capacidade de trabalho com um dado score, pela 
                     quantidade e velocidade da memória ram, e pelo uso e velocidade da rede de conexão entre o servidor(nó) e a internet. Todos esses dados são disponibilizados no livro de 
                     ofertas para a compra/venda do processamento.<br>
                    Assim como na rede Iroha os participantes não devem utilizar os serviços oferecidos para práticas ilícitas, cabendo no caso de confirmação de tais atos ilegais o possível cancelamento 
                     do contrato de uso.
                    
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;">Comprar recursos de processamento</a>
                
            </div>
            <br><br>
            <div class="mt-5 w-75 mx-auto" id="2">
                <h1 class="text-center">Armazenagem de Dados.</h1><hr>
                <p>A rede Iroha disponibiliza a venda de recursos computacionais descentralizados através dos nós de sua rede, o valor e especificação das capacidades de armazenamento 
                    desejados são requisitados pelas ofertas de serviço dos nós e podem ser comprados por qualquer usuário da rede.<br>O armazenamento de dados é hoje uma necessidade de todo e qualquer 
                    sistema sendo ele banco de dados, armazenamento de arquivos como fotos/vídeos, backups de arquivos entre outros, todos eles necessitam de um sistema de armazenagem com redundância e boa 
                     conexão a internet. A rede Iroha oferece esses serviços de forma descentralizada através de seus nós, onde através de um livro de ofertas você poderá comprar armazenamento com redundância e 
                    escalonar a distribuição dos dados pelos nós da rede ou manter tudo em apenas um nó caso deseje. Na Armazenagem de seus dados você poderá disponibilizá-los diretamente pela rede Iroha, escolher 
                    criptografar os dados diretamente no nó ou enviar os dados já criptografados, poderá distribuir os dados entre vários nós ou comprar um contrato de armazenagem de grande escala em apenas um nó que esteja mais 
                     próximo de seu processamento contratado ou privado.<br> Além disso você pode comprar um contrato/worker e revendê-lo caso não tenha mais interesse ou necessidade de usar aquele serviço no momento corrente, a compra/venda 
                    dos contratos/worker para o armazenamento são feitas com a moeda Iroha Money, onde através de um livro de ofertas são exibidos os nós e seus contratos disponíveis assim como os dados sobre a capacidade computacional do nó 
                   como tamanho total disponível atualizado, velocidade de escrita/leitura ( normalmente o gargalo é a rede de conexão a internet e por isso não leve apenas esse dado como velocidade absoluta, a sua velocidade e a velocidade de 
                    dowload & upload são muito importates ), ping em relação a outros locais/servidores, velocidade da rede do servidor em mb/s(compartilhada ou dedicada) e tipo de disco em uso. 
                    Assim como na rede Iroha os participantes não devem utilizar os serviços oferecidos para praticas ilícitas, cabendo no caso de confirmação de tais atos ilegais o possível cancelamento 
                    do contrato de uso.
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;">Comprar recursos dearmazenamento</a>
                
            </div>
            <br><br>
            <div class="mt-5 w-75 mx-auto" id="3">
                <h1 class="text-center">Hospegem de sites e serviços.</h1><hr>
                <p>A hospedagem é uma mesclagem de processamento e armazenamento de dados visíveis para os usuários da rede Iroha através da indexação de sites e serviços no buscador da rede Iroha, onde o cliente além de ter na rede a 
                     capacidade de armazenamento e processamento compra na rede um nome/link que sera usado no motor de busca da rede.<br> Com isso é possível obter domínios de sites, links de serviços para o uso de APIS ou sistemas 
                    exclusivos para serem acessados pelos usuários da rede Iroha, tais hospedagens podem ter sistemas de redundância em diferentes nodos com diferentes localidades, utilizar sistemas de criptografia disponibilizados pela rede, 
                    usar os próprios serviços oferecidos pela rede Iroha para gerar novos serviços descentralizados. <br> Alem disso ao ter um site/serviço hospedado na Iroha você tera mais facilidade em comprar e vender utilizando a própria 
                    moeda da rede chamada Iroha Money facilitando as transações e reduzindo os custos com sistemas financeiros.<br> A hospedagem na rede Iroha é muito vantajosa e é comprada uma única vez, aumentando a segurança e
                    previsibilidade dos serviços oferecidos na rede.<br>A hospedagem na rede Iroha pode ser comprada através de um livro de ofertas onde é possível comprar/vender o seu nome/link de indexação na rede, o livro contem todos os dados 
                    para a realização da compra, sendo que o nome/link caso não cadastrado é comprado diretamente da Iroha por um valor fixo de moedas Iroha e os nomes/links privados são vendidos a preço de mercado.
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;">Comprar recursos processamento e armazenamento</a>
                
            </div>
            <br><br>
            <div class="mt-5 w-75 mx-auto" id="3">
                <h1 class="text-center">APIs.</h1><hr>
                <p>As APIS da rede são os mecanismos-base de ligação entre o usuário e as funcionalidades da rede alocados nos nós da rede, no momento essas APIS estão sendo construídas e estarão em funcionamento em breve.
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;">Em Desenvolvimento</a>
                
            </div>
             


            <br><br><br>  <br><br><br> 
        </main>
         
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Todos os direitos reservados</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">privacidade</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Termos de uso</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="https://www.rede-iroha.com/contato/">contato</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
