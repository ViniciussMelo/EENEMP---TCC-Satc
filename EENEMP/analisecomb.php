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

if(isset($_POST['enviar'])){
	$questao1 = $_POST["questao1"];
	$questao2 = $_POST["questao2"];
	$questao3 = $_POST["questao3"];
	$questao4 = $_POST["questao4"];
	$questao5 = $_POST["questao5"];
	$questao6 = $_POST["questao6"];
	$questao7 = $_POST["questao7"];
	$questao8 = $_POST["questao8"];
	$questao9 = $_POST["questao9"];
	$questao10 = $_POST["questao10"];

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
		  window.location.href='simulado.php';</script>";
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
	if (!isset($_SESSION["logado"])) { 
	$email = $_SESSION['logado'];
	}
	else{
		if (!isset($_SESSION["logado"])) { 
	$email = $_SESSION['logado'];
	}
	}
	$prova = "Prova de matematica";
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
	
	$verifica = ("SELECT emailUsuario from historico where emailUsuario = '$email'");
	$res = mysql_query($verifica);
	$prova = "prova de matematica";
	$materia = "Analise combinatória";
	
	if (mysql_num_rows ( $res ) !=1)
      {
	$sql = "INSERT INTO historico (nomeProva,materiaProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$acertou','$errou','$porcent','$data')";
	$res = mysql_query($sql);
	if ($res)
      {
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Prova enviada com Sucesso!!!');</script>";
		  die();
	  }else
      {
          echo 'Falha ao enviar prova!!! ';
      }  
	  }
	  else{
		  $sql2 = "INSERT INTO resultados (nomeProva,materiaProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,media,data) VALUES ('$prova','$materia','$email','$acertou','$errou','$porcent','$media','$data')";
		  $res2 = mysql_query($sql2);
			if ($res)
			{
				echo"<script language='javascript' type='text/javascript'>
				alert('Prova já realizada, novos dados enviados com sucesso!!!');</script>";
				
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
<h2>1) Considere todas as trinta e duas seqüências, com cinco elementos cada uma, que podem ser formadas com os algarismos 0 e 1. Quantas dessas seqüências possuem pelo menos três zeros em posições consecutivas?: </h2>
<p>
<p>A) 3;;</p>
<p>B)5;</p>
<p><h2><font color="#008000"><b>C) 8;</p></font></b></h2>
<p>D) 12;</p>
<p>E) 16;</p>
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

<h2>2) De uma  urna contendo 10 bolas coloridas, sendo 4 brancas, 3 pretas, 2 vermelhas e 1 verde, retiram-se, de uma vez, 4 bolas. Quantos são os casos possíveis em que aparecem exatamente uma bola de cada cor?</h2>
			
			<h2> O deslocamento descrito por João foi: mova-se pela pirâmide, sempre em linha reta, do ponto A ao ponto E, a seguir, do ponto E ao ponto M e, depois, de M a C.
				 O desenho que Bruno deve fazer é:</h2>
<p>A) 1></p>
<p>B) 72></p>
<p><b><h2><font color="#008000">C) 24></p></font></b></h2>
<p>D) 18></p>
<p>E) 12></p>
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

<p>Observe que as ligações propostas por João já foram feitas sobre a vista superior dessa pirâmide. A alternativa que mais se assemelha a essa resposta é a letra C.</p>
<br>
<br />

<h2>3) Um professor de Matemática comprou dois livros para premiar dois alunos de uma classe de 42 alunos. Como são dois livros diferentes, de quantos modos distintos pode ocorrer a premiação?</h2>

<p>A) 1722;</p>
<p>B) 861;</p>
<p>C) 1764;</p>
<p><h2><font color="#008000"><b>D) 3444;</p></font></b></h2>
<p>E) 242.</p>
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

<h2>4) O número de equipes de trabalho que poderão ser formadas num grupo de dez indivíduos, devendo cada equipe ser constituída por um coordenador, um secretário e um digitador, é:?</h2>

<p><h2><font color="#008000"><b>A) 700;</p></font></b></h2>
<p> B) 600;</p>
<p> C) 400;</p>
<p> D) 360;</p>
<p> E) 240.</p>
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


<h2>5) Um juiz dispõe de 10 pessoas, das quais somente 4 são advogados, para formar um único júri com 7 jurados. O número de formas de compor o júri, com pelo menos 1 advogado, é</h2>

<p><h2><font color="#008000"><b> A) 120></p></font></b></h2>
<p> B) 108></p>
<p> C) 160></p>
<p> D) 180></p>
<p> E) 200></p>
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


<h2>6) 6)
Do cardápio de uma festa constavam dez diferentes tipos de salgadinhos dos quais só quatro seriam servidos quentes. O garçom encarregado de arrumar a travessa e servi-la foi instruído para que a mesma contivesse sempre só 2 diferentes tipos de salgadinhos frios, e só 2 diferentes dos quentes. De quantos modos diferentes, teve o garçom a liberdade de selecionar os salgadinhos para compor a travessa, respeitando as instruções?</</h2>

<p> A) 90;</p> 
<p> B) 21;</p>
<p> C) 240;</p>
<p><h2><font color="#008000"><b> 38;</p></font></b></h2>
<p> E) 60.</p>
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


<h2>7) O número de soluções inteiras, maiores ou iguais a zero, da equação x + y + z + w = 5 é:</h2>

<p> A) 36;</p> 
<p> B) 53;</p>
<p> C) 52;</p>
<p> D) 56;</p>
<p><b><h2><font color="#008000"> E) 54.</p></font></b></h2>
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

