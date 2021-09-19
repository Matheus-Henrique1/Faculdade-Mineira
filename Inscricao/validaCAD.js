
function validar(){
      var psname = document.INSC.pname.value;
      var lname = document.INSC.lname.value;
      var cpf = document.INSC.cpf.value;
      var sexo = document.INSC.sexo.value;
      var Clogend = document.INSC.Clogend.value;
      var Clognum = document.INSC.Clognum.value;
      var Clogcep = document.INSC.Clogcep.value;
      var lmail = document.INSC.lmail.value;
      var ltel = document.INSC.ltel.value;
      var tmsg = document.INSC.tmsg.value;
      var ccidade = document.INSC.ccidade.value;

      if( psname == ""){
          alert('Preencha o campo Nome');
          INSC.pname.focus();
          return false;
          }
      if( lname == ""){
          alert('Preencha o campo Nome Completo');
          INSC.lname.focus();
          return false;
          }
      if( cpf == ""){
          alert('Preencha o campo cpf');
          INSC.cpf.focus();
          return false;
          }
      if( sexo == ""){
          alert('Selecione o seu sexo');
          INSC.sexo.focus();
          return false;
          }
      if( Clogend == ""){
          alert('Preencha o campo Endereço');
          INSC.Clogend.focus();
          return false;
          }
      if( Clognum == ""){
          alert('Preencha o campo Numero');
          INSC.Clognum.focus();
          return false;
          }
      if( Clogcep == ""){
          alert('Preencha o campo cep');
          INSC.Clogcep.focus();
          return false;
          }
      if( lmail == ""){
          alert('Preencha o campo Email');
          INSC.lmail.focus();
          return false;
          }
      if( ltel == ""){
          alert('Preencha o campo telefone');
          INSC.ltel.focus();
          return false;
          }
      if( tmsg == ""){
          alert('Preencha o campo Por que entrar');
          INSC.tmsg.focus();
          return false;
        }
      if( ccidade == ""){
          alert('Preencha o campo Por que entrar');
          INSC.tmsg.focus();
          return false;
        }
}
document.querySelector("form")
.addEventListener("submit", event => {
    console.log("enviar o formulário")

});

