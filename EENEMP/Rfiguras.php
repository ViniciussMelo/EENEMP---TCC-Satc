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
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pfiguras.php';</script>";
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
	$materia = "figuras de linguagem";
	
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
<h2>1) “A resposta que lhe daria seria: “Essa estória não aconteceu nunca para que aconteça sempre...”(5º§)

No último período, ocorre um jogo de palavras entre os advérbios explicitando a seguinte fgura de linguagem : </h2>
<p>
<p>A) ironia.  ;</p>
<p>B)  eufemismo. ;</p>
<p><h2><font color="#008000"><b>C) paradoxo.  ;</p></font></b></h2>
<p>D) personificação. ;</p>
<p>E) antítese. ;</p>
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
“A conclusão óbvia é que uma língua não é como nos ensinaram: clara e relacionada diretamente a um fato ou situação que ela representa como um espelho.” (3º§)

 Ao aproximar, semanticamente,	a língua de um espelho, o autor emprega a seguinte figura de linguagem: </h2>
			
			
<p>A)  Hipérbole. ></p>
<p>B) Metáfora ></p>
<p><b><h2><font color="#008000">C) Eufemismo.></p></font></b></h2>
<p>D) Símile></p>
<p>E) Prosopopeia ></p>
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
Na passagem “Claro que não! Afinal, você é você! Se você acabar, acaba tudo e, convenhamos, isso não faz o menor sentido.” (4º§), o autor faz uso da figura de linguagem:</h2>

<p>A) Prosopopeia;</p>
<p>B) Metáfora	;</p>
<p>C) Ironia ;</p>
<p><h2><font color="#008000"><b>D)Metonimia</p></font></b></h2>
<p>E) Comparação .</p>
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


<h2>4) Assinale a alternativa correta referente aos excertos do Texto 1?</h2>

<p><h2><font color="#008000"><b>A)No excerto “[...] as cobranças são cada vez mais intensas e frequentes [...]”, os termos em destaque constituem uma relação de sinonímia. . ;</p></font></b></h2>
<p> B)No excerto “O acúmulo de compromissos preenche horários livres, adia o lazer e a vida social [...]”, tem-se a figura de linguagem chamada Zeugma. ;</p>
<p> C) No excerto “As demandas exigem que as pessoas tenham inúmeras habilidades e qualificações acadêmicas [...]”, o termo “demandas” pode ser substituído por “vicissitudes” sem alterar o sentido da frase.  ;</p>
<p> D) No excerto “Uma mãe de família sai às 7 horas da manhã para deixar as crianças na escola.”, tem-se a figura de linguagem chamada Sinédoque.  

.;</p>
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
No texto, a metáfora que está associada, à “maldição de Netuno” (parágrafo 10) é:</h2>

<p><h2><font color="#008000"><b> A) “queimou a língua” (parágrafo 4).  ></p></font></b></h2>
<p> B) “palavrão que sobrevive” (parágrafo 6). ></p>
<p> C)“enxurrada de opiniões” (parágrafo 8). ></p>
<p> D) “textos apócrifos” (parágrafo 8). ></p>
<p> E) “textos apócrifos” (parágrafo 8). ></p>
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


<h2>6) O autor do texto 3 declara que, apesar de a literatura conter cenas de violência, ninguém a acusa de ser responsável pela violência.

Nesse caso, a argumentação se apoia numa: </h2>

<p> A)analogia; ;</p> 
<p> B) inferência;;</p>
<p> C)  redundância;;</p>
<p><h2><font color="#008000"><b> D)metáfora; </p></font></b></h2>
<p> E) metonímia. </p>
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


<h2>7)Leia a frase a seguir.

“Entre os efeitos positivos do fumo inclui-se a economia com o sistema de saúde por causa da mortalidade prematura do fumante.”

Assinale a opção que indica o exemplo de linguagem figurada presente nessa frase:</h2>

<p> A) Metáfora;</p> 
<p> B) Eufemismo;</p>
<p> C) Ironia;</p>
<p> D)  Pleonasmo;</p>
<p><b><h2><font color="#008000"> E)  Personificação</p></font></b></h2>
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

<h2>8) A frase de César Augusto – Apressa-te devagar – traz um exemplo de linguagem figurada que se repete em: </h2>

<p><h2><font color="#008000"><b> A) Quem não gosta de estar consigo mesmo em geral está certo.;</p></font></b></h2>
<p> B) É muito difícil distinguir entre um homem de gênio e um louco;</p>
<p> C) Amor é ferida que dói e não se sente.</p>
<p> D) O mundo não será salvo pelos caridosos, mas pelos eficientes. ;</p>
<p> E) É preferível conhecer coisas inúteis que não saber nada.</p>
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


<h2>9)Todos os pensamentos abaixo partem de uma metáfora ou de uma comparação; o pensamento que mostra uma justificativa para a metáfora ou comparação realizada é:  .</h2>
<br>
<p>A)A cidade não é uma selva de concreto; é um zoológico humano. (Desmond Morris)  (l.11).;</p> 
<p> B) Todas as especulações são cinza, meu amigo, mas a árvore de ouro da vida é eternamente verde. (Goethe) .;</p>
<p> C) Cada ave, com asas estendidas, é um livro de duas folhas aberto no céu. Protejamos esse livro. E aumentemos, com essa proteção, a miúda bibliografia. (Humberto de Campos) ;</p>
<p><h2><font color="#008000"><b>  D) A distância é como o vento. Acende os fogos grandes e apaga os pequenos. (D. Modugno
;</p></font></b></h2>
<p> E)A boa sociedade é uma horda de refinados, composta de duas tribos: uma que se aborrece e outra que aborrece. (Lord Byron)  
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


<h2>10) No enunciado “O teatro, aliás, era considerado uma válvula de escape para aquelas emoções reprimidas que todos têm [...].” (segundo parágrafo), há uma figura de linguagem chamada  </h2>
			
			<p> A) anacoluto;</p>
			<p><h2><font color="#008000"> B) metáfora;</p></font></b></h2>
			<p>C) elipse;</p>
			<p>D) eufemismo.;</p>
			<p>E) catacrese.</p>
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