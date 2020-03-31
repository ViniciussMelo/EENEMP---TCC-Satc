<?php
	session_start();
	include_once("connection.php");
	if (!isset($_SESSION["logado"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
}
if(isset($_POST['enviar'])){
	$questao1 = $_POST["questao1"];
	$questao2 = $_POST["questao2"];
	$questao3 = $_POST["questao3"];
	$questao4 = $_POST["questao4"];
	$questao5 = $_POST["questao5"];
	$questao6 = $_POST["questao6"];
	$questao7 = $_POST["questao7"];
	$questao8 = $_POST["questao8"];
	$questao9 = $_POST["questao9"];
	$questao10 = $_POST["questao10"];

	if ($questao1 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 1 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao2 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 2 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao3 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 3 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao4 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 4 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao5 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 5 em branco!!');
		  window.location.href='simulado.php';</script>";
          die();
  }
  if ($questao6 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 6 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao7 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 7 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao8 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 8 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao9 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 9 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  if ($questao10 == ""){
	  echo"<script language='javascript' type='text/javascript'>
  		  alert('Questão 10 em branco!!');
		  window.location.href='PSolidosGeometricos.php';</script>";
          die();
  }
  else{
	$email = $_SESSION['logado'];
	$prova = "Prova de matematica";
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
	
	$verifica = ("SELECT emailUsuario from historico where emailUsuario = '$email'");
	$res = mysql_query($verifica);
	$prova = "prova de matematica";
	$materia = "Porcentagem";
	
	if (mysql_num_rows ( $res ) !=1)
      {
	$sql = "INSERT INTO historico (nomeProva,materiaProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$acertou','$errou','$porcent','$data')";
	$res = mysql_query($sql);
	if ($res)
      {
          echo"<script language='javascript' type='text/javascript'>
  		  alert('Prova enviada com Sucesso!!!');</script>";
		  die();
	  }else
      {
          echo 'Falha ao enviar prova!!! ';
      }  
	  }
	  else{
		  $sql2 = "INSERT INTO resultados (nomeProva,materiaProva,emailUsuario,acertosUsuario,errosUsuario,porcentagemDeAcertosUsuario,data) VALUES ('$prova','$materia','$email','$acertou','$errou','$porcent','$data')";
		  $res2 = mysql_query($sql2);
			if ($res)
			{
				echo"<script language='javascript' type='text/javascript'>
				alert('Prova já realizada, novos dados enviados com sucesso!!!');</script>";
				
		  ?>
<html>
<head>
	<title>Concluido</title>
	<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<div id="tituloR">
		<h1>Você concluiu com sucesso a avaliação!</h1>
	</div>
	<form id="questoesR" name ="questoesR" enctype="multipart/form-data" >
<br>
<h2>1) Quanto é 50% de 200?: </h2>
<p>
<p>A) 25;;</p>
<p>B) 50;</p>
<p><h2><font color="#008000"><b>C) 100</p></font></b></h2>
<p>D) 75;</p>
<p>E) 125;</p>
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

<h2>2) Na sala de aula, a professora descobriu que 40% dos alunos são corintianos, 30% torcem pro São Paulo, 20% são palmeirenses, 10% torcem pro Santos e o resto não gosta de futebol. Sabendo que existem 40 alunos na sala, quantos torcem para o São Paulo?</h2>
			
<p>A) 24></p>
<p>B) 20></p>
<p><b><h2><font color="#008000">C) 12></p></font></b></h2>
<p>D) 14></p>
<p>E) 8></p>
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


<h2>3) João comprou uma TV e resolveu pagar à prazo, pois não podia pagar à vista. Sabendo que o valor à vista é de R$ 1500,00 e que o valor total à prazo é 15% maior que o valor à vista, responda: Quanto João vai pagar no total?:</h2>

<p>A)R$ 1575,00;</p>
<p>B) R$ 1650,00;</p>
<p>C) R$ 1875,00;</p>
<p><h2><font color="#008000"><b>D) R$ 1725,00;</p></font></b></h2>
<p>E) R$ 1800,00.</p>
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


<h2>4) Maria comprou um vestido à vista para ganhar um desconto de 5% no valor original dele. Se o vestido custa R$ 60,00, quanto Maria pagou?</h2>

<p><h2><font color="#008000"><b>A) 9812,5 cm2;</p></font></b></h2>
<p> B) R$ 52,00;</p>
<p> C) R$ 53,00;</p>
<p> D) R$ 51,00;</p>
<p> E) R$ 50,00.</p>
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


<h2>5) Três é quantos porcento de cinco?</h2>

<p><h2><font color="#008000"><b> A) 60%></p></font></b></h2>
<p> B) 50%></p>
<p> C) 80%></p>
<p> D) 70%></p>
<p> E) 90%></p>
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


<h2>6) Quanto é 20% ao quadrado?</h2>

<p> A) 40%;</p> 
<p> B) 0,4%;</p>
<p> C) 0,04%;</p>
<p><h2><font color="#008000"><b> 4%;</p></font></b></h2>
<p> E) 0,40%</p>
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

<h2>7) Carlos estava sempre chegando muito cansado no trabalho. O chefe dele percebeu isso e falou que ele deveria passar pelo menos um terço do dia dormindo. Levando isso em consideração, quantas horas Carlos deveria dormir?</h2>

<p> A)6 horas;</p> 
<p> B) 10 horas;</p>
<p> C) 14 horas;</p>
<p> D) 12 horas</p>
<p><b><h2><font color="#008000"> E) 8</p></font></b></h2>
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

<h2>8) No dia 1 deste mês, um produto estava sendo vendido por R$ 400,00. No dia 10, esse produto sofreu um redução de 50% no seu preço. No dia 20, ele foi reajustado com um aumento de 50%. Escolha a alternativa correta.</h2>

