<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- Cabeçalho -->
    <div class="cab">
        <div class="logo"><img src="../image/athena.png" class="img-logo"></div>
        <div class="nome"><h1 class="athena">Athenas - Prestadora de serviços </h1></div>
    </div>

    <div class="menu">
        <ul>
            <li class="pad-menu"><a href="index.html" class="link-menu">Início</a></li>
            <li><a href="login.html" class="link-menu">Login</a></li>
            <li><a href="pagamento.html" class="link-menu">Pagamento</a></li>
            <li><a href="cadastro.html" class="link-menu">Cadastre-se</a></li>
            <li><a href="serviços.html" class="link-menu">Serviços</a></li>
            <li><a href="funcionarias.html" class="link-menu">Funcionárias</a></li>
        </ul>
    </div>

    <div class="container">

        <form action="" class="form">

            <div class="row">

                <div class="col">

                    <h3 class="title"> Perfil de alteração </h3>

                    <div class="campos">
                        <span>Nome Completo:</span>
                        <input type="text" placeholder="Digite aqui" class="dados" autofocus>
                    </div>
                    <div class="campos">
                        <span>Email:</span>
                        <input type="email" placeholder="cliente@gmail.com" class="dados">
                    </div>
                    <div class="campos">
                        <span>Telefone:</span>
                        <input type="number" placeholder="(61) 9 0000-0000" class="dados">
                    </div>
                    <!-- <div class="campos">
                        <span>Data de nascimento:</span>
                        <input type="date" placeholder="caracter especial e números" class="dados">
                    </div> -->
                    <div class="campos">
                        <span>Senha:</span>
                        <input type="password" placeholder="caracter especial e números" class="dados">
                    </div>
                </div>

            </div>

            <input type="submit" value="Finalizar Alteração" class="botao">

        </form>

    </div>
    
    <div class="rodape">
        <h2 class="fale">Fale Conosco:</h2>
        <h4 class="contatos">Email: mulher.athenas@gmail.com</h4>
        <h4 class="contatos">Telefone: (61) 9 0000-0000</h4>
    </div>
</body>

</html>