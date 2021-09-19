<?php
   session_start();
   include_once '../CRUD/conexao.php';
    $pssw = $_POST['Ipass'];
    $pssw2 = $_POST['Ipass2'];
    $NomeComp = $_SESSION['Nome'];
    $cpf = $_SESSION['cpf'];
    $sql = "SELECT `matricula_aluno` FROM `aluno` WHERE `cpf`= '$cpf' AND `Sobrenome_aluno` = '$NomeComp'";
    $qur = mysqli_query($conn, $sql);
    
    $sql = "SELECT `Id_User`, `Usuario`, `Email`, `Senha`, `TIPO_USER` FROM `usuarios`";
    foreach ($qur as $row) {
            $ID = $row['matricula_aluno'];
    }
            $sqli = "UPDATE `usuarios` SET `Senha`= '$pssw' WHERE Id_User = '$ID'";
            $qury = mysqli_query($conn, $sqli);

    
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com'>";
?>