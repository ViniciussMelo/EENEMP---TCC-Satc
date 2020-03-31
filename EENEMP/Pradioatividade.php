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
		  window.location.href='Rradioatividade.php';</script>";
          die();

	}

?>

<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Quimica</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de Quimica sobre <font color=red>Radioatividade</h1></font>
		</form>
		
		<form id="questoes" action="Pradioatividade.php" method = "POST">
			<br>
			<h2>1) Quando um elemento X emite partícula beta, transforma-se em Y. Os elementos X e Y são:</h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) isótopos;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B) isóbaros;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C)  alótropos;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) isótonos;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)isoeletrônicos.</label>
			<br />
			<br />
			
			
			<h2>2-A bomba de hidrogênio é um exemplo de reação nuclear:</h2>
			<br>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) do tipo fissão;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)onde ocorre apenas emissão de raios alfa;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C) onde ocorre apenas emissão de raios beta;></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D) do tipo fusão;.></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) onde ocorre apenas emissão de raios gama. ></label>
			<br />
			<br />
			
			<h2>3- Entidades ligadas à preservação
ambiental têm exercido fortes pressões para a redução da
produção de gases CFC (clorofluorcarbonos). Isto se deve
principalmente ao fato de os CFC:</h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) reagirem com H2O2 produzindo ácidos e chuva ácida;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B) reagirem espontaneamente com O3 produzindo CO2 e
agravando o efeito estufa;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) escaparem para o espaço, provocando o fenômeno da
inversão térmica;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) reagirem com oxigênio a baixas pressões, produzindo
ozônio;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E)produzirem sob a ação de  luz radicais livres, que reagem
com o ozônio.</label>
			<br />
			<br />
			
			<h2>4) A combustão de carvão e de derivados de
petróleo aumenta a concentração de um gás na atmosfera,
provocando o efeito estufa. O gás em questão é:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A) Cl2;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) O3;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) H2;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D)CO2;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E)  O2.</label>
			<br />
			<br />
			
			<h2>5- Assinale, dentre os materiais abaixo,
aquele que, se for depositado em lixões, não contaminará o
solo ou o lençol freático.</h2>
						<label>
			<input type="radio" name="questao5" value="a" /> A) Bateria de celular;></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) Vidro incolor;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) Pilha comum;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) Lixo hospitalar;></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) Lâmpada de mercúrio.></label>
			<br />
			<br />
			
			<h2>6-A única fonte de energia, dentre as citadas
abaixo, que não resulta na produção de substâncias
poluentes, nem causa qualquer impacto ambiental, é a
energia.</h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)  termelétrica.;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) nuclear;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) eólica;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) de biomassa.;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) hidrelétrica.</label>
			<br />
			<br />
			
			<h2>7) Em alguns municípios do Brasil, adota-se
uma forma bastante cruel de controlar a população de cães
abandonados nas ruas: prendem-se os animais em
compartimentos vedados, onde se introduz uma mangueira
acoplada ao escapamento de um caminhão, cujo motor está
funcionando em “ponto morto”.A substância que mata os cães é:</h2>
				
			<br>
			<input type="radio" name="questao7" value="a" /> A) KCN;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B) H2;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) CO;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D) NH3;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) HCN.</label>
			<br />	
			<br />
		
			<h2>8) No ar das grandes cidades, são
encontrados hidrocarbonetos e aldeídos como poluentes.
Estes provêm da utilização, pelos meios de transporte,
respectivamente, de:</h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A) metanol e etanol;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)  metanol e gasolina;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) etanol e óleo diesel;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D) gasolina e etanol;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) gasolina e óleo diesel.</label>
			<br />
			<br />
	
			<h2>9) O biodiesel praticamente não contém
enxofre em sua composição. Devido a esse fato, sua
combustão apresenta vantagens em relação à do diesel
do petróleo, no que diz respeito ao fenômeno</h2>
			<br>
			
			<br>
			<input type="radio" name="questao9" value="a" /> A) da chuva ácida;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) da destruição da camada de ozônio;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) do efeito estufa;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) do efeito estufa;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E) do efeito tyndall.</label>
			<br />
			<br />

			<h2>10-O protocolo de Kyoto estabelece a
redução da emissão de gases causadores do efeito estufa.
Alguns desses gases são o dióxido de carbono, CO2, o
monóxido de dinitrogênio, N2O, e o metano, CH4.
Considerando-se a atuação desses gases, é CORRETO
afirmar que.</h2>
			<br>
			
			<br>
			<input type="radio" name="questao10" value="a" /> A) os três absorvem radiação no infravermelho;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B) a reação do metano com água causa a chuva ácida;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) os três produzem materiais particulados na atmosfera;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) o dióxido de carbono é produzido na combustão do gás
hidrogênio;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E)  é produzido na combustão do carbono.</label>
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