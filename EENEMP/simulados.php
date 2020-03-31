<?php
	session_start();
		if (!isset($_SESSION["logado"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}
?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="layout/styles/simulado.css">
 <link rel="stylesheet" type="text/css" href="layout/styles/layout.css">
 <title>Simulado</title>
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

<br><br>
<h1 align="center" id="titulosimulado">Simulados </h1>
<br>

  <div class="menu">
  <ul>
     <li><a href="#">Matematica</a>
	     <ul>
		   <li><a href="PSolidosGeometricos.php">Sólidos geometricos</a></li>
		   <li><a href="Pporcentagem.php">Porcentagem</a></li>
		   <li><a href="Pprobabilidade.php">Probabilidade</a></li>
		   <li><a href="Ppotenciacao.php">Potenciação/Radiação</a></li>
		   <li><a href="PAnalisecomb.php">Analíse Combinatória</a></li>
		   
		   
		 </ul>
	 
	 </li>
	 
	 <li><a href="#">Quimica</a>
	       <ul>
		   <li><a href="Peletroquimica.php">Eletroquímica</a></li>
		   <li><a href="Pestequiometria.php">Estequiometria</a></li>
		   <li><a href="Pmeioambiente.php">Meio ambiente</a></li>
		   <li><a href="Pquimicaorganica.php">Quimica orgânica</a></li>
		   <li><a href="Pradioatividade.php">Radioatividade</a></li>
		   
		 </ul>
	 </li>
	 
	 <li><a href="#">Fisica</a>
	      <ul>
		   <li><a href="Pmecanica.php">Mecânica</a></li>
		   <li><a href="Peletrecidade.php">Eletrecidade</a></li>
		   <li><a href="Penergia.php">Energia</a></li>
		   <li><a href="Pondulatoria.php">Ondulatória</a></li>
		   <li><a href="Potica.php">óptica</a></li>
		   
		 </ul>
	 </li>
	 
	 <li><a href="#">Portugues</a>
	      <ul>
		   <li><a href="Pcoesao.php">Coesão e côerencia</a></li>
		   <li><a href="Pfiguras.php">Figuras de lìnguagem</a></li>
		   <li><a href="Pfuncoes.php">Funções da linguagem</a></li>
		   <li><a href="Pgenero.php">Gênero textual</a></li>
		   <li><a href="Pvariacao.php">Variação linguística</a></li>
		   
		 </ul> 
	 </li>
	 
	 <li><a href="#">Geografia</a>
	        <ul>
		   <li><a href="Pglobalizacao.php">Globalização</a></li>
		   <li><a href="Pindustrializacao.php">Industrialização</a></li>
		   <li><a href="Pmigracao.php">Migração</a></li>
		   <li><a href="Pmudancas.php">Mudanças Climáticas</a></li>
		   <li><a href="Purbanizacao.php">Urbanização</a></li>
		   
		 </ul> 
	 </li>
	 
	 <li><a href="#">Historia</a>
	        <ul>
		   <li><a href="Psegunda.php">2° guerra mundial </a></li>
		   <li><a href="Peravargas.php">Era vargas</a></li>
		   <li><a href="Phistoria.php">História do Brasil</a></li>
		   <li><a href="Prepublica.php">República Velha</a></li>
		   <li><a href="Prevolucao.php">Revolução industrial</a></li>
		   
		 </ul> 
	 </li>
	 
	 <li><a href="#">Ingles</a>
	        <ul>
		   <li><a href="Pintum.php">Interpretação 1</a></li>
		   <li><a href="Pintdois.php">Interpretação 2</a></li>
		   <li><a href="Pinttres.php">Interpretação 3</a></li>
		   
		   
		 </ul> 
	 </li>
	 
	 <li><a href="#">Espanhol</a>
	        <ul>
		   <li><a href="Pespum.php">Interpretação 1</a></li>
		   <li><a href="Pespdois.php">Interpretação 2</a></li>
		   <li><a href="Pesptres.php">Interpretação 3</a></li>
		   
		   
		 </ul> 
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

</body>


</html>