<?php
	session_start();
	include_once("connection.php");

	$questao1 = $_SESSION["questao1"];
	$questao2 = $_SESSION["questao2"];
	$questao3 = $_SESSION["questao3"];
	$questao4 = $_SESSION["questao4"];
	$questao5 = $_SESSION["questao5"];
	$questao6 = $_SESSION["questao6"];
	$questao7 = $_SESSION["questao7"];
	$questao8 = $_SESSION["questao8"];
	$questao9 = $_SESSION["questao9"];
	$questao10 = $_SESSION["questao10"];

if ($questao1 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 1 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pmudancas.php';</script>";
          die();
  }
  else{
	  if  (isset($_SESSION["logado"])){
		$email = $_SESSION['logado'];
		$usuario = 'Aluno';
	  }else{
		if  (isset($_SESSION["logadoProf"])){
		$email = $_SESSION['logadoProf'];
		$usuario = 'Professor';
	  }  
	  }
	$resposta1 = "c";
	$resposta2 = "c";
	$resposta3 = "d";
	$resposta4 = "a";
	$resposta5 = "a";
	$resposta6 = "d";
	$resposta7 = "e";
	$resposta8 = "a";
	$resposta9 = "d";
	$resposta10 = "b";
	
	$acertou = 0;
	$errou = 0;
	
	if ($questao1 == $resposta1)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao2 == $resposta2)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao3 == $resposta3)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao4 == $resposta4)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao5 == $resposta5)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao6 == $resposta6)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao7 == $resposta7)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao8 == $resposta8)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao9 == $resposta9)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao10 == $resposta10)
{
	$acertou++;
}
else
{
	$errou++;
}
	
	$calc = 10;
	$porcent = $calc * $acertou;
	$data= date('d/m/Y');
	$prova = "prova de geografia";
	$materia = "mudancas climaticas";
	
	$verifica = ("SELECT materiaProva from historico where materiaProva = '$materia' AND emailUsuario = '$email' AND usuario ='$usuario'");
	$res = mysql_query($verifica);
	
	if (mysql_num_rows ( $res ) !=1)
      {
	$sql = "INSERT INTO historico (nomeProva,materiaProva,emailUsuario,usuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$usuario','$acertou','$errou','$porcent','$data')";
	$res = mysql_query($sql);  
	  }
	  else{
		 $sql2 = "INSERT INTO resultados (nomeProva,materiaProva,emailUsuario,usuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$usuario','$acertou','$errou','$porcent','$data')";
		  $res2 = mysql_query($sql2);
	  }
  }
		  ?>
<html>
<head>
	<title>Concluido</title>
	<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
	<meta charset="utf-8">
</head>
<body>
	<div id="tituloR">
		<h1>Você concluiu com sucesso a avaliação!</h1>
	</div>
	<form id="questoesR" name ="questoesR" enctype="multipart/form-data" >
<br>
<h2>1)	O Brasil, dada a sua grande extensão territorial e a predominância de climas úmidos, tem uma extensa rede hidrográfica. Todos os rios, com exceção do Amazonas, possuem regime pluvial e todos são exorreicos, sendo a maioria perene e alguns deles temporários.
SENE, E,; MOREIRA, J. Geografia Geral e do Brasil. São Paulo: Scipione, 2010, p.459. Adaptado.
Em função do regime pluvial, a concentração de rios temporários encontra-se na região: </h2>
<p>
<p>A) Centro-Oeste;</p>
<p>B)Sul ;</p>
<p><h2><font color="#008000"><b>C) Nordeste;</p></font></b></h2>
<p>D) Norte;</p>
<p>E)Sudeste;</p>
<?php 	
	if ($questao1 == $resposta1)
{
	echo "<font color = green> Questao 1 correta!<br></font>";
}
else
{
	echo "<font color = red> Questao 1 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao1,"<br></font></b></h2>";
}
?>


<h2>2) A região Sul do Brasil apresenta um quadro natural marcado principalmente pelas características climáticas, sendo a região que possui as mais baixas temperaturas do país. Sobre os aspectos climáticos e suas relações com a natureza dessa região, é INCORRETO afirmar que: </h2>
			
			
<p>A)  Predomina nessa área o clima subtropical.></p>
<p>B) A maior parte de suas terras fica localizada na Zona Temperado Sul.  ></p>
<p><b><h2><font color="#008000">C)É responsável pelas maiores amplitudes térmicas registradas no país. ></p></font></b></h2>
<p>D) A influência do clima afeta os índices pluviométricos, considerados os mais baixos do Brasil..></p>
<p>E) A Mata das Araucárias se refere a formações vegetais adaptadas ao clima regional e por isso caracterizam a paisagem dessa região.
 ></p>
<br />
<?php
if ($questao2 == $resposta2)
{
	echo "<font color = green> Questao 2 correta!<br></font>";
}
else
{
	echo "<font color = red> Questao 2 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao2,"<br></font></b></h2>";
}
?>


<h2>3)
Para análise das paisagens naturais brasileiras o geógrafo Ab’Saber (1967) propôs uma classificação em domínios morfoclimáticos.:</h2>

