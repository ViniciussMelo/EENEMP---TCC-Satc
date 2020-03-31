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
		  window.location.href='Reletroquimica.php';</script>";
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
			<h1>Prova de Quimica sobre <font color=red>Eletroquímica</h1></font>
		</form>
		
		<form id="questoes" action="Peletroquimica.php" method = "POST">
			<br>
			<h2>1) (PUC) Na pilha eletro-química sempre ocorre:</h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) oxidação do cátodo.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) movimento de elétrons no interior da solução eletrolítica;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) reação com diminuição de calor;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) passagem de elétrons, no circuito externo, do ânodo para o cátodo;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)reação de neutralização.</label>
			<br />
			<br />
			
			
			<h2>2- Em uma pilha com eletrodos de zinco e de cobre, com circuito fechado, 

ocorre:.</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)  o potencial do eletrodo de zinco diminui e o do cobre aumenta;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)  o potencial do dois eletrodos diminui.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)o potencial do eletrodo de zinco aumenta e o do cobre diminui.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) o potencial dos dois eletrodos aumenta.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) o potencial dos dois eletrodos não se altera. ></label>
			<br />
			<br />
			
			<h2>3-Considere as seguintes semi-reações e os respectivos potenciais normais de 

redução (E0):</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)+1,25 V ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) –1,25 V;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)  +1,75 V  ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)  –1,75 V;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) +3,75 V.</label>
			<br />
			<br />
			
			<h2>4) A reação que ocorre em uma pilha é representada pela seguinte equação: Mn 

+ Cu++ ® Mn++ + Cu Sabendo-se que o potencial de óxido-redução do manganês é igual a 

+1,05 volts e o do cobre é igual a –0,35 volts, e admitindo-se que a concentração dos 

íons é unitária, a voltagem da pilha será::</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)  0,70 volts;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B)  –1,40 volts;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) 1,40 volts;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) –0,70 volts;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)  n.d.a..</label>
			<br />
			<br />
			
			<h2>5- Dentre as espécies químicas representadas abaixo através de semi-

reações:</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A) Na;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) Cu;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) Na;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) Cu+;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) Cl2.></label>
			<br />
			<br />
			
			<h2>6- Considere os potenciais padrões de redução:</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)  Ce4+ + Sn4+ ® Ce3+ + Sn2+;;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B)  2Ce4+ + Sn2+ ® 2Ce3+ + Sn4+;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) Sn4+ + Ce3+ ® Ce4+ + Sn2+;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) Ce3+ + Sn2+ ® Ce4+ + Sn4+.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E)Ce3+ + Sn2+ ® Ce5+ + Sn5+.</label>
			<br />
			<br />
			
			<h2>7) (FUVEST) Na reação espontânea do exercício anterior, o oxidante e o redutor são, 

respectivamente:</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A)Ce4+ e Sn+2 ;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)Ce4+ e Sn4+  ;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C)Ce3+ e Sn2+;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)Sn2+ e Ce4+;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E)n.d.a..</label>
			<br />	
			<br />
		
			<h2>8) Conhecendo-se as seguintes equações de meia-célula e os respectivos 

potenciais padrão do eletrodo (E0):
</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)0,54 volts;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)0,66 volts;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C)0,94 volts  ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)1,46 volts;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)1,74 volts.</label>
			<br />
			<br />
	
			<h2>9)Uma cela eletroquímica é constituída pelas semicelas Cr // Cr+3 e Ag // 

Ag+ cujos valores potenciais E0 são:</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A)O eletrodo, onde ocorre oxidação é o ânodo da cela.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) A voltagem da cela é de 1,55 volts.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) O cromo metálico reage e forma Cr+3.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) Os íons negativos e positivos se movimentam através da solução, mas em direções 

opostas;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)Os elétrons passam através do voltímetro22:16 26/10/2017, da prata para o cromo.     essa.</label>
			<br />
			<br />

			<h2>10-Uma pilha de Daniell opera em condições padrões com soluções aquosas de ZnSO4 e 

CuSO4, com diferença de potencial nos terminais de ΔE0. Cristais de CuSO4 são 

adicionados na respectiva solução, alterando o potencial para ΔE, na mesma 

temperatura.

Pode-se afirmar que este novo potencial:</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A)permaneceu constante.;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)aumentou.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C)diminuiu.;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D)ficou zero;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)
não pode ser calculado.</label>
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