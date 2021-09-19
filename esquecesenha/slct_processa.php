<?php 
    session_start();
    include_once '../CRUD/conexao.php';
    $NomeComp = $_POST['INome'];
    $cpf = $_POST['lcpf'];
    $_SESSION['Nome'] = $NomeComp;
    $_SESSION['cpf'] = $cpf;
    
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com/esquecesenha/New_pssw.html'>";
    
?>