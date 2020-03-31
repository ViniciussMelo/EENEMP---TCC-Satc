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
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pvariacao.php';</script>";
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
	$prova = "prova de português";
	$materia = "variacao linguística";
	
	$verifica = ("SELECT materiaProva from historico where materiaProva = '$materia' AND emailUsuario = '$email'");
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
<h2>1)  A variedade linguística dominante no texto apresenta-se, simultaneamente, : </h2>
<p>
<p>A) informal e caracterizada por regionalismo.  ;</p>
<p>B)tensa e caracterizada por formalidade.  ;</p>
<p><h2><font color="#008000"><b>C)descontraída e tendente à norma-padrão. ;</p></font></b></h2>
<p>D) sofisticada e tendente à erudição. .;</p>
<p>E) informal e caracterizada por regionalismo.;</p>
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


<h2>2) A linguagem utilizada no texto tende : </h2>
			
			
<p>A) a à variedade formal e à conotação, com interferências significativas da coloquialidade. ></p>
<p>B) à variedade informal e à conotação, com interferências significativas da formalidade.   ></p>
<p><b><h2><font color="#008000">C) à variedade informal e à denotação, sem interferências significativas da formalidade.></p></font></b></h2>
<p>D) à variedade formal e à denotação, sem interferências significativas da coloquialidade. 
></p>
<p>E) à variedade formal e à conotação, com interferências significativas da coloquialidade. ></p>
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
Na leitura do fragmento do texto Antigamente constata-se, pelo emprego de palavras obsoletas, que itens lexicais outrora produtivos não mais o são no português brasileiro atual. Esse fenômeno revela que:</h2>

<p>A)  a língua portuguesa de antigamente carecia de termos para se referir a fatos e coisas do cotidiano. ;</p>
<p>B) o português brasileiro se constitui evitando a ampliação do léxico proveniente do português europeu.;</p>
<p>C)  a heterogeneidade do português leva a uma estabilidade do seu léxico no eixo temporal. ;</p>
<p><h2><font color="#008000"><b>D)o português brasileiro apoia-se no léxico inglês para ser reconhecido como língua independente.</p></font></b></h2>
<p>E) o léxico do português representa uma realidade linguística variável e diversificada.
 .</p>
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


<h2>4) 

Considerando-se o fragmento “desses milhares de meninos que não pediram pra nascer” à luz da modalidade escrita e falada da língua, pode-se constatar o emprego da variação linguística?</h2>

<p><h2><font color="#008000"><b>A) Regional . ;</p></font></b></h2>
<p> B) Literária”. ;</p>
<p> C) Coloquial  ;</p>
<p> D) Culta;</p>
<p> E)Técnica .</p>
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
De acordo com o excerto, o desenvolvimento de uma pedagogia da variação linguística </h2>

<p><h2><font color="#008000"><b> A) prioriza a seleção dos objetos de ensino a partir de uma visão de língua baseada na homogeneidade e na desvalorização dos seus aspectos funcionais e estruturais.   ></p></font></b></h2>
<p> B) pressupõe a assunção de uma concepção de ensino produtivo de língua que contemple o trabalho com as variedades constitutivas da norma-padrão, ampliando as habilidades de uso da linguagem do aluno.></p>
<p> C)prioriza, nas práticas pedagógicas, as formas léxico-gramaticais das variedades escritas e faladas que constituem a chamada norma-padrão.></p>
<p> D)  
pressupõe a assunção de uma concepção de ensino de língua descritivo o qual leva o aluno a identificar os mecanismos estruturais da língua, privilegiando a variedade escrita culta e a correção formal da linguagem.
></p>
<p> E) 
Diz-se a assunção de uma concepção de ensino de língua descritivo o qual leva o aluno a identificar os mecanismos estruturais da língua, privilegiando a variedade escrita culta e a correção formal da linguagem.
</p>
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


<h2>6) Nos quinto e sexto parágrafos, a linguagem apresenta-se  é.</h2>

<p> A)em norma-padrão, com interferências localizadas de informalidade. ;</p> 
<p> B) em norma-padrão, sem interferências localizadas de informalidade. ;</p>
<p> C) em registro informal, com interferências da norma-padrão, em consonância com o gênero discursivo.;</p>
<p><h2><font color="#008000"><b> D)em registro informal, sem interferências da norma-padrão, em consonância com o gênero discursivo. 
;</p></font></b></h2>
<p> E) em registro formal, sem interferências da norma-padrão, em consonância com o gênero discursivo.  (l.6).
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


<h2>7) 

Em São Paulo diz-se “bexigas”, enquanto no Rio de Janeiro diz-se “balões”.

Essa diferença é um exemplo de :</h2>

<p> A)linguagem coloquial.;</p> 
<p> B) Gíria;</p>
<p> C) regionalismo.;</p>
<p> D)  linguagem erudita. ;</p>
<p><b><h2><font color="#008000"> E)  arcaísmo.</p></font></b></h2>
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

<h2>8) Assinale o segmento do texto que mostra um emprego de linguagem informal. .</h2>

<p><h2><font color="#008000"><b> A) velocidade característica de Bolt, que poderia ser mais bem aproveitada no futebol.;</p></font></b></h2>
<p> B) vontade de trocar de esporte manifestada por diversos atletas olímpicos.;</p>
<p> C) cena hipotética imaginada na qual Usain Bolt atua como jogador de futebol.;</p>
<p> D) intenção de Bolt de deixar as pistas de atletismo para se dedicar ao futebol.;</p>
<p> E) vontade de trocar de esporte manifestada por diversos atletas olímpicos...</p>
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


<h2>9) No texto 2, a presença de traços da linguagem coloquial é visível nos depoimentos; a frase que mostra variante formal é: </h2>
<br>
<p>A) Uma luta de boxe é muito mais chocante....;</p> 
<p> B) quando a gente está presente no ginásio.  (l. 11 e 12).;</p>
<p> C) é divertido ver um deles cair à sua frente.  (l.12).;</p>
<p><h2><font color="#008000"><b>  D) Na TV não tem emoção. 
;</p></font></b></h2>
<p> E) O sangue é mostrado na nossa cara.
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


<h2>10) No texto em questão observam-se acentuadas marcas de informalidade na linguagem utilizada. Em virtude disso, essa linguagem é  </h2>
			
			<p> A) inadequada uma vez que na escrita não se admitem marcas linguísticas de informalidade tão acentuadas;</p>
			<p><h2><font color="#008000"> B)adequada, apesar das marcas de informalidade, o que não interfere na compreensão da mensagem;</p></font></b></h2>
			<p>C) inadequada porque deveria ter sido elaborada numa linguagem mais formal, já que é dirigido a um público de especialistas. ;</p>
			<p>D) adequada porque o público a quem se dirige não poderia entender a mensagem se escrito em registro um pouco mais formal;</p>
			<p>E) inadequada porque subentende-se que não foi elaborada por especialista. </p>
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