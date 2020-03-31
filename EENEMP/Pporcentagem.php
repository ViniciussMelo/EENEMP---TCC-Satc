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
		  window.location.href='Rporcentagem.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de matemática</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de matemática sobre <font color=red>Porcentagem</h1></font>
		</form>
		
		<form id="questoes" action="Pporcentagem.php" method = "POST">
			<br>
			<h2>1) Quanto é 50% de 200?: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 25;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  50;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 75;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)100;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) 125</label>
			<br />
			<br />
			
			
			<h2>2) Na sala de aula, a professora descobriu que 40% dos alunos são corintianos, 30% torcem pro São Paulo, 20% são palmeirenses, 10% torcem pro Santos e o resto não gosta de futebol. Sabendo que existem 40 alunos na sala, quantos torcem para o São Paulo?.</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) 24></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) 20></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) 16></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) 12></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) 8></label>
			<br />
			<br />
			
			<h2>3)  João comprou uma TV e resolveu pagar à prazo, pois não podia pagar à vista. Sabendo que o valor à vista é de R$ 1500,00 e que o valor total à prazo é 15% maior que o valor à vista, responda: Quanto João vai pagar no total?</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) R$ 1575,00;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) 1650,00;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)R$ 1800,00;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) R$ 1670,00;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) R$ 1875,00.</label>
			<br />
			<br />
			
			<h2>4) Maria comprou um vestido à vista para ganhar um desconto de 5% no valor original dele. Se o vestido custa R$ 60,00, quanto Maria pagou??</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) R$ 59,50</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) R$ 58,802;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) R$ 58,20;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) R$ 57,60</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) R$ 57,00.</label>
			<br />
			<br />
			
			<h2>5) Três é quantos porcento de cinco??</h2>
		
			<input type="radio" name="questao5" value="a" /> A) 90%></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 80%></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 70%></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 60%></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  50%></label>
			<br />
			<br />
			
			<h2>6) Quanto é 20% ao quadrado?</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) 40%;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) 4%;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) 0,4%;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) 0,04%;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) 0,40%.</label>
			<br />
			<br />
			
			<h2>7)  Carlos estava sempre chegando muito cansado no trabalho. O chefe dele percebeu isso e falou que ele deveria passar pelo menos um terço do dia dormindo. Levando isso em consideração, quantas horas Carlos deveria dormir?:</h2>
			
			<br>
			<input type="radio" name="questao7" value="a" /> A)6 horas;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 8 horas;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 10 horas;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) 12 horas;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) 14 horas.</label>
			<br />	
			<br />
		
			<h2>8) No dia 1 deste mês, um produto estava sendo vendido por R$ 400,00. No dia 10, esse produto sofreu um redução de 50% no seu preço. No dia 20, ele foi reajustado com um aumento de 50%. Escolha a alternativa correta.</h2>
			
			<input type="radio" name="questao8" value="a" /> A) O produto estava mais barato no dia 1 do que no dia 20;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) No dia 20 o produto estava com o mesmo preço que ele estava no dia 1.</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) O produto estava mais barato no dia 20 do que no dia 1.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) O produto estava mais barato em outros dias</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) O produto nao esta barato</label>
			<br />
			<br />
	
			<h2>9) Ana tem 20 anos e morou durante 5 anos nos Estados Unidos, 4 anos na Austrália e o resto no Brasil. Em porcentagem, quantos anos ela morou no hemisfério sul?</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) 20%;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 25%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)50%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 60%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 75%.</label>
			<br />
			<br />

			<h2>10) Fernanda ganha 10% a mais que Paulo. Se Fernanda ganhar um aumento de 20%, quantos porcento ela ganhará a mais que Paulo?.</h2>
		
			<br>
			<input type="radio" name="questao10" value="a" /> A) 10%;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) 16%.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 20%;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 30%;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) 32%.</label>
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