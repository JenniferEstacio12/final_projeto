<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="cab">
        <div class="logo"><img src="../image/athena.png" class="img-logo"></div>
        <div class="nome"><h1 class="athena">Athenas - Prestadora de serviços </h1></div>
    </div>

    <div class="menu">
        <ul>
            <li class="pad-menu"><a href="index.html" class="link-menu">Início</a></li>
            <li><a href="login.html" class="link-menu">Login</a></li>
            <li><a href="pagamento.html" class="link-menu">Pagamento</a></li>
            <li><a href="formCadastrarCliente.php" class="link-menu">Cadastre-se</a></li>
            <li><a href="serviços.html" class="link-menu">Serviços</a></li>
            <li><a href="funcionarias.html" class="link-menu">Funcionárias</a></li>
        </ul>
    </div>

    <div class="container">

        <form id="formCadastroCliente" action="../controller/cadastrarClienteController.php" method="post">

            <div class="row">

                <div class="col">

                    <h3 class="title"> Faça seu cadastro </h3>

                    <div class="campos">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" name="nome" placeholder="Digite aqui" class="dados" autofocus>
                    </div>
                    <div class="campos">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="cliente@gmail.com" class="dados">
                    </div>
                    <div class="campos">
                        <label for="telefone">Telefone:</label>
                        <input type="number" name="telefone" id="telefone" placeholder="(61) 9 0000-0000" class="dados">
                    </div>
                    <div class="campos">
                        <!--<span>Data de nascimento:</span>
                        <input type="date" placeholder="caracter especial e números" class="dados">
                    </div>-->
                    <div class="campos">
                        <label for="senha">Senha:</label>
                        <input type="password" placeholder="caracter especial e números" class="dados">
                    </div>
        
                </div>

            </div>

            <input type="submit" value="Cadastrar" class="botao">

        </form>

    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class = "campos" style="text-align: center;">
            </div>
        </div>
    </div>
        <?php
if ( isset( $_GET["msg"] ) ) {
    echo $_GET["msg"];
}
?>
    </div>
    <script>
        $(document).ready(function(){
            // $('#cpf').mask('000.000.000-00');
            $('#tel').mask('(00) 00000-0000');
        });
    </script>
    <!-- <script>
        $( "#formCadastroCliente" ).validate({
            rules: {
                nome: {
                    required: true,
                },
                // cpf: {
                //     required: true,
                //     minlength: 11
                // }
            },
            messages: {
                cpf: {
                    required: "Campo obrigatório",
                    minlength: jQuery.validator.format("At least {0} characters required!"),
                },
                nome: {
                    required: "Campo obrigatório",
                }

            }
        });
    </script> -->

    <!--<div class="rodape">
        <h2 class="fale">Fale Conosco:</h2>
        <h4 class="contatos">Email: mulher.athenas@gmail.com</h4>
        <h4 class="contatos">Telefone: (61) 9 0000-0000</h4>
    </div>-->

</body>

</html>