<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Repos Iroha</title>
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
                             
                            
                             
                        </ul>
                    </div>
                </div>
            </nav>

            <br><br>
            <div class="mt-5 w-75 mx-auto">
                
                <h1 class="text-center">Arquivos e Repositorios rede Iroha.</h1><hr>
            </div>

            <br>
            
            <header class="w-75 mx-auto mt-5 p-2 rounded " style="background-color: rgba(0, 0, 0, 0.7);">
                <div class="container px-5 mb-5 ">
                    <div class="row gx-5 align-items-center justify-content-center">
                        
                            <div class="my-5 text-center text-xl-start">
                                <h3 class="fw-bolder text-white mb-2">
                                    Baixe a versão estável mais atual da rede, versões beta/teste, documentação e demais arquivos para 
                                    configuração da rede.</h3>
                                </h3><br>
                                <p class="lead fw-normal text-white-50 mb-4">Nesta pagina você encontrara todos os aquivos necessários para iniciar seu nó na rede Iroha, 
                                    o conteúdo abaixo está dividido em tópicos para facilitar sua busca aos arquivos e documentação.<br>
                                    Leia o conteúdo informativo de cada seção e baixe os arquivos necessários optando por nossos repos no github onde 
                                    ficam as versões com novas features e funcionalidade disponíveis para teste ou escolha versões estáveis, escolha baixar os 
                                    arquivos de configuração e listas atualizadas da rede diretamente pelo nosso site.<br> Alem disso também é possível baixar 
                                     a documentação de cada versão da rede Iroha facilitando o teste de novas versões e funcionalidades que ainda não estão 
                                     officialmente implementadas na rede.<br><br>
                                     Você tera todo o conteúdo necessário abaixo.
                                    
                                </p>
                                
                            </div>
                        
                        </div>
                    
                </div>
                
            
            </header>

            <div class=" w-75 mx-auto">
                <br><br><br>
                <h2 class="text-left ">Conteudos disponiveis</h2>
                    <ol>
                        <li><a href="#1" class="link-secondary text-decoration-none mp-3">Ultimas versoes estaveis da rede.</a></li>
                        <li><a href="#2" class="link-secondary text-decoration-none mp-3">Versões Beta/teste da rede.</a></li>
                        <li><a href="#3" class="link-secondary text-decoration-none mp-3">Arquivos de configuração.</a></li>
                        <li><a href="#4" class="link-secondary text-decoration-none mp-3">Novas Funções da rede.</a></li>
                        <li><a href="#5" class="link-secondary text-decoration-none mp-3">Funções Beta/teste para a rede.</a></li>

                        <li><a href="#6" class="link-secondary text-decoration-none mp-3">Arquivos de lista da Iroha Money.</a></li>
                        <li><a href="#7" class="link-secondary text-decoration-none mp-3">Arquivos de lista da Iroha worker.</a></li>
                        
                        <li><a href="#8" class="link-secondary text-decoration-none mp-3">Documentação das versoes estaveis da rede.</a></li>
                        <li><a href="#9" class="link-secondary text-decoration-none mp-3">Documentação das versoes Beta/teste da rede.</a></li>
                        <li><a href="#10" class="link-secondary text-decoration-none mp-3">Canal Rede Iroha Youtube.</a></li>
                        
                    </ol>
            </div>


            <br><br>
            <div class="mt-5 w-75 mx-auto" id="1">
                <h2 class="text-center">Ultimas versões estáveis da rede.</h2><hr>
                <p>Aqui você encontrara as últimas versões estáveis da rede Iroha para windows e linux, ao clicar na versão desejada você sera redirecionado para o nosso 
                    repo no github e poderá baixar a versão selecionada a partir de la.<br> As Versões contem uma documentação básica 
                    encontrada em um arquivo de texto chamado doc_base.txt disponível na pasta raiz doc, onde contam sobre suas novas funcionalidades,
                    correção de bugs ou modificações no código/funções, caso seja necessário uma documentação mais detalhada vá para a seção desta pagina 
                    denominada " Documentação das versões estáveis da rede ", procure a versão estável desejada e baixe o arquivo contendo a documentação detalhada.<br>
                    Caso ainda não tenha baixe os arquivos de configuração para serem adicionados e configurados na sua versão da rede Iroha, caso já tenha um arquivo de 
                     configuração devidamente aplicado e esteja apenas mudando sua versão Iroha de modo manual não sera necessário refazer o processo de configuração, basta apenas 
                  salvar a sua pasta " conf " na nova versão e iniciar seu nó novamente.<br> Caso tenha dificuldades para iniciar a instalação e configuração de seu nó entre em nosso
                    canal no youtube e assista nossos tutorias sobre a instalação de sua versão.
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Linux_x64_Rede_Iroha_E_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Windows_x64_Rede_Iroha_E_v_1.0</a><br><br>

            </div>
            <br>
            <div class="mt-5 w-75 mx-auto" id="2">
                <h2 class="text-center">Versões Beta/teste da rede.</h2><hr>
                <p>Aqui você encontrara as ultimas versões Beta/teste da rede Iroha para windows e linux, ao clicar na versão desejada você sera redirecionado para o nosso 
                    repo no github e poderá baixar a versão selecionada a partir de la.<br> As Versões contem uma documentação básica 
                    encontrada em um arquivo de texto chamado doc_base.txt disponível na pasta raiz doc, onde contam sobre suas novas funcionalidades,
                    correção de bugs ou modificações no código/funções, caso seja necessário uma documentação mais detalhada vá para a seção desta pagina 
                     denominada " Documentação das versões Beta/teste da rede ", procure a versão Beta/teste desejada e baixe o arquivo contendo a documentação detalhada.<br>
                    Caso ainda não tenha baixe os arquivos de configuração para serem adicionados e configurados na sua versão da rede Iroha, caso já tenha um arquivo de 
                     configuração devidamente aplicado e esteja apenas mudando sua versão Iroha de modo manual não sera necessário refazer o processo de configuração, basta apenas 
                     salvar a sua pasta " conf " na nova versão e iniciar seu nó novamente.<br> Caso tenha dificuldades para iniciar a instalação e configuração de seu nó entre em nosso
                    canal no youtube e assista nossos tutorias sobre a instalação de sua versão.
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Linux_x64_Rede_Iroha_B_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Windows_x64_Rede_Iroha_B_V_1.0</a><br><br>

            </div>
            <br>
            <div class="mt-5 w-75 mx-auto" id="3">
                <h2 class="text-center">Arquivos de configuração.</h2><hr>
                <p>Aqui você encontrara os arquivos de configuração para iniciar seu nó na rede Iroha. A configuração é fácil e você também pode contar com um arquivo 
                    chamado " intruct.txt " na pasta " instruct " que contem todas as instruções necessárias para realizar a correta configuração e customização dos arquivos.<br>
                    Apos terminado a configuração basta copiar a pasta " conf " gerada e copiá-la para a raiz de seu nó Iroha e estará tudo pronto para startar seu nó.<br>
                    Caso você já tenha um arquivo de configuração devidamente editado você pode só copiá-lo para a nova versão em sua pasta raiz sem a necessidade de refazer o processo. 
                 
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Linux_E_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Windows_E_V_1.0</a><br><br>

            </div>
            <br> 
            <div class="mt-5 w-75 mx-auto" id="4">
                <h2 class="text-center">Novas Funções da rede.</h2><hr>
                <p>Esta seção e dedicada as novas funções da rede Iroha que podem ser adicionadas no seu nó para ficarem disponíveis a rede, essas funcionalidades podem ser adicionadas nas próximas 
                     versões estáveis ou não baseando-se na potencia media das maquinas da rede em executar tais funcionalidades dentro do tempo e da qualidade esperados.<br>
                     Basicamente nem todas as maquinas da rede tem poder computacional para fornecer todos os serviços listados pela rede Iroha, porem cada nó da rede pode se especializar em uma ou mais funções a 
                     fim de oferecer um melhor serviço e receber uma maior rentabilidade. Para tanto disponibilizamos os módulos de funcionalidades da rede de forma individual, assim o nó pode balancear a sua 
                     capacidade computacional com o retorno que cada funcionalidade da rede esta gerando naquele momento, diminuindo os custos e desperdícios de processamento/armazenamento necessários<br>
                     A instalação dos módulos são simples e você também pode contar com o arquivo 
                    " intruct.txt " na pasta " instruct " que contem todas as instruções necessárias para a instalação da funcionalidade selecionada.<br>
                    A medida que as máquinas da rede forem aumentando suas capacidades computacionais, e a rede aumentar a demanda por tais funções, elas serão incorporadas nas novas versões estáveis da rede e não serão mais 
                    encontradas nessa seção.<br> Caso você deseje saber quais as funcionalidades a sua versão estável padrão da rede suporta pesquise a documentação completa da versão e veja quais as funcionalidades ela já contem 
                    embutida, vá para a seção da pagina " Documentação das versões estáveis da rede " e pesquise a versão desejada.
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Linux_x64_Operações_terminal_Rede_Iroha_E_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Windows_x64_Operações_terminal_Rede_Iroha_E_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Linux_x64_Banco_Dados_Rede_Iroha_E_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Windows_x64_Banco_Dados_Rede_Iroha_E_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Linux_x64_Pocessamento_CPP_Real_Time_Iroha_E_V_1.0</a><br><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Windows_x64_Pocessamento_CPP_Real_Time_Iroha_E_V_1.0</a><br><br>

            </div>
            <br>
            <div class="mt-5 w-75 mx-auto" id="5">
                <h2 class="text-center">Funções Beta/teste para a rede.</h2><hr>
                <p>As funções beta/teste são funções da rede Iroha em estado experimental, elas podem te pagar mais moedas Iroha pelo serviço de seu nó mas podem conter bugs e falhas.<br>
                    Estas funcionalidades são recomendas para serem executadas em nós feitos somente para rodar tais versões beta/teste de funcionalidades e somente elas, pois podem apresentar falhas que 
                    em ultimo caso poderiam comprometer um nó convencional, por isso caso deseje criar um nó com funções beta/teste baixe a versão base da rede Iroha beta/teste, crie um nó novo somente para 
                   a funcionalidade beta/teste desejado e realize a instalação da funcionalidade no nó.<br> As funcionalidades beta/teste podem dar um pouco de trabalho mas acabam que por terem poucos nós 
                   disponíveis para tal funcionalidade pagam mais moedas do que as versões comuns da rede que são mais abrangentes e comuns de se encontrar. 
                </p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">NA</a><br><br>

            </div>
            <br>
            <div class="mt-5 w-75 mx-auto" id="6">
                <h2 class="text-center">Arquivos de lista da Iroha Money.</h2><hr>
                <p>Aqui você encontrara um arquivo com diferentes links de diferentes nós para baixar os arquivos de lista compra/venda da rede Iroha de forma manual.</p>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Lista_Principal--nós</a><br><br>

            </div>
            <br><br>
            <div class="mt-5 w-75 mx-auto" id="7">
                <h2 class="text-center">Arquivos de lista da Iroha worker.</h2><hr>
                <p>Aqui você encontrara um arquivo com diferentes links de diferentes nós para baixar os arquivos de lista dos contratos da rede Iroha de forma manual.</p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Lista_Principal--nós</a><br><br>

            </div>
            <br> 
            <div class="mt-5 w-75 mx-auto" id="8">
                <h2 class="text-center">Documentação das versoes estaveis da rede.</h2><hr>
                <p>Aqui você encontrara a documentação completa das versões estaveis da rede Iroha.</p><br>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Documentações_V_Git</a>

            </div>
            <br> 
            <div class="mt-5 w-75 mx-auto" id="9">
                <h2 class="text-center">Documentação das versoes Beta/teste da rede.</h2><hr>
                <p>Aqui você encontrara a documentação completa das versões beta/teste da rede Iroha.</p>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(0, 0, 0, 0.7);border-radius: 5px;color: white;margin: 10px;">Documentações_Beta_V_Git</a>

            </div>
            <br> 
            <div class="mt-5 w-75 mx-auto" id="10">
                <h2 class="text-center">Canal Rede Iroha Youtube.</h2><hr>
                <p>Em nosso canal no youtube você poderá encontrar vídeos de como iniciar seu nó na rede Iroha, descobrir novas funcionalidades e aprender alguns truques e 
                 curiosidades sobre a rede e seu funcionamento.<br> Acesse o canal clicando no link abaixo.
                </p>
                <a href="#" style="text-decoration: none;padding: 5px;background-color: rgba(210, 29, 29, 01);border-radius: 5px;color: white;margin: 10px;">Canal Rede Iroha Youtube</a>

            </div>
            
            <br><br><br>
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
        <script src="js/scripts.js"></script>
    </body>
</html>
