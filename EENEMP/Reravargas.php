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
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Peravargas.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Peravargas.php';</script>";
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
	$materia = "era vargas";
	
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
<h2>1)NO Estado de compromisso, expressão do reajuste nas relações internas das classes dominantes, corresponde, por outro lado, a uma nova forma do Estado, que se caracteriza pela maior centralização, o intervencionismo ampliado e não restrito apenas à área do café, o estabelecimento de uma certa racionalização no uso de algumas fontes fundamentais de riqueza pelo capitalismo internacional (...).
Boris Fausto. A revolução de 1930. Historiografia e história. São Paulo: Brasiliense, 1987, p. 109-110.
Segundo o texto, o Estado de compromisso correspondeu, no Brasil do período posterior: </h2>
<p>
<p>A) à retomada do comando político pela elite cafeicultora do sudeste brasileiro. ;</p>
<p>B)ao primeiro momento de intervenção governamental na economia brasileira. 
 c ;</p>
<p><h2><font color="#008000"><b>C)  à reorientação da política econômica, com maior presença do Estado na economia.   ;</p></font></b></h2>
<p>D) ao esforço de eliminar os problemas sociais internos gerados pelo capitalismo internacional. ;</p>
<p>E) à ampla democratização nas relações políticas, trabalhistas e sociais.  ;</p>
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
Em 1945 chega ao fim o Estado Novo implantado pelo presidente Getúlio Vargas. Entre as causas tivemos a(s):  </h2>
			
			
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
Em 1954, quando o cerco se apertou ainda mais sobre Getúlio Vargas, o presidente agiu mais energicamente. Seu gesto teve consequências imediatas. A massa urbana saiu às ruas em todas as grandes cidades, atingindo os alvos mais expressivos de seu ódio, como jornais de oposição e a representação diplomática dos Estados Unidos no Rio de Janeiro.
Adaptado de FAUSTO, Boris. Historia Concisa do Brasil. Sao Paulo: EDUSP, 2002. p. 231.
Em uma aula para alunos do 4º ano do Ensino Fundamental, sobre a consolidação da democracia no Brasil, o professor aborda, como tema central, os anos finais do segundo governo Vargas. Nesse sentido, destaque os dois últimos gestos políticos desse governo:</h2>

<p>A) seu suicídio e a divulgação da carta-testamento;</p>
<p>B) sua renúncia e a consolidação de um golpe militar;</p>
<p>C) o afastamento do general Lott e o apoio a Eurico Dutra;</p>
<p><h2><font color="#008000"><b>D)o fim do Estado Novo e a promulgação das leis trabalhistas</p></font></b></h2>
<p>E) seu suicídio e a divulgação da carta-testamento.</p>
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


<h2>4) 
Considere a frase abaixo. 
Muito teremos feito em breve tempo se conseguirmos libertar-nos da importação de artefatos de ferro, nacionalizando a indústria siderúrgica. (Getúlio Vargas, em 1931)
concretização das pretensões do autor da frase ocorreu, durante a Segunda Guerra Mundial, quando usou a importância do
Brasil no contexto geopolítico da América do Sul e:</h2>

<p><h2><font color="#008000"><b>A)acertou com os Estados Unidos o apoio às forças aliadas em troca da construção da usina siderúrgica de Volta Redonda, no Rio de Janeiro. ;</p></font></b></h2>
<p> B)ampliou o raio de atuação do Estado e de suas formas de intervenção econômica nas áreas sul-americanas de interesse dos Estados Unidos. . ;</p>
<p> C) criou empresas privadas, que se revelaram fundamentais para a industrialização e a independência econômica do país, como as da Petrobras.  ;</p>
<p> D)manteve uma posição de neutralidade em relação aos Estados Unidos para conseguir financiamento externo para a siderurgia nacional.  ;</p>
<p> E)enfraqueceu a participação do Estado na economia, para assegurar a industrialização no contexto internacional, caracterizado por regimes fortes. </p>
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


Durante o governo ditatorial do presidente Getúlio Vargas entre 1937 e 1945, o governo brasileiro oficializou uma política de ocupação da região norte do país ao ver na Amazônia uma importância estratégica. A marcha para o oeste, como ficou conhecida a iniciativa do governo varguista, foi possível graças aos incentivos financeiros do estado brasileiro, visando à exploração econômica da região. 

