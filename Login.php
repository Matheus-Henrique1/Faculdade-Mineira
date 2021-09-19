
<!DOCTYPE html>
<html lang ="pt-br">
    <head>
        <link rel="stylesheet" href="styleCAD.css">
        <title>Home :: Faculdade Mineira</title>
        <meta charset="utf-8"/>
        <meta name="Faculdade Mineira" content="Venha construir o seu futuro com a gente, o primeiro passo é se ingressar. A melhor faculdade do Brasil!"/>
    </head>

    <body>
    
         <form action="../CRUD/incluirlogar.php" method="POST" class="form-group">
            <fieldset id="usuario" ><br>
                    <center><label for="Iuser"><input type="text" id="csuser" name="Iuser" placeholder="Usuario"></label><br></center>
                    <center><label for="Ipassw"><input type="password" id="cspassw" name="Ipassw" placeholder="Senha"></label><br></center>
                    <center><label><button type="submit" value="ENVIAR" id="cscadast">LOGIN</label></button></center>
                    <center><a href="esquecesenha/solicita_senha.html"><font color=#FFFF00>Esqueceu Senha?<p></a></center>
            </fieldset>
        </form> 
        </body>
</html>
