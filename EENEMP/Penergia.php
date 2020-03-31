<?php
	session_start();
	
	if (!isset($_SESSION["logado"])) {
		
			if (!isset($_SESSION["logadoProf"])) {
	 echo "<script language='javascript' type='text/javascript'>
					alert('Você deve estar logado para acessar essa página');
                    window.location.href='sair.php';</script>";
                    die();
	}
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
	
	$_SESSION["questao1"] = $questao1;
	$_SESSION["questao2"] = $questao2;
	$_SESSION["questao3"] = $questao3;
	$_SESSION["questao4"] = $questao4;
	$_SESSION["questao5"] = $questao5;
	$_SESSION["questao6"] = $questao6;
	$_SESSION["questao7"] = $questao7;
	$_SESSION["questao8"] = $questao8;
	$_SESSION["questao9"] = $questao9;
	$_SESSION["questao10"] = $questao10;

	 echo"<script language='javascript' type='text/javascript'>
  		  alert('Prova enviada com sucesso!!');
		  window.location.href='Renergia.php';</script>";
          die();

	}

?>

<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Física</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Física sobre <font color=red>Energia</h1></font>
		</form>
		
		<form id="questoes" action="Penergia.php" method = "POST">
			<br>
			<h2>1) Uma análise criteriosa do desempenho de Usain Bolt na quebra do recorde mundial dos 100 metros rasos mostrou que, apesar de ser o último dos corredores a reagir ao tiro e iniciar a corrida, seus primeiros 30 metros foram os mais velozes já feitos em um recorde mundial, cruzando essa marca em 3,78 segundos. Até se colocar com o corpo reto, foram 13 passadas, mostrando sua potência durante a aceleração, o momento mais importante da corrida. Ao final desse percurso, Bolt havia atingido a velocidade máxima de 12 m/s. 

Disponível em: http://esporte.uol.com.br. Acesso em: 5 ago. 2012 (adaptado). 

Supondo que a massa desse corredor seja igual a 90 kg, o trabalho total realizado nas 13 primeiras passadas é mais próximo de::</h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A)5,4x102 J;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)6,5x103 J;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) 8,6x103 J;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) 1,3x104 J;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)3,2x104 J.</label>
			<br />
			<br />
			
			
			<h2>2- Embora as condições citadas sejam diferentes do cotidiano, o processo de acumulação de energia descrito é análogo ao da energia:</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) armazenada em um carrinho de montanha russa durante o trajeto.;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B) armazenada na água do reservatório de uma usina hidrelétrica..></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) liberada na queima de um palito de fósforo.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)gerada nos reatores das usinas nucleares.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E)acumulada em uma mola comprimida. ></label>
			<br />
			<br />
			
			<h2>3-Aumentar a eficiência dos processos de conversão de energia implica economizar recursos e combustíveis. Das propostas seguintes, qual resultará em maior aumento da eficiência geral do processo? :</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Aumentar a quantidade de combustível para queima na usina de força.;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)Utilizar lâmpadas incandescentes, que geram pouco calor e muita luminosidade.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Manter o menor número possível de aparelhos elétricos em funcionamento nas moradias.;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Utilizar cabos com menor diâmetro nas linhas de transmissão a fim de economizar o material condutor;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)Utilizar materiais com melhores propriedades condutoras nas linhas de transmissão e lâmpadas fluorescentes nas moradias.</label>
			<br />
			<br />
			
			<h2>4)  
Se fosse necessário melhorar o rendimento dessa usina, que forneceria eletricidade para abastecer uma cidade, qual das seguintes ações poderia resultar em alguma economia de energia, sem afetar a capacidade de geração da usina? 
 </h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) Reduzir a quantidade de combustível fornecido à usina para ser queimado.  ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) Reduzir o volume de água do lago que circula no condensador de vapor.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) Reduzir o tamanho da bomba usada para devolver a água líquida à caldeira.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)Melhorar a capacidade dos dutos com vapor conduzirem calor para o ambiente.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)  Usar o calor liberado com os gases pela chaminé para mover um outro gerador. .</label>
			<br />
			<br />
			
			<h2>5-
  
