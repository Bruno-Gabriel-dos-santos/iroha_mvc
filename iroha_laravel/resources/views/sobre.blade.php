<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sobre</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/std.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
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
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Tudo sobre a rede Iroha e a Iroha Money.</h1><br>
                                <p class="lead fw-normal text-muted mb-4">Saiba tudo sobre a rede Iroha e a Iroha Money, desde sua idealização até seu 
                                    funcionamento e suas implementações.<br>
                                Uma apresentação de todo o modelo de funcionamento, tecnologias, seguranças e garantias alem do modelo economico que a rede Iroha e a Iroha Money se 
                                propoem a seguir.</p>
                                 
                            </div>
                        </div>
                    </div> 
                    <div class=" w-75 mx-auto">
                        <h2 class="text-left ">Sumario</h2>
                            <ol>
                                <li><a href="#1" class="link-secondary text-decoration-none mp-3">O proposito da rede Iroha.</a></li>
                                <li><a href="#2" class="link-secondary text-decoration-none mp-3">Sobre a gestão da rede Iroha.</a></li>
                                <li><a href="#3" class="link-secondary text-decoration-none mp-3">Sobre o financiamento da rede Iroha.</a></li>
                                <li><a href="#4" class="link-secondary text-decoration-none mp-3">Sobre a recompensa/remuneração pela participação na rede.</a></li>
                                 
                                <li><a href="#5" class="link-secondary text-decoration-none mp-3">Explanando o conceito de lastros e garantias em um mercado.</a></li>
                                <li><a href="#6" class="link-secondary text-decoration-none mp-3">Funcionamento do lastro e garantias na rede Iroha e na moeda Iroha Money.</a></li>
                                <li><a href="#7" class="link-secondary text-decoration-none mp-3">Funcionamento geral da rede Iroha.</a></li>
                                
                                <li><a href="#8" class="link-secondary text-decoration-none mp-3">Sobre os serviços prioritários ofertados pela rede Iroha.</a></li>
                                <li><a href="#9" class="link-secondary text-decoration-none mp-3">Sobre os serviços de terceiros ofertados pela rede Iroha.</a></li>
                                
                            </ol>
                    </div>
                </div>
            </header>
            <!-- O proposito da rede Iroha. -->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center" id="1">O proposito da rede Iroha.</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0">A rede Iroha tem como proposito inicial disponibilizar recursos computacionais de forma descentralizada e 
                             eficiente, servindo como um grande servidor espalhado pelo mundo em que o usuário poderá comprar esse poder computacional utilizando a moeda lastreada
                            Iroha Money e assim criar ou utilizar serviços existentes na rede. Sendo tal moeda um lastro dos serviços e produtos oferecidos pela rede, assim agregando
                            um valor a moeda e gerando estabilidade e segurança na compra e utilização dos serviços da rede ao longo do tempo.
                            
                            
                             <br><br>Com isso em mente é possível compreender que a rede Iroha é em princípio destinada a todas as aplicações web ou de processamento intensivo tanto 
                             dentro quanto fora da rede, pode-se hospedar os serviços e acessados diretamente da própria rede Iroha ou utilizar os serviços prestados pela rede via uma das APIS da rede
                             como um banco de dados por exemplo.<br><br>
                            
                            
                             É então possível construir e estruturar qualquer tipo de site ou sistema desejado na rede Iroha e caso desejável até o hospedá-lo dentro da rede Iroha,
                            com isso o site/serviço ganhara um link especifico para a rede e sera acessado através dos buscadores feitos para a rede Iroha.
                             
                           
                           <br><br>
                            Alem desses serviços a rede Iroha ira oferecer a venda de produtos diversos através de uma loja proprietária utilizando Iroha Money e com isso agregar valor a moeda 
                             de forma consistente, lojas e serviços de terceiros também poderão vender utilizando a API de transações da moeda Iroha Money.
                            

                        </p>   
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="2">Sobre a gestão da rede Iroha.</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0">
                             
                            <b><i>Princípios da gestão da rede</i></b><br>
                            A rede Iroha é por si uma plataforma que necessita de qualidade e estabilidade assim obrigando aos participantes da rede terem sempre uma versão estável e uniforme 
                         dos softwares disponibilizados para a rede Iroha, por outro lado, os participantes são livres para utilizarem máquinas com variadas capacidades computacionais desde-que
                             atendidos os requisitos mínimos para a operação dos sistemas selecionados para a rede. Desse modo os participantes podem alocar seus recursos computacionais escalonando seus 
                             ganhos a medida do crescimento da rede.<br>O gerenciamento da rede é então feito parte do criador da rede e parte dos participantes que a aderirem.  
                            <br><br>
                             <b><i>Gerenciamento e atualização de Software</i></b><br>
                            A criação e atualização de software contendo funções e sistemas proprietários que sejam destinadas ao funcionamento da rede serão uma tarefa exclusiva e centralizada a 
                            seu criador, que ira disponibilizá-las através do site oficial da rede Iroha assim cabendo aos participantes da rede realizar as atualizações e modificações necessárias.
                            <br><br>
                             <b><i>Gerenciamento dos dados </i></b><br>
                             Os dados na rede Iroha são caracterizados por dados criptografados e dados públicos.<br>
                            Os dados privados serão criptografados na fonte primaria e então enviados para a rede onde deverão ficar ausentes de suas chaves, tais dados serão armazenados na rede utilizando de 
                            redundância para evitar possíveis perdas. Os dados criptografados então não podem ser abertos pela rede, mas sim pelo usuário/terceiros que detém a sua chave ao qual devera para tanto
                             realizar o download do arquivo em uma máquina de sua responsabilidade.
                             <br> 
                             Já os dados públicos terão sua criptografia podendo ser iniciada tanto na fonte primaria (máquina do usuário), quanto em fonte secundaria (na própria rede Iroha ), os dados também 
                             passarão por um processo de armazenamento com redundância e poderão ser utilizados e fornecidos pela rede Iroha como o usuário desejar. O conteúdo dos dados fornecidos pelo usurário 
                             ficara sob sua responsabilidade, podendo ter tais dados suspensos ou deletados em caso de violação das regras da rede.
                             <br><br><b><i>Gerenciamento do processamento </i></b><br>
                             A rede Iroha é uma rede distribuída em vários nós criados pelos participantes que fornecem poder computacional a rede em busca de retorno financeiro, desse modo a rede tem como meio de 
                             manter sua estabilidade um balanceador de carga para as tarefas propostas pelo cliente, visando assim ter sempre uma margem para os participantes terem tempo de alocar mais recursos caso 
                             seja necessário, além disso, o balanceamento dos processos oferece um rendimento mais equalitario para os participantes, evitando vantagens indevidas e realizando uma competição mais equilibrada para 
                             a prestação dos serviços da rede.
                             <br><br><b><i>Punições por mau funcionamento</i></b><br>
                            Visando ter um melhor funcionamento e desincentivar/evitar qualquer tipo de má conduta ou incapacidade técnica, a rede Iroha terá  punições ao participante que tentar operar 
                             fora dos padrões propostos pela rede, tais punições podem variar como a queda temporária nos índices do balanceador de tarefas até a suspensão permanente do participante. Para tanto é feita uma 
                             verificação aleatória e automática em todos os participantes em que todos vigiam a todos, desse modo qualquer falha em qualquer nó sera detectada e o nó punido proporcionalmente a gravidade de sua falha 
                             que entre elas inclui a não atualização dos sistemas oficiais da rede dentro do prazo determinado, erros de cálculo e falhas de gravação ou qualquer tipo de armazenamento, ou processamento fora das 
                             especificações da rede Iroha.
                        
                            </p>   
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="3">Sobre o financiamento da rede Iroha.</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0">
                            <br><br><b><i>taxa sobre os serviços da rede Iroha</i></b><br>
  Os serviços da rede Iroha contem uma taxa para os participantes no valor de 1% do valor ofertado em seu serviço, esse valor sera utilizado para 
  a manutenção e atualização dos sistemas de software da rede quando os demais métodos de financiamento não forem mais possíveis ou o desenvolvimento da rede já estiver avançado.
 <br>Essa taxa é um modelo padrão na rede Iroha e terá aplicação já em sua primeira versão.
 <br><br><b><i>financiamento pelos serviços da rede</i></b><br>
  O financiamento por serviços consiste em vender os serviços da rede com servidores privados da Iroha, tais servidores serão então mantidos com recursos providos pela 
  própria Iroha a fim de fornecer os recursos iniciais necessários para a utilização dos serviços na rede.<br>Com a venda dos serviços oferecidos para a rede sera então 
  gerada uma receita para a manutenção e expansão sobe demanda da rede, aumentando ou diminuindo a locação de servidores privados até que seja possível ofertar serviços 
  com a utilização de poder computacional dos participantes da rede de forma a não gerar gargalos na rede.<br>Nesse ponto em que os participantes obtiverem as maquinas e 
  recursos necessários para suprir as demandas da rede os servidores privados iroha serão reduzidos, feito isso conforme o tempo de maneira proporcional para incentivar 
  a concorrência e o amadurecimento da rede e o progresso de seus participantes os estimulando a sempre prestar um ótimo serviço e atualizarem suas máquinas ao 
  necessário para suprir a demanda de processamento e armazenamento. 
  <br>Esse modelo de financiamento tem a intenção de oferecer processamento inicial e estabilizar preços e demandas recebidas pela rede Iroha em seu início, além de 
  inicialmente ser um modelo para gerar receita para a manutenção da rede. 
  
  <br><br><b><i>Sobre a venda das moedas</i></b><br>
  Outro modo de financiar a rede sera através da venda de moedas Iroha Money, A Iroha Money ao contrário de outras criptomoedas têm sua quantia máxima de moedas emitidas logo 
  em seu início, sendo 1 bilhão de moedas impressas ao todo, moeda essa que serão vendidas aos usuários por um preço padrão inicial de 1000 dólares a unidade.<br>
 Os valores recebidos pela venda das moedas serão então utilizados para fornecer toda a estrutura e desenvolvimento necessário para realizar os serviços disponíveis na rede Iroha,
  esse modelo de financiamento então ira fornecer os recursos necessários para o início da rede e seus serviços, garantindo ao comprador das moedas Iroha Money um lastro com a rede 
  Iroha e atestando seus valores com o desenvolvimento e melhorias contínuas na rede, com o fornecimento de recursos computacionais estáveis e de qualidade, com o amparo e apoio da Iroha como 
  um todo.
  <br>Esse mecanismo de venda de moedas tera um maior impacto no início da rede e fornecera os recursos necessários para sua estruturação utilizando servidores privados iroha, esses porem terão 
  conforme o avanço da rede uma contínua diminuição, onde serão com a medida do tempo substituídos por participantes da rede e estes por sua vez irão receber os valores pelos seus serviços prestados em 
  Iroha Money. O mercado então ira precificar os valores da moeda Iroha em meu mercado aberto de maneira diferente ao mercado de moedas criado pela própria Iroha, fazendo com que exista uma trava de alta 
  temporária para a moeda evitando grandes especulações e impedindo movimentos que possam afetar a rede de maneira negativa.<br>
 Além disso, a venda por um preço fixo da moeda ira manter o valor da moeda de forma mais estável, evitando grandes oscilações de preço e fazendo com que o valor pago pelos serviços da rede e seus produtos
  sejam estáveis e previsíveis, para manter essa estabilidade foi criado outros mecanismos que podem ser utilizados tanto para o financiamento da rede quanto a manutenção da estabilidade dos preços dentro do possível.
  <br><br><b><i>Sobre a recompra de moedas Iroha</i></b><br>
 Um meio para manter a estabilidade da moeda e de seus serviços é a recompra da moeda pela própria iroha, tendo como meio de financiamento a revenda de tais moedas ao preço padrão ofertado pela iroha posteriormente.<br>
  Aqui então é feita uma recompra de moedas quando o preço cair abaixo de um valor padrão, preço esse que poderá ser modificado assim como o preço de venda da moeda pela Iroha, ao criar esse mecanismo de recompra a rede 
  ganha uma defesa contra especulações e mantêm de forma mais estável o valor de sua moeda e seus produtos, fornecendo aos compradores da moeda uma maior estabilidade para adquirir e manter suas posições na rede.<br>
  Ainda tem como foco oferecer um valor mínimo de remuneração para os participantes da rede que terão como garantia o valor padrão de recompra oferecido pela Iroha, diminuindo instabilidades de fornecimento de recursos 
  computacionais na rede e assim fornecendo melhor estabilidade para os usuários. 
  <br><br><b><i>Sobre o aumento de preço da moeda</i></b><br>
  Os preços da moeda Iroha Money sofrerão um aumento em seu valor padrão de venda pela Iroha a cada 10% de vendas sobre o montante de moedas totais, então o valor padrão de venda ira subir 15% sobre o valor padrão anterior.
                        </p>   
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="4">Sobre a recompensa/remuneração pela participação na rede.</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0"> 
                            <b><i>Sobre o modelo de remuneração</i></b><br>
                            Os participantes da rede Iroha são remunerados pelos serviços prestados a rede de modo que o participante ao criar o servidor de serviço devera configurar uma faixa de preço em que deseja oferecer 
 os seus serviços para a rede, assim quando um usuário requisitar os serviços da rede ele poderá mandar o pedido a uma ordem limitada ou a mercado.<br>
 Basicamente a ordem limitada significa que o valor do serviço não pode ultrapassar aquele limite de preço definido pelo cliente, desse modo caso a oferta de serviço prestada pelo participante da rede 
 seja compatível com o valor proposto pelo cliente, a compra daquele poder computacional é realizada.<br>
 Já o modelo a mercado é feito para uma emergência onde o valor máximo é o teto da rede ou o valor disponível da conta do usuário que fez a requisição.<br>
 <br>Um exemplo simples: O participante baixa os sistemas para a rede Iroha e decide oferecer para a rede apenas o sistema de armazenamento, com isso ele inicia a configuração do sistema e entre as opções
  de valor por remuneração, ele escolhe como seu valor mínimo 0,00003IRH/dia por GB de dados armazenados em sua máquina. O participante então starta o serviço e começa a receber as tarefas da rede,
 a rede então ira fornecer através de um balanceador de tarefas as tarefas para o participante que poderão ter valor igual ou superior ao configurado pelo participante.<br>
 Do valor recebido é retirada uma taxa de 1% para a manutenção dos sistemas da rede, os outros 99% ficam disponíveis na conta do participante ao término do dia de serviço.

 <br><br><b><i>Sobre a distribuição de tarefas para os participantes</i></b><br>
  A distribuição de tarefas não é igualitária, na rede Iroha os participantes que tiverem melhores métricas de qualidade e tempo de serviço terão uma chance maior de receber tarefas.<br>
  As tarefas na rede Iroha são distribuídas para os participantes através de um balanceador, o balanceador não ira prejudicar os novos participantes os eliminando ou dificultando sua concorrência com os 
  prestadores de serviço mais antigos, mas sim realizar um acolamento gradual de tarefas para os participantes novatos afim de garantirem a estabilidade da rede, evitando sobrecargas ou erros inesperados.<br>
  Como a rede Iroha sofre auditorias da própria rede de forma constante, esse tipo de mecanismo ira combater participantes mal-intencionados ou com servidores que apresentem falhas, além de oferecer um crescimento 
  gradual facilitando a expansão e melhoria de suas máquinas.<br>
  A rede em si tem vários sistemas de segurança, incluindo sistemas de redundância, o que significa que um arquivo sempre está em mais de um servidor ao mesmo tempo, e dessa maneira as tarefas são alocadas para vários participantes,
 portanto, mesmo os participantes que começarem na rede quando ela já estiver mais desenvolvida terão várias tarefas disponíveis.
  <br><br><b><i>Sobre a recompensa dos participantes</i></b><br>
  Os participantes irão ter suas recompensas recebidas diretamente em suas contas Iroha Money.
  <br><br><b><i>Sobre as tarefas da moeda Iroha Money</i></b><br>
  As tarefas da Iroha Money incluindo o processamento e o armazenamento dos dados de transações financeiras não resultarão em remuneração, são porem obrigatórias para todos os participantes da rede.
 As transações feitas pela Iroha money tem sua obrigatoriedade em todos os participantes, sendo atestada pela auditoria constante na rede com penalidades em caso de não cumprimento do processamento e armazenamento das transações realizadas
 na rede através da Iroha Money.
 <br><br><b><i>Sobre falhas no servidor</i></b><br>
 Caso o servidor do participante venha a falhar ou apresentar mau funcionamento em um determinado arquivo ou processo, este resultara na anulação de sua recompensa diária da dada tarefa. Caso a falha seja igual ou superior a 30% de suas 
 tarefas o participante tera o valor diário totalmente anulado e caso haja falhas por 3 dias consecutivos este ficara inapto a receber tarefas por 25 dias, tendo ainda um potencial de captação de tarefas reduzido em sua volta.
                        </p>
                    </div>
                </div>
            </section>
             
            <!-- About section two-->
            <section class="py-5">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="5">Explanando o conceito de lastros e garantias em um mercado.</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0"> 
                            <b><i>Sobre os lastros e garantias no geral</i></b><br>
 Os lastros são em geral itens de troca que podem ser dados como uma garantia em um comércio.
 Um exemplo simples são as antigas moedas que eram lastreadas em ouro, ou seja, era possível através de um papel de posse realizar uma troca por ouro no seu respectivo emissor. O papel então 
 era uma garantia e o ouro um lastro, pois o papel garantiria a seu proprietário a troca por uma quantia especifica de ouro.<br>
 É possível ter diversos tipos de lastros, sendo em matérias como em metais precisos, em recursos naturais, em propriedade intelectual e muitos outros, basicamente a característica mais forte do 
 lastro é seu amplo valor perante a sociedade fazendo com que quanto mais difundido e apreciado pelas sociedades que desejem realizar trocas voluntarias forem, maior sera o valor referente ao lastro.
 <br>Por outro lado, a garantia tem seu valor fundamentado em prazos, quantidade de recursos disponíveis e incentivos socioeconômicos/legais.
 <br>Entendido isso pode-se perceber a importância do lastro em uma moeda e da garantia em um negócio, tanto a possibilidade de realizar negócios e transações são também uma garantia necessária para 
  qualquer moeda. Imagine só ter um bilhão de dólares, mas só poder comprar baloes cheios de ar, não adiantaria de nada não é mesmo?.
 
 <br><br><b><i>Problemas dos lastros e garantias das moedas estatais</i></b><br> 
 Bom entendido o conceito e necessidade do lastro e das garantias no mercado em geral, iremos agora falar sobre as desvantagens das atuais moedas estatais.<br>
 Para começar as moedas não tem limite de impressão e tem seu lastro fundado em instituições governamentais que mudam de gestor frequentemente, com isso são geradas diversas incertas quanto ao tempo e validade de tais lastros e garantias 
  , além disso elas tendem a desvalorizar devido à impressão de moeda podendo se valorizar caso geridas de forma adequada ocorrendo em pouquíssimos países, as garantias quanto a liberdade de uso não são respeitadas e 
  frequentemente existem abusos sob os termos já criados que são modificados por leis e tribunais que alteram o entendimento do contrato de uso da moeda 
  assim limitando a capacidade do usuário de realizar trocas de forma livre.<br>Não bastasse isso ainda é passível de ser substituída a contragosto, de servir como meio de controle e espionagem estudando e monitorando os
  seus usuários através de instituições de controle, vale salientar que não são todos os governos ou todas as moedas estatais que sofrem desses problemas, nem mesmo de todos eles mas são defeitos inerentes ao sistema e com isso 
  prováveis de ocorrerem com maior ou menor intensidade durante o uso da moeda.
  <br><br><b><i>Problemas dos lastros e garantias das moedas digitais " Bitcoin "</i></b><br> 
 O Bitcoin é uma moeda com grande evolução a moeda estatal porem ainda tem defeitos que invariavelmente impossibilitam o seu uso pelo público geral.<br>
 Primeiramente seus acertos:<br> Ele tem uma quantidade de moeda impressa limitada o que garante uma não desvalorização por dissolução, oferece certa segurança contra ações agressoras contra o patrimonio, 
  funciona em rede, é uma moeda de uso voluntario, é uma moeda considerada até agora segura.
 <br>Agora os problemas:<br>
 Primeiramente o Bitcoin não tem lastro sendo por isso muito volátil e impulsionado em geral por grandes especulações do mercado o que atrapalha sua cotação gerando incertezas. O Bitcoin tem um consumo de 
 energia extremamente elevado para suprir a sua rede mesmo sendo utilizado por uma parcela ínfima da população, o que isso significa?, isso significa que a adoção do Bitcoin nos moldes atuais como moeda de uso diário é impossível 
 devido ao tamanho do consumo computacional e energético que é gasto para o funcionamento do mesmo.
 Temos também o problema de garantias, sendo que o Bitcoin é uma moeda que tem o valor ao qual as pessoas acreditam que ele tem, não existe uma garantia de que ao longo do tempo se possa comprar produtos/serviços com ele 
  pois o seu preço varia demais, não ha serviços prestados ou produtos que possam ser trocados de forma consistente para estabilizar a moeda assim não tendo uma garantia nem um lastro o Bitcoin sofre de muita especulação.
  Há ainda o problema das taxas altas que causam desconforto para pequenas transações, isso em geral afeta o uso do Bitcoin no dia a dia das pessoas gerando uma barreira para uma possível implementação de seu uso por uma população.
                        
                        </p>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="6">Funcionamento do lastro e garantias na rede Iroha e na moeda Iroha Money</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0">
                            Agora entendido o que é e como funcionam os lastros e garantias em geral sera apresentado os lastros e garantias da moeda e da rede Iroha.
 <br><br> <b><i>Sobre os lastros</i></b><br>
  A moeda iroha Money tem seu lastro nos serviços digitais oferecidos pela rede, para qualquer pessoa em qualquer lugar do mundo que possuir moedas iroha poderá as usá-las como meio de troca para conseguir serviços digitais disponibilizados pela rede.
 Pode ser um banco de dados, a alocação de um site de vendas, processamento de dados entre outros..., seja como for, essa pessoa possuidora da moeda tem a garantia de poder efetuar essa troca de suas moedas por serviços oferecidos pela rede.<br>
 Ainda outro lastro da moeda Iroha Money são os produtos oferecidos pela loja iroha, onde desde que fornecido o serviço da loja iroha no pais em questão ou com meios de ser o dado produto enviado para destinatário de modo legal, este por vez tem a 
  garantia de efetuar a troca de sua moeda iroha pelo produto em questão, pagando com as suas moedas os valores referidos ao produto/envio. 
 <br>Sendo assim podemos ver que os lastros da moeda são serviços e produtos onde se tem um valor contido na moeda pela possibilidade de realizar trocas seguras, logo a relação entre os produtos e serviços fornecidos e a possibilidade de comprar 
 utilizando a moeda Iroha Money tornam essa moeda valiosa.
  <br><br> <b><i>Sobre as garantias</i></b><br>
  Uma das garantias de uso da moeda em relação à rede e aos produtos é a própria entidade Iroha em si que tem compromisso e deveres com os usuários da rede, sendo ainda que os produtos e a rede são a fonte primaria de receita e de valor da Iroha 
 criando assim a necessidade da manutenção de determinado serviço.<br>
 Outra garantia é a própria rede em si que, por ter acesso ao código de uma rede distribuída e com a possibilidade de fornecer serviços de maneira segura e independente podem optar por continuar a operar dentro da rede Iroha mesmo que a companhia Ihora em si 
 tenha eventuais problemas ou instabilidades. Ou seja, mesmo que a Iroha como empresa possa ter eventuais dificuldades a rede Iroha em si por ser distribuída e oferecer um serviço estruturado e de qualidade não sofrera nenhuma perda em seu lastro nem em sua 
 garantia perante a usabilidade da rede, mantendo assim sua garantia de uso.<br> 
 <br><br> <b><i>O valor da Iroha</i></b><br>
  Visto os lastros e garantias que a moeda tem podemos então começar a precificar um valor nela, ter uma garantia na moeda ao qual você sabe que poderá comprar e usufruir de seu patrimonio seja utilizando os serviços da rede ou mesmo os produtos vendidos pela 
  loja e seus participantes é o que torna a moeda uma moeda de verdade, uma moeda com utilidade e confiança para ser utilizada por qualquer pessoa que queira uma moeda forte e confiável.<br>
 Logo quanto maior a rede e seus serviços maior sera seu valor, e mesmo que inicialmente a Iroha venda moedas isso não ocorrera para sempre tendo em vista que o número de moedas e limitado e as demais moedas que temos são inflacionarias necessitando de 
  uma quantidade sempre maior de reais ou dolares, ou outra moeda para comprar a mesma quantidade de moedas Iroha Money.<br>
                           
                            
                        </p>   
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="7">Funcionamento geral da rede Iroha.</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0"> 
                             O funcionamento da rede Iroha é fruto de grandes inovações que possibilitarão o uso de nós independentes, sistema de corrente regenerativo, auto-auditoria da rede, processamento distribuído em rede entre outros avanços que o modelo proposto para a rede Iroha traz.
 

  <br><br> <b><i>Sobre os nós</i></b><br>
  <p> Na rede Iroha como já falado temos grandes inovações e entre as maiores esta a capacidade de se ter nós independentes e com isso a possibilidade de oferecer futuramente transações offline com os corretos dispositivos, isso funciona por que na 
  rede iroha o valor da conta do cliente é uma proporção do montante total da rede que ele possui e com isso cada nó tem sua própria chave, isso significa que cada nó pode tem um montante de moedas diferentes e mesmo assim manter sua validade e confiabilidade
 sendo esses valores frutos de uma divisão entre a rede e assim possibilitando facilmente uma auditoria da rede sobre esses valores e transações realizadas.
  <br>Isso aumenta drasticamente a segurança e diminui drasticamente os custos já que é impossível ter diferenças temporais no sistema como os sistemas comuns onde é possível fazer transações diferentes no mesmo bloco necessitando com isso diversas validações 
  adicionais.<br>Basicamente a rede inicia com o nó principal e os nós seguintes pedem uma divisão de um nó principal, quando isso acontece o valor do nó principal é reduzido pela metade e agora os dois nós tem uma proporção igual de moedas. Agora temos dois 
 nós em operação e então começa um processo de auto-auditoria da rede, onde os nós começam a pedir e verificar as transações de outros nós da rede onde isso somente é possivel pois cada nó tem uma senha independente para cada bloco que ao realizar uma transação 
  renova essa senha fazendo com que a senha anterior possa ser disponibilizada aos nós da rede . Agora já temos diversos nós conetados e realizando auditorias, temos também uma proporção de moedas em cada nodo e temos o histórico de verificação 
 das transações de cada nó da nossa rede já que os valores dos nós  são espelhados nos outros nós da rede.
 <br> Logo podemos ter a certeza que os dados de cada nó estão assegurados na rede e que além disso eles são verificáveis com as transações já feitas armazenadas em diferentes locais, portanto mesmo que o nó seja desligado ou ocorra um problema/punição 
  o valor que era contido naquele nó não sera perdido, pois é possível realocável aqueles blocos verificados para os outros nós reequilibrando a balança/% em relação ao total de irohas disponíveis. Isso permite que cada nó seja autossuficiente no que tange 
  a senhas e capacidade de processamento e com isso melhorando a segurança e a velocidade de transação na rede.
 <br>
 </p>
 <br><br> <p class="lead fw-normal text-muted mb-0"><b><i>realização das transações</i></b></p> 
 <p> Na rede Iroha as transações ocorrem através de um aplicativo disponibilizado para o cliente, onde o mesmo ira conter todas as senhas publicas e privadas de cada nó, além de conter o valor atualizado da quantia disponível de moedas em cada nó onde sua 
  carteira e contratos está localizado.<br>
 Os valores de sua conta ficam então divididos pelos nós que a rede Iroha alocar automaticamente e a cada envio de moedas para outra conta a senha do nó utilizado e renovada por uma nova, isso ocorre por que no sistema da rede Iroha ocorre uma 
 validação se é ou não possível realizar a transação em questão e para isso tanto a senha quanto o nonce do bloco são disponibilizados para os outros nós da rede testarem se aquela transação realizada é realmente valida.<br> Os nós da rede 
 armazenam todo um histórico de transações de seus nós filhos e irmãos e por isso caso algo de errado ocorra o sistema pode se regenerar e recuperar todas as transações que ocorreram além de poder verificar através da senha e nonce simétricos
 se a transação é real ou falsa já que com todo o histórico em mãos é possível abrir todos os blocos e simular todas as operações realizadas até a penúltima operação feita na rede, já que a última senha em uso é sempre exclusiva do cliente.<br> o cliente envia 
 também um recibo de transação adicionado a um valor de segurança para os outros nós da rede assim impedindo qualquer possibilidade de um nó utilizar a senha recebida de forma indevida, caso o nó tente algo ou por má configuração rode 
 fora dos padrões estabelecidos ele recebera severas punições e poderá ser excluído permanente da rede.


  </p>
