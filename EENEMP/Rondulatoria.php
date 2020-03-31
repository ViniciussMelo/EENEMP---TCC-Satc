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
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pondulatoria.php';</script>";
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
	$resposta1 = "d";
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
	$prova = "prova de fisica";
	$materia = "ondulatoria";
	
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
<h2>1) Uma pessoa toca no piano uma tecla correspondente à nota mi e, em seguida, a que corresponde a sol. Pode-se afirmar que serão ouvidos dois sons diferentes porque as ondas sonoras correspondentes a essas notas têm:: </h2>
<p>
<p>A) amplitudes diferentes;</p>
<p>B)frequências diferentes;</p>
<p><h2><font color="#008000"><b>C) intensidades diferentes;</p></font></b></h2>
<p>D)  timbres diferentes;</p>
<p>E)  velocidade de propagação diferentes.</p>
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
<p>Cada nota musical possui uma frequência característica, logo, os sons serão diferentes porque as notas possuem frequências distintas.
<br><br>

<h2>2) Diante de uma grande parede vertical, um garoto bate palmas e recebe o eco um segundo depois. Se a velocidade do som no ar é 340 m/s, o garoto pode concluir que a parede está situada a uma distância aproximada de:</h2>
			
<p>A) 17 m></p>
<p>B)  34 m></p>
<p><b><h2><font color="#008000">C)68 m</p></font></b></h2>
<p>D)  170 m></p>
<p>E) 340.></p>
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
<p>v = 2?s ÷ ?t
340 = 2?s ÷ 1
340 = 2?s
340 ÷ 2 = ?s
?s = 170 m

<br><br>

<br>
<br />

<h2>3) A respeito da classificação das ondas, marque a alternativa incorreta:</h2>

<p>A) As ondas classificadas como longitudinais possuem vibração paralela à propagação. Um exemplo desse tipo de onda é o som.;</p>
<p>B)  O som é uma onda mecânica, longitudinal e tridimensional.;</p>
<p>C) Todas as ondas eletromagnéticas são transversais.</p>
<p><h2><font color="#008000"><b>D)A frequência representa o número de ondas geradas dentro de um intervalo de tempo específico. A unidade Hz (Hertz) significa ondas geradas por segundo;</p></font></b></h2>
<p>E) Quanto à sua natureza, as ondas podem ser classificadas em mecânicas, eletromagnéticas, transversais e longitudinais.</p>
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
<p>LETRA “E”
Os termos longitudinais e transversais referem-se à classificação das ondas quanto à direção de propagação.
<br><br>


<h2>4) 
    Uma determinada fonte gera 3600 ondas por minuto com comprimento de onda igual a 10 m. Determine a velocidade de propagação dessas ondas. :</h2>

<p><h2><font color="#008000"><b>A)  500 m/s;</p></font></b></h2>
<p> B)360 m/s;</p>
<p> C)600 m/s ;</p>
<p> D) 60 m/s;</p>
<p> E) 100 m/s.</p>
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
	

<h2>5)   Uma lâmpada LED (diodo emissor de luz), que funciona com 12 V e corrente contínua de 0,45 A, produz a mesma quantidade de luz que uma lâmpada incandescente de 60 W de potência.
Qual é o valor da redução da potência consumida ao se substituir a lâmpada incandescente pela de LED??</h2>

<p><h2><font color="#008000"><b> A) 54,6 W ></p></font></b></h2>
<p> B) 27,0 W </p>
<p> C) 26,6 W </p>
<p> D) 5,4 W </p>
<p> E)5,0 W .></p>
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
<p>LETRA “C”
A frequência deve estar em rotações por segundo (Hz). Sabendo que 1 min = 60 s, temos:
F = 3600 ÷ 60 = 60 Hz
Sendo assim, temos:
v = ?.f
v = 10. 60 = 600 m/s

<br><br>


<h2>6) 
A respeito das características das ondas, marque a alternativa errada.:</h2>

<p> A) Ondas sonoras e ondas sísmicas são exemplos de ondas mecânicas.;</p> 
<p> B) A descrição do comportamento das ondas mecânicas é feita pelas leis de Newton.;</p>
<p> C)As ondas eletromagnéticas resultam da combinação de um campo elétrico com um campo magnético.;</p>
<p><h2><font color="#008000"><b>D) A descrição das ondas eletromagnéticas é feita por meio das equações de Maxwell.;</p></font></b></h2>
<p> E)Quanto à direção de propagação, as ondas geradas em um lago pela queda de uma pedra na água são classificadas como tridimensionais
</p>
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
<p>LETRA “E”

As ondas geradas em um lago pela queda de uma pedra na água são classificadas como bidimensionais, pois existem apenas sobre a superfície da água.


<br><br>



<h2>7) 

O som mais grave que o ouvido humano é capaz de ouvir possui comprimento de onda igual a 17 m. Sendo assim, determine a mínima frequência capaz de ser percebida pelo ouvido humano.

Dados: Velocidade do som no ar = 340 m/s:</h2>

<p> A) 10 Hz;</p> 
<p> B)15 Hz;</p>
<p> C) 17 Hz.;</p>
<p> D)20 Hz.;</p>
<p><b><h2><font color="#008000"> E)  34 Hz
.</p></font></b></h2>
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
<p>LETRA “D”

A partir da equação da velocidade de uma onda, podemos escrever que:

v = ? . f

f = v ÷ ?

f = 340 ÷ 17

f = 20 Hz


<br><br>

<h2>8) 
Um pulso ondulatório senoidal é produzido em uma extremidade de uma corda longa e se propaga em toda a sua extensão. A onda possui uma freqüência de 50 Hz e comprimento de onda 0,5m. O tempo que a onda leva para percorrer uma distância de 10m na corda vale, em segundos::</h2>

<p><h2><font color="#008000"><b> A) 0,2;</p></font></b></h2>
<p> B) 0,4;</p>
<p> C) 0,6;</p>
<p> D) 0,7;</p>
<p> E) 0,9.</p>
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
<p>LETRA “D”

A partir da equação da velocidade de uma onda, podemos escrever que:

v = ? . f

f = v ÷ ?

f = 340 ÷ 17

f = 0,9 


<br><br>

<h2>9) 

Considere as seguintes afirmações sobre os fenômenos ondulatórios e suas características:
I. A difração ocorre apenas com ondas sonoras.
II. A interferência ocorre apenas com ondas eletromagnéticas.
III. A polarização ocorre apenas com ondas transversais.
Quais estão corretas??</h2>
<br>
<p>A) Apenas I;</p> 
<p> B) Apenas II;</p>
<p> C)  Apenas III	;</p>
<p><h2><font color="#008000"><b>  D) Apenas I e II;</p></font></b></h2>
<p> E)I, II e III.
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


<h2>10) As notas musicais podem ser agrupadas de modo a formar um conjunto. Esse conjunto pode formar uma escala musical. Dentre as diversas escalas existentes, a mais difundida é a escala diatônica, que utiliza as notas denominadas dó, ré, mi, fá, sol, lá e si. Essas notas estão organizadas em ordem crescente de alturas, sendo a nota dó a mais baixa e a nota si a mais alta.
Considerando uma mesma oitava, a nota si é a que tem menor </h2>
			
			<p> A) amplitude ;</p>
			<p><h2><font color="#008000"> B) frequência ;</p></font></b></h2>
			<p>C) velocidade ;</p>
			<p>D) intensidade;</p>
			<p>E) comprimento de onda. </p>
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