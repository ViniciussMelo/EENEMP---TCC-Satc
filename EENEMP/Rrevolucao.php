<?php
	session_start();
	include_once("connection.php");
if (!isset($_SESSION["logado"])) {
		
			if (!isset($_SESSION["logadoProf"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
	}
	}
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
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Prevolucao.php';</script>";
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
	$prova = "prova de historia";
	$materia = "revolucao industrial";
	
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
<h2>1)Tendo em vista o conceito marxista de modo de produção e os trechos em destaque, podemos considerar corretamente que: : </h2>
<p>
<p>A) O modelo de modo de produção refere-se especificamente aos aspectos econômicos de uma sociedade, dentro da visão materialista de Marx, excluindo os demais setores.;</p>
<p>B)É preciso ter claro que o modo de produção ajuda a compreender a realidade, mas não é a realidade. É uma forma didática, utilizada pelos estudiosos para caracterizar e analisar os períodos pós-capitalistas. ;</p>
<p><h2><font color="#008000"><b>C)  Hobsbawm entende a noção de mundo do trabalho como a condição na qual os sujeitos estão inseridos ao construírem suas relações de trabalho, o que condiz com o conceito marxista de modo de produção. ;</p></font></b></h2>
<p>D) Não se pode estimar o valor dos modos de produção na evolução das sociedades, pois é preciso entendê-los como processos dissociados de uma participação da sociedade como um todo, ligados apenas às classes produtoras.
 ;</p>
<p>E) É impossível a presença, nas formações sociais reais existentes, de características mescladas de diferentes modos de produção, pois como são de acordo com a dialética marxista, é necessário que um seja todo destruído para que o outro surja. 
 ;</p>
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


<h2>2) 
Com base no conhecimento histórico e no texto é correto afirmar que a Revolução Industrial :  </h2>
			
			
<p>A) alterou, ao mesmo tempo, o processo de trabalho nas áreas coloniais e as condições sociais do artesão na Inglaterra ao reunir capitais e ferramentas em oficinas ou domicílios rurais dispersos. . ></p>
<p>B) representou ao mesmo tempo, revolução técnica ou tecnológica das formas de produção e revolução das condições de trabalho e retorno de capital, com a exploração desumana da mão de obra. .  ></p>
<p><b><h2><font color="#008000">C)favoreceu a ascensão política das colônias ao promover o desenvolvimento econômico nas área periféricas, a organização do mercado de trabalho e o aumento dos núcleo domésticos de produção.></p></font></b></h2>
<p>D) a divulgação das ideias da "Coexistência Pacífica" e propagação do movimento neutralista..></p>
<p>E) a alteração do poder político mundial e formulação da Doutrina Trumam ></p>
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
A respeito da Revolução Industrial, considere as seguintes afirmativas:
1.Um dos componentes fundamentais da Revolução Industrial foi o desenvolvimento dos meios de transporte, de maneira especial, o surgimento das ferrovias.
2.A Revolução Industrial provocou mudanças que tornaram o sistema capitalista dominante na organização da sociedade.
3.Devido às condições de trabalho nas fábricas, não foi registrado na Inglaterra o trabalho infantil, de modo que as crianças destinavam seu tempo unicamente aos estudos e brincadeiras.
Assinale a alternativa correta:</h2>

<p>A) Somente a afirmativa 1 é verdadeira..;</p>
<p>B) Somente a afirmativa 2 é verdadeira.;</p>
<p>C)  Somente as afirmativas 1 e 2 são verdadeiras..;</p>
<p><h2><font color="#008000"><b>D)Somente as afirmativas 1 e 3 são verdadeiras. </p></font></b></h2>
<p>E) As afirmativas 1, 2 e 3 são verdadeiras..</p>
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


<h2>4) AA 1ª Revolução Industrial passou por quatro fases distintas. Assinale a sequência CORRETA das fases da 1ª Revolução Industrial:  </h2>

<p><h2><font color="#008000"><b>A)a 1ª fase: espetacular aceleramento dos transportes e das comunicações / 2ª fase: aplicação da força motriz à indústria / 3ª fase: desenvolvimento do sistema fabril / 4ª fase: mecanização da indústria e da agricultura.. ;</p></font></b></h2>
<p> B)1ª fase: mecanização da indústria e da agricultura / 2ª fase: aplicação da força motriz à indústria / 3ª fase: desenvolvimento do sistema fabril / 4ª fase: espetacular aceleramento dos transportes e das comunicações. ;</p>
<p> C)  1ª fase: aplicação da força motriz à indústria / 2ª fase: mecanização da indústria e da agricultura / 3ª fase: desenvolvimento do sistema fabril / 4ª fase: espetacular aceleramento dos transportes e das comunicações. ;</p>
<p> D) 1ª fase: mecanização da indústria e da agricultura / 2ª fase: desenvolvimento do sistema fabril / 3ª fase: aplicação da força motriz à indústria / 4ª fase: espetacular aceleramento dos transportes e das comunicações..;</p>
<p> E)Todas as falsas.</p>
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


A queda da burguesia e a vitória do proletariado são igualmente inevitáveis.(...) Os proletários nada têm a perder com ela, a não ser as próprias cadeias. E têm um mundo a ganhar. Proletários de todos os países, uni-vos”.
Esse trecho, extraído do Manifesto Comunista de Marx e Engels, foi escrito no contexto histórico marcado pela Revolução Industrial. Para muitos trabalhadores, a indústria trouxe muitos problemas para a classe que estava se formando.
Assinale a alternativa que indica os problemas enfrentados por esses trabalhadores.</h2>

