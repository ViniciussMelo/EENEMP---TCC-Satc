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
		  window.location.href='Rcoesao.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Português</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de português sobre <font color=red>Coesão e coerência</h1></font>
		</form>
		
		<form id="questoes" action="Pcoesao.php" method = "POST">
			<br>
			<h2>1) Os  períodos  a  seguir  estão  em  ordem  diferente  daquela  em  que  foram  colocados  no  texto  original,  disponível  em http://www.cienciahoje.org.br/noticia/v/ler/id/4925/n/aventuras_de_uma_cientista_portuguesa,  e  são  referência para a próxima questão. 

( 1 ) O projeto, chamado Inpact, tem como objetivo o desenvolvimento pré-clínico de fármacos inovadores específicos para determinados tipos de câncer e bactérias patogênicas.
( 2 ) Como parte dessa colaboração, profissionais do ICH estão dando treinamento em divulgação científica a uma jovem pesquisadora portuguesa que veio ao Brasil para expandir seus conhecimentos.
( 3 ) Divulgar a ciência feita nas universidades e outros centros de pesquisa para a sociedade é uma tarefa fundamental para todo cientista.
( 4 ) Para isso, reúne conhecimento e tecnologias provenientes tanto de universidades como de empresas de vários setores, proporcionando um ambiente de cooperação muito propício à criação dos novos fármacos.
( 5 ) Por isso, o Instituto Ciência Hoje colocou toda a sua experiência nessa área à disposição de um projeto internacional que visa à criação de novos fármacos e reúne instituições de cinco países.

Assinale a alternativa que apresenta a sequência CORRETA, de cima para baixo, em que devem aparecer os períodos, a fim de formar um texto coeso e coerente. : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 3 – 5 – 2 – 1 – 4. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  1 – 3 – 4 – 5 – 2. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 2 – 4 – 3 – 5 – 1. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  1 – 5 – 4 – 3 – 2.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)2 – 5 – 1 – 2 – 3. .</label>
			<br />
			<br />
			
			
			<h2>2) Assinale a alternativa em que a expressão destacada a seguir está empregada em DESACORDO com as recomendações da norma gramatical. .</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) ao meio-dia tem dois e à tarde tem três [...]. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)Tudo no universo está sujeito à segunda lei da termodinâmica [...]. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)  aumentar [...] a sua expectativa de vida, através de melhor nutrição [...]. 	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)que determina o fluxo do tempo e traz a velhice.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)  mítica “fonte da juventude”, cujas águas seriam capazes de rejuvenescer></label>
			<br />
			<br />
			
			<h2>3)

“Casas construídas em áreas próximas de córregos e rios também estão sujeitas a alagamentos quando há muita chuva em um período curto de tempo. Além disso, por conta dos esgotos que muitas vezes são jogados nos rios, as pessoas que vivem nesses locais ficam sujeitas a contrair doenças.”

Todos os termos sublinhados estabelecem coesão com termos anteriores. Assinale a opção que indica o referente anterior de forma adequada:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Casas / nesses locais ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)disso / construção de casas próximas de córregos e rios ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) que / esgotos ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) que / casas;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) nesses locais / áreas próximas de córregos e rios .</label>
			<br />
			<br />
			
			<h2>4) O segmento do texto que não indica uma consequência de algo anteriormente citado é:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) “dificulta a construção das casas”. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) "pode colocar em risco a vida dos moradores”. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) “a água pode fazer com que a terra deslize”.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) “estão sujeitas a alagamentos”. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) “são carregadas com ela as casas construídas”. .</label>
			<br />
			<br />
			
			<h2>5) “Temos uma notícia triste: o coração não é o órgão do amor! Ao contrário do que dizem, não é ali que moram os sentimentos. Puxa, para que serve ele, afinal? Calma, não jogue o coração para escanteio, ele é superimportante. ´É um órgão vital. É dele a função de bombear sangue para todas as células de nosso corpo´, explica Sérgio Jardim, cardiologista do Hospital do Coração”.

Dentre os termos sublinhados, assinale a opção que indica o termo que não se refere a nenhum termo anterior. ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) que  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) ali></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) ele></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) dele></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) nosso></label>
			<br />
			<br />
			
			<h2>6) No primeiro parágrafo do texto CB1A1AAA, o referente da forma pronominal “sua” (l.7) é</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)“significado” (l.6).;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) “a palavra cidadania” (l. 4 e 5).;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) “Esse largo uso” (l.5).;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) “vários empregos” (l.6).;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) “vários largados” (l.6)..</label>
			<br />
			<br />
			
			<h2>7) No primeiro parágrafo do texto CB1A1AAA, o referente da forma pronominal “sua” (l.7) é:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)“Esse largo uso” (l.5).;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)“vários empregos” (l.6);</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) “significado” (l.6).;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)“a palavra cidadania”;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) “a palavra significao”</label>
			<br />	
			<br />
		
			<h2>8) No texto CB3A1BBB, o vocábulo “Isso” (l.9) remete à.</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)velocidade característica de Bolt, que poderia ser mais bem aproveitada no futebol.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)vontade de trocar de esporte manifestada por diversos atletas olímpicos.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) cena hipotética imaginada na qual Usain Bolt atua como jogador de futebol.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) intenção de Bolt de deixar as pistas de atletismo para se dedicar ao futebol;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) intenção de Bolt de deixar as pistas de atletismo para se dedicar ao futebol.</label>
			<br />
			<br />
	
			<h2>9) No texto CB3A1BBB, o pronome este, na contração “Neste” (l.12),refere-se a.</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) “dia seguinte” (l.11).;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) “um eletrizante sorteio”;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) “o time de vôlei”;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) “evento de abertura”;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)“evento de volei”.</label>
			<br />
			<br />

			<h2>10) No último parágrafo do texto CG1A1CCC, a forma pronominal “la”, em “apontá-la” .</h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) “a ruína da justiça” (l.14).;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) “autoria incontroversa” (l.18)..</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) “ação dos homens públicos” (l.15).;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) “falta de punição” (l. 17 e 18).;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) “a mais grave de todas as ruínas” (l.16).</label>
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