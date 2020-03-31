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
		  window.location.href='RSolidosGeometricos.php';</script>";
          die();

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
			<h1>Prova de matemática sobre <font color=red>Sólidos Geométricos</h1></font>
		</form>
		
		<form id="questoes" action="PSolidosGeometricos.php" method = "POST">
			<br>
			<h2>1) Das alternativas a seguir sobre os poliedros, assinale aquela que for correta: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) Um poliedro é um sólido geométrico limitado por qualquer tipo de superfície;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  Os elementos dos poliedros são os mesmos elementos dos polígonos, uma vez que ambos possuem vértices;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Prismas são poliedros que possuem duas bases poligonais e todas as faces laterais com formato de paralelogramo;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) Prismas e pirâmides são os únicos exemplos de poliedros existentes;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) As esferas são poliedros.</label>
			<br />
			<br />
			
			
			<h2>2) João propôs um desafio a Bruno, seu colega de classe: ele iria descrever um deslocamento pela pirâmide a seguir e Bruno deveria desenhar a projeção desse deslocamento no plano da base da pirâmide.</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG2.jpg" height="300px" width="600px">
			<br>
			<h2> O deslocamento descrito por João foi: mova-se pela pirâmide, sempre em linha reta, do ponto A ao ponto E, a seguir, do ponto E ao ponto M e, depois, de M a C.
				 O desenho que Bruno deve fazer é:</h2>
			<label>
			<input type="radio" name="questao2" value="a" /> A) <img src="img/SOLIDOSGEOMETRICOS/alternativaA.jpg" height="100px" width="100px"></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) <img src="img/SOLIDOSGEOMETRICOS/alternativaB.jpg" height="100px" width="100px"></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) <img src="img/SOLIDOSGEOMETRICOS/alternativaC.jpg" height="100px" width="100px"></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) <img src="img/SOLIDOSGEOMETRICOS/alternativaD.jpg" height="100px" width="100px"></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) <img src="img/SOLIDOSGEOMETRICOS/alternativaE.jpg" height="100px" width="100px"></label>
			<br />
			<br />
			
			<h2>3) A planificação de um sólido geométrico é uma figura geométrica bidimensional formada pela superfície de objetos tridimensionais. Assim, a planificação de uma pirâmide de base pentagonal será formada por:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Dois pentágonos e cinco retângulos congruentes;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) Dois pentágonos e cinco retângulos;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Um pentágono e cinco triângulos congruentes;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Um pentágono e cinco triângulos;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Um pentágono e cinco triângulos equiláteros.</label>
			<br />
			<br />
			
			<h2>4) Qual a área da planificação de um cone reto cuja geratriz mede 100 cm e cujo raio mede 25 cm?</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) 9812,5 cm2;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 10812,5 cm2;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) 11812,5 cm2;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) 12812,5 cm2;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) 13812,5 cm2.</label>
			<br />
			<br />
			
			<h2>5) Qual das imagens abaixo é a melhor planificação do prisma oblíquo?</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG5.jpg" height="300px" width="600px">
			<br><br>
			<label>
			<input type="radio" name="questao5" value="a" /> A) <img src="img/SOLIDOSGEOMETRICOS/5altA.jpg" height="100px" width="100px"></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) <img src="img/SOLIDOSGEOMETRICOS/5altB.jpg" height="100px" width="100px"></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) <img src="img/SOLIDOSGEOMETRICOS/5altC.jpg" height="100px" width="100px"></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) <img src="img/SOLIDOSGEOMETRICOS/5altD.jpg" height="100px" width="100px"></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  <img src="img/SOLIDOSGEOMETRICOS/5altE.jpg" height="100px" width="100px"></label>
			<br />
			<br />
			
			<h2>6) A planificação de um sólido geométrico é uma figura geométrica plana obtida a partir da superfície do sólido em questão. Assinale, das alternativas a seguir, aquela que contém as figuras bidimensionais obtidas da planificação do cone reto.</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) Um triângulo e uma circunferência;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) Um triângulo e um círculo;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) Um setor circular e uma circunferência;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) Um setor circular e um círculo;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Um setor circular e um triângulo.</label>
			<br />
			<br />
			
			<h2>7) Observe o sólido geométrico a seguir e assinale a alternativa correta:</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG7.jpg" height="300px" width="600px">
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A) É um prisma, pois possui duas bases e faces laterais planas;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) É uma pirâmide, pois afunila em sua parte superior;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) É um cilindro, pois possui uma parte arredondada;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) É um corpo redondo, pois possui uma parte arredondada;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) Nenhuma das alternativas anteriores está correta.</label>
			<br />	
			<br />
		
			<h2>8) Maria quer inovar em sua loja de embalagens e decidiu vender caixas com diferentes formatos. Nas imagens apresentadas estão as planificações dessas caixas.</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG8.jpg" height="300px" width="600px">
			<br>
			<label>
			<input type="radio" name="questao8" value="a" /> A) Cilindro, prisma de base pentagonal e pirâmide;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) Cone, prisma de base pentagonal e pirâmide;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) Cone, tronco de pirâmide e pirâmide;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) Cilindro, tronco de pirâmide e prisma;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) Cilindro, prisma e tronco de cone.</label>
			<br />
			<br />
	
			<h2>9) Um porta-lápis de madeira foi construído no formato cúbico, seguindo o modelo ilustrado a seguir. O cubo de dentro é vazio. A aresta do cubo maior mede 12 cm e a do cubo menor, que é interno, mede 8 cm.</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG9.jpg" height="300px" width="600px">
			<label>	
			<br>
			<input type="radio" name="questao9" value="a" /> A) 12 cm3;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 64 cm3;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 96 cm3;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 1 216 cm3;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 1 728 cm3.</label>
			<br />
			<br />

			<h2>10) Um arquiteto está fazendo um projeto de iluminação de ambiente e necessita saber a altura que deverá instalar a luminária ilustrada na figura.</h2>
			<br>
			<img src="img/SOLIDOSGEOMETRICOS/PSG10.jpg" height="300px" width="600px">
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) 3 m;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) 4 m.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 5 m;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 9 m;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) 16 m.</label>
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