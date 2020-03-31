<?php
	session_start();
	include_once("connection.php");

	$questao1 = $_SESSION["questao1"];
	$questao2 = $_SESSION["questao2"];
	$questao3 = $_SESSION["questao3"];
	$questao4 = $_SESSION["questao4"];
	$questao5 = $_SESSION["questao5"];
	$questao6 = $_SESSION["questao6"];
	$questao7 = $_SESSION["questao7"];
	$questao8 = $_SESSION["questao8"];
	$questao9 = $_SESSION["questao9"];
	$questao10 = $_SESSION["questao10"];

if ($questao1 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 1 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Peletrecidade.php';</script>";
          die();
  }
  else{
	  

if  (isset($_SESSION["logado"])){
		$email = $_SESSION['logado'];
		$usuario = 'Aluno';
	  }else{
		if  (isset($_SESSION["logadoProf"])){
		$email = $_SESSION['logadoProf'];
		$usuario = 'Professor';
	  }  
	  }
	$resposta1 = "a";
	$resposta2 = "c";
	$resposta3 = "d";
	$resposta4 = "a";
	$resposta5 = "a";
	$resposta6 = "d";
	$resposta7 = "e";
	$resposta8 = "a";
	$resposta9 = "d";
	$resposta10 = "b";
	
	$acertou = 0;
	$errou = 0;
	
	if ($questao1 == $resposta1)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao2 == $resposta2)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao3 == $resposta3)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao4 == $resposta4)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao5 == $resposta5)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao6 == $resposta6)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao7 == $resposta7)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao8 == $resposta8)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao9 == $resposta9)
{
	$acertou++;
}
else
{
	$errou++;
}
if ($questao10 == $resposta10)
{
	$acertou++;
}
else
{
	$errou++;
}
	
	$calc = 10;
	$porcent = $calc * $acertou;
	$data= date('d/m/Y');
	$prova = "prova de fisica";
	$materia = "eletrecidade";
	
	$verifica = ("SELECT materiaProva from historico where materiaProva = '$materia' AND emailUsuario = '$email' AND usuario ='$usuario'");
	$res = mysql_query($verifica);
	
	if (mysql_num_rows ( $res ) !=1)
      {
	$sql = "INSERT INTO historico (nomeProva,materiaProva,emailUsuario,usuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$usuario','$acertou','$errou','$porcent','$data')";
	$res = mysql_query($sql);  
	  }
	  else{
		  $sql2 = "INSERT INTO resultados (nomeProva,materiaProva,emailUsuario,usuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$usuario','$acertou','$errou','$porcent','$data')";
		  $res2 = mysql_query($sql2);
	  }
  }
		  ?>

		  <html>
<head>
	<title>Concluido</title>
	<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
	<meta charset="utf-8">
</head>
<body>
	<div id="tituloR">
		<h1>Você concluiu com sucesso a avaliação!</h1>
	</div>
	<form id="questoesR" name ="questoesR" enctype="multipart/form-data" >
<br>
<h2>1)Dizer que a carga elétrica é quantizada significa que ela: </h2>
<p>
<p>A) só pode ser positiva;</p>
<p>B) não pode ser criada nem destruída;</p>
<p><h2><font color="#008000"><b>C) pode ser isolada em qualquer quantidade;</p></font></b></h2>
<p>D)  só pode existir como múltipla de uma quantidade mínima definida;</p>
<p>E) pode ser positiva ou negativa.</p>
<?php 	
	if ($questao1 == $resposta1)
{
	echo "<font color = green> Questao 1 correta!<br></font>";
}
else
{
	echo "<font color = red> Questao 1 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao1,"<br></font></b></h2>";
}
?>
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>Alternativa d.
A carga elétrica só pode existir em quantidades múltiplas da carga elementar e.
<br><br>

<h2>2) Uma esfera metálica tem carga elétrica negativa de valor igual a 3,2 . 10-4 C. Sendo a carga do elétron igual a 1,6 10-19 C, pode-se concluir que a esfera contém:</h2>
			
