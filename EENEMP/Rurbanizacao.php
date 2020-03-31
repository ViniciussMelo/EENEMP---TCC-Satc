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
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Purbanizacao.php';</script>";
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
	$materia = "urbanizacao";
	
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
<h2>1)Todo mapa apresenta algumas informações essenciais e responde a certas questões. Onde? O quê? Quanto? Essas são algumas perguntas que se pode fazer sobre os elementos que compõem o espaço geográfico e que representam a diversidade dos fenômenos que podem ser cartografados. Considerando o mapa abaixo, assinale a alternativa que indica o método de representação da cartografia temática utilizado para elaborá-lo.: </h2>
<p>
<p>A) Representações qualitativas.;</p>
<p>B)Representações quantitativas.  ;</p>
<p><h2><font color="#008000"><b>C) Representações ordenadas.; Gibraltar, à Espanha; e, Cabo Verde, a Portugal ;</p></font></b></h2>
<p>D) Representações dinâmicas.;</p>
<p>E) Representações estáticas;</p>
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


<h2>2) No que se refere à coleta e ao registro de informações do Cadastro Territorial Multifinalitário marque a única opção errada:   </h2>
			
			
<p>A)   Cada parcela recebe uma identificação numérica inequívoca.  ></p>
<p>B) O levantamento cadastral para a identificação geométrica das parcelas territoriais deve ser referenciado ao Sistema Geodésico Brasileiro.   ></p>
<p><b><h2><font color="#008000">C) Será conservada e mantida a inviolabilidade dos marcos vinculados ao Sistema Geodésico Brasileiro, de acordo com as recomendações do IBGE. . ></p></font></b></h2>
<p>D) Levantamentos e locações de obras e novos loteamentos devem ser referenciados ao Sistema Geodésico Brasileiro, apoiados nos marcos municipais correspondentes. .></p>
<p>E) Os vértices que definem os limites de cada parcela devem constituir uma figura geométrica aberta. . ></p>
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
O Cadastro Técnico Multifinalitário pode ser entendido como um sistema de registro dos elementos espaciais que representam a estrutura urbana, constituído por uma componente geométrica e outra descritiva que lhe conferem agilidade e diversidade no fornecimento de dados para atender a diferentes funções, inclusive a de planejamento urbano. Marque a única opção incorreta sobre o Cadastro Técnico Multifinalitário:</h2>

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


<h2>4) 
Analise as afirmativas abaixo e identifique qual não se refere aos coletores eletrônicos de dados utilizados no cadastro imobiliário:</h2>

<p><h2><font color="#008000"><b>A)Avaliação em tempo real de consistência dos dados ;</p></font></b></h2>
<p> B) Cruzamento de informações;</p>
<p> C) Formação do banco de dados ;</p>
<p> D) Controle de produção e produtividade;</p>
<p> E) Eliminação das saídas a campo.</p>
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

Marque a única alternativa ERRADA no que diz respeito aos levantamentos cadastrais urbanos poderem empregar métodos clássicos tais como o método ortogonal: :</h2>

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


<h2>6)Nos levantamentos cadastrais urbanos também podemos empregar o método de posicionamento polar tradicional. A respeito deste método, a alternativa INCORRETA é: 
</h2>

<p> A)Usa um sistema de coordenadas polares;</p> 
<p> B)Os ângulos podem ser medidos por teodolito;</p>
<p> C)As distâncias podem ser medidas por medidores eletrônicos ;</p>
<p><h2><font color="#008000"><b> D)Este método usa apenas medições lineares a trena e balizas. 
;</p></font></b></h2>
<p> E) Este método usa medição de ângulos e distâncias horizontais. 
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


<h2>7) Os levantamentos cadastrais de propriedades urbanas referem-se à localização dos limites destas e a preparação de desenhos (ou plantas) que mostram estes limites. Para obtenção desta planta ou levantamento de imóvel urbano, marque a única alternativa correta:		</h2>

<p> A) Sempre usar um sistema de coordenadas plano-retangulares arbitrárias ou locais;</p> 
<p> B)  Sempre usar escalas pequenas abaixo de 1:100.000, por exemplo;</p>
<p> C) Sempre usar escalas médias abaixo de 1/:20.000, por exemplo;</p>
<p> D) Nunca usar escalas grandes ou maiores que 1:1000.;</p>
<p><b><h2><font color="#008000"> E)  Se existir uma rede de referência cadastral municipal, por exemplo, devem-se usar coordenadas plano-retangulares oficiais, que podem ser obtidas por intermédio de um rastreio com uso de tecnologia GPS.</p></font></b></h2>
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
Qual das alternativas abaixo NÃO faz parte do Cadastro Técnico Multifinalitário: .</h2>

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


<h2>9) A efetivação da inscrição ou a transferência de nome e endereço no cadastro imobiliário, de acordo com a lei vigente, deve ser feita, a partir da data da escritura definitiva ou compromisso de compra e venda do imóvel, no prazo máximo de:/h2>
<br>
<p>A) 45 dias.;</p> 
<p> B)60 dias;</p>
<p> C) 30 dias;</p>
<p><h2><font color="#008000"><b>  D)90 dias;
;</p></font></b></h2>
<p> E)15 dias.	</p>
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
A Geografia mobiliza diferentes categorias para a análise do espaço geográfico, dentre as quais destaca-se o território. Raffestin e Souza são exemplos de autores que contribuem com o debate sobre essa categoria. Como elementos comuns à problemática apresentada por esses autores está a compreensão de território como : </h2>
			
			<p> A) área geográfica ocupada por uma população de uma mesma espécie, em um mesmo intervalo de tempo ;</p>
			<p><h2><font color="#008000"> B) limite físico determinado pela jurisprudência estatal, no qual o Estado exerce soberania. </p></font></b></h2>
			<p>C) espaço produzido pelos homens, mediante relações sociais arquitetadas por e a partir de relações de poder;</p>
			<p>D)porção do espaço ocupado por uma população, que possui os mesmos hábitos culturais.;</p>
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