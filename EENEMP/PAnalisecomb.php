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
		  window.location.href='RAnalisecomb.php';</script>";
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
			<h1>Prova de matemática sobre <font color=red>Analise combinatória</h1></font>
		</form>
		
		<form id="questoes" action="Panalisecomb.php" method = "POST">
			<br>
			<h2>1) Considere todas as trinta e duas seqüências, com cinco elementos cada uma, que podem ser formadas com os algarismos 0 e 1. Quantas dessas seqüências possuem pelo menos três zeros em posições consecutivas? </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 3;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  5;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 8;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)12;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) 16.</label>
			<br />
			<br />
			
			
			<h2>2) De uma  urna contendo 10 bolas coloridas, sendo 4 brancas, 3 pretas, 2 vermelhas e 1 verde, retiram-se, de uma vez, 4 bolas. Quantos são os casos possíveis em que aparecem exatamente uma bola de cada cor?</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) 120</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) 72</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) 24</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) 18</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) 12</label>
			<br />
			<br />
			
			<h2>3)Um professor de Matemática comprou dois livros para premiar dois alunos de uma classe de 42 alunos. Como são dois livros diferentes, de quantos modos distintos pode ocorrer a premiação?</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) 1722;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) 861;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) 1764;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) 3444;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) 242.</label>
			<br />
			<br />
			
			<h2>4) O número de equipes de trabalho que poderão ser formadas num grupo de dez indivíduos, devendo cada equipe ser constituída por um coordenador, um secretário e um digitador, é</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)720;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 600;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) 480;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) 360;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) 240.</label>
			<br />
			<br />
			
			<h2>5) Um juiz dispõe de 10 pessoas, das quais somente 4 são advogados, para formar um único júri com 7 jurados. O número de formas de compor o júri, com pelo menos 1 advogado, é:</h2>
			
			<label>
			<input type="radio" name="questao5" value="a" /> A) 120</label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 108</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 160</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 140</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) 128</label>
			<br />
			<br />
			
			<h2>6) Do cardápio de uma festa constavam dez diferentes tipos de salgadinhos dos quais só quatro seriam servidos quentes. O garçom encarregado de arrumar a travessa e servi-la foi instruído para que a mesma contivesse sempre só 2 diferentes tipos de salgadinhos frios, e só 2 diferentes dos quentes. De quantos modos diferentes, teve o garçom a liberdade de selecionar os salgadinhos para compor a travessa, respeitando as instruções?</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) 90;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) 21;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) 240;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) 38;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) 80.</label>
			<br />
			<br />
			
			<h2>7) O número de soluções inteiras, maiores ou iguais a zero, da equação x + y + z + w = 5 é:</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A)36%;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 53%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 52%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) 56%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) 54%.</label>
			<br />	
			<br />
		
			<h2>8)Dentre os anagramas distintos que podemos formar com n letras, das quais duas são iguais, 120 apresentam estas duas letras iguais juntas. O valor de n é</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) 5;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) 6;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) 4;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) 122;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) 7.</label>
			<br />
			<br />
	
			<h2>9) UA senha de acesso a um jogo de computador consiste em quatro caracteres alfabéticos ou numéricos, sendo o primeiro necessariamente alfabético. O número de senhas possíveis será então</h2>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) 364;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 10.36³;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 264;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 26.36³;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 10.264.</label>
			<br />
			<br />

			<h2>10) Quantas motos podem ser licenciadas se cada placa tiver 2 vogais (podendo haver vogais repetidas) e 3 algarismos distintos?</h2>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A) 32000;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) 18000.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 122000</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 120;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) 25000.</label>
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