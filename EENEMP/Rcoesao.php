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
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pcoesao.php';</script>";
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
	$materia = "coesao e coerencia";
	
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
<h2>1) Os  períodos  a  seguir  estão  em  ordem  diferente  daquela  em  que  foram  colocados  no  texto  original,  disponível  em http://www.cienciahoje.org.br/noticia/v/ler/id/4925/n/aventuras_de_uma_cientista_portuguesa,  e  são  referência para a próxima questão. 

( 1 ) O projeto, chamado Inpact, tem como objetivo o desenvolvimento pré-clínico de fármacos inovadores específicos para determinados tipos de câncer e bactérias patogênicas.
( 2 ) Como parte dessa colaboração, profissionais do ICH estão dando treinamento em divulgação científica a uma jovem pesquisadora portuguesa que veio ao Brasil para expandir seus conhecimentos.
( 3 ) Divulgar a ciência feita nas universidades e outros centros de pesquisa para a sociedade é uma tarefa fundamental para todo cientista.
( 4 ) Para isso, reúne conhecimento e tecnologias provenientes tanto de universidades como de empresas de vários setores, proporcionando um ambiente de cooperação muito propício à criação dos novos fármacos.
( 5 ) Por isso, o Instituto Ciência Hoje colocou toda a sua experiência nessa área à disposição de um projeto internacional que visa à criação de novos fármacos e reúne instituições de cinco países.

Assinale a alternativa que apresenta a sequência CORRETA, de cima para baixo, em que devem aparecer os períodos, a fim de formar um texto coeso e coerente. : </h2>
<p>
<p>A) 3 – 5 – 2 – 1 – 4. ;</p>
<p>B) 1 – 3 – 4 – 5 – 2. ;</p>
<p><h2><font color="#008000"><b>C) 2 – 4 – 3 – 5 – 1. ;</p></font></b></h2>
<p>D) 1 – 5 – 4 – 3 – 2.;</p>
<p>E) 2 – 5 – 1 – 2 – 3.;</p>
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


<h2>2) Assinale a alternativa em que a expressão destacada a seguir está empregada em DESACORDO com as recomendações da norma gramatical. </h2>
			
			
<p>A)  ao meio-dia tem dois e à tarde tem três [...]. ></p>
<p>B) Tudo no universo está sujeito à segunda lei da termodinâmica [...]. ></p>
<p><b><h2><font color="#008000">C) aumentar [...] a sua expectativa de vida, através de melhor nutrição [...].></p></font></b></h2>
<p>D) que determina o fluxo do tempo e traz a velhice.></p>
<p>E) mítica “fonte da juventude”, cujas águas seriam capazes de rejuvenescer [...]. ></p>
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
“Casas construídas em áreas próximas de córregos e rios também estão sujeitas a alagamentos quando há muita chuva em um período curto de tempo. Além disso, por conta dos esgotos que muitas vezes são jogados nos rios, as pessoas que vivem nesses locais ficam sujeitas a contrair doenças.”

Todos os termos sublinhados estabelecem coesão com termos anteriores. Assinale a opção que indica o referente anterior de forma adequada:</h2>

<p>A) Casas / nesses locais ;</p>
<p>B) disso / construção de casas próximas de córregos e rios;</p>
<p>C)  que / esgotos ;</p>
<p><h2><font color="#008000"><b>D)que / casas</p></font></b></h2>
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


<h2>4) O segmento do texto que não indica uma consequência de algo anteriormente citado é?</h2>

<p><h2><font color="#008000"><b>A) “dificulta a construção das casas”. ;</p></font></b></h2>
<p> B) “pode colocar em risco a vida dos moradores”. ;</p>
<p> C) “a água pode fazer com que a terra deslize”. ;</p>
<p> D) “estão sujeitas a alagamentos”.;</p>
<p> E)“são carregadas com ela as casas construídas”. .</p>
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
“Temos uma notícia triste: o coração não é o órgão do amor! Ao contrário do que dizem, não é ali que moram os sentimentos. Puxa, para que serve ele, afinal? Calma, não jogue o coração para escanteio, ele é superimportante. ´É um órgão vital. É dele a função de bombear sangue para todas as células de nosso corpo´, explica Sérgio Jardim, cardiologista do Hospital do Coração”.

Dentre os termos sublinhados, assinale a opção que indica o termo que não se refere a nenhum termo anterior. </h2>

<p><h2><font color="#008000"><b> A)  que  ></p></font></b></h2>
<p> B) ali></p>
<p> C) ele></p>
<p> D) desse></p>
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


<h2>6) No primeiro parágrafo do texto CB1A1AAA, o referente da forma pronominal “sua” (l.7) é.</h2>

<p> A)“significado” (l.6).;</p> 
<p> B) “a palavra cidadania” (l. 4 e 5);</p>
<p> C) “Esse largo uso” (l.5).;</p>
<p><h2><font color="#008000"><b> D)“vários empregos” (l.6).
;</p></font></b></h2>
<p> E) “vários cidadaos” (l.6).
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


<h2>7) No primeiro parágrafo do texto CB1A1AAA, o referente da forma pronominal “sua” (l.7) é:</h2>

<p> A)  “Esse largo uso” (l.5).;</p> 
<p> B) “vários empregos” (l.6).;</p>
<p> C) “significado” (l.6).;</p>
<p> D)  “a palavra cidadania” (l. 4 e 5).;</p>
<p><b><h2><font color="#008000"> E)  “a palavra cidadania” (l. 2 e 5)..</p></font></b></h2>
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

<h2>8) No texto CB3A1BBB, o vocábulo “Isso” (l.9) remete à.</h2>

<p><h2><font color="#008000"><b> A) velocidade característica de Bolt, que poderia ser mais bem aproveitada no futebol.;</p></font></b></h2>
<p> B) vontade de trocar de esporte manifestada por diversos atletas olímpicos.;</p>
<p> C) cena hipotética imaginada na qual Usain Bolt atua como jogador de futebol.;</p>
<p> D) intenção de Bolt de deixar as pistas de atletismo para se dedicar ao futebol.;</p>
<p> E) intenção de Bolt de deixar as pistas de atletismo para se dedicar ao futebol..</p>
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


<h2>9) No texto CB3A1BBB, o pronome este, na contração “Neste” (l.12),refere-se a.</h2>
<br>
<p>A) “dia seguinte” (l.11).;</p> 
<p> B) “um eletrizante sorteio” (l. 11 e 12).;</p>
<p> C) “o time de vôlei” (l.12).;</p>
<p><h2><font color="#008000"><b>  D) “evento de abertura” (l.10).
;</p></font></b></h2>
<p> E)“evento de volei” (l.10).
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


<h2>10) No último parágrafo do texto CG1A1CCC, a forma pronominal “la”, em “apontá-la” (l.19), retoma</h2>
			
			<p> A) a ruína da justiça” (l.14).;</p>
			<p><h2><font color="#008000"> B) “autoria incontroversa” (l.18)..;</p></font></b></h2>
			<p>C) “ação dos homens públicos” (l.15)..;</p>
			<p>D) “falta de punição” (l. 17 e 18)..;</p>
			<p>E) “a mais grave de todas as ruínas” (l.16)..</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>A área a ser iluminada é uma circunferência de área 28,26 m2. Basta aplicar na fórmula da área da circunfência para descobrirmos o seu raio:</p>

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