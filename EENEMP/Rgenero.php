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
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pgenero.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pgenero.php';</script>";
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
	$prova = "prova de portugues";
	$materia = "Funcoes da linguagem";
	
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
<h2>1) O texto “O substituto da vida” apresenta características que permitem enquadrá-lo no gênero crônica, pois nele o autor : </h2>
<p>
<p>A) argumenta em favor da máquina de escrever. ;</p>
<p>B) informa os leitores sobre o trabalho do jornalista. </p>
<p><h2><font color="#008000"><b>C)  registra o cotidiano com humor, crítica e sensibilidade. </p></font></b></h2>
<p>D) visa transmitir noções relacionadas à ética jornalística.</p>
<p>E) argumenta em favor da máquina de escrever.</p>
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


<h2>2) O texto de Rubem Alves é uma crônica. Ao compará-lo com as características desse gênero, só NÃO é correto afirmar:  </h2>
			
			
<p>A)  O texto assume um caráter narrativo em função, inclusive dos personagens. ></p>
<p>B) O texto assume um caráter poético, simplesmente, em função da referência que faz ao camelo e ao beija-flor.  ></p>
<p><b><h2><font color="#008000">C) A pergunta retórica “Qual é a diferença?” (5º§) funciona como um convite à reflexão do leitor. 	></p></font></b></h2>
<p>D)Embora apresente uma linguagem mais subjetiva, pode-se apreender, com clareza, a defesa de um posicionamento. .></p>
<p>E) Em “A história nos leva para o tempo” (8º§), a presença da primeira pessoa do plural no pronome funciona como estratégia de aproximação com o leitor. 
 ></p>
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
No que se refere ao gênero textual, o texto CG1A1CCC classifica-se como:</h2>

<p>A) resenha. ;</p>
<p>B)Discurso;</p>
<p>C)  Verbete;</p>
<p><h2><font color="#008000"><b>D)Notícia</p></font></b></h2>
<p>E) relato histórico. .</p>
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


<h2>4) Quanto ao gênero, o texto apresenta características de uma?</h2>

<p><h2><font color="#008000"><b>A) crônica. ;</p></font></b></h2>
<p> B) Resenha ;</p>
<p> C) reportagem;</p>
<p> D) Artigo;</p>
<p> E)Texto.</p>
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
Quanto ao gênero, o texto apresenta características de  </h2>

<p><h2><font color="#008000"><b> A)  tira.  ></p></font></b></h2>
<p> B) charge></p>
<p> C) anúncio.></p>
<p> D) fabula></p>
<p> E) nosso></p>
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


<h2>6) Diversos gêneros de textos, que seguem padrões mais ou menos rígidos de composição, integram a chamada "correspondência oficial?. No caso da troca de correspondências entre autoridades de mesma hierarquia, a forma recomendada para fechar os textos é:</h2>

<p> A) Sem mais.;</p> 
<p> B)Grato(a).;</p>
<p> C) Subscrevo-me. ;</p>
<p><h2><font color="#008000"><b> D)Atenciosamente.
;</p></font></b></h2>
<p> E) No aguardo.
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
Identifique abaixo as afirmativas verdadeiras ( V ) e as falsas ( F ) com base no texto 1.

( ) O uso de primeira pessoa do singular ilustra o posicionamento subjetivo do entrevistado no decorrer do texto.
( ) O formato do texto com perguntas e respostas caracteriza o dialogismo do gênero discursivo entrevista.
( ) O entrevistado faz uso de definições genéricas e abstratas, sem fundamentar sua visão em situações práticas e cotidianas.
( ) O entrevistador tece comentários no decorrer da entrevista que complementam a perspectiva do entrevistado.
( ) O entrevistado alterna os pronomes “nós” e “a gente” para designar a primeira pessoa do plural, recurso que torna o texto mais formal do que se usasse apenas “nós”.

Assinale a alternativa que indica a sequência correta, de cima para baixo:</h2>

<p> A)  F • F • F • F • V;</p> 
<p> B) F • V • V • V • F;</p>
<p> C) V • F • V • V • F;</p>
<p> D) V • V • F • F • F;</p>
<p><b><h2><font color="#008000"> E) V • V • F • V • F.</p></font></b></h2>
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

<h2>8) O texto de Mario Vargas Llosa pertence ao gênero denominado.</h2>

<p><h2><font color="#008000"><b> A) carta;</p></font></b></h2>
<p> B) Ensaio;</p>
<p> C) crônica;</p>
<p> D) Sinopse;</p>
<p> E) resenha.</p>
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
A partir da leitura do texto, podemos inferir que seu autor:
I. Classifica seu texto como uma crônica.
II. Entende que escreveu uma narrativa “palavra puxa palavra”.
III. Se considera um cronista genial.
Está correto o que se afirma:.</h2>
<br>
<p>A) Apenas no item I ;</p> 
<p> B) Apenas nos itens I e II ;</p>
<p> C) Apenas nos itens I e III ;</p>
<p><h2><font color="#008000"><b>  D) Nos itens I, II e III 

;</p></font></b></h2>
<p> E)Apenas nos itens I e II 
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


<h2>10) O gênero textual do qual o texto 02 é exemplar é:</h2>
			
			<p> A) Narração ;</p>
			<p><h2><font color="#008000"> B) Editorial;</p></font></b></h2>
			<p>C) Propaganda institucional ;</p>
			<p>D) Anúncio publicitário;</p>
			<p>E) Publicidade.</p>
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