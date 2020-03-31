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
		  window.location.href='Respum.php';</script>";
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
			<h1>Prova de Espanhol sobre <font color=red>Interpretação 1</h1></font> 
		</form>
		
		<form id="questoes" action="Pespum.php" method = "POST">
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

"Sólo en primavera lucen los machos adultos plumajes de llamativos colores."
La oración que equivale a la anterior es: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) En primavera las plumas de los patos machos presentan colores llamativos.;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) Tambien en verano el color de los patos es llamativo.;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) Unicamente en la primavera los patos tienen plumaje colorido.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Así como en la primavera, en invierno los patos tienen plumaje colorido..></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)Unicamente en la primavera los patos machos no cambian el color de sus plumas..></label>
			<br />
			<br />
			
			<h2>3)



El desorrollo de las investigaciones de "taxonomía folk..."</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) convierte México en pionero de los estudios de esa area.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)influencia la criación de dialectos y lenguajes.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)influencia los trabajos de biólogos, antropólogos y agrónomos.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)produce muchos diccionarios y estudios antropológicos.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) produce progreso económico y de identidad nacional.</label>
			<br />
			<br />
			
			<h2>4)



En México conviven varias etnías, por ejemplo:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)Folk, mayas, náhual, tzeltales.;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B)Del Passo, folk, mayas, nahuas.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)Yucatán, mayas, náhual, tzeltales..</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)Nahuas, Yacután, Chiapas, tzeltales.</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)Mayas, náhual, tzeltales, nahuas.</label>
			<br />
			<br />
			
			<h2>5) 



El estudio de la sistemática precientífica generalmente es hecho por ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) antropólogos, biólogos y médicos.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B)antropólogos, biólogos y agrónomos;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)antropólogos, ecólogos y economistas;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) agrónomos, biólogos y médicos;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  agrónomos, biólogos y médicos.></label>
			<br />
			<br />
			
			<h2>6)

Marque la alternativa CORRECTA.
¿Que hicieron juntos Costa Y Wright?. </h2>
			
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
			
			<h2>7) ¿Como reaccionó Costa cuando una señora se sentó a su lado y le dió conversación? </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)Se puso a bostezar para fingir que tenia sueño;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)Contestó muy fastidiado.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) Fue a dormirse;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) Empezó a conversar con un fantasma;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)Trató de levantarse.
</label>
			<br />	
			<br />
		
			<h2>8) 




Según el texto, ¿Cuáles son las dos líneas principales de problemas madrileños?: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)Atentados ecológicos y terroristas.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) La polución industrial y urbana sobre los rios y la explosión urbanística;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)Pequeños espacios y gestión.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)Falta de espacios naturales y la segunda residencia.</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) Conservación y declaración de espacios naturales.</label>
			<br />
			<br />
	
			<h2>9) 



Según el texto, ¿Qué está llenando el espacio rural madrileño?:</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A)  La polución y erosión de los rios;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B)  Los cultivos y bosques;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)Espacios naturales protegidos;</label>
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



La frase “empieza a doler” (ref. 1) en el texto se refiere a: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)el final del proceso de dolor?;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) proceso intermedio de dolor?</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C)sin ningún tipo de dolor?;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) el inicio del proceso de dolor?;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)el inicio del proceso de dolor.
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