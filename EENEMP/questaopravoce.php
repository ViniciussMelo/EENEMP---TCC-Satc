﻿<?php
	session_start();
	extract($_POST);
	include_once("connection.php");
	mysql_set_charset('utf8');
	ini_set('default_charset','UTF-8');
		if (!isset($_SESSION["logado"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>EENEMP/Questões</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    
<style>
#tabela{
	margin-top:500px;
    
    
    
}
    
    #questoes {
        color:black;
    }
  
    #option {
        color: white;
		background-color: cornflowerblue;
		font-family: verdana;
		border: 1px solid cornflowerblue;
		border-radius: 2px;
    }
    
    
</style>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/codigo.css" rel="stylesheet" type="text/css" media="all">
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
	<div class="resultado">


	<form action="questaopravoce.php" method="post" name="buscarq" id="buscarq">
          <h1 id="tit">Buscar questão / Palavra chave</h1>
        <p><input type="text" name="campo" id="campo" size="50"></p>
        
        
     <select size="1" name="materia" id="option">
       <option value="selecione">Selecione a matéria desejada</option>
       <option value="matematica">Matemática</option>
       <option value="fisica">Física</option>
         <option value="quimica">Química</option>
       <option value="portugues">Português</option>
          <option value="geografia">Geografia</option>
          <option value="historia">História</option>
          <option value="ingles">Inglês</option>
          <option value="espanhol">Espanhol</option>
         
    </select>
        
        
        
		<p><input name="pesquisar" type="submit" id="pesquisar" value="Pesquisar" ></p>
		<br><br>
		</form>
		<?php
			
			if (isset($_POST['pesquisar']))
			{
			$campo = trim($_POST['campo']);
			$materia = $_POST['materia'];
			
			if(empty($campo) || is_null($campo)){
			echo "<script language='javascript' type='text/javascript'>
			alert('Você digitou um espaço em branco!!');</script>";
			die();
			}else{
				if($materia == 'selecione'){
					$res = mysql_query("SELECT * from cadastroquestoes where Questao LIKE '%$campo%'");
				}
				if ($materia != 'selecione'){
					$res = mysql_query("SELECT * from cadastroquestoes where Questao LIKE '%$campo%' and materiaQuestao = '$materia'");
				}
			echo"
			<table id='tabela'>
				<thead>
					<tr>
						<td>Imagem da questão:	</td>
						<td>Matéria da questão:</td>
						<td>Questão :</td>
						<td>Resposta :</td>
						<td>Email de quem cadastrou: </td>
					</tr>
				</thead>
				</table>";

			while($escrever=mysql_fetch_array($res)){
				if($escrever['imagemQuestao'] == ''){
						$escrever['imagemQuestao'] = 'imagens/nCad.jpg';
					}

						echo'<table id="questoes">
						<tr>
						 <td><img src="' . $escrever['imagemQuestao'] . '" width="100" height="100"/></td>
						 <td>' .  $escrever['materiaQuestao'] . '</td>
						 <td>' .  $escrever['Questao'] . '</td>
						 <td>' .  $escrever['Resposta'] . '</td>
						 <td>' .  $escrever['nomeProf'] . '</td>
						</tr>
						</table>';
			}
			}
			}
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
