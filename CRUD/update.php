<?php
include_once 'conexao.php';
    $matricula_aluno = $_POST['lmatricula'];
    $Sobrenome_aluno = $_POST['lname'];
    $Nome_aluno = $_POST['pname'];
    $Nascimento = $_POST['tnasc'];
    $Endereco = $_POST['Clogend'];
    $Numero = $_POST['Clognum'];
    $Cep = $_POST['Clogcep'];
    $Email = $_POST['lmail'];
    $Telefone = $_POST['ltel'];
    $valor_form = $_POST['B'];
    $PqEntrar = $_POST['tmsg'];
    $Cidade = $_POST['ccidade'];
    $Genero = $_POST['sexo'];
    $cpf = $_POST['cpf'];
$sql = "UPDATE `aluno` SET `Nome_aluno`='$Nome_aluno',`Sobrenome_aluno`='$Sobrenome_aluno',`cpf`='$cpf',`Nascimento`='$Nascimento',`Endereco`='$Endereco',`Numero`='$Numero',`Cep`='$Cep',`Telefone`='$Telefone',`PqEntrar`='$PqEntrar',`Cidade`='$Cidade',`Genero`='$Genero',`Email`='$Email' WHERE `matricula_aluno`='$matricula_aluno'";
 $qury = mysqli_query($conn, $sql);

  echo"<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com/index.php'>";

?>
