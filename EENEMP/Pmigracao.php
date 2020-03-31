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
		  window.location.href='Rmigracao.php';</script>";
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
			<h1>Prova de Geografia sobre <font color=red>Migração</h1></font>
		</form>
		
		<form id="questoes" action="Pmigracao.php" method = "POST">
			<br>
			<h2>1) A presença de uma corrente migratória por si só não explica a condição de vida dos imigrantes. Esta será somente a aparência de um fenômeno mais profundo, estruturado em relações socioeconômicas muitas vezes perversas. É o que podemos dizer dos indivíduos que são deslocados do campo para as cidades e obrigados a viver em condições de vida culturalmente diferentes das que vivenciaram em seu lugar de origem.
SCARLATO, F. C. População e urbanização brasileira. In: ROSS, J. L. S. Geografia do Brasil. São Paulo: Edusp, 2009.
O texto faz referência a um movimento migratório que reflete o(a): </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)processo de deslocamento de trabalhadores motivados pelo aumento da oferta de empregos no campo  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)dinâmica experimentada por grande quantidade de pessoas, que resultou no inchaço das grandes cidades   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C)  permuta de locais específicos, obedecendo a fatores cíclicos naturais;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  circulação de pessoas diariamente em função do emprego  
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)cultura de localização itinerante no espaço.</label>
			<br />
			<br />
			
			
			<h2>2) 
      Em 1935, o governo brasileiro começou a negar vistos a judeus. Posteriormente, durante o Estado Novo, uma circular secreta proibiu a concessão de vistos a “pessoas de origem semita”, inclusive turistas e negociantes, o que causou uma queda de 75% da imigração judaica ao longo daquele ano. Entretanto, mesmo com as imposições da lei, muitos judeus continuaram entrando ilegalmente no país durante a guerra e as ameaças de deportação em massa nunca foram concretizadas, apesar da extradição de alguns indivíduos por sua militância política.
GRIMBERG, K. Nova língua interior: 500 anos de história dos judeus no Brasil. In: IBGE. Brasil: 500 anos de povoamento. Rio de Janeiro: IBGE, 2000 (adaptado).
Uma razão para a adoção da política de imigração mencionada no texto foi o(a): </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)   receio do controle sionista sobre a economia nacional. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)reserva de postos de trabalho para a mão de obra local. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) oposição do clero católico à expansão de novas religiões. 	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)apoio da diplomacia varguista às opiniões dos líderes árabes.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) simpatia de membros da burocracia pelo projeto totalitário alemão. ></label>
			<br />
			<br />
			
			<h2>3)

O fluxo migratório representado está associado ao processo de:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) fuga de áreas degradadas.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)inversão da hierarquia urbana.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)busca por amenidades ambientais.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)conurbação entre municípios contíguos;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) desconcentração dos investimentos produtivos. .</label>
			<br />
			<br />
			
			<h2>4)A letra dessa canção reflete elementos identitários que representam a :</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)valorização das características naturais do Sertão nordestino;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) denúncia da precariedade social provocada pela seca;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)experiência de deslocamento vivenciada pelo migrante;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) profunda desigualdade social entre as regiões brasileiras ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)discriminação dos nordestinos nos grandes centros urbanos.</label>
			<br />
			<br />
			
			<h2>5) 

O trecho da música faz referência a uma importante obra na região do rio São Francisco. Uma consequência socioespacial dessa construção foi ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) a migração forçada da população ribeirinha.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B)o rebaixamento do nível do lençol freático local.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)a preservação da memória histórica da região></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) a ampliação das áreas de clima árido.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) a redução das áreas de agricultura irrigada..></label>
			<br />
			<br />
			
			<h2>6)

A migração pode ser definida como: </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)A entrada de migrantes em um determinado país.;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)A saída de migrantes de um determinado país para outro.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) A saída de migrantes de um determinado país para outro. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) As políticas públicas de controle de natalidade implantadas pelo governo para controlar o crescimento populacional. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Qualquer deslocamento espacial realizado por uma pessoa ou por parte de uma população.


</label>
			<br />
			<br />
			
			<h2>7) 
Quando um indivíduo sai de um país em busca de melhores condições de vida, ele recebe o nome de::</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)emigrante.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)forasteiro.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) imigrante.</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)peregrino.</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) gringo.</label>
			<br />	
			<br />
		
			<h2>8) 



Migração é o deslocamento espacial de um indivíduo ou de parte da população de um lugar para outro. A principal causa da migração no mundo e no Brasil tem origem:</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)econômica.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)política.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)cultural.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)  ambiental.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)religiosa..</label>
			<br />
			<br />
	
			<h2>9) 


(UCB) No que se refere às migrações brasileiras, julgue os itens a seguir:</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) A desconcentração industrial é uma das principais causas da freada na migração interna do Brasil;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) Atualmente o Centro-Oeste é a região brasileira que mais retém migrantes.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) A melhoria dos sistemas de transporte e de comunicação aumentou a concentração industrial nos grandes centros urbanos brasileiros, que continuam atraindo grandes contingentes migratórios.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)A transumância é o movimento migratório invertido, ou seja, as pessoas abandonam os grandes centros e buscam fixar-se em cidades pequenas ou médias.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)No movimento pendular, uma determinada população deixa o seu domicílio pela manhã para trabalhar em outra cidade ou região e retorna ao término do dia.
			<br />
			<br />

			<h2>10)

O deslocamento diário de pessoas para estudar ou trabalhar em outra cidade, estado ou país não se trata propriamente de uma migração, pois é uma transferência momentânea. Ocorre comumente nas regiões metropolitanas.
A que movimento migratório refere-se o fragmento acima? </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) nomadismo;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)transumância</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) Diaspora.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) êxodo urbano;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)Migração pendular.</label>
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