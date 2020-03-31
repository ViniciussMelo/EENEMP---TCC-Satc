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
		  window.location.href='Rvariacao.php';</script>";
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
			<h1>Prova de português sobre <font color=red>Variação linguística</h1></font>
		</form>
		
		<form id="questoes" action="Pvariacao.php" method = "POST">
			<br>
			<h2>1) A variedade linguística dominante no texto apresenta-se, simultaneamente : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) informal e caracterizada por regionalismo. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  tensa e caracterizada por formalidade. </label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C)descontraída e tendente à norma-padrão.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  sofisticada e tendente à erudição. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) informal e caracterizada por regionalismo. </label>
			<br />
			<br />
			
			
			<h2>2) A linguagem utilizada no texto tende .</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) à variedade formal e à conotação, com interferências significativas da coloquialidade.  ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)à variedade informal e à conotação, com interferências significativas da formalidade. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) à variedade informal e à denotação, sem interferências significativas da formalidade.  ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)à variedade formal e à conotação, com interferências significativas da coloquialidade. .></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)à variedade formal e à denotação, sem interferências significativas da coloquialidade. ></label>
			<br />
			<br />
			
			<h2>3)

Na leitura do fragmento do texto Antigamente constata-se, pelo emprego de palavras obsoletas, que itens lexicais outrora produtivos não mais o são no português brasileiro atual. Esse fenômeno revela que:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) a língua portuguesa de antigamente carecia de termos para se referir a fatos e coisas do cotidiano.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)o português brasileiro se constitui evitando a ampliação do léxico proveniente do português europeu.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) a heterogeneidade do português leva a uma estabilidade do seu léxico no eixo temporal. ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) o português brasileiro apoia-se no léxico inglês para ser reconhecido como língua independente.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) o léxico do português representa uma realidade linguística variável e diversificada.
.</label>
			<br />
			<br />
			
			<h2>4)
Considerando-se o fragmento “desses milhares de meninos que não pediram pra nascer” à luz da modalidade escrita e falada da língua, pode-se constatar o emprego da variação linguística: :</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) Regional  ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) Literária. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) Coloquial.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) Culta. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) Técnica .</label>
			<br />
			<br />
			
			<h2>5) De acordo com o excerto, o desenvolvimento de uma pedagogia da variação linguística ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) prioriza a seleção dos objetos de ensino a partir de uma visão de língua baseada na homogeneidade e na desvalorização dos seus aspectos funcionais e estruturais.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) pressupõe a assunção de uma concepção de ensino produtivo de língua que contemple o trabalho com as variedades constitutivas da norma-padrão, ampliando as habilidades de uso da linguagem do aluno.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) prioriza, nas práticas pedagógicas, as formas léxico-gramaticais das variedades escritas e faladas que constituem a chamada norma-padrão.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) pressupõe a assunção de uma concepção de ensino de língua descritivo o qual leva o aluno a identificar os mecanismos estruturais da língua, privilegiando a variedade escrita culta e a correção formal da linguagem.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)diz-se a assunção de uma concepção de ensino produtivo de língua que contemple o trabalho com as variedades constitutivas da norma-padrão, ampliando as habilidades de uso da linguagem do aluno.></label>
			<br />
			<br />
			
			<h2>6) Nos quinto e sexto parágrafos, a linguagem apresenta-se :</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)em norma-padrão, com interferências localizadas de informalidade. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) em norma-padrão, sem interferências localizadas de informalidade. .;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) em registro informal, com interferências da norma-padrão, em consonância com o gênero discursivo. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) em registro informal, sem interferências da norma-padrão, em consonância com o gênero discursivo. 
.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) em registro formal, com interferências da norma-padrão, em consonância com o gênero discursivo..</label>
			<br />
			<br />
			
			<h2>7) Em São Paulo diz-se “bexigas”, enquanto no Rio de Janeiro diz-se “balões”.

Essa diferença é um exemplo de :</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)linguagem coloquial.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)gíria. ;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C)regionalismo.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) linguagem erudita. ;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) arcaísmo.</label>
			<br />	
			<br />
		
			<h2>8)Assinale o segmento do texto que mostra um emprego de linguagem informal.</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) “Posso falar de arte e artistas outra vez?”. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)Ou quem sabe dou sorte e há um ou outro artista aí fora. ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) O que distingue o artista é a busca incondicional da beleza. ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) Para o bem e para o mal, ela interfere o tempo todo. ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) A objetividade e os bons princípios são temas para outros tipos humanos.</label>
			<br />
			<br />
	
			<h2>9) No texto 2, a presença de traços da linguagem coloquial é visível nos depoimentos; a frase que mostra variante formal é: .</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) Uma luta de boxe é muito mais chocante... (l.11).;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) quando a gente está presente no ginásio;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) é divertido ver um deles cair à sua frente. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) Na TV não tem emoção. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)O sangue é mostrado na nossa cara..</label>
			<br />
			<br />

			<h2>10)No texto em questão observam-se acentuadas marcas de informalidade na linguagem utilizada. Em virtude disso, essa linguagem é  .</h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) inadequada uma vez que na escrita não se admitem marcas linguísticas de informalidade tão acentuadas. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) adequada, apesar das marcas de informalidade, o que não interfere na compreensão da mensagem. .</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) inadequada porque deveria ter sido elaborada numa linguagem mais formal, já que é dirigido a um público de especialistas. ;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) adequada porque o público a quem se dirige não poderia entender a mensagem se escrito em registro um pouco mais formal;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) inadequada porque subentende-se que não foi elaborada por especialista.</label>
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