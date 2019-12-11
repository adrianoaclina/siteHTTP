<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />

    <title>HTTP</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">HTTP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="visao.html">Visão</a>
                    <a class="nav-item nav-link" href="cabecalhos.html">Cabeçalhos</a>
                    <a class="nav-item nav-link" href="cookies.html">Cookies</a>
                    <div class="btn-group">
                        <a href="requisicao.html" class="btn btn-secondary">Requisições</a>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="get.html">GET</a>
                            <a class="dropdown-item" href="post.html">POST</a>
                            <a class="dropdown-item" href="putedelete.html">PUT e DELETE</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="cont">
        <section class="titulo text-center">
            <h1>HTTP - Hypertext Transfer Protocol</h1>
        </section>
        <section>
            <aside>
                <h2 class="text-left">O que é ?</h2>
                <p>
                    Um protocolo de camada de aplicação para transmissão de documentos
                    hipermídia, como o HTML. Foi desenvolvido para comunicação entre
                    navegadores web e servidores web, porém pode ser utilizado para
                    outros propósitos também. Segue um modelo cliente-servidor clássico,
                    onde um cliente abre uma conexão, executa uma requisição e espera
                    até receber uma resposta. É também um protocolo sem estado ou
                    stateless protocol, que significa que o servidor não mantem nenhum
                    dado entre duas requisições (state). Apesar de ser frequentemente
                    baseado em uma camada TCP/IP, pode ser utilizado em qualquer camada
                    de transporte confiável, ou seja, um protocolo que não perde
                    mensagens silenciosamente como o UDP
                </p>
            </aside>
        </section>
        <div class="card-deck">
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Uma visão geral do HTTP</h5>
                    <p class="card-text">HTTP é um protocolo (protocol) que permite a obtenção de recursos, tais como
                        documentos
                        HTML. É a base de qualquer troca de dados na Web e um protocolo cliente-servidor,o que significa
                        que as
                        requisições são
                        iniciadas pelo destinatário, geralmente um navegador da Web. Um documento completo é
                        reconstruído a partir
                        dos diferentes sub-documentos obtidos, como por exemplo texto, descrição do layout, imagens,
                        vídeos, scripts
                        e muito mais.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="visao.html">Veja os detalhes da visão geral</a>
                </div>
            </div>
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Cabeçalhos HTTP</h5>
                    <p class="card-text">As mensagens de cabeçalho HTTP são utilizadas para realizar a descrição de
                        algum recurso
                        ou comportamento
                        do cliente ou servidor. Propriedades customizadas nos cabeçalhos utilizam o prefixo 'X-' ;
                        Outras no
                        registro IANA, cujo conteúdo original foi definido na RFC 4229. IANA também mantém o registro de
                        novas
                        propostas para mensagens de cabeçalhos HTTP.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="cabecalhos.html">Veja os detalhes dos cabeçalhos HTTP</a>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Métodos de Requisição HTTP</h5>
                    <p class="card-text">As mais diferentes requisições podem ser utilizadas pelos métodos de
                        requisições HTTP:
                        GET e POST, mas
                        também algumas requisições menos comuns pelos métodos OPTIONS, DELETE ou TRACE.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="requisicao.html">Veja os detalhes dos métodos de requisição.</a>
                </div>
            </div>
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Cookies HTTP</h5>
                    <p class="card-text">O funcionamento dos cookies é definido pela RFC 6265. Ao receber uma requisição
                        HTTP, o
                        servidor pode
                        enviarum cabeçalho Set-Cookie com a resposta. Depois, o cliente retorna o valor do cookie a cada
                        requisição ao
                        mesmo servidor na forma de um cabeçalho Cookie HTTP. O cookie também pode ser configurado para
                        expirarem
                        um
                        determinado tempo ou permanecer restrito a um domínio ou endereço específicos.</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="cookies.html">Veja os detalhes sobre os cookies HTTP</a>
                </div>
            </div>
        </div>

        <h2 class="info">Algumas informações do HTTP</h2>
        <div class="card-deck">
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Cache HTTP</h5>
                    <p class="card-text">O Cache é muito importante para websites rápidos. Este artigo descreve
                        diferentes métodos
                        de cache e como utilizar os cabeçalhos HTTP para controlá-los.</p>
                </div>
            </div>
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Respostas de códigos de status em HTTP</h5>
                    <p class="card-text">Os códigos de status do HTTP indicam quando uma requisição foi completada.
                        Códigos de
                        status são agrupados em cinco classes: Informações, respostas, respostas de sucesso,
                        redirecionamentos,
                        erros de cliente e erros de servidor.</p>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Evolução do HTTP</h5>
                    <p class="card-text">Uma breve descrição das mudanças que ocorreram no HTTP em versões mais antigas
                        para o
                        moderno HTTP/2 em diante.</p>
                </div>
            </div>
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Mensagens HTTP</h5>
                    <p class="card-text">Descreve os tipos e a estrutura das diferentes mensagens do HTTP/1.x e HTTP/2.
                    </p>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Uma sessão típica em HTTP</h5>
                    <p class="card-text">Mostra e explica o fluxo de uma sessão HTTP normal.</p>
                </div>
            </div>
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Gerenciamento de conexões em HTTP/1.x</h5>
                    <p class="card-text">Descreve os três modelos de conexão disponíveis no HTTP/1.x, seus pontos fortes
                        e fracos.
                    </p>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Controle de Acesso HTTP (CORS)</h5>
                    <p class="card-text">As requisições CORS são requisições HTTP de recursos de domínios diferentes do
                        domínio
                        que está fazendo a requisição. um exemplo é um site A (SiteA.com) realizando uma requisição de
                        uma imagem
                        por meio de um elemento img para um site B (SiteB.com/img.png). Hoje em dia encontramos o CORS
                        em grande
                        maioria das páginas webs, carregando scripts, imagens, folhas de estilos, etc.</p>
                </div>
            </div>
            <div class="card text-white bg-dark border-light">
                <div class="card-body">
                    <h5 class="card-title">Controlando a pré-busca de DNS</h5>
                    <p class="card-text">O Firefox e outros navegadores atuais utilizam a pré-busca de DNS, ou seja, o
                        navegador
                        faz a busca do nome do domínio nos links contidos numa página antes que o recurso seja
                        requisitado, como por
                        exemplo imagens, scripts e folhas de estilo. Isto tudo ocorre em segundo plano, para que quando
                        o recurso
                        necessite ser carregado, o endereço DNS já esteja resolvido. Isto diminui a latência quando, por
                        exemplo, um
                        usuário clica em um link.</p>
                </div>
            </div>
        </div>
        <h2>Ferramentas & recursos</h2>
        <p>Ferramentas que irão lhe ajudar a testar e debugar as suas requisições HTTP.</p>
        <h4><a href="https://developer.mozilla.org/pt-BR/docs/Tools">Ferramentas de desenvolvedores Firefox</a></h4>
        <p class="p3">Network monitor</p>
        <h4><a href="https://redbot.org/">RedBot</a></h4>
        <p class="p3">Uma ferramenta para visualizar seus Headers relacionados em cache.</p>
        <h4><a href="https://www.html5rocks.com/pt/tutorials/internals/howbrowserswork/">Como os navegadores
                funcionam</a></h4>
        <p class="p3">Um artigo bem abrangente sobre a parte interna dos navegadores e os fluxos de requisições via
            protocolo HTTP. O
            artigo que todos os desenvolvedores web, com certeza, devem ler.</p>
    </main>
    <script src="js/requisicoes.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>