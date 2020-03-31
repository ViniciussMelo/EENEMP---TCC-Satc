<?php
	session_start();
		if (!isset($_SESSION["logadoProf"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}
	
	if(isset($_POST['prova'])){
		session_start();
		$prova = $_POST['prova'];

		unset($_SESSION['hist']);

		$_SESSION['hist'] = $prova;
	}
?>
<html>
<head>
	<title>EENEMP/Classificações dos Alunos</title>
 <link rel="stylesheet" type="text/css" href="layout/styles/simulado.css">
 <link rel="stylesheet" type="text/css" href="layout/styles/layout.css">
<meta charset="utf-8">
</head>
<body>
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

<br><br>
<h1 align="center" id="titulosimulado">Melhores classificações em cada matéria </h1>
<br>

  <div class="menu" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <ul>
     <li><a href="javascript:;" id="prova" data-id="prova de matematica">Matematica</a>
	 </li>
	 
	<li><a href="javascript:;" id="prova" data-id="prova de quimica">Quimica</a>
	 </li>
	 
	 <li><a href="javascript:;" id="prova" data-id="prova de fisica">Fisica</a>
	 </li>
	 
	 <li><a href="javascript:;" id="prova" data-id="prova de portugues">Portugues</a>
	 </li>
	 
	 <li><a href="javascript:;" id="prova" data-id="prova de geografia">Geografia</a>
	 </li>
	 
	 <li><a href="javascript:;" id="prova" data-id="prova de historia">Historia</a>
	 </li>
	 
	 <li><a href="javascript:;" id="prova" data-id="prova de ingles">Ingles</a>
	 </li>
	 
	 <li><a href="javascript:;" id="prova" data-id="prova de espanhol">Espanhol</a>
	 </li>
	 </ul>
  </div>
<br><br><br>
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
<script type="text/javascript">
		$(document).on('click', "#prova", function(){
	 			var prova = $(this).attr("data-id");
	 			$.ajax({
	 				type: 'post',
	 				url: 'historicoProf.php',
	 				data: 'prova='+prova,
	 				cache: false,
	 				success: function(){
	 					window.location.href='hist.php';
	 				}
	 			});
	 			return false;
	 		});
	 </script>
</body>
</html>