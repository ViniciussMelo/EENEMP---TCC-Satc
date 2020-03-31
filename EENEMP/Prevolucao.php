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
		  window.location.href='Rrevolucao.php';</script>";
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
			<h1>Prova de História sobre <font color=red>Revolução Industrial</h1></font> 
		</form>
		
		<form id="questoes" action="Prevolucao.php" method = "POST">
			<br>
			<h2>1) Tendo em vista o conceito marxista de modo de produção e os trechos em destaque, podemos considerar corretamente que : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)O modelo de modo de produção refere-se especificamente aos aspectos econômicos de uma sociedade, dentro da visão materialista de Marx, excluindo os demais setores. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) É preciso ter claro que o modo de produção ajuda a compreender a realidade, mas não é a realidade. É uma forma didática, utilizada pelos estudiosos para caracterizar e analisar os períodos pós-capitalistas.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Hobsbawm entende a noção de mundo do trabalho como a condição na qual os sujeitos estão inseridos ao construírem suas relações de trabalho, o que condiz com o conceito marxista de modo de produção. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) Não se pode estimar o valor dos modos de produção na evolução das sociedades, pois é preciso entendê-los como processos dissociados de uma participação da sociedade como um todo, ligados apenas às classes produtoras.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)É impossível a presença, nas formações sociais reais existentes, de características mescladas de diferentes modos de produção, pois como são de acordo com a dialética marxista, é necessário que um seja todo destruído para que o outro surja..</label>
			<br />
			<br />
			
			
			<h2>2) Com base no conhecimento histórico e no texto é correto afirmar que a Revolução Industrial : </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)alterou, ao mesmo tempo, o processo de trabalho nas áreas coloniais e as condições sociais do artesão na Inglaterra ao reunir capitais e ferramentas em oficinas ou domicílios rurais dispersos. .></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)representou ao mesmo tempo, revolução técnica ou tecnológica das formas de produção e revolução das condições de trabalho e retorno de capital, com a exploração desumana da mão de obra. .></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) favoreceu a ascensão política das colônias ao promover o desenvolvimento econômico nas área periféricas, a organização do mercado de trabalho e o aumento dos núcleo domésticos de produção. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)desestruturou, ao mesmo tempo, o antigo sistema colonial e as formas de produção capitalista europeia, assim como, possibilitou a formação da sociedade moderna, livre do controle das máquinas. .></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) tornou a vida do homem, na sociedade colonial, uma constante busca pela apropriação social das inovações tecnológicas originadas do pensamento inglês de progresso e desenvolvimento. ></label>
			<br />
			<br />
			
			<h2>3)



A respeito da Revolução Industrial, considere as seguintes afirmativas:
1.Um dos componentes fundamentais da Revolução Industrial foi o desenvolvimento dos meios de transporte, de maneira especial, o surgimento das ferrovias.
2.A Revolução Industrial provocou mudanças que tornaram o sistema capitalista dominante na organização da sociedade.
3.Devido às condições de trabalho nas fábricas, não foi registrado na Inglaterra o trabalho infantil, de modo que as crianças destinavam seu tempo unicamente aos estudos e brincadeiras.
Assinale a alternativa correta.:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Somente a afirmativa 1 é verdadeira;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)Somente a afirmativa 2 é verdadeira.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)Somente as afirmativas 1 e 2 são verdadeiras.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Somente as afirmativas 1 e 3 são verdadeiras.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) As afirmativas 1, 2 e 3 são verdadeiras
.</label>
			<br />
			<br />
			
			<h2>4)


A 1ª Revolução Industrial passou por quatro fases distintas. Assinale a sequência CORRETA das fases da 1ª Revolução Industrial:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) 1ª fase: espetacular aceleramento dos transportes e das comunicações / 2ª fase: aplicação da força motriz à indústria / 3ª fase: desenvolvimento do sistema fabril / 4ª fase: mecanização da indústria e da agricultura.;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 1ª fase: mecanização da indústria e da agricultura / 2ª fase: aplicação da força motriz à indústria / 3ª fase: desenvolvimento do sistema fabril / 4ª fase: espetacular aceleramento dos transportes e das comunicações.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)1ª fase: aplicação da força motriz à indústria / 2ª fase: mecanização da indústria e da agricultura / 3ª fase: desenvolvimento do sistema fabril / 4ª fase: espetacular aceleramento dos transportes e das comunicações.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)1ª fase: mecanização da indústria e da agricultura / 2ª fase: desenvolvimento do sistema fabril / 3ª fase: aplicação da força motriz à indústria / 4ª fase: espetacular aceleramento dos transportes e das comunicações.
</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)1ª fase: espetacular aceleramento dos transportes e das comunicações / 2ª fase: aplicação da força motriz à indústria / 3ª fase: desenvolvimento do sistema fabril / 4ª fase: mecanização da indústria e da agricultura..</label>
			<br />
			<br />
			
			<h2>5) 

