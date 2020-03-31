<?php
session_start();
$con = mysql_connect('localhost','root','');
$db = mysql_select_db('eenemp');

if(isset($_POST['enviar'])){
	$questao1 = $_POST["questao1"];
	$questao2 = $_POST["questao2"];
	$questao3 = $_POST["questao3"];
	$questao4 = $_POST["questao4"];
	$questao5 = $_POST["questao5"];
	$questao6 = $_POST["questao6"];
	$questao7 = $_POST["questao7"];
	$questao8 = $_POST["questao8"];
	$questao9 = $_POST["questao9"];
	$questao10 = $_POST["questao10"];

	if ($questao1 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 1 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  else{
	$email = $_SESSION['logado'];
	$prova = "Prova de matematica";
	$resposta1 = "e";
	$resposta2 = "b";
	$resposta3 = "a";
	$resposta4 = "c";
	$resposta5 = "d";
	$resposta6 = "e";
	$resposta7 = "c";
	$resposta8 = "e";
	$resposta9 = "a";
	$resposta10 = "e";
	
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
	if ($acertou >=7)
{
	$media = "Acima da média";
}
else
{
	$media = "Abaixo da média";
}

	$prova = "prova de matematica";
	$sql = "INSERT INTO historico (nomeProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,media,data) VALUES ('$prova','$email','$acertou','$errou','$porcent','$media','$data')";
	$res = mysql_query($sql);

  if ($res)
      {
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Prova enviada com Sucesso!!!');</script>";
		  ?>
<html>
<head>
	<title>Concluido</title>
	<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<div id="tituloR">
		<h1>Você concluiu com sucesso a avaliação!</h1>
	</div>
	<form id="questoesR" name ="questoesR" enctype="multipart/form-data" >
<br>
<h2>1) Qual o resultado da conta: 1x0+2²-4x0? </h2>
<p>
<p>A) 0;</p>
<p>B) 1;</p>
<p>C) 2;</p>
<p>D) 3;</p>
<p><h2><font color="#008000"><b>E) 4;</p></font></b></h2>
<br>
<?php 	
	if ($questao1 == $resposta1)
{
	$acertou++;
	echo "<font color = green> Questao 1 correta!<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 1 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao1,"<br></font></b></h2>";
}
?>
<p >
<br />

<h2>2) Qual a formula criada por pitagoras?</h2>

<p>A) (b)²-4xAxaC;</p>
<p><h2><font color="#008000"><b>B) a²=b²-c²;</p></font></b></h2>
<p> C) x' = -b+√Δ/2xA;</p>
<p> D) x'' = -b-√Δ/2xA;</p>
<p> E) z=a+bi.</p>
<br />
<?php
if ($questao2 == $resposta2)
{
	$acertou++;
	echo "<font color = green> Questao 2 correta!<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 2 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao2,"<br></font></b></h2>";
}
?>
<br />

<h2>3) Qualquer número natural com exatos dez dígitos é:</h2>

<p><h2><font color="#008000"><b> A) Maior que um milhão;</p></font></b></h2>
<p>B) Maior que um bilhão;</p>
<p> C) Menor que um milhão;</p>
<p> D) Menor que um bilhão;</p>
<p>E) Igual a um bilhão.</p>
<br />
<?php
if ($questao3 == $resposta3)
{
	$acertou++;
	echo "<font color = green> Questao 3 correta!<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 3 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao3,"<br></font></b></h2>";
}
?>
<br />

<h2>4) Em uma central de atendimento, cem pessoas receberam senhas numeradas de 1 até 100. Uma das senhas é sorteada ao acaso. Qual é a probabilidade de a senha sorteada ser um número de 1 a 20?</h2>