<p>A) 2 . 1015 elétrons.</p>
<p>B)  200 elétrons.</p>
<p><b><h2><font color="#008000">C)um excesso de 2. 1015 elétrons</p></font></b></h2>
<p>D)  2 . 1010 elétrons.</p>
<p>E) um excesso de 2 . 1010 elétrons .</p>
<br />
<?php
if ($questao2 == $resposta2)
{
	echo "<font color = green> Questao 2 correta!<br></font>";
}
else
{
	echo "<font color = red> Questao 2 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao2,"<br></font></b></h2>";
}
?>

<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>Q = n.e
3,2 . 10 -4 = n . 1,6 . 10-19
n = 3,2 . 10-4
       1,6 . 10-19
n = 2 . 1015 elétrons
Como o corpo tem carga elétrica negativa, ele possui excesso de elétrons, portanto, a resposta correta é a alternativa C.
<br><br>

<br>
<br />

<h2>3) Julgue os itens a seguir:
1. Um corpo que tem carga positiva possui mais prótons do que elétrons;
2. Dizemos que um corpo é neutro quando ele possui o mesmo número de prótons e de elétrons;
3. O núcleo do átomo é formado por elétrons e prótons.
Estão corretas as afirmativas:</h2>

<p>A) 1 e 2 apenas;</p>
<p>B)  2 e 3 apenas;</p>
<p>C) 1 e 3 apenas;</p>
<p><h2><font color="#008000"><b>D) 1 2 e 3 apenas;</p></font></b></h2>
<p>E) nenhuma..</p>
<br />
<?php
if ($questao3 == $resposta3)
{
	echo "<font color = green> Questao 3 correta!<br></font>";
}
else
{
	echo "<font color = red> Questao 3 errada!<br>";
	echo "<b><h2> Sua resposta: ",$questao3,"<br></font></b></h2>";
}
?>

<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>Afirmativa 1 – correta. Quando um corpo perde elétrons, ele passa a ter maior número de prótons, portanto fica com carga positiva.
Afirmativa 2 – correta. Os corpos neutros possuem a mesma quantidade de prótons e de elétrons.
Afirmativa 3 – incorreta. O núcleo atômico é formado por prótons e nêutrons.
Alternativa correta – A.
<br><br>


<h2>4) 
    Um cosmonauta russo estava a bordo da estação espacial MIR quando um de seus rádios de comunicação quebrou. Ele constatou que dois capacitores do rádio de 3 µF e 7 µF ligados em série estavam queimados. Em função da disponibilidade, foi preciso substituir os capacitores defeituosos por um único capacitor que cumpria a mesma função.
Qual foi a capacitância, medida em µF, do capacitor utilizado pelo cosmonauta? :</h2>

<p><h2><font color="#008000"><b>A) 0,10;</p></font></b></h2>
<p> B)0,50;</p>
<p> C)2,1 ;</p>
<p> D) 10;</p>
<p> E) 21.</p>
<?php
if ($questao4 == $resposta4)
{
	echo "<font color = green> Questao 4 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 4 errada<br>";
	echo "<h2><b> Sua resposta: ",$questao4,"<br></font></b></h2>";
}
?>
	

<h2>5)   Uma lâmpada LED (diodo emissor de luz), que funciona com 12 V e corrente contínua de 0,45 A, produz a mesma quantidade de luz que uma lâmpada incandescente de 60 W de potência.
Qual é o valor da redução da potência consumida ao se substituir a lâmpada incandescente pela de LED??</h2>

<p><h2><font color="#008000"><b> A) 54,6 W ></p></font></b></h2>
<p> B) 27,0 W </p>
<p> C) 26,6 W </p>
<p> D) 5,4 W </p>
<p> E)5,0 W .></p>
<br />
<?php
if ($questao5 == $resposta5)
{
	echo "<font color = green> Questao 5 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 5 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao5,"<br></font></b></h2>";
}
?>


<h2>6) O elemento de armazenamento de carga análogo ao exposto no segundo sistema e a aplicação cotidiana correspondente são, respectivamente,:</h2>

<p> A)  receptores — televisor.;</p> 
<p> B) resistores — chuveiro elétrico;</p>
<p> C) geradores — telefone celular;</p>
<p><h2><font color="#008000"><b>D) fusíveis — caixa de força residencial.;</p></font></b></h2>
<p> E)capacitores — flash de máquina fotográfica.</p>
<br />
<?php
if ($questao6 == $resposta6)
{
	echo "<font color = green> Questao 6 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 6 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao6,"<br></font></b></h2>";
}
?>


