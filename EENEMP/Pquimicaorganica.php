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
		  window.location.href='Rquimicaorganica.php';</script>";
          die();

	}

?>

<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Quimica</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Quimica sobre <font color=red>Química orgânica</h1></font>
		</form>
		
		<form id="questoes" action="Pquimicaorganica.php" method = "POST">
			<br>
			<h2>1)O oseltamivir, é o princípio ativo do antiviral Tamiflu® que é utilizado no 

tratamento da gripe A (H1N1). Assinale a opção que NÃO indica uma função orgânica 

presente na estrutura da molécula do oseltamivir. </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 	
Amina primária.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) 	
Éter.</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 
 	
Éster.</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) 	
Amida.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) 	
Aldeído.</label>
			<br />
			<br />
			
			
			<h2>2-O colesterol dá origem à testosterona, um hormônio ligado ao desenvolvimento sexual, 

e ao estradiol, que regula as funções sexuais.</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) 	
o estradiol e a testosterona não possuem carbonoassimétrico;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) 	
a testosterona é uma substância aromática.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) 	
ambas as substâncias possuem carbonos com hibridização sp;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) em ambas as substâncias, pode-se identificar duplas ligações conjugadas.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) as duas substâncias possuem grupo carbonila.. ></label>
			<br />
			<br />
			
			<h2>3- A sibutraminaé um fármaco controlado pela Agência Nacional de Vigilância Sanitária 

que tem por finalidade agir como moderador de apetite:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) trata-se de uma substância aromática;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) identifica-se um elemento da família dos halogênios em sua estrutura;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) sua fórmula molecular é C12H11NCl;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)identifica-se uma amina terciária em sua estrutura;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)identifica-se a presença de ligações π em sua estrutura.</label>
			<br />
			<br />
			
			<h2>4) Fluorquinolonas constituem uma classe de antibióticos capazes de combater diferentes 

tipos de bactérias. A norfloxacina, a esparfloxacina e a levofloxacina são alguns dos 

membros da família das fluorquinolonas.

De acordo com as informações acima, é incorreto afirmar que:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) a norfloxacina apresenta um grupo funcional cetona em sua estrutura.;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) a norfloxacina e a esparfloxacina apresentam os grupos funcionais amina e ácido 

carboxílico em comum.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C)a esparfloxacina apresenta cadeia carbônica insaturada;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)a norfloxacina e a levofloxacina apresentam grupo funcional amida.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) a levofloxacina apresenta anel aromático.</label>
			<br />
			<br />
			
			<h2>5- A dipirona sódica e o paracetamol são fármacos que se encontram presentes em 

medicamentos analgésicos e antiinflamatórios.Considerando a estrutura de cada 

composto, as ligações químicas, os grupamentos funcionais e a quantidade de átomos de 

cada elemento nas moléculas, marque a opção correta.</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A) A dipirona sódica é uma substância insolúvel em água.
;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) Apenas o paracetamol é uma substância aromática;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C)A massa molecular da dipirona sódica é menor que a do paracetamol;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) Na dipirona sódica, identifica-se um grupo sulfônico;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) O paracetamol e a dipirona sódica são aminoácidos.></label>
			<br />
			<br />
			
			<h2>6-Em um experimento, alunos associaram os odores de alguns ésteres a aromas 

característicos de alimentos, como, por exemplo:

Analisando a fórmula estrutural dos ésteres apresentados, pode-se dizer que, dentre 

eles, os que têm cheiro de:</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) maçã e abacaxi são isômeros;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) banana e pepino são preparados com álcoois secundários.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) pepino e maçã são heptanoatos;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) pepino e pera são ésteres do mesmo ácido carboxílico;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E)pera e banana possuem, cada qual, um carbono assimétrico.</label>
			<br />
			<br />
			
			<h2>7) Nossos corpos podem sintetizar onze aminoácidos em quantidades suficientes para 

nossas necessidades. Não podemos, porém, produzir as proteínas para a vida a não ser 

ingerindo os outros nove, conhecidos como aminoácidos essenciais:</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A) Álcool e amida.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) Éter e éster;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) Ácido orgânico e amida;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) Ácido orgânico e amina primária;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) Amina primária e aldeído.</label>
			<br />	
			<br />
		
			<h2>8) Considerando as funções orgânicas circuladas e numeradas presentes nas moléculas 

abaixo:</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) No composto 3 a função orgânica circulada 4 representa um álcool.
;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) No composto 1 a função orgânica circulada 1 representa uma amina.
;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) No composto 2 a função orgânica circulada 3 representa um éter.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) No composto 3 a função orgânica circulada 6 representa um álcool;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) No composto 3 a função orgânica circulada 5 representa um ácido carboxílico.</label>
			<br />
			<br />
	
			<h2>9) A estrutura dos compostos orgânicos pode ser representada de diferentes 

modos. Analise estas quatro fórmulas estruturais:


A partir dessa análise, é CORRETO afirmar que o número de compostos diferentes 

representados nesse conjunto é:</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) 	 
1;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 	
2;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 	
3;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 	
4;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 5;.</label>
			<br />
			<br />

			<h2>10-Analise a fórmula estrutural da aureomicina, substância produzida por um fungo e 

usada como antibiótico no tratamento de diversas infecções:


A partir da análise dessa fórmula estrutural, é CORRETO afirmar que a aureomicina 

apresenta funções carbonílicas do tipo:</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A) 	
ácido carboxílico e aldeído.;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> 
B) 	
aldeído e éster.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 	
amida e cetona.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 	
cetona e éster.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> D) 	
aldeido e cetona.</label>
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