<p> A) 1/100;</p>
<p> B) 19/100;</p>
<p><h2><font color="#008000"><b> C) 20/100;</p></font></b></h2>
<p> D) 21/100;</p>
<p> E) 80/100.</p>
<br />
<?php
if ($questao4 == $resposta4)
{
	$acertou++;
	echo "<font color = green> Questao 4 correta<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 4 errada<br>";
	echo "<h2><b> Sua resposta: ",$questao4,"<br></font></b></h2>";
}
?>
<br />

<h2>5) Atualmente existem diversas locadoras de veículos, permitindo uma concorrência saudável para o mercado, fazendo com que os preços se tornem acessíveis. Nas locadoras P e Q, o valor da diária de seus carros depende da distância percorrida, conforme o gráfico.</h2>
<img src="img/matematicaQuestao5.png" height="300px" width="600px">
<br><br>
<p> A) De 20 a 100.;</p> 
<p> B) De 80 a 130.;</p>
<p> C) De 100 a 160.;</p>
<p><h2><font color="#008000"><b> D) De 0 a 20 e de 100 a 160.;</p></font></b></h2>
<p> E)  De 40 a 80 e de 130 a 160.</p>
<br />
<?php
if ($questao5 == $resposta5)
{
	$acertou++;
	echo "<font color = green> Questao 5 correta<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 5 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao5,"<br></font></b></h2>";
}
?>
<br />

<h2>6) O acréscimo de tecnologias no sistema produtivo industrial tem por objetivo reduzir custos e aumentar a produtividade. No primeiro ano de funcionamento, uma indústria fabricou 8 000 unidades de um determinado produto. No ano seguinte, investiu em tecnologia adquirindo novas máquinas e aumentou a produção em 50%. Estima-se que esse aumento percentual se repita nos próximos anos, garantindo um crescimento anual de 50%. Considere P a quantidade anual de produtos fabricados no ano t de funcionamento da indústria.

Se a estimativa for alcançada, qual é a expressão que determina o número de unidades produzidas P em função de t, para t ≥ 1?</h2>

<p> A) P(t) = 0,5 · t -1 + 8 000;</p> 
<p> B) P(t) = 50 · t -1 + 8 000;</p>
<p> C) P(t) = 4 000 · t-1 + 8 000;</p>
<p> D) P(t) = 8 000 · (0,5) t-1;</p>
<p><h2><font color="#008000"><b> E) P(t) = 8 000 · (1,5) t-1.</p></font></b></h2>
<br />
<?php
if ($questao6 == $resposta6)
{
	$acertou++;
	echo "<font color = green> Questao 6 correta<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 6 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao6,"<br></font></b></h2>";
}
?>
<br />

<h2>7) Para o modelo de um troféu foi escolhido um poliedro P, obtido a partir de cortes nos vértices de um cubo. Com um corte plano em cada um dos cantos do cubo, retira-se o canto, que é um tetraedro de arestas menores do que metade da aresta do cubo. Cada face do poliedro P, então, é pintada usando uma cor distinta das demais faces. Com base nas informações, qual é a quantidade de cores que serão utilizadas na pintura das faces do troféu?</h2>

<p> A) 6;</p> 
<p> B) 8;</p>
<p><h2><font color="#008000"><b> C) 14;</p></font></b></h2>
<p> D) 24;</p>
<p> E) 30.</p>
<br />
<?php
if ($questao7 == $resposta7)
{
	$acertou++;
	echo "<font color = green> Questao 7 correta<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 7 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao7,"<br></font></b></h2>";
}
?>
<br />

<h2>8) Um arquiteto está reformando uma casa. De modo a contribuir com o meio ambiente, decide reaproveitar tábuas de madeira retiradas da casa. Ele dispõe de 40 tábuas de 540 cm, 30 de 810 cm e 10 de 1 080 cm, todas de mesma largura e espessura. Ele pediu a um carpinteiro que cortasse as tábuas em peças de mesmo comprimento, sem deixar sobras, e de modo que as novas peças ficassem com o maior tamanho possível, mas de comprimento menor que 2 m.
Atendendo o pedido do arquiteto, o carpinteiro deverá produzir</h2>

