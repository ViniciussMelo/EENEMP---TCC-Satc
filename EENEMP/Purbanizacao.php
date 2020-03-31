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
		  window.location.href='Rurbanizacao.php';</script>";
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
			<h1>Prova de Geografia sobre <font color=red>Urbanização</h1></font>
		</form>
		
		<form id="questoes" action="Purbanizacao.php" method = "POST">
			<br>
			<h2>1) Todo mapa apresenta algumas informações essenciais e responde a certas questões. Onde? O quê? Quanto? Essas são algumas perguntas que se pode fazer sobre os elementos que compõem o espaço geográfico e que representam a diversidade dos fenômenos que podem ser cartografados. Considerando o mapa abaixo, assinale a alternativa que indica o método de representação da cartografia temática utilizado para elaborá-lo: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)Representações qualitativas. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) Representações quantitativas. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Representações ordenadas ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) Representações dinâmicas.  
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)Representações estáticas.</label>
			<br />
			<br />
			
			
			<h2>2) 
No que se refere à coleta e ao registro de informações do Cadastro Territorial Multifinalitário marque a única opção errada:  </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) Cada parcela recebe uma identificação numérica inequívoca. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)O levantamento cadastral para a identificação geométrica das parcelas territoriais deve ser referenciado ao Sistema Geodésico Brasileiro. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) Será conservada e mantida a inviolabilidade dos marcos vinculados ao Sistema Geodésico Brasileiro, de acordo com as recomendações do IBGE.  	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Levantamentos e locações de obras e novos loteamentos devem ser referenciados ao Sistema Geodésico Brasileiro, apoiados nos marcos municipais correspondentes. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) Os vértices que definem os limites de cada parcela devem constituir uma figura geométrica aberta. ></label>
			<br />
			<br />
			
			<h2>3)

O Cadastro Técnico Multifinalitário pode ser entendido como um sistema de registro dos elementos espaciais que representam a estrutura urbana, constituído por uma componente geométrica e outra descritiva que lhe conferem agilidade e diversidade no fornecimento de dados para atender a diferentes funções, inclusive a de planejamento urbano. Marque a única opção incorreta sobre o Cadastro Técnico Multifinalitário:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)O planejamento urbano é o único uso do Cadastro Técnico Multifinalitário. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)A cobrança de IPTU é a única utilidade do Cadastro Técnico Multifinalitário ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)O Cadastro Técnico Multifinalitário conjuga dados geométricos e alfanuméricos;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)O Cadastro Técnico Multifinalitário é constituído unicamente de mapas;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) O Cadastro Técnico Multifinalitário não utiliza base cartográfica.</label>
			<br />
			<br />
			
			<h2>4)Analise as afirmativas abaixo e identifique qual não se refere aos coletores eletrônicos de dados utilizados no cadastro imobiliário: </h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)Avaliação em tempo real de consistência dos dados. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B)Cruzamento de informações. </label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)Formação do banco de dados. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)Controle de produção e produtividade. </label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)Eliminação das saídas a campo. </label>
			<br />
			<br />
			
			<h2>5) 

Marque a única alternativa ERRADA no que diz respeito aos levantamentos cadastrais urbanos poderem empregar métodos clássicos tais como o método ortogonal?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A)Empregam-se instrumentos munidos de prisma chamados esquadros de prisma;  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B)  Seus resultados devem ser registrados em croquis de campo, durante as medições;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)Usa um sistema de coordenadas polares (ângulos e distâncias quaisquer);></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D)Usa a medição de duas distâncias ortogonais, formando triângulos retângulos;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  Usa um sistema de coordenadas retangulares cartesianas.></label>
			<br />
			<br />
			
			<h2>6)

Nos levantamentos cadastrais urbanos também podemos empregar o método de posicionamento polar tradicional. A respeito deste método, a alternativa INCORRETA é: </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) Usa um sistema de coordenadas polares ;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)Os ângulos podem ser medidos por teodolito ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)As distâncias podem ser medidas por medidores eletrônicos;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) dEste método usa apenas medições lineares a trena e balizas ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Este método usa medição de ângulos e distâncias horizontais. 

</label>
			<br />
			<br />
			
			<h2>7) 

Os levantamentos cadastrais de propriedades urbanas referem-se à localização dos limites destas e a preparação de desenhos (ou plantas) que mostram estes limites. Para obtenção desta planta ou levantamento de imóvel urbano, marque a única alternativa correta:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)Sempre usar um sistema de coordenadas plano-retangulares arbitrárias ou locais. </label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)Sempre usar escalas pequenas abaixo de 1:100.000, por exemplo;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) Sempre usar escalas médias abaixo de 1/:20.000, por exemplo;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)Nunca usar escalas grandes ou maiores que 1:1000</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)Se existir uma rede de referência cadastral municipal, por exemplo, devem-se usar coordenadas plano-retangulares oficiais, que podem ser obtidas por intermédio de um rastreio com uso de tecnologia GPS</label>
			<br />	
			<br />
		
			<h2>8) 


Qual das alternativas abaixo NÃO faz parte do Cadastro Técnico Multifinalitário:  </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)Coletar e armazenar informações de forma geral do espaço urbano, sem a necessidade de mantê -las atualizadas. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)Implementar e manter atualizado o sistema cartográfico. ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)Fornecer informações aos processos de tomada de decisões inerentes ao planejamento e à gestão urbanos;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)  Tornar mais confiáveis as transações imobiliárias por meio de uma definição precisa da propriedade imobiliária.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)Disponibilizar informações armazenadas para os órgãos públicos e para a sociedade em geral.</label>
			<br />
			<br />
	
			<h2>9) 
A efetivação da inscrição ou a transferência de nome e endereço no cadastro imobiliário, de acordo com a lei vigente, deve ser feita, a partir da data da escritura definitiva ou compromisso de compra e venda do imóvel, no prazo máximo de:</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) 45 dias. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 60 dias. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 30 dias. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 90 dias. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)15 dias.  
.</label>
			<br />
			<br />

			<h2>10)
A Geografia mobiliza diferentes categorias para a análise do espaço geográfico, dentre as quais destaca-se o território. Raffestin e Souza são exemplos de autores que contribuem com o debate sobre essa categoria. Como elementos comuns à problemática apresentada por esses autores está a compreensão de território como : </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)  área geográfica ocupada por uma população de uma mesma espécie, em um mesmo intervalo de tempo;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)limite físico determinado pela jurisprudência estatal, no qual o Estado exerce soberania.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) espaço produzido pelos homens, mediante relações sociais arquitetadas por e a partir de relações de poder.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) porção do espaço ocupado por uma população, que possui os mesmos hábitos culturais;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)área geográfica ocupada por uma população de uma mesma espécie, em um mesmo intervalo de tempo.</label>
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