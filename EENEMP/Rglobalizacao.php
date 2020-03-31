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
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Pglobalizacao.php';</script>";
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
	$materia = "globalizacao";
	
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
<h2>1)Acerca da Geografia mundial, assinale a alternativa correta: </h2>
<p>
<p>A) São todos desertos: Saara, Gobi, Atacama, Saara e Kalahri;</p>
<p>B)Andorra, Montenegro, Letônia, Lesoto e Ucrânia são países Europeus.  ;</p>
<p><h2><font color="#008000"><b>C) A Guiana Francesa pertence à França; as ilhas Falkland ou Malvinas, ao Reino Unido; ilha de Páscoa, ao Chile; Gibraltar, à Espanha; e, Cabo Verde, a Portugal ;</p></font></b></h2>
<p>D) São nações soberanas e independentes: Vaticano, Andorra e Groelândia;</p>
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


<h2>2) O início da globalização é impreciso, mas é comum apontar o seu marco na revolução tecnocientífica. A partir desse processo e do fim da Guerra Fria, alguns cientistas passaram a enxergar a formação e o funcionamento de um sistema-mundo, ou seja, uma extrema interligação entre diferentes partes do mundo a partir de diversos aspectos e dimensões. A globalização é também chamada de informacional ou 3ª Revolução Industrial. Caracterizou-se, sobretudo, pelo desenvolvimento do(a):  </h2>
			
			
<p>A)  linguagem. ></p>
<p>B) conhecimento racional.  ></p>
<p><b><h2><font color="#008000">C) pensamento cartesiano. ></p></font></b></h2>
<p>D) informática.></p>
<p>E) Comunicação. ></p>
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
Rafael Straforini afirma que no “lugar de convivência da criança (a realidade concreta) há o todo, ou seja, o global e vice-versa” (STRAFORINI, 2008: 22), ou seja, “esse lugar tem que ser entendido como o ponto de encontro de lógicas locais e globais, próximas e longínquas” (STRAFORINI, 2008: 23), onde a totalidade do mundo se faz sentir. Nas séries iniciais, essa forma de trabalhar o lugar deve levar em conta:</h2>

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


<h2>4) Embora estes processos ocorram de forma não homogênea em todos os países, pode-se afirmar que vivemos num mundo global. É no campo econômico que a Globalização se expressa de forma mais capilar, integrando todas as esferas da vida humana, seja nos espaços do trabalho, do consumo e até da cultura.
Nesse contexto, a construção de uma sociedade informacional a serviço das demandas do capital tem sido fundamental, nas últimas décadas para a configuração de um espaço totalmente globalizado. Dentre os seguintes fatores abaixo, aquele que pode ser descartado no contexto da construção dessa sociedade é a:</h2>

<p><h2><font color="#008000"><b>A)manutenção dos processos de produção tradicionais ;</p></font></b></h2>
<p> B) informação e o conhecimento como matéria-prima . ;</p>
<p> C) convergência crescente de todas as tecnologias . ;</p>
<p> D) interconexão de todo o sistema de relações .;</p>
<p> E) informação e o conhecimento como matéria-prima .</p>
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

A partir da década de 1970, o aprofundamento da globalização reestrutura o espaço econômico mundial, dando a ele uma feição de arquipélago cujos centros produtivos mais competitivos são interconectados por redes logísticas multiescalares. Nesse processo, as atividades portuárias são submetidas à adoção de novos padrões de organização e localização. A sincronização da produção, do transporte e da distribuição insere os portos em arquiteturas logísticas organizadas segundo princípios de flexibilidade operacional e de minimização das rugosidades espaciais e funcionais.

Adaptado de: MONIÉ, F. e VASCONCELOS, F. “Evolução das relações entre cidades e portos: entre lógicas homogeneizantes e dinâmicas de diferenciação”, Confins [Online], n. 15, 2012

Entre as mudanças observadas nos padrões de organização e localização das atividades portuárias nas últimas décadas, com reflexos no território brasileiro, destaca-se uma tendência à:</h2>

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


