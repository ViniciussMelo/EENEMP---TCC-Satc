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
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pindustrializacao.php';</script>";
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
	$prova = "Prova de Geografia";
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
	$materia = "industrializacao";
	
	$verifica = ("SELECT materiaProva from historico where materiaProva = '$materia' AND emailUsuario = '$email' AND usuario ='$usuario'");
	$res = mysql_query($verifica);
	
	if (mysql_num_rows ( $res ) !=1)
      {
	$sql = "INSERT INTO historico (nomeProva,materiaProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$acertou','$errou','$porcent','$data')";
	$res = mysql_query($sql);  
	  }
	  else{
		  $sql2 = "INSERT INTO resultados (nomeProva,materiaProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$acertou','$errou','$porcent','$data')";
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
<h2>1)Leia o texto a seguir
[...] Estes sistemas de produção flexível permitiram uma aceleração do ritmo da inovação do produto, ao lado da exploração de nichos de mercado altamente especializados e de pequena escala. [...] O tempo de giro – que sempre é a chave da lucratividade capitalista – foi reduzido de modo dramático pelo uso de novas tecnologias produtivas (automação, robôs) e de novas formas organizacionais. Mas a aceleração do tempo de giro na produção teria sido inútil sem a redução do tempo de giro no consumo. 
HARVEY, David. Condição pós-moderna: uma pesquisa sobre as origens da mudança cultural.12. ed. São Paulo: Loyola, 2003.

No texto, Harvey retrata o modelo de gestão produtiva: </h2>
<p>
<p>A) fordista. ;</p>
<p>B)taylorista.  ;</p>
<p><h2><font color="#008000"><b>C) pós-fordista. ; Gibraltar, à Espanha; e, Cabo Verde, a Portugal ;</p></font></b></h2>
<p>D) fabril. ;</p>
<p>E) Ilhas: Cabo Verde, a Portugal;</p>
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
O estudo do universo das profissões contribui para que o aluno reconheça os diferentes papéis que um indivíduo pode exercer na sociedade. Espacialmente, verifica-se que o agrário e o urbano são complementares no sistema socioeconômico vigente. Embora não haja, atualmente, uma fronteira totalmente definida entre os dois, em função da modernização dos processos produtivos e das relações de trabalho, as atividades econômicas presentes nesses dois espaços, ainda, podem ser setorizadas para fins estatísticos e de compreensão da economia de um país. Dentre as diversas atividades econômicas existentes, pode-se inferir que o agricultor e o operário de uma indústria, participam, respectivamente, dos setores: </h2>
			
			
<p>A)  primário e terciário ></p>
<p>B) terciário e secundário.  ></p>
<p><b><h2><font color="#008000">C) primário e secundário ></p></font></b></h2>
<p>D) secundário e terciário.></p>
<p>E) Csecundário e primario. ></p>
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
Considerando a repartição espacial dos diferentes tipos de tecnologia de acesso fixo:</h2>

<p>A) que a totalidade se faz sentir no momento em que a criança é capaz de discernir que o próximo e o longínquo são categorias de raciocínio estanques, sem relação com a realidade espacial que a cerca ;</p>
<p>B) que o global é um conceito muito distante da realidade do aluno e, portanto, ser aprofundado nos anos finais do ensino fundamental, cabendo ao professor dos anos iniciais concentrar-se na questão local;</p>
<p>C) o dia a dia da criança, a começar pelo seu país, assim como os elementos e/ou ações internas, de caráter global, que determinam ou contribuem para determinar o arranjo social e espacial em que ela vive ;</p>
<p><h2><font color="#008000"><b>D)que a totalidade se faz sentir no momento em que a criança é capaz de discernir que o próximo e o longínquo são categorias de raciocínio estanques, sem relação com a realidade espacial que a cerca </p></font></b></h2>
<p>E) o dia a dia da criança, a começar pelo seu país, assim como os elementos e/ou ações internas, de caráter global, que determinam ou contribuem para determinar o arranjo social e espacial em que ela vive.</p>
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


<h2>4) A figura e o texto acima tratam das mudanças recentes na dinâmica de integração física e produtiva no entorno da região metropolitana de São Paulo. O deslocamento de instalações industriais para o interior do estado de São Paulo, assim como a intensificação das interações e das trocas econômicas entre as cidades, podem ser mais bem compreendidas pelo conceito de::</h2>

<p><h2><font color="#008000"><b>A)metropolização; ;</p></font></b></h2>
<p> B) megacidade. ;</p>
<p> C) rurbanização;  ;</p>
<p> D) cidade-região;;</p>
<p> E) conurbação. 
.</p>
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

As principais características da Terceira Revolução Industrial são:</h2>

<p><h2><font color="#008000"><b> A) polarização dos fluxos de commodities pelos portos generalistas; ></p></font></b></h2>
<p> B)ampliação da associação espacial e funcional entre cidade e porto;></p>
<p> C)expansão da área retroportuária para os centros antigos das cidades;></p>
<p> D)concentração das estações de desembaraço aduaneiro na zona portuária;></p>
<p> E)regionalização das atividades tradicionalmente realizadas nos retroportos.></p>
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

