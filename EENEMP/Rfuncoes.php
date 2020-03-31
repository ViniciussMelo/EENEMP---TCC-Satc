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
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pfuncoes.php';</script>";
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
	$prova = "prova de português";
	$materia = "funcoes da linguagem";
	
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
<h2>1) Em “Já deve ter acontecido com você. Sabe quando você está no trabalho, e dois ou três amigos postam fotos de viagem?”, em função da valorização a um elemento da comunicação, predomina qual função da linguagem? : </h2>
<p>
<p>A) Metalinguística. ;</p>
<p>B) Apelativa. ;</p>
<p><h2><font color="#008000"><b>C) Referencial. ;</p></font></b></h2>
<p>D) Emotiva..;</p>
<p>E) Fática.;</p>
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


<h2>2) “Posso falar de arte e artistas outra vez? Espero que, em algum lugar aí no Brasil, haja leitores e leitoras, mesmo poucos, que se interessem pela figura tão singular e tão fundamental do artista”.

Nesses períodos prevalece a função de linguagem denominada . </h2>
			
			
<p>A) metalinguística. ></p>
<p>B) conativa ou apelativa. ></p>
<p><b><h2><font color="#008000">C) emotiva ou expressiva. ></p></font></b></h2>
<p>D) poética. ></p>
<p>E) referencial.  ></p>
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
A função da linguagem predominante no texto 01 é: :</h2>

<p>A)Apelativa ;</p>
<p>B)  Emotiva ;</p>
<p>C)  Conotativa ;</p>
<p><h2><font color="#008000"><b>D)Referencial </p></font></b></h2>
<p>E) nesses locais / áreas próximas de córregos e rios .</p>
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


<h2>4) A função da linguagem predominante no texto 01 é: ?</h2>

<p><h2><font color="#008000"><b>A) Apelativa ;</p></font></b></h2>
<p> B)  Emotiva  ;</p>
<p> C) Conotativa ;</p>
<p> D) Referencial ;</p>
<p> E)Emotiva.</p>
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
Observando-se a mensagem do texto, pode-se afirmar que a função da linguagem é:  </h2>

<p><h2><font color="#008000"><b> A)  referencial.   ></p></font></b></h2>
<p> B) emotiva.></p>
<p> C)  metalinguística.></p>
<p> D) fática.></p>
<p> E) apelativa.
></p>
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


<h2>6) A propaganda presente no quadro acima faz uso do processo da:</h2>

<p> A)função fática quando mostra um discurso vazio.;</p> 
<p> B)função referencial quando estabelece relação de superioridade ao quiabo.;</p>
<p> C) metonímia quando utiliza a parte pelo todo. </p>
<p><h2><font color="#008000"><b> D)intertextualidade, para garantir a qualidade do produto.
;</p></font></b></h2>
<p> E) comparação com o mundo dos negócios, pois só assim garante credibilidade ao produto. </p>
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
Considerando as ideias e informações trazidas ao texto, marque V para as afirmativas verdadeiras e F para as falsas para o que se afirma a seguir:

( ) O caráter metalinguístico do texto configura-se mediante estratégia utilizada no primeiro parágrafo cuja análise literária antecipa o assunto a ser tratado.
( ) Dentre os elementos que contribuem para a interpretação jurídica através da Literatura, a linguagem se apresenta como protagonista no processo de interação entre tais matérias.
( ) A Literatura possui um papel fundamental na sociedade contemporânea, não apenas no que diz respeito à arte da palavra, mas também como base argumentativa para a aplicação do Direito.

A sequência está correta em </h2>

<p> A) F, F, V.;</p> 
<p> B)  F, V, F.</p>
<p> C)  F, V, V.</p>
<p> D)  V, V, V.</p>
<p><b><h2><font color="#008000"> E) V, F, V.</p></font></b></h2>
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

<h2>8) Em relação a essa charge, analise as afirmativas.

I - O aluno, na sua fala, usa a função fática da linguagem.
II - Na sua fala, a professora recorre à função apelativa da linguagem.
III - Na fala do aluno, o emprego da forma verbal revela desconhecimento de quem praticou a ação constatada por ele.
IV - O efeito de sentido se estabelece pela relação paradoxal entre o significado da palavra ética e a ação constatada pelo aluno.

Está correto o que se afirma em  </h2>

<p><h2><font color="#008000"><b> A) II, III e IV, apenas.;</p></font></b></h2>
<p> B)I e IV, apenas. </p>
<p> C) I, II e III, apenas.</p>
<p> D)  III e V, apenas.;</p>
<p> E)  II e V, apenas.</p>
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


<h2>9)  A função de linguagem predominante no texto é a: </h2>
<br>
<p>A) Conativa. ;</p> 
<p> B) Emotiva. </p>
<p> C) Metalinguística.;</p>
<p><h2><font color="#008000"><b>  D) Conativa.
;</p></font></b></h2>
<p> E)Nenhuma das alternativas. 
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


<h2>10) 

Leminski, em Despropósito geral, trata da composição de poemas, segundo o eu lírico, obras-primas. Essa função da linguagem – no caso, a poesia que fala do fazer poético – denomina-se Função 	</h2>
			
			<p> A) Fática. ;</p>
			<p><h2><font color="#008000"> B) Poética</p></font></b></h2>
			<p>C) Referencial. ;</p>
			<p>D) Metalinguística</p>
			<p>E) Fática</p>
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