<?php
	session_start();
	include_once("connection.php");
if (!isset($_SESSION["logado"])) {
		
			if (!isset($_SESSION["logadoProf"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
	}
	}
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
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='PSolidosGeometricos	.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
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
	$prova = "prova de matematica";
	$materia = "solidos geometricos";
	
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
</head>
<body>
	<div id="tituloR">
		<h1>Você concluiu com sucesso a avaliação!</h1>
	</div>
	<form id="questoesR" name ="questoesR" enctype="multipart/form-data" >
<br>
<h2>1) Das alternativas a seguir sobre os poliedros, assinale aquela que for correta: </h2>
<p>
<p>A) Um poliedro é um sólido geométrico limitado por qualquer tipo de superfície;;</p>
<p>B) Os elementos dos poliedros são os mesmos elementos dos polígonos, uma vez que ambos possuem vértices;</p>
<p><h2><font color="#008000"><b>C) Prismas são poliedros que possuem duas bases poligonais e todas as faces laterais com formato de paralelogramo;</p></font></b></h2>
<p>D) Prismas e pirâmides são os únicos exemplos de poliedros existentes;</p>
<p>E) As esferas são poliedros;</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>a) Incorreta! Um poliedro é um sólido geométrico limitado por polígonos, ou seja, por figura planas. Os poliedros não podem ser limitados por curvas.</p>
<p>b) Incorreta! Os poliedros e polígonos possuem em comum os vértices e os segmentos de reta. Entretanto, nos polígonos, esses segmentos são chamados de lados e, nos poliedros, de arestas. Além disso, os polígonos não possuem faces, que são elementos dos poliedros.</p>
<p>c) Correta!</p>
<p>d) Incorreta! Existe uma terceira classe de poliedros, que são aqueles que não são prismas nem pirâmides. Um exemplo deles são os troncos de pirâmides.</p>
<p>e) Incorreta! As esferas não são poliedros porque não são limitadas por polígonos.</p>
<br><br>

<h2>2) João propôs um desafio a Bruno, seu colega de classe: ele iria descrever um deslocamento pela pirâmide a seguir e Bruno deveria desenhar a projeção desse deslocamento no plano da base da pirâmide.</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG2.jpg" height="300px" width="600px">
			<br>
			<h2> O deslocamento descrito por João foi: mova-se pela pirâmide, sempre em linha reta, do ponto A ao ponto E, a seguir, do ponto E ao ponto M e, depois, de M a C.
				 O desenho que Bruno deve fazer é:</h2>
<p>A) <img src="img/SOLIDOSGEOMETRICOS/alternativaA.jpg" height="100px" width="100px"></p>
<p>B) <img src="img/SOLIDOSGEOMETRICOS/alternativaB.jpg" height="100px" width="100px"></p>
<p><b><h2><font color="#008000">C) <img src="img/SOLIDOSGEOMETRICOS/alternativaC.jpg" height="100px" width="100px"></p></font></b></h2>
<p>D) <img src="img/SOLIDOSGEOMETRICOS/alternativaD.jpg" height="100px" width="100px"></p>
<p>E) <img src="img/SOLIDOSGEOMETRICOS/alternativaE.jpg" height="100px" width="100px"></p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<img src = "img/SOLIDOSGEOMETRICOS/PSGR2.jpg" width="100px" height="100px">
<p>Observe que as ligações propostas por João já foram feitas sobre a vista superior dessa pirâmide. A alternativa que mais se assemelha a essa resposta é a letra C.</p>
<br>
<br />

<h2>3) A planificação de um sólido geométrico é uma figura geométrica bidimensional formada pela superfície de objetos tridimensionais. Assim, a planificação de uma pirâmide de base pentagonal será formada por:</h2>

<p>A) Dois pentágonos e cinco retângulos congruentes;</p>
<p>B) Dois pentágonos e cinco retângulos;</p>
<p>C) Um pentágono e cinco triângulos congruentes;</p>
<p><h2><font color="#008000"><b>D) Um pentágono e cinco triângulos;</p></font></b></h2>
<p>E) Um pentágono e cinco triângulos equiláteros.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>a) Incorreta, pois o sólido geométrico formado por dois pentágonos e cinco retângulos congruentes é o prisma de base pentagonal.</p>
<p>b) Incorreto, uma vez que o sólido geométrico formado por dois pentágonos e cinco retângulos quaisquer também é um prisma.</p>
<p>c) Incorreta. Embora uma pirâmide de base pentagonal seja formada por um pentágono e cinco triângulos, não há garantia de que eles sejam congruentes neste exercício.</p>
<p>d) Correta. Como o exercício não se refere ao formato da pirâmide, devemos assumir que os triângulos, os quais serão suas faces, possuem formas diversas.</p>
<p>e) Incorreta. Neste exercício, não foi informado se os triângulos são equiláteros.</p>
<br>
<br />

<h2>4) Qual a área da planificação de um cone reto cuja geratriz mede 100 cm e cujo raio mede 25 cm?</h2>

<p><h2><font color="#008000"><b>A) 9812,5 cm2;</p></font></b></h2>
<p> B) 10812,5 cm2;</p>
<p> C) 11812,5 cm2;</p>
<p> D) 12812,5 cm2;</p>
<p> E) 13812,5 cm2.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>A = πr(g + r)</p>
<p>A = 3,14·25·(100 + 25)</p>
<p>A = 78,5·(125)</p>
<p>A = 9812,5 cm2.</p>
<br />
<br />

