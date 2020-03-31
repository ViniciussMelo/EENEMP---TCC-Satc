﻿<?php
	session_start();
	include_once("connection.php");
	if (!isset($_SESSION["logado"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}
?>
<!DOCTYPEHML>
<head>
<title>EENEMP/Histórico</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
      table, th, td {
             border:1px solid #696969;
             border-collapse:collapse;
             background-color:#CDC9C9;
             margin-left: 115px;
             
      }
      th, td {
         padding:8px 8px;
         text-align:left;
         color:black;
         font-family:verdana;
         padding-bottom:8px;
         


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
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>



<h3 class="tituloaluno">Primeiros resultados!</h3>
		<table>
<?php

	$email = $_SESSION['logado'];
	$usuario = 'Aluno';
	$res = mysql_query("SELECT * from historico where emailUsuario = '$email' AND usuario = '$usuario'");
	$res2 = mysql_query("SELECT * from resultados where emailUsuario = '$email' AND usuario = '$usuario'");
	
	echo '<table style="width:80%">
	<tr>
	<td><h1>Matéria: </td>
	<td><h1>Conteudo: </td>
	<td><h1>Acertos: </td>
	<td><h1>Erros: </td>
	<td><h1>Porcentagem de acertos: </td>
	<td><h1>Data: </td>
	</tr></h1>';
	while($escrever=mysql_fetch_array($res)){
	echo 	'<tr>
	<td>' . $escrever['nomeProva'] . '</td>
	<td>' . $escrever['materiaProva'] . '</td>
	<td>' . $escrever['acertosUsuario'] . '</td> 
	<td>' . $escrever['errosUsuario'] . '</td> 
	<td>' . $escrever['porcentagemDeAcertosUsuario'] . '</td>
	<td>' . $escrever['data'] . '</td>
			</tr>';
}
echo '</table>';
?>
	<h3 class="tituloaluno">Outros resultados</h3>
<?php
echo '<table style="width:80%">
	<tr>
	<td><h1>Matéria: </td>
	<td><h1>Conteudo: </td>
	<td><h1>Acertos: </td>
	<td><h1>Erros: </td>
	<td><h1>Porcentagem de acertos: </td>
	<td><h1>Data: </td>
	</tr></h1>';
	while($escrever=mysql_fetch_array($res2)){
	echo 	'<tr>
	<td>' . $escrever['nomeProva'] . '</td>
	<td>' . $escrever['materiaProva'] . '</td>
	<td>' . $escrever['acertosUsuario'] . '</td> 
	<td>' . $escrever['errosUsuario'] . '</td> 
	<td>' . $escrever['porcentagemDeAcertosUsuario'] . '</td>
	<td>' . $escrever['data'] . '</td>
			</tr>';
}

echo '</table>';
?>
			
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
