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
		  window.location.href='Reravargas.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de História</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de História sobre <font color=red>Era Vargas</h1></font> 
		</form>
		
		<form id="questoes" action="Peravargas.php" method = "POST">
			<br>
			<h2>1) O Estado de compromisso, expressão do reajuste nas relações internas das classes dominantes, corresponde, por outro lado, a uma nova forma do Estado, que se caracteriza pela maior centralização, o intervencionismo ampliado e não restrito apenas à área do café, o estabelecimento de uma certa racionalização no uso de algumas fontes fundamentais de riqueza pelo capitalismo internacional (...).
Boris Fausto. A revolução de 1930. Historiografia e história. São Paulo: Brasiliense, 1987, p. 109-110.
Segundo o texto, o Estado de compromisso correspondeu, no Brasil do período posterio : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)à retomada do comando político pela elite cafeicultora do sudeste brasileiro. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) ao primeiro momento de intervenção governamental na economia brasileira.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) à reorientação da política econômica, com maior presença do Estado na economia.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) ao esforço de eliminar os problemas sociais internos gerados pelo capitalismo internacional;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)à ampla democratização nas relações políticas, trabalhistas e sociais.</label>
			<br />
			<br />
			
			
			<h2>2) Em 1945 chega ao fim o Estado Novo implantado pelo presidente Getúlio Vargas. Entre as causas tivemos a(s): </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) Revolução de 1945 realizada pelos sindicatos e apoiado pelo Partido Trabalhista Brasileiro daquela época.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)Atuação do movimento estudantil, liderado pela UNE, que assumiu o poder apoiando o partido da União Democrática Nacional.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) Pressões norte-americanas obrigando Getúlio Vargas a extinguir o Estado Novo e tornar o país uma democracia.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Adesão de Getúlio ao Fascismo, propiciando que ele implante no Brasil um regime semelhante após 1945.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) Participação do Brasil na 2ª Guerra Mundial ao lado das democracias, criando uma situação interna contraditória, pois o país vivia, até aquele ano, uma ditadura. ></label>
			<br />
			<br />
			
			<h2>3)


Em 1954, quando o cerco se apertou ainda mais sobre Getúlio Vargas, o presidente agiu mais energicamente. Seu gesto teve consequências imediatas. A massa urbana saiu às ruas em todas as grandes cidades, atingindo os alvos mais expressivos de seu ódio, como jornais de oposição e a representação diplomática dos Estados Unidos no Rio de Janeiro.
Adaptado de FAUSTO, Boris. Historia Concisa do Brasil. Sao Paulo: EDUSP, 2002. p. 231.
Em uma aula para alunos do 4º ano do Ensino Fundamental, sobre a consolidação da democracia no Brasil, o professor aborda, como tema central, os anos finais do segundo governo Vargas. Nesse sentido, destaque os dois últimos gestos políticos desse governo:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)seu suicídio e a divulgação da carta-testamento;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)sua renúncia e a consolidação de um golpe militar</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)o afastamento do general Lott e o apoio a Eurico Dutra.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)o fim do Estado Novo e a promulgação das leis trabalhistas.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) o afastamento do general Lott e o apoio a Eurico Dutra</label>
			<br />
			<br />
			
			<h2>4)




Considere a frase abaixo. 
Muito teremos feito em breve tempo se conseguirmos libertar-nos da importação de artefatos de ferro, nacionalizando a indústria siderúrgica. (Getúlio Vargas, em 1931)
concretização das pretensões do autor da frase ocorreu, durante a Segunda Guerra Mundial, quando usou a importância do
Brasil no contexto geopolítico da América do Sul e:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) acertou com os Estados Unidos o apoio às forças aliadas em troca da construção da usina siderúrgica de Volta Redonda, no Rio de Janeiro. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) ampliou o raio de atuação do Estado e de suas formas de intervenção econômica nas áreas sul-americanas de interesse dos Estados Unidos. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)criou empresas privadas, que se revelaram fundamentais para a industrialização e a independência econômica do país, como as da Petrobras.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)manteve uma posição de neutralidade em relação aos Estados Unidos para conseguir financiamento externo para a siderurgia nacional.  .</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)enfraqueceu a participação do Estado na economia, para assegurar a industrialização no contexto internacional, caracterizado por regimes fortes. 
</label>
			<br />
			<br />
			
			<h2>5) 


Durante o governo ditatorial do presidente Getúlio Vargas entre 1937 e 1945, o governo brasileiro oficializou uma política de ocupação da região norte do país ao ver na Amazônia uma importância estratégica. A marcha para o oeste, como ficou conhecida a iniciativa do governo varguista, foi possível graças aos incentivos financeiros do estado brasileiro, visando à exploração econômica da região. 

Em relação à política varguista de ocupação dessa área do país, é correto destacar ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) a imediata definição do território dos indígenas sem que houvesse problemas nesse processo; ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) a ausência de preocupação oficial do governo com a preservação do bioma da região norte;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)a presença do capital externo como exclusivo investidor na exploração da região norte;	></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D)  a opção do governo varguista na criação da indústria de base na região norte;;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  a presença do capital privado nacional no desenvolvimento do transporte da região norte.></label>
			<br />
			<br />
			
			<h2>6)

