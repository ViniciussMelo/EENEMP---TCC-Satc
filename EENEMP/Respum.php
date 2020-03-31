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
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pespum.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pespum.php';</script>";
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
	$resposta1 = "b";
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
	$prova = "prova de espanhol";
	$materia = "interpretacao 1";
	
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
<h2>1)“Los tubos de pintura limpios y brillantes contienen un montón de experiencias para mí...
los acaricio con mis manos temblantes de emoción, como deben hacerlo los enamorados...
me veo ya gozar la pintura...”.
In:http://perso.wanadoo.fr/art-deco.france/daliesp.htm
En el fragmento, Dalí reconoce, ya a los 15 años, que su labor artística está llena de: </h2>
<p>
<p>A)  sensualidad ;</p>
<p>B) nacionalidad ;</p>
<p><h2><font color="#008000"><b>C) racionalidad;</p></font></b></h2>
<p>D) inseguridad ;</p>
<p>E) insatisfacción ;</p>
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


<h2>2) 
Sólo en primavera lucen los machos adultos plumajes de llamativos colores."
La oración que equivale a la anterior es: </h2>
			
			
<p>A) En primavera las plumas de los patos machos presentan colores llamativos. ></p>
<p>B) Tambien en verano el color de los patos es llamativo..  ></p>
<p><b><h2><font color="#008000">C) Unicamente en la primavera los patos tienen plumaje colorido.;></p></font></b></h2>
<p>D)Así como en la primavera, en invierno los patos tienen plumaje colorido..></p>
<p>E)Unicamente en la primavera los patos machos no cambian el color de sus plumas.></p>
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
El desorrollo de las investigaciones de "taxonomía folk...":</h2>

<p>A)convierte México en pionero de los estudios de esa area.;</p>
<p>B) influencia la criación de dialectos y lenguajes.;</p>
<p>C)influencia los trabajos de biólogos, antropólogos y agrónomo;</p>
<p><h2><font color="#008000"><b>D)produce muchos diccionarios y estudios antropológicos; </p></font></b></h2>
<p>E) produce progreso económico y de identidad nacional.</p>
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
En México conviven varias etnías, por ejemplo:</h2>

<p><h2><font color="#008000"><b>A)Folk, mayas, náhual, tzeltales. ;</p></font></b></h2>
<p> B)Del Passo, folk, mayas, nahuas. ;</p>
<p> C)Yucatán, mayas, náhual, tzeltales.;</p>
<p> D)Nahuas, Yacután, Chiapas, tzeltales.;</p>
<p> E)Mayas, náhual, tzeltales, nahuas..</p>
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


El estudio de la sistemática precientífica generalmente es hecho por:</h2>

<p><h2><font color="#008000"><b> A)antropólogos, biólogos y médicos.; ></p></font></b></h2>
<p> B)antropólogos, biólogos y agrónomos.;></p>
<p> C)antropólogos, ecólogos y economistas.;></p>
<p> D)agrónomos, biólogos y médicos.;></p>
<p> E) agrónomos, ecólogos y médicos.></p>
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

Marque la alternativa CORRECTA.
¿Que hicieron juntos Costa Y Wright?.</h2>

<p> A)Huyeron en el primer tren.;</p> 
<p> BCaminaron con la señora en el andén.;</p>
<p> C) Robaron una casa ;</p>
<p><h2><font color="#008000"><b> D)Durmieron en la sala de espera. 
;</p></font></b></h2>
<p> E) Charlaron como dos fantasmas
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
¿Como reaccionó Costa cuando una señora se sentó a su lado y le dió conversación? </h2>

<p> A)  Se puso a bostezar para fingir que tenia sueño.;</p> 
<p> B)Contestó muy fastidiado.;</p>
<p> C)  Fue a dormirse.;</p>
<p> D) Empezó a conversar con un fantasma.;</p>
<p><b><h2><font color="#008000"> E)  Trató de levantarse.</p></font></b></h2>
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


Según el texto, ¿Cuáles son las dos líneas principales de problemas madrileños?”</h2>

<p><h2><font color="#008000"><b> A)Atentados ecológicos y terroristas;</p></font></b></h2>
<p> B)La polución industrial y urbana sobre los rios y la explosión urbanística;</p>
<p> C)Pequeños espacios y gestión;</p>
<p> D)Falta de espacios naturales y la segunda residencia
;</p>
<p> E)Conservación y declaración de espacios naturale
.</p>
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



Según el texto, ¿Qué está llenando el espacio rural madrileño?:</h2>
<br>
<p>A)La polución y erosión de los rios.;</p> 
<p> B)Los cultivos y bosques;</p>
<p> C)Espacios naturales protegidos;</p>
<p><h2><font color="#008000"><b>  D) Espacios naturales sin protección
;</p></font></b></h2>
<p> E) La segunda residencia de los madrileños..</p>
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


La frase “empieza a doler” (ref. 1) en el texto se refiere a: </h2>
			
			<p> A) el final del proceso de dolor ;</p>
			<p><h2><font color="#008000"> B)  proceso intermedio de dolor? </p></font></b></h2>
			<p>C)sin ningún tipo de dolor;</p>
			<p>D) el inicio del proceso de dolor;</p>
			<p>E)sintiendo mucho dolor.

</p>
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