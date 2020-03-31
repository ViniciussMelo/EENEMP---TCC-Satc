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
		  window.location.href='Rglobalizacao.php';</script>";
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
			<h1>Prova de Geografia sobre <font color=red>Globalização</h1></font>
		</form>
		
		<form id="questoes" action="Pglobalizacao.php" method = "POST">
			<br>
			<h2>1) Acerca da Geografia mundial, assinale a alternativa correta: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)São todos desertos: Saara, Gobi, Atacama, Saara e Kalahri.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) Andorra, Montenegro, Letônia, Lesoto e Ucrânia são países Europeus.   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) A Guiana Francesa pertence à França; as ilhas Falkland ou Malvinas, ao Reino Unido; ilha de Páscoa, ao Chile; Gibraltar, à Espanha; e, Cabo Verde, a Portugal. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  São nações soberanas e independentes: Vaticano, Andorra e Groelândia.  
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)Ilhas :Cabo Verde, a Portugal. .</label>
			<br />
			<br />
			
			
			<h2>2) AO início da globalização é impreciso, mas é comum apontar o seu marco na revolução tecnocientífica. A partir desse processo e do fim da Guerra Fria, alguns cientistas passaram a enxergar a formação e o funcionamento de um sistema-mundo, ou seja, uma extrema interligação entre diferentes partes do mundo a partir de diversos aspectos e dimensões. A globalização é também chamada de informacional ou 3ª Revolução Industrial. Caracterizou-se, sobretudo, pelo desenvolvimento do(a): </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)  linguagem.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)Conhecimento racional ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) pensamento cartesiano. 	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Informática></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) Comunicação></label>
			<br />
			<br />
			
			<h2>3)

Rafael Straforini afirma que no “lugar de convivência da criança (a realidade concreta) há o todo, ou seja, o global e vice-versa” (STRAFORINI, 2008: 22), ou seja, “esse lugar tem que ser entendido como o ponto de encontro de lógicas locais e globais, próximas e longínquas” (STRAFORINI, 2008: 23), onde a totalidade do mundo se faz sentir. Nas séries iniciais, essa forma de trabalhar o lugar deve levar em conta:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) que a totalidade se faz sentir no momento em que a criança é capaz de discernir que o próximo e o longínquo são categorias de raciocínio estanques, sem relação com a realidade espacial que a cerca;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)que o global é um conceito muito distante da realidade do aluno e, portanto, ser aprofundado nos anos finais do ensino fundamental, cabendo ao professor dos anos iniciais concentrar-se na questão local ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)o dia a dia da criança, a começar pelo seu país, assim como os elementos e/ou ações internas, de caráter global, que determinam ou contribuem para determinar o arranjo social e espacial em que ela vive;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)o dia a dia da criança, a começar pela família e o ambiente físico que o cerca, assim como os elementos e/ou ações externas, de caráter global, que determinam ou contribuem para determinar o arranjo social e espacial em que ela vive;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) ue a totalidade se faz sentir no momento em que a criança é capaz de discernir que o próximo e o longínquo são categorias de raciocínio estanques, sem relação com a realidade espacial que a cerca .</label>
			<br />
			<br />
			
			<h2>4)Embora estes processos ocorram de forma não homogênea em todos os países, pode-se afirmar que vivemos num mundo global. É no campo econômico que a Globalização se expressa de forma mais capilar, integrando todas as esferas da vida humana, seja nos espaços do trabalho, do consumo e até da cultura.
Nesse contexto, a construção de uma sociedade informacional a serviço das demandas do capital tem sido fundamental, nas últimas décadas para a configuração de um espaço totalmente globalizado. Dentre os seguintes fatores abaixo, aquele que pode ser descartado no contexto da construção dessa sociedade é a:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) manutenção dos processos de produção tradicionais ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) informação e o conhecimento como matéria-prima  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)convergência crescente de todas as tecnologias ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) interconexão de todo o sistema de relações  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)manutenção dos processos de produção tradicionais.</label>
			<br />
			<br />
			
			<h2>5) 

A partir da década de 1970, o aprofundamento da globalização reestrutura o espaço econômico mundial, dando a ele uma feição de arquipélago cujos centros produtivos mais competitivos são interconectados por redes logísticas multiescalares. Nesse processo, as atividades portuárias são submetidas à adoção de novos padrões de organização e localização. A sincronização da produção, do transporte e da distribuição insere os portos em arquiteturas logísticas organizadas segundo princípios de flexibilidade operacional e de minimização das rugosidades espaciais e funcionais.

Adaptado de: MONIÉ, F. e VASCONCELOS, F. “Evolução das relações entre cidades e portos: entre lógicas homogeneizantes e dinâmicas de diferenciação”, Confins [Online], n. 15, 2012

