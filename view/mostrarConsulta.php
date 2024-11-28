<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consul - Área</title>
    <!--Icones Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/custom.css" />
</head>

<body>

    <?php

    include_once "../conexao/bdconnect.php";

    $nome = $_POST['cxnome'];

    $sql = "select * from tbcliente where cliente = '$nome';";

    $query = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_array($query);


    if ($nome == $linha['cliente']) {
    ?>

        <!-- Navbar -->
        <br>
        <nav class="transparent z-depth-0">
            <div class="nav-wrapper container">
                <a href="#" class=" brand-logo teal-text text-darken-1 center">Consulta</a>
                <a href="../view/cadastroCliente.php" class=" grey-text text-darken-4"><i class="material-icons">arrow_back</i></a>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- Form da consulta -->
        <div class="container">
            <div class="container">
                <div class="row">
                    <h4>RESULTADO DA CONSULTA</h4>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" disabled="" name="cxnome" value="<?php echo $linha['cliente']; ?>">
                            <label for="first_name">CEP do cliente</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="idade" type="number" disabled="" name="cxidade" value="<?php echo $linha['idade']; ?>">
                            <label for="idade">Idade</label>
                        </div>
                        <div class="input-field col s12">
                        <input id="email" type="text" disabled="" name="cxemail" value="<?php echo $linha['email']; ?>">
                        <label for="email">E-mail</label>
    </div>
                        <div class="input-field col s4">
                            <input id="cep" type="text" disabled="" name="cxcep" value="<?php echo $linha['cep']; ?>">
                                <label for="cep">CEP do cliente</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="rua" type="text" disabled="" name="cxrua" value="<?php echo $linha['rua']; ?>">
                                <label for="rua">Rua do cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="uf" type="text" disabled="" name="cxestado" value="<?php echo $linha['uf']; ?>">
                                <label for="uf">Estado do cliente</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="cidade" type="text" disabled="" name="cxcidade" value="<?php echo $linha['cidade']; ?>">
                                <label for="cidade">Cidade</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="bairro" type="text" disabled="" name="cxbairro" value="<?php echo $linha['bairro']; ?>">
                                <label for="bairro">Bairro</label>
                            </div>
                        </div>
                    </div>
                    <a class="btn waves-effect waves-light white-text red lighten-3" href="../model/excluirCliente.php?id=<?php echo $linha['cod']; ?>">Excluir</a>
                    <a class="btn waves-effect waves-light black-text yellow lighten-2" href="mostrarAlteracao.php?id=<?php echo $linha['cod']; ?>">Alterar</a>

                    </form>
                </div>
            </div>
        </div>

    <?php } else {
        echo "<script>
        alert('faz direito por favor 👎')
        window.location.href = '../view/cadastroCliente.php'
        </script>";
    }
    ?>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>