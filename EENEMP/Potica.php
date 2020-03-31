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
		  window.location.href='Rotica.php';</script>";
          die();

	}

?>

<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Física</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Física sobre <font color=red>óptica</h1></font>
		</form>
		
		<form id="questoes" action="Potica.php" method = "POST">
			<br>
			<h2>1)Entre as alternativas a seguir, escolha aquela que contém apenas fontes primárias de luz:</h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)Fósforo, Sol, Lua;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) Lua, Júpiter, Sol;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Vela acesa, Sol, Lua;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) Estrelas, Fósforo aceso, Sol;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)Estrelas, pilha de lanterna e Sol..</label>
			<br />
			<br />
			
			
			<h2>2- 

Indique a alternativa que explica de forma correta a diferença entre as fontes de luz fluorecentes e fosforescentes.</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) As fluorecentes emitem luz a partir da excitação do flúor em seu interior, e as fosforescentes funcionam pela excitação do fósforo.
;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)As fluorecentes emitem luz durante a ação de um agente excitador, e as fosforescentes emitem radiações ultravioleta.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) As fluorecentes emitem luz durante a ação de um agente excitador, e as fosforescente emitem luz mesmo após o fim da ação do excitador.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Lâmpadas fluorecentes funcionam a partir da excitação de gases como o argônio, e materiais fosforescentes funcionam por meio da excitação do fósforo.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) Os termos fluorecentes e fosforescentes são sinônimos. ></label>
			<br />
			<br />
			
			<h2>3- As afirmações a seguir tratam dos conceitos básicos de Óptica Geométrica. Indique a questão incorreta:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Raios de luz são setas orientadas que representam a luz e são classificados como paralelos, convergentes e divergentes.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)A Óptica Geométrica estuda a natureza física da luz;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Fontes secundárias de luz são aquelas que não produzem luz própria. A Lua é um exemplo de fonte secundária;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)Quando um feixe luminoso muda de meio de propagação, ocorre o fenômeno óptico da refração;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)A Óptica Geométrica estuda os fenômenos com base em experimentos e não analisa a natureza física da luz, mas a interpreta como setas orientadas denominadas de raios de luz.</label>
			<br />
			<br />
			
			<h2>4) Uma fonte secundária de luz que se apresenta na cor azul possui tal cor porque:? </h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)refrata a luz incidente. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) reflete a luz azul.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)difrata a luz azul.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)absorve a luz azul.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) emite luz azul. .</label>
			<br />
			<br />
			
			<h2>5-
 

Marque a alternativa correta a respeito dos fenômenos da reflexão, refração e absorção da luz.?</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A) Um único raio de luz incidente não pode sofrer os três fenômenos ópticos ao mesmo tempo. ;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) As leis da reflexão se aplicam tanto à reflexão regular quanto à reflexão difusa.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) As leis da refração só podem ser aplicadas no caso da refração difusa. ;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) A reflexão de um espelho plano é difusa.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) Todas as alternativas anteriores estão incorretas..></label>
			<br />
			<br />
			
			<h2>6-“Quando dois ou mais raios de luz vindos de fontes diferentes se cruzam, seguem suas trajetórias de forma independente, como se os outros não existissem.” Este texto caracteriza:</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) O princípio da reversibilidade dos raios de luminosos;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)O princípio da propagação retilínea da luz;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)A refração da luz;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) fusíveis — caixa de força residencial.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E)A polarização da luz.</label>
			<br />
			<br />
			
			<h2>7) 

Dos objetos citados a seguir, assinale aquele que seria visível em uma sala perfeitamente escura:</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A) um espelho;    </label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) qualquer superfície clara;      </label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) um fio aquecido ao rubro;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)uma lâmpada desligada;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)um gato preto.</label>
			<br />	
			<br />
		
			<h2>8) 
O menor tempo possível entre um eclipse do Sol e um eclipse da Lua é de aproximadamente:</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) 12 horas;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) 24 horas ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)1 semana;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) 2 semanas  ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) 1 mês.</label>
			<br />
			<br />
	
			<h2>9)  Admita que o Sol subitamente “morresse”, ou seja, sua luz deixasse de ser emitida. Passadas 24h, um eventual sobrevivente, olhando para o céu sem nuvens, veria:</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) a Lua e as estrelas;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) somente a Lua    ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)somente estrelas;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)uma completa escuridão ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) somente os planetas do sistema solar.</label>
			<br />
			<br />

			<h2>10-A formação de sombra evidencia que:</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A) a luz se propaga em linha reta     ;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) a velocidade da luz não depende do referencial;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C)  a luz sofre refração;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) a luz é necessariamente fenômeno de natureza corpuscular ;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)  a temperatura do obstáculo influi na luz que o atravessa.</label>
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