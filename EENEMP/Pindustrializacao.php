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
		  window.location.href='Rindustrializacao.php';</script>";
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
			<h1>Prova de Geografia sobre <font color=red>Industrialização</h1></font>
		</form>
		
		<form id="questoes" action="Pindustrializacao.php" method = "POST">
			<br>
			<h2>1)Leia o texto a seguir
[...] Estes sistemas de produção flexível permitiram uma aceleração do ritmo da inovação do produto, ao lado da exploração de nichos de mercado altamente especializados e de pequena escala. [...] O tempo de giro – que sempre é a chave da lucratividade capitalista – foi reduzido de modo dramático pelo uso de novas tecnologias produtivas (automação, robôs) e de novas formas organizacionais. Mas a aceleração do tempo de giro na produção teria sido inútil sem a redução do tempo de giro no consumo. 
HARVEY, David. Condição pós-moderna: uma pesquisa sobre as origens da mudança cultural.12. ed. São Paulo: Loyola, 2003.

No texto, Harvey retrata o modelo de gestão produtiva: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)fordista.   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) taylorista  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C)  pós-fordista.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  Fábril 
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)pós-taylorista.</label>
			<br />
			<br />
			
			
			<h2>2) O estudo do universo das profissões contribui para que o aluno reconheça os diferentes papéis que um indivíduo pode exercer na sociedade. Espacialmente, verifica-se que o agrário e o urbano são complementares no sistema socioeconômico vigente. Embora não haja, atualmente, uma fronteira totalmente definida entre os dois, em função da modernização dos processos produtivos e das relações de trabalho, as atividades econômicas presentes nesses dois espaços, ainda, podem ser setorizadas para fins estatísticos e de compreensão da economia de um país. Dentre as diversas atividades econômicas existentes, pode-se inferir que o agricultor e o operário de uma indústria, participam, respectivamente, dos setores: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) primário e terciário></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)terciário e secundário></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) primário e secundário	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)secundário e terciário></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) secundário e primario></label>
			<br />
			<br />
			
			<h2>3)

Considerando a repartição espacial dos diferentes tipos de tecnologia de acesso fixo à internet no Brasil, observa-se que:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) o acesso por meio de fibra ótica é o mais difundido no país, porém apresenta um forte efeito de fronteira em relação às regiões Sul e Centro-Oeste, em razão da baixa qualidade do serviço;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)o acesso via satélite encontra-se pulverizado em praticamente todo o país, mas, em termos percentuais, constitui a tecnologia preferencial em alguns estados da região Norte;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) o acesso por meio de rádio está concentrado nas regiões metropolitanas do Centro-Sul, porém se estende ao longo do litoral, de sul a nordeste, não alcançando as áreas interiores do território; </label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)o acesso por meio da rede de telefonia fixa efetiva uma proporção baixa de conexões, pois se localiza, prioritariamente, nas capitais estaduais e regiões metropolitanas;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)  o acesso por meio da tecnologia de cabeamento não apresenta concentrações específicas, pois é mais adequado às áreas isoladas ou com entraves técnicos para o uso das tecnologias mais difundidas.</label>
			<br />
			<br />
			
			<h2>4)

A figura e o texto acima tratam das mudanças recentes na dinâmica de integração física e produtiva no entorno da região metropolitana de São Paulo. O deslocamento de instalações industriais para o interior do estado de São Paulo, assim como a intensificação das interações e das trocas econômicas entre as cidades, podem ser mais bem compreendidas pelo conceito de:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) metropolização;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) Megacidade;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)urbanização;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) cidade-região;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)Conurbação.</label>
			<br />
			<br />
			
			<h2>5) 

As principais características da Terceira Revolução Industrial são ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) produção em massa; expansão da manufatura (pequenas empresas); maior acessibilidade às novas tecnologias de produção.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) crescente valorização das matérias-primas; mundialização dos direitos trabalhistas; inclusão da certificação ambiental na linha de produção. ></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)criação do sistema de linhas de produção (fordismo); expansão do emprego industrial; parcerias entre a indústria e produtores artesanais. ></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) intensa mecanização da produção; utilização intensiva de mão de obra barata e pouco qualificada; produtos com baixo conteúdo tecnológico;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) informatização e robotização da produção; redução da mão de obra industrial (desemprego estrutural), novos sistemas produtivos (toyotismo). ></label>
			<br />
			<br />
			
			<h2>6)

