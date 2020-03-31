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
		  window.location.href='Rprobabilidade.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de matemática</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de matemática sobre <font color=red>Probabilidade</h1></font>
		</form>
		
		<form id="questoes" action="Pprobabilidade.php" method = "POST">
			<br>
			<h2>1) 1 – (ENEM 2014 – 158 – prova azul) Para analisar o desempenho de um método diagnóstico, realizam-se estudos em populações contendo pacientes sadios e doentes. Quatro situações distintas podem acontecer nesse contexto de teste: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) Paciente TEM a doença e o resultado do teste é POSITIVO.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  Paciente TEM a doença e o resultado do teste é NEGATIVO;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) Paciente NÃO TEM a doença e o resultado do teste é POSITIVO;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) Paciente NÃO TEM a doença e o resultado do teste é NEGATIVO.;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) Nao tem doença.</label>
			<br />
			<br />
			
			
			<h2>2) Numa escola com 1 200 alunos foi realizada uma pesquisa sobre o conhecimento desses em duas línguas estrangeiras, inglês e espanhol. Nessa pesquisa constatou-se que 600 alunos falam inglês, 500 falam espanhol e 300 não falam qualquer um desses idiomas. Escolhendo-se um aluno dessa escola ao acaso e sabendo-se que ele não fala inglês, qual a probabilidade de que esse aluno fale espanhol?</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A)1    
   2></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)5
    8></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)1
   4></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)5
    6></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)5
   14></label>
			<br />
			<br />
			
			<h2>3) Para disputar a final de um torneio internacional de
natação, classificaram-se 8 atletas: 3 norte-americanos, 1
australiano, 1 japonês, 1 francês e 2 brasileiros.
Considerando que todos os atletas classificados são
ótimos e têm iguais condições de receber uma medalha
(de ouro, prata ou bronze), a probabilidade de que pelo
menos um brasileiro esteja entre os três primeiros
colocados é igual a:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A)5/4;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)3/7</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)4/7;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D)9/14;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)5/7.</label>
			<br />
			<br />
			
			<h2>4) Em um instituto de pesquisa trabalham, entre outros
funcionários, 3 físicos, 6 biólogos e 2 matemáticos.
Deseja-se formar uma equipe com 4 desses 11 estudiosos,
para realizar uma pesquisa. Se essa equipe for composta
escolhendo-se os pesquisadores de forma aleatória, a
probabilidade de todos os físicos serem escolhidos é um
número cujo valor está compreendido entre</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) 0,00 e 0,01.;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> b) 0,01 e 0,02.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> c) 0,02 e 0,03.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> d) 0,03 e 0,04;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> e) 0,04 e 0,05 .</label>
			<br />
			<br />
			
			<h2>5) Na Copa do Mundo 2010 da FIFA, o Brasil ficou no
Grupo G junto com as seleções da Coréia do Norte, da
Costa do Marfim e de Portugal. Analisando os resultados
de jogos anteriores entre Brasil e Portugal, um torcedor
concluiu que a chance do Brasil ganhar é 3 vezes a chance
de perder, e que a chance de empatar é metade da
chance de o Brasil perder. Para aquele torcedor, a
probabilidade de o Brasil perder um jogo contra Portugal
é</h2>
			
			<label>
			<input type="radio" name="questao5" value="a" /> a) 1/9.</label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> b) 2/9.</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> c) 3/9.</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> d) 4/9.</label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> e) 5/9</label>
			<br />
			<br />
			
			<h2>6) Quando Lígia pára em um posto de gasolina, a
probabilidade de ela pedir para verificar o nível de óleo é
de 0,28; a probabilidade de ela pedir para verificar a
pressão dos pneus é 0,11 e a probabilidade de ela pedir
para verificar ambos, óleo e pneus, é de 0,04. Portanto, a
probabilidade de Lígia parar em um posto de gasolina e
não pedir nem para verificar o nível de óleo e nem para
verificar a pressão nos pneus é igual a:.</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> a) 0,25;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> b) 0,35</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> c) 0,45;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> d) 0,15 ;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> e) 0,65.</label>
			<br />
			<br />
			
			<h2>7) Uma companhia preocupada com sua produtividade
costuma oferecer cursos de treinamento a seus operários.
A partir da experiência, verificou-se que um operário,
recentemente admitido, que tenha freqüentado o curso
de treinamento tem 82% de probabilidade de cumprir sua
quota de produção. Por outro lado, um operário, também
recentemente admitido, que não tenha freqüentado o
mesmo curso de treinamento, tem apenas 35% de
probabilidade de cumprir com sua quota de produção.
Dos operários recentemente admitidos, 80%
freqüentaram o curso de treinamento. Selecionando-se,
aleatoriamente, um operário recentemente admitido na
companhia, a probabilidade de que ele não cumpra sua
quota de produção é:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> a) 11,70%</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> b) 27,40% </label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> c) 35%;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> d) 83%</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> e) 85%.</label>
			<br />	
			<br />
		
			<h2>8) São lançadas 4 moedas distintas e não viciadas. Qual é
a probabilidade de resultar exatamente 2 caras e 2
coroas?</h2>
			
			<br>
			<label>
			<input type="radio" name="questao8" value="a" /> a) 25%</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> b) 37,5% ;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> c) 42%;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> 
d) 44,5%;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) e) 50%.</label>
			<br />
			<br />
	
			<h2>9) Um casal pretende ter quatro filhos. A probabilidade
de nascerem dois meninos e duas meninas é:</h2>
		
			<label>	
			<br>
			<input type="radio" name="questao9" value="a" /> a) 3/8 </label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> b) 1/2;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> c) 6/8</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> d) 8/6;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> e) 8/3.</label>
			<br />
			<br />

			<h2>10) Um dado viciado, cuja probabilidade de se obter um
número par é 3/5, é lançado juntamente com uma moeda
não viciada. Assim, a probabilidade de se obter um
número ímpar no dado ou coroa na moeda é:</h2>
			
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> a) 1/5;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> b) 3/10.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> c) 2/5;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> d) 3/5;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> e) 7/10.</label>
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