<p> A) 105 peças;</p>
<p> B) 120 peças;</p>
<p> C) 210 peças;</p>
<p> D) 243 peças;</p>
<p><h2><font color="#008000"><b> E) 420 peças.</p></font></b></h2>
<br />
<?php
if ($questao8 == $resposta8)
{
	$acertou++;
	echo "<font color = green> Questao 8 correta<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 8 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao8,"<br></font></b></h2>";
}
?>
<br />

<h2>9) Um comerciante dobrou os preços dos seus produtos em relação aos preços praticados no ano anterior e, logo após esse aumento, anunciou um desconto de 50% em todos os itens. Desse modo, em relação ao ano anterior, os produtos</h2>

<p><h2><font color="#008000"><b> A) não variaram de preço.;</p></font></b></h2> 
<p> B) tiveram desconto de 25%;</p>
<p> C) tiveram aumento de 25%;</p>
<p> D) tiveram aumento de 50%;</p>
<p> E) tiveram aumento de 100%.</p>
<br />
<?php
if ($questao9 == $resposta9)
{
	$acertou++;
	echo "<font color = green> Questao 9 correta<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 9 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao9,"<br></font></b></h2>";
}
?>
<br />

<h2>10) Um agricultor comprou 300 g de sementes de café. Ele pesou-as e verificou que 15 sementes de café pesam juntas 1 g. Quantas sementes de café o agricultor comprou?</h2>

<p> A) 600;</p> 
<p> B) 900;</p>
<p> C) 1 500;</p>
<p> D) 3 000;</p>
<p><h2><font color="#008000"><b> E) 4 500.</p></font></b></h2>
<br />
<?php

