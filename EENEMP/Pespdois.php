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
		  window.location.href='Respdois.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Espanhol</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Espanhol sobre <font color=red>Interpretação 2</h1></font> 
		</form>
		
		<form id="questoes" action="Pespdois.php" method = "POST">
			<br>
			<h2>1) “Los tubos de pintura limpios y brillantes contienen un montón de experiencias para mí...
los acaricio con mis manos temblantes de emoción, como deben hacerlo los enamorados...
me veo ya gozar la pintura...”.
In:http://perso.wanadoo.fr/art-deco.france/daliesp.htm
En el fragmento, Dalí reconoce, ya a los 15 años, que su labor artística está llena de: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)sensualidad ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) nacionalidad  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) racionalidad;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  inseguridad;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)insatisfacción.</label>
			<br />
			<br />
			
			
			<h2>2) 

"A seis años quería ser cocina. A siete años, quería ser Napoleón. Desde entonces, mi
ambición no dejó de crecer como mi delirio de grandeza”.
In:http://perso.wanadoo.fr/art-deco.france/daliesp.htm
Leído el fragmento, se percibe que: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) su delirio consistió en querer ser cocina, ya que no hay grandeza en ello;;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) Tambien en verano el color de los patos es llamativo.;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)su ambición ha crecido en la misma proporción que su delirio de grandeza.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Así como en la primavera, en invierno los patos tienen plumaje colorido..></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)ambición y delirio de grandeza son sentimientos antagónicos para Dalí...></label>
			<br />
			<br />
			
			<h2>3)




Según el texto, la era moderna de los Juegos Olímpicos se inicia en:."</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) París en 1894.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)París en 1896.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)Atenas en 1894..</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Atenas en 1896..</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Ginebra en 1894. .</label>
			<br />
			<br />
			
			<h2>4)



En el primer párrafo, el texto:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)estudia las instituciones políticas de Grecia.;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B)nos revela la unidad política del pueblo griego.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)Nos da una idea de cómo competían los atletas.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)nos informa sobre el origen de los Juegos Olímpicos..</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)analiza el significado que los Juegos Olímpicos tenían para el pueblo griego.</label>
			<br />
			<br />
			
			<h2>5) 



En el segundo párrafo leemos que:?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) la duración de los Juegos Olímpicos era de cuatro años.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B)correspondía a los reyes la selección previa de los atletas;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)las pruebas debían realizarse en períodos diferentes de tiempo;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) los juegos comenzaban a organizarse con cierta antecedencia;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  diferentemente de los días actuales, no existía selección previa de atletas.></label>
			<br />
			<br />
			
			<h2>6)

Al valerse de la imagen de Alicia frente al espejo, el autor sugiere ser necesario:?. </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)Huyeron en el primer tren;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)Caminaron con la señora en el andén.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)  Robaron una casa. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D)  Durmieron en la sala de espera. ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E)Charlaron como dos fantasmas..

</label>
			<br />
			<br />
			
			<h2>7) 

Comentar que todo “se está realizando sin que casi la sociedad se de cuenta de ello” (ref.1),
es lo mismo que decir que este proceso ocurre:? </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)casi por cuenta de cada sociedad.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)Contestó muy fastidiado;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) sin la participación popular;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) de una forma casi antidemocrática.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)Trató de levantarse.
</label>
			<br />	
			<br />
		
			<h2>8) 





De acuerdo con el segundo párrafo, la divulgación científica en la mayoría de los países
europeos es?: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)ineficiente;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)  mediocre;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)inexistente;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)escasa.</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)compleja.</label>
			<br />
			<br />
	
			<h2>9) 




Tras la lectura del texto podemos inferir que la ÚNICA alternativa que NO corresponde a la
verdad es?</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) Rosa Lee Parks era conocida como la “madre del movimiento de los derechos civiles en
EE.UU.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B)  Creía tener derechos iguales a de los blancos.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)Fue protagonista de un revoltijo que cambió el sistema de autobuses en Detroit.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) Espacios naturales sin protecció;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) La segunda residencia de los madrileños

.</label>
			<br />
			<br />

			<h2>10)




El autor afirma que “el cine abre un espacio distinto” (ref. 1). Lo “distinto” del cine es: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A) concretar la realidad del mundo en la pantalla porque la función del cine es mezclar?;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) no reproducir el mundo en su realidad, sino reinventarlo y llenar la pantalla con
elementos que mezclen lo real y lo imaginado;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C)evidenciar los hechos concretos de la realidad, transformándolos en un universo nuevo;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D)  transformar la realidad del mundo nuevo en hechos y sensaciones que encarnan lo
imaginario y lo vivido;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)tener como principal preocupación la denuncia de hechos reales que concretan el
proyecto de un mundo nuevo.
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