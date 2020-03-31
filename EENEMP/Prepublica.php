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
		  window.location.href='Rrepublica.php';</script>";
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
			<h1>Prova de História sobre <font color=red>República Velha</h1></font> 
		</form>
		
		<form id="questoes" action="Prepublica.php" method = "POST">
			<br>
			<h2>1)       A imagem da relação patrão-empregado geralmente veiculada pelas classes dominantes brasileiras na República Velha era de que esta relação se assemelhava em muitos aspectos à relação entre pais e filhos. O patrão era uma espécie de “juiz doméstico” que procurava guiar e aconselhar o trabalhador, que, em troca, devia realizar suas tarefas com dedicação e respeitar o seu patrão.
CHALHOUB, S. Trabalho, lar e botequim: o cotidiano dos trabalhadores do Rio de Janeiro da Belle Époque. Campinas: Unicamp, 2001.
No contexto da transição do trabalho escravo para o trabalho livre, a construção da imagem descrita no texto tinha por objetivo  : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)esvaziar o conflito de uma relação baseada na desigualdade entre os indivíduos que dela participavam.   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) driblar a lentidão da nascente Justiça do Trabalho, que não conseguia conter os conflitos cotidianos.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) separar os âmbitos público e privado na organização do trabalho para aumentar a eficiência dos funcionários. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  burlar a aplicação das leis trabalhistas conquistadas pelos operários nos primeiros governos civis do período republicano.
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)compensar os prejuízos econômicos sofridos pelas elites em função da ausência de indenização pela libertação dos escravos. .</label>
			<br />
			<br />
			
			
			<h2>2) 
      O coronelismo era fruto de alteração na relação de forças entre os proprietários rurais e o governo, e significava o fortalecimento do poder do Estado antes que o predomínio do coronel. Nessa concepção, o coronelismo é, então, um sistema político nacional, com base em barganhas entre o governo e os coronéis. O coronel tem o controle dos cargos públicos, desde o delegado de polícia até a professora primária. O coronel hipoteca seu apoio ao governo, sobretudo na forma de voto.
               CARVALHO, J. M. Pontos e bordados: escritos de história política. Belo
                                                             Horizonte: Editora UFMG, 1998 (adaptado).
No contexto da Primeira República no Brasil, as relações políticas descritas baseavam-se na : </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) coação das milícias locais. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)estagnação da dinâmica urbana..></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) valorização do proselitismo partidário.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)disseminação de práticas clientelistas.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)centralização de decisões administrativas. 
></label>
			<br />
			<br />
			
			<h2>3)



A página do periódico do início do século XX documenta um importante elemento da cultura francesa, que é revelador do papel do Brasil na economia mundial, indicado no seguinte aspecto: :</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)Prestador de serviços gerais;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)Exportador de bens industriais .</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)Importador de padrões estéticos .</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> DFornecedor de produtos agrícolas .</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Formador de padrões de consumo. </label>
			<br />
			<br />
			
			<h2>4)




O problema central a ser resolvido pelo Novo Regime era a organização de outro pacto de poder que pudesse substituir o arranjo imperial com grau suficiente de estabilidade. O próprio presidente Campos Sales esumiu claramente seu objetivo: “É de lá, dos estados, que se governa a República, por cima das multidões que tumultuam agitadas nas ruas da capital da União. A política dos estados é a política nacional”. 

CARVALHO, J. M. Os Bestializados: o Rio de Janeiro e a República que não foi. São Paulo: Companhia das Letras, 1987 (adaptado).


Nessa citação, o presidente do Brasil no período expressa uma estratégia política no sentido de:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) governar com a adesão popular.;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) atrair o apoio das oligarquias regionais.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)conferir maior autonomia às prefeituras..</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)democratizar o poder do governo central..</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)Todas sao falsas.</label>
			<br />
			<br />
			
			<h2>5) 


A Estrada de Ferro Noroeste do Brasil, que começa a ser construída apenas em 1905, foi criada, ao contrário das outras grandes ferrovias paulistas, para ser uma ferrovia de penetração, buscando novas áreas para a agricultura e povoamento. Até 1890, o café era quem ditava o traçado das ferrovias, que eram vistas apenas como auxiliadoras da produção cafeeira. 

CARVALHO, D. F. Café, ferrovias e crescimento populacional: oflorescimento da região noroeste paulista. Disponível em: www.historica.arquivoestado.sp.gov.br. Acesso em: 2 ago. 2012. 

