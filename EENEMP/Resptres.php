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
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pesptres.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pesptres.php';</script>";
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
	$materia = "interpretacao 3";
	
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
<h2>1)En la publicidad, se justifica lo dicho en el primer bloque: </h2>
<p>
<p>A) porque la distancia entre las universidades es muy corta.;</p>
<p>B) porque cada una ofrece un tipo de especialización.;</p>
<p><h2><font color="#008000"><b>C) porque las personas prefieren una formación más sólida.;</p></font></b></h2>
<p>D) porque el acceso a todas es virtual. ;</p>
<p>E)  No se justifica, es una paradoja.</p>
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
La lectura de la historieta de Quino permite afirmar que: </h2>
			
			
<p>A)Adán está encantado con el regalo que le hace Diós.. ></p>
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
Sería incorrecto decir que.":</h2>

<p>A)Eva no participa lo más mínimo en la historieta, es casi una figura de adorno en la
historia..;</p>
<p>B) influencia la criación de dialectos y lenguajes.;</p>
<p>C)influencia los trabajos de biólogos, antropólogos y agrónomo;</p>
<p><h2><font color="#008000"><b>D)Adán prefiere tener una madre antes de tener a Eva.; </p></font></b></h2>
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

Marque la alternativa que completa, correcta y respectivamente, los huecos del texto a
seguir.:</h2>

<p><h2><font color="#008000"><b>A)confiada e inocente - como esa - lo vió ;</p></font></b></h2>
<p> B)confiada e inocente - como esa - le vió ;</p>
<p> C)confiada e inocente - como ésa - lo vio;</p>
<p> D)confiada y inocente - como esa - la vio;</p>
<p> E)confiada y inocente - como ésa - la vió</p>
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



De acordo com o texto, segundo dados do Instituto Cervantes:</h2>

<p><h2><font color="#008000"><b> A)80% dos alunos do ensino primário nos EUA preferem o espanhol.; ></p></font></b></h2>
<p> B)90% dos alunos do ensino secundário nos EUA difundem a língua espanhola.;></p>
<p> C)80% dos alunos do ensino secundário nos EUA decidem-se pelo espanhol.;></p>
<p> D)90% dos alunos do ensino primário nos EUA elogiam a língua espanhola.;></p>
<p> E) 80% dos alunos do ensino secundário divulgam o espanhol..></p>
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

MLa expresión “meter en cintura” que aparece en la línea 33/34 del texto signi?ca: 
.</h2>

<p> A)matarlas en el aire..;</p> 
<p> B)meter a todas una trola.;</p>
<p> C) flexibilizar la administración comunitaria. ;</p>
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
¿Um casal de turistas uruguaios estava conversando enquanto passeava pelo Rio de Janeiro. A moça disse ao rapaz: “Tenemos que llegar muy temprano a la playa.”. Um brasileiro que passava próximo a eles tentava imaginar qual era o significado dessa fala.

Assinale a alternativa que traz a tradução mais adequada para a fala da turista? </h2>

<p> A) Temos que chegar muito juntos à praia.;</p> 
<p> B)Temos que chegar bem junto à praia.;</p>
<p> C) Temos que chegar mais tarde à praia.	;</p>
<p> D) Temos que chegar bem cedo à praia.;</p>
<p><b><h2><font color="#008000"> E)  Temos que chegar e ficar muito tempo na praia</p></font></b></h2>
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



En el Texto I, se ve lo siguiente:
“No obstante, a la espera de que la Comunidad de Madrid cumpla con su compromiso educativo, en el momento de la determinación del 35% del currículo que le compete, requerimos que apueste por una enseñanza de calidad." (líneas 46-50)
¿Qué puede sustituir la expresión en destaque, sin perjuicio a la comprensión? ”</h2>

<p><h2><font color="#008000"><b> A)Así que;</p></font></b></h2>
<p> B)Sino;</p>
<p> C)Mientras;</p>
<p> D)Sin embargocia
;</p>
<p> E)Siempre y cuando
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




“Sin embargo, la OMS apunta que Perú es uno de los 77 países que no cuenta con cifras fiables sobre las causas de las muertes registradas.”

A conjunção sublinhada acima equivale, em Português, a?</h2>
<br>
<p>A)Sendo assim.;</p> 
<p> B)Sem duvida;</p>
<p> C)No entanto;</p>
<p><h2><font color="#008000"><b>  D) Portanto
;</p></font></b></h2>
<p> E) Logo.</p>
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



El sentido del primer párrafo del texto se mantendría inalterado si la palabra “aunque” se sustituyera por:</h2>
			
			<p> A)más ;</p>
			<p><h2><font color="#008000"> B)  pero? </p></font></b></h2>
			<p>C)Igual;</p>
			<p>D) aún;</p>
			<p>E)Todavia

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