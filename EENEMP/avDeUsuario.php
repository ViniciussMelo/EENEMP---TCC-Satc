<?php
	session_start();
	include_once("connection.php");
	
	if (!isset($_SESSION["logado"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}
if (isset($_POST['cadastrar']))
{
  $email 	 = $_SESSION["logado"];
  $avUsuario = trim($_POST ['avUsu']);
  $nota 	 = trim($_POST['notaU']);
  $usuario 	 = 'Aluno';
  
	   $verifica = ("SELECT emailAluno FROM cadastroaluno where emailAluno = '$email'");

       $res = mysql_query($verifica);

       if (mysql_num_rows ( $res ) !=1) 
      {
					echo "<script language='javascript' type='text/javascript'>
					alert('Usuario inexistente no banco de dados!!!');
                    window.location.href='avDeUsuario.php';</script>";
                    die();
					}
					else{
				
				 $sql = "INSERT INTO avaliacaousuario (avaliacao, nota, emailUsuario,usuario) VALUES ('$avUsuario','$nota','$email','$usuario')";
				 $res = mysql_query($sql);

          if ($res)
      {
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Avaliacao de usuario cadastrada com Sucesso!!!');
          window.location.href='verAvaliacoesAluno.php';</script>";
          die();
      }
      else
      {
          echo 'Falha ao gravar avaliacao !!! ';
      }
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>EENEMP/Avaliação de usuário  </title>
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
      <a href="logadoAluno.php"><img src="images/demo/Logo/logo1.png"></a>
    </div>

    <!-- ################################################################################################ -->
   <nav id="mainav" class="fl_right">
      <ul class="clear">
		<br>
        <li class="active"><a href="logadoAluno.php">Home</a></li>
        <li><a class="drop" href="#">Ver no site</a>
          <ul>
            	<li><a href="avDeUsuario.php">Enviar avaliação de usúario</a></li>
				<li><a href="../Forum/index.php">Fórum</a></li>
				<li><a href="historico.php">Histórico</a></li>
				<li><a href="questaopravoce.php">Procurar questões</a></li>
				<li><a href="simulados.php">Simulados</a></li>
				<li><a href="verAvaliacoesAluno.php">Ver avalições de usúario</a></li>
          </ul>
        </li>
      <li><a class="drop" href="#"><?php echo $_SESSION["logado"]; ?></a>
          <ul>
            <li><a href="edicaoAluno.php">Editar dados</a></li>
			<li><a href="sair.php">Sair</a></li>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>

<h3 class="tituloaluno">Tire suas duvidas sobre o ENEM!</h3>
	<div class="cadastro">
     <form name="formulario" onSubmit="return validaCampo();" class="formulario" method="POST" action="avDeUsuario.php" >
        <fieldset>
            <br>
			<input type="text" readOnly="true" id="emailU" name="emailU" placeholder="<?php echo $_SESSION["logado"]?>" >
			
			<input type="text" onkeyup="somenteNumeros(this);" id="notaU" name="notaU" placeholder="Digite sua nota de 0 a 5:" >
			
            <textarea name="avUsu" rows="10" cols="41" id="avUsu" placeholder="Escreva sua avaliação:"></textarea>

            <br>
            <input name="cadastrar" type="submit" class="cadastrar" value="Enviar">
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
function somenteNumeros(num) {
        var er = /[^0-5.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
}
	function validaCampo(){
		if(notaU.value == ""){
			alert("Nota de usuário em branco!");
			document.getElementById("notaU").focus();
			return false;
		}
		if(notaU.value > 5){
			alert("Nota de usuário inexistente!");
			document.getElementById("notaU").focus();
			return false;
		}
		if(notaU.value < 0){
			alert("Nota de usuário inexistente!");
			document.getElementById("notaU").focus();
			return false;
		}
		if(avUsu.value == ""){
			alert("Avaliação de usuário em branco!");
			document.getElementById("avUsu").focus();
			return false;
		}
	}
</script>		
</body>
</html>
