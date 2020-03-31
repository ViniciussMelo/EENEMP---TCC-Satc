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
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='Penergia.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='Penergia.php';</script>";
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
	$prova = "prova de fisica";
	$materia = "energia";
	
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
<h2>1) Uma análise criteriosa do desempenho de Usain Bolt na quebra do recorde mundial dos 100 metros rasos mostrou que, apesar de ser o último dos corredores a reagir ao tiro e iniciar a corrida, seus primeiros 30 metros foram os mais velozes já feitos em um recorde mundial, cruzando essa marca em 3,78 segundos. Até se colocar com o corpo reto, foram 13 passadas, mostrando sua potência durante a aceleração, o momento mais importante da corrida. Ao final desse percurso, Bolt havia atingido a velocidade máxima de 12 m/s. 

Disponível em: http://esporte.uol.com.br. Acesso em: 5 ago. 2012 (adaptado). 

Supondo que a massa desse corredor seja igual a 90 kg, o trabalho total realizado nas 13 primeiras passadas é mais próximo de:: </h2>
<p>
<p>A) 5,4x102 J;</p>
<p>B) 6,5x103 J;</p>
<p><h2><font color="#008000"><b>C)  8,6x103 J;</p></font></b></h2>
<p>D)  1,3x104 J;</p>
<p>E)3,2x104 J.</p>
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
<p>Para diminuir os impactos ambientais e o apelo social causado pela construção das grandes hidrelétricas, o governo brasileiro nos últimos anos optou pela construção das PCHs (Pequenas Centrais Hidrelétricas), distribuídas por todo o território nacional.
Alternativa correta: letra B
<br><br>

<h2>2) Embora as condições citadas sejam diferentes do cotidiano, o processo de acumulação de energia descrito é análogo ao da energia
:</h2>
			
<p>A) 2 . 1015 elétrons.></p>
<p>B)  200 elétrons.></p>
<p><b><h2><font color="#008000">C)um excesso de 2. 1015 elétrons</p></font></b></h2>
<p>D)  2 . 1010 elétrons.></p>
<p>E) um excesso de 2 . 1010 elétrons .></p>
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
<p>Os dois recursos mais utilizados como fontes renováveis de energia no Brasil são a água (hidroeletricidade) e a biomassa (biocombustíveis).
Já os recursos não renováveis mais empregados no Brasil são o petróleo e o gás natural.
Alternativa correta: letra C
<br><br>

<br>
<br />

<h2>3)
Aumentar a eficiência dos processos de conversão de energia implica economizar recursos e combustíveis. Das propostas seguintes, qual resultará em maior aumento da eficiência geral do processo? :</h2>

<p>A) Aumentar a quantidade de combustível para queima na usina de força.;</p>
<p>B)  Utilizar lâmpadas incandescentes, que geram pouco calor e muita luminosidade.;</p>
<p>C) Manter o menor número possível de aparelhos elétricos em funcionamento nas moradias.;</p>
<p><h2><font color="#008000"><b>D) Utilizar cabos com menor diâmetro nas linhas de transmissão a fim de economizar o material condutor.;</p></font></b></h2>
<p>E) Utilizar materiais com melhores propriedades condutoras nas linhas de transmissão e lâmpadas fluorescentes nas moradias.</p>
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
<p>Na região da Amazônia, em algumas áreas, o relevo é muito plano e, portanto, pouco acidentado. Isso dificulta a construção de barragens, que precisam de um relevo mais adequado para aumentar a velocidade de queda da água, o que não ocorre nas planícies fluviais das bacias sedimentares amazônicas.
Alternativa correta: letra D
<br><br>


<h2>4) 
    Se fosse necessário melhorar o rendimento dessa usina, que forneceria eletricidade para abastecer uma cidade, qual das seguintes ações poderia resultar em alguma economia de energia, sem afetar a capacidade de geração da usina? </h2>

<p><h2><font color="#008000"><b>A) Reduzir a quantidade de combustível fornecido à usina para ser queimado.;</p></font></b></h2>
<p> B)Reduzir o volume de água do lago que circula no condensador de vapor.;</p>
<p> C)Reduzir o tamanho da bomba usada para devolver a água líquida à caldeira. ;</p>
<p> D) Melhorar a capacidade dos dutos com vapor conduzirem calor para o ambiente.;</p>
<p> E) Usar o calor liberado com os gases pela chaminé para mover um outro gerador.
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

<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>Na região da Amazônia, em algumas áreas, o relevo é muito plano e, portanto, pouco acidentado. Isso dificulta a construção de barragens, que precisam de um relevo mais adequado para aumentar a velocidade de queda da água, o que não ocorre nas planícies fluviais das bacias sedimentares amazônicas.
Alternativa correta: letra D
<br><br>
	

<h2>5)   A construção das grandes usinas hidrelétricas foi uma tônica central no âmbito da produção de eletricidade e fontes de energia do Brasil. No entanto, em virtude das ressalvas, polêmicas e protestos contra os impactos ambientais gerados, o governo brasileiro vem adotando alternativas a essa estratégia.
Além da busca por outras matrizes energéticas, uma medida adotada foi:</h2>

