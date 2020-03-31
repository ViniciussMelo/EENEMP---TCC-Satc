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
		  window.location.href='Rfiguras.php';</script>";
          die();

	}

?>
<!DOCTYPEHTML>
<html>
	<head>
		<title>Prova de Português</title>
		<link href="codigo.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="utf-8">
	</head>
	<body bgcolor="BEC5BE">
	<div id="all">
		<form id="titulo">
			<h1>Prova de português sobre <font color=red>Figuras de linguagem</h1></font>
		</form>
		
		<form id="questoes" action="Pfiguras.php" method = "POST">
			<br>
			<h2>1) “A resposta que lhe daria seria: “Essa estória não aconteceu nunca para que aconteça sempre...”(5º§)

No último período, ocorre um jogo de palavras entre os advérbios explicitando a seguinte fgura de linguagem: </h2>
			<p>
			<label>
			<input type="radio" name="questao1" value="a" />A) ironia.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="b" />B)  eufemismo.  ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="c" />C) paradoxo ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="d" />D) personificação. ;</label>
			<br />
			<label>
			<input type="radio" name="questao1" value="e" />E)antitese .</label>
			<br />
			<br />
			
			
			<h2>2) 
“A conclusão óbvia é que uma língua não é como nos ensinaram: clara e relacionada diretamente a um fato ou situação que ela representa como um espelho.” (3º§)

 Ao aproximar, semanticamente,	a língua de um espelho, o autor emprega a seguinte figura de linguagem:
.</h2>
			
			<label>
			<input type="radio" name="questao2" value="a" /> A) Hipérbole.  ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="b" /> B)Metafora ></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="c" /> C)  Eufemismo	></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="d" /> D)Símile></label>
			<br />
			<label>
			<input type="radio" name="questao2" value="e" /> E) Prosopopeia></label>
			<br />
			<br />
			
			<h2>3)

Na passagem “Claro que não! Afinal, você é você! Se você acabar, acaba tudo e, convenhamos, isso não faz o menor sentido.” (4º§), o autor faz uso da figura de linguagem: </h2>
			
			<label>
			<input type="radio" name="questao3" value="a" /> A) Prosopopeia.  ;</label> 
			<br />
			<label>
			<input type="radio" name="questao3" value="b" /> B)Metafora ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="c" /> C) Ironia ;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="d" /> D) Metonimia;</label>
			<br />
			<label>
			<input type="radio" name="questao3" value="e" /> E) Comparação .</label>
			<br />
			<br />
			
			<h2>4) Assinale a alternativa correta referente aos excertos do Texto 1:</h2>
			
			<label>
			<input type="radio" name="questao4" value="a" /> A)No excerto “[...] as cobranças são cada vez mais intensas e frequentes [...]”, os termos em destaque constituem uma relação de sinonímia.  ;</label> 
			<br />
			<label>
			<input type="radio" name="questao4" value="b" /> B) No excerto “O acúmulo de compromissos preenche horários livres, adia o lazer e a vida social [...]”, tem-se a figura de linguagem chamada Zeugma.;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="c" /> C) No excerto “As demandas exigem que as pessoas tenham inúmeras habilidades e qualificações acadêmicas [...]”, o termo “demandas” pode ser substituído por “vicissitudes” sem alterar o sentido da frase. .;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="d" /> D) No excerto “Uma mãe de família sai às 7 horas da manhã para deixar as crianças na escola.”, tem-se a figura de linguagem chamada Sinédoque.   ;</label>
			<br />
			<label>
			<input type="radio" name="questao4" value="e" /> E) No excerto “Uma mãe de família sai às 7 horas da manhã para deixar as crianças na escola.”, tem-se a figura de linguagem chamada Sinédoque.   .</label>
			<br />
			<br />
			
			<h2>5) No texto, a metáfora que está associada, à “maldição de Netuno” (parágrafo 10) é:  ?</h2>
		
			<label>
			<input type="radio" name="questao5" value="a" /> A) “queimou a língua” (parágrafo 4). ></label> 
			<br />
			<label>
			<input type="radio" name="questao5" value="b" /> B) “palavrão que sobrevive” (parágrafo 6). ></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="c" /> C) “enxurrada de opiniões” (parágrafo 8)></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="d" /> D) “textos apócrifos” (parágrafo 8). 
