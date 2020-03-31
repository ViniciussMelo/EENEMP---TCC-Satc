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
		  window.location.href='Rmudancas.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Geografia</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Geografia sobre <font color=red>Mudanças climáticas</h1></font>
		</form>
		
		<form id="questoes" action="Pmudancas.php" method = "POST">
			<br>
			<h2>1) 	O Brasil, dada a sua grande extensão territorial e a predominância de climas úmidos, tem uma extensa rede hidrográfica. Todos os rios, com exceção do Amazonas, possuem regime pluvial e todos são exorreicos, sendo a maioria perene e alguns deles temporários.
SENE, E,; MOREIRA, J. Geografia Geral e do Brasil. São Paulo: Scipione, 2010, p.459. Adaptado.
Em função do regime pluvial, a concentração de rios temporários encontra-se na região: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)Centro-Oeste.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) Sul.   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Nordeste. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) Norte  
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)Sudeste.</label>
			<br />
			<br />
			
			
			<h2>2) A região Sul do Brasil apresenta um quadro natural marcado principalmente pelas características climáticas, sendo a região que possui as mais baixas temperaturas do país. Sobre os aspectos climáticos e suas relações com a natureza dessa região, é INCORRETO afirmar que: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)  Predomina nessa área o clima subtropical.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)A maior parte de suas terras fica localizada na Zona Temperado Sul.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) É responsável pelas maiores amplitudes térmicas registradas no país.	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)A influência do clima afeta os índices pluviométricos, considerados os mais baixos do Brasil.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) A Mata das Araucárias se refere a formações vegetais adaptadas ao clima regional e por isso caracterizam a paisagem dessa região.></label>
			<br />
			<br />
			
			<h2>3)

Para análise das paisagens naturais brasileiras o geógrafo Ab’Saber (1967) propôs uma classificação em domínios morfoclimáticos.

Marque a alternativa que apresenta CORRETAMENTE os aspectos relacionados à concepção da leitura das paisagens por Ab’Saber:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)Expressa a relação intrínseca entre as condições fitogeográficas, flutuações climáticas e as formas do modelado da superfície terrestre. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)As delimitações geográficas dos domínios morfoclimáticos brasileiros são precisas, a partir das condições específicas de cada um, sem áreas de transição ou interconexão entre eles. ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)Os domínios morfoclimáticos brasileiros são propostos considerando os aspectos geológicos e geomorfológicos das bacias hidrográficas. ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Utiliza como critério para classificação o endemismo como o que ocorre no Cerrado e na Caatinga, domínios morfoclimáticos brasileiros exclusivos da região Nordeste. ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)  Considera os aspectos inerentes à classificação dos macrocompartimentos do relevo brasileiro como planícies, planaltos e depressões .</label>
			<br />
			<br />
			
			<h2>4)Sobre o efeito estufa, verifica-se que:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) é gerado pelos gases que formam a atmosfera e que não conseguem reter o calor que vem do solo ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B)  é um fenômeno natural por meio do qual a Terra procura conservar constante a sua temperatura. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)torna a Terra um planeta com condições muito mais favoráveis à vida, quando não está presente.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)é um efeito provocado pelas atitudes inadequadas do homem.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)provoca o aquecimento ou o resfriamento do planeta, de acordo com a estação local, sem alterações climáticas sensíveis</label>
			<br />
			<br />
			
			<h2>5) 

Assinale a alternativa que indica o principal gás do efeito estufa e as respectivas principais origens ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) CO6 (polióxido de carbono) e suas principais origens são a queima dos chamados biocombustíveis. ;  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) H2SO4 (acido sulfúrico) que além de provocar o aquecimento global, também dá origem à chuva ácida></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)CO2 (dióxido de carbono) e suas principais origens são a queima de combustíveis fósseis (derivados do petróleo), as queimadas e a redução das florestas.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D)CO2 (dióxido de carbono) e sua principal origem é a quebra das moléculas O3 (Ozônio) pelos raios infravermelhos indos do Sol.
;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) CO2 (dióxido de carbono) e suas principais origens são a queima de combustíveis fósseis (derivados do petróleo), as queimadas e a redução das florestas..></label>
			<br />
			<br />
			
			<h2>6)

