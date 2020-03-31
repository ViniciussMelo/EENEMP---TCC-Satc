<?php
	session_start();
	include_once("connection.php");

	if (!isset($_SESSION["logado"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}
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
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='potenciacao.php';</script>";
          die();
  }
  else{
	$email = $_SESSION['logado'];
	$prova = "Prova de matematica";
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
	if ($acertou >=7)
{
	$media = "Acima da média";
}
else
{
	$media = "Abaixo da média";
}

	$prova = "prova de matematica";
	$materia = "Probabilidade";
	$sql = "INSERT INTO historico (nomeProva,materiaProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$acertou','$errou','$porcent','$data')";
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
	<meta charset="utf-8">
</head>
<body>
	<div id="tituloR">
		<h1>Você concluiu com sucesso a avaliação!</h1>
	</div>
	<form id="questoesR" name ="questoesR" enctype="multipart/form-data" >
<br>
<h2>1) O número de algarismos do produto </h2>
<p>
<p>A) 17;</p>
<p>B) 18;</p>
<p><h2><font color="#008000"><b>C) 26;</p></font></b></h2>
<p>D) 34;</p>
<p>E) 35;</p>
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


<h2>2) O Sol, responsável por todo e qualquer tipo
de vida no nosso planeta, encontra-se, em média, a 150
milhões de quilômetros de distância da Terra. Sendo a
velocidade da luz 3.105
km/s pode-se concluir que, a essa
distância, o tempo gasto pela irradiação da luz solar, após
ser emitida pelo Sol até chegar ao nosso planeta é, em
minutos, aproximadamente,</h2>
			
			
<p>a) 2</p>
<p>b) 3
    </p>
<p><b><h2><font color="#008000">C)5
    </p></font></b></h2>
<p> d) 6
    
</p>
<p>e) 8
   </p>
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

<h2>3) Se x = 3200000 e y = 0,00002, então xy
vale:</h2>

<p>a)0,64</p>
<p>b)6,4</p>
<p>C)64</p>
<p><h2><font color="#008000"><b>d) 640;</p></font></b></h2>
<p>E) 6400</p>
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


<h2>4) O diâmetro de certa bactéria é 2 . 10-6
metros. Enfileirando-se x dessas bactérias, obtém-se o
comprimento de 1mm. O número x é igual a:</h2>

<p><h2><font color="#008000"><b>A)2000;</p></font></b></h2>
<p> b)5000.</p>
<p> c)10 000.</p>
<p> d)1000. </p>
<p> e)500 .</p>
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


<h2>5)  O valor de (0,2)3 + (0,16)2 é:</h2>

<br><br>
<p><h2><font color="#008000"><b> a)  0,0336. </p></font></b></h2>
<p> b) 0,0332</p>
<p> C) 0,1056</p>
<p> D) 0,2568 </p>
<p> E) 0,6256	</p>
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


<h2>6)Simplificando a expressão [29 : (22 . 2)3]-3, obtém-se:</h2>

<p> a) 236 </p> 
<p> B) 230;</p>
<p> C) 1</p>
<p><h2><font color="#008000"><b> d) 26</p></font></b></h2>
<p> E) a</p>
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
 Dadas as expressões A = -a2 – 2a + 5 e B = b2 + 2b + 5:</h2>


<p> a) 40%</p> 
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
 Se 53a = 64, o valor de 5-a é:</h2>

<p><h2><font color="#008000"><b> A) a) –1/4   </p></font></b></h2>
<p> B) 1/40</p>
<p> C)  1/20;;</p>
<p> D)  ¼;</p>
<p> E) 1/8.</p>
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

<h2>9)  O valor de (0,2)3 + (0,16)2 é</h2>
<br>
<p>A)  0,0264 ;</p> 
<p> B) 0,0336;</p>
<p> C) 0,1056</p>
<p><h2><font color="#008000"><b>  D) 0,2568 ;</p></font></b></h2>
<p> E) 0,6256</p>
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


<h2>10)  O valor da expressão B = 5 . 108 . 4 . 10-3 é:</h2>
			
			<p> A)  20^6;</p>
			<p><h2><font color="#008000"> B) 2 . 10^6;</p></font></b></h2>
			<p>C)  2 . 10^9;</p>
			<p>D) 3/10;</p>
			<p>E)20 . 10^-4</p>
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
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de matemática sobre <font color=red>Potenciação/Radiciação</h1></font>
		</form>
		
		<form id="questoes" action="potenciacao.php" method = "POST">
			<br>
			<h2>1) O número de algarismos do produto
5
17× 49
é igual a: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 17;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) 18;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 26;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) 34;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) 35</label>
			<br />
			<br />
			
			
			<h2>2)  O Sol, responsável por todo e qualquer tipo
de vida no nosso planeta, encontra-se, em média, a 150
milhões de quilômetros de distância da Terra. Sendo a
velocidade da luz 3.105
km/s pode-se concluir que, a essa
distância, o tempo gasto pela irradiação da luz solar, após
ser emitida pelo Sol até chegar ao nosso planeta é, em
minutos, aproximadamente,</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)2</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)3</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)5</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)6</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)8</label>
			<br />
			<br />
			
			<h2>3)(FGV-2003) Se x = 3200000 e y = 0,00002, então xy
vale:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)0,64 ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)6,4</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)64</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)640;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)6400.</label>
			<br />
			<br />
			
			<h2>4) O diâmetro de certa bactéria é 2 . 10-6
metros. Enfileirando-se x dessas bactérias, obtém-se o
comprimento de 1mm. O número x é igual a:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)  2000
;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> b) 5000.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> c)  10 000 .;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> d)  1000 ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> e) 500.</label>
			<br />
			<br />
			
			<h2>5)  O valor de (0,2)3 + (0,16)2 é:</h2>
			
			<label>
			<input type="radio" name="questao5" value="a" /> a) 0,0336</label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> b) 0,0332</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> c) 0,1056</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> d) 0,2568.</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> e) 0,6256  </label>
			<br />
			<br />
			
			<h2>6)Simplificando a expressão [29 : (22 . 2)3]-3, obtém-se:</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> a) a) 236;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> b) 2-30</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> c) 1;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> d) 2-6 ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> e) a.</label>
			<br />
			<br />
			
			<h2>7)  Dadas as expressões A = -a2 – 2a + 5 e B = b2 + 2b + 5:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> a) 11,70%</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> b) 27,40% </label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> c) 35%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> d) 83%</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> e) 85%.</label>
			<br />	
			<br />
		
			<h2>8) São lançadas 4 moedas distintas e não viciadas. Qual é
a probabilidade de resultar exatamente 2 caras e 2
coroas?</h2>
			
			<br>
			<label>
			<input type="radio" name="questao8" value="a" /> a) Se a = -2 e b = -2, então A = B;;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> b) Se a = 2 e b = 2, então A = B; ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> c) Se a = -2 e b = 2, então A = B 42%;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> d) Se a = -2 e b = 2, então A = B;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) Se a = -2 e b = -2, então A = B;</label>
			<br />
			<br />
	
			<h2>9) Se 53a = 64, o valor de 5-a é:</h2>
		
			<label>	
			<br>
			<input type="radio" name="questao9" value="a" /> a) –1/4 </label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> b)  1/40;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> c)  1/20</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> d) ¼;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> e) 1/8.</label>
			<br />
			<br />

			<h2>10)O valor de (0,2)3 + (0,16)2 é:</h2>
			
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> a) 0,0264;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> b) 0,0336</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> c) 0,1056;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> d) 0,2568</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> e) 0,6256  </label>
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