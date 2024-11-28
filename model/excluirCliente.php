<?php

include_once "../conexao/bdconnect.php";

$id = $_GET['id'];

$sql = "delete from tbcliente where cod = '$id'; ";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
    alert('Dados excluidos 👍')
    window.location.href = '../view/cadastroCliente.php';
    </script>";
} else {
    echo "<script>
    alert('Dados não excluidos 👎')
    window.location.href = '../view/cadastroCliente.php';
    </script>";
    
}