Pesquisas recentes mostram que a alta taxa de Imagem 037.jpg atmosférico está afetando também os oceanos. Depositado na superfície da água, tal gás acaba misturando-se a ela devido ao movimento dos copépodes – pequenos animais que constituem o plâncton. Tal fato está fazendo com que o pH da água torne-se mais ácido, o que altera a vida de diversas espécies marinhas, podendo inclusive levá-las à extinção. 
Analise as alternativas abaixo e marque a opção cuja ação leva ao acontecimento do fato relatado no texto. </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)Ampliação da área de terras cultivadas.;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)Utilização crescente de combustíveis fósseis.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) Crescimento das espécies autotróficas nos oceanos. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D)Maior extração de alimentos dos oceanos.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E)Extinção de muitas espécies marinhas aeróbias.

</label>
			<br />
			<br />
			
			<h2>7) O El Niño, denominado ENOS (El Niño – Oscilação Sul), é um fenômeno natural que ocorre em intervalos cíclicos de 3 a 5 anos na região tropical do oceano Pacífico e envolve processos de interação entre a atmosfera e a hidrosfera, afetando a atuação do clima e modificando a paisagem de diferentes lugares do planeta.
Sobre as condições atmosférico-oceânicas em períodos de El Niño, julgue os itens como (V) VERDADEIROS ou (F) FALSOS:

( ) Os ventos alíseos abrandam sua intensidade, diminuindo as chuvas na Austrália e Indonésia.
( ) Com o aquecimento das águas do Pacífico Central, a célula de circulação do ar se desloca para leste.
( ) A termoclina, zona de transição entre as águas quentes e as mais frias, torna-se menos rasa e, sem os ventos alíseos, diminui a ressurgência, fenômeno que afeta diretamente a atividade pesqueira.

A sequência CORRETA é:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)F, V, V;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) F, V, F.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C)V, F, V.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)FV, V, V;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)F, F, F.</label>
			<br />	
			<br />
		
			<h2>8) 



As mudanças climáticas estão ocorrendo e já é possível notar algumas modificações que provavelmente relacionam-se com a ação do homem. Assim sendo, são necessárias ações urgentes para que nosso impacto no meio ambiente seja reduzido. Analise as alternativas abaixo e marque aquela que não indica uma forma de deter o avanço das mudanças climáticas. </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)Realizar técnicas na agricultura que evitam a emissão de carbono.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)Criar programas de reflorestamento, principalmente em áreas urbanas;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) Aumentar o uso de combustíveis fósseis;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) Realizar frequentemente a regulagem dos carros;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)Realizar consumo consciente.</label>
			<br />
			<br />
	
			<h2>9) 
Muitas pessoas acreditam que as mudanças climáticas afetam exclusivamente a temperatura do planeta, que se torna mais quente. Entretanto, muitas vezes, essas pessoas esquecem que, ao aumentar a temperatura, uma série de organismos e ecossistemas são gravemente afetados. Observe as alternativas abaixo e marque a única que não é uma consequência da alteração da temperatura do planeta. </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) Diminuição da biodiversidade.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) Alterações do regime de chuvas;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) Secas prolongadas;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)Aumento da frequência de terremotos;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) Aumento de doenças respiratórias. 
.</label>
			<br />
			<br />

			<h2>10)
Uma das medidas internacionais de combate ao aquecimento global mais divulgadas pela imprensa em todo o mundo foi o Protocolo de Kyoto, que teve como objetivo principal: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) Proliferar ações de aumento da vegetação existente no planeta.</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)Diminuir as emissões de gases poluentes na atmosfera..</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) Pressionar os países desenvolvidos a contribuir menos com a elevação das temperaturas.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D)  Conservar as algas marinhas, responsáveis pela disponibilidade do oxigênio na atmosfera;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) Proliferar ações de aumento da vegetação existente no planeta.</label>
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