<?php
	session_start();
	include_once("connection.php");
    extract($_POST);

if ( (isset($_SESSION["logado"]) && !empty($_SESSION["logado"])) OR (isset($_SESSION["logadoProf"]) && !empty($_SESSION["logadoProf"]))) {
     echo "<script language='javascript' type='text/javascript'>
					alert('Você não tem permissão de acesso!!');
                    window.location.href='sair.php';</script>";
                    die();
}

if (isset($_POST['cadastrar']))
{
  $nome         = trim($_POST['nome']);
  $senha        = $_POST['senha'];
  $email        = $_POST['email'];
  $opcao        = $_POST['pergunta'];
  $rResposta    = $_POST['rResposta'];
  
	if(empty($nome) || is_null($nome)){
	echo "<script language='javascript' type='text/javascript'>
  		  alert('Espaço em branco detectado!!');
		  window.location.href='cadastroAluno.php';</script>";
		  die();
	}
	
	$verifica = "SELECT emailAluno from cadastroaluno where emailAluno = '$email'";
	$res = mysql_query($verifica);	
	
	if (mysql_num_rows ( $res ) == 0)
      {
		$verifica2 = "SELECT emailProfessor from cadastroProfessores where emailProfessor ='$email'";
		$res1 = mysql_query($verifica2);	
		
		if (mysql_num_rows ( $res1 ) ==0)
      {
			$sql2 = "INSERT INTO cadastroaluno (nomeAluno, senhaAluno, emailAluno,perguntaSeguranca,respostaSeguranca) VALUES ('$nome','$senha','$email','$opcao','$rResposta')";
			$res2 = mysql_query($sql2);
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Dados cadastrados com Sucesso!!!');
          window.location.href='loginAluno.php';</script>";
          die();
      }
	  }
	  else{
		 echo"<script language='javascript' type='text/javascript'>
  		  alert('Email já em uso!!!');
          window.location.href='cadastroAluno.php';</script>";
          die();
	  }
  
}

?>

<!DOCTYPE html>
<html>
<head>
<title>EENEMP/Cadastro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    #option {
        color: white;
		background-color: cornflowerblue;
		font-family: verdana;
		border: 1px solid cornflowerblue;
		border-radius: 2px;
    }  
</style>
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
<h3 class="tituloaluno">Cadastro de aluno!</h3>

	<div class="cadastro">
     <form name="formulario" onSubmit="return validaCampo();" class="formulario" method="POST" action="cadastroAluno.php" >
        <fieldset>
            <h3>Cadastro</h3>
            
            <input type="text" id="nome" name="nome" placeholder="Nome" >
            
            <input type="email" id="email" name="email" placeholder="Email">
            
            <input type="password" id="senha" name="senha" placeholder="Senha de 6 a 10 digitos">
            
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

            <input type="submit" name="cadastrar"  class="cadastrar" value="Cadastrar">
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
		if(nome.value == ""){
			alert("Nome em branco!");
			document.getElementById("nome").focus();
			return false;
		}
		if(email.value == ""){
			alert("Email em branco!");
			document.getElementById("email").focus();
			return false;
		}
		if(senha.value == ""){
			alert("Senha em branco!");
			document.getElementById("senha").focus();
			return false;
		}
		if(nome.value.length  < 3{
			alert("Nome menor que 4 letras!!");
			document.getElementById("nome").focus();
			return false;
		}
		if(senha.value.length  < 5){
			alert("Senha fraca! Menor que 6 digitos!!");
			document.getElementById("senha").focus();
			return false;
		}if(senha.value.length  > 10){
			alert("Senha muito longa! Maior que 10 digitos!!");
			document.getElementById("senha").focus();
			return false;
		}
	}
</script>
</body>
</html>
