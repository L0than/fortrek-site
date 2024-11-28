<?php

include_once "../conexao/bdconnect.php";

if($_POST['cxnome, cxcep, cxemail, cxidade, cxrua, cxcidade, cxbairro, cxestado'] != "")
{
$nome = $_POST['cxnome'];
$email = $_POST['cxemail'];
$idade = $_POST['cxidade'];
$cep = $_POST['cxcep'];
$rua = $_POST['cxrua'];
$cidade = $_POST['cxcidade'];
$bairro = $_POST['cxbairro'];
$uf = $_POST['cxestado'];


$sql = "insert into tbcliente (cliente, email, idade, cep, rua, bairro, cidade, uf)
values
('$nome','$email','$idade', '$cep', '$rua', '$cidade', '$bairro', '$uf');";

$query = mysqli_query($conn, $sql);


echo "<script>
alert('Dados cadastrados 👍');
window.location.href = '../view/cadastroCliente.php'
</script>";
}
else{
    echo "<script>
    alert('Dados não cadastrados 👎')
    location.href = '../view/cadastroCliente.php'</script>";
}
?>