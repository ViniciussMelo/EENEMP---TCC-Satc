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
		  window.location.href='Resptres.php';</script>";
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
			<h1>Prova de Espanhol sobre <font color=red>Interpretação 3</h1></font> 
		</form>
		
		<form id="questoes" action="Pesptres.php" method = "POST">
			<br>
			<h2>1) En la publicidad, se justifica lo dicho en el primer bloque:: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)porque la distancia entre las universidades es muy corta.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) porque cada una ofrece un tipo de especialización.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) porque las personas prefieren una formación más sólida.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  porque el acceso a todas es virtual.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)No se justifica, es una paradoja..</label>
			<br />
			<br />
			
			
			<h2>2) 

"La lectura de la historieta de Quino permite afirmar que: </h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)  Adán está encantado con el regalo que le hace Diós;></label>
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



Sería incorrecto decir que:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)Eva no participa lo más mínimo en la historieta, es casi una figura de adorno en la
historia.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)Adán se siente defraudado con el regalo que Diós le hace.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)a Diós le parece que Adán es un poco tonto en sus exigencias.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)Adán prefiere tener una madre antes de tener a Eva.</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Eva está contentísima con la elección de Adán.</label>
			<br />
			<br />
			
			<h2>4)





Marque la alternativa que completa, correcta y respectivamente, los huecos del texto a
seguir.</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)confiada e inocente - como esa - lo vió;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B)confiada e inocente - como esa - le vió;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)confiada e inocente - como ésa - lo vio</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)confiada y inocente - como esa - la vio</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)confiada y inocente - como ésa - la vió</label>
			<br />
			<br />
			
			<h2>5) 



De acordo com o texto, segundo dados do Instituto Cervantesr ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) 80% dos alunos do ensino primário nos EUA preferem o espanhol.  ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 90% dos alunos do ensino secundário nos EUA difundem a língua espanhola.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 80% dos alunos do ensino secundário nos EUA decidem-se pelo espanhol.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 90% dos alunos do ensino primário nos EUA elogiam a língua espanhola.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  80% dos alunos do ensino secundário divulgam o espanhol..></label>
			<br />
			<br />
			
			<h2>6)

MLa expresión “meter en cintura” que aparece en la línea 33/34 del texto signi?ca?. </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)Hmatarlas en el aire.;</label> 
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
			<input type="radio" name="questao6" value="e" /> E)someter a una conducta que se considera correcta.

</label>
			<br />
			<br />
			
			<h2>7) 

Um casal de turistas uruguaios estava conversando enquanto passeava pelo Rio de Janeiro. A moça disse ao rapaz: “Tenemos que llegar muy temprano a la playa.”. Um brasileiro que passava próximo a eles tentava imaginar qual era o significado dessa fala.

Assinale a alternativa que traz a tradução mais adequada para a fala da turista: </h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)Temos que chegar muito juntos à praia.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)Temos que chegar bem junto à praia.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) Temos que chegar mais tarde à praia.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)Temos que chegar bem cedo à praia.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)Temos que chegar e ficar muito tempo na praia.
</label>
			<br />	
			<br />
		
			<h2>8) 





En el Texto I, se ve lo siguiente:
“No obstante, a la espera de que la Comunidad de Madrid cumpla con su compromiso educativo, en el momento de la determinación del 35% del currículo que le compete, requerimos que apueste por una enseñanza de calidad." (líneas 46-50)
¿Qué puede sustituir la expresión en destaque, sin perjuicio a la comprensión?: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)Así que;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) Sino;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)Mientras;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)Sin embargo.</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) Siempre y cuando.</label>
			<br />
			<br />
	
			<h2>9) 




“Sin embargo, la OMS apunta que Perú es uno de los 77 países que no cuenta con cifras fiables sobre las causas de las muertes registradas.”

A conjunção sublinhada acima equivale, em Português, a:</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) Sendo assim;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B)  Sem dúvida;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)No entanto;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) Portantó;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)Logo

.</label>
			<br />
			<br />

			<h2>10)





El sentido del primer párrafo del texto se mantendría inalterado si la palabra “aunque” se sustituyera por:: </h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)más;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) Pero</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C)igual;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) Aun;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)todavía
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