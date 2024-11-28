<?php

include_once("../conexao/bdconnect.php");

if ($_POST['cxnome, cxidade, cxemail cxcep, cxrua, cxcidade, cxbairro, cxestado'] != '') {
    $cod = $_POST['cod'];
    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $idade = $_POST['cxidade'];
    $cep = $_POST['cxcep'];
    $rua = $_POST['cxrua'];
    $cidade = $_POST['cxcidade'];
    $bairro = $_POST['cxbairro'];
    $uf = $_POST['cxestado'];


    $sql = "update tbcliente set cliente = '$nome', email = '$email', idade = '$idade', cep = '$cep', rua = '$rua', cidade = '$cidade', bairro = '$bairro', uf = '$uf' where cod = '$cod'";

    $query = mysqli_query($conn, $sql);

    echo "<script>
    alert('Dado alterados com sucesso');
    window.location.href = '../view/cadastroCliente.php'; 
    </script>";

} else {
    echo "<script>
    alert('Dados inválido');
    window.location.href = '../view/cadastroCliente.php'
    </script>";
}
