<?php 
include_once('conexao.php');
$TIPO = $_POST['lADM'];
?>
<!Doctype HTML>
<html>
<head>
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</head>
<body>
<table class="table">
<tr>
    <th>Matricula</th>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>CPF</th>
    <th>Genero</th>
    <th>Data Nascimento</th>
    <th>Endereco</th>
    <th>Numero</th>
    <th>CEP</th>
    <th>Cidade</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>PqEntrar</th>
    <th>Atualizar</th>
    <th>Deletar</th>


</tr>
<?php
  
  if($TIPO == 'ADM') {  
            $sql = 'SELECT `matricula_aluno`, `Nome_aluno`, `Sobrenome_aluno`,`cpf`,`Genero`, `Nascimento`, `Endereco`,`Numero`,`Cep`,`Cidade`, `Email`, `Telefone`, `PqEntrar` FROM `aluno`';
            foreach ($conn->query($sql) as $row) {
                echo "<tr>";
                echo "<td>".$row['matricula_aluno'] . "</td>";
                echo "<td>".$row['Nome_aluno'] . "</td>";
                echo "<td>".$row['Sobrenome_aluno'] . "</td>";
                echo "<td>".$row['cpf'] . "</td>";
                echo "<td>".$row['Genero'] . "</td>";  
                echo "<td>".$row['Nascimento'] . "</td>";  
                echo "<td>".$row['Endereco'] . "</td>";
                echo "<td>".$row['Numero'] . "</td>";  
                echo "<td>".$row['Cep'] . "</td>";
                echo "<td>".$row['Cidade'] . "</td>";
                echo "<td>".$row['Email'] . "</td>";  
                echo "<td>".$row['Telefone'] . "</td>";
                echo "<td>".$row['PqEntrar'] . "</td>";  
                echo "<td><a href='atualizar.php?matricula_aluno=" .$row['matricula_aluno']. "'"." class='btn btn-info'> Editar</a></td>";
                echo "<td><a href='delete.php?matricula_aluno=".$row['matricula_aluno']."'"."class='btn btn-danger'> Apagar</a></td>";
                echo "</tr>";
            }
           }
            echo "</table>";
        $conn = null;
        
?>
<input class="btn btn-success" type="button" value = "cadastrar" onclick="window.location.href='../Inscricao/Inscricao.php';">
<input class="btn btn-danger" type="button" value = "SAIR" onclick="window.location.href='http://faculdademineira.atwebpages.com/CRUD/Sair.php';">
</body>
</html>