A construção das grandes usinas hidrelétricas foi uma tônica central no âmbito da produção de eletricidade e fontes de energia do Brasil. No entanto, em virtude das ressalvas, polêmicas e protestos contra os impactos ambientais gerados, o governo brasileiro vem adotando alternativas a essa estratégia.
Além da busca por outras matrizes energéticas, uma medida adotada foi:</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A)a substituição das hidrelétricas antigas por construções mais modernas e com efeitos atenuantes. ;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) a construção das PCHs (Pequenas Centrais Hidrelétricas), com menor impacto ambiental.;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) a migração das centrais para áreas de baixa densidade demográfica, como a região norte do país. ;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D)a substituição de todos os equipamentos existentes para aumentar a eficiência nos sistemas de produção e distribuição;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) a difusão de campanhas de grande apelo para a redução em massa do consumo de eletricidade, diminuindo a demanda.
.></label>
			<br />
			<br />
			
			<h2>6-
“Entre as grandes obras, a usina de Balbina, construída no meio da bacia sedimentar amazônica, a aproximadamente 200 km ao norte de Manaus, foi a que causou os maiores prejuízos. (…) Sua represa, que inundou 2594 km² da Floresta Amazônica, produz somente 250 MW, energia que abastece apenas 50% das necessidades de consumo de Manaus. Em suma, Balbina possui uma represa com dimensões comparáveis às de Tucuruí, mas a energia que pode produzir é praticamente irrisória (17 vezes menor que Tucuruí)”.
SENE, E.; MOREIRA, J. C. Geografia Geral e do Brasil: Espaço Geográfico e Globalização. São Paulo: Scipione, 2010. p.521.
O fator geográfico que explica a menor produtividade da usina de Balbina em relação à de Tucuruí é:.</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)ausência de cursos d'água volumosos;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) vazão fluvial muito intensa;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C)oscilações climáticas na região Norte;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) edificação da barragem em relevo plano;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E)  infiltração da água no ambiente sedimentar.</label>
			<br />
			<br />
			
			<h2>7) 

“Águas de março definem se falta luz este ano”. Esse foi o título de uma reportagem em jornal de circulação nacional, pouco antes do início do racionamento do consumo de energia elétrica, em 2001. No Brasil, a relação entre a produção de eletricidade e a utilização de recursos hídricos, estabelecida nessa manchete, se justifica porque::</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A) a geração de eletricidade nas usinas hidrelétricas exige a manutenção de um dado fluxo de água nas barragens.;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)  sistema de tratamento da água e sua distribuição consomem grande quantidade de energia elétrica.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C)a geração de eletricidade nas usinas termelétricas utiliza grande volume de água para refrigeração.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) o consumo de água e de energia elétrica utilizadas na indústria compete com o da agricultura.;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) é grande o uso de chuveiros elétricos, cuja operação implica abundante consumo de água.</label>
			<br />	
			<br />
		
			<h2>8)
Apesar de um relativo declínio nas últimas décadas, esse recurso natural continua sendo a mais importante fonte de energia da atualidade. Trata-se de uma fonte não renovável e que atua na produção de eletricidade, combustíveis e na constituição de matérias-primas para inúmeros produtos, como a borracha sintética e o plástico.
A descrição acima refere-se:</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) corrente elétrica no circuito fechado gera um campo magnético nessa região.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)  bobina imersa no campo magnético em circuito fechado gera uma corrente elétrica.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) bobina em atrito com o campo magnético no circuito fechado gera uma corrente elétrica.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) corrente elétrica é gerada em circuito fechado por causa da presença do campo magnético;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E)orrente elétrica é gerada em circuito fechado quando há variação do campo magnético.</label>
			<br />
			<br />
	
			<h2>9) O Brasil é um dos países que apresentam os maiores potenciais hidrelétricos do mundo, o que justifica, em partes, o fato de esse tipo de energia ser bastante utilizado no país. As usinas hidrelétricas são bastante elogiadas por serem consideradas ambientalmente mais corretas do que outras alternativas de produção de energia, mas vale lembrar que não existem formas 100% limpas de realizar esse processo.
Assinale a alternativa que indica, respectivamente, uma vantagem e uma desvantagem das hidroelétricas.	?</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) não emitem poluentes na atmosfera; porém não são muito eficientes.;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) são ambientalmente corretas; porém interferem diretamente no efeito estufa;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) a produção pode ser controlada; porém os custos são muito elevados.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D)ocupam pequenas áreas; porém interferem no curso dos rios.;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) a construção é rápida; porém duram pouco tempo.</label>
			<br />
			<br />

			<h2>10-São consideradas fontes de energia renováveis todo recurso que tem a capacidade de se refazer ou não é limitado. Com base nessa informação, abaixo estão listadas fontes de energias renováveis, exceto:.</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A) energia hidrelétrica;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) gás natural;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) energia eólica;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D)energia solar;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) biocombustíveis.</label>
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