<p>A) que a totalidade se faz sentir no momento em que a criança é capaz de discernir que o próximo e o longínquo são categorias de raciocínio estanques, sem relação com a realidade espacial que a cerca ;</p>
<p>B) que o global é um conceito muito distante da realidade do aluno e, portanto, ser aprofundado nos anos finais do ensino fundamental, cabendo ao professor dos anos iniciais concentrar-se na questão local;</p>
<p>C) o dia a dia da criança, a começar pelo seu país, assim como os elementos e/ou ações internas, de caráter global, que determinam ou contribuem para determinar o arranjo social e espacial em que ela vive ;</p>
<p><h2><font color="#008000"><b>D)que a totalidade se faz sentir no momento em que a criança é capaz de discernir que o próximo e o longínquo são categorias de raciocínio estanques, sem relação com a realidade espacial que a cerca </p></font></b></h2>
<p>E) o dia a dia da criança, a começar pelo seu país, assim como os elementos e/ou ações internas, de caráter global, que determinam ou contribuem para determinar o arranjo social e espacial em que ela vive.</p>
<br />
<?php
if ($questao3 == $resposta3)
{
	echo "<font color = green> Questao 3 correta!<br></font>";
}
else
{
	echo "<font color = red> Questao 3 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao3,"<br></font></b></h2>";
}
?>


<h2>4) Sobre o efeito estufa, verifica-se que:</h2>

<p><h2><font color="#008000"><b>A)é gerado pelos gases que formam a atmosfera e que não conseguem reter o calor que vem do solo. ;</p></font></b></h2>
<p> B) é um fenômeno natural por meio do qual a Terra procura conservar constante a sua temperatura. ;</p>
<p> C) torna a Terra um planeta com condições muito mais favoráveis à vida, quando não está presente.. ;</p>
<p> D) é um efeito provocado pelas atitudes inadequadas do homem..;</p>
<p> E)provoca o aquecimento ou o resfriamento do planeta, de acordo com a estação local, sem alterações climáticas sensíveis .</p>
<?php
if ($questao4 == $resposta4)
{
	echo "<font color = green> Questao 4 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 4 errada<br>";
	echo "<h2><b> Sua resposta: ",$questao4,"<br></font></b></h2>";
}
?>


<h2>5)

Assinale a alternativa que indica o principal gás do efeito estufa e as respectivas principais origens:</h2>

<p><h2><font color="#008000"><b> A) CO6 (polióxido de carbono) e suas principais origens são a queima dos chamados biocombustíveis. ; ></p></font></b></h2>
<p> B)H2SO4 (acido sulfúrico) que além de provocar o aquecimento global, também dá origem à chuva ácida;></p>
<p> C)CO2 (dióxido de carbono) e suas principais origens são a queima de combustíveis fósseis (derivados do petróleo), as queimadas e a redução das florestas.;></p>
<p> D)CO2 (dióxido de carbono) e sua principal origem é a quebra das moléculas O3 (Ozônio) pelos raios infravermelhos indos do Sol.
;></p>
<p> E)CO2 (dióxido de carbono) e sua principal origem é a quebra das moléculas O3 (Ozônio) pelos raios infravermelhos indos do Sol.
.></p>
<br />
<?php
if ($questao5 == $resposta5)
{
	echo "<font color = green> Questao 5 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 5 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao5,"<br></font></b></h2>";
}
?>


<h2>6)Pesquisas recentes mostram que a alta taxa de Imagem 037.jpg atmosférico está afetando também os oceanos. Depositado na superfície da água, tal gás acaba misturando-se a ela devido ao movimento dos copépodes – pequenos animais que constituem o plâncton. Tal fato está fazendo com que o pH da água torne-se mais ácido, o que altera a vida de diversas espécies marinhas, podendo inclusive levá-las à extinção. 
Analise as alternativas abaixo e marque a opção cuja ação leva ao acontecimento do fato relatado no texto.</h2>

<p> A)Ampliação da área de terras cultivadas.;</p> 
<p> B)Utilização crescente de combustíveis fósseis.;</p>
<p> C) Crescimento das espécies autotróficas nos oceanos. ;</p>
<p><h2><font color="#008000"><b> D)Maior extração de alimentos dos oceanos.. 
;</p></font></b></h2>
<p> E) Extinção de muitas espécies marinhas aeróbias 
.</p>
<br />
<?php
if ($questao6 == $resposta6)
{
	echo "<font color = green> Questao 6 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 6 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao6,"<br></font></b></h2>";
}
?>


<h2>7) O El Niño, denominado ENOS (El Niño – Oscilação Sul), é um fenômeno natural que ocorre em intervalos cíclicos de 3 a 5 anos na região tropical do oceano Pacífico e envolve processos de interação entre a atmosfera e a hidrosfera, afetando a atuação do clima e modificando a paisagem de diferentes lugares do planeta.
Sobre as condições atmosférico-oceânicas em períodos de El Niño, julgue os itens como (V) VERDADEIROS ou (F) FALSOS:

