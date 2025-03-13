<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Buscador Iroha</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/std.css') }}" rel="stylesheet" />
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
                             
                            
                             
                        </ul>
                    </div>
                </div>
            </nav>
            
        </main>
        <!-- Seleção do buscador -->
        <section id="selecao" style="height: 30px;width: 100%;">
            
                <div style="width: 50%;height: 30px;position: absolute;background-color: rgba(0, 0, 0, 0.3);cursor: pointer;" onclick="terminal()" >
                        <p class="text-center">
                            Terminal
                        </p>
                </div>
            
           
                <div style="width: 50%;height: 30px;position: absolute;margin-left:50%;background-color: rgba(0, 0, 0, 0.3);cursor: pointer;" onclick="buscadorcomum()">
                        <p class="text-center">
                            Buscador convencional
                        </p>
                </div>
            
        </section>
        <!-- Header-->
        <header id="terminais" style="display:none;">
               
                <div class="" id="terminal-1" style="background-color: rgba(0, 0, 0, 0.7);width: 600px;height: 380px;margin-top: 20px; border-radius: 5px;margin-left: 60px;">
                        <div id="barra-superior-t1" onmousedown="moveJanela(this)" onmouseup="pauseJanela(event)" style="height: 27.5px;width: 100%;background-color: black;border-radius:5px 5px 0px 0px ;">
                            <div id="fechar" onclick="excluir_j1()" style="cursor: pointer;height: 15px;width: 15px;background-color: red;margin-top:3.5px;margin-left: 2.5px;border-radius: 10px;position: absolute;"></div>
                            <div id="minimizar" onclick=" minimizar_j1()" style="cursor: pointer;height: 15px;width: 15px;background-color: yellow;margin-top:3.5px;margin-left: 19.5px;border-radius: 10px;position: absolute;"></div>
                            <div id="limpar" style="cursor: pointer;height: 15px;width: 15px;background-color: white;margin-top:3.5px;margin-left: 36px;border-radius: 10px;position: absolute;"></div>
                            <p id="titulo-t1" class="text-white" style="position: absolute;margin-left: 70px;"> Terminal rede Iroha -- Buscador rede Iroha</p>
                        </div><br>
                        <div id="texto-terminal-1" style="height:352.5px;width: 100%;" onclick="">
                            <p id="txt-t1" class="text-white font-weight-bold" style="height:352.5px;width: 90%;margin: auto;">
                                $rede-iroha || --buscar-site 
                            </p>
                        </div>
                </div>
               
              <div id="adicionar-terminal" onclick="adicionar()" style="background-color: rgba(115, 115, 115,0.7);width: 50px;height: 50px;border-radius: 25%;position: fixed;top: 100px;left: 5px;cursor: pointer;">
                <div style="height: 30px;width: 3px;margin-left: 23.5px;background-color: black;margin-top: 10px;border-radius: 1px;"></div>
                <div style="height: 3px;width: 30px;margin-left: 10px;background-color: black;margin-top: -15px;border-radius: 1px;"></div>
              </div>

              <div id="minimizado-janela-1" style="display: none;cursor: pointer;" onclick="expand_j1()"> 
                    <div   style="background-color: rgba(0, 0, 0, 0.3);width: 50px;height: 30px;border-radius: 5px;position: fixed;top: 160px;left: 5px;">
                        <div style="height: 10px;width: 100%;background-color: black;border-radius: 5px 5px 0px 0px;"></div>
                        <p class="text-center" style="margin-top: -4px;">1</p>
                    </div>
              </div>
              <div id="minimizado-janela-2" style="display:none;background-color: rgba(0, 0, 0, 0.3);width: 50px;height: 30px;border-radius: 5px;position: fixed;top: 200px;left: 5px;">
                <div style="height: 10px;width: 100%;background-color: black;border-radius: 5px 5px 0px 0px;"></div>
                <p class="text-center" style="margin-top: -4px;">2</p>
              </div>

              <div id="minimizado-janela-3" style="display:none;background-color: rgba(0, 0, 0, 0.3);width: 50px;height: 30px;border-radius: 5px;position: fixed;top: 240px;left: 5px;">
                <div style="height: 10px;width: 100%;background-color: black;border-radius: 5px 5px 0px 0px;"></div>
                <p class="text-center" style="margin-top: -4px;">3</p>
              </div>

              <div id="minimizado-janela-4" style="display:none;background-color: rgba(0, 0, 0, 0.3);width: 50px;height: 30px;border-radius: 5px;position: fixed;top: 280px;left: 5px;">
                <div style="height: 10px;width: 100%;background-color: black;border-radius: 5px 5px 0px 0px;"></div>
                <p class="text-center" style="margin-top: -4px;">4</p>
              </div>

              <div id="minimizado-janela-5" style="display:none;background-color: rgba(0, 0, 0, 0.3);width: 50px;height: 30px;border-radius: 5px;position: fixed;top: 320px;left: 5px;">
                <div style="height: 10px;width: 100%;background-color: black;border-radius: 5px 5px 0px 0px;"></div>
                <p class="text-center" style="margin-top: -4px;">5</p>
              </div>

        </header>
        <header id="buscador-comum">
            <br><br><br><br>
            <div class="mt-5 w-75 mx-auto">
                
                <h1 class="text-center " >Rede Iroha</h1><hr>
            </div>

            <br>
            
            
                <div class="container px-5 mb-5 ">
                    <div class="row gx-5 align-items-center justify-content-center">
                        
                            <div class="my-5 text-center text-xl-start">
                                <h3 class="fw-bolder  mb-2">
                                    Realize a busca de sites e conteudos disponiveis na rede Iroha.</h3>
                                </h3><br>
                                <div class="input-group mb-3">
                                    
                                    <input type="text" class="form-control" placeholder="Pesquisar na rede Iroha" aria-label="end" aria-describedby="basic-addon1" id="buscar">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3 " style="margin: auto;" href="#1">Pesquisar</a>
                                </div>
                                <br> 
                                <p>Você pode buscar um site pelo link, um arquivo que esteja na rede ou um nó que deseja acessar entre outros.<br> Caso você seja um usuário mais avançado
                                    na rede Iroha existe um terminal em que você pode acessar as funções, mexer em arquivos da rede, configurações de contratos e nós alem de 
                                     poder acessar o espaço do usuário diretamente pelo terminal.
                                </p>
                                    
                                
                            </div>
                        
                        </div>
                    
                </div>
                
            
            </header>
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
        <script src="{{ asset('js/browserTerminal.js') }}"></script>
    </body>
</html>
