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
		  window.location.href='Restequiometria.php';</script>";
          die();

	}

?>

<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Quimica</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Quimica sobre <font color=red>Estequiometria</h1></font>
		</form>
		
		<form id="questoes" action="Pestequiometria.php" method = "POST">
			<br>
			<h2>1) (PUC-MG) Fosgênio, COCl2, é um gás venenoso. Quando inalado, reage com a água nos 

pulmões para produzir ácido clorídrico (HCl), que causa graves danos pulmonares, 

levando, finalmente, à morte: por causa disso, já foi até usado como gás de guerra. A 

equação química dessa reação é:


COCl2 + H2O → CO2 + 2 HCl

Se uma pessoa inalar 198 mg de fosgênio, a massa de ácido clorídrico, em gramas, que 

se forma nos pulmões, é igual a:</h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 1,09 . 10-1. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  1,46 . 10-1. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C)  2,92 . 10-1.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) 3,65 . 10-2.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)7,30 . 10-2.</label>
			<br />
			<br />
			
			
			<h2>2)CH4(g) + 2 O2(g) → CO2(g) + 2 H2O(g)

O volume de CO2, medido a 27ºC e 1atm., produzido na combustão de 960,0 g de metano, 

é:</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) 60,0 L;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) 1620,0 L;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)  1344,0 L;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) 1476,0 L.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) 960,0 L. ></label>
			<br />
			<br />
			
			<h2>3- Qual é a quantidade de matéria de gás oxigênio necessária para fornecer 17,5 mol de 

água, H2O(v), na queima completa do acetileno, C2H2(g)?</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) 43,75 mol ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) 2 mol;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) 17,5 mol;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)  35 mol;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)27,2 mol.</label>
			<br />
			<br />
			
			<h2>4) Quantas moléculas de água, H2O(v), são obtidas na queima completa do acetileno C2H2

(g), ao serem consumidas 3,0 . 1024 moléculas de gás oxigênio?</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) 120 . 1024
;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 0,12 . 1023;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) 12 . 1024;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)1,2 . 1023;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)  1,2 . 1024.</label>
			<br />
			<br />
			
			<h2>5- Urânio - 238, espontaneamente emite partículas ‘; o
fragmento restante, para cada partícula emitida, tem
número atômico 90. Sendo assim, o número de massa do
fragmento produzido é igual a.</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A) 237;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 236;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 235;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 234 ;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) 233.></label>
			<br />
			<br />
			
			<h2>6-PUC-PR Em 100 gramas de alumínio, quantos átomos
deste elemento estão presentes?
Dados: M(Al) = 27 g/mol
1 mol = 6,02 x 1023 átomos.</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)   3,7 x 1023;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) 27 x 1022;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) 3,7 x 1022;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) 2,22 x 1024;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) 27,31 x 1023.</label>
			<br />
			<br />
			
			<h2>7) Qual a massa de enxofre, em quilogramas,
necessária para a obtenção de
2.000 kg de ácido sulfúrico, supondo um rendimento de
100%?</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A)  100 kg;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 128 kg;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 200 kg;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)320 kg;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)  640 kg.</label>
			<br />	
			<br />
		
			<h2>8) Isótopos radiativos de iodo são utilizados
no diagnóstico e tratamento de problemas da tireóide, e
são, em geral, ministrados na forma de sais de iodeto. O
número de prótons, nêutrons e elétrons no isótopo 131 do
iodeto modelo …ƒI­¢¤¢ são, respectivamente::</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) 53, 78 e 52;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)  53, 78 e 54;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) 53, 131 e 53;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) 131, 53 e 131;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) 52, 78 e 53.</label>
			<br />
			<br />
	
			<h2>9) O estanho é usado na composição de
ligas metálicas como bronze (Sn-Cu) e solda metálica (SnPb).
O estanho metálico pode ser obtido pela reação do
minério cassiterita (SnO‚) com carbono, produzindo
também monóxido de carbono. Supondo que o minério seja
puro e o rendimento da reação seja de 100%, a massa, em
quilogramas, de estanho produzida a partir de 453kg de
cassiterita com 96kg de carbono é</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A)  549.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 476.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 357;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 265.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 119.</label>
			<br />
			<br />

			<h2>10-O alumínio metálico é obtido pela
redução eletrolítica da bauxita, na presença da criolita que
age como fundente, abaixando o ponto de fusão da bauxita
de 2600°C para cerca de 1000°C. Considerando que a
bauxita é composta exclusivamente por óxido de alumínio,
AØ‚Oƒ, a massa em toneladas de alumínio metálico obtida a
partir de 51,0 toneladas de bauxita é de</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A)  23,5.;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)25,5;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 27,0.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 32,0.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)  39,3.</label>
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