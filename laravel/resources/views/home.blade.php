<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/std.css') }}" rel="stylesheet">

    </head>
    <body class="d-flex flex-column h-100">
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
    
    @auth
    <!-- Itens visíveis apenas quando logado -->
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">
                Sair
            </button>
        </form>
    </li>
    @endauth

    @guest
    <!-- Itens visíveis apenas para visitantes -->
    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
    @endguest
</ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Junte-se a rede iroha e aproveite todas as facilidades que você poderia imaginar.</h1>
                                <p class="lead fw-normal text-white-50 mb-4">A rede Iroha é um conjunto de serviços que se baseia em uma cripto moeda com lastro em serviços digitais.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#sr">serviços & recursos</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#features">Sobre Iroha</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('img/servidor.jpg') }}" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- sr preview section-->
            <section class="py-5" id="sr">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Rede Iroha e Iroha Money</h2>
                                <p class="lead fw-normal text-muted mb-5">Principais recursos e serviços disponíveis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('img/buscador.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Rede Iroha</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('buscador') }}"><h5 class="card-title mb-3">Pagina de buscas rede Iroha</h5></a>
                                    <p class="card-text mb-0">Ache o que procura com a ferramenta de busca da rede Iroha.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('img/carteira.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Iroha Money</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="https://www.rede-iroha.com/carteira-iroha/"><h5 class="card-title mb-3">Carteira Iroha</h5></a>
                                    <p class="card-text mb-0">Uma carteira que pode ser instalada em seu computador ou celular e lhe fornecera acesso a Iroha Money.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('img/apis.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Rede Iroha</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('api') }}"><h5 class="card-title mb-3">APIS iroha</h5></a>
                                    <p class="card-text mb-0">Tudo sobre as APIS disponiveis nativamente para rede Iroha e suas documentações.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('img/git.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Rede Iroha</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('repo') }}"><h5 class="card-title mb-3">Arquivos e Repositorios Rede Iroha</h5></a>
                                    <p class="card-text mb-0">Uma pagina contendo todos os arquivos e versões estáveis para iniciar um servidor na rede Iroha.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('img/pcb.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Rede Iroha</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('infra') }}"><h5 class="card-title mb-3">Infra Rede Iroha</h5></a>
                                    <p class="card-text mb-0">Aqui ficam disponíveis os recursos e serviços de infra da rede Iroha.</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('img/comprar.jpg') }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Rede Iroha</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="https://www.rede-iroha.com/preços/"><h5 class="card-title mb-3">Comprar irohas</h5></a>
                                    <p class="card-text mb-0">Compre suas moedas Iroha Money e comece a usufruir dos serviços da rede.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                     
                </div>
            </section>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Uma criptomoeda com lastros em serviços.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Iroha Money</h2>
                                    <p class="mb-0">Iroha Money é a moeda utilizada na rede Iroha, ela é uma moeda não inflacionaria e tem um número estático de 100 milhões de moedas impressas desde o começo da rede.<br>A moeda é baseada em um lastro com a rede Iroha onde para acessar quaisquer serviços na rede é necessário o uso da moeda Iroha money.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Compra de produtos e serviços</h2>
                                    <p class="mb-0">A rede Iroha foi criada com intuito de oferecer quaisquer serviços digitais possíveis em seu interior. Os serviços ofertados na Rede Iroha podem ser proprietários ou de terceiros onde ocorre um mercado mais livre e rico que poderá te oferecer excelentes serviços e produtos em troca de suas moedas Iroha.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Estabilidade e utilidade</h2>
                                    <p class="mb-0">Baseado em um sistema descentralizado a rede Iroha oferece funcionamento de forma constante e consistente, para isso é utilizado de redundância e escalabilidade fazendo a rede ser sempre confiável nos mais diversos serviços ofertados.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Facil implementação</h2>
                                    <p class="mb-0">A rede Iroha se baseia em tecnologias web atuais de fácil implementação e grande segurança, sendo moldada por um sistema criptográfico forte e utilizando tecnologias constantemente atualizadas, uma implementação fácil e prática que se converte em servidores mais seguros, baratos e sempre disponíveis para qualquer necessidade que um usuário leigo a desenvolvedores experientes poderiam ter.</p>
                                </div>
                            </div><br><br><br>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ route('sobre') }}">Descobrir tudo sobre a rede Iroha</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
           
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
                        <a class="link-light small" href="{{ route('contato') }}">contato</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
       
    </body>
</html>