Historicamente campo e cidade eram espaços totalmente diferentes e com ínfimas conexões. O espaço do campo era considerado atrasado e o espaço da cidade era o moderno. Tal divisão vem sendo, ao longo das últimas décadas, pouco a pouco desconstruída, pois as conexões entre campo e cidade são cada vez mais fortes, promovendo inclusive características urbanas no campo e vice-versa. Entre os setores a seguir, o principal responsável por essas novas relações espaciais é:</h2>

<p> A)rizicultura.;</p> 
<p> B)agroindústrias;</p>
<p> C) produção orgânica. ;</p>
<p><h2><font color="#008000"><b> D)extrativismo vegetal;
;</p></font></b></h2>
<p> E) Agricultura.
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

Historicamente, os países industrializados têm sido responsáveis pela maior parte das emissões globais de gases do efeito estufa.Os Estados Unidos é o país líder na emissão desses gases. Entretanto, na atualidade, vários países em desenvolvimento, entre eles China, Índia e Brasil, também se posicionam entre os grandes emissores. Mesmo assim, numa base per capita, os países em desenvolvimento continuam tendo emissões mais baixas do que os industrializados. Com dados de 2005, o Brasil se apresenta como o quarto maior emissor de gases do efeito estufa.


Fonte:< www.ipam.org.br>. Adaptado


Entre as causas da elevada emissão de gases realizada pelo Brasil, a principal é:</h2>

<p> A)investimento em novas usinas nucleares;</p> 
<p> B) incentivo à indústria automobilística.;</p>
<p> C) desmatamento promovido por queimadas.;</p>
<p> D)aumento do uso de biocombustíveis;</p>
<p><b><h2><font color="#008000"> E) construção de aterros sanitários controlados.
</p></font></b></h2>
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
As transformações no mundo do trabalho são influenciadas pela globalização que estabelece alterações no ritmo da indústria, comércio, comunicações e transporte, com nova organização na economia mundial a partir do avanço científico e tecnológico e da concentração de capital.

São características da globalização, EXCETO, .</h2>

<p><h2><font color="#008000"><b> A) a construção de rodovias, que integraram a região amazônica ao restante do país.. ;</p></font></b></h2>
<p> B) os investimentos em construção de usinas hidrelétricas, para atender à demanda de energia;</p>
<p> C)a construção dos portos de Belém e de Manaus, para exportar a produção de borracha;</p>
<p> D)a incorporação de Rondônia ao território brasileiro e a fundação da cidade Porto Velho;</p>
<p> E)da instalação de indústrias de base, que realizavam a transformação do látex em borracha.</p>
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

A Terceira Revolução Industrial, conhecida como revolução tecnocientífica e informacional, iniciada nas últimas décadas do século XX, impôs ao mundo novas técnicas, novas maneiras de produzir e novos produtos. Uma das principais características desse novo contexto foi o crescente desenvolvimento de empresas de alta tecnologia, cujas inovações permitiram que elas se libertassem das restrições locacionais tradicionais. 
Assinale a opção que indica o fator locacional que atua, de modo decisivo, na estratégia de localização das empresas de alta tecnologia.</h2>
<br>
<p>A) A concentração de mercado consumidor.</p> 
<p> B)A presença de mão de obra de menor custo.</p>
<p> C) A proximidade com as fontes de matérias primas.</p>
<p><h2><font color="#008000"><b>  D) A legislação ambiental mais rigorosa.
;</p></font></b></h2>
<p> E)A qualidade da infraestrutura educacional e cultural
.</p>
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
No mundo contemporâneo não basta produzir. É indispensável pôr a produção em movimento, pois agora é a circulação que preside à produção. 

No caso do espaço nacional, é INCORRETO afirmar que, nas últimas décadas, os fluxos:</h2>
			
			<p> A) aéreos registraram adensamento, tendo sido acompanhados de uma rehierarquização dos nós do sistema aéreo. ;</p>
			<p><h2><font color="#008000"> B) aquaviários refletiram o ingresso do país no mundo globalizado, uma vez que cresceu o volume de carga embarcada para exportação em portos marítimos. </p></font></b></h2>
			<p>C)ferroviários de cargas acusaram redução de volume; ao passo que a natureza da carga transportada se manteve inalterada no tempo e no espaço.</p>
			<p>D) rodoviários se impuseram como principal sistema de circulação, graças à integração do território pelas estradas e pela expansão quantitativa da frota veicular.;</p>
			<p>E)Os problemas que desencadearam as guerras no Iraque são de ordem religiosa.</p>
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
<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>A área a ser iluminada é uma circunferência de área 28,26 m2. Basta aplicar na fórmula da área da circunfência para descobrirmos o seu raio:</p>

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
<p align="center">
<a href="logadoAluno.php" id="enviar">Página inicial</a>
</form>
</body>
</html>