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
		  window.location.href='Rondulatoria.php';</script>";
          die();

	}

?>

<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Física</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Física sobre <font color=red>Ondulatória</h1></font>
		</form>
		
		<form id="questoes" action="Pondulatoria.php" method = "POST">
			<br>
			<h2>1) Uma pessoa toca no piano uma tecla correspondente à nota mi e, em seguida, a que corresponde a sol. Pode-se afirmar que serão ouvidos dois sons diferentes porque as ondas sonoras correspondentes a essas notas têm:</h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)amplitudes diferentes;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) frequências diferentes;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) intensidades diferentes;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)  timbres diferentes;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)velocidade de propagação diferentes.</label>
			<br />
			<br />
			
			
			<h2>2- Diante de uma grande parede vertical, um garoto bate palmas e recebe o eco um segundo depois. Se a velocidade do som no ar é 340 m/s, o garoto pode concluir que a parede está situada a uma distância aproximada de:.</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)17 m;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)34 m.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) 68 m.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)170 m ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)340 m. ></label>
			<br />
			<br />
			
			<h2>3- A respeito da classificação das ondas, marque a alternativa incorreta:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) As ondas classificadas como longitudinais possuem vibração paralela à propagação. Um exemplo desse tipo de onda é o som.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)O som é uma onda mecânica, longitudinal e tridimensional.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Todas as ondas eletromagnéticas são transversais.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)A frequência representa o número de ondas geradas dentro de um intervalo de tempo específico. A unidade Hz (Hertz) significa ondas geradas por segundo.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)Quanto à sua natureza, as ondas podem ser classificadas em mecânicas, eletromagnéticas, transversais e longitudinais.</label>
			<br />
			<br />
			
			<h2>4)  Uma determinada fonte gera 3600 ondas por minuto com comprimento de onda igual a 10 m. Determine a velocidade de propagação dessas ondas. </h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)  500 m/s  ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 360 m/s  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)  600 m/s  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) 60 m/s;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)  100 m/s .</label>
			<br />
			<br />
			
			<h2>5-
  A respeito das características das ondas, marque a alternativa errada.?</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A)Ondas sonoras e ondas sísmicas são exemplos de ondas mecânicas.
 ;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) A descrição do comportamento das ondas mecânicas é feita pelas leis de Newton.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)  As ondas eletromagnéticas resultam da combinação de um campo elétrico com um campo magnético. ;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) A descrição das ondas eletromagnéticas é feita por meio das equações de Maxwell.	;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) Quanto à direção de propagação, as ondas geradas em um lago pela queda de uma pedra na água são classificadas como tridimensionais.></label>
			<br />
			<br />
			
			<h2>6-
O som mais grave que o ouvido humano é capaz de ouvir possui comprimento de onda igual a 17 m. Sendo assim, determine a mínima frequência capaz de ser percebida pelo ouvido humano.

Dados: Velocidade do som no ar = 340 m/s</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)  10 Hz;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)  15 Hz;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)17 Hz.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D)20 Hz;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E)34 Hz</label>
			<br />
			<br />
			
			<h2>7) 


 Um pulso ondulatório senoidal é produzido em uma extremidade de uma corda longa e se propaga em toda a sua extensão. A onda possui uma freqüência de 50 Hz e comprimento de onda 0,5m. O tempo que a onda leva para percorrer uma distância de 10m na corda vale, em segundos::</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A)  0,2.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 0,4;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 0,6.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) 0,7;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) 0,9.</label>
			<br />	
			<br />
		
			<h2>8) 
Considere as seguintes afirmações sobre os fenômenos ondulatórios e suas características:
I. A difração ocorre apenas com ondas sonoras.
II. A interferência ocorre apenas com ondas eletromagnéticas.
III. A polarização ocorre apenas com ondas transversais.
Quais estão corretas?:</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) Apenas I;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)Apenas II;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)Apenas III;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) Apenas I e II;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) I, II e III..</label>
			<br />
			<br />
	
			<h2>9) 
As notas musicais podem ser agrupadas de modo a formar um conjunto. Esse conjunto pode formar uma escala musical. Dentre as diversas escalas existentes, a mais difundida é a escala diatônica, que utiliza as notas denominadas dó, ré, mi, fá, sol, lá e si. Essas notas estão organizadas em ordem crescente de alturas, sendo a nota dó a mais baixa e a nota si a mais alta.
Considerando uma mesma oitava, a nota si é a que tem menor ?</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) amplitude. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) frequência. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) velocidade. ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)intensidade.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)comprimento de onda. .</label>
			<br />
			<br />

			<h2>
Ao ouvir uma flauta e um piano emitindo a mesma nota musical, consegue-se diferenciar esses instrumentos um do outro. 

Essa diferenciação se deve principalmente ao(à)</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A)  intensidade sonora do som de cada instrumento musical.;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) potência sonora do som emitido pelos diferentes instrumentos musicais.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C)diferente velocidade de propagação do som emitido por cada instrumento musical.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) timbre do som, que faz com que os formatos das ondas de cada instrumento sejam diferentes;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)  altura do som, que possui diferentes frequências para diferentes instrumentos musicais.</label>
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