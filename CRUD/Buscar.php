<?php 
    session_start();
    include_once 'conexao.php';
   if($_SESSION['TIPOUSER'] == 'ADM') { 
    include_once 'pesquisar.html';
    $NomeComp_aluno = $_POST['nomeCompleto'];
    $cpf = $_POST['cpf'];
            $sql = "SELECT `matricula_aluno`, `Nome_aluno`, `Sobrenome_aluno`,`cpf`,`Genero`, `Nascimento`, `Endereco`,`Numero`,`Cep`,`Cidade`, `Email`, `Telefone`, `PqEntrar` FROM `aluno` WHERE `Sobrenome_aluno` LIKE '$NomeComp_aluno'";
            $qur = mysqli_query($conn, $sql);
            $NomeComp_aluno = "%".$NomeComp_aluno."%";
              }
              elseif($_SESSION['TIPOUSER'] == 'ALUNO'){
                      $id = $_SESSION['ID_USER'];
                      $sql = "SELECT `matricula_aluno`, `Nome_aluno`, `Sobrenome_aluno`,`cpf`,`Genero`, `Nascimento`, `Endereco`,`Numero`,`Cep`,`Cidade`, `Email`, `Telefone`, `PqEntrar` FROM `aluno` WHERE `matricula_aluno`= '$id'";
                      $qur = mysqli_query($conn, $sql);
                      
              }
              else{
               echo"VOCE NAO TEM PERMISSAO PARA ACESSAR ESSA PAGINA";
               echo"<br>PAGINA PARA ALUNOS E ADIMINISTRADORES";
              }
?>
<!Doctype HTML>
<html>
<head>
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</head>
<body>

<?php
if(($_SESSION['TIPOUSER'] == 'ADM') || ($_SESSION['TIPOUSER'] == 'ALUNO')) {
            echo"<table class='table'>

                <table class='table'>
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
                 </tr>";


        
             $sql = 'SELECT `matricula_aluno`, `Nome_aluno`, `Sobrenome_aluno`,`cpf`,`Genero`, `Nascimento`, `Endereco`,`Numero`,`Cep`,`Cidade`, `Email`, `Telefone`, `PqEntrar` FROM `aluno`';
         
            foreach ($qur as $row) {
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
                echo "<td><a href='atualizar.php?matricula_aluno=" .$row['matricula_aluno']. "'"."class='btn btn-info'> Atualizar</a></td>";
                echo "<td><a href='delete.php?matricula_aluno=".$row['matricula_aluno']."'"."class='btn btn-danger'> Deletar</a></td>";
                echo "</tr>";
            }
           }
           else{
           }
            echo "</table>";
$conn = null;
?>
<input class="btn btn-danger" type="button" value = "SAIR" onclick="window.location.href='http://faculdademineira.atwebpages.com/CRUD/Sair.php';">
</body>
</html>
