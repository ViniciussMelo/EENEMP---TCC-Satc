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
		  window.location.href='Reletrecidade.php';</script>";
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
			<h1>Prova de Física sobre <font color=red>Eletrecidade</h1></font>
		</form>
		
		<form id="questoes" action="Peletrecidade.php" method = "POST">
			<br>
			<h2>1)(Fafi-MG) Dizer que a carga elétrica é quantizada significa que ela:</h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)só pode ser positiva;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) não pode ser criada nem destruída;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) pode ser isolada em qualquer quantidade;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) só pode existir como múltipla de uma quantidade mínima definida;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)pode ser positiva ou negativa.</label>
			<br />
			<br />
			
			
			<h2>2- Uma esfera metálica tem carga elétrica negativa de valor igual a 3,2 . 10-4 C. Sendo a carga do elétron igual a 1,6 10-19 C, pode-se concluir que a esfera contém:.</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) 2 . 1015 elétrons;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) 200 elétrons.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) um excesso de 2. 1015 elétrons.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)2 . 1010 elétrons.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) um excesso de 2 . 1010 elétrons. ></label>
			<br />
			<br />
			
			<h2>3- Julgue os itens a seguir:
1. Um corpo que tem carga positiva possui mais prótons do que elétrons;
2. Dizemos que um corpo é neutro quando ele possui o mesmo número de prótons e de elétrons;
3. O núcleo do átomo é formado por elétrons e prótons.
Estão corretas as afirmativas::</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) 1 e 2 apenas;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)2 e 3 apenas;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) 1 e 3 apenas;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) 1, 2 e 3;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)Nenhuma.</label>
			<br />
			<br />
			
			<h2>4)  Um cosmonauta russo estava a bordo da estação espacial MIR quando um de seus rádios de comunicação quebrou. Ele constatou que dois capacitores do rádio de 3 µF e 7 µF ligados em série estavam queimados. Em função da disponibilidade, foi preciso substituir os capacitores defeituosos por um único capacitor que cumpria a mesma função.
Qual foi a capacitância, medida em µF, do capacitor utilizado pelo cosmonauta? </h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) 0,10  ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) 0,50  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) 2,1  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)10;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)  21 .</label>
			<br />
			<br />
			
			<h2>5-
  Uma lâmpada LED (diodo emissor de luz), que funciona com 12 V e corrente contínua de 0,45 A, produz a mesma quantidade de luz que uma lâmpada incandescente de 60 W de potência.
Qual é o valor da redução da potência consumida ao se substituir a lâmpada incandescente pela de LED?</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A)54,6 W ;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 27,0;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 26,6 W ;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 5,4w;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) 5,0w.></label>
			<br />
			<br />
			
			<h2>6-O elemento de armazenamento de carga análogo ao exposto no segundo sistema e a aplicação cotidiana correspondente são, respectivamente,.</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) receptores — televisor;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) resistores — chuveiro elétrico.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)geradores — telefone celular.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) fusíveis — caixa de força residencial.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) capacitores — flash de máquina fotográfica..</label>
			<br />
			<br />
			
			<h2>7) 
Mantendo-se as mesmas dimensões geométricas, o fio que apresenta menor resistência elétrica é aquele feito de
#12:</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A) tungstênio.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) aluminio;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) ferro.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) Cobre;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) Prata.</label>
			<br />	
			<br />
		
			<h2>8) O princípio de funcionamento desse equipamento é explicado pelo fato de que a:</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) corrente elétrica no circuito fechado gera um campo magnético nessa região.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)  bobina imersa no campo magnético em circuito fechado gera uma corrente elétrica.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) bobina em atrito com o campo magnético no circuito fechado gera uma corrente elétrica.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) corrente elétrica é gerada em circuito fechado por causa da presença do campo magnético;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)orrente elétrica é gerada em circuito fechado quando há variação do campo magnético.</label>
			<br />
			<br />
	
			<h2>9) Deseja-se que o chuveiro funcione em qualquer uma das três posições de regulagem de temperatura, sem que haja riscos de incêndio. Qual deve ser o valor mínimo adequado do disjuntor a ser utilizado?</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) 40 A;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 30 A;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) 25 A;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)23 A;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 20 A.</label>
			<br />
			<br />

			<h2>10-O protocolo de Kyoto estabelece a
redução da emissão de gases causadores do efeito estufa.
Alguns desses gases são o dióxido de carbono, CO2, o
monóxido de dinitrogênio, N2O, e o metano, CH4.
Considerando-se a atuação desses gases, é CORRETO
afirmar que.</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A) os três absorvem radiação no infravermelho;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) a reação do metano com água causa a chuva ácida;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) os três produzem materiais particulados na atmosfera;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) o dióxido de carbono é produzido na combustão do gás
hidrogênio;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)  é produzido na combustão do carbono.</label>
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