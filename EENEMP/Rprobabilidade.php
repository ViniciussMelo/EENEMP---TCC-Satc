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
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pprobabilidade.php';</script>";
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
	$materia = "probabilidade";
	
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
<h2>1) Para analisar o desempenho de um método diagnóstico, realizam-se estudos em populações contendo pacientes sadios e doentes. Quatro situações distintas podem acontecer nesse contexto de teste:: </h2>
<p>
<p>A) Paciente NÃO TEM a doença e o resultado do teste é POSITIVO;;</p>
<p>B) Paciente NÃO TEM a doença e o resultado do teste é NEGATIVO;</p>
<p><h2><font color="#008000"><b>C) Paciente TEM a doença e o resultado do teste é POSITIVO.;</p></font></b></h2>
<p>D) Tem doença;</p>
<p>E) Nao é doença;</p>
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


<h2>2) Numa escola com 1 200 alunos foi realizada uma pesquisa sobre o conhecimento desses em duas línguas estrangeiras, inglês e espanhol. Nessa pesquisa constatou-se que 600 alunos falam inglês, 500 falam espanhol e 300 não falam qualquer um desses idiomas. Escolhendo-se um aluno dessa escola ao acaso e sabendo-se que ele não fala inglês, qual a probabilidade de que esse aluno fale espanhol?</h2>
			
			
<p>a) 1    
   2</p>
<p>b) 5
    8</p>
<p><b><h2><font color="#008000">C)c) 1
   4 </p></font></b></h2>
<p> d) 5
    6
</p>
<p>e) 5
   14</p>
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

<h2>3) Para disputar a final de um torneio internacional de
natação, classificaram-se 8 atletas: 3 norte-americanos, 1
australiano, 1 japonês, 1 francês e 2 brasileiros.
Considerando que todos os atletas classificados são
ótimos e têm iguais condições de receber uma medalha
(de ouro, prata ou bronze), a probabilidade de que pelo
menos um brasileiro esteja entre os três primeiros
colocados é igual a::</h2>

<p>a)5/4</p>
<p>b)3/7</p>
<p>C)c) 4/7</p>
<p><h2><font color="#008000"><b>d) 9/14;</p></font></b></h2>
<p>E) e) 5/7</p>
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


<h2>4) Em um instituto de pesquisa trabalham, entre outros
funcionários, 3 físicos, 6 biólogos e 2 matemáticos.
Deseja-se formar uma equipe com 4 desses 11 estudiosos,
para realizar uma pesquisa. Se essa equipe for composta
escolhendo-se os pesquisadores de forma aleatória, a
probabilidade de todos os físicos serem escolhidos é um
número cujo valor está compreendido entre</h2>

<p><h2><font color="#008000"><b>A) 0,02 e 0,03.;</p></font></b></h2>
<p> b)0,00 e 0,01.</p>
<p> c)0,03 e 0,04.</p>
<p> d) 0,04 e 0,05. </p>
<p> e)0,02 e 0,04. .</p>
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


<h2>5)  Na Copa do Mundo 2010 da FIFA, o Brasil ficou no
Grupo G junto com as seleções da Coréia do Norte, da
Costa do Marfim e de Portugal. Analisando os resultados
de jogos anteriores entre Brasil e Portugal, um torcedor
concluiu que a chance do Brasil ganhar é 3 vezes a chance
de perder, e que a chance de empatar é metade da
chance de o Brasil perder. Para aquele torcedor, a
probabilidade de o Brasil perder um jogo contra Portugal</h2>

<br><br>
<p><h2><font color="#008000"><b> a)  2/9. </p></font></b></h2>
<p> b) 3/6</p>
<p> C) 2/3</p>
<p> D) 2/7 </p>
<p> E) 3/3</p>
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


<h2>6)Quando Lígia pára em um posto de gasolina, a
probabilidade de ela pedir para verificar o nível de óleo é
de 0,28; a probabilidade de ela pedir para verificar a
pressão dos pneus é 0,11 e a probabilidade de ela pedir
para verificar ambos, óleo e pneus, é de 0,04. Portanto, a
probabilidade de Lígia parar em um posto de gasolina e
não pedir nem para verificar o nível de óleo e nem para
verificar a pressão nos pneus é igual a:</h2>

<p> a) 0,33 </p> 
<p> B) 0,44;</p>
<p> C) 0,54</p>
<p><h2><font color="#008000"><b> d) 0,65</p></font></b></h2>
<p> E) 0,52</p>
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
 Uma companhia preocupada com sua produtividade
costuma oferecer cursos de treinamento a seus operários.
A partir da experiência, verificou-se que um operário,
recentemente admitido, que tenha freqüentado o curso
de treinamento tem 82% de probabilidade de cumprir sua
quota de produção. Por outro lado, um operário, também
recentemente admitido, que não tenha freqüentado o
mesmo curso de treinamento, tem apenas 35% de
probabilidade de cumprir com sua quota de produção.
Dos operários recentemente admitidos, 80%
freqüentaram o curso de treinamento. Selecionando-se,
aleatoriamente, um operário recentemente admitido na
companhia, a probabilidade de que ele não cumpra sua
quota de produção é</h2>


<p> a) 11,70%</p> 
<p> b) 35%;</p>
<p> c) 83%;</p>
<p> d) 85% ;</p>
<p><b><h2><font color="#008000"> e) 27,40% </p></font></b></h2>
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
 São lançadas 4 moedas distintas e não viciadas. Qual é
a probabilidade de resultar exatamente 2 caras e 2
coroas?</h2>

<p><h2><font color="#008000"><b> A) 37,5%   </p></font></b></h2>
<p> B) 25%;</p>
<p> C) 44,5%;;</p>
<p> D) 42%;</p>
<p> E) 50%.</p>
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

<h2>9)  Um casal pretende ter quatro filhos. A probabilidade
de nascerem dois meninos e duas meninas é:</h2>
<br>
<p>A) 8/3 ;</p> 
<p> B) 8/6;</p>
<p> C) 6/8</p>
<p><h2><font color="#008000"><b>  D)   3/8 ;</p></font></b></h2>
<p> E) 1/2</p>
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


<h2>10) Um dado viciado, cuja probabilidade de se obter um
número par é 3/5, é lançado juntamente com uma moeda
não viciada. Assim, a probabilidade de se obter um
número ímpar no dado ou coroa na moeda é:</h2>
			
			<p> A)  3/5;</p>
			<p><h2><font color="#008000"> B) 7/10;</p></font></b></h2>
			<p>C) 2/5;</p>
			<p>D) 3/10;</p>
			<p>E) 1/5</p>
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