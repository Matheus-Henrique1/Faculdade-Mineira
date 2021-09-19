<?php
include_once 'conexao.php';
$matricula_aluno = $_GET['matricula_aluno'];
$sql = "DELETE FROM `aluno` WHERE `aluno`.`matricula_aluno` = $matricula_aluno";
echo $sql;
echo $maticula_aluno;
$qur = mysqli_query($conn, $sql);
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com/CRUD/ListaCadastro.php'>";
?>
