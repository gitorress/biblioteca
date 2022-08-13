<?php
include 'acesso_restrito.php'
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sua Página</title>

  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

  

</head>

<body style="width:60%; position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">
  
  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Numero</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
    <?php

$result_internacao = "SELECT `nm_cliente`, `dt_nascimento`, `rua`, `bairro`, `numero`, `telefone` FROM `cliente`";

$resultado_internacao = mysqli_query($conn, $result_internacao);

while($rows_internacao = mysqli_fetch_assoc($resultado_internacao)){ ?>

    <tr>
        <td><?php echo $rows_internacao['nome']; ?></td>
        <td><?php echo $rows_internacao['dt_nascimento']; ?></td>
        <td><?php echo $rows_internacao['rua']; ?></td>
        <td><?php echo $rows_internacao['bairro']; ?></td>
        <td><?php echo $rows_internacao['numero']; ?></td>
        <td><?php echo $rows_internacao['telefone']; ?></td>
    </tr>
<?php } ?>


</tbody>
<tfoot>
<tr>
<th>Nome</th>
<th>Data de nascimento</th>
<th>Rua</th>
<th>Bairro</th>
<th>Numero</th>
<th>telefone</th>
</tr>
</tfoot>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function () {
$('#example').DataTable();
});
</script>

</body>
</html>