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
		  window.location.href='Rfuncoes.php';</script>";
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
			<h1>Prova de português sobre <font color=red>Funções da linguagem</h1></font>
		</form>
		
		<form id="questoes" action="Pfuncoes.php" method = "POST">
			<br>
			<h2>1) Em “Já deve ter acontecido com você. Sabe quando você está no trabalho, e dois ou três amigos postam fotos de viagem?”, em função da valorização a um elemento da comunicação, predomina qual função da linguagem?  </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)Metalinguística ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) Apelativa. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Referencial. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) Emotiva.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)Fática..</label>
			<br />
			<br />
			
			
			<h2>2) 
“Posso falar de arte e artistas outra vez? Espero que, em algum lugar aí no Brasil, haja leitores e leitoras, mesmo poucos, que se interessem pela figura tão singular e tão fundamental do artista”.

Nesses períodos prevalece a função de linguagem denominada .</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) metalinguística. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)Tudo no universo está sujeito à segunda lei da termodinâmica  ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)  conativa ou apelativa.  	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)poética. ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)  referencial. ></label>
			<br />
			<br />
			
			<h2>3)

A função da linguagem predominante no texto 01 é: </h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Apelativa ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)Emotiva  ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Conotativa ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Referencial ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Emotiva   .</label>
			<br />
			<br />
			
			<h2>4) A função da linguagem predominante no texto 01 é: :</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)Apelativa ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B)  Emotiva  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) Conotativa.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) Referencial . ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) Conotativa. .</label>
			<br />
			<br />
			
			<h2>5) Observando-se a mensagem do texto, pode-se afirmar que a função da linguagem é:  </h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) referencial.   ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) emotiva.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) metalinguística.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) fática.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)apelativa.></label>
			<br />
			<br />
			
			<h2>6) A propaganda presente no quadro acima faz uso do processo da:</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)função fática quando mostra um discurso vazio.;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)  função referencial quando estabelece relação de superioridade ao quiabo.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) metonímia quando utiliza a parte pelo todo. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) intertextualidade, para garantir a qualidade do produto.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) comparação com o mundo dos negócios, pois só assim garante credibilidade ao produto. </label>
			<br />
			<br />
			
			<h2>7) Considerando as ideias e informações trazidas ao texto, marque V para as afirmativas verdadeiras e F para as falsas para o que se afirma a seguir:

( ) O caráter metalinguístico do texto configura-se mediante estratégia utilizada no primeiro parágrafo cuja análise literária antecipa o assunto a ser tratado.
( ) Dentre os elementos que contribuem para a interpretação jurídica através da Literatura, a linguagem se apresenta como protagonista no processo de interação entre tais matérias.
( ) A Literatura possui um papel fundamental na sociedade contemporânea, não apenas no que diz respeito à arte da palavra, mas também como base argumentativa para a aplicação do Direito.

A sequência está correta em :</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)F, F, V.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) F, V, F. ;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) F, V, V.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)V, V, V.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) V, F, V.</label>
			<br />	
			<br />
		
			<h2>8) 
Em relação a essa charge, analise as afirmativas.

I - O aluno, na sua fala, usa a função fática da linguagem.
II - Na sua fala, a professora recorre à função apelativa da linguagem.
III - Na fala do aluno, o emprego da forma verbal revela desconhecimento de quem praticou a ação constatada por ele.
IV - O efeito de sentido se estabelece pela relação paradoxal entre o significado da palavra ética e a ação constatada pelo aluno.

Está correto o que se afirma em .</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)II, III e IV, apenas. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)I e IV, apenas. 	;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) I, II e III, apenas.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) III e IV, apenas.  
;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) III e V, apenas.  
.</label>
			<br />
			<br />
	
			<h2>9) A função de linguagem predominante no texto é a: </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A)  Conativa. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) Emotiva.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) Metalinguística.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) Nenhuma das alternativas. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)Emotiva.</label>
			<br />
			<br />

			<h2>10)
Leminski, em Despropósito geral, trata da composição de poemas, segundo o eu lírico, obras-primas. Essa função da linguagem – no caso, a poesia que fala do fazer poético – denomina-se Função   .</h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)  Fática;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) Poética. </label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) Referencial.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) Metalinguística;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) Poética.</label>
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