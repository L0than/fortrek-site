<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Área</title>
    <!-- Icones Google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Js correios-->
    <script type="text/javascript" src="../js/cep.js"></script>
</head>

<body>

    <!-- Navbar simpler para Mobile e Desk -->
    <br>
    <nav class="transparent z-depth-0">
        <div class="nav-wrapper container">
            <a href="#" class=" brand-logo teal-text text-darken-1 center">Clientes</a>
            <a href="../index.htm" class=" grey-text text-darken-4"><i class="material-icons">arrow_back</i></a>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>

    <!-- Form cadastro -->
    <div class="container">
        <div class="container">
            <div class="row">
                <form class="col s12" action="../model/inserirCliente.php" method="POST">
                    <h4>CADASTRAR</h4>
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Nome do cliente" id="first_name" type="text" class="validate" name="cxnome">
                            <label for="first_name">Cliente</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Idade do cliente" id="last_name" type="text" class="validate" name="cxidade" maxlength=3>
                            <label for="last_name">Idade</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="E-mail do cliente" id="email" type="text" class="validate" name="cxemail">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="CEP" id="cep" type="text" class="validate" name="cxcep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);">
                            <label for="cep">CEP do cliente</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Rua" id="rua" type="text" class="validate" name="cxrua">
                            <label for="rua">Rua do cliente</label>
                        </div>
                        <div class="input-field col s2">
                            <input placeholder="Estado" id="uf" type="text" class="validate" name="cxestado">
                            <label for="uf">Estado do cliente</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Cidade do cliente" id="cidade" type="text" class="validate" name="cxcidade">
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Bairro do cliente" id="bairro" type="text" class="validate" name="cxbairro">
                            <label for="bairro">Bairro</label>
                        </div>
                    </div>
                    <button type="submit" name="action" class="btn waves-effect waves-light white-text">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <!-- Form consulta -->
    <div class="contrainer">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="input-field col s12">
                        <form action="../view/mostrarConsulta.php" method="POST">
                            <h4>CONSULTAR</h4>
                            <label for="first_namec">Cliente</label>
                            <input placeholder="Nome do cliente" id="first_namec" type="text" class="validate" name="cxnome">
                            <button type="submit" name="action" class="btn waves-effect waves-light white-text">Consultar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>