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
		  window.location.href='Rgenero.php';</script>";
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
			<h1>Prova de português sobre <font color=red>Gênero textual</h1></font>
		</form>
		
		<form id="questoes" action="Pgenero.php" method = "POST">
			<br>
			<h2>1) O texto “O substituto da vida” apresenta características que permitem enquadrá-lo no gênero crônica, pois nele o autor : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) argumenta em favor da máquina de escrever.   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) informa os leitores sobre o trabalho do jornalista.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) registra o cotidiano com humor, crítica e sensibilidade.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) visa transmitir noções relacionadas à ética jornalística.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) argumenta em favor da máquina de escrever.  .</label>
			<br />
			<br />
			
			
			<h2>2) O texto de Rubem Alves é uma crônica. Ao compará-lo com as características desse gênero, só NÃO é correto afirmar: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) O texto assume um caráter narrativo em função, inclusive dos personagens.  ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)O texto assume um caráter poético, simplesmente, em função da referência que faz ao camelo e ao beija-flor. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)  A pergunta retórica “Qual é a diferença?” (5º§) funciona como um convite à reflexão do leitor.  	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Embora apresente uma linguagem mais subjetiva, pode-se apreender, com clareza, a defesa de um posicionamento. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)  Em “A história nos leva para o tempo” (8º§), a presença da primeira pessoa do plural no pronome funciona como estratégia de aproximação com o leitor. ></label>
			<br />
			<br />
			
			<h2>3)

No que se refere ao gênero textual, o texto CG1A1CCC classifica-se como:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) resenha. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)discurso ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) verbete ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) notícia;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) relato histórico.</label>
			<br />
			<br />
			
			<h2>4) Quanto ao gênero, o texto apresenta características de uma:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) crônica. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) Resenha ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) reportagem. .;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) Artigo. ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) texto.</label>
			<br />
			<br />
			
			<h2>5) Quanto ao gênero, o texto apresenta características de  ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) tira.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) charge></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) anúncio.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) fábula></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) artigo></label>
			<br />
			<br />
			
			<h2>6) Diversos gêneros de textos, que seguem padrões mais ou menos rígidos de composição, integram a chamada "correspondência oficial?. No caso da troca de correspondências entre autoridades de mesma hierarquia, a forma recomendada para fechar os textos é: </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)Sem mais;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)  Grato(a);</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) Atenciosamente.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) No aguardo;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Subscrevo-me. </label>
			<br />
			<br />
			
			<h2>7) Identifique abaixo as afirmativas verdadeiras ( V ) e as falsas ( F ) com base no texto 1.

( ) O uso de primeira pessoa do singular ilustra o posicionamento subjetivo do entrevistado no decorrer do texto.
( ) O formato do texto com perguntas e respostas caracteriza o dialogismo do gênero discursivo entrevista.
( ) O entrevistado faz uso de definições genéricas e abstratas, sem fundamentar sua visão em situações práticas e cotidianas.
( ) O entrevistador tece comentários no decorrer da entrevista que complementam a perspectiva do entrevistado.
( ) O entrevistado alterna os pronomes “nós” e “a gente” para designar a primeira pessoa do plural, recurso que torna o texto mais formal do que se usasse apenas “nós”.

Assinale a alternativa que indica a sequência correta, de cima para baixo. </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)F • F • F • F • V;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)F • V • V • V • F;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) V • F • V • V • F;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)V • V • F • F • F;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) V • V • F • V • F.</label>
			<br />	
			<br />
		
			<h2>8) O texto de Mario Vargas Llosa pertence ao gênero denominado.</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)carta.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)ensaio;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) Crônica;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) sinopse. ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) Resenha.</label>
			<br />
			<br />
	
			<h2>9) 
A partir da leitura do texto, podemos inferir que seu autor:
I. Classifica seu texto como uma crônica.
II. Entende que escreveu uma narrativa “palavra puxa palavra”.
III. Se considera um cronista genial.
Está correto o que se afirma:.</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) Apenas no item I ;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B)  Apenas nos itens I e II ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)  Apenas nos itens I e III ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) Nos itens I, II e III ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)Nos itens  II e III .</label>
			<br />
			<br />

			<h2>10) O gênero textual do qual o texto 02 é exemplar é:</h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) Narração ;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) Editorial.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) Propaganda institucional ;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D)Anúncio publicitário;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) Publicidade.</label>
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