<h2>7) 
Mantendo-se as mesmas dimensões geométricas, o fio que apresenta menor resistência elétrica é aquele feito de:</h2>

<p> A) tungstênio.;</p> 
<p> B)alumínio.;</p>
<p> C) ferro.;</p>
<p> D)cobre.;</p>
<p><b><h2><font color="#008000"> E)  prata
.</p></font></b></h2>
<br />
<?php
if ($questao7 == $resposta7)
{
	echo "<font color = green> Questao 7 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 7 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao7,"<br></font></b></h2>";
}
?>

<h2>8) 
O princípio de funcionamento desse equipamento é explicado pelo fato de que a:</h2>

<p><h2><font color="#008000"><b> A)  corrente elétrica no circuito fechado gera um campo magnético nessa região.;</p></font></b></h2>
<p> B) bobina imersa no campo magnético em circuito fechado gera uma corrente elétrica;</p>
<p> C)  bobina em atrito com o campo magnético no circuito fechado gera uma corrente elétricA;</p>
<p> D) corrente elétrica é gerada em circuito fechado por causa da presença do campo magnético;</p>
<p> E) corrente elétrica é gerada em circuito fechado quando há variação do campo magnético..</p>
<br />
<?php
if ($questao8 == $resposta8)
{
	echo "<font color = green> Questao 8 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 8 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao8,"<br></font></b></h2>";
}
?>


<h2>9) 
Deseja-se que o chuveiro funcione em qualquer uma das três posições de regulagem de temperatura, sem que haja riscos de incêndio. Qual deve ser o valor mínimo adequado do disjuntor a ser utilizado?</h2>
<br>
<p>A) 40 A;</p> 
<p> B) 30 A;</p>
<p> C) 25 A;</p>
<p><h2><font color="#008000"><b>  D)23 A;</p></font></b></h2>
<p> E)20 Ab.</p>
<br />
<?php
if ($questao9 == $resposta9)
{
	echo "<font color = green> Questao 9 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 9 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao9,"<br></font></b></h2>";
}
?>


<h2>10) O protocolo de Kyoto estabelece a
redução da emissão de gases causadores do efeito estufa.
Alguns desses gases são o dióxido de carbono, CO2, o
monóxido de dinitrogênio, N2O, e o metano, CH4.
Considerando-se a atuação desses gases, é CORRETO
afirmar que.</h2>
			
			<p> A) a reação do metano com água causa a chuva ácida;</p>
			<p><h2><font color="#008000"> B) os três absorvem radiação no infravermelho;</p></font></b></h2>
			<p>C) os três produzem materiais particulados na atmosfera;</p>
			<p>D) o dióxido de carbono é produzido na combustão do gás
hidrogênio.;</p>
			<p>E) é produzido na combustão do gás
carbono.</p>
			<br />
			<br />
			<br />
<?php
if ($questao10 == $resposta10)
{
	echo "<font color = green> Questao 10 correta<br></font>";
}
else
{
	echo "<font color = red> Questao 10 errada<br>";
	echo "<b><h2> Sua resposta: ",$questao10,"<br></font></b></h2>";
}
?>

</form>
<form id="respostas" name="respostas">
<?php

$calc = 10;
$porcent = $calc * $acertou;

echo "<br><b><h1><font color = #006600> Total de acertos:</font> $acertou</b></h1>";
echo "<br><b><h1><font color = red>Total de erros:</font> $errou</h1>";


if ($acertou >=7)
{
echo "<br><h1><b><blink>Porcentagem de acertos:</b></h1>"; 
echo "<h2><b><font color = #006600>$porcent % </blink></b></h2></font>";
}
else
{
echo "<br><h1><b><blink>Porcentagem de acertos:</b></h1>"; 
echo "<h2><b><font color = #FF0000>$porcent %</blink></b></h2></font>";
}


?>
<p align="center"><?php
if (isset($_SESSION["logado"]) && !empty($_SESSION["logado"])) {
	?>
<a href="logadoAluno.php" id="enviar">Página inicial Aluno</a>
<?php
die();
}
else{
	?>
	<a href="logadoProfessor.php" id="enviar">Página inicial</a>
	<?php
	}
?>
</form>
</body>
</html>