<p><h2><font color="#008000"><b> A) a substituição das hidrelétricas antigas por construções mais modernas e com efeitos atenuantes.></p></font></b></h2>
<p> B)a construção das PCHs (Pequenas Centrais Hidrelétricas), com menor impacto ambiental. </p>
<p> C) a migração das centrais para áreas de baixa densidade demográfica, como a região norte do país. </p>
<p> D) a substituição de todos os equipamentos existentes para aumentar a eficiência nos sistemas de produção e distribuição. </p>
<p> E) a difusão de campanhas de grande apelo para a redução em massa do consumo de eletricidade, diminuindo a demanda.
 .></p>
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


<h2>6)“Entre as grandes obras, a usina de Balbina, construída no meio da bacia sedimentar amazônica, a aproximadamente 200 km ao norte de Manaus, foi a que causou os maiores prejuízos. (…) Sua represa, que inundou 2594 km² da Floresta Amazônica, produz somente 250 MW, energia que abastece apenas 50% das necessidades de consumo de Manaus. Em suma, Balbina possui uma represa com dimensões comparáveis às de Tucuruí, mas a energia que pode produzir é praticamente irrisória (17 vezes menor que Tucuruí)”.
SENE, E.; MOREIRA, J. C. Geografia Geral e do Brasil: Espaço Geográfico e Globalização. São Paulo: Scipione, 2010. p.521.
O fator geográfico que explica a menor produtividade da usina de Balbina em relação à de Tucuruí é:</h2>

<p> A)  ausência de cursos d'água volumosos;</p> 
<p> B) vazão fluvial muito intensa;</p>
<p> C)  oscilações climáticas na região Norte;</p>
<p><h2><font color="#008000"><b>D)edificação da barragem em relevo plano;</p></font></b></h2>
<p> E)infiltração da água no ambiente sedimentar.</p>
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
“Águas de março definem se falta luz este ano”. Esse foi o título de uma reportagem em jornal de circulação nacional, pouco antes do início do racionamento do consumo de energia elétrica, em 2001. No Brasil, a relação entre a produção de eletricidade e a utilização de recursos hídricos, estabelecida nessa manchete, se justifica porque:</h2>

<p> A) a geração de eletricidade nas usinas hidrelétricas exige a manutenção de um dado fluxo de água nas barragens.;</p> 
<p> B)o sistema de tratamento da água e sua distribuição consomem grande quantidade de energia elétrica;</p>
<p> C)a geração de eletricidade nas usinas termelétricas utiliza grande volume de água para refrigeração;</p>
<p> D)o consumo de água e de energia elétrica utilizadas na indústria compete com o da agricultura;</p>
<p><b><h2><font color="#008000"> E)   é grande o uso de chuveiros elétricos, cuja operação implica abundante consumo de água
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

Apesar de um relativo declínio nas últimas décadas, esse recurso natural continua sendo a mais importante fonte de energia da atualidade. Trata-se de uma fonte não renovável e que atua na produção de eletricidade, combustíveis e na constituição de matérias-primas para inúmeros produtos, como a borracha sintética e o plástico.:</h2>

<p><h2><font color="#008000"><b> A) ao gás natural;</p></font></b></h2>
<p> B)ao xisto betuminoso;</p>
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

<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>Os dois recursos mais utilizados como fontes renováveis de energia no Brasil são a água (hidroeletricidade) e a biomassa (biocombustíveis).
Já os recursos não renováveis mais empregados no Brasil são o petróleo e o gás natural.
Alternativa correta: letra C
<br><br>


<h2>9) 

O Brasil é um dos países que apresentam os maiores potenciais hidrelétricos do mundo, o que justifica, em partes, o fato de esse tipo de energia ser bastante utilizado no país. As usinas hidrelétricas são bastante elogiadas por serem consideradas ambientalmente mais corretas do que outras alternativas de produção de energia, mas vale lembrar que não existem formas 100% limpas de realizar esse processo.
Assinale a alternativa que indica, respectivamente, uma vantagem e uma desvantagem das hidroelétricas.?</h2>
<br>
<p>A) não emitem poluentes na atmosfera; porém não são muito eficientes.</p> 
<p> B) são ambientalmente corretas; porém interferem diretamente no efeito estufa.;</p>
<p> C) a produção pode ser controlada; porém os custos são muito elevados.;</p>
<p><h2><font color="#008000"><b>  D)ocupam pequenas áreas; porém interferem no curso dos rios.;</p></font></b></h2>
<p> E)a construção é rápida; porém duram pouco tempo.</p>
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

<h2><font color="#008000"><b><i>Resolução:</p></b></i></h2></font>
<p>
fontes não renováveis de energia: petróleo, carvão mineral, gás natural, xisto betuminoso, urânio, entre outros.
<br><br>


<h2>10) São consideradas fontes de energia renováveis todo recurso que tem a capacidade de se refazer ou não é limitado. Com base nessa informação, abaixo estão listadas fontes de energias renováveis, exceto:.</h2>
			
			<p> A) nergia hidrelétrica;</p>
			<p><h2><font color="#008000"> B) gás natural;</p></font></b></h2>
			<p>C) energia eólica;</p>
			<p>D)  energia solar.;</p>
			<p>E) biocombustíveis</p>
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
<p>Letra D
O petróleo é a fonte de energia mais utilizada 	no mundo. Embora seja uma energia não renovável e, portanto, finita, as economias de vários países ainda estão baseadas nesse minério fóssil.
<br><br>

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