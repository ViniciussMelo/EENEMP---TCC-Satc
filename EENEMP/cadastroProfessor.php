<?php
	session_start();
	extract($_POST);
	include_once("connection.php");

if ( (isset($_SESSION["logado"]) && !empty($_SESSION["logado"])) OR (isset($_SESSION["logadoProf"]) && !empty($_SESSION["logadoProf"]))) {
     echo "<script language='javascript' type='text/javascript'>
					alert('Você não tem permissão de acesso!!');
                    window.location.href='sair.php';</script>";
                    die();
}

if (isset($_POST['cadastrar']))
{
  $nomeprof  = trim($_POST['nomeP']);
  $senhaprof = $_POST['senhaP'];
  $emailprof = $_POST['emailP'];
  $opcao     = $_POST['pergunta'];
  $rResposta = $_POST['rResposta'];

 if(empty($nomeprof) || is_null($nomeprof)){
	echo "<script language='javascript' type='text/javascript'>
  		  alert('Espaço em branco detectado!!');
		  window.location.href='cadastroProfessor.php';</script>";
		  die();
	}
	
 if($pergunta == 'selecione'){
	echo "<script language='javascript' type='text/javascript'>
	alert('Você não escolheu uma pergunta de segurança!!');
    window.location.href='cadastroProfessor.php';</script>";
    die();
	}
	$verifica = "SELECT emailAluno from cadastroaluno where emailAluno = '$emailprof'";
	$res = mysql_query($verifica);	
	
	if (mysql_num_rows ( $res ) == 0)
      {
		$verifica2 = "SELECT emailProfessor from cadastroProfessores where emailProfessor ='$emailprof'";
		$res1 = mysql_query($verifica2);	
		
		if (mysql_num_rows ( $res1 ) ==0)
      {
			$sql2 = "INSERT INTO cadastroprofessores (nomeProfessor, senhaProfessor, perguntaSeguranca, respostaSeguranca, emailProfessor) VALUES ('$nomeprof','$senhaprof', '$opcao' , '$rResposta' ,'$emailprof')";
			$res2 = mysql_query($sql2);
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Dados cadastrados com Sucesso!!!');
          window.location.href='loginProfessor.php';</script>";
          die();
      }
	  }
	  else{
		 echo"<script language='javascript' type='text/javascript'>
  		  alert('Email já em uso!!!');
          window.location.href='cadastroProfessor.php';</script>";
          die();
	  }
  
}

?>
<!DOCTYPE html>
<html>
<head>
<title>EENEMP/Cadastro</title>
<meta charset="utf-8">
<style>
#option {
        color: white;
		background-color: cornflowerblue;
		font-family: verdana;
		border: 1px solid cornflowerblue;
		border-radius: 2px;
    }  
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/Eenemp-123242178273220/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +55 (48) 99907 5657</li>
        <li><i class="fa fa-envelope-o"></i> viniegui.satc@gmail.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <a href="index.php"><img src="images/demo/Logo/logo1.png"></a>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
    <br>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a class="drop" href="#">Ver no site</a>
          <ul>
            <li><a href="verAvaliacoes.php">Avaliação de usúario</a></li>
            <li><a href="verPerguntas.php">Duvidas frequentes</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Conta</a>
          <ul>
            <li><a href="cadastroAluno.php">Cadastrar Aluno</a></li>
			<li><a href="cadastroProfessor.php">Cadastrar Professor</a></li>
            <li><a href="loginAluno.php">Logar como Aluno</a></li>
			<li><a href="loginProfessor.php">Logar como Professor</a></li>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>

<h3 class="tituloprof">Cadastro de professor!</h3>

  <div class="cadastro">
		<form name="formularioProf" onSubmit="return validaCampo() "class="formulario" method="POST" action="cadastroProfessor.php">
        <fieldset>
            <h3>Cadastro</h3>
            
            <input type="text" id="nomeP" name="nomeP" placeholder="Nome" >
            
            <input type="email" id="emailP" name="emailP" placeholder="Email">
            
            <input type="password" required id="senhaP" name="senhaP"  placeholder="Senha de 6 a 10 digitos:">
			
			<select size="1" name="pergunta" id="option">
			<option value="selecione">Pergunta de segurança</option>
			<option value="Nome da mae">Nome da mae</option>
			<option value="Nome do pai">Nome do pai</option>
			<option value="Nome de Cachorro">Nome de Cachorro </option>
			<option value="Idade da sua mãe">Idade da sua mãe</option>
			<option value="Idade do seu pai">Idade do seu pai</option>
			</select>
			<br>
			<input type="text" id="rResposta" name="rResposta" placeholder="Responda a pergunta:">

            <input type="submit" name="cadastrar" class="cadastrar" value="Cadastrar">
			</fieldset>
     </form>
       </div>

    <div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Informações e contato</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Criciuma-SC
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +55 (048) 9907 5657<br>
          +55 (048) 9807 3178</li>
        <li><i class="fa fa-envelope-o"></i>vinicius.smelo54@gmail.com<br>
      guiinfosatc@gmail.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Instituição de Ensino</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          SATC-EDU
      <BR>
      R. Pascoal Meler - Universitário, Criciúma - SC, 88805-350
          </address>
      </ul>
    </div>
   <div class="one_third">
   <h6 class="title">Dicas e sugestões</h6>
   <ul class="nospace linklist contact">
   <li><i class="fa fa-envelope-o"></i> viniegui.satc@gmail.com</li>
    </ul>
      </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p align="center">Copyright &copy; 2017 - All Rights Reserved - Vinícius Spada Melo e Guilherme Loli</p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<script> 
	function validaCampo(){
		if(nomeP.value == ""){
			alert("Nome do professor em branco!");
			document.getElementById("nomeP").focus();
			return false;
		}
		if(emailP.value == ""){
			alert("Email do professor em branco!");
			document.getElementById("emailP").focus();
			return false;
		}
		if(senhaP.value == ""){
			alert("Senha do professor em branco!!");
			document.getElementById("senhaP").focus();
			return false;
		}
		if(nomeP.value.length  < 3{
			alert("Nome menor que 4 letras!!");
			document.getElementById("nomeP").focus();
			return false;
		}
		if(senhaP.value.length  < 6){
			alert("Senha fraca! Menor que 6 digitos!!");
			document.getElementById("senhaP").focus();
			return false;
		}if(senhaP.value.length  > 10){
			alert("Senha muito longa! Maior que 10 digitos!!");
			document.getElementById("senhaP").focus();
			return false;
		}
		if(senhaP.value  != CsenhaP.value){
			alert("Senhas diferentes");
			document.getElementById("CsenhaP").focus();
			return false;
		}
	}

</script>
</body>
</html>