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
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Potica.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Potica.php';</script>";
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
	$resposta1 = "a";
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
	$materia = "optica";
	
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
<h2>1)Entre as alternativas a seguir, escolha aquela que contém apenas fontes primárias de luz.: </h2>
<p>
<p>A) Fósforo, Sol, Lua;</p>
<p>B)  Lua, Júpiter, Sol;</p>
<p><h2><font color="#008000"><b>C) Vela acesa, Sol, Lua;</p></font></b></h2>
<p>D) Estrelas, Fósforo aceso, Sol;</p>
<p>E) Estrelas, pilha de lanterna e Sol..</p>
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
<p>As fontes primárias de luz são aqueles que produzem luz própria. Algumas fontes, como fósforos e lâmpadas, são fontes primárias desde que estejam acesas.
<br><br>

<h2>2) 
Indique a alternativa que explica de forma correta a diferença entre as fontes de luz fluorecentes e fosforescentes.:</h2>
			
<p>A) As fluorecentes emitem luz a partir da excitação do flúor em seu interior, e as fosforescentes funcionam pela excitação do fósforo..></p>
<p>B) As fluorecentes emitem luz durante a ação de um agente excitador, e as fosforescentes emitem radiações ultravioleta..></p>
<p><b><h2><font color="#008000">C)As fluorecentes emitem luz durante a ação de um agente excitador, e as fosforescentes emitem radiações ultravioleta.</p></font></b></h2>
<p>D)Lâmpadas fluorecentes funcionam a partir da excitação de gases como o argônio, e materiais fosforescentes funcionam por meio da excitação do fósforo.></p>
<p>E)Os termos fluorecentes e fosforescentes são sinônimos..></p>
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
<p>Q = n.e
3,2 . 10 -4 = n . 1,6 . 10-19
n = 3,2 . 10-4
       1,6 . 10-19
n = 2 . 1015 elétrons
Como o corpo tem carga elétrica negativa, ele possui excesso de elétrons, portanto, a resposta correta é a alternativa C.
<br><br>

<br>
<br />

<h2>3) As afirmações a seguir tratam dos conceitos básicos de Óptica Geométrica. Indique a questão incorreta:</h2>

<p>A) Raios de luz são setas orientadas que representam a luz e são classificados como paralelos, convergentes e divergentes.;</p>
<p>B)  A Óptica Geométrica estuda a natureza física da luz;</p>
<p>C) Fontes secundárias de luz são aquelas que não produzem luz própria. A Lua é um exemplo de fonte secundária.;</p>
<p><h2><font color="#008000"><b>D) Quando um feixe luminoso muda de meio de propagação, ocorre o fenômeno óptico da refração.;</p></font></b></h2>
<p>E) A Óptica Geométrica estuda os fenômenos com base em experimentos e não analisa a natureza física da luz, mas a interpreta como setas orientadas denominadas de raios de luz.
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

<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>As fontes de luz do tipo fluorecente funcionam enquanto houver ação do elemento excitador, que, geralmente, é o argônio. Fontes fosforescentes emitem luz mesmo após o fim da ação do excitador. Seu funcionamento baseia-se na energia potencial química
<br><br>


<h2>4) 
   Uma fonte secundária de luz que se apresenta na cor azul possui tal cor porque:</h2>

<p><h2><font color="#008000"><b>A) refrata a luz incidente.;</p></font></b></h2>
<p> B)reflete a luz azul.;</p>
<p> C)difrata a luz azul. ;</p>
<p> D) absorve a luz azul.;</p>
<p> E) emite luz azul..</p>
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


<h2>6) Marque a alternativa correta a respeito dos fenômenos da reflexão, refração e absorção da luz:</h2>

<p> A)  Um único raio de luz incidente não pode sofrer os três fenômenos ópticos ao mesmo tempo;</p> 
<p> B) As leis da reflexão se aplicam tanto à reflexão regular quanto à reflexão difusa;</p>
<p> C) As leis da refração só podem ser aplicadas no caso da refração difusa;</p>
<p><h2><font color="#008000"><b>D) A reflexão de um espelho plano é difusa;</p></font></b></h2>
<p> E)Todas as alternativas anteriores estão incorretas.</p>
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

 “Quando dois ou mais raios de luz vindos de fontes diferentes se cruzam, seguem suas trajetórias de forma independente, como se os outros não existissem.” Este texto caracteriza:</h2>

<p> A) O princípio da reversibilidade dos raios de luminosos;          .;</p> 
<p> B)O princípio da propagação retilínea da luz;.;</p>
<p> C) A refração da luz; .;</p>
<p> D)O princípio da independência dos raios luminosos;      ;</p>
<p><b><h2><font color="#008000"> E)  A polarização da luz.
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

<h2>8) 
Dos objetos citados a seguir, assinale aquele que seria visível em uma sala perfeitamente escura:</h2>

<p><h2><font color="#008000"><b> A)  um espelho;</p></font></b></h2>
<p> B)qualquer superfície clara;</p>
<p> C)  um fio aquecido ao rubro;</p>
<p> D) uma lâmpada desligada;</p>
<p> E) um gato preto.</p>
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



O menor tempo possível entre um eclipse do Sol e um eclipse da Lua é de aproximadamente:?</h2>
<br>
<p>A) 12 horas      ;</p> 
<p> B) 24 horas      ;</p>
<p> C)1 semana  ;</p>
<p><h2><font color="#008000"><b>  D)2 semanas      ;</p></font></b></h2>
<p> E) 1 mês.</p>
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
 Admita que o Sol subitamente “morresse”, ou seja, sua luz deixasse de ser emitida. Passadas 24h, um eventual sobrevivente, olhando para o céu sem nuvens, veria:.</h2>
			
			<p> A) a Lua e as estrelas     ;</p>
			<p><h2><font color="#008000"> B) somente a Lua     ;</p></font></b></h2>
			<p>C) somente estrelas  ;</p>
			<p>D) uma completa escuridão     .;</p>
			<p>E) somente os planetas do sistema solar</p>
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