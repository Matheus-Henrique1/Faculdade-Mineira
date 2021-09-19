<?php
    session_start();
    include_once 'conexao.php';
     
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
    $Usuario = $_SESSION['USERcad']; 
    $Email = $_SESSION['EMAILcad'];  
    $Senha = $_SESSION['SENHAcad'];  
   
   
    $sql = "INSERT INTO `aluno`(`cpf`, `Nome_aluno`, `Sobrenome_aluno`, `Nascimento`, `Endereco`,`Numero`,`Cep`, `Email`, `Telefone`, `PqEntrar`, `Cidade`, `Genero`) 
    VALUES ('$cpf','$Nome_aluno','$Sobrenome_aluno','$Nascimento','$Endereco','$Numero','$Cep','$Email','$Telefone','$PqEntrar','$Cidade','$Genero');";
    $qur = mysqli_query($conn, $sql);
    
    $sqli = "INSERT INTO `usuarios`(`Usuario`, `Email`, `Senha`,`TIPO_USER`) VALUES ('$Usuario','$Email','$Senha','ALUNO')";
    $qury = mysqli_query($conn, $sqli);
    
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com'>";
    
    





    ?>
    <html>
        <head>

        </head>
        <body>
        
        </body>
    </html>