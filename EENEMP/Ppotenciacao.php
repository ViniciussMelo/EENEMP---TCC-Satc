<?php
	session_start();
	
	if (!isset($_SESSION["logado"])) {
		
			if (!isset($_SESSION["logadoProf"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
	}
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
	
	$_SESSION["questao1"] = $questao1;
	$_SESSION["questao2"] = $questao2;
	$_SESSION["questao3"] = $questao3;
	$_SESSION["questao4"] = $questao4;
	$_SESSION["questao5"] = $questao5;
	$_SESSION["questao6"] = $questao6;
	$_SESSION["questao7"] = $questao7;
	$_SESSION["questao8"] = $questao8;
	$_SESSION["questao9"] = $questao9;
	$_SESSION["questao10"] = $questao10;

	 echo"<script language='javascript' type='text/javascript'>
  		  alert('Prova enviada com sucesso!!');
		  window.location.href='Rpotenciacao.php';</script>";
          die();

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
		
		<form id="questoes" action="Ppotenciacao.php" method = "POST">
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