Em relação à política varguista de ocupação dessa área do país, é correto destacar: </h2>

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


<h2>6)
“Os vitoriosos de 1930 compunham um quadro heterogêneo, tanto do ponto de vista social quanto político. Tinham-se unido contra um mesmo adversário, com perspectivas diversas: os velhos oligarcas, representantes típicos da classe dominante regional [...]”.
FAUSTO, Boris. História Concisa do Brasil. São Paulo: Editora da Universidade de São Paulo, 2002, p.182.
Na interpretação de Boris Fausto, É CORRETO afirmar que a Revolução de 1930 :</h2>

<p> A)foi uma crise institucional, derivada dos problemas que o sistema federativo enfrentava com a crise do setor cafeeiro.;</p> 
<p> B)significou a ascensão da burguesia industrial em substituição à anacrônica e conservadora elite agroexportadora.;</p>
<p> C)representava a etapa final dos episódios da Campanha Civilista e da Reação Republicana, significando, assim, um movimento de características marcadamente civis.;</p>
<p><h2><font color="#008000"><b> D)representou uma troca da elite do poder sem grandes rupturas, ascendendo militares, técnicos diplomados, jovens políticos e, um pouco mais tarde, os industriais. 	 
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
Durante a década de 1930, “foi assim, com uma política de aproximações alternadas e simultâneas dos Estados Unidos e Alemanha [...] que o Brasil seguiu na sua busca por autonomia procurando tirar proveito da disputa entre os dois países”.
PINHEIRO, Letícia. Política Externa Brasileira (1889-2002). Rio de Janeiro: Jorge Zahar, 2004, p. 23-24
O elemento que definiu a alteração desse posicionamento da política externa brasileira foi a  </h2>

<p> A)  criação da “Política da Boa Vizinhança” pelo governo americano.;</p> 
<p> B) criação da Organização das Nações Unidas.;
 c As aspirações de toda burguesia liberal em sua defesa da propriedade privada e dos direitos individuais;</p>
<p> C)  conferência de Bretton Woods.;</p>
<p> D) entrada americana na Segunda Guerra após o ataque a Pear Harbor.
;</p>
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


“Na década de 1930, houve a tentativa de ‘abrasileirar’ o Natal, propondo substituir o Papai Noel pela figura do Vovô Índio, um escravo filho de índio com africano que foi criado por uma família branca. O índio esculpia bonecos com os quais ilustrava suas histórias e, no Dia de Reis, dava-os de presente aos seus ouvintes.”
(Disponível em:<http://planorweb.bn.br/BoletinsPLANOR/planor Boletim 14.pdf> . Acesso em: 30 out. 2015.)
Essa tentativa pode ser atribuída aos (à):</h2>

<p><h2><font color="#008000"><b> A) comunistas do PCB. ;</p></font></b></h2>
<p> B) tenentes. ;</p>
<p> C)integralistas. ;</p>
<p> D)Igreja Católica.;</p>
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

A expansão da Justiça do Trabalho no Brasil, após os anos 1940 :</h2>
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

Entre o conjunto de leis criadas no período a que o texto se refere, destaca-se a Constituição de 1937, que nos seus dispositivos trabalhistas, inspirados na “Carta del Lavoro” italiana: </h2>
			
			<p> A) dava somente ao sindicato reconhecido pelo Estado o direito de representar a categoria, proibindo a greve e o lock-out. . ;</p>
			<p><h2><font color="#008000"> B) ampliava a participação do trabalhador pelo sistema de representação classista e pela adoção do voto secreto nas eleições.  </p></font></b></h2>
			<p>C)garantia direitos aos trabalhadores como: jornada de oito horas, regulamentação do trabalho feminino e do trabalho infantil. ;</p>
			<p>D) definiu as regras a partir das quais o mercado de trabalho e as relações trabalhistas poderiam livremente se desenvolver. ;</p>
			<p>E)garantiu aos trabalhadores uma certa estabilidade no emprego e no salário por meio do crescimento industrial do país. 
.</p>
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