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
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pporcentagem.php';</script>";
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
	$materia = "porcentagem";
	
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
<h2>1) Quanto é 50% de 200?: </h2>
<p>
<p>A) 25;;</p>
<p>B) 50;</p>
<p><h2><font color="#008000"><b>C) 100</p></font></b></h2>
<p>D) 75;</p>
<p>E) 125;</p>
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
<p>Para calcular porcentagem deve-se aprender que porcentagem é um numero dividido por 100, como por exemplo: 50/100 que é igual a 50%. o resultado desta divisão é igual a 0,5. Para calcular a porcentagem basta multiplicar o valor desejado pelo percentual que se quer.
<br><br>

<h2>2) Na sala de aula, a professora descobriu que 40% dos alunos são corintianos, 30% torcem pro São Paulo, 20% são palmeirenses, 10% torcem pro Santos e o resto não gosta de futebol. Sabendo que existem 40 alunos na sala, quantos torcem para o São Paulo?</h2>
			
<p>A) 24></p>
<p>B) 20></p>
<p><b><h2><font color="#008000">C) 12></p></font></b></h2>
<p>D) 14></p>
<p>E) 8></p>
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
<p>Alunos que torcem para o São Paulo ~>  30 % 

40 alunos --------------- 100 %
            x --------------- 30 % 

100 x = 40 . 30
100 x = 1200
x = 1200 / 100
x = 12
<br><br>


<h2>3) João comprou uma TV e resolveu pagar à prazo, pois não podia pagar à vista. Sabendo que o valor à vista é de R$ 1500,00 e que o valor total à prazo é 15% maior que o valor à vista, responda: Quanto João vai pagar no total?:</h2>

<p>A)R$ 1575,00;</p>
<p>B) R$ 1650,00;</p>
<p>C) R$ 1875,00;</p>
<p><h2><font color="#008000"><b>D) R$ 1725,00;</p></font></b></h2>
<p>E) R$ 1800,00.</p>
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
<p>Valor a vista = 1.500
Valor a prazo = 1.725

  15 * 1500 = 22500 = 225
 100               100

1500 + 225 = 1.725
<br><br>

<h2>4) Maria comprou um vestido à vista para ganhar um desconto de 5% no valor original dele. Se o vestido custa R$ 60,00, quanto Maria pagou?</h2>

<p><h2><font color="#008000"><b>A) 9812,5 cm2;</p></font></b></h2>
<p> B) R$ 52,00;</p>
<p> C) R$ 53,00;</p>
<p> D) R$ 51,00;</p>
<p> E) R$ 50,00.</p>
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
<p> 60,00 --------- 100%
    x     ---------   95%   (100% - 5% de desconto = 95%)

100x = 95.60 
x= 95.60/100 (passou o 100 para o outro lado, ele estava multiplicando, agora ele divide, troca a operação)
x= 57
<br><br>

<h2>5) Três é quantos porcento de cinco?</h2>

<p><h2><font color="#008000"><b> A) 60%></p></font></b></h2>
<p> B) 50%></p>
<p> C) 80%></p>
<p> D) 70%></p>
<p> E) 90%></p>
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
<p> 5 -------------- 100 %
3 -------------- x 

5x = 100 . 3
5x = 300
x = 300 / 5
x = 60

três é 60 % de 5 
<br><br>


<h2>6) Quanto é 20% ao quadrado?</h2>

<p> A) 40%;</p> 
<p> B) 0,4%;</p>
<p> C) 0,04%;</p>
<p><h2><font color="#008000"><b> 4%;</p></font></b></h2>
<p> E) 0,40%</p>
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
<p> (20/100)² =  400/1000 = 0.04 ou 4% 
<br><br>

<h2>7) Carlos estava sempre chegando muito cansado no trabalho. O chefe dele percebeu isso e falou que ele deveria passar pelo menos um terço do dia dormindo. Levando isso em consideração, quantas horas Carlos deveria dormir?</h2>

<p> A)6 horas;</p> 
<p> B) 10 horas;</p>
<p> C) 14 horas;</p>
<p> D) 12 horas</p>
<p><b><h2><font color="#008000"> E) 8</p></font></b></h2>
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
<p> O dia tem 24h, o chefe dele quer que ele durma 1/3 do dia. Então você multiplica 24 por 1/3.

 \frac{24}{1} . \frac{1}{3} =  \frac{24}{3} = 8h
<br><br>

<h2>8) No dia 1 deste mês, um produto estava sendo vendido por R$ 400,00. No dia 10, esse produto sofreu um redução de 50% no seu preço. No dia 20, ele foi reajustado com um aumento de 50%. Escolha a alternativa correta.</h2>

<p><h2><font color="#008000"><b> A) No dia 20 o produto estava com o mesmo preço que ele estava no dia 1.</p></font></b></h2>
<p> B) O produto estava mais barato no dia 1 do que no dia 20;</p>
<p> C) O produto estava mais barato no dia 20 do que no dia 1;</p>
<p> D) O produto é mais barato no dia 20.;</p>
<p> E) O produto é mais barato em outros dias.</p>
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
<p> Alternativa C poque se vc for tirar 50% de R$400 vc vai ter o valor de R$200. E depois com o reajuste de 50% vc vai ter os R$200 + R$100 que é o valor de 50% que da o total de R$300
<br><br>

<h2>8) No dia 1 deste mês, um produto estava sendo vendido por R$ 400,00. No dia 10, esse produto sofreu um redução de 50% no seu preço. No dia 20, ele foi reajustado com um aumento de 50%. Escolha a alternativa correta.</h2>


<h2>9) Ana tem 20 anos e morou durante 5 anos nos Estados Unidos, 4 anos na Austrália e o resto no Brasil. Em porcentagem, quantos anos ela morou no hemisfério sul?</h2>
<br>
<p>A) 20%</p> 
<p> B) 25%;</p>
<p> C) 50%;</p>
<p><h2><font color="#008000"><b>  D) 75%;</p></font></b></h2>
<p> E) 60%.</p>
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

<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p> ok, vamos la
20              100%
15               ?(x)
solução:
20x
100 x 15 = 1500
2x=1500
x= 1500/20
x= 75
<br><br>


<h2>10) Fernanda ganha 10% a mais que Paulo. Se Fernanda ganhar um aumento de 20%, quantos porcento ela ganhará a mais que Paulo?</h2>
			
			<p> A) 10%.;</p>
			<p><h2><font color="#008000"> B)  32%.;</p></font></b></h2>
			<p>C) 16%.;</p>
			<p>D) 20%.;</p>
			<p>E) 30% m.</p>
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
<p> 110,00 ------ 100%
   X      -------   20%              X = 22,00

110,00 + 22,00 = 132,00
<br><br>
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