<p><h2><font color="#008000"><b> A) A alta nos preços de produtos alimentícios, enquanto produtos de luxo como as roupas estavam barateando. ; ></p></font></b></h2>
<p> B)Conflitos entre os donos das fábricas, acabando com as antigas corporações de ofício e dando espaço para os sindicatos modernos.;></p>
<p> C)Acirramento das contradições políticas, econômicas e sociais, decorrentes da rápida industrialização.;></p>
<p> D)Dificuldades no trabalho com as novas máquinas, pois os donos da fábrica não investiam na educação e aperfeiçoamento dos trabalhadores.></p>
<p> E)Aumento do autoritarismo dos reis absolutistas, ajudando assim no desenvolvimento das indústrias. ></p>
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


<h2>6)Tomando como referência inicial esse texto, assinale a opção correta</h2>

<p> A)A Revolução Industrial, de matriz inglesa, circunscreveu-se apenas ao espaço britânico, pelo menos entre os séculos XVIII e XIX.;</p> 
<p> B)Embora as relações econômicas internacionais tenham favorecido, no século XIX, o desenvolvimento das idéias liberais, o socialismo já triunfara como política de Estado naquele século.;</p>
<p> C)As formas de trabalho infantil, bastante coibidas na origem do industrialismo inglês, generalizaram-se no capitalismo avançado. ;</p>
<p><h2><font color="#008000"><b> D)As formas de coerção, embora tenham sido superadas no capitalismo global atual em algumas regiões e áreas de produção, ainda são características do processo industrial contemporâneo.
 
;</p></font></b></h2>
<p> E) seu uso no Brasil ainda é restrito às instituições militares, pois é considerado estratégico para a segurança nacional. 
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


<h2>7)


Utilizando esse texto como referência inicial, assinale a opção correta acerca das idéias e das práticas socialistas no século XIX: </h2>

<p> A)   Embora transpostas para o setor industrial, as idéias socialistas tiveram origem nas reivindicações do mundo agrário.;</p> 
<p> B) O socialismo assistiu, naquele século, à sua grande revolução política na Rússia.
 c As aspirações de toda burguesia liberal em sua defesa da propriedade privada e dos direitos individuais;;</p>
<p> C)  O socialismo nasceu e se desenvolveu como uma idéia realista e pragmática, sem imaginação utópica.;</p>
<p> D) A contemplação dos interesses dos camponeses e dos grupos provinciais, na medida em que determinou o confisco das propriedades fundiárias na Franca;;</p>
<p><b><h2><font color="#008000"> E)  A força do conjunto das idéias socialistas praticamente não sofreu recuo após a emergência dos movimentos das nacionalidades naquele século..</p></font></b></h2>
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


"A superioridade da indústria inglesa, em 1840, não era desafiada por qualquer futuro imaginável. E esta superioridade só teria a ganhar se as matérias-primas e os gêneros alimentícios fossem baratos. Isto não era ilusão: a nação estava tão satisfeita com o que considerava um resultado de sua política que as críticas foram quase silenciadas até a depressão da década de 80." (Joseph A. Schumpeter, "HISTÓRIA DA ANÁLISE ECONÔMICA")
Desta exposição conclui-se por que razão a Inglaterra adotou decididamente, a partir:</h2>

<p><h2><font color="#008000"><b> A) isolacionismo em sua política externa.;</p></font></b></h2>
<p> B) intervencionismo estatal na economia.;</p>
<p> C)capitalismo monopolista contrário à concorrência.;</p>
<p> D)agressivo militarismo nas conquistas de colônias ultramarinas.;</p>
<p> E) livre-comércio no relacionamento entre as nações..</p>
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


(Uel) Um fator que contribuiu decisivamente para o processo de industrialização na Inglaterra do século XVIII foi:</h2>
<br>
<p>A)a acumulação de capital resultante da exploração colonial praticada pela Inglaterra através do comércio..;</p> 
<p> B)Conferência de Acra e a Conferência de Casablanca.;</p>
<p> C) Conferência de Monróvia e a Organização da Unidade Africana.;</p>
<p><h2><font color="#008000"><b>  D) União Africana e o Comitê de Libertação Africana;
;</p></font></b></h2>
<p> E) a abertura de mercados na Alemanha e na França para a Inglaterra, por meio de um acordo comercial conhecido por Pacto de Berlim.

</p>
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
A Revolução Industrial ocorrida ao longo do século XVIII está vinculada à história da Inglaterra no seu nascedouro. Entretanto, à medida que o capitalismo foi se consolidando, a idéia de Revolução Industrial começou a ser associada a um conceito universal e ganhou vários sinônimos, dentre os quais: </h2>
			
			<p> A) republicanização, que orientava os novos processos de organização da política, a intervenção no mercado e a Revolução Francesa;
 ;</p>
			<p><h2><font color="#008000"> B) modernização, que indicava a manutenção da economia mercantilista, a centralização do Estado e o crescimento das camadas médias;
 </p></font></b></h2>
			<p>C)industrialização, que significava a alteração nos processos de produção, a concretização da economia de mercado e a ascensão da burguesia;;</p>
			<p>D) maquinização, que mostrava a crescente expansão do artesanato, da agricultura e da fisiocracia como modelos de crescimento;</p>
			<p>E)tecnificação, que definia o processo industrial como dependente das modificações na agricultura e também do agrarismo, sendo controlado politicamente pela nobreza urbana.</p>
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