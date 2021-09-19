<?php
    session_start();
    include_once 'conexao.php';
    
    $Usuario = $_POST['Iuser'];
    $Email = $_POST['Imail'];
    $Senha = $_POST['Ipassw'];
    $_SESSION['USERcad'] = $Usuario;
    $_SESSION['EMAILcad'] = $Email;
    $_SESSION['SENHAcad'] = $Senha;
    
    
    echo "<meta HTTP-EQUIV='Refresh' CONTENT='0.5;URL=http://faculdademineira.atwebpages.com/Inscricao/Inscricao.php'>";
    

   

        




    ?>
    <html>
        <head>

        </head>
        <body>
        
        </body>
    </html>