“Os vitoriosos de 1930 compunham um quadro heterogêneo, tanto do ponto de vista social quanto político. Tinham-se unido contra um mesmo adversário, com perspectivas diversas: os velhos oligarcas, representantes típicos da classe dominante regional [...]”.
FAUSTO, Boris. História Concisa do Brasil. São Paulo: Editora da Universidade de São Paulo, 2002, p.182.
Na interpretação de Boris Fausto, É CORRETO afirmar que a Revolução de 1930  . </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)foi uma crise institucional, derivada dos problemas que o sistema federativo enfrentava com a crise do setor cafeeiro.;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)significou a ascensão da burguesia industrial em substituição à anacrônica e conservadora elite agroexportadora.</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) representava a etapa final dos episódios da Campanha Civilista e da Reação Republicana, significando, assim, um movimento de características marcadamente civis ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) representou uma troca da elite do poder sem grandes rupturas, ascendendo militares, técnicos diplomados, jovens políticos e, um pouco mais tarde, os industriais ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) foi uma crise institucional, derivada dos problemas que o sistema federativo enfrentava com a crise do setor cafeeiro.

</label>
			<br />
			<br />
			
			<h2>7)
Durante a década de 1930, “foi assim, com uma política de aproximações alternadas e simultâneas dos Estados Unidos e Alemanha [...] que o Brasil seguiu na sua busca por autonomia procurando tirar proveito da disputa entre os dois países”.
PINHEIRO, Letícia. Política Externa Brasileira (1889-2002). Rio de Janeiro: Jorge Zahar, 2004, p. 23-24
O elemento que definiu a alteração desse posicionamento da política externa brasileira foi a : </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)criação da “Política da Boa Vizinhança” pelo governo americano.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)criação da Organização das Nações Unidas.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C)conferência de Bretton Woods.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) entrada americana na Segunda Guerra após o ataque a Pear Harbor.
;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)criação da “Política da Boa Vizinhança” pelo governo americano
</label>
			<br />	
			<br />
		
			<h2>8) 





“Na década de 1930, houve a tentativa de ‘abrasileirar’ o Natal, propondo substituir o Papai Noel pela figura do Vovô Índio, um escravo filho de índio com africano que foi criado por uma família branca. O índio esculpia bonecos com os quais ilustrava suas histórias e, no Dia de Reis, dava-os de presente aos seus ouvintes.”
(Disponível em:<http://planorweb.bn.br/BoletinsPLANOR/planor Boletim 14.pdf> . Acesso em: 30 out. 2015.)
Essa tentativa pode ser atribuída aos (à): </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)comunistas do PCB.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)  tenentes. ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) integralistas. ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)  Igreja Católica.</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)Capitão.</label>
			<br />
			<br />
	
			<h2>9) 

A expansão da Justiça do Trabalho no Brasil, após os anos 1940 : </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) ocorreu rapidamente, irradiando em poucos anos das grandes capitais para as cidades menores e depois para todos os estados da federação, em decorrência da grande demanda represada e do interesse político em atender às causas trabalhistas. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) foi maior proporcionalmente no meio rural, em regiões que apresentavam os maiores índices de desrespeito à CLT e casos de semiescravidão, chegando a abarcar todas as capitais durante o período “desenvolvimentista” nos anos 1970. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) deu-se lentamente, tendo conhecido um período de quase estagnação durante o regime militar e alcançado parcela significativa dos trabalhadores rurais apenas a partir dos anos 1980. .;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)  encontrou alguns obstáculos provenientes da cultura política arcaica e do ineditismo desse tipo de instituição no Brasil, mas partiu de uma estrutura material ampla, de âmbito federal, disseminada por todas as cidades grandes e médias do país. 
 e surpreendeu em relação às expectativas iniciais quando da sua criação, atingindo o número de milhares de Varas nas duas primeiras décadas de existência, quando o número de trabalhadores urbanos encontrava-se em franca expansão. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) MPLA (Movimento Popular para a Libertação de Angola) e a FRELIMO (Frente de Libertação de Moçambique)

.</label>
			<br />
			<br />

			<h2>10)




Entre o conjunto de leis criadas no período a que o texto se refere, destaca-se a Constituição de 1937, que nos seus dispositivos trabalhistas, inspirados na “Carta del Lavoro” italiana: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) dava somente ao sindicato reconhecido pelo Estado o direito de representar a categoria, proibindo a greve e o lock-out. .;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)ampliava a participação do trabalhador pelo sistema de representação classista e pela adoção do voto secreto nas eleições. </label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C)garantia direitos aos trabalhadores como: jornada de oito horas, regulamentação do trabalho feminino e do trabalho infantil.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D)  definiu as regras a partir das quais o mercado de trabalho e as relações trabalhistas poderiam livremente se desenvolver. ;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)garantiu aos trabalhadores uma certa estabilidade no emprego e no salário por meio do crescimento industrial do país. 
</label>
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