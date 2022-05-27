<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="styleSheet" href="../lib/fontawesome-6.1.1/css/all.min.css"/>
    <script src="../lib/fontawesome-6.1.1/js/all.min.js"></script>
    <style>
       tr:nth-child(even) {
          background-color:#cccccc;
       }
       tr:nth-child(odd) {
           background-color:#ffff;
       }
    </style>
</head>

<body>
<?php
require_once '../dao/ClienteDAO.php';
include '../js/funcao.php';
$clienteDAO = new ClienteDAO();
$clientes = $clienteDAO->findAll();
echo "<table border='1'>";
echo "  <tr>";
echo "      <th>Nome</th>";
echo "      <th>Email</th>";
echo "      <th>Telefone</th>";
echo "      <th>Password</th>";
echo "      <th>Excluir</th>";
echo "      <th>Editar</th>";
echo "  </tr>";

foreach ( $clientes as $cliente ) {
    echo "<tr>";
    echo "  <td> {$cliente["nome"]}</td>";
    echo "  <td> {$cliente["email"]} </td>";
    echo "  <td> {$cliente["telefone"]} </td>";
    echo "  <td> {$cliente["password"]} </td>";
    echo "  <td align='center'><a href='../controller/excluirClienteController.php?id={$cliente["id"]}'><i class='fa-solid fa-trash-can'></a></i></td>";
    echo "  <td align='center'><a href='formAlterarCliente.php?id={$cliente["id"]}'><i class='fa-solid fa-pen-to-square'></a></i></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
