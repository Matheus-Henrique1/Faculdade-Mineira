<?php
include_once 'conexao.php';
$matricula_aluno = $_GET['matricula_aluno'];
$sql = "SELECT * FROM aluno where matricula_aluno = $matricula_aluno";
$query = mysqli_query($conn, $sql);




?>
<!DOCTYPE html>
<html lang ="pt-br">
  <head>
    <link rel="stylesheet" href="styleinsc.css">
    <title>Inscrição Faculdade Mineira</title>
    <meta charset="utf-8">
    <script type="text/javascript" src='validaCAD.js'></script>
    <script type="text/javascript" >
              function masc_cpf(){
               var cpf_masc = document.getElementById('ccpf')
               if( cpf_masc.value.length == 3 || cpf_masc.value.length == 7 ){
                 cpf_masc.value += "."
               }
               if( cpf_masc.value.length == 11 ){
                 cpf_masc.value += "-"
               }
               
              }        
      </script>
  </head>
  
  <body >
    <center> <div id="paginsc"><a href="../index.php"><Img Src= "fj.png" weigth=180 height=200></a> </center>
      <form action= "update.php" method="POST" class="form-group" onSubmit="return validar()">
        <fieldset id="usuario" ><div><b><center>IDENTIFICAÇÃO</center></b></div>
          <input type="text" id="clmatricula" required="required"  name="lmatricula" value="<?php echo $matricula_aluno;?>">
          <label for="pname">Primeiro Nome:</label> <input type="text" id="cpname" required="required"  name="pname" placeholder="Primeiro Nome"><br>
          <label for="lname">Último Nome:&nbsp;&nbsp;&nbsp;</label><input type="text" required="required"  id="clname"  name="lname" placeholder="Nome Completo">
          <br>
          <label for="cpf">CPF:</label> <input type="text" id="ccpf"  name="cpf" placeholder="___.___.___-__" maxlength="14" onkeyup="masc_cpf()"><br>
          <fieldset id="TGenero"><legend>Gênero:</legend>
            <div id="tmarcadores">
              <input type="radio" id="male" name="sexo" value="masculino" checked><label for="male">Masculino</label><br>
              <input type="radio" id="female" name="sexo" value="feminino"  ><label for="female">Feminino</label><br>
              <input type="radio" id="other" name="sexo" value="outro"  ><label for="other">Outro</label><br>
            </div>
          </fieldset>  
          <p>Data de Nascimento: <input type="date" name="tnasc" id="cnasc"/></p> 
          </fieldset>
        <fieldset id="Endereço"><div><b><center>ENDEREÇO</center></b></div>
          <label for="endlog">Endereço:&nbsp&nbsp<input type="text" id="endlog" required="required" name="Clogend"></label>
          <label for="lognum">Número:&nbsp&nbsp<input type="number" id="lognum" required="required"  name="Clognum" size="4"></label>
          <label for="lognum">CEP:&nbsp&nbsp<input type="text" id="logcep" required="required"  name="Clogcep" size="4"></label>
          <div>
            <label for="">Cidade: </label>
            <select name="ccidade" id="cidade">
              <option value="" selected="selected" >Selecione sua cidade</option>
              <option value="Belo Horizonte">Belo Horizonte</option>
              <option value="Contagem">Contagem</option>
              <option value="Uberlândia">Uberlândia</option>  
              <option value="Juiz de Fora">Juiz de Fora</option>  
              <option value="Betim">Betim</option>  
              <option value="Ibirite">Ibirité</option>
              <option value="Nova Lima">Nova Lima</option>	
              <option value="Uberaba">Uberaba</option>  
              <option value="Santa Luzia">Santa Luzia</option>
            </select>
          </div>
        </fieldset>
        <fieldset id="contato"><div><b><center>INFORMAÇÕES DE CONTATO</center></b></div>
          <label for="lname">Email:&nbsp;&nbsp;&nbsp;</label> <input type="email" id="cmail" required="required"  name="lmail" placeholder="Email"><br>
          <label for="lname">Telefone:&nbsp;&nbsp;</label> <input type="number" id="ctel" required="required"  name="ltel" placeholder="(xx) xxxxx-xxxx" >
          
        </fieldset>
        <fieldset id="valor"><div><b><center>FAIXA DE VALOR DO CURSO/MATRICULA DESEJADA:</center></b></div>
          <p>Insira o valor com base no valor do curso visto no site, e o valor de matrícula mínima, que será cobrada na primeira mensalidade (Sendo o valor máximo R$ 100,00).</p>
          <input type="range" name="b" value="50" />100 +<input type="number" name="a" value="10" /> =
          <output name="result"></output>
        </fieldset>
        <fieldset id="pqentrar"><div><b><center>CONSIDERAÇÕES FINAIS</center></b></div>
          Porque escolher nossa Faculdade?<br>
          <textarea name="tmsg" id="tmsg" cols="45" rows="5" ></textarea>
        </fieldset>
        <input type="submit" value="ENVIAR" >
      </form>
    </div>
  </body>
</html>