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
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pquimicaorganica.php';</script>";
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
	$materia = "quimica organica";
	
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
<h2>1) O oseltamivir, é o princípio ativo do antiviral Tamiflu® que é utilizado no 

tratamento da gripe A (H1N1). Assinale a opção que NÃO indica uma função orgânica 

presente na estrutura da molécula do oseltamivir.
 </h2>
<p>
<p>A)Amina primária.;</p>
<p>B) Éter.;</p>
<p><h2><font color="#008000"><b>C) Aldeído.;</p></font></b></h2>
<p>D) Amida.;</p>
<p>E) Éster.</p>
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
O colesterol dá origem à testosterona, um hormônio ligado ao desenvolvimento sexual, 

e ao estradiol, que regula as funções sexuais</h2>
			
<p>A) o estradiol e a testosterona não possuem carbonoassimétrico.></p>
<p>B) a testosterona é uma substância aromática.></p>
<p><b><h2><font color="#008000">C)em ambas as substâncias, pode-se identificar duplas ligações conjugadas.</p></font></b></h2>
<p>D) ambas as substâncias possuem carbonos com hibridização sp></p>
<p>E) as duas substâncias possuem grupo carbonila. .></p>
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

<h2>3) A sibutraminaé um fármaco controlado pela Agência Nacional de Vigilância Sanitária 

que tem por finalidade agir como moderador de apetite.


Sobre a sibutramina, é incorreto afirmar que:</h2>

<p>A) 
trata-se de uma substância aromática;</p>
<p>B)  identifica-se um elemento da família dos halogênios em sua estrutura;</p>
<p>C) identifica-se uma amina terciária em sua estrutura;</p>
<p><h2><font color="#008000"><b>D) sua fórmula molecular é C12H11NCl;</p></font></b></h2>
<p>E) identifica-se a presença de ligações π em sua estrutura.</p>
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


<h2>4) Fluorquinolonas constituem uma classe de antibióticos capazes de combater diferentes 

tipos de bactérias. A norfloxacina, a esparfloxacina e a levofloxacina são alguns dos 

membros da família das fluorquinolonas.

De acordo com as informações acima, é incorreto afirmar que:
</h2>

<p><h2><font color="#008000"><b>A) a norfloxacina e a levofloxacina apresentam grupo funcional amida.;</p></font></b></h2>
<p> B) a norfloxacina e a esparfloxacina apresentam os grupos funcionais amina e ácido 

carboxílico em comum.;</p>
<p> C) a esparfloxacina apresenta cadeia carbônica insaturada.;</p>
<p> D) a levofloxacina apresenta anel aromático.;</p>
<p> E)a esparfloxacina apresenta cadeia carbônica insaturada..</p>
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


<h2>5) A dipirona sódica e o paracetamol são fármacos que se encontram presentes em 

medicamentos analgésicos e antiinflamatórios.Considerando a estrutura de cada 

composto, as ligações químicas, os grupamentos funcionais e a quantidade de átomos de 

cada elemento nas moléculas, marque a opção correta.
</h2>

<p><h2><font color="#008000"><b> A) Na dipirona sódica, identifica-se um grupo sulfônico></p></font></b></h2>
<p> B) O paracetamol e a dipirona sódica são aminoácidos</p>
<p> C) A massa molecular da dipirona sódica é menor que a do paracetamol.</p>
<p> D) Apenas o paracetamol é uma substância aromática.</p>
<p> E) A dipirona sódica é uma substância insolúvel em água.
.></p>
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


<h2>6) Em um experimento, alunos associaram os odores de alguns ésteres a aromas 

característicos de alimentos, como, por exemplo:

Analisando a fórmula estrutural dos ésteres apresentados, pode-se dizer que, dentre 

eles, os que têm cheiro de:</h2>

<p> A)  maçã e abacaxi são isômeros;</p> 
<p> B) banana e pepino são preparados com álcoois secundários.;</p>
<p> C) pepino e maçã são heptanoatos.;</p>
<p><h2><font color="#008000"><b>d)pepino e pera são ésteres do mesmo ácido carboxílico.;</p></font></b></h2>
<p> E) pera e banana possuem, cada qual, um carbono assimétrico.</p>
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


<h2>7) Nossos corpos podem sintetizar onze aminoácidos em quantidades suficientes para 

nossas necessidades. Não podemos, porém, produzir as proteínas para a vida a não ser 

ingerindo os outros nove, conhecidos como aminoácidos essenciais.:</h2>

<p> A)  Álcool e amida.;</p> 
<p> B)Éter e éster.;</p>
<p> C)Ácido orgânico e amida;</p>
<p> D) Amina primária e aldeído.;</p>
<p><b><h2><font color="#008000"> E) Ácido orgânico e amina primária..</p></font></b></h2>
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

<h2>8) Considerando as funções orgânicas circuladas e numeradas presentes nas moléculas 

abaixo:</h2>

<p><h2><font color="#008000"><b> A)  No composto 3 a função orgânica circulada 4 representa um álcool.;</p></font></b></h2>
<p> B) No composto 1 a função orgânica circulada 1 representa uma amina.;</p>
<p> C) No composto 2 a função orgânica circulada 3 representa um éter.;</p>
<p> D) No composto 3 a função orgânica circulada 6 representa um álcool.
;</p>
<p> E) No composto 3 a função orgânica circulada 5 representa um ácido carboxílico.</p>
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


<h2>9) A estrutura dos compostos orgânicos pode ser representada de diferentes 

modos. Analise estas quatro fórmulas estruturais:


A partir dessa análise, é CORRETO afirmar que o número de compostos diferentes 

representados nesse conjunto é:</h2>
<br>
<p>A) 	 
1;</p> 
<p> B) 	
2;</p>
<p> C) 	
3;</p>
<p><h2><font color="#008000"><b>  D) 	
4;</p></font></b></h2>
<p> E) 	
7.</p>
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


<h2>10) Analise a fórmula estrutural da aureomicina, substância produzida por um fungo e 

usada como antibiótico no tratamento de diversas infecções:


A partir da análise dessa fórmula estrutural, é CORRETO afirmar que a aureomicina 

apresenta funções carbonílicas do tipo:</h2>
			
			<p> A) ácido carboxílico e aldeído.;</p>
			<p><h2><font color="#008000"> B)aldeído e éster;</p></font></b></h2>
			<p>C) amida e cetona.;</p>
			<p>D) cetona e éster.;</p>
			<p>E) aldeido e cetona.</p>
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