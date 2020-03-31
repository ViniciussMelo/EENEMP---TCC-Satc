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
		  window.location.href='Rmecanica.php';</script>";
          die();

	}

?>

<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de física</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de física sobre <font color=red>Mecânica</h1></font>
		</form>
		
		<form id="questoes" action="PMecanica.php" method = "POST">
			<br>
			<h2>1) Imagine que um paraquedista saltará de uma aeronave que se movimenta em uma trajetória retilínea, horizontal e para a direita. Ao saltar e deixar o movimento acontecer naturalmente, qual será a trajetória do paraquedista até chegar ao chão? </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) A trajetória do paraquedista será retilínea, vertical e para baixo;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) A trajetória do paraquedista será uma reta, na diagonal, para baixo e para a esquerda;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) A trajetória do paraquedista será uma reta, na diagonal, para baixo e para a direita;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) A trajetória do paraquedista será uma curva para baixo e para a esquerda;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) A trajetória do paraquedista será uma curva para baixo e para a direita.</label>
			<br />
			<br />
			
			
			<h2>2) A respeito da ideia de referencial, marque a alternativa correta: </h2>
			<br>
			<label>
			<input type="radio" name="questao2" value="a" /> A) O Sol, por ter uma massa correspondente a 98% de toda a massa do sistema solar, deve ser sempre considerado o referencial para quaisquer fenômenos;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) Os fenômenos devem sempre ser analisados a partir de um referencial parado;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) Referencial é o corpo em movimento retilíneo uniforme a partir do qual se analisam os movimentos;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) Referencial é o corpo a partir do qual os fenômenos são analisados;</label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) O movimento e o repouso são absolutos e não dependem de um referencial.</label>
			<br />
			<br />
			
			<h2>3) Um professor de Física, durante uma de suas aulas, perguntou aos alunos: “Por que podemos dizer que estamos todos em movimento mesmo que sentados em nossas carteiras?”</h2>			
			<br>
			<h2> Ao dar a resposta correta, um dos alunos disse:</h2>
			<label>
			<input type="radio" name="questao3" value="a" /> A) Porque o Sol sempre é o referencial adotado, uma vez que é o corpo mais massivo do sistema solar; então, estamos executando o movimento de translação com a Terra;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) Porque se adotarmos um referencial no espaço, como a Lua, a Terra estará em movimento e nós nos movimentamos com o planeta;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Porque a Terra executa um movimento de translação ao redor de seu próprio eixo;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Porque nada pode permanecer totalmente parado;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Porque a terra gira em torno dela mesma.</label>
			<br />
			<br />
			
			<h2>4) Em um mesmo plano vertical, perpendicular à rua, temos os segmentos de reta AB e PQ, paralelos entre si. Um ônibus se desloca com velocidade constante de módulo v1, em relação à rua, ao longo de AB, no sentido de A para B, enquanto um passageiro se desloca no interior do ônibus, com velocidade constante de módulo v2, em relação ao veículo, ao longo de PQ no sentido de P para Q.</h2>
			
			<h2>Sendo v1 > v2, o módulo da velocidade do passageiro em relação ao ponto B da rua é:</h2>
			<br>
			<label>
			<input type="radio" name="questao4" value="a" /> A) v1 + v2;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) v1 - v2;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) v2 + v1;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) v1;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) v2.</label>
			<br />
			<br />
			
			<h2>5) Em 1984, o navegador Amyr Klink atravessou o Oceano Atlântico em um barco a remo, percorrendo a distância de, aproximadamente, 7000 km em 100 dias. Nessa tarefa, sua velocidade média foi, em km/h, igual a:</h2>
			<br>
			<label>
			<input type="radio" name="questao5" value="a" /> A) 1,4</label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 2,9</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 6,0</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 7,0</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) 70</label>
			<br />
			<br />
			
			<h2>6) Um motorista deseja fazer uma viagem de 230 km em 2,5 horas. Se na primeira hora ele viajar com velocidade média de 80 km/h, a velocidade média no restante do percurso deve ser de:</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) 120 km/h;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) 110 km/h;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) 100 km/h;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) 90 km/h;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) 85 km/h.</label>
			<br />
			<br />
			
			<h2>7) Uma composição ferroviária com 1 locomotiva e 14 vagões desloca-se à velocidade constante de 10 m/s. Tanto a locomotiva quanto cada vagão medem 12 m. Então, quanto tempo ela demorará para atravessar um viaduto com 200 m de comprimento?</h2>
			<br>
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A) 14 segundos;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 16 segundos;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 19 segundos;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) 38 segundos;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) Nenhuma das alternativas anteriores está correta.</label>
			<br />	
			<br />
		
			<h2>8) Qual será a distância total percorrida por um automóvel que parte de um hotel, no km 78 de uma rodovia, leva os hóspedes até uma fazenda de gado, no km 127 dela, e depois retorna ao local de saída?</h2>
			<br>
			<label>
			<input type="radio" name="questao8" value="a" /> A) 49 km;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) 80 km;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) 98 Km;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) 100 km;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) 90 km.</label>
			<br />
			<br />
	
			<h2>9) A nave espacial New Horizons foi lançada pela agência espacial NASA para estudar o planeta anão Plutão em janeiro de 2006. Em julho de 2015, a nave chegou muito próximo a Plutão e conseguiu enviar imagens de sua superfície. A distância estimada entre a Terra e a nave, quando ela estava bem próxima a Plutão, era de 32 unidades astronômicas (1 unidade astronômica = 150 milhões de quilômetros). Se a velocidade da luz é de 300 mil quilômetros por segundo, a imagem recebida pelos observatórios terrestres levou, da New Horizons até a Terra, aproximadamente:</h2>
			<br>
			<label>	
			<br>
			<input type="radio" name="questao9" value="a" /> A) 0,1 microssegundo;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 1 hora;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 4 horas e meia;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 2 dias;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) zero segundos.</label>
			<br />
			<br />

			<h2>10) Um móvel em uma rodovia sai da posição 18 km e anda de acordo com o sentido positivo da trajetória com velocidade constante de 30 km/h. Outro móvel sai da posição 2 km e anda no sentido positivo da trajetória com velocidade constante de 50 km/h. Determine o ponto onde os dois móveis se encontrarão.</h2>
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) 30 km;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) 38 km.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 40 km';</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 42 km;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) 50 km.</label>
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