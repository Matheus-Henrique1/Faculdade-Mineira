<?php
        session_start();
   ?>
<?php 
include_once 'conexao.php';
$Usuario = $_POST['Iuser'];
$Senha = $_POST['Ipassw'];
    
    
    if(empty($_POST['Iuser'])||empty($_POST['Ipassw'])){
     echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com/index.php'>";
     echo"INDEX";
    }
    
    
    $sqlit = "SELECT * FROM `usuarios` WHERE `Usuario`='$Usuario' and Senha = '$Senha'";
    $qury = mysqli_query($conn, $sqlit);
    
    $resultado = mysqli_num_rows($qury);
    echo $resultado. "<br><br><br>";

    if ($resultado >= 1){
         $sql = "SELECT `Id_User`,`Usuario`, `Senha`, `TIPO_USER` FROM `usuarios` WHERE `Usuario`='$Usuario' and Senha = '$Senha'";
     $qur = mysqli_query($conn, $sql);
    foreach ($qur as $row) {
    
       /* echo "USUARIO " . $row['Usuario'] . "<br>";
        echo "SENHA " . $row['Senha'] . "<br>";
        echo "TIPO" . $row['TIPO_USER'] . "<br>";*/
        $TIPO = $row['TIPO_USER'];
        $ID_USER = $row['Id_User'];
        $_SESSION['TIPOUSER'] = $TIPO;
        $_SESSION['ID_USER'] = $ID_USER;
        
        if ($TIPO == 'ADM'){
                echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com/CRUD/EntraADM.html'>";
        }else{
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://faculdademineira.atwebpages.com/CRUD/Buscar.php'>";    
        }
    }
    }else{
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4;URL=http://faculdademineira.atwebpages.com/index.php'>";
            echo"ERRO";
            
    }    
    /*echo"USUARIO:" . $Usuario . "SENHA:" . $Senha . "<br>";*/
?>

    