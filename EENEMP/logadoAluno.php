<?php
	session_start();
	
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
<title>EENEMP/logado</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="images.css">
<style >
    

    #questao ul {
       margin: 0;
      list-style-type: none;



    }
    #questao ul li {
      padding: 15px 25px;
      background-color:#34495E;
      border:1px solid #BDC3C7;
      cursor:pointer;
      position:relative;
      


    }
    #questao ul li a {
      color:white;
    }

    #questao li {
      float:left;

    }

#questao ul li:hover {
    background-color: #2ECC71;
}
</style>
</head>
<body id="top" >
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/fundo/bg.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading"><b>Obrigado por se cadastrar Aluno!</b></h2>
      <p>Veja e responda as questões! Comece já.</p>
		<p><a class="btn medium" href="simulados.php">Simulados</a>
		<a class="btn medium" href="questaopravoce.php">Questões</a></p>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <h2 class="font-x3 uppercase btmspace-80 underlined">Matérias <a href="#">requeridas</a></h2>
    <div class="group center btmspace-80">
      <article class="one_quarter first"><span class="icon"><i class="fa fa-balance-scale"></i></span>
        <h4 class="heading"><a href="#">Ciências da Natureza e suas Tecnologias</a></h4>
        <p>inclui química, física, biologia, energia e preservação ambiental.</p>
      </article>
      <article class="one_quarter"><span class="icon"><i class="fa fa-bank"></i></span>
        <h4 class="heading"><a href="#">Matemática</a></h4>
        <p>Estudo de tópicos como quantidades, formas, espaço e mudança, através do método dedutivo, no qual se pressopõe um conjunto de axiomas e regras de inferência como a forma de obter propriedades das entidades em estudo.</p>
      </article>
      <article class="one_quarter"><span class="icon"><i class="fa fa-plane"></i></span>
        <h4 class="heading"><a href="#">Linguagens e Códigos</a></h4>
        <p>inclui português, literatura, artes, educação física e línguas (inglês e espanhol).</p>
      </article>
      <article class="one_quarter"><span class="icon"><i class="fa fa-graduation-cap"></i></span>
        <h4 class="heading"><a href="#">Ciências Humanas e suas Tecnologias</a></h4>
        <p>inclui história, sociologia, geografia e filosofia..</p>
      </article>
    </div>
    <ul class="nospace group">
      <li class="one_quarter first">
        <div class="inspace-30 borderedbox">
           <h2><class="header">Por que o ENEM é tão importante?</h2>
          <p>Todo estudante de Ensino Médio está cansado de escutar sobre o Enem e a necessidade de uma boa preparação para sair bem na prova. Mas o que faz do Enem o maior exame de avaliação do Brasil?</p>
			<p class="nospace"><a href="DPorque.html">Ler Mais &raquo;</a></p>
        </div>
      </li>
      <li class="one_quarter">
        <article><a href="#"><img class="btmspace-30" src="images/demo/faixa1/planejamento.png" alt=""></a>
          <h6 class="heading">Como me preparar para o ENEM?</h6>
          <p>As provas do Exame Nacional do Ensino Médio (Enem) serão aplicadas nos dias 5 e 6 de novembro. Em quatro meses, você pode elaborar um plano de estudos amplo, contemplando todos os conteúdos &hellip;</p>
          <p class="nospace"><a href="DComoP.html">Ler Mais &raquo;</a></p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><img class="btmspace-30" src="images/demo/faixa1/foco.jpg" alt=""></a>
          <h6 class="heading">Em quais matérias focar no ENEM?</h6>
          <p>Na contagem regressiva para o ENEM, o nervosismo começa a aumentar e, no desespero, os estudantes buscam vários meios para conseguir se preparar a tempo.&hellip;</p>
          <p class="nospace"><a href="DQualA.html">Ler Mais &raquo;</a></p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><img class="btmspace-30" src="images/demo/faixa1/duvida.jpg" alt=""></a>
          <h6 class="heading">O que fazer com a nota do ENEM?</h6>
          <p>O Exame Nacional do Ensino Médio (Enem) tem hoje um papel importantíssimo na vida dos estudantes brasileiros.&hellip;</p>
          <p class="nospace"><a href="DOqueF.html">Ler Mais &raquo;</a></p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/background/fundop.jpg');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
     <h2 class="font-x3 uppercase btmspace-80 underlined">Questões <a href="#">para você</a></h2>
    <article id="questao">
       <ul style="list-style-type: none;">
        
                <li align="" ><a href="questaopravoce.php" onClick="mensagem();">Espanhol </a></li>
        <li align="" ><a href="questaopravoce.php" onClick="mensagem();"> Fisica </a></li>
       <li align="" > <a href="questaopravoce.php" onClick="mensagem();">Geografia </a></li>
       <li align="" > <a href="questaopravoce.php" onClick="mensagem();"> Historia </a></li>
    
    <li align="" ><a href="questaopravoce.php" onClick="mensagem();"> Ingles </a></li>  
    <li align="" ><a href="questaopravoce.php" onClick="mensagem();"> Matematica </a></li>
    <li align="" ><a href="questaopravoce.php" onClick="mensagem();"> Portugues </a></li>
    <li align="" ><a href="questaopravoce.php" onClick="mensagem();"> Quimica </a>  </li>
      </ul>
    </article>




    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h2 class="font-x3 uppercase btmspace-80 underlined">Canais <a href="#">aconselhados</a></h2>
    <ul class="nospace elements">
      <li class="one_third first">
        <article><a href="#"><img src="images/demo/canais/descomplica.jpg" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading"><b>Descomplica</h6></b>
            <p>O Descomplica salva sua vida no ENEM e vestibulares: mais de 20000 aulas gravadas; aulas ao vivo todos os dias; monitorias online correção de redação;todas as matérias do Ensino Médio.&hellip;</p>
            <br><br>
			<footer><a href="https://www.youtube.com/user/sitedescomplica">Ir para o canal &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img src="images/demo/canais/mesalva.jpg" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading"><b>Me salva!</h6></b>
            <p>Oi, somos o Me Salva! Uma plataforma de ensino que oferece aulas online para você aprender de verdade. São cursos preparatórios para o ENEM, Vestibulares e Concursos&hellip;</p>
            <br>
			<footer><a href="https://www.youtube.com/user/migandorffy">Ir para o canal &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><img src="images/demo/canais/aulalivre.jpg" alt=""></a>
          <div class="txtwrap">
            <h6 class="heading">Aula Livre.net</h6>
            <p>Prepare-se para o vestibular e Enem. Assista as nossas videoaulas, faça os exercícios e baixe as apostilas gratuitas em nosso Portal.Acesse já!!!&hellip;</p>
            <br><br><br>
			<footer><a href="https://www.youtube.com/user/aulalivre">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/background/fundop.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h2 class="font-x3 uppercase btmspace-80 underlined">Depoimentos <a href="#">de Usuários</a></h2>
    <ul class="nospace group">
      <li class="one_half first">
        <blockquote>Gostei muito do site e só tenho a agradecer por ter me ajudado muito!</blockquote>
		<strong>Viniícius Spada Melo<br>
            <em>Estudante, SATC-EDU</em>
        </figure>
      </li>
      <li class="one_half">
        <blockquote>Desde que comecei a usar, minha notas e médias só subiram!!! Estudei ENEM Passei! <3.</blockquote>
          <strong>Guilherme Loli</strong><br>
            <em>Estudante, SATC-EDU</em>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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
    <p align="center">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Vinícius Spada Melo e Guilherme Loli</a></p>
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