Historicamente campo e cidade eram espaços totalmente diferentes e com ínfimas conexões. O espaço do campo era considerado atrasado e o espaço da cidade era o moderno. Tal divisão vem sendo, ao longo das últimas décadas, pouco a pouco desconstruída, pois as conexões entre campo e cidade são cada vez mais fortes, promovendo inclusive características urbanas no campo e vice-versa. Entre os setores a seguir, o principal responsável por essas novas relações espaciais é:</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)rizicultura;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)Agroindustrias;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) produção orgânica. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) extrativismo vegetal. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Agricultura. 

</label>
			<br />
			<br />
			
			<h2>7)Historicamente, os países industrializados têm sido responsáveis pela maior parte das emissões globais de gases do efeito estufa.Os Estados Unidos é o país líder na emissão desses gases. Entretanto, na atualidade, vários países em desenvolvimento, entre eles China, Índia e Brasil, também se posicionam entre os grandes emissores. Mesmo assim, numa base per capita, os países em desenvolvimento continuam tendo emissões mais baixas do que os industrializados. Com dados de 2005, o Brasil se apresenta como o quarto maior emissor de gases do efeito estufa.


Fonte:< www.ipam.org.br>. Adaptado


Entre as causas da elevada emissão de gases realizada pelo Brasil, a principal é:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)investimento em novas usinas nucleares;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)incentivo à indústria automobilística;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) desmatamento promovido por queimadas;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)aumento do uso de biocombustíveis</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) construção de aterros sanitários controlados.</label>
			<br />	
			<br />
		
			<h2>8) 



A partir do final do século XIX, a invenção do pneu e a popularização do automóvel tornaram a borracha um produto de grande valor e de grande procura pelas indústrias. 
No início do século XX, metade da borracha consumida no mundo saía da Amazônia e, logo, o extrativismo do látex tornou-se o motor do processo de organização do espaço na região ao estimular: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)a construção de rodovias, que integraram a região amazônica ao restante do país.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) os investimentos em construção de usinas hidrelétricas, para atender à demanda de energia.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) a construção dos portos de Belém e de Manaus, para exportar a produção de borracha;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)  a incorporação de Rondônia ao território brasileiro e a fundação da cidade Porto Velho;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)a instalação de indústrias de base, que realizavam a transformação do látex em borracha.</label>
			<br />
			<br />
	
			<h2>9) 


A Terceira Revolução Industrial, conhecida como revolução tecnocientífica e informacional, iniciada nas últimas décadas do século XX, impôs ao mundo novas técnicas, novas maneiras de produzir e novos produtos. Uma das principais características desse novo contexto foi o crescente desenvolvimento de empresas de alta tecnologia, cujas inovações permitiram que elas se libertassem das restrições locacionais tradicionais. 
Assinale a opção que indica o fator locacional que atua, de modo decisivo, na estratégia de localização das empresas de alta tecnologia. </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) A concentração de mercado consumidor.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) A presença de mão de obra de menor custo.</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) A proximidade com as fontes de matérias primas.</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) A legislação ambiental mais rigorosa.</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)A qualidade da infraestrutura educacional e cultural.
.</label>
			<br />
			<br />

			<h2>10)
No mundo contemporâneo não basta produzir. É indispensável pôr a produção em movimento, pois agora é a circulação que preside à produção. 

No caso do espaço nacional, é INCORRETO afirmar que, nas últimas décadas, os fluxos:</h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)  aéreos registraram adensamento, tendo sido acompanhados de uma rehierarquização dos nós do sistema aéreo;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)aquaviários refletiram o ingresso do país no mundo globalizado, uma vez que cresceu o volume de carga embarcada para exportação em portos marítimos.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) ferroviários de cargas acusaram redução de volume; ao passo que a natureza da carga transportada se manteve inalterada no tempo e no espaço.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) rodoviários se impuseram como principal sistema de circulação, graças à integração do território pelas estradas e pela expansão quantitativa da frota veicular;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) aéreos registraram adensamento, tendo sido acompanhados de uma rehierarquização dos nós do sistema aéreo.</label>
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