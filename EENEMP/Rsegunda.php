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
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Psegunda.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Psegunda.php';</script>";
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
	$materia = "segunda guerra mundial";
	
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
<h2>1)No ano de 1939, em meio à atmosfera de tensão política que desencadeou a sucessão de conflitos da Segunda Guerra Mundial, um acordo de não agressão foi firmado entre a Alemanha e a União Soviética, o Pacto Germano-Soviético. Esse pacto estabelecia que, se acaso a Alemanha entrasse em conflito com a Inglaterra ou a França em razão de uma eventual investida da Alemanha contra a Polônia, a URSS, por sua vez, ficaria afastada, sem se manifestar militarmente. Tal pacto também pode ser chamado de: </h2>
<p>
<p>A) Tratado de Moscou ;</p>
<p>B)Tratado de Versalhes ;</p>
<p><h2><font color="#008000"><b>C)  Pacto de Varsóvia  ;</p></font></b></h2>
<p>D) Pacto Ribbentrop-Molotov ;</p>
<p>E) Tratado de Moscou ;</p>
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


<h2>2) A Segunda Guerra Mundial teve como consequências:  </h2>
			
			
<p>A) a alteração do poder político mundial e formulação da Doutrina Trumam. ></p>
<p>B) a proclamação da República na China e decadência política da "Cortina de Ferro".  ></p>
<p><b><h2><font color="#008000">C) a intervenção de tropas estrangeiras na Guerra Civil Espanhola e vitória do franquismo.></p></font></b></h2>
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
Os antigos combatentes do mesmo regimento se reúnemperiodicamente emjantares onde evocamas lembranças da guerra, essas histórias de homens. Muitos são os que ficaram alquebrados por esses anos de horror, incapazes de se readaptar a uma vida civil que, alguns anos depois, sofrerá o abalo da Grande Depressão. Para uma unidade que descia de Verdun, bastava ametade dos caminhões que tinham sido necessários para a ida. É a lembrança indelével que entretém as insônias e alimenta os pesadelos. E logo fica claro que esta não foi a última guerra. Em 1923, há o golpe deMunique." 

(VINCENT, Gérard. Guerras ditas, Guerras silenciadas e o enigma identitário., in: História da Vida Privada . São Paulo: Companhia das Letras, 2009, p.187.) 

O golpe de Munique, também conhecido como Putsch da Cervejaria, está inserido no contexto do período entre Guerras e das consequências da Primeira Guerra Mundial. O referido golpe está associado à::</h2>

<p>A) ascensão de Hitler e do Nazismo.;</p>
<p>B) grande marcha de Mao Tsé-tung.;</p>
<p>C) guerra civil espanhola.;</p>
<p><h2><font color="#008000"><b>D)marcha sobre Roma de Mussolini. </p></font></b></h2>
<p>E) morte de Franz Ferdinand.</p>
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


<h2>4) Analise as afirmativas correlatas.
I. “A divisão da Alemanha teve início com o acordo de Potsdam, assinado após a Segunda Guerra Mundial, que dividia a nação em quatro zonas de ocupação, sendo três delas destinadas aos aliados do Ocidente (Estados Unidos, França e Reino Unido) e uma ao governo soviético.” 
PORQUE
II. “Derrotada no grande conflito mundial, a Alemanha passou a sofrer influência de dois regimes distintos, o que resultou na sua divisão em 1949, na República Federal Alemã (RFA), de orientação capitalista, e a República Democrática Alemã (RDA), comunista.”
Assinale a alternativa correta:</h2>

<p><h2><font color="#008000"><b>A)As duas afirmativas são falsas. ;</p></font></b></h2>
<p> B)A primeira afirmativa é verdadeira e a segunda, falsa. ;</p>
<p> C) As duas afirmativas são verdadeiras, mas a segunda não justifica a primeira. ;</p>
<p> D)As duas afirmativas são verdadeiras e a segunda é uma justificativa correta da primeira.;</p>
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


Em relação à participação do Brasil na 2.ª Guerra Mundial, é correto afirmar que o país</h2>

<p><h2><font color="#008000"><b> A) manteve neutralidade política, não participando do conflito; ></p></font></b></h2>
<p> B)enviou apenas um corpo médico para o conflito, e não soldados.;></p>
<p> C)lutou ao lado dos Aliados: Inglaterra, França, Estados Unidos e União Soviética.;></p>
<p> D)lutou ao lado do Eixo: Itália, Alemanha e Japão.;></p>
<p> E)participou do conflito, do início ao fim da guerra (1939- 1945)..></p>
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


<h2>6)A Segunda Guerra Mundial (1939-1945) é, geralmente, considerada o grande momento de inflexão do século XX. Decorrência de duas décadas de instabilidade política, comoção social e crise econômica, ela foi o mais universalizado dos conflitos e, ao chegar ao fim, gerou uma ordem internacional que se afastava dos padrões vigentes, a rigor, desde a Idade Moderna. Relativamente aos fatores que determinaram o início de hostilidades e às conferências que estabeleceram as balizas do novo cenário mundial, assinale a opção correta..</h2>

