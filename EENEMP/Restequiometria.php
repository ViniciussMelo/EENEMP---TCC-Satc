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
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pestequiometria.php';</script>";
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
	$prova = "prova de quimica";
	$materia = "estequiometria";
	
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
<h2>1) Fosgênio, COCl2, é um gás venenoso. Quando inalado, reage com a água nos 

pulmões para produzir ácido clorídrico (HCl), que causa graves danos pulmonares, 

levando, finalmente, à morte: por causa disso, já foi até usado como gás de guerra. A 

equação química dessa reação é:


COCl2 + H2O → CO2 + 2 HCl

Se uma pessoa inalar 198 mg de fosgênio, a massa de ácido clorídrico, em gramas, que 

se forma nos pulmões, é igual a:</h2>
<p>
<p>A) 1,09 . 10-1.</p>
<p>B)  2,92 . 10-1.</p>
<p><h2><font color="#008000"><b>C) 1,46 . 10-1.;</p></font></b></h2>
<p>D) 3,65 . 10-2.;</p>
<p>E)  7,30 . 10-2.</p>
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
<p> 1º Passo: Descobrir as massas molares, sabendo que as massas molares em g/mol de cada 

elemento são: C = 12, O = 16, Cl = 35,5 e H = 1.

MCOCl2 = 12 + 16 + 2 . 35,5 = 99 g/mol
MHCl = 1 + 35,5 = 36,5 g/mol

2º Passo: Relacionar as massas molares das duas substâncias na equação, lembrando que 

a proporção estequiométrica entre elas está de 1 : 2. Como a massa tem que ser dada 

em gramas, temos que 198 mg de fosgênio é igual a 0,198 g:

99 g de COCl2 ----------- 2 . 36,5 g de HCl
0,198 g de COCl2 ------- x
99 x = 73 . 0,198
x = 14,454
          99

x = 0,146 g = 1,46 . 10-1g.
</p>


<h2>2)CH4(g) + 2 O2(g) → CO2(g) + 2 H2O(g)

O volume de CO2, medido a 27ºC e 1atm., produzido na combustão de 960,0 g de metano, 

é:.</h2>
			
<p>A) 60,0 L.</p>
<p>B) 1620,0 L</p>
<p><b><h2><font color="#008000">C) 1476,0 L </p></font></b></h2>
<p>D) 1344,0 L.</p>
<p>E) 960,0 L .</p>
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
<p>Alternativa “d”.

* Descobrir o volume de CH4 usado, sabendo que 1 mol de qualquer gás sempre ocupa um 

volume de 22,4 L (nas CNTP – Condições Normais de Temperatura e Pressão, em que a 

pressão é 1 atm e a temperatura é 273 K).</p>
<br>
<br />

<h2>3) Qual é a quantidade de matéria de gás oxigênio necessária para fornecer 17,5 mol de 

água, H2O(v), na queima completa do acetileno, C2H2(g)?</h2>

<p>A) 27,2 mol;</p>
<p>B)  35 mol;</p>
<p>C)  17,5 mol;</p>
<p><h2><font color="#008000"><b>D) 43,75 mol ;</p></font></b></h2>
<p>E) 2 mol.</p>
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
Escrevendo a equação balanceada da reação para ver a proporção estequiométrica:

2 C2H2(g) +5 O2(g) → 4 CO2(g) + 2 H2O(v)

 

5 mol de O2(g) ------ 2 mol de H2O(v)
x----------------------17,5 mol de H2O(v)

x = 17,5 . 5 / 2
x = 43,75 mol de O2(g)

<h2>4) Quantas moléculas de água, H2O(v), são obtidas na queima completa do acetileno C2H2

(g), ao serem consumidas 3,0 . 1024 moléculas de gás oxigênio?
:</h2>

<p><h2><font color="#008000"><b>A)1,2 . 1024;</p></font></b></h2>
<p> B) 120 . 1024;</p>
<p> C) 0,12 . 1023;</p>
<p> D) 12 . 1024;</p>
<p> E) 1,2 . 1023.</p>
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
Alternativa: E
A queima do óleo diesel,da gasolina, do carvão mineral e
do gás natural, emitem gases que aumentam o efeito estufa,
já a energia eólica, isso não ocorre.	

<h2>5) Urânio - 238, espontaneamente emite partículas ‘; o
fragmento restante, para cada partícula emitida, tem
número atômico 90. Sendo assim, o número de massa do
fragmento produzido é igual a?</h2>

<p><h2><font color="#008000"><b> A) 234></p></font></b></h2>
<p> B) 237</p>
<p> C) 236</p>
<p> D)  235</p>
<p> E) 233.></p>
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


<h2>6)  PUC-PR Em 100 gramas de alumínio, quantos átomos
deste elemento estão presentes?</h2>

<p> A)  3,7 x 1023;</p> 
<p> B) 27 x 1022;</p>
<p> C) 3,7 x 1022
;</p>
<p><h2><font color="#008000"><b>D)2,22 x 1024;</p></font></b></h2>
<p> E) 27,31 x 1023.</p>
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


<h2>7) Qual a massa de enxofre, em quilogramas,
necessária para a obtenção de
2.000 kg de ácido sulfúrico, supondo um rendimento de
100%?:</h2>

<p> A) 100 kg;</p> 
<p> B) 128 kg;</p>
<p> C) 200 kg;</p>
<p> D) 320 kg;</p>
<p><b><h2><font color="#008000"> E) 640 kg.</p></font></b></h2>
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

<h2>8) Isótopos radiativos de iodo são utilizados
no diagnóstico e tratamento de problemas da tireóide, e
são, em geral, ministrados na forma de sais de iodeto. O
número de prótons, nêutrons e elétrons no isótopo 131 do
iodeto modelo …ƒI­¢¤¢ são, respectivamente:</h2>

<p><h2><font color="#008000"><b> A)  53, 78 e 54;</p></font></b></h2>
<p> B) 53, 78 e 52;</p>
<p> C)  53, 131 e 53;</p>
<p> D) 131, 53 e 131;</p>
<p> E)52, 78 e 53.</p>
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


<h2>9) O estanho é usado na composição de
ligas metálicas como bronze (Sn-Cu) e solda metálica (SnPb).
O estanho metálico pode ser obtido pela reação do
minério cassiterita (SnO‚) com carbono, produzindo
também monóxido de carbono. Supondo que o minério seja
puro e o rendimento da reação seja de 100%, a massa, em
quilogramas, de estanho produzida a partir de 453kg de
cassiterita com 96kg de carbono é</h2>
<br>
<p>A) 549;</p> 
<p> B) 476.;</p>
<p> C) 265.;</p>
<p><h2><font color="#008000"><b>  D)357. ;</p></font></b></h2>
<p> E) 119..</p>
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


<h2>10) O alumínio metálico é obtido pela
redução eletrolítica da bauxita, na presença da criolita que
age como fundente, abaixando o ponto de fusão da bauxita
de 2600°C para cerca de 1000°C. Considerando que a
bauxita é composta exclusivamente por óxido de alumínio,
AØ‚Oƒ, a massa em toneladas de alumínio metálico obtida a
partir de 51,0 toneladas de bauxita é de:</h2>
			
			<p> A) 23,5.;</p>
			<p><h2><font color="#008000"> B) 25,5.;</p></font></b></h2>
			<p>C) 27,0. ;</p>
			<p>D) 32,0.;</p>
			<p>E)  39,3.</p>
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
	