<h2>6)Considere a matéria jornalística abaixo.
Vitória vai usar app de GPS para avisar sobre interdições no trânsito
Capital vai ser uma das 55 cidades do mundo a usar o Waze. Prefeitura vai inserir em aplicativo informações que interfiram no trânsito.
(Disponível em: g1.globo.com/espirito-santo/noticia/2015/10/vitoria-vai-usar-app-de-gps-para-avisar-sobre-interdicoes-no-transito.html)
Sobre o sistema de posicionamento global (GPS), é correto afirmar que .</h2>

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


<h2>7) Sobre a economia globalizada, marque V para as afirmativas verdadeiras e F para as falsas.

( ) Auxilia na redução das discrepâncias econômicas entre os países na escala global e protege as culturas na escala local.
( ) Possibilita a integração de economias por meio do aparato tecnológico desenvolvido e difunde hábitos pelo mundo, como as redes de fast food.
( ) Proporciona, pelos meios da comunicação, maior visibilidade a culturas locais incluindo as minorias, os povos e culturas de recantos isolados do mundo.
( ) Por ser global, anulou a xenofobia e diminuiu consideravelmente os conflitos étnicos e religiosos em todo o planeta, em especial nos países da América Latina e da África Austral.
( ) As formações de blocos econômicos facilitam a circulação de mercadorias, proporcionando maiores mercados consumidores e investimentos de capital financeiro numa escala global.

Assinale a sequência correta:</h2>

<p> A)  F, V, V, F, V;</p> 
<p> B) V, F, V, V, F;</p>
<p> C) V, F, F, F, V;</p>
<p> D) F, V, F, F, V;</p>
<p><b><h2><font color="#008000"> E)  F, V, F, V, V</p></font></b></h2>
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

<p><h2><font color="#008000"><b> A) as empresas multinacionais definem a articulação entre a produção, mão-de-obra, mercado e matéria-prima. ;</p></font></b></h2>
<p> B) comporta processos relacionados à internacionalização da produção;</p>
<p> C)articulação de diversas partes que compõem um todo, com ampliação de distâncias, encolhimento de contextos e limitação de intercâmbios;</p>
<p> D)requalificação dos espaços para atender aos interesses dos atores hegemônicos da economia, da cultura e da política;</p>
<p> E)dinamismo renovado da divisão internacional do trabalho, principalmente nos países subdesenvolvidos.</p>
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


<h2>9) Sobre a globalização na atualidade, diferentes interpretações são elaboradas, sejam elas de ordem econômica, financeira, política e institucional.

Marque a alternativa que apresenta a dimensão econômica da globalização na atualidade.</h2>
<br>
<p>A) A internacionalização da economia viabilizou um vasto campo de investimentos externos, redefinindo as relações econômicas entre os países, tornando vulneráveis as economias e as moedas.;</p> 
<p> B)O processo de expansão capitalista promoveu a autonomia dos territórios e a dependência das empresas nacionais;</p>
<p> C) A lógica da dimensão econômica da globalização é pautada no crescimento do comércio em detrimento do avanço tecnológico.;</p>
<p><h2><font color="#008000"><b>  D) As moedas e mercadorias tornaram-se dependentes das empresas de tecnologia de informação afetando a soberania nacional
;</p></font></b></h2>
<p> E)O agravamento das questões políticas fortalecem os regimes autoritários por meio das questões sociais, culturais e econômicas
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
Na perspectiva do mercado capitalista globalizado a dependência internacional do petróleo da maior economia do planeta tem sido objeto de diversos conflitos, dentre eles o caso do Oriente Médio.

Sobre as questões internacionais na invasão do Iraque é CORRETO afirmar: </h2>
			
			<p> A) As invasões são elementos somente para combate ao terrorismo. ;</p>
			<p><h2><font color="#008000"> B) Representam o interesse das petroleiras norte-americanas na riqueza do Oriente Médio. </p></font></b></h2>
			<p>C) O golfo pérsico representa uma área de interesse somente dos palestinos.;</p>
			<p>D) Os interesses no Iraque pelos norte-americanos contrariam aos interesses da França e Alemanha.;</p>
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