<h2>5) Qual das imagens abaixo é a melhor planificação do prisma oblíquo?</h2>
<img src="img/matematicaQuestao5.png" height="300px" width="600px">
<br><br>
<p><h2><font color="#008000"><b> A) <img src="img/SOLIDOSGEOMETRICOS/5altA.jpg" height="100px" width="100px"></p></font></b></h2>
<p> B) <img src="img/SOLIDOSGEOMETRICOS/5altB.jpg" height="100px" width="100px"></p>
<p> C) <img src="img/SOLIDOSGEOMETRICOS/5altC.jpg" height="100px" width="100px"></p>
<p> D) <img src="img/SOLIDOSGEOMETRICOS/5altD.jpg" height="100px" width="100px"></p>
<p> E) <img src="img/SOLIDOSGEOMETRICOS/5altE.jpg" height="100px" width="100px"></p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>Observe que o prisma é oblíquo, mas nem todas as suas faces laterais são paralelogramos quaisquer. A face lateral direita é um retângulo, e a face frontal é um paralelogramo. A única alternativa que intercala paralelogramos e retângulos é a letra A.</p>
<br />
<br>

<h2>6) A planificação de um sólido geométrico é uma figura geométrica plana obtida a partir da superfície do sólido em questão. Assinale, das alternativas a seguir, aquela que contém as figuras bidimensionais obtidas da planificação do cone reto.</h2>

<p> A) Um triângulo e uma circunferência;</p> 
<p> B) Um triângulo e um círculo;</p>
<p> C) Um setor circular e uma circunferência;</p>
<p><h2><font color="#008000"><b> Um setor circular e um círculo;</p></font></b></h2>
<p> E) Um setor circular e um triângulo.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<img src = "img/SOLIDOSGEOMETRICOS/PSGR2.jpg" width="100px" height="100px">
<p>Observando essa planificação, podemos notar que as figuras obtidas são um setor circular e um círculo.</p>
<br />

<h2>7) Observe o sólido geométrico a seguir e assinale a alternativa correta:</h2>
<br>
<img src="img/SOLIDOSGEOMETRICOS/PSG7.jpg" height="300px" width="600px">
<br>
<p> A) É um prisma, pois possui duas bases e faces laterais planas;</p> 
<p> B) É uma pirâmide, pois afunila em sua parte superior;</p>
<p> C) É um cilindro, pois possui uma parte arredondada;</p>
<p> D) É um corpo redondo, pois possui uma parte arredondada;</p>
<p><b><h2><font color="#008000"> E) Nenhuma das alternativas anteriores está correta.</p></font></b></h2>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>O sólido em questão não é prisma nem pirâmide, pois possui uma parte arredondada, o que não é encontrado nos sólidos. Também não é cilindro, uma vez que as “bases” de um cilindro são círculos. Além disso, não é um corpo redondo, pois esse tipo de sólido possui a característica de rolar se colocado em uma superfície plana levemente inclinada. O sólido em questão não rola, independentemente do modo como for colocado. Assim, nenhuma das alternativas está correta.</p>
<br />
<br>
<h2>8) Maria quer inovar em sua loja de embalagens e decidiu vender caixas com diferentes formatos. Nas imagens apresentadas estão as planificações dessas caixas.</h2>

<p><h2><font color="#008000"><b> A) Cilindro, prisma de base pentagonal e pirâmide;</p></font></b></h2>
<p> B) Cone, prisma de base pentagonal e pirâmide;</p>
<p> C) Cone, tronco de pirâmide e pirâmide;</p>
<p> D) Cilindro, tronco de pirâmide e prisma;</p>
<p> E) Cilindro, prisma e tronco de cone.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>Todo cilindro é formado por duas “bases” com formato de círculo. A parte curva do cilindro, ao ser planificada, gera um retângulo. Por isso, a primeira imagem é a planificação de um cilindro. A segunda imagem possui duas bases poligonais congruentes e cinco faces retangulares, justamente o necessário para a construção de um prisma pentagonal reto. Por fim, temos quatro triângulos regulares e congruentes, o número de faces necessárias para construção de um tetraedro, que é uma pirâmide. Assim, os sólidos obtidos serão um cilindro, um prisma de base pentagonal e uma pirâmide.</p>
<br>
<br />

<h2>9) Um porta-lápis de madeira foi construído no formato cúbico, seguindo o modelo ilustrado a seguir. O cubo de dentro é vazio. A aresta do cubo maior mede 12 cm e a do cubo menor, que é interno, mede 8 cm.</h2>
<br>
<p>A) 12 cm3;</p> 
<p> B) 64 cm3;</p>
<p> C) 96 cm3;</p>
<p><h2><font color="#008000"><b>  D) 1 216 cm3;</p></font></b></h2>
<p> E) 1 728 cm3.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>VC - vc2 =</p>
<p>12³ - 8³ =</p>
<p>1 728 -512= 1216 cm3.</p>
<p>Gabarito: Letra D.</p>
<br />

<h2>10) Um arquiteto está fazendo um projeto de iluminação de ambiente e necessita saber a altura que deverá instalar a luminária ilustrada na figura.</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG10.jpg" height="300px" width="600px">
			<br>
			<p> A) 3 m.;</p>
			<p><h2><font color="#008000"> B) 4 m.;</p></font></b></h2>
			<p>C) 5 m.;</p>
			<p>D) 9 m.;</p>
			<p>E) 16 m.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>A área a ser iluminada é uma circunferência de área 28,26 m2. Basta aplicar na fórmula da área da circunfência para descobrirmos o seu raio:</p>
<img src = "img/SOLIDOSGEOMETRICOS/PSGR10.jpg" width="300px" height="100px">
<br>
<p>Observe na figura que a altura do Cone forma um ângulo reto com o raio da circunferência da base  e a geratriz g será a hipotenusa desse triângulo retângulo formado. Basta aplicar o teorema de pitágoras:</p>
<p>h2 + r2 = g2</p>
<p>h2 + 32 = 52</p>
<p>h2 = 25 - 9</p>
<p>h = 4 m</p>
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