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
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Prepublica.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Prepublica.php';</script>";
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
	$materia = "republica";
	
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
<h2>1)     A imagem da relação patrão-empregado geralmente veiculada pelas classes dominantes brasileiras na República Velha era de que esta relação se assemelhava em muitos aspectos à relação entre pais e filhos. O patrão era uma espécie de “juiz doméstico” que procurava guiar e aconselhar o trabalhador, que, em troca, devia realizar suas tarefas com dedicação e respeitar o seu patrão.
CHALHOUB, S. Trabalho, lar e botequim: o cotidiano dos trabalhadores do Rio de Janeiro da Belle Époque. Campinas: Unicamp, 2001.
No contexto da transição do trabalho escravo para o trabalho livre, a construção da imagem descrita no texto tinha por objetivo : </h2>
<p>
<p>A)  esvaziar o conflito de uma relação baseada na desigualdade entre os indivíduos que dela participavam.;</p>
<p>B)driblar a lentidão da nascente Justiça do Trabalho, que não conseguia conter os conflitos cotidianos.;</p>
<p><h2><font color="#008000"><b>C) separar os âmbitos público e privado na organização do trabalho para aumentar a eficiência dos funcionários.  ;</p></font></b></h2>
<p>D) burlar a aplicação das leis trabalhistas conquistadas pelos operários nos primeiros governos civis do período republicano. ;</p>
<p>E) compensar os prejuízos econômicos sofridos pelas elites em função da ausência de indenização pela libertação dos escravos. ;</p>
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


<h2>2)      O coronelismo era fruto de alteração na relação de forças entre os proprietários rurais e o governo, e significava o fortalecimento do poder do Estado antes que o predomínio do coronel. Nessa concepção, o coronelismo é, então, um sistema político nacional, com base em barganhas entre o governo e os coronéis. O coronel tem o controle dos cargos públicos, desde o delegado de polícia até a professora primária. O coronel hipoteca seu apoio ao governo, sobretudo na forma de voto.
               CARVALHO, J. M. Pontos e bordados: escritos de história política. Belo
                                                             Horizonte: Editora UFMG, 1998 (adaptado).
No contexto da Primeira República no Brasil, as relações políticas descritas baseavam-se na :  </h2>
			
			
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
A página do periódico do início do século XX documenta um importante elemento da cultura francesa, que é revelador do papel do Brasil na economia mundial, indicado no seguinte aspecto:</h2>

<p>A) Prestador de serviços gerais.;</p>
<p>B)  Exportador de bens industriais. ;</p>
<p>C) Importador de padrões estéticos. ;</p>
<p><h2><font color="#008000"><b>D)Fornecedor de produtos agrícolas.  </p></font></b></h2>
<p>E) Formador de padrões de consumo. </p>
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


<h2>4) O problema central a ser resolvido pelo Novo Regime era a organização de outro pacto de poder que pudesse substituir o arranjo imperial com grau suficiente de estabilidade. O próprio presidente Campos Sales esumiu claramente seu objetivo: “É de lá, dos estados, que se governa a República, por cima das multidões que tumultuam agitadas nas ruas da capital da União. A política dos estados é a política nacional”. 

CARVALHO, J. M. Os Bestializados: o Rio de Janeiro e a República que não foi. São Paulo: Companhia das Letras, 1987 (adaptado).


Nessa citação, o presidente do Brasil no período expressa uma estratégia política no sentido de:</h2>

<p><h2><font color="#008000"><b>A)governar com a adesão popular ;</p></font></b></h2>
<p> B)atrair o apoio das oligarquias regionais ;</p>
<p> C) conferir maior autonomia às prefeituras ;</p>
<p> D)democratizar o poder do governo central;</p>
<p> E)ampliar a influência da capital no cenário nacional.</p>
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





A Estrada de Ferro Noroeste do Brasil, que começa a ser construída apenas em 1905, foi criada, ao contrário das outras grandes ferrovias paulistas, para ser uma ferrovia de penetração, buscando novas áreas para a agricultura e povoamento. Até 1890, o café era quem ditava o traçado das ferrovias, que eram vistas apenas como auxiliadoras da produção cafeeira. 