<p><h2><font color="#008000"><b> A) No dia 20 o produto estava com o mesmo preço que ele estava no dia 1.</p></font></b></h2>
<p> B) O produto estava mais barato no dia 1 do que no dia 20;</p>
<p> C) O produto estava mais barato no dia 20 do que no dia 1;</p>
<p> D) O produto é mais barato no dia 20.;</p>
<p> E) O produto é mais barato em outros dias.</p>
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


<h2>9) Ana tem 20 anos e morou durante 5 anos nos Estados Unidos, 4 anos na Austrália e o resto no Brasil. Em porcentagem, quantos anos ela morou no hemisfério sul?</h2>
<br>
<p>A) 20%</p> 
<p> B) 25%;</p>
<p> C) 50%;</p>
<p><h2><font color="#008000"><b>  D) 75%;</p></font></b></h2>
<p> E) 60%.</p>
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


<h2>10) Fernanda ganha 10% a mais que Paulo. Se Fernanda ganhar um aumento de 20%, quantos porcento ela ganhará a mais que Paulo?</h2>
			
			<p> A) 10%.;</p>
			<p><h2><font color="#008000"> B)  32%.;</p></font></b></h2>
			<p>C) 16%.;</p>
			<p>D) 20%.;</p>
			<p>E) 30% m.</p>
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
<p align="center">
<a href="logadoAluno.php" id="enviar">Página inicial</a>
</form>
</body>
</html>
		<?php
				die();
			}
				}
				
				{
				 echo 'Falha ao enviar prova!!! ';
				}
	  }
  }

	?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de matemática</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de matemática sobre <font color=red>Porcentagem</h1></font>
		</form>
		
		<form id="questoes" action="porcentagem.php" method = "POST">
			<br>
			<h2>1) Quanto é 50% de 200?: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) 25;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  50;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 75;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D)100;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E) 125</label>
			<br />
			<br />
			
			
			<h2>2) Na sala de aula, a professora descobriu que 40% dos alunos são corintianos, 30% torcem pro São Paulo, 20% são palmeirenses, 10% torcem pro Santos e o resto não gosta de futebol. Sabendo que existem 40 alunos na sala, quantos torcem para o São Paulo?.</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) 24></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) 20></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) 16></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) 12></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) 8></label>
			<br />
			<br />
			
			<h2>3)  João comprou uma TV e resolveu pagar à prazo, pois não podia pagar à vista. Sabendo que o valor à vista é de R$ 1500,00 e que o valor total à prazo é 15% maior que o valor à vista, responda: Quanto João vai pagar no total?</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) R$ 1575,00;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) 1650,00;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C)R$ 1800,00;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) R$ 1670,00;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) R$ 1875,00.</label>
			<br />
			<br />
			
			<h2>4) Maria comprou um vestido à vista para ganhar um desconto de 5% no valor original dele. Se o vestido custa R$ 60,00, quanto Maria pagou??</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) R$ 59,50</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) R$ 58,802;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) R$ 58,20;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) R$ 57,60</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) R$ 57,00.</label>
			<br />
			<br />
			
			<h2>5) Três é quantos porcento de cinco??</h2>
		
			<input type="radio" name="questao5" value="a" /> A) 90%></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) 80%></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) 70%></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) 60%></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E)  50%></label>
			<br />
			<br />
			
			<h2>6) Quanto é 20% ao quadrado?</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A) 40%;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) 4%;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) 0,4%;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) 0,04%;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) 0,40%.</label>
			<br />
			<br />
			
			<h2>7)  Carlos estava sempre chegando muito cansado no trabalho. O chefe dele percebeu isso e falou que ele deveria passar pelo menos um terço do dia dormindo. Levando isso em consideração, quantas horas Carlos deveria dormir?:</h2>
			
			<br>
			<input type="radio" name="questao7" value="a" /> A)6 horas;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) 8 horas;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) 10 horas;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) 12 horas;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) 14 horas.</label>
			<br />	
			<br />
		
			<h2>8) No dia 1 deste mês, um produto estava sendo vendido por R$ 400,00. No dia 10, esse produto sofreu um redução de 50% no seu preço. No dia 20, ele foi reajustado com um aumento de 50%. Escolha a alternativa correta.</h2>
			
			<input type="radio" name="questao8" value="a" /> A) O produto estava mais barato no dia 1 do que no dia 20;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B) No dia 20 o produto estava com o mesmo preço que ele estava no dia 1.</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) O produto estava mais barato no dia 20 do que no dia 1.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) O produto estava mais barato em outros dias</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) O produto nao esta barato</label>
			<br />
			<br />
	
			<h2>9) Ana tem 20 anos e morou durante 5 anos nos Estados Unidos, 4 anos na Austrália e o resto no Brasil. Em porcentagem, quantos anos ela morou no hemisfério sul?</h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) 20%;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) 25%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C)50%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) 60%;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) 75%.</label>
			<br />
			<br />

			<h2>10) Fernanda ganha 10% a mais que Paulo. Se Fernanda ganhar um aumento de 20%, quantos porcento ela ganhará a mais que Paulo?.</h2>
		
			<br>
			<input type="radio" name="questao10" value="a" /> A) 10%;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) 16%.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) 20%;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) 30%;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) 32%.</label>
			<br />
			<br />
			<br>
			<p align="center">
			<input type="submit" name="enviar" id = "enviar" value="Ver resultados" />
			</p>
			<br>

		</form>
	</div>
	<script>
	function pegarDataAtual(){
		data = new Date();
		document.getElementById('data').value = data.getDay()+'/'+data.getMonth()+'/'+data.getFullYear();
	}
	</script>
	</body>
</html>