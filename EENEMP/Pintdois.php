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
		  window.location.href='Rintdois.php';</script>";
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
			<h1>Prova de Inglês sobre <font color=red>Interpretação 2</h1></font> 
		</form>
		
		<form id="questoes" action="Pintdois.php" method = "POST">
			<br>
			<h2>1) I don't like to spend my vacation in the country. There isn't
__________ to do : </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)some  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) Much   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) many ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) nothing 
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)Everything .</label>
			<br />
			<br />
			
			
			<h2>2) 
Choose the option which completes the sentences below
correctly:
It is __________ use trying to change her mind.
Slowly, __________ children began coming to school.
Unfortunately, he had __________ friends.
Could you possibly give me __________ help? </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) a little / a few / few / little.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)a little / a few / little / little.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) a little / few / few / a little	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)little / few / little / a littlea.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)  little / a few / few / a little></label>
			<br />
			<br />
			
			<h2>3)



Indicate the alternative that best completes the following
sentence:
She __________ German very well:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) speaks and both writes;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) both speaks and writes</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)speaks both and writes</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) speaks and write both.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)both speaks and both writes</label>
			<br />
			<br />
			
			<h2>4)



Reescreva corretamente a frase a sentença apresentada a
seguir:
Yes, it does depend on the age of the child.:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) Yes, it really depends on the child's age.;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) Yes, it really depends on an aged child.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) Yes, it really depends on what age have the child.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) Yes, it depends on what age the child does has..</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)Yes, it does depend on what age does the child has..</label>
			<br />
			<br />
			
			<h2>5) 


Escolha a alternativa que melhor interage com a oração
dada:
How do you do?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) I forgot! ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) It is easy!></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)How do you do?></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D)  I don't know.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)But i dont.></label>
			<br />
			<br />
			
			<h2>6)

Which is the suitable answer to this question?
Do you want some ice-cream? </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)Last night.;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)In my pocket.</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)Last Sunday;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) It is not black ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) No, thank you.

</label>
			<br />
			<br />
			
			<h2>7) Qual a forma correta? </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)This book tells me as long the river was;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)This book tells how long the river is;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) This book tells how long the river is ago;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)These books tells me how long the rivers were;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)This book tells me how long the river is.
</label>
			<br />	
			<br />
		
			<h2>8) 




Assinale a alternativa correta:
Why __________ go home now?</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) aren't we;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)  didn't we;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) haven't we;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) don't we</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)wouldn't we.</label>
			<br />
			<br />
	
			<h2>9) 

Assinale a alternativa correta:
He doesn't __________ anymore. </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) smoking;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B)no smoking;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) Smokes;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) smoked;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) Smoke

.</label>
			<br />
			<br />

			<h2>10)

Mark the CORRECT alternative to complete the sentence:
His body __________ in the cemetery: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) lies;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)Laid;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) lays.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) lain;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)lied.</label>
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