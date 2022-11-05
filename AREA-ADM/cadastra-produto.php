<?php

$categoria = $_POST['categoria'];

include_once "../conexao.php";

$pdo = Conexao::conectar();

$stmt = $pdo->prepare("insert into tbcategoria values
(null, '$categoria')");

$stmt->execute();

header("location: ./area-produtos.php");

?>