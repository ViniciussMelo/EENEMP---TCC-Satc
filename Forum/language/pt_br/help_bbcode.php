<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Introdução'
	),
	array(
		0 => 'O que é BBCode?',
		1 => 'O BBCode é uma implementação especial do HTML. A possibilidade de se usar BBCode nas suas mensagens é determinada pelo administrador do fórum. Adicionalmente, você poderá desativar o BBCode em cada mensagem. O BBCode por si mesmo é similar em estilo ao HTML, as etiquetas (tags) são incluídas em colchetes "[ exemplo ]" ao invés de &lt; exemplo &gt;, proporcionando uma maior facilidade na formatação de seus textos e mensagens dentro do fórum. A tarefa de adicionar BBCode às suas mensagens é facilitada pelo uso de um painel colocado imediatamente acima da caixa principal das mensagens, dependendo do modelo do phpBB em uso, onde você pode escolher e aplicar os vários itens para o código que pretenda aplicar. Apesar da existência desse painel, tenha certeza de que este guia lhe será muito útil.'
	),
	array(
		0 => '--',
		1 => 'Formatos de texto'
	),
	array(
		0 => 'Como criar textos em negrito, itálico e sublinhado',
		1 => 'O BBCode inclui tags que lhe permitem mudar rapidamente o estilo básico do texto. Isto é possível das seguintes formas: <ul><li>Para tornar uma parte do texto em negrito, você deve incluí-la entre as tags <strong>[b][/b]</strong>, ou seja, <br /><br /><strong>[b]</strong>Olá<strong>[/b]</strong><br /><br />passará a ser <strong>Olá</strong></li><li> Para sublinhar use <strong>[u][/u]</strong>. Por exemplo:<br /><br /><strong>[u]</strong>Bom Dia<strong>[/u]</strong><br /><br />passa a ser <span style="text-decoration: underline">Bom Dia</span></li><li> Para tornar o texto itálico, utilize <strong>[i][/i]</strong>, ou seja,<br /><br />Isto é <strong>[i]</strong>Ótimo!<strong>[/i]</strong><br /><br /> resulta em: Isto é <em>Ótimo!</em></li></ul>' 
	),
	array(
		0 => 'Como mudar a cor e o tamanho do texto',
		1 => 'Para alterar a cor ou o tamanho de seu texto, devem ser usadas as seguintes tags. Ter em mente que a forma como aparecerá no monitor de cada visitante depende do navegador ou do sistema que utilize: <ul><li> A mudança da cor do texto é feita englobando-o em <strong>[color=][/color]</strong>. Tanto pode especificar o nome de uma cor conhecida, que será em inglês (exemplo: red, blue, yellow, etc.), ou especificando o seu valor hexadecimal, ou seja, #FFFFFF, #000000. Por exemplo, para criar um texto em vermelho, você poderá usar:<br /><br /><strong>[color=red]</strong>Olá!<strong>[/color]</strong><br /><br />ou<br /><br /><strong>[color=#FF0000]</strong>Olá!<strong>[/color]</strong><br /><br /> Ambos resultarão em <span style="color:red">Olá!</span></li><li> A mudança do tamanho do texto pode ser feita de uma forma similar, utilizando <strong>[size=][/size]</strong>. Esta tag está dependente do modelo do phpBB que você utiliza, mas o formato recomendado é um valor numérico representando o tamanho do texto em porcentagem, começando em 20 (tão minúsculo que praticamente não se vê) até 200 (enorme). Por exemplo:<br /><br /><strong>[size=30]</strong>MINÚSCULO<strong>[/size]</strong><br /><br /> normalmente aparece como <span style="font-size:30%;">MINÚSCULO</span><br /><br />enquanto que <br /><br /><strong>[size=200]</strong>ENORME!<strong>[/size]</strong><br /><br />será <span style="font-size:200%;">ENORME!</span></li></ul>'
	),
	array(
		0 => 'Posso combinar tags?',
		1 => 'Sim, claro que pode. Por exemplo, para chamar a atenção de alguém, você poderá escrever:<br /><br /><strong>[size=200][color=red][b]</strong>OLHE PARA MIM!<strong>[/b][/color][/size]</strong><br /><br /> que irá aparecer como <span style="color:red;font-size:200%;"><strong>OLHE PARA MIM!</strong></span><br /><br /> Entretanto, não recomendamos o uso de muito texto na forma que acabamos de descrever! Lembre-se que depende de si, o autor da mensagem, assegurar que os códigos estejam colocados corretamente. Por exemplo, isto está incorreto:<br /><br /><strong>[b][u]</strong> errado<strong>[/b][/u]</strong>'
	),
	array( 
		0 => '--',
		1 => 'Citar e produzir textos de largura fixa'
	),
	array(
		0 => 'Citar textos em respostas',
		1 => 'Há duas formas de reproduzir um texto previamente feito (normalmente uma réplica de uma mensagem anterior), com ou sem referência.<ul><li>Quando você utiliza a função <strong>Citar</strong> para responder a uma mensagem, note que o texto dessa mensagem é adicionado ao corpo da mensagem incluído em um bloco <strong>[quote=&quot;&quot;][/quote]</strong> de citação. Este método lhe permite citar com uma referência a uma pessoa ou o que você decida colocar! Por exemplo, para citar uma peça de texto que Mr. Blobby escreveu, você escreverá:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>O texto que Mr. Blobby escreveu será citado aqui<strong>[/quote]</strong><br /><br /> No resultado será adicionado automaticamente, <strong>&quot;Mr. Blobby escreveu:&quot;</strong> antes do texto citado. Note que você <strong>precisa</strong> incluir as aspas &quot;&quot; à volta do nome que deseja citar.</li><li>O segundo método permite-lhe citar algo sem referência a alguém ou algo. Para o fazer, escreva o texto entre as tags <strong>[quote][/quote]</strong>. Quando visualizar a mensagem, verá que simplesmente surge, <strong>Citação:</strong> antes do texto.</li></ul>'
	),
	array(
		0 => 'Produzir código ou texto com uma largura fixa',
		1 => 'Se você desejar escrever um código, ou de fato, algo que requeira uma largura fixa, ou seja, tipo de fonte Courier, englobe o texto entre as tags <strong>[code][/code]</strong>, como por exemplo:<br /><br /><strong>[code]</strong>echo &quot;Código&quot;;<strong>[/code]</strong><br /><br />O formato utilizado entre as tags <strong>[code][/code]</strong> é preservado quando posteriormente o visualizar.'
	),
	array(
		0 => '--',
		1 => 'Gerar listas'
	),
	array(
		0 => 'Criar uma lista sem ordem específica',
		1 => 'O BBCode aceita dois tipos de lista: Uma lista sem ordem e outra ordenada. São basicamente o mesmo que em HTML. Uma lista sem ordem produz cada item de uma forma sequencial, um em seguida do outro, precedendo-o um caractere constante. Para criar, você deve utilizar <strong>[list][/list]</strong> e colocar cada item entre as tags, utilizando <strong>[*]</strong> antes de cada um. Por exemplo, para listar as suas cores favoritas, você pode escrever:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Vermelho<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarelo<br /><strong>[/list]</strong><br /><br /> Esta lista aparecerá como:<ul><li>Vermelho</li><li>Azul</li><li>Amarelo</li></ul><br />Você também pode personalizar o estilo de uma lista usando as tags <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> ou <strong>[list=square][/list]</strong>.'
	),
	array(
		0 => 'Criar uma lista ordenada',
		1 => 'O segundo tipo de lista, uma lista ordenada, proporciona-lhe o controle do que vá aparecer antes de cada item. Para criar uma lista ordenada você utilizará <strong>[list=1][/list]</strong> de forma a criar uma lista numérica ou, <strong>[list=a][/list]</strong>, para uma lista alfabética. Da mesma forma que para o tipo de lista sem ordem, os itens são precedidos de <strong>[*]</strong>. Por exemplo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir às compras<br /><strong>[*]</strong>Comprar um computador novo<br /><strong>[*]</strong>Insultar o computador quando ficar bloqueado<br /><strong>[/list]</strong><br /><br />produzirá o seguinte:<ol style="list-style-type: decimal;"><li>Ir às compras</li><li>Comprar um computador novo</li><li>Insultar o computador quando ficar bloqueado</li></ol> Enquanto que para uma lista alfabética você utilizará:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>A primeira resposta possível<br /><strong>[*]</strong>A segunda resposta possível<br /><strong>[*]</strong>A terceira resposta possível<br /><strong>[/list]</strong><br /><br />resultando em<ol style="list-style-type: lower-alpha"><li>A primeira resposta possível</li><li>A segunda resposta possível</li><li>A terceira resposta possível</li></ol>'
	),

	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Criar links'
	),
	array(
		0 => 'Criar um link para outra Página',
		1 => 'O phpBB BBCode aceita um número variável de formas para criar URIs, (Uniform Resource Indicators), melhor conhecidos como URLs.<ul><li>A primeira dessas formas é usando as tags <strong>[url=][/url]</strong>. O que quer que você escreva depois do sinal = faz com que o conteúdo destas tags aja como uma URL. Por exemplo, para fazer um link à Página do Suporte phpBB, você escreve:<br /><br /><strong>[url=http://www.suportephpbb.com.br/]</strong>Visite o Suporte phpBB!<strong>[/url]</strong><br /><br /> Isto irá resultar no seguinte link: <a href="http://www.suportephpbb.com.br/" target="_blank">Visite o Suporte phpBB!</a>. Veja que a página irá abrir em uma nova janela, para que o usuário possa continuar visitando o fórum.</li><li> Se pretende que a URL esteja à vista, faça simplesmente isto:<br /><br /><strong>[url]</strong>http://www.suportephpbb.com.br/<strong>[/url]</strong><br /><br />Tal resultará no seguinte link: <a href="http://www.suportephpbb.com.br/" target="_blank">http://www.suportephpbb.com.br/</a></li><li> Adicionalmente, o phpBB possui algo chamado <i>Links Mágicos</i>, função que permite transformar automaticamente qualquer URL escrita com uma sintaxe correta, em um link sem ser necessário especificar quaisquer tags ou mesmo o prefixo http://. Por exemplo, escrevendo www.suportephpbb.com.br na sua mensagem, automaticamente resultará em <a href="http://www.suportephpbb.com.br/" target="_blank">www.suportephpbb.com.br</a> quando vir essa mensagem.</li><li> A mesma coisa se aplica aos endereços de e-mail, podendo especificar o endereço. Por exemplo:<br /><br /><strong>[email]</strong>exemplo@suportephpbb.com.br<strong>[/email]</strong><br /><br />que resultará em <a href="emailto:exemplo@suportephpbb.com.br">exemplo@suportephpbb.com.br</a>, ou você pode apenas escrever exemplo@suportephpbb.com.br em sua mensagem, que será automaticamente convertido em um link quando a mensagem for salva.</li></ul>
Como em todos os códigos BBCode aqui apresentados, você pode misturar URLs com quaisquer outras tags. Como por exemplo, <strong>[img][/img]</strong> (ver o item seguinte), <strong>[b][/b]</strong>, etc. Em relação ao formato das tags, está totalmente dependente de si assegurar a ordem correta de seu início e fim, por exemplo:<br /><br /><strong>[url=https://www.phpbb.com/][img]https://www.phpbb.com/theme/images/logos/blue/160x52.png[/url][/img]</strong><br /><br /><span style="text-decoration: underline">não é</span> correto, o que pode conduzir sua mensagem a ser excluída por algum administrador ou moderador. Por favor, tenha cuidado.'
	),
	array(
		0 => '--',
		1 => 'Exibir imagens em mensagens'
	),
	array(
		0 => 'Adicionar uma imagem a uma mensagem',
		1 => 'O phpBB BBCode incorpora uma tag para incluir imagens em suas mensagens. Dois fatores muito importantes devem ser lembrados aqui, quando se utiliza estas tags: Primeiro, a maioria dos usuários preferem não ver muitas imagens em mensagens; Segundo, a imagem que você pretende exibir deve existir na internet (por exemplo, não pode existir apenas no seu computador, a menos que tenha um servidor de páginas na WEB e este esteja sempre ativo e seja publicamente acessível!). Não existe atualmente qualquer forma de armazenar imagens localmente com o phpBB (não agora, porém contamos dar atenção especial a esse assunto na próxima versão do phpBB). Para exibir uma imagem, você terá que escrever a URL da imagem entre as tags <strong>[img][/img]</strong>. Por exemplo:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br /> Você deve ter notado, na seção da URL acima, que você pode englobar uma imagem com as tags <strong>[url][/url]</strong>, se assim o desejar, ou seja, <br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />irá produzir:<br /><br /><a href="https://www.phpbb.com/" target="_blank"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a><br />'
	),
	array(
		0 => 'Anexar arquivos em uma mensagem',
		1 => 'Os anexos podem ser inseridos em qualquer local da mensagem utilizando o novo BBCode <strong>[attachment=][/attachment]</strong>, se a funcionalidade de anexos estiver sido ativada pelo administrador do fórum e se você tiver as permissões apropriadas para anexar arquivos. Na tela do envio de mensagens existe um menu padrão para se adicionar os anexos desejados.'
	),
	array(
		0 => '--',
		1 => 'Outros assuntos'
	),
	array(
		0 => 'Posso adicionar as minhas próprias tags?',
		1 => 'Se você for um administrador e possuir permissões para tal, você poderá adicionar BBCodes diversos através do seu painel de BBCodes personalizados.'
	)
);
