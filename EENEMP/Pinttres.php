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
		  window.location.href='Rinttres.php';</script>";
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
			<h1>Prova de Inglês sobre <font color=red>Interpretação 3</h1></font> 
		</form>
		
		<form id="questoes" action="Pinttres.php" method = "POST">
			<br>
			<h2>1) When children are frequently exposed to violent scenes on
TV, they __________ about violence anymore because they
__________ anything wrong in it.: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)care – don't see ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) don't care – can't see   ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) don't care – didn't see ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)   didn't care – couldn't see  
.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)don't care – couldn't see.</label>
			<br />
			<br />
			
			
			<h2>2) 
Children's interest in TV __________ between ages of 5 and
10.: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) keeps on growing;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)kept on grow;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) is keeping in growing	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Keep.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) keeps to grow.></label>
			<br />
			<br />
			
			<h2>3)



A: How do you like your coffee?
B: __________:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Only if you're having one too;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)Strong, with 2 spoonfuls of sugar, please..</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)Please do. I'm very hungry..</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)Come on now. You can't be serious..</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) No, thanks. I'm on a diet..</label>
			<br />
			<br />
			
			<h2>4)



Choose the alternative with the right sentences:
I. Why don't you cut the orange yourself?
II. You must learn how to speak English well.
III. He is just likes my father.
IV. I do not know like to sing this song.
V. They cut each other with a knife:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) I, II, IV;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) II, III, V;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)II, III, IV.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)I, II, V.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)I, IV, V.</label>
			<br />
			<br />
			
			<h2>5) 



In the sentence, "biological agents do not survive well", the
use of the Present Tense implies ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) doubt.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) condition;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)probability;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D)objectivity;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) certaint.></label>
			<br />
			<br />
			
			<h2>6)

When Carlos has a headache, he __________ some tea. </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) is drinking;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)Drank;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) used to drink ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) drinks ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) would drink.

</label>
			<br />
			<br />
			
			<h2>7) Choose the best alternative to answer the question below:
What do you do? </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A) We are pilots.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)I’m fine, thanks;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C)  I live in New York;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)We are 20 years old;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)We are new york.
</label>
			<br />	
			<br />
		
			<h2>8) 




The stepmother smiled and said: “Of course you __________
go, Cinderella. If you __________ your work first and if you
__________ a dress to wear.”: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)may – do – have;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) could – was – bought;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) might – are doing – lend;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)ought to – would finish – washed</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)Might - make - had.</label>
			<br />
			<br />
	
			<h2>9) 



Complete:
The population of the world is __________:</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) going;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) covering;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)finding;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) Growing;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) beginning

.</label>
			<br />
			<br />

			<h2>10)



Em inglês, "Você está esperando alguma carta?" seria: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)Have you been waiting for a chart?;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)Are you expecting a letter?</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) Are you attending any lecture?;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) Are you staying for the lecture?;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)Have you been hoping for a lecture?
</label>
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