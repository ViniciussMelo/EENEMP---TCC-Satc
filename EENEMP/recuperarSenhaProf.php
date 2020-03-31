<?php
session_start();
include_once("connection.php");
if ( (isset($_SESSION["logado"]) && !empty($_SESSION["logado"])) OR (isset($_SESSION["logadoProf"]) && !empty($_SESSION["logadoProf"]))) {
     echo "<script language='javascript' type='text/javascript'>
					alert('Você não tem permissão de acesso!!');
                    window.location.href='sair.php';</script>";
                    die();
}
if (isset($_POST['login']))
{
	$emailR = $_POST['emailR'];
	$rSeguranca = $_POST['rResposta'];
	
	$verifica = ("SELECT emailProfessor,respostaSeguranca FROM cadastroprofessores WHERE emailProfessor = '$emailR' AND respostaSeguranca='$rSeguranca'");
	$res = mysql_query($verifica);
	
	if(mysql_num_rows($res) != 0){
		mysql_query("UPDATE cadastroprofessores SET senhaProfessor='novaSenha' WHERE emailProfessor='$emailR'");
		echo"<script language='javascript' type='text/javascript'>
  		  alert('Senha alterada com sucesso!! Senha: novaSenha');
          window.location.href='loginProfessor.php';</script>";
          die();
	}
	else{
		echo"<script language='javascript' type='text/javascript'>
  		  alert('Email inexistente ou resposta de segurança inválida!!');
          window.location.href='recuperarSenhaAluno.php';</script>";
          die();
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>EENEMP/Recuperar senha</title>
<meta charset="utf-8">
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
			<li><a href="../Forum/index.php">Fórum</a></li>
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

	<div class="cadastro">
       
     <form class="formulario" method="POST" action="recuperarSenhaProf.php">
        <fieldset>
            <h3>Login</h3>
			
			<input type="email" required id="emailR" name="emailR" placeholder="Email:">
            <input type="text" readOnly="true" id="usuarioR" name="usuarioR" value="Professor">
			<input type="text" id="rResposta" name="rResposta" placeholder="Responda a pergunta de segurança:">
            <input type="submit" name="login" class="login" value="Enviar">
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
</body>
</html>