></label>
			<br />
			<label>
			<input type="radio" name="questao5" value="e" /> E) “textos opnioes” (parágrafo 8). 
></label>
			<br />
			<br />
			
			<h2>6) O autor do texto 3 declara que, apesar de a literatura conter cenas de violência, ninguém a acusa de ser responsável pela violência.

Nesse caso, a argumentação se apoia numa: </h2>
			
			<label>
			<input type="radio" name="questao6" value="a" /> A)analogia; ;</label> 
			<br />
			<label>
			<input type="radio" name="questao6" value="b" /> B) inferência;;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="c" /> C) redundância;;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="d" /> D) Metafora;</label>
			<br />
			<label>
			<input type="radio" name="questao6" value="e" /> E) Metonimia</label>
			<br />
			<br />
			
			<h2>7) Leia a frase a seguir.

“Entre os efeitos positivos do fumo inclui-se a economia com o sistema de saúde por causa da mortalidade prematura do fumante.”

Assinale a opção que indica o exemplo de linguagem figurada presente nessa frase:</h2>
			
			<label>		
			<br>
			<input type="radio" name="questao7" value="a" /> A)  Metáfora(l.5).;</label> 
			<br />
			<label>
			<input type="radio" name="questao7" value="b" /> B)Eufemismo (l.6);</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="c" /> C) Ironia (l.6).;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="d" /> D)Pleonasmo ;</label>
			<br />
			<label>
			<input type="radio" name="questao7" value="e" /> E) Personificação</label>
			<br />	
			<br />
		
			<h2>8) A frase de César Augusto – Apressa-te devagar – traz um exemplo de linguagem figurada que se repete em: </h2>
			
			<label>
			<input type="radio" name="questao8" value="a" /> A)Quem não gosta de estar consigo mesmo em geral está certo.;</label> 
			<br />
			<label>
			<input type="radio" name="questao8" value="b" /> B)É muito difícil distinguir entre um homem de gênio e um louco.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="c" /> C) Amor é ferida que dói e não se sente.;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="d" /> D)O mundo não será salvo pelos caridosos, mas pelos eficientes. 	;</label>
			<br />
			<label>
			<input type="radio" name="questao8" value="e" /> E) É preferível conhecer coisas inúteis que não saber nada.

.</label>
			<br />
			<br />
	
			<h2>9)

Todos os pensamentos abaixo partem de uma metáfora ou de uma comparação; o pensamento que mostra uma justificativa para a metáfora ou comparação realizada é: </h2>
		
			<br>
			<input type="radio" name="questao9" value="a" /> A) A cidade não é uma selva de concreto; é um zoológico humano. (Desmond Morris) ;</label> 
			<br />
			<label>
			<input type="radio" name="questao9" value="b" /> B) Todas as especulações são cinza, meu amigo, mas a árvore de ouro da vida é eternamente verde. (Goethe) ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="c" /> C) Cada ave, com asas estendidas, é um livro de duas folhas aberto no céu. Protejamos esse livro. E aumentemos, com essa proteção, a miúda bibliografia. (Humberto de Campos) ;</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="d" /> D) A distância é como o vento. Acende os fogos grandes e apaga os pequenos. (D. Modugno);</label>
			<br />
			<label>
			<input type="radio" name="questao9" value="e" /> E)A boa sociedade é uma horda de refinados, composta de duas tribos: uma que se aborrece e outra que aborrece. (Lord Byron) .</label>
			<br />
			<br />

			<h2>10) 
No enunciado “O teatro, aliás, era considerado uma válvula de escape para aquelas emoções reprimidas que todos têm [...].” (segundo parágrafo), há uma figura de linguagem chamada:</h2>
		
			<label>
			<br>
			<input type="radio" name="questao10" value="a" /> A)anacoluto. ;</label> 
			<br />
			<label>
			<input type="radio" name="questao10" value="b" /> B)Metáfora.</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="c" /> C) elipse. ;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="d" /> D) Eufemismo;</label>
			<br />
			<label>
			<input type="radio" name="questao10" value="e" /> E) Catacrése.</label>
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