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
		  window.location.href='Rintum.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Inglês</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Inglês sobre <font color=red>Interpretação textual</h1></font> 
		</form>
		
		<form id="questoes" action="Pintum.php" method = "POST">
			<br>
			<h2>1) Assinale a letra correspondente à alternativa que preenche
corretamente as lacunas da frase apresentada:
"Did you like the film?"
"No, not very __________."
"__________ was wrong with it?"
"The actors were good but the story was too sentimental.": </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)much – What ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) many – Why   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) few – When;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) little – How 
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)So-where .</label>
			<br />
			<br />
			
			
			<h2>2) 
Assinale a alternativa que preenche corretamente as lacunas
da frase a seguir:
Do politicians work __________ and earn __________
money?: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) little – many></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)Very-much.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) much – few	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Little-much></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) hard-many></label>
			<br />
			<br />
			
			<h2>3)


Assinale a alternativa correta:
It is not easy to learn a foreign language. It requires
__________ years of study.:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)many;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)much.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)little</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)lot of.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) any</label>
			<br />
			<br />
			
			<h2>4)



Assinale a alternativa que preenche corretamente as
lacunas:
Give me __________ tea with __________ sugar.:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) many – much;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) some – a lot of;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) short – many.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) bit – a lot of.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)some – many.</label>
			<br />
			<br />
			
			<h2>5) 

Assinale a alternativa correta:
How __________ shoes are there in the shop windows??</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) much  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B)  many></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)few.></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) a few;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  lot of.></label>
			<br />
			<br />
			
			<h2>6)

Assinale a opção cuja frase esteja gramaticalmente correta: </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)There is fewer people at the party than Mary expected..;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)There is less people at the party than Mary expected..</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)There are less people at the party than Mary expected. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D)There are fewer people at the party than Mary expected.. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) There was less people at the party than Mary expected.

</label>
			<br />
			<br />
			
			<h2>7)
Assinale a alternativa que preenche corretamente a lacuna
da frase adiante:
Must you always make so __________ noise: </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A) much;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)many;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) most;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)few;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)less.
</label>
			<br />	
			<br />
		
			<h2>8) 





The item that presents, respectively, a synonym for BUT and
the opposite of MUCH in "but there is much to be gained" is:: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)nevertheless – anything;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) even though – a few;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) besides – a little;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) however – few</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)yet- little.</label>
			<br />
			<br />
	
			<h2>9) 

These pioneers began a revolution that has culminated in a
firmly established belief among most American employers
that women can do the job – any job – as well as men. Many
thought that day would never come.
– Na frase "Many thought that day would never come", a
palavra mais adequada para completar o sentido de many é: </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A)  beliefs.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) most;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) women.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)  Standards;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) discrimination.

.</label>
			<br />
			<br />

			<h2>10)


We should use __________ time we have available to
discuss John’s proposal: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) the much;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)the little.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) a few.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) a little;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)the little of.</label>
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