if ($questao10 == $resposta10)
{
	$acertou++;
	echo "<font color = green> Questao 10 correta<br></font>";
}
else
{
	$errou++;
	echo "<font color = red> Questao 10 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao10,"<br></font></b></h2>";
}
?>
<br />
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
<p align="center">
<a href="logadoAluno.php" id="enviar">Página inicial</a>
</form>
</body>
</html>
		  <?php
		  
          die();
      }
      else
      {
          echo 'Falha ao enviar prova!!! ';
      }
  }
}
?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de matemática</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de conhecimentos gerais de matemática</h1>
		</form>
		
		<form id="questoes" action="simulado.php" method = "POST">
			<br>
			<h2>1) Qual o resultado da conta: 1x0+2²-4x0? </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 0;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) 1;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 2;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) 3;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) 4.</label>
			<br />
			<br />
			
			<h2>2) Qual a formula criada por pitagoras?</h2>
		
			<label>
			<input type="radio" name="questao2" value="a" /> A) (b)²-4xAxaC;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) a²=b²-c²;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) x' = -b+√Δ/2xA;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) x'' = -b-√Δ/2xA;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) z=a+bi.</label>
			<br />
			<br />
			
			<h2>3) Qualquer número natural com exatos dez dígitos é:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Maior que um milhão;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) Maior que um bilhão;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Menor que um milhão;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Menor que um bilhão;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Igual a um bilhão.</label>
			<br />
			<br />
			
			<h2>4) Em uma central de atendimento, cem pessoas receberam senhas numeradas de 1 até 100. Uma das senhas é sorteada ao acaso. Qual é a probabilidade de a senha sorteada ser um número de 1 a 20?</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) 1/100;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 19/100;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) 20/100;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) 21/100;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) 80/100.</label>
			<br />
			<br />
			
			<h2>5) Atualmente existem diversas locadoras de veículos, permitindo uma concorrência saudável para o mercado, fazendo com que os preços se tornem acessíveis. Nas locadoras P e Q, o valor da diária de seus carros depende da distância percorrida, conforme o gráfico.</h2>
			<img src="img/matematicaQuestao5.png" height="300px" width="600px">
			<br><br>
			<label>
			<input type="radio" name="questao5" value="a" /> A) De 20 a 100.;</label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) De 80 a 130.;</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) De 100 a 160.;</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) De 0 a 20 e de 100 a 160.;</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  De 40 a 80 e de 130 a 160.</label>
			<br />
			<br />
			
			<h2>6) O acréscimo de tecnologias no sistema produtivo industrial tem por objetivo reduzir custos e aumentar a produtividade. No primeiro ano de funcionamento, uma indústria fabricou 8 000 unidades de um determinado produto. No ano seguinte, investiu em tecnologia adquirindo novas máquinas e aumentou a produção em 50%. Estima-se que esse aumento percentual se repita nos próximos anos, garantindo um crescimento anual de 50%. Considere P a quantidade anual de produtos fabricados no ano t de funcionamento da indústria.
			
			Se a estimativa for alcançada, qual é a expressão que determina o número de unidades produzidas P em função de t, para t ≥ 1?</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) P(t) = 0,5 · t -1 + 8 000;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) P(t) = 50 · t -1 + 8 000;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) P(t) = 4 000 · t-1 + 8 000;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) P(t) = 8 000 · (0,5) t-1;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) P(t) = 8 000 · (1,5) t-1.</label>
			<br />
			<br />
			
			<h2>7) Para o modelo de um troféu foi escolhido um poliedro P, obtido a partir de cortes nos vértices de um cubo. Com um corte plano em cada um dos cantos do cubo, retira-se o canto, que é um tetraedro de arestas menores do que metade da aresta do cubo. Cada face do poliedro P, então, é pintada usando uma cor distinta das demais faces. Com base nas informações, qual é a quantidade de cores que serão utilizadas na pintura das faces do troféu?</h2>

			<label>		
			<input type="radio" name="questao7" value="a" /> A) 6;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 8;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 14;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) 24;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) 30.</label>
			<br />	
			<br />
		
			<h2>8) Um arquiteto está reformando uma casa. De modo a contribuir com o meio ambiente, decide reaproveitar tábuas de madeira retiradas da casa. Ele dispõe de 40 tábuas de 540 cm, 30 de 810 cm e 10 de 1 080 cm, todas de mesma largura e espessura. Ele pediu a um carpinteiro que cortasse as tábuas em peças de mesmo comprimento, sem deixar sobras, e de modo que as novas peças ficassem com o maior tamanho possível, mas de comprimento menor que 2 m.
			Atendendo o pedido do arquiteto, o carpinteiro deverá produzir</h2>
		
			<label>
			<input type="radio" name="questao8" value="a" /> A) 105 peças;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) 120 peças;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) 210 peças;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) 243 peças;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) 420 peças.</label>
			<br />
			<br />
	
			<h2>9) Um comerciante dobrou os preços dos seus produtos em relação aos preços praticados no ano anterior e, logo após esse aumento, anunciou um desconto de 50% em todos os itens. Desse modo, em relação ao ano anterior, os produtos</h2>

			<label>	
			<input type="radio" name="questao9" value="a" /> A) não variaram de preço.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) tiveram desconto de 25%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) tiveram aumento de 25%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) tiveram aumento de 50%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) tiveram aumento de 100%.</label>
			<br />
			<br />

			<h2>10) Um agricultor comprou 300 g de sementes de café. Ele pesou-as e verificou que 15 sementes de café pesam juntas 1 g. Quantas sementes de café o agricultor comprou?</h2>

			<label>
			<input type="radio" name="questao10" value="a" /> A) 600;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) 900;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 1 500;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 3 000;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) 4 500.</label>
			<br />
			<br />
			<br>
			<p align="center">
			<input type="submit" name="enviar" id = "enviar" value="Ver resultados" />
			</p>
			<br>

		</form>
	</div>
	<script>
	function pegarDataAtual(){
		data = new Date();
		document.getElementById('data').value = data.getDay()+'/'+data.getMonth()+'/'+data.getFullYear();
	}
	</script>
	</body>
</html>