( ) Os ventos alíseos abrandam sua intensidade, diminuindo as chuvas na Austrália e Indonésia.
( ) Com o aquecimento das águas do Pacífico Central, a célula de circulação do ar se desloca para leste.
( ) A termoclina, zona de transição entre as águas quentes e as mais frias, torna-se menos rasa e, sem os ventos alíseos, diminui a ressurgência, fenômeno que afeta diretamente a atividade pesqueira.

A sequência CORRETA é:</h2>

<p> A)  F, V, V, F, V;</p> 
<p> B) V, F, V, V, F;</p>
<p> C) V, F, F, F, V;</p>
<p> D) F, V, F, F, V;</p>
<p><b><h2><font color="#008000"> E)  F, V, F, V, V</p></font></b></h2>
<br />
<?php
if ($questao7 == $resposta7)
{
	echo "<font color = green> Questao 7 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 7 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao7,"<br></font></b></h2>";
}
?>

<h2>8) 

As mudanças climáticas estão ocorrendo e já é possível notar algumas modificações que provavelmente relacionam-se com a ação do homem. Assim sendo, são necessárias ações urgentes para que nosso impacto no meio ambiente seja reduzido. Analise as alternativas abaixo e marque aquela que não indica uma forma de deter o avanço das mudanças climáticas.</h2>

<p><h2><font color="#008000"><b> A) as empresas multinacionais definem a articulação entre a produção, mão-de-obra, mercado e matéria-prima. ;</p></font></b></h2>
<p> B) comporta processos relacionados à internacionalização da produção;</p>
<p> C)articulação de diversas partes que compõem um todo, com ampliação de distâncias, encolhimento de contextos e limitação de intercâmbios;</p>
<p> D)requalificação dos espaços para atender aos interesses dos atores hegemônicos da economia, da cultura e da política;</p>
<p> E)dinamismo renovado da divisão internacional do trabalho, principalmente nos países subdesenvolvidos.</p>
<br />
<?php
if ($questao8 == $resposta8)
{
	echo "<font color = green> Questao 8 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 8 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao8,"<br></font></b></h2>";
}
?>


<h2>9) 
Muitas pessoas acreditam que as mudanças climáticas afetam exclusivamente a temperatura do planeta, que se torna mais quente. Entretanto, muitas vezes, essas pessoas esquecem que, ao aumentar a temperatura, uma série de organismos e ecossistemas são gravemente afetados. Observe as alternativas abaixo e marque a única que não é uma consequência da alteração da temperatura do planeta.
<br>
<p>A) Diminuição da biodiversidade.;</p> 
<p> B)Alterações do regime de chuvas.
;</p>
<p> C) Secas prolongadas.;</p>
<p><h2><font color="#008000"><b>  D) Aumento da frequência de terremotos.
;</p></font></b></h2>
<p> E)Aumento de doenças respiratórias. 
.</p>
<br />
<?php
if ($questao9 == $resposta9)
{
	echo "<font color = green> Questao 9 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 9 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao9,"<br></font></b></h2>";
}
?>


<h2>10) 
Na perspectiva do mercado capitalista globalizado a dependência internacional do petróleo da maior economia do planeta tem sido objeto de diversos conflitos, dentre eles o caso do Oriente Médio.

Sobre as questões internacionais na invasão do Iraque é CORRETO afirmar: </h2>
			
			<p> A) As invasões são elementos somente para combate ao terrorismo. ;</p>
			<p><h2><font color="#008000"> B) Representam o interesse das petroleiras norte-americanas na riqueza do Oriente Médio. </p></font></b></h2>
			<p>C) O golfo pérsico representa uma área de interesse somente dos palestinos.;</p>
			<p>D) Os interesses no Iraque pelos norte-americanos contrariam aos interesses da França e Alemanha.;</p>
			<p>E)Os problemas que desencadearam as guerras no Iraque são de ordem religiosa.</p>
			<br />
			<br />
			<br />
<?php
if ($questao10 == $resposta10)
{
	echo "<font color = green> Questao 10 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 10 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao10,"<br></font></b></h2>";
}
?>


</form>
<form id="respostas" name="respostas">
<?php

$calc = 10;
$porcent = $calc * $acertou;

echo "<br><b><h1><font color = #006600> Total de acertos:</font> $acertou</b></h1>";
echo "<br><b><h1><font color = red>Total de erros:</font> $errou</h1>";


if ($acertou >=7)
{
echo "<br><h1><b><blink>Porcentagem de acertos:</b></h1>"; 
echo "<h2><b><font color = #006600>$porcent % </blink></b></h2></font>";
}
else
{
echo "<br><h1><b><blink>Porcentagem de acertos:</b></h1>"; 
echo "<h2><b><font color = #FF0000>$porcent %</blink></b></h2></font>";
}



?>
<p align="center"><?php
if (isset($_SESSION["logado"]) && !empty($_SESSION["logado"])) {
	?>
<a href="logadoAluno.php" id="enviar">Página inicial Aluno</a>
<?php
die();
}
else{
	?>
	<a href="logadoProfessor.php" id="enviar">Página inicial</a>
	<?php
	}
?>

</form>
</body>
</html>