Essa nova orientação dada à expansão ferroviária, durante a Primeira República, tinha como objetivo a?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A)  articulação de polos produtores para exportação.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B)criação de infraestrutura para atividade industrial.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)integração de pequenas propriedades policultoras.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D)valorização de regiões de baixa densidade demográfica.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) promoção de fluxos migratórios do campo para a cidade.></label>
			<br />
			<br />
			
			<h2>6)

 Nos estados, entretanto, se instalavam as oligarquias, de cujo perigo já nos advertia Saint-Hilaire, e sob o disfarce do que se chamou ‘‘a política dos governadores". Em círculos concêntricos esse sistema vem cumular no próprio poder central que é o sol do nosso sistema.

PRADO, P. Retrato do Brasil. Rio de Janeiro: José Olympio. 1972.

A crítica presente no texto remete ao acordo que fundamentou o regime republicano brasileiro durante as três primeiras décadas do século XX e fortaleceu o(a)</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)Apoder militar, enquanto fiador da ordem econômica;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)presidencialismo, com o objetivo de limitar o poder dos coronéis.</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)domínio de grupos regionais sobre a ordem federativa ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) intervenção nos estados, autorizada pelas normas constitucionais ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) isonomia do governo federal no tratamento das disputas locais.

</label>
			<br />
			<br />
			
			<h2>7)

É difícil encontrar um texto sobre a Proclamação da República no Brasil que não cite a afirmação de Aristides Lobo, no Diário Popular de São Paulo, de que “o povo assistiu àquilo bestializado” . Essa versão foi relida pelos enaltecedores da Revolução de 1930, que não descuidaram da forma republicana, mas realçaram a exclusão social, o militarismo e o estrangeirismo da fórmula implantada em 1889. Isto porque o Brasil brasileiro teria nascido em 1930. 
MELLO, M. T. C. A república consentida: cultura democrática e científica no final do Império. Rio de Janeiro: FGV, 2007 (adaptado). 

O texto defende que a consolidação de uma determinada memória sobre a Proclamação da República no Brasil teve, na Revolução de 1930, um de seus momentos mais importantes. Os defensores da Revolução de 1930 procuraram construir uma visão negativa para os eventos de 1889, porque esta era uma maneira de: </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)valorizar as propostas políticas democráticas e liberais vitoriosas.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)resgatar simbolicamente as figuras políticas ligadas à Monarquia.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) criticar a política educacional adotada durante a República Velha.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)legitimar a ordem política inaugurada com a chegada desse grupo ao poder;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) destacar a ampla participação popular obtida no processo da Proclamação.
</label>
			<br />	
			<br />
		
			<h2>8) 





As ruínas do povoado de Canudos, no sertão norte da Bahia, além de significativas para a identidade cultural dessa região, são úteis às investigações sobre a Guerra de Canudos e o modo de vida dos antigos revoltosos. 

Essas ruínas foram reconhecidas como patrimônio cultural material pelo Iphan (Instituto do Patrimônio Histórico e Artístico Nacional) porque reúnem um conjunto de </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)objetos arqueológicos e paisagísticos.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)acervos museológicos e bibliográficos.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) núcleos urbanos e etnográficos.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)   práticas e representações de uma sociedade.</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)expressões e técnicas de uma sociedade extinta..</label>
			<br />
			<br />
	
			<h2>9) 

Esse discurso, típico do contexto histórico da República Velha e usado por chefes políticos, expressa uma realidade caracterizada:</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) pela força política dos burocratas do nascente Estado republicano, que utilizavam de suas prerrogativas para controlar e dominar o poder nos municípios;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) pelo controle político dos proprietários no interior do país, que buscavam, por meio dos seus currais eleitorais, enfraquecer a nascente burguesia brasileira;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) pelo mandonismo das oligarquias no interior do Brasil, que utilizavam diferentes mecanismos assistencialistas e de favorecimento para garantir o controle dos votos;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)  pelo domínio político de grupos ligados às velhas instituições monárquicas e que não encontraram espaço de ascensão política na nascente república;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) pelo domínio político de grupos ligados às velhas instituições monárquicas e que não encontraram espaço de ascensão política na nascente república

.</label>
			<br />
			<br />

			<h2>10)


Na história brasileira, a chamada Revolta da Chibata liderada por João Cândido, e descrita na música, foi: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) crita na música, foi
 a a rebelião de escravos contra os castigos físicos, ocorrida na Bahia, em 1848, e repetida no Rio de Janeiro.;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)a revolta, no porto de Salvador, em 1860, de marinheiros dos navios que faziam o tráfico negreiro	.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) o protesto ocorrido no Exército, em 1865, contra o castigo de chibatadas em soldados desertores na Guerra do Paraguai.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) a rebelião dos marinheiros, negros e mulatos, em 1910, contra os castigos e as condições de trabalho na Marinha de Guerra.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)o protesto popular contra o aumento do custo de vida no Rio de Janeiro, em 1917, dissolvido, a chibatadas, pela polícia.</label>
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