<p> A)depende, para o correto funcionamento, da cobertura local proporcionada por uma rede de satélites;</p> 
<p> B)é um sistema que não necessita de coordenadas geográficas para localização, pois depende somente da altitude;</p>
<p> C) não tem precisão suficiente para ser utilizado na navegação marítima, que ainda depende de mapas convencionais. ;</p>
<p><h2><font color="#008000"><b> D)dispensa a utilização de mapas, substituídos por bússolas eletrônicas que indicam a direção a seguir pelo usuário. 
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


<h2>7)Em 26 de agosto de 1789, a Assembleia Nacional Constituinte aprovou a Declaração dos Direitos do Homem e do Cidadão, documento que serviu de referência para a elaboração de outros similares, como a Declaração Universal dos Direitos Humanos, formulada pela ONU, no contexto do pós-Segunda Guerra Mundial. Considerando as principais concepções politicas produzidas pelo movimento francês de 1789, pode-se afirmar que este documento expressou: </h2>

<p> A)  O triunfo do projeto politico jacobino que dividia o Estado em três poderes autônomos e independentes;;</p> 
<p> B) A manifestação contra a sociedade hierárquica de privilégios nobres, mas não um manifesto a favor de uma sociedade democrática e igualitária;
 c As aspirações de toda burguesia liberal em sua defesa da propriedade privada e dos direitos individuais;;</p>
<p> C)  As aspirações de toda burguesia liberal em sua defesa da propriedade privada e dos direitos individuais;;</p>
<p> D) A contemplação dos interesses dos camponeses e dos grupos provinciais, na medida em que determinou o confisco das propriedades fundiárias na Franca;;</p>
<p><b><h2><font color="#008000"> E)  A hegemonia dos girondinos, pois a Declaração estabeleceu eleições por sufrágio universal, o que possibilitou o controle do processo revolucionário por parte desse grupo.</p></font></b></h2>
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

O programa de ajuda financeira para a reconstrução dos países europeus devastados durante a Segunda Guerra Mundial, proposto pelos EUA e que tinha como objetivo deter a expansão socialista e também reforçar sua influência sobre eles ficou conhecido como:</h2>

<p><h2><font color="#008000"><b> A) Plano Marshall ;</p></font></b></h2>
<p> B) Congresso de Viena;</p>
<p> C)OTAN;</p>
<p> D)Guerra Fria;</p>
<p> E)Guerra da Secessão.</p>
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

Foi a Segunda Guerra Mundial que precipitou a luta anticolonial no continente africano. 

A avalanche revolucionária ganhou intensidade, sobretudo porque a França e a Inglaterra, senhoras dos principais impérios coloniais, saíram enfraquecidas da Segunda Guerra para enfrentar revoltas coloniais. Por outro lado, a derrota de Chiang Kai-sheck, na China, a capitulação francesa na Indochina (1954) e a nacionalização do Canal de Suez por Nasser, líder egípcio, também estimularam as guerras de libertação. 

Nessas lutas, projetaram-se inúmeros líderes africanos que, por vezes, procuraram adaptar ideologias ocidentais às condições locais, com o objetivo de eliminar todas as formas de colonialismo na África, como, por exemplo a(o)</h2>
<br>
<p>A)Pan-Africanismo e a Negritude.;</p> 
<p> B)Conferência de Acra e a Conferência de Casablanca.;</p>
<p> C) Conferência de Monróvia e a Organização da Unidade Africana.;</p>
<p><h2><font color="#008000"><b>  D) União Africana e o Comitê de Libertação Africana;
;</p></font></b></h2>
<p> E) MPLA (Movimento Popular para a Libertação de Angola) e a FRELIMO (Frente de Libertação de Moçambique)</p>
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
Na perspectiva do mercado capitalista globalizado a dependência internacional do petróleo da maior economia do planeta tem sido objeto de diversos conflitos, dentre eles o caso do Oriente Médio.

Sobre as questões internacionais na invasão do Iraque é CORRETO afirmar: </h2>
			
			<p> A) O fascismo italiano teve no racismo o suporte ideológico oficial do regime. ;</p>
			<p><h2><font color="#008000"> B) Na Alemanha, Hitler chegou ao poder mediante violento golpe de Estado. </p></font></b></h2>
			<p>C)O ditatorial Estado Novo de Vargas apresentava aspectos próprios do fascismo.;</p>
			<p>D) A Guerra Civil Espanhola interrompeu a marcha ascensional da direita fascista..;</p>
			<p>E)Com Roosevelt, os EUA rompem a histórica tradição democrática do país..</p>
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