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
		  window.location.href='Rsegunda.php';</script>";
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
			<h1>Prova de História sobre <font color=red>2 ° guerra mundial</h1></font> 
		</form>
		
		<form id="questoes" action="Psegunda.php" method = "POST">
			<br>
			<h2>1) No ano de 1939, em meio à atmosfera de tensão política que desencadeou a sucessão de conflitos da Segunda Guerra Mundial, um acordo de não agressão foi firmado entre a Alemanha e a União Soviética, o Pacto Germano-Soviético. Esse pacto estabelecia que, se acaso a Alemanha entrasse em conflito com a Inglaterra ou a França em razão de uma eventual investida da Alemanha contra a Polônia, a URSS, por sua vez, ficaria afastada, sem se manifestar militarmente. Tal pacto também pode ser chamado de: : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)Tratado de Moscou  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) Tratado de Versalhes   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Pacto de Varsóvia ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  Pacto Ribbentrop-Molotov  
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)Tratado de Moscou .</label>
			<br />
			<br />
			
			
			<h2>2) A Segunda Guerra Mundial teve como consequências: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) a alteração do poder político mundial e formulação da Doutrina Trumam.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)a proclamação da República na China e decadência política da "Cortina de Ferro".></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) a intervenção de tropas estrangeiras na Guerra Civil Espanhola e vitória do franquismo. 	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)a divulgação das ideias da "Coexistência Pacífica" e propagação do movimento neutralista.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) a alteração do poder político mundial e formulação da Doutrina Trumam></label>
			<br />
			<br />
			
			<h2>3)


Os antigos combatentes do mesmo regimento se reúnemperiodicamente emjantares onde evocamas lembranças da guerra, essas histórias de homens. Muitos são os que ficaram alquebrados por esses anos de horror, incapazes de se readaptar a uma vida civil que, alguns anos depois, sofrerá o abalo da Grande Depressão. Para uma unidade que descia de Verdun, bastava ametade dos caminhões que tinham sido necessários para a ida. É a lembrança indelével que entretém as insônias e alimenta os pesadelos. E logo fica claro que esta não foi a última guerra. Em 1923, há o golpe deMunique." 

(VINCENT, Gérard. Guerras ditas, Guerras silenciadas e o enigma identitário., in: História da Vida Privada . São Paulo: Companhia das Letras, 2009, p.187.) 

O golpe de Munique, também conhecido como Putsch da Cervejaria, está inserido no contexto do período entre Guerras e das consequências da Primeira Guerra Mundial. O referido golpe está associado à:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) ascensão de Hitler e do Nazismo.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)grande marcha de Mao Tsé-tung.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)guerra civil espanhola.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)marcha sobre Roma de Mussolini.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) morte de Franz Ferdinand.</label>
			<br />
			<br />
			
			<h2>4)


Analise as afirmativas correlatas.
I. “A divisão da Alemanha teve início com o acordo de Potsdam, assinado após a Segunda Guerra Mundial, que dividia a nação em quatro zonas de ocupação, sendo três delas destinadas aos aliados do Ocidente (Estados Unidos, França e Reino Unido) e uma ao governo soviético.” 
PORQUE
II. “Derrotada no grande conflito mundial, a Alemanha passou a sofrer influência de dois regimes distintos, o que resultou na sua divisão em 1949, na República Federal Alemã (RFA), de orientação capitalista, e a República Democrática Alemã (RDA), comunista.”
Assinale a alternativa correta:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) As duas afirmativas são falsas;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) A primeira afirmativa é verdadeira e a segunda, falsa;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)As duas afirmativas são verdadeiras, mas a segunda não justifica a primeira.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)As duas afirmativas são verdadeiras e a segunda é uma justificativa correta da primeira.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)Todas sao falsas.</label>
			<br />
			<br />
			
			<h2>5) 

Em relação à participação do Brasil na 2.ª Guerra Mundial, é correto afirmar que o país ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) manteve neutralidade política, não participando do conflito.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) enviou apenas um corpo médico para o conflito, e não soldados></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)lutou ao lado dos Aliados: Inglaterra, França, Estados Unidos e União Soviética.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) lutou ao lado do Eixo: Itália, Alemanha e Japão;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) participou do conflito, do início ao fim da guerra (1939- 1945)..></label>
			<br />
			<br />
			
			<h2>6)