<br><br> <p class="lead fw-normal text-muted mb-0"><b><i>diversificação e divisão dos nós</i></b></p>
  <p> Outra tecnologia desenvolvida para a rede Iroha que traz grandes melhorias na segurança e na velocidade das transações é a capacidade de divisão do montante de moedas entre os nós onde a cada divisão o nó doador reduz seu valor da moeda pela metade e passa para o novo nó
 filho que está a requisitar, isso significa que a cada divisão feita a capacidade da 
 rede de verificar a autenticidade das transações aumenta, a segurança da carteira aumenta pois cada nó contem uma senha individual que é usada somente para ele, ainda com esse novo sistema contamos além de segurança e velocidade uma maior 
  autonomia em cada nó pois é possível balancear a carga das transações a cada nó aumentando a velocidade da rede e sua eficiência.<br> Outro ponto que essa nova tecnologia traz é a capacidade de realizar transações offline com dispositivos 
  autorizados, pois como nesse sistema é possível utilizar diversos blocos e senhas em cada nó também é possível padronizar múltiplas chaves de menor valor que podem ser trocadas entre os usuários quando estiverem em modo offline.<br>
 Esse processo funciona utilizando as chaves como pequenas moedas individuais como, por exemplo, quando você vai até o supermercado e ao comprar um item paga com uma nota de 5 reais, uma de 2 reais  e mais uma moeda de 50 centavos para ao total 
 somar o valor de 7 reais e 50 centavos, com esse modelo isso também se torna possível utilizando um dispositivo que possa autentificar essa chave padrão.<br>Para isso os valores de chave offline são retirados da conta online e convertidos 
  em diversas chaves menores que podem individualmente abrir esses pequenos blocos, essas chaves são passadas para um dispositivo que contem um fator de autenticidade e segurança, ao realizar transações offline as chaves são trocadas, e quando 
  o cliente tem acesso a internet novamente ele utiliza essas chaves para enviar o valor corrente para sua conta.<br>O sistema em si tem a garantia de não repetição das chaves pelo dispositivo que quando online pode sincronizar as transações já feitas,
 além disso a cada transação já realizada é gerado uma nova senha para o novo bloco impossibilitando utilizar a mesma chave para o bloco e assim não havendo possibilidade de utilizar ou disseminar a mesma chave varias vezes, ao passo que transações 
 já feitas disponibilizam a penúltima chave para validar a transação e assim impedindo a disseminação do bloco.

 </p>
 <br><br> <p class="lead fw-normal text-muted mb-0"><b><i>verificações de segurança</i></b></p>
  <p>
 A segurança é a preocupação principal em uma transação financeira e por isso como já citado foi criado diversos mecanismos para garantir o melhor desempenho e segurança no sistema da rede.<br>
  Dentre isso o ponto principal para garantir a segurança é a capacidade de realizar verificações sobre as transações realizadas pelos nós, essa verificação e feita com um histórico dos blocos e operações já feitas 
  onde é possível refazer todas as transações anteriores do nó, isso é possivel pois como existem diferentes nós em diferentes regiões onde cada nó recebe a ordem e o comprovante em um tempo diferente fazendo com que 
  ao enviar a ordem + um número de validação o nó escolhido não tenha como saber qual é a ordem que o cliente está escolhendo, isso ocorre para impedir que o nó possa utilizar a senha de forma indevida já que se ele tentar
  mudar a ordem isso automaticamente ira causar um erro de verificação quando os outros nós tentarem verificar a transação, o que em última analise pode retirar o bloco daquele nó para garantir a integridade do sistema.<br>
 O modelo de validação tem como saber se a inconsistência foi causada pelo cliente ou pelo nó pois é verificável entre a ordem e o número de autentificação, em geral, a exclusão do bloco do nodo rebalanceia o valor para outro nó não 
  causando nenhuma inconsistência entre os valores da rede.<br>Como o mecanismo de verificação se baseia em nós com autonomia propria é possível realizar estágios de verificação antes da tentativa de transação, esse estagio é feito de 
  forma individual no nó e tem por padrão enviar uma ordem de confirmação para a transação, esse arquivo contem uma chave geral que abre um bloco em outro nó especificado pelo cliente, logo se o bloco seguro do outro nó for aberto e retornado a chave 
 compatível com o arquivo de configuração segura dada pelo cliente então a operação pode ser realizada com a garantia de que a operação é real e verificável.<br>Com isso é possível evitar erros partindo do nó e erros partindo do cliente. 
  </p>
 <br><br><p class="lead fw-normal text-muted mb-0"> <b><i>auto-auditoria</i></b></p>
 <p>
  Outro ponto de segurança é o sistema de auto-auditoria, esse mecanismo funciona como o espelhamento das operações realizadas pelos nós, além de realizar a verificação aleatória dos valores de um bloco e status dos serviços em atividade e contratos ativos de cada nó. 
 <br>Esse mecanismo é um garantidor e serve tanto para gerar um bom balanceamento de carga no sistema já que é possível averiguar o tempo de resposta e disponibilidade como também um garantidor de operações em que se um nó não está cumprindo com seus contratos ou está com 
 novas configurações de hardware ou nova disponibilidade de recursos é possível fazer uma realocação mais rápida e mais eficiente ao garantir por diversos terceiros que ele realmente esta cumprindo com sua palavra.
 </p>

                          
                        </p>
                    </div>
                </div>
            </section>
             
            <!-- About section two-->
            <section class="py-5">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="8">Sobre os serviços prioritários ofertados pela rede Iroha. </h2><br><br>
                        <p class="lead fw-normal text-muted mb-0"> 
                            A rede Iroha oferece serviços prioritários da rede sendo eles o fornecimento de software atualizado para a transação da Iroha Money,
                              os motores de busca da rede, os sistemas de integração para processamento e armazenamento de arquivos.<br>
                             A rede ainda tem a venda das moedas e itens na loja da rede que podem ser comprados com a moeda iroha Money.<br>
                             A rede em si tem serviços que funcionam a partir da demanda que é gerada na rede e por isso as atualizações e criação de 
                             funcionalidades que irão ser implementadas na rede são na maior parte ferramentas para a integração e optimização dos 
                              sistemas que são demandados a partir do uso dos clientes da rede.<br>
                              Os sistemas são disponibilizados com a intenção de facilitar ao máximo a instalação e atualização dos mesmos, sendo sempre que 
                             possível a disponibilização de versões autoconfiguráveis cabendo ao usuário apenas rodar o script da versão mais atual disponível 
                             do sistema que é desejado.<br>A utilização desses sistemas por parte dos clientes se da pela API da rede e seus serviços com 
                              sockts para usos mais intensos ou de baixa latência, cada sistema tem sua documentação e instruções para a chamada e envio das
                             requisições de serviços da rede além do valor da taxa de requisição do mesmo.
                        
                        </p>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container w-75">
                    <div class=" ">
                        <h2 class="fw-bolder text-center"id="9">Sobre os serviços de terceiros ofertados pela rede Iroha.</h2><br><br>
                        <p class="lead fw-normal text-muted mb-0">
                            O serviço ofertado pelos terceiros podem ser encontrados na ferramenta de busca da rede, a rede não se responsabiliza pela 
 prestação de tais serviços apenas os auxilia, oferecendo suporte a integração dos mesmos com as ferramentas já disponibilizadas pela rede 
  para que rodem suas aplicações dentro dos servidores da rede iroha.<br> A rede então oferece aos terceiros o uso da moeda Iroha Money, a 
  indexação de seu serviço na ferramenta de pesquisa da rede Iroha, sistema de ranqueamento de serviço no livro de oferta da rede para automação 
 de compra e vendas, sistema de garantia em serviços feitos em parceria com a organização Iroha.<br>
  Os sistemas e politicas aplicadas aos terceiros estão em constante alteração e podem mudar com a criação de novas regras e novos sistemas disponibilizados.
                            
                        </p>   
                    </div>
                </div>
            </section>

            <br><br>
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