<h2>8) Dentre os anagramas distintos que podemos formar com n letras, das quais duas são iguais, 120 apresentam estas duas letras iguais juntas. O valor de n é:</h2>

<p><h2><font color="#008000"><b> A) 5;</p></font></b></h2>
<p> B) 6;</p>
<p> C) 4;</p>
<p> D) 12;</p>
<p> E) 7.</p>
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


<h2>9) A senha de acesso a um jogo de computador consiste em quatro caracteres alfabéticos ou numéricos, sendo o primeiro necessariamente alfabético. O número de senhas possíveis será então:</h2>
<br>
<p>A) 364;</p> 
<p> B) 10.36³;</p>
<p> C) 26.36³.;</p>
<p><h2><font color="#008000"><b>  D) 264;</p></font></b></h2>
<p> E) 10.264.</p>
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
 Letra D.</p>
<br />

<h2>10) Quantas motos podem ser licenciadas se cada placa tiver 2 vogais (podendo haver vogais repetidas) e 3 algarismos distintos?</h2>
			
			<p> A) 25000.;</p>
			<p><h2><font color="#008000"> B) 120.;</p></font></b></h2>
			<p>C) 120000.;</p>
			<p>D) 180000;</p>
			<p>E) 320000</p>
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
<p align="center">
<a href="logadoAluno.php" id="enviar">Página inicial</a>
</form>
</body>
</html>
		<?php
				die();
			}
				}
				
				{
				 echo 'Falha ao enviar prova!!! ';
				}
	  }
  }

	?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de matemática</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de matemática sobre <font color=red>Analise combinatória</h1></font>
		</form>
		
		<form id="questoes" action="analisecomb.php" method = "POST">
			<br>
			<h2>1) Considere todas as trinta e duas seqüências, com cinco elementos cada uma, que podem ser formadas com os algarismos 0 e 1. Quantas dessas seqüências possuem pelo menos três zeros em posições consecutivas? </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 3;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  5;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 8;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)12;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) 16.</label>
			<br />
			<br />
			
			
			<h2>2) De uma  urna contendo 10 bolas coloridas, sendo 4 brancas, 3 pretas, 2 vermelhas e 1 verde, retiram-se, de uma vez, 4 bolas. Quantos são os casos possíveis em que aparecem exatamente uma bola de cada cor?</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) 120></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) 72></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) 24></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) 18></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) 12></label>
			<br />
			<br />
			
			<h2>3)Um professor de Matemática comprou dois livros para premiar dois alunos de uma classe de 42 alunos. Como são dois livros diferentes, de quantos modos distintos pode ocorrer a premiação?</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) 1722;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) 861;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) 1764;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) 3444;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) 242.</label>
			<br />
			<br />
			
			<h2>4) O número de equipes de trabalho que poderão ser formadas num grupo de dez indivíduos, devendo cada equipe ser constituída por um coordenador, um secretário e um digitador, é</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)720;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 600;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) 480;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) 360;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) 240.</label>
			<br />
			<br />
			
			<h2>5) Um juiz dispõe de 10 pessoas, das quais somente 4 são advogados, para formar um único júri com 7 jurados. O número de formas de compor o júri, com pelo menos 1 advogado, é:</h2>
			
			<label>
			<input type="radio" name="questao5" value="a" /> A) 120></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 108></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 160></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 140></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) 128></label>
			<br />
			<br />
			
			<h2>6) Do cardápio de uma festa constavam dez diferentes tipos de salgadinhos dos quais só quatro seriam servidos quentes. O garçom encarregado de arrumar a travessa e servi-la foi instruído para que a mesma contivesse sempre só 2 diferentes tipos de salgadinhos frios, e só 2 diferentes dos quentes. De quantos modos diferentes, teve o garçom a liberdade de selecionar os salgadinhos para compor a travessa, respeitando as instruções?</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) 90;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) 21;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) 240;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) 38;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) 80.</label>
			<br />
			<br />
			
			<h2>7) O número de soluções inteiras, maiores ou iguais a zero, da equação x + y + z + w = 5 é:</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A)36%;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 53%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 52%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) 56%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) 54%.</label>
			<br />	
			<br />
		
			<h2>8)Dentre os anagramas distintos que podemos formar com n letras, das quais duas são iguais, 120 apresentam estas duas letras iguais juntas. O valor de n é</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) 5;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) 6;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) 4;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) 122;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) 7.</label>
			<br />
			<br />
	
			<h2>9) UA senha de acesso a um jogo de computador consiste em quatro caracteres alfabéticos ou numéricos, sendo o primeiro necessariamente alfabético. O número de senhas possíveis será então</h2>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) 364;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 10.36³;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 264;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 26.36³;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 10.264.</label>
			<br />
			<br />

			<h2>10) Quantas motos podem ser licenciadas se cada placa tiver 2 vogais (podendo haver vogais repetidas) e 3 algarismos distintos?</h2>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A) 32000;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) 18000.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 122000</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 120;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) 25000.</label>
			<br />
			<br />
			<br>
			<p align="center">
			<input type="submit" name="enviar" id = "enviar" value="Ver resultados" />
			</p>
			<br>

		</form>
	</div>
	<script>
	function pegarDataAtual(){
		data = new Date();
		document.getElementById('data').value = data.getDay()+'/'+data.getMonth()+'/'+data.getFullYear();
	}
	</script>
	</body>
</html>