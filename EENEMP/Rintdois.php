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
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pintdois.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pintdois.php';</script>";
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
	$prova = "prova de ingles";
	$materia = "interpretação 2";
	
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
<h2>1)I don't like to spend my vacation in the country. There isn't
__________ to do. </h2>
<p>
<p>A) some ;</p>
<p>B)Much ;</p>
<p><h2><font color="#008000"><b>C)  many  ;</p></font></b></h2>
<p>D) Nothing ;</p>
<p>E) Teverything ;</p>
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


<h2>2) Choose the option which completes the sentences below
correctly:
It is __________ use trying to change her mind.
Slowly, __________ children began coming to school.
Unfortunately, he had __________ friends.
Could you possibly give me __________ help?  </h2>
			
			
<p>A)a little / a few / few / little. ></p>
<p>B)a little / a few / little / little.  ></p>
<p><b><h2><font color="#008000">C) a little / few / few / a little.></p></font></b></h2>
<p>D) little / few / little / a little.></p>
<p>E) little / a few / few / a little></p>
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


Indicate the alternative that best completes the following
sentence:
She __________ German very well:</h2>

<p>A) speaks and both writes.;</p>
<p>B) both speaks and writes;</p>
<p>C) speaks both and writes.;</p>
<p><h2><font color="#008000"><b>D)speaks and write both. </p></font></b></h2>
<p>E) both speaks and both writes.</p>
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
Reescreva corretamente a frase a sentença apresentada a
seguir:
Yes, it does depend on the age of the child.:</h2>

<p><h2><font color="#008000"><b>A)Yes, it really depends on the child's age;</p></font></b></h2>
<p> B)Yes, it really depends on an aged child ;</p>
<p> C) Yes, it really depends on what age have the child.</p>
<p> D)Yes, it depends on what age the child does has;</p>
<p> E)Yes, it does depend on what age does the child has.</p>
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



Escolha a alternativa que melhor interage com a oração
dada:
How do you do?</h2>

<p><h2><font color="#008000"><b> A)I forgot!; ></p></font></b></h2>
<p> B)It is easy;></p>
<p> C)How do you do;></p>
<p> D) I don't know.;></p>
<p> E) But I don't.></p>
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


<h2>6)
Which is the suitable answer to this question?
Do you want some ice-cream?.</h2>

<p> A)Last night;</p> 
<p> B)In my pocket;</p>
<p> C) Last Sunday. ;</p>
<p><h2><font color="#008000"><b> D)It is not black.. 
;</p></font></b></h2>
<p> E) No, thank you.. 
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


<h2>7)Qual a forma correta?: </h2>

<p> A)  This book tells me as long the river was;</p> 
<p> B) This book tells how long the river is;</p>
<p> C)  This book tells how long the river is ago;;</p>
<p> D) These books tells me how long the rivers were;</p>
<p><b><h2><font color="#008000"> E)  This book tells me how long the river is.</p></font></b></h2>
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


Assinale a alternativa correta:
Why __________ go home now?</h2>

<p><h2><font color="#008000"><b> A)aren't we ;</p></font></b></h2>
<p> B) didn't we;</p>
<p> C)haven't we;</p>
<p> D)don't we;</p>
<p> E)wouldn't we.</p>
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



Assinale a alternativa correta:
He doesn't __________ anymore.</h2>
<br>
<p>A)smoking;</p> 
<p> B)no smoking;</p>
<p> C) smokes;</p>
<p><h2><font color="#008000"><b>  D) smoked;
;</p></font></b></h2>
<p> E) smoke.</p>
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


Mark the CORRECT alternative to complete the sentence:
His body __________ in the cemetery: </h2>
			
			<p> A) lies;</p>
			<p><h2><font color="#008000"> B) laid. </p></font></b></h2>
			<p>C)lays;</p>
			<p>D) lain.;</p>
			<p>E)Laid.</p>
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