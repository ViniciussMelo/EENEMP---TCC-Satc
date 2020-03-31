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
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pmigracao.php';</script>";
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
	$prova = "prova de geografia";
	$materia = "migracao";
	
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
<h2>1)A presença de uma corrente migratória por si só não explica a condição de vida dos imigrantes. Esta será somente a aparência de um fenômeno mais profundo, estruturado em relações socioeconômicas muitas vezes perversas. É o que podemos dizer dos indivíduos que são deslocados do campo para as cidades e obrigados a viver em condições de vida culturalmente diferentes das que vivenciaram em seu lugar de origem.
SCARLATO, F. C. População e urbanização brasileira. In: ROSS, J. L. S. Geografia do Brasil. São Paulo: Edusp, 2009.
O texto faz referência a um movimento migratório que reflete o(a) </h2>
<p>
<p>A)processo de deslocamento de trabalhadores motivados pelo aumento da oferta de empregos no campo.;</p>
<p>B)dinâmica experimentada por grande quantidade de pessoas, que resultou no inchaço das grandes cidades. ;</p>
<p><h2><font color="#008000"><b>C) permuta de locais específicos, obedecendo a fatores cíclicos naturais. ; Gibraltar, à Espanha; e, Cabo Verde, a Portugal ;</p></font></b></h2>
<p>D) circulação de pessoas diariamente em função do emprego.;</p>
<p>E)cultura de localização itinerante no espaço. ;</p>
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


<h2>2)    Em 1935, o governo brasileiro começou a negar vistos a judeus. Posteriormente, durante o Estado Novo, uma circular secreta proibiu a concessão de vistos a “pessoas de origem semita”, inclusive turistas e negociantes, o que causou uma queda de 75% da imigração judaica ao longo daquele ano. Entretanto, mesmo com as imposições da lei, muitos judeus continuaram entrando ilegalmente no país durante a guerra e as ameaças de deportação em massa nunca foram concretizadas, apesar da extradição de alguns indivíduos por sua militância política.
GRIMBERG, K. Nova língua interior: 500 anos de história dos judeus no Brasil. In: IBGE. Brasil: 500 anos de povoamento. Rio de Janeiro: IBGE, 2000 (adaptado).
Uma razão para a adoção da política de imigração mencionada no texto foi o(a)  </h2>
			
			
<p>A)  receio do controle sionista sobre a economia nacional. . ></p>
<p>B) reserva de postos de trabalho para a mão de obra local.   ></p>
<p><b><h2><font color="#008000">C) oposição do clero católico à expansão de novas religiões. ></p></font></b></h2>
<p>D) apoio da diplomacia varguista às opiniões dos líderes árabes..></p>
<p>E) simpatia de membros da burocracia pelo projeto totalitário alemão. . ></p>
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


<h2>3)

O fluxo migratório representado está associado ao processo de:</h2>

<p>A) fuga de áreas degradadas. ;</p>
<p>B)  inversão da hierarquia urbana.;</p>
<p>C) busca por amenidades ambientais;</p>
<p><h2><font color="#008000"><b>D)conurbação entre municípios contíguos. </p></font></b></h2>
<p>E) desconcentração dos investimentos produtivos..</p>
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


<h2>4) A letra dessa canção reflete elementos identitários que representam a :</h2>

<p><h2><font color="#008000"><b>A)valorização das características naturais do Sertão nordestino. ;</p></font></b></h2>
<p> B)  denúncia da precariedade social provocada pela seca ;</p>
<p> C) experiência de deslocamento vivenciada pelo migrante ;</p>
<p> D) profunda desigualdade social entre as regiões brasileiras. </p>
<p> E)discriminação dos nordestinos nos grandes centros urbanos. 
</p>
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


<h2>5)

O trecho da música faz referência a uma importante obra na região do rio São Francisco. Uma consequência socioespacial dessa construção foi:</h2>

<p><h2><font color="#008000"><b> A) a migração forçada da população ribeirinha.; ></p></font></b></h2>
<p> B)o rebaixamento do nível do lençol freático local.;></p>
<p> C)a preservação da memória histórica da região.;></p>
<p> D) a ampliação das áreas de clima árido.;></p>
<p> E) a redução das áreas de agricultura irrigada.></p>
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


<h2>6)A migração pode ser definida como:</h2>

<p> A)A entrada de migrantes em um determinado país.;</p> 
<p> B)é um sistema que não necessita de coordenadas geográficas para localização, pois depende somente da altitude;</p>
<p> C)O deslocamento populacional pelo território de um país ;</p>
<p><h2><font color="#008000"><b> D)dispensa a utilização de mapas, substituídos por bússolas eletrônicas que indicam a direção a seguir pelo usuário. 
;</p></font></b></h2>
<p> E) Qualquer deslocamento espacial realizado por uma pessoa ou por parte de uma população.
.</p>
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


<h2>7)Quando um indivíduo sai de um país em busca de melhores condições de vida, ele recebe o nome de:</h2>

<p> A)emigrante.;</p> 
<p> B) forasteiro.;</p>
<p> C) Imigrante;</p>
<p> D) peregrino.;</p>
<p><b><h2><font color="#008000"> E)  Gringo</p></font></b></h2>
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

Migração é o deslocamento espacial de um indivíduo ou de parte da população de um lugar para outro. A principal causa da migração no mundo e no Brasil tem origem: .</h2>

<p><h2><font color="#008000"><b> A) econômica ;</p></font></b></h2>
<p> B) política;</p>
<p> C) cultural;</p>
<p> D)ambiental;</p>
<p> E)religiosa.</p>
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


<h2>9) (UCB) No que se refere às migrações brasileiras, julgue os itens a seguir:</h2>
<br>
<p>A) A desconcentração industrial é uma das principais causas da freada na migração interna do Brasil;</p> 
<p> B)erna do Brasil.
b) Atualmente o Centro-Oeste é a região brasileira que mais retém migrantes;</p>
<p> C) A melhoria dos sistemas de transporte e de comunicação aumentou a concentração industrial nos grandes centros urbanos brasileiros, que continuam atraindo grandes contingentes migratórios;</p>
<p><h2><font color="#008000"><b>  D) A transumância é o movimento migratório invertido, ou seja, as pessoas abandonam os grandes centros e buscam fixar-se em cidades pequenas ou médias
;</p></font></b></h2>
<p> E)No movimento pendular, uma determinada população deixa o seu domicílio pela manhã para trabalhar em outra cidade ou região e retorna ao término do dia
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


<h2>10) 
O deslocamento diário de pessoas para estudar ou trabalhar em outra cidade, estado ou país não se trata propriamente de uma migração, pois é uma transferência momentânea. Ocorre comumente nas regiões metropolitanas.
A que movimento migratório refere-se o fragmento acima? </h2>
			
			<p> A) nomadismo ;</p>
			<p><h2><font color="#008000"> B) transumância </p></font></b></h2>
			<p>C)Diaspora;</p>
			<p>D) êxodo urbano;</p>
			<p>E)migração pendular.</p>
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