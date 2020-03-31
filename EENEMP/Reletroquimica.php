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
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Peletroquimica.php';</script>";
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
	$materia = "eletroquimica";
	
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
<h2>1) Na pilha eletro-química sempre ocorre: </h2>
<p>
<p>A)  oxidação do cátodo;</p>
<p>B) movimento de elétrons no interior da solução eletrolítica.;</p>
<p><h2><font color="#008000"><b>C)  passagem de elétrons, no circuito externo, do ânodo para o cátodo;</p></font></b></h2>
<p>D) reação com diminuição de calor;</p>
<p>E) reação de neutralização.</p>
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


<h2>2) Em uma pilha com eletrodos de zinco e de cobre, com circuito fechado, 

ocorre:
</h2>
			
<p>A) o potencial do eletrodo de zinco aumenta e o do cobre diminui;</p>
<p>B) da destruição da camada de ozônio.</p>
<p><b><h2><font color="#008000">C) o potencial do eletrodo de zinco diminui e o do cobre aumenta;</p></font></b></h2>
<p>D) o potencial dos dois eletrodos aumenta;</p>
<p>E) o potencial dos dois eletrodos não se altera. </p>
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

<br>
<br />

<h2>3) Considere as seguintes semi-reações e os respectivos potenciais normais de 

redução (E0):</h2>

<p>A) +0,70 volts ;</p>
<p>B) –1,25 V;</p>
<p>C) +1,75 V  ;</p>
<p><h2><font color="#008000"><b>D)  1,40 volts;</p></font></b></h2>
<p>E)  +3,75 V;</p>
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


<h2>4) A reação que ocorre em uma pilha é representada pela seguinte equação: Mn 

+ Cu++ ® Mn++ + Cu Sabendo-se que o potencial de óxido-redução do manganês é igual a 

+1,05 volts e o do cobre é igual a –0,35 volts, e admitindo-se que a concentração dos 

íons é unitária, a voltagem da pilha será:</h2>

<p><h2><font color="#008000"><b>A) 1,40 volts;</p></font></b></h2>
<p> B) 0,70 volts;</p>
<p> C)  –1,40 volts;</p>
<p> D)–0,70 volts;</p>
<p> E) n.d.a..</p>
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
	

<h2>5) Dentre as espécies químicas representadas abaixo através de semi-

reações:</h2>

<p><h2><font color="#008000"><b> A) Cl2></p></font></b></h2>
<p> B) Cu+</p>
<p> C) Na+</p>
<p> D) Cu</p>
<p> E) Na></p>
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


<h2>6)Considere os potenciais padrões de redução:

semi-reação (em solução aquosa)        potencial (volt)
Ce4+ + 1e- ® Ce3+                                        +1,61
Sn4+ + 2e- ® Sn2+                                         +0,15

Qual das reações deve ocorrer espontaneamente?</h2>

<p> A)Ce4+ + Sn4+ ® Ce3+ + Sn2+;</p> 
<p> B)2Ce4+ + Sn2+ ® 2Ce3+ + Sn4+;</p>
<p> C)Ce3+ + Sn2+ ® Ce4+ + Sn4+;</p>
<p><h2><font color="#008000"><b>D)Sn4+ + Ce3+ ® Ce4+ + Sn2+ ;</p></font></b></h2>
<p> E)Ce4+ + Sn4+ ® Ce4+ + Sn4+.</p>
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


<h2>7)Na reação espontânea do exercício anterior, o oxidante e o redutor são, 

respectivamente:</h2>

<p> A)  n.d.a.;</p> 
<p> B) Sn2+ e Ce4+;</p>
<p> C) Ce3+ e Sn2+;</p>
<p> D) Ce4+ e Sn4+;</p>
<p><b><h2><font color="#008000"> E)Ce4+ e Sn+2.</p></font></b></h2>
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

<h2>8) Conhecendo-se as seguintes equações de meia-célula e os respectivos 

potenciais padrão do eletrodo (E0):</h2>

<p><h2><font color="#008000"><b> A)  0,94 volts;</p></font></b></h2>
<p> B)  0,54 volts;</p>
<p> C)   0,66 volts;</p>
<p> D)  1,46 volts ;</p>
<p> E) 1,74 volts.</p>
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


<h2>9) Uma cela eletroquímica é constituída pelas semicelas Cr // Cr+3 e Ag // 

Ag+ cujos valores potenciais E0 são:

Cr(s)  ® Cr+3(aq) + 3e-                         E0 = +0,75 volts
Ag (s) ® Ag+(aq) + e-                             E0 = -0,80 volts

Quando a cela está em funcionamento, á FALSA a afirmação de que:</h2>
<br>
<p>A)O eletrodo, onde ocorre oxidação é o ânodo da cela;</p> 
<p> B)  A voltagem da cela é de 1,55 volts;</p>
<p> C)  A voltagem da cela é de 1,60 volts.;</p>
<p><h2><font color="#008000"><b>  D) Os íons negativos e positivos se movimentam através da solução, mas em direções 

opostas.;</p></font></b></h2>
<p> E) Os elétrons passam através do voltímetro22:16 26/10/2017, da prata para o cromo.     essa.</p>
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


<h2>10)Uma pilha de Daniell opera em condições padrões com soluções aquosas de ZnSO4 e 

CuSO4, com diferença de potencial nos terminais de ΔE0. Cristais de CuSO4 são 

adicionados na respectiva solução, alterando o potencial para ΔE, na mesma 

temperatura.</h2>
			
			<p> A) permaneceu constante;</p>
			<p><h2><font color="#008000"> B) aumentou;</p></font></b></h2>
			<p>C) diminuiu.	;</p>
			<p>D) ficou zero;</p>
			<p>E)não pode ser calculado.</p>
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