Entre as mudanças observadas nos padrões de organização e localização das atividades portuárias nas últimas décadas, com reflexos no território brasileiro, destaca-se uma tendência à: ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) polarização dos fluxos de commodities pelos portos generalistas;  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) ampliação da associação espacial e funcional entre cidade e porto;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)expansão da área retroportuária para os centros antigos das cidades;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) concentração das estações de desembaraço aduaneiro na zona portuária;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) regionalização das atividades tradicionalmente realizadas nos retroportos.></label>
			<br />
			<br />
			
			<h2>6)

Considere a matéria jornalística abaixo.
Vitória vai usar app de GPS para avisar sobre interdições no trânsito
Capital vai ser uma das 55 cidades do mundo a usar o Waze. Prefeitura vai inserir em aplicativo informações que interfiram no trânsito.
(Disponível em: g1.globo.com/espirito-santo/noticia/2015/10/vitoria-vai-usar-app-de-gps-para-avisar-sobre-interdicoes-no-transito.html)
Sobre o sistema de posicionamento global (GPS), é correto afirmar que </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)depende, para o correto funcionamento, da cobertura local proporcionada por uma rede de satélites;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)é um sistema que não necessita de coordenadas geográficas para localização, pois depende somente da altitude;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) não tem precisão suficiente para ser utilizado na navegação marítima, que ainda depende de mapas convencionais. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) dispensa a utilização de mapas, substituídos por bússolas eletrônicas que indicam a direção a seguir pelo usuário. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) seu uso no Brasil ainda é restrito às instituições militares, pois é considerado estratégico para a segurança nacional. 

</label>
			<br />
			<br />
			
			<h2>7) Sobre a economia globalizada, marque V para as afirmativas verdadeiras e F para as falsas.

( ) Auxilia na redução das discrepâncias econômicas entre os países na escala global e protege as culturas na escala local.
( ) Possibilita a integração de economias por meio do aparato tecnológico desenvolvido e difunde hábitos pelo mundo, como as redes de fast food.
( ) Proporciona, pelos meios da comunicação, maior visibilidade a culturas locais incluindo as minorias, os povos e culturas de recantos isolados do mundo.
( ) Por ser global, anulou a xenofobia e diminuiu consideravelmente os conflitos étnicos e religiosos em todo o planeta, em especial nos países da América Latina e da África Austral.
( ) As formações de blocos econômicos facilitam a circulação de mercadorias, proporcionando maiores mercados consumidores e investimentos de capital financeiro numa escala global.

Assinale a sequência correta:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)F, V, V, F, V;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)V, F, V, V, F;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) V, F, F, F, V;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)F, V, F, F, V</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) F, V, F, V, V</label>
			<br />	
			<br />
		
			<h2>8) 


As transformações no mundo do trabalho são influenciadas pela globalização que estabelece alterações no ritmo da indústria, comércio, comunicações e transporte, com nova organização na economia mundial a partir do avanço científico e tecnológico e da concentração de capital.

São características da globalização, EXCETO, </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)as empresas multinacionais definem a articulação entre a produção, mão-de-obra, mercado e matéria-prima;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)comporta processos relacionados à internacionalização da produção;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) articulação de diversas partes que compõem um todo, com ampliação de distâncias, encolhimento de contextos e limitação de intercâmbios.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)  requalificação dos espaços para atender aos interesses dos atores hegemônicos da economia, da cultura e da política;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)dinamismo renovado da divisão internacional do trabalho, principalmente nos países subdesenvolvidos.</label>
			<br />
			<br />
	
			<h2>9) 
Sobre a globalização na atualidade, diferentes interpretações são elaboradas, sejam elas de ordem econômica, financeira, política e institucional.

Marque a alternativa que apresenta a dimensão econômica da globalização na atualidade. </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) A internacionalização da economia viabilizou um vasto campo de investimentos externos, redefinindo as relações econômicas entre os países, tornando vulneráveis as economias e as moedas.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) O processo de expansão capitalista promoveu a autonomia dos territórios e a dependência das empresas nacionais.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) A lógica da dimensão econômica da globalização é pautada no crescimento do comércio em detrimento do avanço tecnológico.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) As moedas e mercadorias tornaram-se dependentes das empresas de tecnologia de informação afetando a soberania nacional.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)O agravamento das questões políticas fortalecem os regimes autoritários por meio das questões sociais, culturais e econômicas. 
.</label>
			<br />
			<br />

			<h2>10)
Na perspectiva do mercado capitalista globalizado a dependência internacional do petróleo da maior economia do planeta tem sido objeto de diversos conflitos, dentre eles o caso do Oriente Médio.

Sobre as questões internacionais na invasão do Iraque é CORRETO afirmar: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)  As invasões são elementos somente para combate ao terrorismo;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)Representam o interesse das petroleiras norte-americanas na riqueza do Oriente Médio.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) O golfo pérsico representa uma área de interesse somente dos palestinos.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) Os interesses no Iraque pelos norte-americanos contrariam aos interesses da França e Alemanha;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) Os problemas que desencadearam as guerras no Iraque são de ordem religiosa.</label>
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