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
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pradioatividade.php';</script>";
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
	$resposta1 = "c";
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
	$prova = "prova de quimica";
	$materia = "radioatividade";
	
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
<h2>1) Há estudos que apontam razões
econômicas e ambientais para que o gás natural possa vir a
tornar-se, ao longo deste século, a principal fonte de energia
em lugar do petróleo. Justifica-se essa previsão, entre
outros motivos, porque o gás natural: </h2>
<p>
<p>A) além de muito abundante na natureza é um combustível
renovável;</p>
<p>B) vem sendo produzido com sucesso a partir do carvão
mineral;</p>
<p><h2><font color="#008000"><b>C) tem novas jazidas sendo exploradas e é menos poluente
que o petróleo.;</p></font></b></h2>
<p>D) pode ser renovado em escala de tempo muito inferior à
do petróleo.;</p>
<p>E) não produz CO2 em sua queima, impedindo o efeito
estufa.</p>
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
<p>a) da chuva ácida.</p>
<p>b)da destruição da camada de ozônio.</p>
<p>c) do efeito estufa;</p>
<p>d) da inversão térmica;</p>
<p>e) do efeito tyndall.</p>
<br><br>

<h2>2) O biodiesel praticamente não contém
enxofre em sua composição. Devido a esse fato, sua
combustão apresenta vantagens em relação à do diesel
do petróleo, no que diz respeito ao fenômeno.</h2>
			
<p>A) do efeito estufa.></p>
<p>B) da destruição da camada de ozônio.></p>
<p><b><h2><font color="#008000">C) da chuva ácida</p></font></b></h2>
<p>D) da inversão térmica.></p>
<p>E) da inversão .></p>
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

<br>
<br />

<h2>3) Entidades ligadas à preservação
ambiental têm exercido fortes pressões para a redução da
produção de gases CFC (clorofluorcarbonos). Isto se deve
principalmente ao fato de os CFC</h2>

<p>A) reagirem com H2O2 produzindo ácidos e chuva ácida;</p>
<p>B)  reagirem espontaneamente com O3 produzindo CO2 e
agravando o efeito estufa;</p>
<p>C) escaparem para o espaço, provocando o fenômeno da
inversão térmica;</p>
<p><h2><font color="#008000"><b>D) produzirem sob a ação de  luz radicais livres, que reagem
com o ozônio;</p></font></b></h2>
<p>E) reagirem com oxigênio a baixas pressões, produzindo
ozônio.</p>
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


<h2>4) A combustão de carvão e de derivados de
petróleo aumenta a concentração de um gás na atmosfera,
provocando o efeito estufa. O gás em questão é:</h2>

<p><h2><font color="#008000"><b>A) O2;</p></font></b></h2>
<p> B) CO2;</p>
<p> C) H2;</p>
<p> D) O3;</p>
<p> E) Cl2.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
Alternativa: E
A queima do óleo diesel,da gasolina, do carvão mineral e
do gás natural, emitem gases que aumentam o efeito estufa,
já a energia eólica, isso não ocorre.	

<h2>5) Assinale, dentre os materiais abaixo,
aquele que, se for depositado em lixões, não contaminará o
solo ou o lençol freático?</h2>

<p><h2><font color="#008000"><b> A) Vidro incolor></p></font></b></h2>
<p> B) Bateria de celular</p>
<p> C) Pilha comum</p>
<p> D) Lixo hospitalar</p>
<p> E) Lâmpada de mercúrio.></p>
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


<h2>6) A única fonte de energia, dentre as citadas
abaixo, que não resulta na produção de substâncias
poluentes, nem causa qualquer impacto ambiental, é a
energia:</h2>

<p> A)  termelétrica;</p> 
<p> B) nuclear;</p>
<p> C) de biomassa;</p>
<p><h2><font color="#008000"><b>eólica;</p></font></b></h2>
<p> E) hidrelétrica.</p>
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


<h2>7) Em alguns municípios do Brasil, adota-se
uma forma bastante cruel de controlar a população de cães
abandonados nas ruas: prendem-se os animais em
compartimentos vedados, onde se introduz uma mangueira
acoplada ao escapamento de um caminhão, cujo motor está
funcionando em “ponto morto”.
A substância que mata os cães é:</h2>

<p> A)  KCN;</p> 
<p> B)H2;</p>
<p> C) NH3;</p>
<p> D) HCN;</p>
<p><b><h2><font color="#008000"> E) CO.</p></font></b></h2>
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

<h2>8) No ar das grandes cidades, são
encontrados hidrocarbonetos e aldeídos como poluentes.
Estes provêm da utilização, pelos meios de transporte,
respectivamente, de:</h2>

<p><h2><font color="#008000"><b> A)  gasolina e etanol;</p></font></b></h2>
<p> B) gasolina e óleo diesel;</p>
<p> C)  etanol e óleo diesel;</p>
<p> D) metanol e gasolina;</p>
<p> E) metanol e etanol.</p>
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


<h2>9) O biodiesel praticamente não contém
enxofre em sua composição. Devido a esse fato, sua
combustão apresenta vantagens em relação à do diesel
do petróleo, no que diz respeito ao fenômeno</h2>
<br>
<p>A) da destruição da camada de ozônio;</p> 
<p> B) do efeito estufa;</p>
<p> C) da inversão térmica;</p>
<p><h2><font color="#008000"><b>  D) da chuva ácida;</p></font></b></h2>
<p> E) do efeito tyndall.</p>
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