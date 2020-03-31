<?PHP
	session_start();
	include_once("connection.php");
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

if (!isset($_SESSION["logadoProf"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}

if (isset($_POST['cadastrar']))
{
  $emailProf  	= $_SESSION['logadoProf'];
  $materiaCad 	= $_POST['materiaC'];
  $questaoCad 	= $_POST['questaoC'];
  $resposta		=$_POST['rQuestao'];
  $foto  		= $_FILES['fotos'];
  $error 		= 0;	
  
  if ($materiaCad == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Materia em branco!!');
          window.location.href='cadastroMaterias.php';</script>";
          die();
  }
  if ($questaoCad == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão em branco!!');
          window.location.href='cadastroMaterias.php';</script>";
          die();
  }
  if ($resposta == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Resposta em branco!!');
          window.location.href='cadastroMaterias.php';</script>";
          die();
  }
  
  else{
if (!empty($foto['name'])) 
	{
		$largura = 500;
		$altura = 500;
		$tamanho = 1000000;
	      
    	if(!preg_match("/^image\/(jpg|jpeg|png|gif|bmp)$/",$foto['type'])){
     	   $error[1] = "Não é uma imagem...";
   	 	} 
	
		$dimensoes = getimagesize($foto['tmp_name']);
 
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		if($foto['size'] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		if ($error == 0) {
		
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$foto['name'],$ext);
		
        	$nome_imagem = md5(uniqid(time())).".".$ext[1];

        	$caminho_imagem = "imagens/".$nome_imagem;		
			
			move_uploaded_file($foto['tmp_name'],$caminho_imagem);
			
			$sql = "INSERT INTO cadastroquestoes (materiaQuestao, Questao, Resposta, imagemQuestao ,nomeProf) VALUES ('$materiaCad','$questaoCad', '$resposta' ,'$caminho_imagem','$emailProf')";
			
  		    $res = mysql_query($sql);

          if ($res)
      {
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Questao cadastrada com Sucesso!!!');
          window.location.href='cadastroMaterias.php';</script>";
          die();
      }
      else
      {
          echo 'Falha ao gravar questao !!! ';
      }
    }
  }
  else{
	  $caminho_imagem = 'imagens/nCad.jpg';
	  $sql = "INSERT INTO cadastroquestoes (materiaQuestao, Questao, Resposta, imagemQuestao ,nomeProf) VALUES ('$materiaCad','$questaoCad', '$resposta' ,'$caminho_imagem','$emailProf')";
			
  		    $res = mysql_query($sql);

          if ($res)
      {
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Questao cadastrada com Sucesso!!!');
          window.location.href='cadastroMaterias.php';</script>";
          die();
      }
      else
      {
          echo 'Falha ao gravar questao !!! ';
      }
  }
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
      <a href="logadoProfessor.php"><img src="images/demo/Logo/logo1.png"></a>
    </div>

    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
		<br>
        <li class="active"><a href="logadoProfessor.php">Home</a></li>
        <li><a class="drop" href="#">Ver no site</a>
          <ul>
				<li><a href="historicoProf.php">Classificações dos alunos</a></li>
            	<li><a href="avDeUsuarioProf.php">Enviar avaliação de usúario</a></li>
				<li><a href="../Forum/index.php">Fórum</a></li>
				<li><a href="questaopravoceProf.php">Procurar questões</a></li>
				<li><a href="resultProf.php">Resultados</a></li>
				<li><a href="simuladosProf.php">Simulados</a></li>
				<li><a href="verAvaliacoesProf.php">Ver avalições de usúario</a></li>
            
          </ul>
        </li>
      <li><a class="drop" href="#"><?php echo $_SESSION["logadoProf"]; ?></a>
          <ul>
			<li><a href="edicaoProfessor.php">Editar dados</a></li>
            <li><a href="sair.php">Sair</a></li>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>



<h3 class="tituloaluno">Cadastro de questões!</h3>



	
	<div class="cadastro">


     <form name="formulario" class="formulario" method="POST" action="cadastroMaterias.php" enctype="multipart/form-data" >
        <fieldset>
            <br>
            
            <input type="text" readOnly="true" id="nomeP" name="nomeP" placeholder="<?php echo $_SESSION['logadoProf'] ?>" >
            
            <input type="text" id="materiaC" name="materiaC" placeholder="Matéria">

            <textarea placeholder="Questão" name="questaoC" rows="10" cols="41" id="questaocadastrada" > </textarea>
			<br>
			
			<input type="text" id="rQuestao" name="rQuestao" placeholder="Resposta da questão:">
			<font color = "red"><p id="fotoss"></p></font>
			<font color = "red"><p id="fotosL"></p></font>
			<font color = "red"><p id="fotosT"></p></font>
			<br>
			<input id = "fotos" onclick="mensagem()" name="fotos" type="file" size="50" >
            <br>
            <input name="cadastrar" type="submit" class="cadastrar" value="Cadastrar">
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
	function mensagem() {
    document.getElementById("fotoss").innerHTML = "Altura máxima = 500 pixels";
	document.getElementById("fotosL").innerHTML = "Largura máxima = 500 pixels";
	document.getElementById("fotosT").innerHTML = "Tamanho máximo = 1000000 bytes";
}
</script>
</script>
</body>
</html>