A Segunda Guerra Mundial (1939-1945) é, geralmente, considerada o grande momento de inflexão do século XX. Decorrência de duas décadas de instabilidade política, comoção social e crise econômica, ela foi o mais universalizado dos conflitos e, ao chegar ao fim, gerou uma ordem internacional que se afastava dos padrões vigentes, a rigor, desde a Idade Moderna. Relativamente aos fatores que determinaram o início de hostilidades e às conferências que estabeleceram as balizas do novo cenário mundial, assinale a opção correta. </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)A Conferência de Potsdam definiu a internacionalização de Berlim e a divisão da Alemanha em duas áreas de influência: a área sob influência da União Soviética e a sob influência dos EUA.;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)Embora combatido por liberais, trotskistas e social-democratas, o Pacto de Não-Agressão Germano-Soviético foi fundamental para retardar o início da Segunda Guerra Mundial.</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) A política da Paz Armada desencadeada por Hitler, ainda que não necessariamente expansionista, abriu o caminho para a guerra, por gerar desconfiança e temor generalizados. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) A Liga das Nações condenou a anexação da Áustria pela Alemanha nazista, tendo sido veemente o protesto da França e da Inglaterra, que romperam relações diplomáticas com Berlim. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Em face de sua contribuição na luta contra o Reich nazista, a União Soviética teve o reconhecimento internacional reforçado na Conferência de Teerã e, em lalta, assegurou sua influência no Leste Europeu.

</label>
			<br />
			<br />
			
			<h2>7) Em 26 de agosto de 1789, a Assembleia Nacional Constituinte aprovou a Declaração dos Direitos do Homem e do Cidadão, documento que serviu de referência para a elaboração de outros similares, como a Declaração Universal dos Direitos Humanos, formulada pela ONU, no contexto do pós-Segunda Guerra Mundial. Considerando as principais concepções politicas produzidas pelo movimento francês de 1789, pode-se afirmar que este documento expressou: </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)O triunfo do projeto politico jacobino que dividia o Estado em três poderes autônomos e independentes;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)A manifestação contra a sociedade hierárquica de privilégios nobres, mas não um manifesto a favor de uma sociedade democrática e igualitária;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) As aspirações de toda burguesia liberal em sua defesa da propriedade privada e dos direitos individuais;;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)A contemplação dos interesses dos camponeses e dos grupos provinciais, na medida em que determinou o confisco das propriedades fundiárias na Franca;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)A hegemonia dos girondinos, pois a Declaração estabeleceu eleições por sufrágio universal, o que possibilitou o controle do processo revolucionário por parte desse grupo.
</label>
			<br />	
			<br />
		
			<h2>8) 




O programa de ajuda financeira para a reconstrução dos países europeus devastados durante a Segunda Guerra Mundial, proposto pelos EUA e que tinha como objetivo deter a expansão socialista e também reforçar sua influência sobre eles ficou conhecido como: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)Plano Marshall;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) Congresso de Viena;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) Otan;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)  Guerra Fria</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)Guerra da sessessão.</label>
			<br />
			<br />
	
			<h2>9) 

Foi a Segunda Guerra Mundial que precipitou a luta anticolonial no continente africano. 

A avalanche revolucionária ganhou intensidade, sobretudo porque a França e a Inglaterra, senhoras dos principais impérios coloniais, saíram enfraquecidas da Segunda Guerra para enfrentar revoltas coloniais. Por outro lado, a derrota de Chiang Kai-sheck, na China, a capitulação francesa na Indochina (1954) e a nacionalização do Canal de Suez por Nasser, líder egípcio, também estimularam as guerras de libertação. 

Nessas lutas, projetaram-se inúmeros líderes africanos que, por vezes, procuraram adaptar ideologias ocidentais às condições locais, com o objetivo de eliminar todas as formas de colonialismo na África, como, por exemplo a(o) </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) Pan-Africanismo e a Negritude.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) Conferência de Acra e a Conferência de Casablanca.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) Conferência de Monróvia e a Organização da Unidade Africana.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)  União Africana e o Comitê de Libertação Africana.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) MPLA (Movimento Popular para a Libertação de Angola) e a FRELIMO (Frente de Libertação de Moçambique)

.</label>
			<br />
			<br />

			<h2>10)

O período entre as duas guerras mundiais do século XX foi assinalado pela emergência de regimes totalitários. Relativamente a essa realidade que marcou profundamente as décadas de 1920 e 1930, em larga medida causadora da Segunda Guerra Mundial, assinale a opção correta: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) O fascismo italiano teve no racismo o suporte ideológico oficial do regime.;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)Na Alemanha, Hitler chegou ao poder mediante violento golpe de Estado..</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) O ditatorial Estado Novo de Vargas apresentava aspectos próprios do fascismo..</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) A Guerra Civil Espanhola interrompeu a marcha ascensional da direita fascista.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)Com Roosevelt, os EUA rompem a histórica tradição democrática do país..</label>
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