CARVALHO, D. F. Café, ferrovias e crescimento populacional: oflorescimento da região noroeste paulista. Disponível em: www.historica.arquivoestado.sp.gov.br. Acesso em: 2 ago. 2012. 

Essa nova orientação dada à expansão ferroviária, durante a Primeira República, tinha como objetivo a:</h2>

<p><h2><font color="#008000"><b> A) articulação de polos produtores para exportação; ></p></font></b></h2>
<p> B)criação de infraestrutura para atividade industrial;></p>
<p> C)integração de pequenas propriedades policultoras;></p>
<p> D)valorização de regiões de baixa densidade demográfica;></p>
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
      Nos estados, entretanto, se instalavam as oligarquias, de cujo perigo já nos advertia Saint-Hilaire, e sob o disfarce do que se chamou ‘‘a política dos governadores". Em círculos concêntricos esse sistema vem cumular no próprio poder central que é o sol do nosso sistema.

PRADO, P. Retrato do Brasil. Rio de Janeiro: José Olympio. 1972.

A crítica presente no texto remete ao acordo que fundamentou o regime republicano brasileiro durante as três primeiras décadas do século XX e fortaleceu o(a):</h2>

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


<h2>7)É difícil encontrar um texto sobre a Proclamação da República no Brasil que não cite a afirmação de Aristides Lobo, no Diário Popular de São Paulo, de que “o povo assistiu àquilo bestializado” . Essa versão foi relida pelos enaltecedores da Revolução de 1930, que não descuidaram da forma republicana, mas realçaram a exclusão social, o militarismo e o estrangeirismo da fórmula implantada em 1889. Isto porque o Brasil brasileiro teria nascido em 1930. 
MELLO, M. T. C. A república consentida: cultura democrática e científica no final do Império. Rio de Janeiro: FGV, 2007 (adaptado): </h2>

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


As ruínas do povoado de Canudos, no sertão norte da Bahia, além de significativas para a identidade cultural dessa região, são úteis às investigações sobre a Guerra de Canudos e o modo de vida dos antigos revoltosos. 

Essas ruínas foram reconhecidas como patrimônio cultural material pelo Iphan (Instituto do Patrimônio Histórico e Artístico Nacional) porque reúnem um conjunto de:</h2>

<p><h2><font color="#008000"><b> A) objetos arqueológicos e paisagísticos. ;</p></font></b></h2>
<p> B) acervos museológicos e bibliográficos.;</p>
<p> C) núcleos urbanos e etnográficos.;</p>
<p> D)práticas e representações de uma sociedade.;</p>
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

Esse discurso, típico do contexto histórico da República Velha e usado por chefes políticos, expressa uma realidade caracterizada:</h2>
<br>
<p>A)pela força política dos burocratas do nascente Estado republicano, que utilizavam de suas prerrogativas para controlar e dominar o poder nos municípios..;</p> 
<p> B)pelo controle político dos proprietários no interior do país, que buscavam, por meio dos seus currais eleitorais, enfraquecer a nascente burguesia brasileira.;</p>
<p> C) pelo mandonismo das oligarquias no interior do Brasil, que utilizavam diferentes mecanismos assistencialistas e de favorecimento para garantir o controle dos votos.;</p>
<p><h2><font color="#008000"><b>  D) pelo domínio político de grupos ligados às velhas instituições monárquicas e que não encontraram espaço de ascensão política na nascente república.
;</p></font></b></h2>
<p> E) pela aliança política firmada entre as oligarquias do Norte e Nordeste do Brasil, que garantiria uma alternância no poder federal de presidentes originários dessas regiões.</p>
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
Na história brasileira, a chamada Revolta da Chibata liderada por João Cândido, e descrita na música, foi: </h2>
			
			<p> A) a rebelião de escravos contra os castigos físicos, ocorrida na Bahia, em 1848, e repetida no Rio de Janeiro. ;</p>
			<p><h2><font color="#008000"> B) a revolta, no porto de Salvador, em 1860, de marinheiros dos navios que faziam o tráfico negreiro. </p></font></b></h2>
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