“A queda da burguesia e a vitória do proletariado são igualmente inevitáveis.(...) Os proletários nada têm a perder com ela, a não ser as próprias cadeias. E têm um mundo a ganhar. Proletários de todos os países, uni-vos”.
Esse trecho, extraído do Manifesto Comunista de Marx e Engels, foi escrito no contexto histórico marcado pela Revolução Industrial. Para muitos trabalhadores, a indústria trouxe muitos problemas para a classe que estava se formando.
Assinale a alternativa que indica os problemas enfrentados por esses trabalhadores. ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) A alta nos preços de produtos alimentícios, enquanto produtos de luxo como as roupas estavam barateando.   ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B)Conflitos entre os donos das fábricas, acabando com as antigas corporações de ofício e dando espaço para os sindicatos modernos.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)Acirramento das contradições políticas, econômicas e sociais, decorrentes da rápida industrialização.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) Dificuldades no trabalho com as novas máquinas, pois os donos da fábrica não investiam na educação e aperfeiçoamento dos trabalhadores;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) Aumento do autoritarismo dos reis absolutistas, ajudando assim no desenvolvimento das indústrias. 
></label>
			<br />
			<br />
			
			<h2>6)


Tomando como referência inicial esse texto, assinale a opção correta.
 </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)A Revolução Industrial, de matriz inglesa, circunscreveu-se apenas ao espaço britânico, pelo menos entre os séculos XVIII e XIX;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)Embora as relações econômicas internacionais tenham favorecido, no século XIX, o desenvolvimento das idéias liberais, o socialismo já triunfara como política de Estado naquele século.</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) As formas de trabalho infantil, bastante coibidas na origem do industrialismo inglês, generalizaram-se no capitalismo avançado ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) As formas de coerção, embora tenham sido superadas no capitalismo global atual em algumas regiões e áreas de produção, ainda são características do processo industrial contemporâneo ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Em face de sua contribuição na luta contra o Reich nazista, a União Soviética teve o reconhecimento internacional reforçado na Conferência de Teerã e, em lalta, assegurou sua influência no Leste Europeu.

</label>
			<br />
			<br />
			
			<h2>7) Utilizando esse texto como referência inicial, assinale a opção correta acerca das idéias e das práticas socialistas no século XIX.
: </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A) Embora transpostas para o setor industrial, as idéias socialistas tiveram origem nas reivindicações do mundo agrário;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)O socialismo assistiu, naquele século, à sua grande revolução política na Rússia;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) O socialismo nasceu e se desenvolveu como uma idéia realista e pragmática, sem imaginação utópica;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)A força do conjunto das idéias socialistas praticamente não sofreu recuo após a emergência dos movimentos das nacionalidades naquele século;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)A hegemonia dos girondinos, pois a Declaração estabeleceu eleições por sufrágio universal, o que possibilitou o controle do processo revolucionário por parte desse grupo.
</label>
			<br />	
			<br />
		
			<h2>8) 




A superioridade da indústria inglesa, em 1840, não era desafiada por qualquer futuro imaginável. E esta superioridade só teria a ganhar se as matérias-primas e os gêneros alimentícios fossem baratos. Isto não era ilusão: a nação estava tão satisfeita com o que considerava um resultado de sua política que as críticas foram quase silenciadas até a depressão da década de 80." (Joseph A. Schumpeter, "HISTÓRIA DA ANÁLISE ECONÔMICA")
Desta exposição conclui-se por que razão a Inglaterra adotou decididamente, a partir de 1840, o:: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)isolacionismo em sua política externa.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) intervencionismo estatal na economia;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) capitalismo monopolista contrário à concorrência;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)  agressivo militarismo nas conquistas de colônias ultramarinas</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)livre-comércio no relacionamento entre as nações.</label>
			<br />
			<br />
	
			<h2>9) 

(Uel) Um fator que contribuiu decisivamente para o processo de industrialização na Inglaterra do século XVIII foi:</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) a acumulação de capital resultante da exploração colonial praticada pela Inglaterra através do comércio;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) a concorrência tecnológica entre ingleses e americanos, que estimulou o desenvolvimento econômico;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) a expulsão das tropas napoleônicas do território inglês, que uniu os interesses nacionais em torno de um esforço de desenvolvimento;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)  o movimento ludista na Inglaterra com a destruição das máquinas consideradas obsoletas, ao incentivar a invenção de novas máquinas;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) a abertura de mercados na Alemanha e na França para a Inglaterra, por meio de um acordo comercial conhecido por Pacto de Berlim

.</label>
			<br />
			<br />

			<h2>10)


A Revolução Industrial ocorrida ao longo do século XVIII está vinculada à história da Inglaterra no seu nascedouro. Entretanto, à medida que o capitalismo foi se consolidando, a idéia de Revolução Industrial começou a ser associada a um conceito universal e ganhou vários sinônimos, dentre os quais: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) republicanização, que orientava os novos processos de organização da política, a intervenção no mercado e a Revolução Francesa;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)modernização, que indicava a manutenção da economia mercantilista, a centralização do Estado e o crescimento das camadas médias.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) industrialização, que significava a alteração nos processos de produção, a concretização da economia de mercado e a ascensão da burguesia;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) maquinização, que mostrava a crescente expansão do artesanato, da agricultura e da fisiocracia como modelos de crescimento;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)tecnificação, que definia o processo industrial como dependente das modificações na agricultura e também do agrarismo, sendo controlado politicamente pela nobreza urbana.</label>
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