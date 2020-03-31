-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Nov 22, 2017 as 12:30 AM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `eenemp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaousuario`
--

CREATE TABLE IF NOT EXISTS `avaliacaousuario` (
  `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(11) NOT NULL,
  `avaliacao` mediumtext NOT NULL,
  `nota` int(1) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  PRIMARY KEY (`idAvaliacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `avaliacaousuario`
--

INSERT INTO `avaliacaousuario` (`idAvaliacao`, `usuario`, `avaliacao`, `nota`, `emailUsuario`) VALUES
(20, 'Professor', 'Muito bom!', 5, 'vinicius-smelo@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroaluno`
--

CREATE TABLE IF NOT EXISTS `cadastroaluno` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `nomeAluno` varchar(40) NOT NULL,
  `senhaAluno` varchar(10) NOT NULL,
  `perguntaSeguranca` varchar(30) NOT NULL,
  `respostaSeguranca` varchar(50) NOT NULL,
  `emailAluno` varchar(100) NOT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `cadastroaluno`
--

INSERT INTO `cadastroaluno` (`idAluno`, `nomeAluno`, `senhaAluno`, `perguntaSeguranca`, `respostaSeguranca`, `emailAluno`) VALUES
(3, 'g', 'v', '', '', 'g'),
(4, 'vinicius', '123', '', '', 'viniciussmelo'),
(5, 'vinicius', '321', '', '', 'vinicius-smelo@hotmail.com'),
(7, 'vinicius', '123456', '', '', 'vinicius-smelo1@hotmail.com'),
(10, 'joão', 'novaSenha', '', 'vinicius', 'vinicius.smelo54@gmail.com'),
(11, 'vvvv', '654321', '', '', 'vini@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroprofessores`
--

CREATE TABLE IF NOT EXISTS `cadastroprofessores` (
  `idProfessor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProfessor` varchar(40) NOT NULL,
  `senhaProfessor` varchar(10) NOT NULL,
  `perguntaSeguranca` varchar(30) NOT NULL,
  `respostaSeguranca` varchar(50) NOT NULL,
  `emailProfessor` varchar(100) NOT NULL,
  PRIMARY KEY (`idProfessor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `cadastroprofessores`
--

INSERT INTO `cadastroprofessores` (`idProfessor`, `nomeProfessor`, `senhaProfessor`, `perguntaSeguranca`, `respostaSeguranca`, `emailProfessor`) VALUES
(1, 'gui', '123', '', '', 'guilherme123'),
(7, 'Guilherme', '123456', '', 'vinicius', 'guiinfosatc@gmail.com'),
(8, 'joão', '123456', '', '', 'vinicius-smelo@hotmail.com'),
(10, 'Guilherme', 'novaSenha', '', 'vinicius', 'guilherme123@email.com'),
(15, 'Guilherme', '123456', 'nPai', 'vinicius', 'aa@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroquestoes`
--

CREATE TABLE IF NOT EXISTS `cadastroquestoes` (
  `idQuestao` int(11) NOT NULL AUTO_INCREMENT,
  `materiaQuestao` varchar(20) NOT NULL,
  `Questao` longtext NOT NULL,
  `Resposta` varchar(300) NOT NULL,
  `imagemQuestao` longtext NOT NULL,
  `nomeProf` varchar(50) NOT NULL,
  PRIMARY KEY (`idQuestao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=347 ;

--
-- Extraindo dados da tabela `cadastroquestoes`
--

INSERT INTO `cadastroquestoes` (`idQuestao`, `materiaQuestao`, `Questao`, `Resposta`, `imagemQuestao`, `nomeProf`) VALUES
(8, 'historia', 'No ano de 1939, em meio à atmosfera de tensão política que desencadeou a sucessão de conflitos da Segunda Guerra Mundial, um acordo de não agressão foi firmado entre a Alemanha e a União Soviética, o Pacto Germano-Soviético. Esse pacto estabelecia que, se acaso a Alemanha entrasse em conflito com a Inglaterra ou a França em razão de uma eventual investida da Alemanha contra a Polônia, a URSS, por sua vez, ficaria afastada, sem se manifestar militarmente. Tal pacto também pode ser chamado de: ', 'Pacto de Varsóvia', '', ''),
(9, 'historia', 'A Segunda Guerra Mundial teve como consequências:', 'a proclamação da República na China e decadência política da "Cortina de Ferro".', '', ''),
(10, 'historia', 'Os antigos combatentes do mesmo regimento se reúnemperiodicamente emjantares onde evocamas lembranças da guerra, essas histórias de homens. Muitos são os que ficaram alquebrados por esses anos de horror, incapazes de se readaptar a uma vida civil que, alguns anos depois, sofrerá o abalo da Grande Depressão. Para uma unidade que descia de Verdun, bastava ametade dos caminhões que tinham sido necessários para a ida. É a lembrança indelével que entretém as insônias e alimenta os pesadelos. E logo fica claro que esta não foi a última guerra. Em 1923, há o golpe deMunique." \r\n\r\n(VINCENT, Gérard. Guerras ditas, Guerras silenciadas e o enigma identitário., in: História da Vida Privada . São Paulo: Companhia das Letras, 2009, p.187.) \r\n\r\nO golpe de Munique, também conhecido como Putsch da Cervejaria, está inserido no contexto do período entre Guerras e das consequências da Primeira Guerra Mundial. O referido golpe está associado à:', 'morte de Franz Ferdinand.', '', ''),
(11, 'historia', '\r\nAnalise as afirmativas correlatas.\r\nI. “A divisão da Alemanha teve início com o acordo de Potsdam, assinado após a Segunda Guerra Mundial, que dividia a nação em quatro zonas de ocupação, sendo três delas destinadas aos aliados do Ocidente (Estados Unidos, França e Reino Unido) e uma ao governo soviético.” \r\nPORQUE\r\nII. “Derrotada no grande conflito mundial, a Alemanha passou a sofrer influência de dois regimes distintos, o que resultou na sua divisão em 1949, na República Federal Alemã (RFA), de orientação capitalista, e a República Democrática Alemã (RDA), comunista.”\r\nAssinale a alternativa correta.', 'As duas afirmativas são falsas', '', ''),
(12, 'historia', 'Em relação à participação do Brasil na 2.ª Guerra Mundial, é correto afirmar que o país', 'enviou apenas um corpo médico para o conflito, e não soldados.', '', ''),
(13, 'historia', 'A Segunda Guerra Mundial (1939-1945) é, geralmente, considerada o grande momento de inflexão do século XX. Decorrência de duas décadas de instabilidade política, comoção social e crise econômica, ela foi o mais universalizado dos conflitos e, ao chegar ao fim, gerou uma ordem internacional que se afastava dos padrões vigentes, a rigor, desde a Idade Moderna. Relativamente aos fatores que determinaram o início de hostilidades e às conferências que estabeleceram as balizas do novo cenário mundial, assinale a opção correta.', 'A política da Paz Armada desencadeada por Hitler, ainda que não necessariamente expansionista, abriu o caminho para a guerra, por gerar desconfiança e temor generalizados.', '', ''),
(14, 'historia', 'Em 26 de agosto de 1789, a Assembleia Nacional Constituinte aprovou a Declaração dos Direitos do Homem e do Cidadão, documento que serviu de referência para a elaboração de outros similares, como a Declaração Universal dos Direitos Humanos, formulada pela ONU, no contexto do pós-Segunda Guerra Mundial. Considerando as principais concepções politicas produzidas pelo movimento francês de 1789, pode-se afirmar que este documento expressou: ', 'A manifestação contra a sociedade hierárquica de privilégios nobres, mas não um manifesto a favor de uma sociedade democrática e igualitária;', '', ''),
(15, 'historia', 'O programa de ajuda financeira para a reconstrução dos países europeus devastados durante a Segunda Guerra Mundial, proposto pelos EUA e que tinha como objetivo deter a expansão socialista e também reforçar sua influência sobre eles ficou conhecido como: ', 'Guerra da Secessão', '', ''),
(16, 'historia', 'Foi a Segunda Guerra Mundial que precipitou a luta anticolonial no continente africano. \r\n\r\nA avalanche revolucionária ganhou intensidade, sobretudo porque a França e a Inglaterra, senhoras dos principais impérios coloniais, saíram enfraquecidas da Segunda Guerra para enfrentar revoltas coloniais. Por outro lado, a derrota de Chiang Kai-sheck, na China, a capitulação francesa na Indochina (1954) e a nacionalização do Canal de Suez por Nasser, líder egípcio, também estimularam as guerras de libertação. \r\n\r\nNessas lutas, projetaram-se inúmeros líderes africanos que, por vezes, procuraram adaptar ideologias ocidentais às condições locais, com o objetivo de eliminar todas as formas de colonialismo na África, como, por exemplo a(o)', 'Conferência de Acra e a Conferência de Casablanca.', '', ''),
(17, 'historia', 'O período entre as duas guerras mundiais do século XX foi assinalado pela emergência de regimes totalitários. Relativamente a essa realidade que marcou profundamente as décadas de 1920 e 1930, em larga medida causadora da Segunda Guerra Mundial, assinale a opção correta.', 'Na Alemanha, Hitler chegou ao poder mediante violento golpe de Estado. ', '', ''),
(18, 'historia', 'O Estado de compromisso, expressão do reajuste nas relações internas das classes dominantes, corresponde, por outro lado, a uma nova forma do Estado, que se caracteriza pela maior centralização, o intervencionismo ampliado e não restrito apenas à área do café, o estabelecimento de uma certa racionalização no uso de algumas fontes fundamentais de riqueza pelo capitalismo internacional (...).\r\nBoris Fausto. A revolução de 1930. Historiografia e história. São Paulo: Brasiliense, 1987, p. 109-110.\r\nSegundo o texto, o Estado de compromisso correspondeu, no Brasil do período posterior a 1930,', 'ao primeiro momento de intervenção governamental na economia brasileira.', '', ''),
(19, 'historia', 'Em 1945 chega ao fim o Estado Novo implantado pelo presidente Getúlio Vargas. Entre as causas tivemos a(s)', 'Revolução de 1945 realizada pelos sindicatos e apoiado pelo Partido Trabalhista Brasileiro daquela época.', '', ''),
(20, 'historia', 'Em 1954, quando o cerco se apertou ainda mais sobre Getúlio Vargas, o presidente agiu mais energicamente. Seu gesto teve consequências imediatas. A massa urbana saiu às ruas em todas as grandes cidades, atingindo os alvos mais expressivos de seu ódio, como jornais de oposição e a representação diplomática dos Estados Unidos no Rio de Janeiro.\r\nAdaptado de FAUSTO, Boris. Historia Concisa do Brasil. Sao Paulo: EDUSP, 2002. p. 231.\r\nEm uma aula para alunos do 4º ano do Ensino Fundamental, sobre a consolidação da democracia no Brasil, o professor aborda, como tema central, os anos finais do segundo governo Vargas. Nesse sentido, destaque os dois últimos gestos políticos desse governo.', 'o afastamento do general Lott e o apoio a Eurico Dutra', '', ''),
(21, 'historia', 'Considere a frase abaixo. \r\nMuito teremos feito em breve tempo se conseguirmos libertar-nos da importação de artefatos de ferro, nacionalizando a indústria siderúrgica. (Getúlio Vargas, em 1931)\r\nconcretização das pretensões do autor da frase ocorreu, durante a Segunda Guerra Mundial, quando usou a importância do\r\nBrasil no contexto geopolítico da América do Sul e:', 'acertou com os Estados Unidos o apoio as forças aliadas em troca da construção da usina siderurgica de Volta Redonda no Rio de Janeiro', '', ''),
(22, 'historia', 'Durante o governo ditatorial do presidente Getúlio Vargas entre 1937 e 1945, o governo brasileiro oficializou uma política de ocupação da região norte do país ao ver na Amazônia uma importância estratégica. A marcha para o oeste, como ficou conhecida a iniciativa do governo varguista, foi possível graças aos incentivos financeiros do estado brasileiro, visando à exploração econômica da região. \r\n\r\nEm relação à política varguista de ocupação dessa área do país, é correto destacar: ', 'a imediata definição do território dos indígenas sem que houvesse problemas nesse processo;', '', ''),
(23, 'historia', '“Os vitoriosos de 1930 compunham um quadro heterogêneo, tanto do ponto de vista social quanto político. Tinham-se unido contra um mesmo adversário, com perspectivas diversas: os velhos oligarcas, representantes típicos da classe dominante regional [...]”.\r\nFAUSTO, Boris. História Concisa do Brasil. São Paulo: Editora da Universidade de São Paulo, 2002, p.182.\r\nNa interpretação de Boris Fausto, É CORRETO afirmar que a Revolução de 1930  ', 'foi uma crise institucional, derivada dos problemas que o sistema federativo enfrentava com a crise do setor cafeeiro.', '', ''),
(24, 'historia', 'Durante a década de 1930, “foi assim, com uma política de aproximações alternadas e simultâneas dos Estados Unidos e Alemanha [...] que o Brasil seguiu na sua busca por autonomia procurando tirar proveito da disputa entre os dois países”.\r\nPINHEIRO, Letícia. Política Externa Brasileira (1889-2002). Rio de Janeiro: Jorge Zahar, 2004, p. 23-24\r\nO elemento que definiu a alteração desse posicionamento da política externa brasileira foi a ', 'A hegemonia dos girondinos, pois a Declaração estabeleceu eleições por sufrágio universal, o que possibilitou o controle do processo revolucionário por parte desse grupo', '', ''),
(25, 'historia', '\r\n“Na década de 1930, houve a tentativa de ‘abrasileirar’ o Natal, propondo substituir o Papai Noel pela figura do Vovô Índio, um escravo filho de índio com africano que foi criado por uma família branca. O índio esculpia bonecos com os quais ilustrava suas histórias e, no Dia de Reis, dava-os de presente aos seus ouvintes.”\r\n(Disponível em:<http://planorweb.bn.br/BoletinsPLANOR/planor Boletim 14.pdf> . Acesso em: 30 out. 2015.)\r\nEssa tentativa pode ser atribuída aos (à)', 'comunistas do PCB.', '', ''),
(26, 'historia', 'A expansão da Justiça do Trabalho no Brasil, após os anos 1940 ', 'foi maior proporcionalmente no meio rural, em regiões que apresentavam os maiores índices de desrespeito à CLT e casos de semiescravidão, chegando a abarcar todas as capitais durante o período “desenvolvimentista” nos anos 1970. ', '', ''),
(27, 'historia', 'Entre o conjunto de leis criadas no período a que o texto se refere, destaca-se a Constituição de 1937, que nos seus dispositivos trabalhistas, inspirados na “Carta del Lavoro” italiana, ', 'dava somente ao sindicato reconhecido pelo Estado o direito de representar a categoria, proibindo a greve e o lock-out. ', '', ''),
(28, 'historia', 'O Estado de compromisso, expressão do reajuste nas relações internas das classes dominantes, corresponde, por outro lado, a uma nova forma do Estado, que se caracteriza pela maior centralização, o intervencionismo ampliado e não restrito apenas à área do café, o estabelecimento de uma certa racionalização no uso de algumas fontes fundamentais de riqueza pelo capitalismo internacional (...).\r\nBoris Fausto. A revolução de 1930. Historiografia e história. São Paulo: Brasiliense, 1987, p. 109-110.\r\nSegundo o texto, o Estado de compromisso correspondeu, no Brasil do período posterior a 1930,', 'à reorientação da política econômica, com maior presença do Estado na economia.', '', ''),
(29, 'historia', 'Em 1945 chega ao fim o Estado Novo implantado pelo presidente Getúlio Vargas. Entre as causas tivemos a(s)', 'Pressões norte-americanas obrigando Getúlio Vargas a extinguir o Estado Novo e tornar o país uma democracia', '', ''),
(30, 'historia', 'Em 1954, quando o cerco se apertou ainda mais sobre Getúlio Vargas, o presidente agiu mais energicamente. Seu gesto teve consequências imediatas. A massa urbana saiu às ruas em todas as grandes cidades, atingindo os alvos mais expressivos de seu ódio, como jornais de oposição e a representação diplomática dos Estados Unidos no Rio de Janeiro.\r\nAdaptado de FAUSTO, Boris. Historia Concisa do Brasil. Sao Paulo: EDUSP, 2002. p. 231.\r\nEm uma aula para alunos do 4º ano do Ensino Fundamental, sobre a consolidação da democracia no Brasil, o professor aborda, como tema central, os anos finais do segundo governo Vargas. Nesse sentido, destaque os dois últimos gestos políticos desse governo.', 'o afastamento do general Lott e o apoio a Eurico Dutra', '', ''),
(31, 'historia', 'Durante o governo ditatorial do presidente Getúlio Vargas entre 1937 e 1945, o governo brasileiro oficializou uma política de ocupação da região norte do país ao ver na Amazônia uma importância estratégica. A marcha para o oeste, como ficou conhecida a iniciativa do governo varguista, foi possível graças aos incentivos financeiros do estado brasileiro, visando à exploração econômica da região. \r\n\r\nEm relação à política varguista de ocupação dessa área do país, é correto destacar: ', 'a imediata definição do território dos indígenas sem que houvesse problemas nesse processo;', '', ''),
(32, 'historia', '\r\n“Os vitoriosos de 1930 compunham um quadro heterogêneo, tanto do ponto de vista social quanto político. Tinham-se unido contra um mesmo adversário, com perspectivas diversas: os velhos oligarcas, representantes típicos da classe dominante regional [...]”.\r\nFAUSTO, Boris. História Concisa do Brasil. São Paulo: Editora da Universidade de São Paulo, 2002, p.182.\r\nNa interpretação de Boris Fausto, É CORRETO afirmar que a Revolução de 1930  ', 'representou uma troca da elite do poder sem grandes rupturas, ascendendo militares, técnicos diplomados, jovens políticos e, um pouco mais tarde, os industriais ', '', ''),
(33, 'historia', 'Durante a década de 1930, “foi assim, com uma política de aproximações alternadas e simultâneas dos Estados Unidos e Alemanha [...] que o Brasil seguiu na sua busca por autonomia procurando tirar proveito da disputa entre os dois países”.\r\nPINHEIRO, Letícia. Política Externa Brasileira (1889-2002). Rio de Janeiro: Jorge Zahar, 2004, p. 23-24\r\nO elemento que definiu a alteração desse posicionamento da política externa brasileira foi a ', 'A hegemonia dos girondinos, pois a Declaração estabeleceu eleições por sufrágio universal, o que possibilitou o controle do processo revolucionário por parte desse grupo', '', ''),
(34, 'historia', '\r\n“Na década de 1930, houve a tentativa de ‘abrasileirar’ o Natal, propondo substituir o Papai Noel pela figura do Vovô Índio, um escravo filho de índio com africano que foi criado por uma família branca. O índio esculpia bonecos com os quais ilustrava suas histórias e, no Dia de Reis, dava-os de presente aos seus ouvintes.”\r\n(Disponível em:<http://planorweb.bn.br/BoletinsPLANOR/planor Boletim 14.pdf> . Acesso em: 30 out. 2015.)\r\nEssa tentativa pode ser atribuída aos (à)', 'A)comunistas do PCB', '', ''),
(35, 'historia', 'A carta abaixo foi escrita por Osvaldo Aranha a Getúlio Vargas em fins dos anos 20 do século XX. \r\n\r\nNada se pode esperar das leis, que não são praticadas, nem dos homens, que são seus violadores. Onde a lei não é cumprida, o governo assenta no arbítrio e na força [...] não há duas situações para uma só realidade, como não há duas soluções verdadeiras para uma mesma hipótese. Assim, ou concordamos com a situação de anarquia moral e de miséria material que domina a república, ou animados de espírito de sacrifício, de altruísmo cívico, dentro de nossa missão social, resolvemos procurar os meios de corrigir essa situação.\r\n\r\n(Apud FERREIRA, M.M. e PINTO, S.C.S. A crise dos anos 20 e a revolução de 30. In: FERREIRA, J. e DELGADO, L. A. N. (orgs.) O tempo do liberalismo excludente: da proclamação da república à revolução de 1930. O Brasil Republicano; v.1. Rio de Janeiro: Ed. Civilização Brasileira, 2003.)\r\n\r\nSobre a revolução de 1930, é correto afirmar: ', ' União Africana e o Comitê de Libertação Africana;', '', ''),
(36, 'historia', 'Em relação ás leis trabalhistas do período do governo a que o texto se refere, é correto afirmar que a ', 'Lei de Greve de 1937, regulamentada pelo Ministério do Trabalho, promoveu melhoria nas condições de vida do operário e preservou as conquistas trabalhistas.', '', ''),
(37, 'historia', '  A imagem da relação patrão-empregado geralmente veiculada pelas classes dominantes brasileiras na República Velha era de que esta relação se assemelhava em muitos aspectos à relação entre pais e filhos. O patrão era uma espécie de “juiz doméstico” que procurava guiar e aconselhar o trabalhador, que, em troca, devia realizar suas tarefas com dedicação e respeitar o seu patrão.\r\nCHALHOUB, S. Trabalho, lar e botequim: o cotidiano dos trabalhadores do Rio de Janeiro da Belle Époque. Campinas: Unicamp, 2001.\r\nNo contexto da transição do trabalho escravo para o trabalho livre, a construção da imagem descrita no texto tinha por objetivo ', 'separar os âmbitos público e privado na organização do trabalho para aumentar a eficiência dos funcionários.', '', ''),
(38, 'historia', '  O coronelismo era fruto de alteração na relação de forças entre os proprietários rurais e o governo, e significava o fortalecimento do poder do Estado antes que o predomínio do coronel. Nessa concepção, o coronelismo é, então, um sistema político nacional, com base em barganhas entre o governo e os coronéis. O coronel tem o controle dos cargos públicos, desde o delegado de polícia até a professora primária. O coronel hipoteca seu apoio ao governo, sobretudo na forma de voto.\r\n               CARVALHO, J. M. Pontos e bordados: escritos de história política. Belo\r\n                                                             Horizonte: Editora UFMG, 1998 (adaptado).\r\nNo contexto da Primeira República no Brasil, as relações políticas descritas baseavam-se na ', ' a intervenção de tropas estrangeiras na Guerra Civil Espanhola e vitória do franquismo.></p></font></b></h2> <p>D) a divulgação das ideias da "Coexistência Pacífica" e propagação do movimento neutralista..', '', ''),
(39, 'historia', 'A página do periódico do início do século XX documenta um importante elemento da cultura francesa, que é revelador do papel do Brasil na economia mundial, indicado no seguinte aspecto: ', 'Fornecedor de produtos agrícolas.', '', ''),
(40, 'historia', 'O problema central a ser resolvido pelo Novo Regime era a organização de outro pacto de poder que pudesse substituir o arranjo imperial com grau suficiente de estabilidade. O próprio presidente Campos Sales esumiu claramente seu objetivo: “É de lá, dos estados, que se governa a República, por cima das multidões que tumultuam agitadas nas ruas da capital da União. A política dos estados é a política nacional”. \r\n\r\nCARVALHO, J. M. Os Bestializados: o Rio de Janeiro e a República que não foi. São Paulo: Companhia das Letras, 1987 (adaptado).\r\n\r\n\r\nNessa citação, o presidente do Brasil no período expressa uma estratégia política no sentido de', 'governar com a adesão popular', '', ''),
(41, 'historia', 'A Estrada de Ferro Noroeste do Brasil, que começa a ser construída apenas em 1905, foi criada, ao contrário das outras grandes ferrovias paulistas, para ser uma ferrovia de penetração, buscando novas áreas para a agricultura e povoamento. Até 1890, o café era quem ditava o traçado das ferrovias, que eram vistas apenas como auxiliadoras da produção cafeeira. \r\n\r\nCARVALHO, D. F. Café, ferrovias e crescimento populacional: oflorescimento da região noroeste paulista. Disponível em: www.historica.arquivoestado.sp.gov.br. Acesso em: 2 ago. 2012. \r\n\r\nEssa nova orientação dada à expansão ferroviária, durante a Primeira República, tinha como objetivo a', 'articulação de polos produtores para exportação', '', ''),
(42, 'historia', '\r\n      Nos estados, entretanto, se instalavam as oligarquias, de cujo perigo já nos advertia Saint-Hilaire, e sob o disfarce do que se chamou ‘‘a política dos governadores". Em círculos concêntricos esse sistema vem cumular no próprio poder central que é o sol do nosso sistema.\r\n\r\nPRADO, P. Retrato do Brasil. Rio de Janeiro: José Olympio. 1972.\r\n\r\nA crítica presente no texto remete ao acordo que fundamentou o regime republicano brasileiro durante as três primeiras décadas do século XX e fortaleceu o(a)', 'dispensa a utilização de mapas, substituídos por bússolas eletrônicas que indicam a direção a seguir pelo usuário. ', '', ''),
(43, 'historia', 'É difícil encontrar um texto sobre a Proclamação da República no Brasil que não cite a afirmação de Aristides Lobo, no Diário Popular de São Paulo, de que “o povo assistiu àquilo bestializado” . Essa versão foi relida pelos enaltecedores da Revolução de 1930, que não descuidaram da forma republicana, mas realçaram a exclusão social, o militarismo e o estrangeirismo da fórmula implantada em 1889. Isto porque o Brasil brasileiro teria nascido em 1930. \r\nMELLO, M. T. C. A república consentida: cultura democrática e científica no final do Império. Rio de Janeiro: FGV, 2007 (adaptado). \r\n\r\nO texto defende que a consolidação de uma determinada memória sobre a Proclamação da República no Brasil teve, na Revolução de 1930, um de seus momentos mais importantes. Os defensores da Revolução de 1930 procuraram construir uma visão negativa para os eventos de 1889, porque esta era uma maneira de', 'A hegemonia dos girondinos, pois a Declaração estabeleceu eleições por sufrágio universal, o que possibilitou o controle do processo revolucionário por parte desse grupo', '', ''),
(44, 'historia', 'As ruínas do povoado de Canudos, no sertão norte da Bahia, além de significativas para a identidade cultural dessa região, são úteis às investigações sobre a Guerra de Canudos e o modo de vida dos antigos revoltosos. \r\n\r\nEssas ruínas foram reconhecidas como patrimônio cultural material pelo Iphan (Instituto do Patrimônio Histórico e Artístico Nacional) porque reúnem um conjunto de', 'objetos arqueológicos e paisagísticos.', '', ''),
(45, 'historia', 'Esse discurso, típico do contexto histórico da República Velha e usado por chefes políticos, expressa uma realidade caracterizada', 'D) pelo domínio político de grupos ligados às velhas instituições monárquicas e que não encontraram espaço de ascensão política na nascente república.', '', ''),
(46, 'historia', '\r\nNa história brasileira, a chamada Revolta da Chibata liderada por João Cândido, e descrita na música, foi', 'a revolta, no porto de Salvador, em 1860, de marinheiros dos navios que faziam o tráfico negreiro.', '', ''),
(47, 'historia', 'Tendo em vista o conceito marxista de modo de produção e os trechos em destaque, podemos considerar corretamente que: ', 'Hobsbawm entende a noção de mundo do trabalho como a condição na qual os sujeitos estão inseridos ao construírem suas relações de trabalho, o que condiz com o conceito marxista de modo de produção.', '', ''),
(48, 'historia', 'Com base no conhecimento histórico e no texto é correto afirmar que a Revolução Industrial ', 'favoreceu a ascensão política das colônias ao promover o desenvolvimento econômico nas área periféricas, a organização do mercado de trabalho e o aumento dos núcleo domésticos de produção.', '', ''),
(49, 'historia', 'A respeito da Revolução Industrial, considere as seguintes afirmativas:\r\n1.Um dos componentes fundamentais da Revolução Industrial foi o desenvolvimento dos meios de transporte, de maneira especial, o surgimento das ferrovias.\r\n2.A Revolução Industrial provocou mudanças que tornaram o sistema capitalista dominante na organização da sociedade.\r\n3.Devido às condições de trabalho nas fábricas, não foi registrado na Inglaterra o trabalho infantil, de modo que as crianças destinavam seu tempo unicamente aos estudos e brincadeiras.\r\nAssinale a alternativa correta.', 'Somente as afirmativas 1 e 3 são verdadeiras.', '', ''),
(50, 'historia', 'A 1ª Revolução Industrial passou por quatro fases distintas. Assinale a sequência CORRETA das fases da 1ª Revolução Industrial:  ', '1ª fase: me', '', ''),
(51, 'historia', 'A queda da burguesia e a vitória do proletariado são igualmente inevitáveis.(...) Os proletários nada têm a perder com ela, a não ser as próprias cadeias. E têm um mundo a ganhar. Proletários de todos os países, uni-vos”.\r\nEsse trecho, extraído do Manifesto Comunista de Marx e Engels, foi escrito no contexto histórico marcado pela Revolução Industrial. Para muitos trabalhadores, a indústria trouxe muitos problemas para a classe que estava se formando.\r\nAssinale a alternativa que indica os problemas enfrentados por esses trabalhadores.', 'A alta nos ', '', ''),
(52, 'historia', '\r\nTomando como referência inicial esse texto, assinale a opção correta.', 'A Revolução', '', ''),
(53, 'historia', '\r\nUtilizando esse texto como referência inicial, assinale a opção correta acerca das idéias e das práticas socialistas no século XIX.', 'O socialism', '', ''),
(54, 'historia', 'A superioridade da indústria inglesa, em 1840, não era desafiada por qualquer futuro imaginável. E esta superioridade só teria a ganhar se as matérias-primas e os gêneros alimentícios fossem baratos. Isto não era ilusão: a nação estava tão satisfeita com o que considerava um resultado de sua política que as críticas foram quase silenciadas até a depressão da década de 80." (Joseph A. Schumpeter, "HISTÓRIA DA ANÁLISE ECONÔMICA")\r\nDesta exposição conclui-se por que razão a Inglaterra adotou decididamente, a partir de 1840, o:', 'intervencio', '', ''),
(55, 'historia', '(Uel) Um fator que contribuiu decisivamente para o processo de industrialização na Inglaterra do século XVIII foi:', 'a concorrên', '', ''),
(56, 'historia', 'A Revolução Industrial ocorrida ao longo do século XVIII está vinculada à história da Inglaterra no seu nascedouro. Entretanto, à medida que o capitalismo foi se consolidando, a idéia de Revolução Industrial começou a ser associada a um conceito universal e ganhou vários sinônimos, dentre os quais:', 'republicani', '', ''),
(57, 'historia', 'A superioridade da indústria inglesa, em 1840, não era desafiada por qualquer futuro imaginável. E esta superioridade só teria a ganhar se as matérias-primas e os gêneros alimentícios fossem baratos. Isto não era ilusão: a nação estava tão satisfeita com o que considerava um resultado de sua política que as críticas foram quase silenciadas até a depressão da década de 80." (Joseph A. Schumpeter, "HISTÓRIA DA ANÁLISE ECONÔMICA")\r\nDesta exposição conclui-se por que razão a Inglaterra adotou decididamente, a partir de 1840, o:', 'intervencio', '', ''),
(58, 'fisica', '(Fafi-MG) Dizer que a carga elétrica é quantizada significa que ela:', 'não pode se', '', ''),
(59, 'fisica', '(Unitau-SP) Uma esfera metálica tem carga elétrica negativa de valor igual a 3,2 . 10-4 C. Sendo a carga do elétron igual a 1,6 10-19 C, pode-se concluir que a esfera contém:', 'um excesso ', '', ''),
(60, 'fisica', 'Julgue os itens a seguir:\r\n1. Um corpo que tem carga positiva possui mais prótons do que elétrons;\r\n2. Dizemos que um corpo é neutro quando ele possui o mesmo número de prótons e de elétrons;\r\n3. O núcleo do átomo é formado por elétrons e prótons.\r\nEstão corretas as afirmativas:', '1 e 3 apena', '', ''),
(61, 'fisica', 'Um cosmonauta russo estava a bordo da estação espacial MIR quando um de seus rádios de comunicação quebrou. Ele constatou que dois capacitores do rádio de 3 µF e 7 µF ligados em série estavam queimados. Em função da disponibilidade, foi preciso substituir os capacitores defeituosos por um único capacitor que cumpria a mesma função.\r\nQual foi a capacitância, medida em µF, do capacitor utilizado pelo cosmonauta? ', '10  ', '', ''),
(62, 'fisica', ' Uma lâmpada LED (diodo emissor de luz), que funciona com 12 V e corrente contínua de 0,45 A, produz a mesma quantidade de luz que uma lâmpada incandescente de 60 W de potência.\r\nQual é o valor da redução da potência consumida ao se substituir a lâmpada incandescente pela de LED?', ' 26,6 W', '', ''),
(63, 'fisica', 'O elemento de armazenamento de carga análogo ao exposto no segundo sistema e a aplicação cotidiana correspondente são, respectivamente,', 'capacitores', '', ''),
(64, 'fisica', 'Mantendo-se as mesmas dimensões geométricas, o fio que apresenta menor resistência elétrica é aquele feito de', ' ferro.', '', ''),
(65, 'fisica', 'O princípio de funcionamento desse equipamento é explicado pelo fato de que a', ' bobina ime', '', ''),
(66, 'fisica', 'Deseja-se que o chuveiro funcione em qualquer uma das três posições de regulagem de temperatura, sem que haja riscos de incêndio. Qual deve ser o valor mínimo adequado do disjuntor a ser utilizado?', '20 Ab', '', ''),
(68, 'fisica', '(Fafi-MG) Dizer que a carga elétrica é quantizada significa que ela:\r\na) só pode ser positiva\r\nb) não pode ser criada nem destruída\r\nc) pode ser isolada em qualquer quantidade\r\nd) só pode existir como múltipla de uma quantidade mínima definida\r\ne) pode ser positiva ou negativa\r\nver resposta', 'd.', '', ''),
(69, 'fisica', ' Durante um estudo de deslocamento, um estudante encontra trÃªs vetores, como os representados na figura.\r\n\r\nSuponha que cada quadrado da figura represente uma distÃ¢ncia de 1,0 cm de aresta.\r\nNesse caso, o vetor deslocamento resultante terÃ¡ mÃ³dulo, direÃ§Ã£o e sentido indicados em:\r\n', '10,0 cm, di', 'imagens/d66378d563e5d4317f3989020715805b.png', 'guiinfosatc@gmail.com'),
(70, 'fisica', 'Uma análise criteriosa do desempenho de Usain Bolt na quebra do recorde mundial dos 100 metros rasos mostrou que, apesar de ser o último dos corredores a reagir ao tiro e iniciar a corrida, seus primeiros 30 metros foram os mais velozes já feitos em um recorde mundial, cruzando essa marca em 3,78 segundos. Até se colocar com o corpo reto, foram 13 passadas, mostrando sua potência durante a aceleração, o momento mais importante da corrida. Ao final desse percurso, Bolt havia atingido a velocidade máxima de 12 m/s. \r\n\r\nDisponível em: http://esporte.uol.com.br. Acesso em: 5 ago. 2012 (adaptado). \r\n\r\nSupondo que a massa desse corredor seja igual a 90 kg, o trabalho total realizado nas 13 primeiras passadas é mais próximo de:', '1,3x104 J', '', ''),
(71, 'fisica', 'Embora as condições citadas sejam diferentes do cotidiano, o processo de acumulação de energia descrito é análogo ao da energia', 'acumulada e', '', ''),
(72, 'fisica', 'Aumentar a eficiência dos processos de conversão de energia implica economizar recursos e combustíveis. Das propostas seguintes, qual resultará em maior aumento da eficiência geral do processo? ', 'Utilizar ma', '', ''),
(73, 'fisica', 'Se fosse necessário melhorar o rendimento dessa usina, que forneceria eletricidade para abastecer uma cidade, qual das seguintes ações poderia resultar em alguma economia de energia, sem afetar a capacidade de geração da usina? ', 'Usar o calo', '', ''),
(74, 'fisica', 'A construção das grandes usinas hidrelétricas foi uma tônica central no âmbito da produção de eletricidade e fontes de energia do Brasil. No entanto, em virtude das ressalvas, polêmicas e protestos contra os impactos ambientais gerados, o governo brasileiro vem adotando alternativas a essa estratégia.\r\nAlém da busca por outras matrizes energéticas, uma medida adotada foi:', ' a difusão ', '', ''),
(75, 'fisica', '“Entre as grandes obras, a usina de Balbina, construída no meio da bacia sedimentar amazônica, a aproximadamente 200 km ao norte de Manaus, foi a que causou os maiores prejuízos. (…) Sua represa, que inundou 2594 km² da Floresta Amazônica, produz somente 250 MW, energia que abastece apenas 50% das necessidades de consumo de Manaus. Em suma, Balbina possui uma represa com dimensões comparáveis às de Tucuruí, mas a energia que pode produzir é praticamente irrisória (17 vezes menor que Tucuruí)”.\r\nSENE, E.; MOREIRA, J. C. Geografia Geral e do Brasil: Espaço Geográfico e Globalização. São Paulo: Scipione, 2010. p.521.\r\nO fator geográfico que explica a menor produtividade da usina de Balbina em relação à de Tucuruí é:', 'infiltração', '', ''),
(76, 'fisica', '“Águas de março definem se falta luz este ano”. Esse foi o título de uma reportagem em jornal de circulação nacional, pouco antes do início do racionamento do consumo de energia elétrica, em 2001. No Brasil, a relação entre a produção de eletricidade e a utilização de recursos hídricos, estabelecida nessa manchete, se justifica porque:', 'é grande o ', '', ''),
(77, 'fisica', 'Apesar de um relativo declínio nas últimas décadas, esse recurso natural continua sendo a mais importante fonte de energia da atualidade. Trata-se de uma fonte não renovável e que atua na produção de eletricidade, combustíveis e na constituição de matérias-primas para inúmeros produtos, como a borracha sintética e o plástico.\r\nA descrição acima refere-se:', 'ao petróleo', '', ''),
(78, 'fisica', 'O Brasil é um dos países que apresentam os maiores potenciais hidrelétricos do mundo, o que justifica, em partes, o fato de esse tipo de energia ser bastante utilizado no país. As usinas hidrelétricas são bastante elogiadas por serem consideradas ambientalmente mais corretas do que outras alternativas de produção de energia, mas vale lembrar que não existem formas 100% limpas de realizar esse processo.\r\nAssinale a alternativa que indica, respectivamente, uma vantagem e uma desvantagem das hidroelétricas.', 'a construçã', '', ''),
(79, 'fisica', 'São consideradas fontes de energia renováveis todo recurso que tem a capacidade de se refazer ou não é limitado. Com base nessa informação, abaixo estão listadas fontes de energias renováveis, exceto:', 'biocombustí', '', ''),
(80, 'fisica', 'São consideradas fontes de energia renováveis todo recurso que tem a capacidade de se refazer ou não é limitado. Com base nessa informação, abaixo estão listadas fontes de energias renováveis, exceto:', 'biocombustí', '', ''),
(81, 'fisica', 'Uma pessoa toca no piano uma tecla correspondente à nota mi e, em seguida, a que corresponde a sol. Pode-se afirmar que serão ouvidos dois sons diferentes porque as ondas sonoras correspondentes a essas notas têm:', 'velocidade ', '', ''),
(82, 'fisica', 'Diante de uma grande parede vertical, um garoto bate palmas e recebe o eco um segundo depois. Se a velocidade do som no ar é 340 m/s, o garoto pode concluir que a parede está situada a uma distância aproximada de:', '340 m', '', ''),
(83, 'fisica', 'A respeito da classificação das ondas, marque a alternativa incorreta:', 'As ondas cl', '', ''),
(84, 'fisica', 'Uma determinada fonte gera 3600 ondas por minuto com comprimento de onda igual a 10 m. Determine a velocidade de propagação dessas ondas.', '100 m/s', '', ''),
(85, 'fisica', 'A respeito das características das ondas, marque a alternativa errada.', 'Ondas sonor', '', ''),
(86, 'fisica', 'O som mais grave que o ouvido humano é capaz de ouvir possui comprimento de onda igual a 17 m. Sendo assim, determine a mínima frequência capaz de ser percebida pelo ouvido humano.', '10 Hz', '', ''),
(87, 'fisica', 'Um pulso ondulatório senoidal é produzido em uma extremidade de uma corda longa e se propaga em toda a sua extensão. A onda possui uma freqüência de 50 Hz e comprimento de onda 0,5m. O tempo que a onda leva para percorrer uma distância de 10m na corda vale, em segundos:', '0,9', '', ''),
(88, 'fisica', '\r\nConsidere as seguintes afirmações sobre os fenômenos ondulatórios e suas características:\r\nI. A difração ocorre apenas com ondas sonoras.\r\nII. A interferência ocorre apenas com ondas eletromagnéticas.\r\nIII. A polarização ocorre apenas com ondas transversais.\r\nQuais estão corretas?', ' Apenas I', '', ''),
(89, 'fisica', 'As notas musicais podem ser agrupadas de modo a formar um conjunto. Esse conjunto pode formar uma escala musical. Dentre as diversas escalas existentes, a mais difundida é a escala diatônica, que utiliza as notas denominadas dó, ré, mi, fá, sol, lá e si. Essas notas estão organizadas em ordem crescente de alturas, sendo a nota dó a mais baixa e a nota si a mais alta.\r\nConsiderando uma mesma oitava, a nota si é a que tem menor ', 'frequência.', '', ''),
(90, 'fisica', 'Ao ouvir uma flauta e um piano emitindo a mesma nota musical, consegue-se diferenciar esses instrumentos um do outro. \r\n\r\nEssa diferenciação se deve principalmente ao(à)', 'intensidade', '', ''),
(91, 'fisica', 'Entre as alternativas a seguir, escolha aquela que contém apenas fontes primárias de luz.\r\n', 'Fósforo, So', '', ''),
(92, 'fisica', 'Indique a alternativa que explica de forma correta a diferença entre as fontes de luz fluorecentes e fosforescentes.', ' As fluorec', '', ''),
(93, 'fisica', 'As afirmações a seguir tratam dos conceitos básicos de Óptica Geométrica. Indique a questão incorreta.', ' A Óptica G', '', ''),
(94, 'fisica', 'Uma fonte secundária de luz que se apresenta na cor azul possui tal cor porque:', ' emite luz ', '', ''),
(95, 'fisica', 'Marque a alternativa correta a respeito dos fenômenos da reflexão, refração e absorção da luz.', 'A reflexão ', '', ''),
(96, 'fisica', 'Quando dois ou mais raios de luz vindos de fontes diferentes se cruzam, seguem suas trajetórias de forma independente, como se os outros não existissem.” Este texto caracteriza:', 'A refração ', '', ''),
(97, 'fisica', 'Dos objetos citados a seguir, assinale aquele que seria visível em uma sala perfeitamente escura.', ' um fio aqu', '', ''),
(98, 'fisica', 'O menor tempo possível entre um eclipse do Sol e um eclipse da Lua é de aproximadamente:', ' 12 horas  ', '', ''),
(99, 'fisica', 'Admita que o Sol subitamente “morresse”, ou seja, sua luz deixasse de ser emitida. Passadas 24h, um eventual sobrevivente, olhando para o céu sem nuvens, veria:', 'somente os ', '', ''),
(100, 'fisica', 'A formação de sombra evidencia que:', 'a velocidad', '', ''),
(101, 'portugues', 'Os  períodos  a  seguir  estão  em  ordem  diferente  daquela  em  que  foram  colocados  no  texto  original,  disponível  em http://www.cienciahoje.org.br/noticia/v/ler/id/4925/n/aventuras_de_uma_cientista_portuguesa,  e  são  referência para a próxima questão. \r\n\r\n( 1 ) O projeto, chamado Inpact, tem como objetivo o desenvolvimento pré-clínico de fármacos inovadores específicos para determinados tipos de câncer e bactérias patogênicas.\r\n( 2 ) Como parte dessa colaboração, profissionais do ICH estão dando treinamento em divulgação científica a uma jovem pesquisadora portuguesa que veio ao Brasil para expandir seus conhecimentos.\r\n( 3 ) Divulgar a ciência feita nas universidades e outros centros de pesquisa para a sociedade é uma tarefa fundamental para todo cientista.\r\n( 4 ) Para isso, reúne conhecimento e tecnologias provenientes tanto de universidades como de empresas de vários setores, proporcionando um ambiente de cooperação muito propício à criação dos novos fármacos.\r\n( 5 ) Por isso, o Instituto Ciência Hoje colocou toda a sua experiência nessa área à disposição de um projeto internacional que visa à criação de novos fármacos e reúne instituições de cinco países.\r\n\r\nAssinale a alternativa que apresenta a sequência CORRETA, de cima para baixo, em que devem aparecer os períodos, a fim de formar um texto coeso e coerente. ', '2 – 5 – 1 –', '', ''),
(102, 'portugues', 'Assinale a alternativa em que a expressão destacada a seguir está empregada em DESACORDO com as recomendações da norma gramatical. ', ' mítica “fo', '', ''),
(103, 'portugues', 'Casas construídas em áreas próximas de córregos e rios também estão sujeitas a alagamentos quando há muita chuva em um período curto de tempo. Além disso, por conta dos esgotos que muitas vezes são jogados nos rios, as pessoas que vivem nesses locais ficam sujeitas a contrair doenças.”\r\n\r\nTodos os termos sublinhados estabelecem coesão com termos anteriores. Assinale a opção que indica o referente anterior de forma adequada', 'que / casas', '', ''),
(104, 'portugues', 'O segmento do texto que não indica uma consequência de algo anteriormente citado é: ', 'pode coloca', '', ''),
(105, 'portugues', '“Temos uma notícia triste: o coração não é o órgão do amor! Ao contrário do que dizem, não é ali que moram os sentimentos. Puxa, para que serve ele, afinal? Calma, não jogue o coração para escanteio, ele é superimportante. ´É um órgão vital. É dele a função de bombear sangue para todas as células de nosso corpo´, explica Sérgio Jardim, cardiologista do Hospital do Coração”.\r\n\r\nDentre os termos sublinhados, assinale a opção que indica o termo que não se refere a nenhum termo anterior. ', ' ali ', '', ''),
(106, 'portugues', 'No primeiro parágrafo do texto CB1A1AAA, o referente da forma pronominal “sua” (l.7) é', '“vários emp', '', ''),
(107, 'portugues', 'No texto CB3A1BBB, o vocábulo “Isso” (l.9) remete à', 'velocidade ', '', ''),
(108, 'portugues', 'No texto CB3A1BBB, o pronome este, na contração “Neste” (l.12),refere-se a', '“evento de ', '', ''),
(109, 'portugues', 'No último parágrafo do texto CG1A1CCC, a forma pronominal “la”, em “apontá-la” (l.19), retoma', '“autoria in', '', ''),
(110, 'portugues', '“A resposta que lhe daria seria: “Essa estória não aconteceu nunca para que aconteça sempre...”(5º§)\r\n\r\nNo último período, ocorre um jogo de palavras entre os advérbios explicitando a seguinte fgura de linguagem', 'antítese. ', '', ''),
(111, 'portugues', '“A conclusão óbvia é que uma língua não é como nos ensinaram: clara e relacionada diretamente a um fato ou situação que ela representa como um espelho.” (3º§)\r\n\r\n Ao aproximar, semanticamente,	a língua de um espelho, o autor emprega a seguinte figura de linguagem:', 'Metáfora.', '', ''),
(112, 'portugues', 'Na passagem “Claro que não! Afinal, você é você! Se você acabar, acaba tudo e, convenhamos, isso não faz o menor sentido.” (4º§), o autor faz uso da figura de linguagem: ', 'Comparação.', '', ''),
(113, 'portugues', 'Assinale a alternativa correta referente aos excertos do Texto 1.', 'No excerto ', '', ''),
(114, 'portugues', 'No texto, a metáfora que está associada, à “maldição de Netuno” (parágrafo 10) é: ', '“textos apó', '', ''),
(115, 'portugues', 'O autor do texto 3 declara que, apesar de a literatura conter cenas de violência, ninguém a acusa de ser responsável pela violência.\r\n\r\nNesse caso, a argumentação se apoia numa: ', 'redundância', '', ''),
(116, 'portugues', 'Leia a frase a seguir.\r\n\r\n“Entre os efeitos positivos do fumo inclui-se a economia com o sistema de saúde por causa da mortalidade prematura do fumante.”\r\n\r\nAssinale a opção que indica o exemplo de linguagem figurada presente nessa frase.', 'Pleonasmo ', '', ''),
(117, 'portugues', 'A frase de César Augusto – Apressa-te devagar – traz um exemplo de linguagem figurada que se repete em: ', 'O mundo não', '', ''),
(118, 'portugues', 'Todos os pensamentos abaixo partem de uma metáfora ou de uma comparação; o pensamento que mostra uma justificativa para a metáfora ou comparação realizada é: ', 'A boa socie', '', ''),
(119, 'portugues', 'No enunciado “O teatro, aliás, era considerado uma válvula de escape para aquelas emoções reprimidas que todos têm [...].” (segundo parágrafo), há uma figura de linguagem chamada  ', 'catacrese. ', '', ''),
(120, 'portugues', 'Em “Já deve ter acontecido com você. Sabe quando você está no trabalho, e dois ou três amigos postam fotos de viagem?”, em função da valorização a um elemento da comunicação, predomina qual função da linguagem?', 'Fática.', '', ''),
(121, 'portugues', '“Posso falar de arte e artistas outra vez? Espero que, em algum lugar aí no Brasil, haja leitores e leitoras, mesmo poucos, que se interessem pela figura tão singular e tão fundamental do artista”.\r\n\r\nNesses períodos prevalece a função de linguagem denominada ', 'Fática.', '', ''),
(122, 'portugues', 'A função da linguagem predominante no texto 01 é: ', ' Emotiva ', '', ''),
(123, 'portugues', 'A função da linguagem predominante no texto 01 é: ', 'Referencial', '', ''),
(124, 'portugues', 'A função da linguagem predominante no texto 01 é: ', 'Referencial', '', ''),
(125, 'portugues', 'Observando-se a mensagem do texto, pode-se afirmar que a função da linguagem é: ', 'apelativa.', '', ''),
(126, 'portugues', 'A propaganda presente no quadro acima faz uso do processo da:', 'função fáti', '', ''),
(127, 'portugues', 'Considerando as ideias e informações trazidas ao texto, marque V para as afirmativas verdadeiras e F para as falsas para o que se afirma a seguir:\r\n\r\n( ) O caráter metalinguístico do texto configura-se mediante estratégia utilizada no primeiro parágrafo cuja análise literária antecipa o assunto a ser tratado.\r\n( ) Dentre os elementos que contribuem para a interpretação jurídica através da Literatura, a linguagem se apresenta como protagonista no processo de interação entre tais matérias.\r\n( ) A Literatura possui um papel fundamental na sociedade contemporânea, não apenas no que diz respeito à arte da palavra, mas também como base argumentativa para a aplicação do Direito.\r\n\r\nA sequência está correta em ', ' F, V, F. ', '', ''),
(128, 'portugues', 'Em relação a essa charge, analise as afirmativas.\r\n\r\nI - O aluno, na sua fala, usa a função fática da linguagem.\r\nII - Na sua fala, a professora recorre à função apelativa da linguagem.\r\nIII - Na fala do aluno, o emprego da forma verbal revela desconhecimento de quem praticou a ação constatada por ele.\r\nIV - O efeito de sentido se estabelece pela relação paradoxal entre o significado da palavra ética e a ação constatada pelo aluno.\r\n\r\nEstá correto o que se afirma em  ', 'I, II e III', '', ''),
(129, 'portugues', 'A função de linguagem predominante no texto é a: ', ' Metalinguí', '', ''),
(130, 'portugues', 'Leminski, em Despropósito geral, trata da composição de poemas, segundo o eu lírico, obras-primas. Essa função da linguagem – no caso, a poesia que fala do fazer poético – denomina-se Função  ', 'Metalinguís', '', ''),
(131, 'portugues', 'O texto “O substituto da vida” apresenta características que permitem enquadrá-lo no gênero crônica, pois nele o autor ', 'informa os ', '', ''),
(132, 'portugues', 'O texto de Rubem Alves é uma crônica. Ao compará-lo com as características desse gênero, só NÃO é correto afirmar: ', 'O texto ass', '', ''),
(133, 'portugues', 'No que se refere ao gênero textual, o texto CG1A1CCC classifica-se como', 'discurso.', '', ''),
(134, 'portugues', 'Quanto ao gênero, o texto apresenta características de uma', 'artigo. ', '', ''),
(135, 'portugues', 'Quanto ao gênero, o texto apresenta características de ', 'anúncio.', '', ''),
(136, 'portugues', 'Diversos gêneros de textos, que seguem padrões mais ou menos rígidos de composição, integram a chamada "correspondência oficial?. No caso da troca de correspondências entre autoridades de mesma hierarquia, a forma recomendada para fechar os textos é: ', 'Subscrevo-m', '', ''),
(137, 'portugues', 'Identifique abaixo as afirmativas verdadeiras ( V ) e as falsas ( F ) com base no texto 1.\r\n\r\n( ) O uso de primeira pessoa do singular ilustra o posicionamento subjetivo do entrevistado no decorrer do texto.\r\n( ) O formato do texto com perguntas e respostas caracteriza o dialogismo do gênero discursivo entrevista.\r\n( ) O entrevistado faz uso de definições genéricas e abstratas, sem fundamentar sua visão em situações práticas e cotidianas.\r\n( ) O entrevistador tece comentários no decorrer da entrevista que complementam a perspectiva do entrevistado.\r\n( ) O entrevistado alterna os pronomes “nós” e “a gente” para designar a primeira pessoa do plural, recurso que torna o texto mais formal do que se usasse apenas “nós”.\r\n\r\nAssinale a alternativa que indica a sequência correta, de cima para baixo. ', 'V • V • F •', '', ''),
(138, 'portugues', 'O texto de Mario Vargas Llosa pertence ao gênero denominado', 'V • V • F •', '', ''),
(139, 'portugues', 'A partir da leitura do texto, podemos inferir que seu autor:\r\nI. Classifica seu texto como uma crônica.\r\nII. Entende que escreveu uma narrativa “palavra puxa palavra”.\r\nIII. Se considera um cronista genial.\r\nEstá correto o que se afirma:', 'Apenas nos ', '', ''),
(140, 'portugues', 'O gênero textual do qual o texto 02 é exemplar é:', 'Editorial', '', ''),
(141, 'portugues', 'A variedade linguística dominante no texto apresenta-se, simultaneamente, ', 'descontraíd', '', ''),
(142, 'portugues', 'A linguagem utilizada no texto tende ', '  d à varie', '', '');
INSERT INTO `cadastroquestoes` (`idQuestao`, `materiaQuestao`, `Questao`, `Resposta`, `imagemQuestao`, `nomeProf`) VALUES
(143, 'portugues', 'Na leitura do fragmento do texto Antigamente constata-se, pelo emprego de palavras obsoletas, que itens lexicais outrora produtivos não mais o são no português brasileiro atual. Esse fenômeno revela que', 'o léxico do', '', ''),
(144, 'portugues', 'Considerando-se o fragmento “desses milhares de meninos que não pediram pra nascer” à luz da modalidade escrita e falada da língua, pode-se constatar o emprego da variação linguística: ', 'Técnica ', '', ''),
(145, 'portugues', 'De acordo com o excerto, o desenvolvimento de uma pedagogia da variação linguística', 'pressupõe a', '', ''),
(146, 'portugues', 'Nos quinto e sexto parágrafos, a linguagem apresenta-se ', 'em norma-pa', '', ''),
(147, 'portugues', 'Em São Paulo diz-se “bexigas”, enquanto no Rio de Janeiro diz-se “balões”.\r\n\r\nEssa diferença é um exemplo de ', 'gíria. ', '', ''),
(148, 'portugues', 'Assinale o segmento do texto que mostra um emprego de linguagem informal. ', '“A objetivi', '', ''),
(149, 'portugues', 'No texto 2, a presença de traços da linguagem coloquial é visível nos depoimentos; a frase que mostra variante formal é: ', 'O sangue é ', '', ''),
(150, 'portugues', 'No texto em questão observam-se acentuadas marcas de informalidade na linguagem utilizada. Em virtude disso, essa linguagem é  ', 'inadequada ', '', ''),
(151, 'quimica', ' Na pilha eletro-química sempre ocorre:', ' movimento ', '', ''),
(152, 'quimica', ' Em uma pilha com eletrodos de zinco e de cobre, com circuito fechado, ocorre:', 'o potencial', '', ''),
(153, 'quimica', 'Considere as seguintes semi-reações e os respectivos potenciais normais de redução (E0):', '+1,25 V    ', '', ''),
(154, 'quimica', 'A reação que ocorre em uma pilha é representada pela seguinte equação: Mn + Cu++ ® Mn++ + Cu Sabendo-se que o potencial de óxido-redução do manganês é igual a +1,05 volts e o do cobre é igual a –0,35 volts, e admitindo-se que a concentração dos íons é unitária, a voltagem da pilha será:', '–0,70 volts', '', ''),
(155, 'quimica', 'Dentre as espécies químicas representadas abaixo através de semi-reações:', 'Cu', '', ''),
(156, 'quimica', 'Considere os potenciais padrões de redução:', ' Ce4+ + Sn4', '', ''),
(157, 'quimica', 'Na reação espontânea do exercício anterior, o oxidante e o redutor são, respectivamente:', 'Ce4+ e Sn4+', '', ''),
(158, 'quimica', 'Conhecendo-se as seguintes equações de meia-célula e os respectivos potenciais padrão do eletrodo (E0):', '0,66 volts ', '', ''),
(159, 'quimica', ' Uma cela eletroquímica é constituída pelas semicelas Cr // Cr+3 e Ag // Ag+ cujos valores potenciais E0 são:', 'A voltagem ', '', ''),
(160, 'quimica', 'Uma pilha de Daniell opera em condições padrões com soluções aquosas de ZnSO4 e CuSO4, com diferença de potencial nos terminais de ?E0. Cristais de CuSO4 são adicionados na respectiva solução, alterando o potencial para ?E, na mesma temperatura.\r\n\r\nPode-se afirmar que este novo potencial:\r\n', 'aumentou.', '', ''),
(161, 'quimica', '1-(PUC-MG) Fosgênio, COCl2, é um gás venenoso. Quando inalado, reage com a água nos pulmões para produzir ácido clorídrico (HCl), que causa graves danos pulmonares, levando, finalmente, à morte: por causa disso, já foi até usado como gás de guerra. A equação química dessa reação é:\r\n\r\n\r\nCOCl2 + H2O ? CO2 + 2 HCl\r\n\r\nSe uma pessoa inalar 198 mg de fosgênio, a massa de ácido clorídrico, em gramas, que se forma nos pulmões, é igual a:', ' 3,65 . 10-', '', ''),
(162, 'quimica', 'O volume de CO2, medido a 27ºC e 1atm., produzido na combustão de 960,0 g de metano, é:', '60,0 L', '', ''),
(163, 'quimica', 'Qual é a quantidade de matéria de gás oxigênio necessária para fornecer 17,5 mol de água, H2O(v), na queima completa do acetileno, C2H2(g)?', '27,2 mol', '', ''),
(164, 'quimica', 'Quantas moléculas de água, H2O(v), são obtidas na queima completa do acetileno C2H2(g), ao serem consumidas 3,0 . 1024 moléculas de gás oxigênio?', ' 1,2 . 1023', '', ''),
(165, 'quimica', 'Urânio - 238, espontaneamente emite partículas ‘; o\r\nfragmento restante, para cada partícula emitida, tem\r\nnúmero atômico 90. Sendo assim, o número de massa do\r\nfragmento produzido é igual a', '235', '', ''),
(166, 'quimica', 'PUC-PR Em 100 gramas de alumínio, quantos átomos\r\ndeste elemento estão presentes?\r\nDados: M(Al) = 27 g/mol\r\n1 mol = 6,02 x 1023 átomo', '3,7 x 1022', '', ''),
(167, 'quimica', 'PUC-PR Em 100 gramas de alumínio, quantos átomos\r\ndeste elemento estão presentes?\r\nDados: M(Al) = 27 g/mol\r\n1 mol = 6,02 x 1023 átomo', '3,7 x 1022', '', ''),
(168, 'quimica', 'PUC-RJ Qual a massa de enxofre, em quilogramas,\r\nnecessária para a obtenção de\r\n2.000 kg de ácido sulfúrico, supondo um rendimento de\r\n100%?', '640 kg', '', ''),
(169, 'quimica', 'Isótopos radiativos de iodo são utilizados\r\nno diagnóstico e tratamento de problemas da tireóide, e\r\nsão, em geral, ministrados na forma de sais de iodeto. O\r\nnúmero de prótons, nêutrons e elétrons no isótopo 131 do\r\niodeto modelo …ƒI­¢¤¢ são, respectivamente:', '131, 53 e 1', '', ''),
(170, 'quimica', 'O estanho é usado na composição de\r\nligas metálicas como bronze (Sn-Cu) e solda metálica (SnPb).\r\nO estanho metálico pode ser obtido pela reação do\r\nminério cassiterita (SnO‚) com carbono, produzindo\r\ntambém monóxido de carbono. Supondo que o minério seja\r\npuro e o rendimento da reação seja de 100%, a massa, em\r\nquilogramas, de estanho produzida a partir de 453kg de\r\ncassiterita com 96kg de carbono é', '357', '', ''),
(171, 'quimica', 'O alumínio metálico é obtido pela\r\nredução eletrolítica da bauxita, na presença da criolita que\r\nage como fundente, abaixando o ponto de fusão da bauxita\r\nde 2600°C para cerca de 1000°C. Considerando que a\r\nbauxita é composta exclusivamente por óxido de alumínio,\r\nAØ‚Oƒ, a massa em toneladas de alumínio metálico obtida a\r\npartir de 51,0 toneladas de bauxita é de', '25,5.', '', ''),
(172, 'quimica', 'Há estudos que apontam razões\r\neconômicas e ambientais para que o gás natural possa vir a\r\ntornar-se, ao longo deste século, a principal fonte de energia\r\nem lugar do petróleo. Justifica-se essa previsão, entre\r\noutros motivos, porque o gás natural', 'tem novas j', '', ''),
(173, 'quimica', ' biodiesel praticamente não contém\r\nenxofre em sua composição. Devido a esse fato, sua\r\ncombustão apresenta vantagens em relação à do diesel\r\ndo petróleo, no que diz respeito ao fenômeno', 'da inversão', '', ''),
(174, 'quimica', ' Entidades ligadas à preservação\r\nambiental têm exercido fortes pressões para a redução da\r\nprodução de gases CFC (clorofluorcarbonos). Isto se deve\r\nprincipalmente ao fato de os CFC', 'escaparem p', '', ''),
(175, 'quimica', ' A combustão de carvão e de derivados de\r\npetróleo aumenta a concentração de um gás na atmosfera,\r\nprovocando o efeito estufa. O gás em questão é:', ' H2', '', ''),
(176, 'quimica', 'Assinale, dentre os materiais abaixo,\r\naquele que, se for depositado em lixões, não contaminará o\r\nsolo ou o lençol freático.', 'Vidro incol', '', ''),
(177, 'quimica', 'A única fonte de energia, dentre as citadas\r\nabaixo, que não resulta na produção de substâncias\r\npoluentes, nem causa qualquer impacto ambiental, é a\r\nenergia', 'nuclear.', '', ''),
(178, 'quimica', 'Em alguns municípios do Brasil, adota-se\r\numa forma bastante cruel de controlar a população de cães\r\nabandonados nas ruas: prendem-se os animais em\r\ncompartimentos vedados, onde se introduz uma mangueira\r\nacoplada ao escapamento de um caminhão, cujo motor está\r\nfuncionando em “ponto morto”.\r\nA substância que mata os cães é:', 'HCN', '', ''),
(179, 'quimica', 'No ar das grandes cidades, são\r\nencontrados hidrocarbonetos e aldeídos como poluentes.\r\nEstes provêm da utilização, pelos meios de transporte,\r\nrespectivamente, de:', 'metanol e g', '', ''),
(180, 'quimica', 'O biodiesel praticamente não contém\r\nenxofre em sua composição. Devido a esse fato, sua\r\ncombustão apresenta vantagens em relação à do diesel\r\ndo petróleo, no que diz respeito ao fenômeno', 'do efeito e', '', ''),
(181, 'quimica', 'O protocolo de Kyoto estabelece a\r\nredução da emissão de gases causadores do efeito estufa.\r\nAlguns desses gases são o dióxido de carbono, CO2, o\r\nmonóxido de dinitrogênio, N2O, e o metano, CH4.\r\nConsiderando-se a atuação desses gases, é CORRETO\r\nafirmar que', 'o dióxido d', '', ''),
(182, 'quimica', 'O oseltamivir, é o princípio ativo do antiviral Tamiflu® que é utilizado no tratamento da gripe A (H1N1). Assinale a opção que NÃO indica uma função orgânica presente na estrutura da molécula do oseltamivir.', 'Amida.', '', ''),
(183, 'quimica', 'O colesterol dá origem à testosterona, um hormônio ligado ao desenvolvimento sexual, e ao estradiol, que regula as funções sexuais', 'ambas as su', '', ''),
(184, 'quimica', 'A sibutraminaé um fármaco controlado pela Agência Nacional de Vigilância Sanitária que tem por finalidade agir como moderador de apetite.\r\n\r\n\r\nSobre a sibutramina, é incorreto afirmar que:', 'trata-se de', '', ''),
(185, 'quimica', 'Fluorquinolonas constituem uma classe de antibióticos capazes de combater diferentes tipos de bactérias. A norfloxacina, a esparfloxacina e a levofloxacina são alguns dos membros da família das fluorquinolonas.\r\n\r\nDe acordo com as informações acima, é incorreto afirmar que:', 'a norfloxac', '', ''),
(186, 'quimica', 'A dipirona sódica e o paracetamol são fármacos que se encontram presentes em medicamentos analgésicos e antiinflamatórios.Considerando a estrutura de cada composto, as ligações químicas, os grupamentos funcionais e a quantidade de átomos de cada elemento nas moléculas, marque a opção correta.', 'A massa mol', '', ''),
(187, 'quimica', 'Em um experimento, alunos associaram os odores de alguns ésteres a aromas característicos de alimentos, como, por exemplo:\r\n\r\nAnalisando a fórmula estrutural dos ésteres apresentados, pode-se dizer que, dentre eles, os que têm cheiro de:', 'pepino e ma', '', ''),
(188, 'quimica', 'Nossos corpos podem sintetizar onze aminoácidos em quantidades suficientes para nossas necessidades. Não podemos, porém, produzir as proteínas para a vida a não ser ingerindo os outros nove, conhecidos como aminoácidos essenciais.', 'Ácido orgân', '', ''),
(189, 'quimica', 'Considerando as funções orgânicas circuladas e numeradas presentes nas moléculas abaixo:', 'No composto', '', ''),
(190, 'quimica', 'A estrutura dos compostos orgânicos pode ser representada de diferentes modos. Analise estas quatro fórmulas estruturais:\r\n\r\n\r\nA partir dessa análise, é CORRETO afirmar que o número de compostos diferentes representados nesse conjunto é:', '2', '', ''),
(191, 'quimica', 'Analise a fórmula estrutural da aureomicina, substância produzida por um fungo e usada como antibiótico no tratamento de diversas infecções:', 'amida e cet', '', ''),
(192, 'quimica', 'Quando um elemento X emite partícula beta, transforma-se em Y. Os elementos X e Y são:', 'alótropos', '', ''),
(193, 'quimica', 'A bomba de hidrogênio é um exemplo de reação nuclear:', 'do tipo fus', '', ''),
(194, 'quimica', 'O que acontece com o número de massa e com o número atômico de um núcleo instável se ele emite uma partícula beta?\r\n\r\nNúmero de Massa            Número Atômico', 'sem alteraç', '', ''),
(195, 'quimica', 'Os valores da massa e carga de uma partícula beta negativa (b-) indicam que esta é idêntica ao:', 'próton', '', ''),
(196, 'quimica', 'Responda com relação às afirmações:\r\n\r\nI.   Uma reação química ocorre na eletrosfera do átomo.\r\nII.  As partículas b têm massa igual a 4.\r\nIII. As reações nucleares ocorrem na eletrosfera do átomo.\r\nIV. Os raios g não são defletidos num campo elétrico.\r\nV.  As partículas a têm a carga igual a +2.\r\n\r\nAs afirmações corretas são:', 'III, IV e V', '', ''),
(197, 'quimica', ' Assinale a alternativa incorreta.\r\n\r\nQuando um elemento radioativo emite um raio:\r\n', 'g, ocorre e', '', ''),
(198, 'quimica', 'Rutherford baseou sua Teoria Atômica em experiência na qual as partículas a de um feixe incidente sobre uma placa de ouro:', 'eram desvia', '', ''),
(199, 'quimica', ' Os raios catódicos são:', 'constituído', '', ''),
(200, 'quimica', 'A Mecânica Quântica explica ou permite previsões de todas, exceto de uma das seguintes características dos átomos. Identifique a exceção:\r\n', 'os níveis d', '', ''),
(201, 'geografia', 'Acerca da Geografia mundial, assinale a alternativa correta:  ', 'São todos d', '', ''),
(202, 'geografia', 'O início da globalização é impreciso, mas é comum apontar o seu marco na revolução tecnocientífica. A partir desse processo e do fim da Guerra Fria, alguns cientistas passaram a enxergar a formação e o funcionamento de um sistema-mundo, ou seja, uma extrema interligação entre diferentes partes do mundo a partir de diversos aspectos e dimensões. A globalização é também chamada de informacional ou 3ª Revolução Industrial. Caracterizou-se, sobretudo, pelo desenvolvimento do(a): ', 'informática', '', ''),
(203, 'geografia', 'Rafael Straforini afirma que no “lugar de convivência da criança (a realidade concreta) há o todo, ou seja, o global e vice-versa” (STRAFORINI, 2008: 22), ou seja, “esse lugar tem que ser entendido como o ponto de encontro de lógicas locais e globais, próximas e longínquas” (STRAFORINI, 2008: 23), onde a totalidade do mundo se faz sentir. Nas séries iniciais, essa forma de trabalhar o lugar deve levar em conta:', 'que o globa', '', ''),
(204, 'geografia', 'Embora estes processos ocorram de forma não homogênea em todos os países, pode-se afirmar que vivemos num mundo global. É no campo econômico que a Globalização se expressa de forma mais capilar, integrando todas as esferas da vida humana, seja nos espaços do trabalho, do consumo e até da cultura.\r\nNesse contexto, a construção de uma sociedade informacional a serviço das demandas do capital tem sido fundamental, nas últimas décadas para a configuração de um espaço totalmente globalizado. Dentre os seguintes fatores abaixo, aquele que pode ser descartado no contexto da construção dessa sociedade é a:', ' interconex', '', ''),
(205, 'geografia', 'A partir da década de 1970, o aprofundamento da globalização reestrutura o espaço econômico mundial, dando a ele uma feição de arquipélago cujos centros produtivos mais competitivos são interconectados por redes logísticas multiescalares. Nesse processo, as atividades portuárias são submetidas à adoção de novos padrões de organização e localização. A sincronização da produção, do transporte e da distribuição insere os portos em arquiteturas logísticas organizadas segundo princípios de flexibilidade operacional e de minimização das rugosidades espaciais e funcionais.\r\n\r\nAdaptado de: MONIÉ, F. e VASCONCELOS, F. “Evolução das relações entre cidades e portos: entre lógicas homogeneizantes e dinâmicas de diferenciação”, Confins [Online], n. 15, 2012\r\n\r\nEntre as mudanças observadas nos padrões de organização e localização das atividades portuárias nas últimas décadas, com reflexos no território brasileiro, destaca-se uma tendência à:', 'polarização', '', ''),
(206, 'geografia', 'Considere a matéria jornalística abaixo.\r\nVitória vai usar app de GPS para avisar sobre interdições no trânsito\r\nCapital vai ser uma das 55 cidades do mundo a usar o Waze. Prefeitura vai inserir em aplicativo informações que interfiram no trânsito.\r\n(Disponível em: g1.globo.com/espirito-santo/noticia/2015/10/vitoria-vai-usar-app-de-gps-para-avisar-sobre-interdicoes-no-transito.html)\r\nSobre o sistema de posicionamento global (GPS), é correto afirmar que ', 'é um sistem', '', ''),
(207, 'geografia', 'Sobre a economia globalizada, marque V para as afirmativas verdadeiras e F para as falsas.\r\n\r\n( ) Auxilia na redução das discrepâncias econômicas entre os países na escala global e protege as culturas na escala local.\r\n( ) Possibilita a integração de economias por meio do aparato tecnológico desenvolvido e difunde hábitos pelo mundo, como as redes de fast food.\r\n( ) Proporciona, pelos meios da comunicação, maior visibilidade a culturas locais incluindo as minorias, os povos e culturas de recantos isolados do mundo.\r\n( ) Por ser global, anulou a xenofobia e diminuiu consideravelmente os conflitos étnicos e religiosos em todo o planeta, em especial nos países da América Latina e da África Austral.\r\n( ) As formações de blocos econômicos facilitam a circulação de mercadorias, proporcionando maiores mercados consumidores e investimentos de capital financeiro numa escala global.\r\n\r\nAssinale a sequência correta.', ' F, V, F, F', '', ''),
(208, 'geografia', 'As transformações no mundo do trabalho são influenciadas pela globalização que estabelece alterações no ritmo da indústria, comércio, comunicações e transporte, com nova organização na economia mundial a partir do avanço científico e tecnológico e da concentração de capital.\r\n\r\nSão características da globalização, EXCETO, ', 'dinamismo r', '', ''),
(209, 'geografia', 'Sobre a globalização na atualidade, diferentes interpretações são elaboradas, sejam elas de ordem econômica, financeira, política e institucional.\r\n\r\nMarque a alternativa que apresenta a dimensão econômica da globalização na atualidade. ', 'O agravamen', '', ''),
(210, 'geografia', 'Na perspectiva do mercado capitalista globalizado a dependência internacional do petróleo da maior economia do planeta tem sido objeto de diversos conflitos, dentre eles o caso do Oriente Médio.\r\n\r\nSobre as questões internacionais na invasão do Iraque é CORRETO afirmar: ', 'As invasões', '', ''),
(211, 'geografia', 'Leia o texto a seguir\r\n[...] Estes sistemas de produção flexível permitiram uma aceleração do ritmo da inovação do produto, ao lado da exploração de nichos de mercado altamente especializados e de pequena escala. [...] O tempo de giro – que sempre é a chave da lucratividade capitalista – foi reduzido de modo dramático pelo uso de novas tecnologias produtivas (automação, robôs) e de novas formas organizacionais. Mas a aceleração do tempo de giro na produção teria sido inútil sem a redução do tempo de giro no consumo. \r\nHARVEY, David. Condição pós-moderna: uma pesquisa sobre as origens da mudança cultural.12. ed. São Paulo: Loyola, 2003.\r\n\r\nNo texto, Harvey retrata o modelo de gestão produtiva', 'taylorista.', '', ''),
(212, 'geografia', 'O estudo do universo das profissões contribui para que o aluno reconheça os diferentes papéis que um indivíduo pode exercer na sociedade. Espacialmente, verifica-se que o agrário e o urbano são complementares no sistema socioeconômico vigente. Embora não haja, atualmente, uma fronteira totalmente definida entre os dois, em função da modernização dos processos produtivos e das relações de trabalho, as atividades econômicas presentes nesses dois espaços, ainda, podem ser setorizadas para fins estatísticos e de compreensão da economia de um país', 'secundário ', '', ''),
(213, 'geografia', 'Considerando a repartição espacial dos diferentes tipos de tecnologia de acesso fixo à internet no Brasil, observa-se que:', 'o acesso po', '', ''),
(214, 'geografia', 'A figura e o texto acima tratam das mudanças recentes na dinâmica de integração física e produtiva no entorno da região metropolitana de São Paulo. O deslocamento de instalações industriais para o interior do estado de São Paulo, assim como a intensificação das interações e das trocas econômicas entre as cidades, podem ser mais bem compreendidas pelo conceito de:', ' rurbanizaç', '', ''),
(215, 'geografia', 'As principais características da Terceira Revolução Industrial são: ', 'produção em', '', ''),
(216, 'geografia', 'Historicamente campo e cidade eram espaços totalmente diferentes e com ínfimas conexões. O espaço do campo era considerado atrasado e o espaço da cidade era o moderno. Tal divisão vem sendo, ao longo das últimas décadas, pouco a pouco desconstruída, pois as conexões entre campo e cidade são cada vez mais fortes, promovendo inclusive características urbanas no campo e vice-versa. Entre os setores a seguir, o principal responsável por essas novas relações espaciais é:', 'extrativism', '', ''),
(217, 'geografia', '\r\nHistoricamente, os países industrializados têm sido responsáveis pela maior parte das emissões globais de gases do efeito estufa.Os Estados Unidos é o país líder na emissão desses gases. Entretanto, na atualidade, vários países em desenvolvimento, entre eles China, Índia e Brasil, também se posicionam entre os grandes emissores. Mesmo assim, numa base per capita, os países em desenvolvimento continuam tendo emissões mais baixas do que os industrializados. Com dados de 2005, o Brasil se apresenta como o quarto maior emissor de gases do efeito estufa.\r\n\r\n\r\nFonte:< www.ipam.org.br>. Adaptado\r\n\r\n\r\nEntre as causas da elevada emissão de gases realizada pelo Brasil, a principal é:', 'investiment', '', ''),
(218, 'geografia', 'A Terceira Revolução Industrial, conhecida como revolução tecnocientífica e informacional, iniciada nas últimas décadas do século XX, impôs ao mundo novas técnicas, novas maneiras de produzir e novos produtos. Uma das principais características desse novo contexto foi o crescente desenvolvimento de empresas de alta tecnologia, cujas inovações permitiram que elas se libertassem das restrições locacionais tradicionais. \r\nAssinale a opção que indica o fator locacional que atua, de modo decisivo, na estratégia de localização das empresas de alta tecnologia.', 'A qualidade', '', ''),
(219, 'geografia', 'No mundo contemporâneo não basta produzir. É indispensável pôr a produção em movimento, pois agora é a circulação que preside à produção. \r\n\r\nNo caso do espaço nacional, é INCORRETO afirmar que, nas últimas décadas, os fluxos', 'rodoviários', '', ''),
(220, 'geografia', 'A presença de uma corrente migratória por si só não explica a condição de vida dos imigrantes. Esta será somente a aparência de um fenômeno mais profundo, estruturado em relações socioeconômicas muitas vezes perversas. É o que podemos dizer dos indivíduos que são deslocados do campo para as cidades e obrigados a viver em condições de vida culturalmente diferentes das que vivenciaram em seu lugar de origem.\r\nSCARLATO, F. C. População e urbanização brasileira. In: ROSS, J. L. S. Geografia do Brasil. São Paulo: Edusp, 2009.\r\nO texto faz referência a um movimento migratório que reflete o(a)', 'dinâmica ex', '', ''),
(221, 'geografia', ' Em 1935, o governo brasileiro começou a negar vistos a judeus. Posteriormente, durante o Estado Novo, uma circular secreta proibiu a concessão de vistos a “pessoas de origem semita”, inclusive turistas e negociantes, o que causou uma queda de 75% da imigração judaica ao longo daquele ano. Entretanto, mesmo com as imposições da lei, muitos judeus continuaram entrando ilegalmente no país durante a guerra e as ameaças de deportação em massa nunca foram concretizadas, apesar da extradição de alguns indivíduos por sua militância política.\r\nGRIMBERG, K. Nova língua interior: 500 anos de história dos judeus no Brasil. In: IBGE. Brasil: 500 anos de povoamento. Rio de Janeiro: IBGE, 2000 (adaptado).\r\nUma razão para a adoção da política de imigração mencionada no texto foi o(a) ', 'simpatia de', '', ''),
(222, 'geografia', 'A letra dessa canção reflete elementos identitários que representam a ', 'denúncia da', '', ''),
(223, 'geografia', 'O trecho da música faz referência a uma importante obra na região do rio São Francisco. Uma consequência socioespacial dessa construção foi', 'a ampliação', '', ''),
(224, 'geografia', 'A migração pode ser definida como:', 'A saída de ', '', ''),
(225, 'geografia', 'Quando um indivíduo sai de um país em busca de melhores condições de vida, ele recebe o nome de:', 'forasteiro.', '', ''),
(226, 'geografia', 'Migração é o deslocamento espacial de um indivíduo ou de parte da população de um lugar para outro. A principal causa da migração no mundo e no Brasil tem origem:', 'religiosa.', '', ''),
(227, 'geografia', ' No que se refere às migrações brasileiras, julgue os itens a seguir:', 'A desconcen', '', ''),
(228, 'geografia', 'O deslocamento diário de pessoas para estudar ou trabalhar em outra cidade, estado ou país não se trata propriamente de uma migração, pois é uma transferência momentânea. Ocorre comumente nas regiões metropolitanas.\r\nA que movimento migratório refere-se o fragmento acima?\r\na) nomadismo', ' diáspora', '', ''),
(229, 'geografia', 'O Brasil, dada a sua grande extensão territorial e a predominância de climas úmidos, tem uma extensa rede hidrográfica. Todos os rios, com exceção do Amazonas, possuem regime pluvial e todos são exorreicos, sendo a maioria perene e alguns deles temporários.\r\nSENE, E,; MOREIRA, J. Geografia Geral e do Brasil. São Paulo: Scipione, 2010, p.459. Adaptado.\r\nEm função do regime pluvial, a concentração de rios temporários encontra-se na região', 'Norte', '', ''),
(230, 'geografia', 'A região Sul do Brasil apresenta um quadro natural marcado principalmente pelas características climáticas, sendo a região que possui as mais baixas temperaturas do país. Sobre os aspectos climáticos e suas relações com a natureza dessa região, é INCORRETO afirmar que:', 'A maior par', '', ''),
(231, 'geografia', 'Para análise das paisagens naturais brasileiras o geógrafo Ab’Saber (1967) propôs uma classificação em domínios morfoclimáticos.\r\n\r\nMarque a alternativa que apresenta CORRETAMENTE os aspectos relacionados à concepção da leitura das paisagens por Ab’Saber. ', 'Expressa a ', '', ''),
(232, 'geografia', 'Sobre o efeito estufa, verifica-se que', 'é gerado pe', '', ''),
(233, 'geografia', 'Assinale a alternativa que indica o principal gás do efeito estufa e as respectivas principais origens.', 'H2SO4 (acid', '', ''),
(234, 'geografia', 'Pesquisas recentes mostram que a alta taxa de Imagem 037.jpg atmosférico está afetando também os oceanos. Depositado na superfície da água, tal gás acaba misturando-se a ela devido ao movimento dos copépodes – pequenos animais que constituem o plâncton. Tal fato está fazendo com que o pH da água torne-se mais ácido, o que altera a vida de diversas espécies marinhas, podendo inclusive levá-las à extinção. \r\nAnalise as alternativas abaixo e marque a opção cuja ação leva ao acontecimento do fato relatado no texto.', 'Extinção de', '', ''),
(235, 'geografia', 'O El Niño, denominado ENOS (El Niño – Oscilação Sul), é um fenômeno natural que ocorre em intervalos cíclicos de 3 a 5 anos na região tropical do oceano Pacífico e envolve processos de interação entre a atmosfera e a hidrosfera, afetando a atuação do clima e modificando a paisagem de diferentes lugares do planeta.\r\nSobre as condições atmosférico-oceânicas em períodos de El Niño, julgue os itens como (V) VERDADEIROS ou (F) FALSOS:\r\n\r\n( ) Os ventos alíseos abrandam sua intensidade, diminuindo as chuvas na Austrália e Indonésia.\r\n( ) Com o aquecimento das águas do Pacífico Central, a célula de circulação do ar se desloca para leste.\r\n( ) A termoclina, zona de transição entre as águas quentes e as mais frias, torna-se menos rasa e, sem os ventos alíseos, diminui a ressurgência, fenômeno que afeta diretamente a atividade pesqueira.\r\n\r\nA sequência CORRETA é:', ' F, F, F.', '', ''),
(236, 'geografia', 'As mudanças climáticas estão ocorrendo e já é possível notar algumas modificações que provavelmente relacionam-se com a ação do homem. Assim sendo, são necessárias ações urgentes para que nosso impacto no meio ambiente seja reduzido. Analise as alternativas abaixo e marque aquela que não indica uma forma de deter o avanço das mudanças climáticas.', 'Realizar té', '', ''),
(237, 'geografia', 'Muitas pessoas acreditam que as mudanças climáticas afetam exclusivamente a temperatura do planeta, que se torna mais quente. Entretanto, muitas vezes, essas pessoas esquecem que, ao aumentar a temperatura, uma série de organismos e ecossistemas são gravemente afetados. Observe as alternativas abaixo e marque a única que não é uma consequência da alteração da temperatura do planeta.', 'Alterações ', '', ''),
(238, 'geografia', 'Uma das medidas internacionais de combate ao aquecimento global mais divulgadas pela imprensa em todo o mundo foi o Protocolo de Kyoto, que teve como objetivo principal:', 'Diminuir as', '', ''),
(239, 'geografia', 'Todo mapa apresenta algumas informações essenciais e responde a certas questões. Onde? O quê? Quanto? Essas são algumas perguntas que se pode fazer sobre os elementos que compõem o espaço geográfico e que representam a diversidade dos fenômenos que podem ser cartografados. Considerando o mapa abaixo, assinale a alternativa que indica o método de representação da cartografia temática utilizado para elaborá-lo.', 'Representaç', '', ''),
(240, 'geografia', '\r\nNo que se refere à coleta e ao registro de informações do Cadastro Territorial Multifinalitário marque a única opção errada: ', 'Os vértices', '', ''),
(241, 'geografia', 'O Cadastro Técnico Multifinalitário pode ser entendido como um sistema de registro dos elementos espaciais que representam a estrutura urbana, constituído por uma componente geométrica e outra descritiva que lhe conferem agilidade e diversidade no fornecimento de dados para atender a diferentes funções, inclusive a de planejamento urbano. Marque a única opção incorreta sobre o Cadastro Técnico Multifinalitário:', 'O Cadastro ', '', ''),
(242, 'geografia', 'Analise as afirmativas abaixo e identifique qual não se refere aos coletores eletrônicos de dados utilizados no cadastro imobiliário: ', 'Controle de', '', ''),
(243, 'geografia', 'Marque a única alternativa ERRADA no que diz respeito aos levantamentos cadastrais urbanos poderem empregar métodos clássicos tais como o método ortogonal: ', 'Usa um sist', '', ''),
(244, 'geografia', 'Nos levantamentos cadastrais urbanos também podemos empregar o método de posicionamento polar tradicional. A respeito deste método, a alternativa INCORRETA é: ', 'Este método', '', ''),
(245, 'geografia', 'Os levantamentos cadastrais de propriedades urbanas referem-se à localização dos limites destas e a preparação de desenhos (ou plantas) que mostram estes limites. Para obtenção desta planta ou levantamento de imóvel urbano, marque a única alternativa correta:', ' Sempre usa', '', ''),
(246, 'geografia', 'Qual das alternativas abaixo NÃO faz parte do Cadastro Técnico Multifinalitário: ', 'Implementar', '', ''),
(247, 'geografia', 'A efetivação da inscrição ou a transferência de nome e endereço no cadastro imobiliário, de acordo com a lei vigente, deve ser feita, a partir da data da escritura definitiva ou compromisso de compra e venda do imóvel, no prazo máximo de:', '60 dias. ', '', ''),
(248, 'geografia', 'A Geografia mobiliza diferentes categorias para a análise do espaço geográfico, dentre as quais destaca-se o território. Raffestin e Souza são exemplos de autores que contribuem com o debate sobre essa categoria. Como elementos comuns à problemática apresentada por esses autores está a compreensão de território como ', ' porção do ', '', ''),
(249, 'espanhol', 'Los tubos de pintura limpios y brillantes contienen un montón de experiencias para mí...\r\nlos acaricio con mis manos temblantes de emoción, como deben hacerlo los enamorados...\r\nme veo ya gozar la pintura...”.\r\nIn:http://perso.wanadoo.fr/art-deco.france/daliesp.htm\r\nEn el fragmento, Dalí reconoce, ya a los 15 años, que su labor artística está llena de', 'racionalida', '', ''),
(250, 'espanhol', '"Sólo en primavera lucen los machos adultos plumajes de llamativos colores."\r\nLa oración que equivale a la anterior es:', 'racionalida', '', ''),
(251, 'espanhol', 'El desorrollo de las investigaciones de "taxonomía folk..."', 'influencia ', '', ''),
(252, 'espanhol', 'En México conviven varias etnías, por ejemplo:', 'Nahuas, Yac', '', ''),
(253, 'espanhol', 'El estudio de la sistemática precientífica generalmente es hecho por', 'antropólogo', '', ''),
(254, 'espanhol', 'Marque la alternativa CORRECTA.\r\n¿Que hicieron juntos Costa Y Wright?', 'Robaron una', '', ''),
(255, 'espanhol', '¿Como reaccionó Costa cuando una señora se sentó a su lado y le dió conversación?', 'Trató de le', '', ''),
(256, 'espanhol', 'Según el texto, ¿Cuáles son las dos líneas principales de problemas madrileños?', 'La polución', '', ''),
(257, 'espanhol', 'Según el texto, ¿Qué está llenando el espacio rural madrileño?', 'Los cultivo', '', ''),
(258, 'espanhol', 'La frase “empieza a doler” (ref. 1) en el texto se refiere a', 'proceso int', '', ''),
(259, 'espanhol', '“Los tubos de pintura limpios y brillantes contienen un montón de experiencias para mí...\r\nlos acaricio con mis manos temblantes de emoción, como deben hacerlo los enamorados...\r\nme veo ya gozar la pintura...”.\r\nIn:http://perso.wanadoo.fr/art-deco.france/daliesp.htm\r\nEn el fragmento, Dalí reconoce, ya a los 15 años, que su labor artística está llena de', 'inseguridad', '', ''),
(260, 'espanhol', 'A seis años quería ser cocina. A siete años, quería ser Napoleón. Desde entonces, mi\r\nambición no dejó de crecer como mi delirio de grandeza”.\r\nIn:http://perso.wanadoo.fr/art-deco.france/daliesp.htm\r\nLeído el fragmento, se percibe que', ' su delirio', '', ''),
(261, 'espanhol', 'Según el texto, la era moderna de los Juegos Olímpicos se inicia en:', 'París en 18', '', ''),
(262, 'espanhol', 'En el primer párrafo, el texto:', 'estudia las', '', ''),
(263, 'espanhol', 'En el segundo párrafo leemos que:', 'la duración', '', ''),
(264, 'espanhol', 'Al valerse de la imagen de Alicia frente al espejo, el autor sugiere ser necesario:', 'asomarse a ', '', ''),
(265, 'espanhol', 'Comentar que todo “se está realizando sin que casi la sociedad se de cuenta de ello” (ref.1),\r\nes lo mismo que decir que este proceso ocurre:', 'sin que cas', '', ''),
(266, 'espanhol', 'De acuerdo con el segundo párrafo, la divulgación científica en la mayoría de los países\r\neuropeos es', 'inexistente', '', ''),
(267, 'espanhol', '\r\nTras la lectura del texto podemos inferir que la ÚNICA alternativa que NO corresponde a la\r\nverdad es:', 'Creía tener', '', ''),
(268, 'espanhol', 'El autor afirma que “el cine abre un espacio distinto” (ref. 1). Lo “distinto” del cine es:', 'no reproduc', '', ''),
(269, 'espanhol', 'En la publicidad, se justifica lo dicho en el primer bloque:', 'porque el a', '', ''),
(270, 'espanhol', 'La lectura de la historieta de Quino permite afirmar que', 'Adán le hac', '', ''),
(271, 'espanhol', 'Sería incorrecto decir que', 'Adán se sie', '', ''),
(272, 'espanhol', 'Marque la alternativa que completa, correcta y respectivamente, los huecos del texto a\r\nseguir.', 'confiada e ', '', ''),
(273, 'espanhol', 'De acordo com o texto, segundo dados do Instituto Cervantes', '80% dos alu', '', ''),
(274, 'espanhol', 'La expresión “meter en cintura” que aparece en la línea 33/34 del texto signi?ca: ', 'meter a tod', '', ''),
(275, 'espanhol', 'Um casal de turistas uruguaios estava conversando enquanto passeava pelo Rio de Janeiro. A moça disse ao rapaz: “Tenemos que llegar muy temprano a la playa.”. Um brasileiro que passava próximo a eles tentava imaginar qual era o significado dessa fala.\r\n\r\nAssinale a alternativa que traz a tradução mais adequada para a fala da turista:', 'Temos que c', '', ''),
(276, 'espanhol', 'En el Texto I, se ve lo siguiente:\r\n“No obstante, a la espera de que la Comunidad de Madrid cumpla con su compromiso educativo, en el momento de la determinación del 35% del currículo que le compete, requerimos que apueste por una enseñanza de calidad." (líneas 46-50)\r\n¿Qué puede sustituir la expresión en destaque, sin perjuicio a la comprensión? ', 'Mientras', '', ''),
(277, 'espanhol', '“Sin embargo, la OMS apunta que Perú es uno de los 77 países que no cuenta con cifras fiables sobre las causas de las muertes registradas.”\r\n\r\nA conjunção sublinhada acima equivale, em Português, a:', 'No entanto', '', ''),
(278, 'espanhol', '\r\nEl sentido del primer párrafo del texto se mantendría inalterado si la palabra “aunque” se sustituyera por:', ' pero', '', ''),
(279, 'ingles', '\r\nAssinale a letra correspondente à alternativa que preenche\r\ncorretamente as lacunas da frase apresentada:\r\n"Did you like the film?"\r\n"No, not very __________."\r\n"__________ was wrong with it?"\r\n"The actors were good but the story was too sentimental."', 'many – Why', '', ''),
(280, 'ingles', 'Assinale a alternativa que preenche corretamente as lacunas\r\nda frase a seguir:\r\nDo politicians work __________ and earn __________\r\nmoney?', 'little – ma', '', ''),
(281, 'ingles', 'Assinale a alternativa correta:\r\nIt is not easy to learn a foreign language. It requires\r\n__________ years of study.', 'much', '', ''),
(282, 'ingles', 'Assinale a alternativa que preenche corretamente as\r\nlacunas:\r\nGive me __________ tea with __________ sugar.', 'some – many', '', ''),
(283, 'ingles', 'Assinale a alternativa correta:\r\nHow __________ shoes are there in the shop windows?', 'a lot of', '', ''),
(284, 'ingles', 'Assinale a opção cuja frase esteja gramaticalmente correta:', 'There is le', '', ''),
(285, 'ingles', 'Assinale a alternativa que preenche corretamente a lacuna\r\nda frase adiante:\r\nMust you always make so __________ noise?', 'many', '', ''),
(286, 'ingles', 'The item that presents, respectively, a synonym for BUT and\r\nthe opposite of MUCH in "but there is much to be gained" is:', ' however – ', '', ''),
(287, 'ingles', 'These pioneers began a revolution that has culminated in a\r\nfirmly established belief among most American employers\r\nthat women can do the job – any job – as well as men. Many\r\nthought that day would never come.\r\n– Na frase "Many thought that day would never come", a\r\npalavra mais adequada para completar o sentido de many é:', 'women.', '', ''),
(288, 'ingles', 'We should use __________ time we have available to\r\ndiscuss John’s proposal.', 'the little', '', ''),
(289, 'ingles', 'I don''t like to spend my vacation in the country. There isn''t\r\n__________ to do.', ' many', '', ''),
(290, 'ingles', 'Choose the option which completes the sentences below\r\ncorrectly:\r\nIt is __________ use trying to change her mind.\r\nSlowly, __________ children began coming to school.\r\nUnfortunately, he had __________ friends.\r\nCould you possibly give me __________ help?', ' a little /', '', ''),
(291, 'ingles', 'Indicate the alternative that best completes the following\r\nsentence:\r\nShe __________ German very well.', 'both speaks', '', ''),
(292, 'ingles', 'Reescreva corretamente a frase a sentença apresentada a\r\nseguir:\r\nYes, it does depend on the age of the child.', 'Yes, it dep', '', ''),
(293, 'ingles', 'Escolha a alternativa que melhor interage com a oração\r\ndada:\r\nHow do you do?', 'It is easy!', '', ''),
(294, 'ingles', 'Which is the suitable answer to this question?\r\nDo you want some ice-cream?', 'In my pocke', '', ''),
(295, 'ingles', 'Qual a forma correta?', 'This book t', '', ''),
(296, 'ingles', 'Assinale a alternativa correta:\r\nWhy __________ go home now?', 'wouldn''t we', '', ''),
(297, 'ingles', 'Assinale a alternativa correta:\r\nHe doesn''t __________ anymore.', 'smoking', '', ''),
(298, 'ingles', 'Mark the CORRECT alternative to complete the sentence:\r\nHis body __________ in the cemetery.', 'laid', '', ''),
(299, 'ingles', 'When children are frequently exposed to violent scenes on\r\nTV, they __________ about violence anymore because they\r\n__________ anything wrong in it.', 'don''t care ', '', ''),
(300, 'ingles', 'Children''s interest in TV __________ between ages of 5 and', 'keeps to gr', '', ''),
(301, 'ingles', 'A: How do you like your coffee?\r\nB: __________', 'Strong, wit', '', ''),
(302, 'ingles', 'Choose the alternative with the right sentences:\r\nI. Why don''t you cut the orange yourself?\r\nII. You must learn how to speak English well.\r\nIII. He is just likes my father.\r\nIV. I do not know like to sing this song.\r\nV. They cut each other with a knife.', 'II, III, IV', '', ''),
(303, 'ingles', '\r\nIn the sentence, "biological agents do not survive well", the\r\nuse of the Present Tense implies:', 'condition.', '', ''),
(304, 'ingles', 'When Carlos has a headache, he __________ some tea.', ' drank', '', ''),
(305, 'ingles', 'Choose the best alternative to answer the question below:\r\nWhat do you do?', 'We are pilo', '', ''),
(306, 'ingles', 'The stepmother smiled and said: “Of course you __________\r\ngo, Cinderella. If you __________ your work first and if you\r\n__________ a dress to wear.”', 'could – was', '', ''),
(307, 'ingles', 'Complete:\r\nThe population of the world is __________.\r\n', 'finding', '', ''),
(308, 'ingles', 'Em inglês, "Você está esperando alguma carta?" seria:', 'Are you exp', '', ''),
(343, 'fisica', 'Com o objetivo de simular as ondas no mar, foram geradas, em uma cuba de ondas de um laboratório, as ondas bidimensionais representadas na figura, que se propagam de uma região mais funda (região 1) para uma região mais rasa (região 2).\r\n\r\n\r\n\r\nSabendo que, quando as ondas passam de uma região para a outra, sua frequência de oscilação não se altera e considerando as medidas indicadas na figura, é correto afirmar que a razão entre as velocidades de propagação das ondas nas regiões 1 e 2 é igual a: ', '0,4.', 'imagens/d25681c0fa4e8a5f93eaca308fbd7ae2.', 'guiinfosatc@gmail.com'),
(344, 'fisica', 'Uma manifestação comum das torcidas em estádios de futebol é a ola mexicana. Os espectadores de uma linha, sem sair do lugar e sem se deslocarem lateralmente, ficam de pé e se sentam, sincronizados com os da linha adjacente. O efeito coletivo se propaga pelos espectadores do estádio, formando uma onda progressiva, conforme ilustração.\r\n\r\nenemquestao65\r\n\r\nCalcula-se que a velocidade de propagação dessa “onda humana” é 45 km/h, e que cada período de oscilação contém 16 pessoas, que se levantam e sentam organizadamente e distanciadas entre si por 80 cm. ', '0,3', 'imagens/e5c09a9957e38110bf8e764f95c85536.jpg', 'guiinfosatc@gmail.com'),
(345, 'fisica', ' Um raio de luz incide sobre um espelho plano. De acordo com as condições dadas na figura, determine o valor do ângulo de incidência.', '50', 'imagens/710c9cb4dd2b524bed01ff399ef733c7.jpg', 'vinicius-smelo@hotmail.com'),
(346, 'matematica', ' A distribuição de salários de uma empresa é fornecido pela tabela a seguir:\r\n\r\n\r\n\r\nCalcule a média salarial dessa empresa.', '2 369 56', 'imagens/6d7ba95d982adf945859fa90c5df108d.gif', 'vinicius-smelo@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `idHistorico` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProva` varchar(200) NOT NULL,
  `materiaProva` varchar(200) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `emailUsuario` varchar(200) NOT NULL,
  `acertosUsuario` int(2) NOT NULL,
  `errosUsuario` int(2) NOT NULL,
  `porcentagemDeAcertosUsuario` int(3) NOT NULL,
  `data` varchar(11) NOT NULL,
  PRIMARY KEY (`idHistorico`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`idHistorico`, `nomeProva`, `materiaProva`, `usuario`, `emailUsuario`, `acertosUsuario`, `errosUsuario`, `porcentagemDeAcertosUsuario`, `data`) VALUES
(82, 'prova de matematica', 'solidos geometricos', 'Professor', 'vinicius-smelo@hotmail.com', 4, 6, 40, '21/11/2017'),
(81, 'prova de matematica', 'potenciacao', 'Professor', '', 3, 7, 30, '21/11/2017'),
(80, 'prova de matematica', 'porcentagem', 'Professor', '', 1, 9, 10, '21/11/2017'),
(79, 'prova de quimica', 'eletroquimica', 'Professor', '', 4, 6, 40, '21/11/2017'),
(71, 'prova de matematica', 'analise combinatoria', 'Professor', 'vinicius-smelo@hotmail.com', 2, 8, 20, '12/11/2017'),
(72, 'prova de quimica', 'eletro quimica', 'Aluno', 'vinicius-smelo@hotmail.com', 8, 2, 80, '13/11/2017');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_acl_groups`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_groups` (
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_role_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_setting` tinyint(2) NOT NULL DEFAULT '0',
  KEY `group_id` (`group_id`),
  KEY `auth_opt_id` (`auth_option_id`),
  KEY `auth_role_id` (`auth_role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_acl_groups`
--

INSERT INTO `phpbb_acl_groups` (`group_id`, `forum_id`, `auth_option_id`, `auth_role_id`, `auth_setting`) VALUES
(1, 0, 89, 0, 1),
(1, 0, 98, 0, 1),
(1, 0, 116, 0, 1),
(5, 0, 0, 5, 0),
(5, 0, 0, 1, 0),
(2, 0, 0, 6, 0),
(3, 0, 0, 6, 0),
(4, 0, 0, 5, 0),
(4, 0, 0, 10, 0),
(1, 7, 0, 16, 0),
(1, 6, 0, 16, 0),
(1, 5, 0, 16, 0),
(1, 3, 0, 16, 0),
(5, 19, 0, 14, 0),
(5, 18, 0, 14, 0),
(5, 21, 0, 14, 0),
(1, 21, 0, 16, 0),
(5, 17, 0, 14, 0),
(5, 16, 0, 14, 0),
(5, 15, 0, 14, 0),
(7, 0, 0, 23, 0),
(5, 14, 0, 14, 0),
(5, 13, 0, 14, 0),
(5, 12, 0, 14, 0),
(5, 11, 0, 14, 0),
(5, 10, 0, 14, 0),
(5, 9, 0, 14, 0),
(5, 8, 0, 14, 0),
(5, 7, 0, 14, 0),
(5, 6, 0, 14, 0),
(5, 5, 0, 14, 0),
(5, 3, 0, 14, 0),
(7, 21, 0, 21, 0),
(2, 21, 0, 21, 0),
(4, 21, 0, 22, 0),
(1, 8, 0, 16, 0),
(1, 9, 0, 16, 0),
(1, 10, 0, 16, 0),
(1, 11, 0, 16, 0),
(1, 12, 0, 16, 0),
(1, 13, 0, 16, 0),
(1, 14, 0, 16, 0),
(1, 15, 0, 16, 0),
(1, 16, 0, 16, 0),
(1, 17, 0, 16, 0),
(1, 18, 0, 16, 0),
(1, 19, 0, 16, 0),
(7, 3, 0, 21, 0),
(7, 5, 0, 21, 0),
(7, 6, 0, 21, 0),
(7, 7, 0, 21, 0),
(7, 8, 0, 21, 0),
(7, 9, 0, 21, 0),
(7, 10, 0, 21, 0),
(7, 11, 0, 21, 0),
(7, 12, 0, 21, 0),
(7, 13, 0, 21, 0),
(7, 14, 0, 21, 0),
(7, 15, 0, 21, 0),
(7, 16, 0, 21, 0),
(7, 17, 0, 21, 0),
(7, 18, 0, 21, 0),
(7, 19, 0, 21, 0),
(2, 3, 0, 21, 0),
(2, 5, 0, 21, 0),
(2, 6, 0, 21, 0),
(2, 7, 0, 21, 0),
(2, 8, 0, 21, 0),
(2, 9, 0, 21, 0),
(2, 10, 0, 21, 0),
(2, 11, 0, 21, 0),
(2, 12, 0, 21, 0),
(2, 13, 0, 21, 0),
(2, 14, 0, 21, 0),
(2, 15, 0, 21, 0),
(2, 16, 0, 21, 0),
(2, 17, 0, 21, 0),
(2, 18, 0, 21, 0),
(2, 19, 0, 21, 0),
(4, 3, 0, 22, 0),
(4, 5, 0, 22, 0),
(4, 6, 0, 22, 0),
(4, 7, 0, 22, 0),
(4, 8, 0, 22, 0),
(4, 9, 0, 22, 0),
(4, 10, 0, 22, 0),
(4, 11, 0, 22, 0),
(4, 12, 0, 22, 0),
(4, 13, 0, 22, 0),
(4, 14, 0, 22, 0),
(4, 15, 0, 22, 0),
(4, 16, 0, 22, 0),
(4, 17, 0, 22, 0),
(4, 18, 0, 22, 0),
(4, 19, 0, 22, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_acl_options`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_options` (
  `auth_option_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `auth_option` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `is_global` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_local` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `founder_only` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`auth_option_id`),
  UNIQUE KEY `auth_option` (`auth_option`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=123 ;

--
-- Extraindo dados da tabela `phpbb_acl_options`
--

INSERT INTO `phpbb_acl_options` (`auth_option_id`, `auth_option`, `is_global`, `is_local`, `founder_only`) VALUES
(1, 'f_', 0, 1, 0),
(2, 'f_announce', 0, 1, 0),
(3, 'f_attach', 0, 1, 0),
(4, 'f_bbcode', 0, 1, 0),
(5, 'f_bump', 0, 1, 0),
(6, 'f_delete', 0, 1, 0),
(7, 'f_download', 0, 1, 0),
(8, 'f_edit', 0, 1, 0),
(9, 'f_email', 0, 1, 0),
(10, 'f_flash', 0, 1, 0),
(11, 'f_icons', 0, 1, 0),
(12, 'f_ignoreflood', 0, 1, 0),
(13, 'f_img', 0, 1, 0),
(14, 'f_list', 0, 1, 0),
(15, 'f_noapprove', 0, 1, 0),
(16, 'f_poll', 0, 1, 0),
(17, 'f_post', 0, 1, 0),
(18, 'f_postcount', 0, 1, 0),
(19, 'f_print', 0, 1, 0),
(20, 'f_read', 0, 1, 0),
(21, 'f_reply', 0, 1, 0),
(22, 'f_report', 0, 1, 0),
(23, 'f_search', 0, 1, 0),
(24, 'f_sigs', 0, 1, 0),
(25, 'f_smilies', 0, 1, 0),
(26, 'f_sticky', 0, 1, 0),
(27, 'f_subscribe', 0, 1, 0),
(28, 'f_user_lock', 0, 1, 0),
(29, 'f_vote', 0, 1, 0),
(30, 'f_votechg', 0, 1, 0),
(31, 'f_softdelete', 0, 1, 0),
(32, 'm_', 1, 1, 0),
(33, 'm_approve', 1, 1, 0),
(34, 'm_chgposter', 1, 1, 0),
(35, 'm_delete', 1, 1, 0),
(36, 'm_edit', 1, 1, 0),
(37, 'm_info', 1, 1, 0),
(38, 'm_lock', 1, 1, 0),
(39, 'm_merge', 1, 1, 0),
(40, 'm_move', 1, 1, 0),
(41, 'm_report', 1, 1, 0),
(42, 'm_split', 1, 1, 0),
(43, 'm_softdelete', 1, 1, 0),
(44, 'm_ban', 1, 0, 0),
(45, 'm_pm_report', 1, 0, 0),
(46, 'm_warn', 1, 0, 0),
(47, 'a_', 1, 0, 0),
(48, 'a_aauth', 1, 0, 0),
(49, 'a_attach', 1, 0, 0),
(50, 'a_authgroups', 1, 0, 0),
(51, 'a_authusers', 1, 0, 0),
(52, 'a_backup', 1, 0, 0),
(53, 'a_ban', 1, 0, 0),
(54, 'a_bbcode', 1, 0, 0),
(55, 'a_board', 1, 0, 0),
(56, 'a_bots', 1, 0, 0),
(57, 'a_clearlogs', 1, 0, 0),
(58, 'a_email', 1, 0, 0),
(59, 'a_extensions', 1, 0, 0),
(60, 'a_fauth', 1, 0, 0),
(61, 'a_forum', 1, 0, 0),
(62, 'a_forumadd', 1, 0, 0),
(63, 'a_forumdel', 1, 0, 0),
(64, 'a_group', 1, 0, 0),
(65, 'a_groupadd', 1, 0, 0),
(66, 'a_groupdel', 1, 0, 0),
(67, 'a_icons', 1, 0, 0),
(68, 'a_jabber', 1, 0, 0),
(69, 'a_language', 1, 0, 0),
(70, 'a_mauth', 1, 0, 0),
(71, 'a_modules', 1, 0, 0),
(72, 'a_names', 1, 0, 0),
(73, 'a_phpinfo', 1, 0, 0),
(74, 'a_profile', 1, 0, 0),
(75, 'a_prune', 1, 0, 0),
(76, 'a_ranks', 1, 0, 0),
(77, 'a_reasons', 1, 0, 0),
(78, 'a_roles', 1, 0, 0),
(79, 'a_search', 1, 0, 0),
(80, 'a_server', 1, 0, 0),
(81, 'a_styles', 1, 0, 0),
(82, 'a_switchperm', 1, 0, 0),
(83, 'a_uauth', 1, 0, 0),
(84, 'a_user', 1, 0, 0),
(85, 'a_userdel', 1, 0, 0),
(86, 'a_viewauth', 1, 0, 0),
(87, 'a_viewlogs', 1, 0, 0),
(88, 'a_words', 1, 0, 0),
(89, 'u_', 1, 0, 0),
(90, 'u_attach', 1, 0, 0),
(91, 'u_chgavatar', 1, 0, 0),
(92, 'u_chgcensors', 1, 0, 0),
(93, 'u_chgemail', 1, 0, 0),
(94, 'u_chggrp', 1, 0, 0),
(95, 'u_chgname', 1, 0, 0),
(96, 'u_chgpasswd', 1, 0, 0),
(97, 'u_chgprofileinfo', 1, 0, 0),
(98, 'u_download', 1, 0, 0),
(99, 'u_hideonline', 1, 0, 0),
(100, 'u_ignoreflood', 1, 0, 0),
(101, 'u_masspm', 1, 0, 0),
(102, 'u_masspm_group', 1, 0, 0),
(103, 'u_pm_attach', 1, 0, 0),
(104, 'u_pm_bbcode', 1, 0, 0),
(105, 'u_pm_delete', 1, 0, 0),
(106, 'u_pm_download', 1, 0, 0),
(107, 'u_pm_edit', 1, 0, 0),
(108, 'u_pm_emailpm', 1, 0, 0),
(109, 'u_pm_flash', 1, 0, 0),
(110, 'u_pm_forward', 1, 0, 0),
(111, 'u_pm_img', 1, 0, 0),
(112, 'u_pm_printpm', 1, 0, 0),
(113, 'u_pm_smilies', 1, 0, 0),
(114, 'u_readpm', 1, 0, 0),
(115, 'u_savedrafts', 1, 0, 0),
(116, 'u_search', 1, 0, 0),
(117, 'u_sendemail', 1, 0, 0),
(118, 'u_sendim', 1, 0, 0),
(119, 'u_sendpm', 1, 0, 0),
(120, 'u_sig', 1, 0, 0),
(121, 'u_viewonline', 1, 0, 0),
(122, 'u_viewprofile', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_acl_roles`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_roles` (
  `role_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `role_description` text COLLATE utf8_bin NOT NULL,
  `role_type` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `role_order` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`),
  KEY `role_type` (`role_type`),
  KEY `role_order` (`role_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `phpbb_acl_roles`
--

INSERT INTO `phpbb_acl_roles` (`role_id`, `role_name`, `role_description`, `role_type`, `role_order`) VALUES
(1, 'ROLE_ADMIN_STANDARD', 0x524f4c455f4445534352495054494f4e5f41444d494e5f5354414e44415244, 'a_', 1),
(2, 'ROLE_ADMIN_FORUM', 0x524f4c455f4445534352495054494f4e5f41444d494e5f464f52554d, 'a_', 3),
(3, 'ROLE_ADMIN_USERGROUP', 0x524f4c455f4445534352495054494f4e5f41444d494e5f5553455247524f5550, 'a_', 4),
(4, 'ROLE_ADMIN_FULL', 0x524f4c455f4445534352495054494f4e5f41444d494e5f46554c4c, 'a_', 2),
(5, 'ROLE_USER_FULL', 0x524f4c455f4445534352495054494f4e5f555345525f46554c4c, 'u_', 3),
(6, 'ROLE_USER_STANDARD', 0x524f4c455f4445534352495054494f4e5f555345525f5354414e44415244, 'u_', 1),
(7, 'ROLE_USER_LIMITED', 0x524f4c455f4445534352495054494f4e5f555345525f4c494d49544544, 'u_', 2),
(8, 'ROLE_USER_NOPM', 0x524f4c455f4445534352495054494f4e5f555345525f4e4f504d, 'u_', 4),
(9, 'ROLE_USER_NOAVATAR', 0x524f4c455f4445534352495054494f4e5f555345525f4e4f415641544152, 'u_', 5),
(10, 'ROLE_MOD_FULL', 0x524f4c455f4445534352495054494f4e5f4d4f445f46554c4c, 'm_', 3),
(11, 'ROLE_MOD_STANDARD', 0x524f4c455f4445534352495054494f4e5f4d4f445f5354414e44415244, 'm_', 1),
(12, 'ROLE_MOD_SIMPLE', 0x524f4c455f4445534352495054494f4e5f4d4f445f53494d504c45, 'm_', 2),
(13, 'ROLE_MOD_QUEUE', 0x524f4c455f4445534352495054494f4e5f4d4f445f5155455545, 'm_', 4),
(14, 'ROLE_FORUM_FULL', 0x524f4c455f4445534352495054494f4e5f464f52554d5f46554c4c, 'f_', 7),
(15, 'ROLE_FORUM_STANDARD', 0x524f4c455f4445534352495054494f4e5f464f52554d5f5354414e44415244, 'f_', 5),
(16, 'ROLE_FORUM_NOACCESS', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4e4f414343455353, 'f_', 1),
(17, 'ROLE_FORUM_READONLY', 0x524f4c455f4445534352495054494f4e5f464f52554d5f524541444f4e4c59, 'f_', 2),
(18, 'ROLE_FORUM_LIMITED', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4c494d49544544, 'f_', 3),
(19, 'ROLE_FORUM_BOT', 0x524f4c455f4445534352495054494f4e5f464f52554d5f424f54, 'f_', 9),
(20, 'ROLE_FORUM_ONQUEUE', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4f4e5155455545, 'f_', 8),
(21, 'ROLE_FORUM_POLLS', 0x524f4c455f4445534352495054494f4e5f464f52554d5f504f4c4c53, 'f_', 6),
(22, 'ROLE_FORUM_LIMITED_POLLS', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4c494d495445445f504f4c4c53, 'f_', 4),
(23, 'ROLE_USER_NEW_MEMBER', 0x524f4c455f4445534352495054494f4e5f555345525f4e45575f4d454d424552, 'u_', 6),
(24, 'ROLE_FORUM_NEW_MEMBER', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4e45575f4d454d424552, 'f_', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_acl_roles_data`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_roles_data` (
  `role_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_setting` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`,`auth_option_id`),
  KEY `ath_op_id` (`auth_option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_acl_roles_data`
--

INSERT INTO `phpbb_acl_roles_data` (`role_id`, `auth_option_id`, `auth_setting`) VALUES
(1, 47, 1),
(1, 49, 1),
(1, 50, 1),
(1, 51, 1),
(1, 53, 1),
(1, 54, 1),
(1, 55, 1),
(1, 59, 1),
(1, 60, 1),
(1, 61, 1),
(1, 62, 1),
(1, 63, 1),
(1, 64, 1),
(1, 65, 1),
(1, 66, 1),
(1, 67, 1),
(1, 70, 1),
(1, 72, 1),
(1, 74, 1),
(1, 75, 1),
(1, 76, 1),
(1, 77, 1),
(1, 83, 1),
(1, 84, 1),
(1, 85, 1),
(1, 86, 1),
(1, 87, 1),
(1, 88, 1),
(2, 47, 1),
(2, 50, 1),
(2, 51, 1),
(2, 60, 1),
(2, 61, 1),
(2, 62, 1),
(2, 63, 1),
(2, 70, 1),
(2, 75, 1),
(2, 83, 1),
(2, 86, 1),
(2, 87, 1),
(3, 47, 1),
(3, 50, 1),
(3, 51, 1),
(3, 53, 1),
(3, 64, 1),
(3, 65, 1),
(3, 66, 1),
(3, 76, 1),
(3, 83, 1),
(3, 84, 1),
(3, 86, 1),
(3, 87, 1),
(4, 47, 1),
(4, 48, 1),
(4, 49, 1),
(4, 50, 1),
(4, 51, 1),
(4, 52, 1),
(4, 53, 1),
(4, 54, 1),
(4, 55, 1),
(4, 56, 1),
(4, 57, 1),
(4, 58, 1),
(4, 59, 1),
(4, 60, 1),
(4, 61, 1),
(4, 62, 1),
(4, 63, 1),
(4, 64, 1),
(4, 65, 1),
(4, 66, 1),
(4, 67, 1),
(4, 68, 1),
(4, 69, 1),
(4, 70, 1),
(4, 71, 1),
(4, 72, 1),
(4, 73, 1),
(4, 74, 1),
(4, 75, 1),
(4, 76, 1),
(4, 77, 1),
(4, 78, 1),
(4, 79, 1),
(4, 80, 1),
(4, 81, 1),
(4, 82, 1),
(4, 83, 1),
(4, 84, 1),
(4, 85, 1),
(4, 86, 1),
(4, 87, 1),
(4, 88, 1),
(5, 89, 1),
(5, 90, 1),
(5, 91, 1),
(5, 92, 1),
(5, 93, 1),
(5, 94, 1),
(5, 95, 1),
(5, 96, 1),
(5, 97, 1),
(5, 98, 1),
(5, 99, 1),
(5, 100, 1),
(5, 101, 1),
(5, 102, 1),
(5, 103, 1),
(5, 104, 1),
(5, 105, 1),
(5, 106, 1),
(5, 107, 1),
(5, 108, 1),
(5, 109, 1),
(5, 110, 1),
(5, 111, 1),
(5, 112, 1),
(5, 113, 1),
(5, 114, 1),
(5, 115, 1),
(5, 116, 1),
(5, 117, 1),
(5, 118, 1),
(5, 119, 1),
(5, 120, 1),
(5, 121, 1),
(5, 122, 1),
(6, 89, 1),
(6, 90, 1),
(6, 91, 1),
(6, 92, 1),
(6, 93, 1),
(6, 96, 1),
(6, 97, 1),
(6, 98, 1),
(6, 99, 1),
(6, 101, 1),
(6, 102, 1),
(6, 103, 1),
(6, 104, 1),
(6, 105, 1),
(6, 106, 1),
(6, 107, 1),
(6, 108, 1),
(6, 111, 1),
(6, 112, 1),
(6, 113, 1),
(6, 114, 1),
(6, 115, 1),
(6, 116, 1),
(6, 117, 1),
(6, 118, 1),
(6, 119, 1),
(6, 120, 1),
(6, 122, 1),
(7, 89, 1),
(7, 91, 1),
(7, 92, 1),
(7, 93, 1),
(7, 96, 1),
(7, 97, 1),
(7, 98, 1),
(7, 99, 1),
(7, 104, 1),
(7, 105, 1),
(7, 106, 1),
(7, 107, 1),
(7, 110, 1),
(7, 111, 1),
(7, 112, 1),
(7, 113, 1),
(7, 114, 1),
(7, 119, 1),
(7, 120, 1),
(7, 122, 1),
(8, 89, 1),
(8, 91, 1),
(8, 92, 1),
(8, 93, 1),
(8, 96, 1),
(8, 98, 1),
(8, 99, 1),
(8, 120, 1),
(8, 122, 1),
(8, 101, 0),
(8, 102, 0),
(8, 114, 0),
(8, 119, 0),
(9, 89, 1),
(9, 92, 1),
(9, 93, 1),
(9, 96, 1),
(9, 97, 1),
(9, 98, 1),
(9, 99, 1),
(9, 104, 1),
(9, 105, 1),
(9, 106, 1),
(9, 107, 1),
(9, 110, 1),
(9, 111, 1),
(9, 112, 1),
(9, 113, 1),
(9, 114, 1),
(9, 119, 1),
(9, 120, 1),
(9, 122, 1),
(9, 91, 0),
(10, 32, 1),
(10, 33, 1),
(10, 44, 1),
(10, 34, 1),
(10, 35, 1),
(10, 36, 1),
(10, 37, 1),
(10, 38, 1),
(10, 39, 1),
(10, 40, 1),
(10, 45, 1),
(10, 41, 1),
(10, 43, 1),
(10, 42, 1),
(10, 46, 1),
(11, 32, 1),
(11, 33, 1),
(11, 35, 1),
(11, 36, 1),
(11, 37, 1),
(11, 38, 1),
(11, 39, 1),
(11, 40, 1),
(11, 45, 1),
(11, 41, 1),
(11, 43, 1),
(11, 42, 1),
(11, 46, 1),
(12, 32, 1),
(12, 35, 1),
(12, 36, 1),
(12, 37, 1),
(12, 45, 1),
(12, 41, 1),
(12, 43, 1),
(13, 32, 1),
(13, 33, 1),
(13, 36, 1),
(14, 1, 1),
(14, 2, 1),
(14, 3, 1),
(14, 4, 1),
(14, 5, 1),
(14, 6, 1),
(14, 7, 1),
(14, 8, 1),
(14, 9, 1),
(14, 10, 1),
(14, 11, 1),
(14, 12, 1),
(14, 13, 1),
(14, 14, 1),
(14, 15, 1),
(14, 16, 1),
(14, 17, 1),
(14, 18, 1),
(14, 19, 1),
(14, 20, 1),
(14, 21, 1),
(14, 22, 1),
(14, 23, 1),
(14, 24, 1),
(14, 25, 1),
(14, 31, 1),
(14, 26, 1),
(14, 27, 1),
(14, 28, 1),
(14, 29, 1),
(14, 30, 1),
(15, 1, 1),
(15, 3, 1),
(15, 4, 1),
(15, 5, 1),
(15, 6, 1),
(15, 7, 1),
(15, 8, 1),
(15, 9, 1),
(15, 11, 1),
(15, 13, 1),
(15, 14, 1),
(15, 15, 1),
(15, 17, 1),
(15, 18, 1),
(15, 19, 1),
(15, 20, 1),
(15, 21, 1),
(15, 22, 1),
(15, 23, 1),
(15, 24, 1),
(15, 25, 1),
(15, 27, 1),
(15, 29, 1),
(15, 30, 1),
(15, 31, 1),
(16, 1, 0),
(17, 1, 1),
(17, 7, 1),
(17, 14, 1),
(17, 19, 1),
(17, 20, 1),
(17, 23, 1),
(17, 27, 1),
(18, 1, 1),
(18, 4, 1),
(18, 7, 1),
(18, 8, 1),
(18, 9, 1),
(18, 13, 1),
(18, 14, 1),
(18, 15, 1),
(18, 17, 1),
(18, 18, 1),
(18, 19, 1),
(18, 20, 1),
(18, 21, 1),
(18, 22, 1),
(18, 23, 1),
(18, 24, 1),
(18, 25, 1),
(18, 27, 1),
(18, 29, 1),
(18, 31, 1),
(19, 1, 1),
(19, 7, 1),
(19, 14, 1),
(19, 19, 1),
(19, 20, 1),
(20, 1, 1),
(20, 3, 1),
(20, 4, 1),
(20, 7, 1),
(20, 8, 1),
(20, 9, 1),
(20, 13, 1),
(20, 14, 1),
(20, 17, 1),
(20, 18, 1),
(20, 19, 1),
(20, 20, 1),
(20, 21, 1),
(20, 22, 1),
(20, 23, 1),
(20, 24, 1),
(20, 25, 1),
(20, 27, 1),
(20, 29, 1),
(20, 31, 1),
(20, 15, 0),
(21, 1, 1),
(21, 3, 1),
(21, 4, 1),
(21, 5, 1),
(21, 6, 1),
(21, 7, 1),
(21, 8, 1),
(21, 9, 1),
(21, 11, 1),
(21, 13, 1),
(21, 14, 1),
(21, 15, 1),
(21, 16, 1),
(21, 17, 1),
(21, 18, 1),
(21, 19, 1),
(21, 20, 1),
(21, 21, 1),
(21, 22, 1),
(21, 23, 1),
(21, 24, 1),
(21, 25, 1),
(21, 27, 1),
(21, 29, 1),
(21, 30, 1),
(21, 31, 1),
(22, 1, 1),
(22, 4, 1),
(22, 7, 1),
(22, 8, 1),
(22, 9, 1),
(22, 13, 1),
(22, 14, 1),
(22, 15, 1),
(22, 16, 1),
(22, 17, 1),
(22, 18, 1),
(22, 19, 1),
(22, 20, 1),
(22, 21, 1),
(22, 22, 1),
(22, 23, 1),
(22, 24, 1),
(22, 25, 1),
(22, 27, 1),
(22, 29, 1),
(22, 31, 1),
(23, 97, 0),
(23, 101, 0),
(23, 102, 0),
(23, 119, 0),
(24, 15, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_acl_users`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_users` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_role_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_setting` tinyint(2) NOT NULL DEFAULT '0',
  KEY `user_id` (`user_id`),
  KEY `auth_option_id` (`auth_option_id`),
  KEY `auth_role_id` (`auth_role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_acl_users`
--

INSERT INTO `phpbb_acl_users` (`user_id`, `forum_id`, `auth_option_id`, `auth_role_id`, `auth_setting`) VALUES
(2, 0, 0, 5, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_attachments`
--

CREATE TABLE IF NOT EXISTS `phpbb_attachments` (
  `attach_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `post_msg_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `in_message` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_orphan` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `physical_filename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `real_filename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `download_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attach_comment` text COLLATE utf8_bin NOT NULL,
  `extension` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `mimetype` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `filesize` int(20) unsigned NOT NULL DEFAULT '0',
  `filetime` int(11) unsigned NOT NULL DEFAULT '0',
  `thumbnail` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attach_id`),
  KEY `filetime` (`filetime`),
  KEY `post_msg_id` (`post_msg_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_id` (`poster_id`),
  KEY `is_orphan` (`is_orphan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_attachments`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_banlist`
--

CREATE TABLE IF NOT EXISTS `phpbb_banlist` (
  `ban_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ban_userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ban_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ban_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ban_start` int(11) unsigned NOT NULL DEFAULT '0',
  `ban_end` int(11) unsigned NOT NULL DEFAULT '0',
  `ban_exclude` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ban_give_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`ban_id`),
  KEY `ban_end` (`ban_end`),
  KEY `ban_user` (`ban_userid`,`ban_exclude`),
  KEY `ban_email` (`ban_email`,`ban_exclude`),
  KEY `ban_ip` (`ban_ip`,`ban_exclude`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_banlist`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_bbcodes`
--

CREATE TABLE IF NOT EXISTS `phpbb_bbcodes` (
  `bbcode_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `bbcode_tag` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_helpline` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_on_posting` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bbcode_match` text COLLATE utf8_bin NOT NULL,
  `bbcode_tpl` mediumtext COLLATE utf8_bin NOT NULL,
  `first_pass_match` mediumtext COLLATE utf8_bin NOT NULL,
  `first_pass_replace` mediumtext COLLATE utf8_bin NOT NULL,
  `second_pass_match` mediumtext COLLATE utf8_bin NOT NULL,
  `second_pass_replace` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`bbcode_id`),
  KEY `display_on_post` (`display_on_posting`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_bbcodes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_bookmarks`
--

CREATE TABLE IF NOT EXISTS `phpbb_bookmarks` (
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`topic_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_bookmarks`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_bots`
--

CREATE TABLE IF NOT EXISTS `phpbb_bots` (
  `bot_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bot_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `bot_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `bot_agent` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bot_ip` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`bot_id`),
  KEY `bot_active` (`bot_active`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=46 ;

--
-- Extraindo dados da tabela `phpbb_bots`
--

INSERT INTO `phpbb_bots` (`bot_id`, `bot_active`, `bot_name`, `user_id`, `bot_agent`, `bot_ip`) VALUES
(1, 1, 'AdsBot [Google]', 3, 'AdsBot-Google', ''),
(2, 1, 'Alexa [Bot]', 4, 'ia_archiver', ''),
(3, 1, 'Alta Vista [Bot]', 5, 'Scooter/', ''),
(4, 1, 'Ask Jeeves [Bot]', 6, 'Ask Jeeves', ''),
(5, 1, 'Baidu [Spider]', 7, 'Baiduspider', ''),
(6, 1, 'Bing [Bot]', 8, 'bingbot/', ''),
(7, 1, 'Exabot [Bot]', 9, 'Exabot', ''),
(8, 1, 'FAST Enterprise [Crawler]', 10, 'FAST Enterprise Crawler', ''),
(9, 1, 'FAST WebCrawler [Crawler]', 11, 'FAST-WebCrawler/', ''),
(10, 1, 'Francis [Bot]', 12, 'http://www.neomo.de/', ''),
(11, 1, 'Gigabot [Bot]', 13, 'Gigabot/', ''),
(12, 1, 'Google Adsense [Bot]', 14, 'Mediapartners-Google', ''),
(13, 1, 'Google Desktop', 15, 'Google Desktop', ''),
(14, 1, 'Google Feedfetcher', 16, 'Feedfetcher-Google', ''),
(15, 1, 'Google [Bot]', 17, 'Googlebot', ''),
(16, 1, 'Heise IT-Markt [Crawler]', 18, 'heise-IT-Markt-Crawler', ''),
(17, 1, 'Heritrix [Crawler]', 19, 'heritrix/1.', ''),
(18, 1, 'IBM Research [Bot]', 20, 'ibm.com/cs/crawler', ''),
(19, 1, 'ICCrawler - ICjobs', 21, 'ICCrawler - ICjobs', ''),
(20, 1, 'ichiro [Crawler]', 22, 'ichiro/', ''),
(21, 1, 'Majestic-12 [Bot]', 23, 'MJ12bot/', ''),
(22, 1, 'Metager [Bot]', 24, 'MetagerBot/', ''),
(23, 1, 'MSN NewsBlogs', 25, 'msnbot-NewsBlogs/', ''),
(24, 1, 'MSN [Bot]', 26, 'msnbot/', ''),
(25, 1, 'MSNbot Media', 27, 'msnbot-media/', ''),
(26, 1, 'Nutch [Bot]', 28, 'http://lucene.apache.org/nutch/', ''),
(27, 1, 'Online link [Validator]', 29, 'online link validator', ''),
(28, 1, 'psbot [Picsearch]', 30, 'psbot/0', ''),
(29, 1, 'Sensis [Crawler]', 31, 'Sensis Web Crawler', ''),
(30, 1, 'SEO Crawler', 32, 'SEO search Crawler/', ''),
(31, 1, 'Seoma [Crawler]', 33, 'Seoma [SEO Crawler]', ''),
(32, 1, 'SEOSearch [Crawler]', 34, 'SEOsearch/', ''),
(33, 1, 'Snappy [Bot]', 35, 'Snappy/1.1 ( http://www.urltrends.com/ )', ''),
(34, 1, 'Steeler [Crawler]', 36, 'http://www.tkl.iis.u-tokyo.ac.jp/~crawler/', ''),
(35, 1, 'Telekom [Bot]', 37, 'crawleradmin.t-info@telekom.de', ''),
(36, 1, 'TurnitinBot [Bot]', 38, 'TurnitinBot/', ''),
(37, 1, 'Voyager [Bot]', 39, 'voyager/', ''),
(38, 1, 'W3 [Sitesearch]', 40, 'W3 SiteSearch Crawler', ''),
(39, 1, 'W3C [Linkcheck]', 41, 'W3C-checklink/', ''),
(40, 1, 'W3C [Validator]', 42, 'W3C_Validator', ''),
(41, 1, 'YaCy [Bot]', 43, 'yacybot', ''),
(42, 1, 'Yahoo MMCrawler [Bot]', 44, 'Yahoo-MMCrawler/', ''),
(43, 1, 'Yahoo Slurp [Bot]', 45, 'Yahoo! DE Slurp', ''),
(44, 1, 'Yahoo [Bot]', 46, 'Yahoo! Slurp', ''),
(45, 1, 'YahooSeeker [Bot]', 47, 'YahooSeeker/', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_config`
--

CREATE TABLE IF NOT EXISTS `phpbb_config` (
  `config_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `config_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `is_dynamic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`config_name`),
  KEY `is_dynamic` (`is_dynamic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_config`
--

INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES
('active_sessions', '0', 0),
('allow_attachments', '1', 0),
('allow_autologin', '1', 0),
('allow_avatar', '1', 0),
('allow_avatar_gravatar', '0', 0),
('allow_avatar_local', '0', 0),
('allow_avatar_remote', '0', 0),
('allow_avatar_upload', '1', 0),
('allow_avatar_remote_upload', '0', 0),
('allow_bbcode', '1', 0),
('allow_birthdays', '1', 0),
('allow_bookmarks', '1', 0),
('allow_cdn', '0', 0),
('allow_emailreuse', '0', 0),
('allow_password_reset', '1', 0),
('allow_forum_notify', '1', 0),
('allow_live_searches', '1', 0),
('allow_mass_pm', '1', 0),
('allow_name_chars', 'USERNAME_CHARS_ANY', 0),
('allow_namechange', '0', 0),
('allow_nocensors', '0', 0),
('allow_pm_attach', '0', 0),
('allow_pm_report', '1', 0),
('allow_post_flash', '1', 0),
('allow_post_links', '1', 0),
('allow_privmsg', '1', 0),
('allow_quick_reply', '1', 0),
('allow_sig', '1', 0),
('allow_sig_bbcode', '1', 0),
('allow_sig_flash', '0', 0),
('allow_sig_img', '1', 0),
('allow_sig_links', '1', 0),
('allow_sig_pm', '1', 0),
('allow_sig_smilies', '1', 0),
('allow_smilies', '1', 0),
('allow_topic_notify', '1', 0),
('assets_version', '1', 0),
('attachment_quota', '52428800', 0),
('auth_bbcode_pm', '1', 0),
('auth_flash_pm', '0', 0),
('auth_img_pm', '1', 0),
('auth_method', 'db', 0),
('auth_smilies_pm', '1', 0),
('avatar_filesize', '6144', 0),
('avatar_gallery_path', 'images/avatars/gallery', 0),
('avatar_max_height', '90', 0),
('avatar_max_width', '90', 0),
('avatar_min_height', '20', 0),
('avatar_min_width', '20', 0),
('avatar_path', 'images/avatars/upload', 0),
('avatar_salt', '16264efdd591fb5267fbd780610e5d95', 0),
('board_contact', 'viniciusspmelo@gmail.com', 0),
('board_contact_name', '', 0),
('board_disable', '0', 0),
('board_disable_msg', '', 0),
('board_email', 'viniciusspmelo@gmail.com', 0),
('board_email_form', '0', 0),
('board_email_sig', 'Atenciosamente, a Administração.', 0),
('board_hide_emails', '1', 0),
('board_index_text', '', 0),
('board_timezone', 'America/Sao_Paulo', 0),
('browser_check', '1', 0),
('bump_interval', '10', 0),
('bump_type', 'd', 0),
('cache_gc', '7200', 0),
('captcha_plugin', 'core.captcha.plugins.gd', 0),
('captcha_gd', '1', 0),
('captcha_gd_foreground_noise', '0', 0),
('captcha_gd_x_grid', '25', 0),
('captcha_gd_y_grid', '25', 0),
('captcha_gd_wave', '0', 0),
('captcha_gd_3d_noise', '1', 0),
('captcha_gd_fonts', '1', 0),
('confirm_refresh', '1', 0),
('check_attachment_content', '1', 0),
('check_dnsbl', '0', 0),
('chg_passforce', '0', 0),
('contact_admin_form_enable', '1', 0),
('cookie_domain', '127.0.0.1', 0),
('cookie_name', 'phpbb3_bbxsx', 0),
('cookie_path', '/', 0),
('cookie_secure', '0', 0),
('coppa_enable', '0', 0),
('coppa_fax', '', 0),
('coppa_mail', '', 0),
('database_gc', '604800', 0),
('dbms_version', '5.1.54-community-log', 0),
('default_dateformat', 'd M Y H:i', 0),
('default_style', '2', 0),
('display_last_edited', '1', 0),
('display_last_subject', '1', 0),
('display_order', '0', 0),
('edit_time', '0', 0),
('extension_force_unstable', '0', 0),
('delete_time', '0', 0),
('email_check_mx', '1', 0),
('email_enable', '1', 0),
('email_function_name', 'mail', 0),
('email_max_chunk_size', '50', 0),
('email_package_size', '20', 0),
('enable_confirm', '1', 0),
('enable_mod_rewrite', '0', 0),
('enable_pm_icons', '1', 0),
('enable_post_confirm', '1', 0),
('feed_enable', '1', 0),
('feed_http_auth', '0', 0),
('feed_limit_post', '15', 0),
('feed_limit_topic', '10', 0),
('feed_overall_forums', '0', 0),
('feed_overall', '1', 0),
('feed_forum', '1', 0),
('feed_topic', '1', 0),
('feed_topics_new', '1', 0),
('feed_topics_active', '0', 0),
('feed_item_statistics', '1', 0),
('flood_interval', '15', 0),
('force_server_vars', '0', 0),
('form_token_lifetime', '7200', 0),
('form_token_mintime', '0', 0),
('form_token_sid_guests', '1', 0),
('forward_pm', '1', 0),
('forwarded_for_check', '0', 0),
('full_folder_action', '2', 0),
('fulltext_mysql_max_word_len', '254', 0),
('fulltext_mysql_min_word_len', '4', 0),
('fulltext_native_common_thres', '5', 0),
('fulltext_native_load_upd', '1', 0),
('fulltext_native_max_chars', '14', 0),
('fulltext_native_min_chars', '3', 0),
('fulltext_postgres_max_word_len', '254', 0),
('fulltext_postgres_min_word_len', '4', 0),
('fulltext_postgres_ts_name', 'simple', 0),
('fulltext_sphinx_indexer_mem_limit', '512', 0),
('fulltext_sphinx_stopwords', '0', 0),
('gzip_compress', '0', 0),
('hot_threshold', '25', 0),
('icons_path', 'images/icons', 0),
('img_create_thumbnail', '0', 0),
('img_display_inlined', '1', 0),
('img_imagick', '', 0),
('img_link_height', '0', 0),
('img_link_width', '0', 0),
('img_max_height', '0', 0),
('img_max_thumb_width', '400', 0),
('img_max_width', '0', 0),
('img_min_thumb_filesize', '12000', 0),
('ip_check', '3', 0),
('ip_login_limit_max', '50', 0),
('ip_login_limit_time', '21600', 0),
('ip_login_limit_use_forwarded', '0', 0),
('jab_enable', '0', 0),
('jab_host', '', 0),
('jab_password', '', 0),
('jab_package_size', '20', 0),
('jab_port', '5222', 0),
('jab_use_ssl', '0', 0),
('jab_username', '', 0),
('ldap_base_dn', '', 0),
('ldap_email', '', 0),
('ldap_password', '', 0),
('ldap_port', '', 0),
('ldap_server', '', 0),
('ldap_uid', '', 0),
('ldap_user', '', 0),
('ldap_user_filter', '', 0),
('legend_sort_groupname', '0', 0),
('limit_load', '0', 0),
('limit_search_load', '0', 0),
('load_anon_lastread', '0', 0),
('load_birthdays', '1', 0),
('load_cpf_memberlist', '1', 0),
('load_cpf_pm', '1', 0),
('load_cpf_viewprofile', '1', 0),
('load_cpf_viewtopic', '1', 0),
('load_db_lastread', '1', 0),
('load_db_track', '1', 0),
('load_jquery_url', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 0),
('load_jumpbox', '1', 0),
('load_moderators', '1', 0),
('load_notifications', '1', 0),
('load_online', '1', 0),
('load_online_guests', '1', 0),
('load_online_time', '5', 0),
('load_onlinetrack', '1', 0),
('load_search', '1', 0),
('load_tplcompile', '0', 0),
('load_unreads_search', '1', 0),
('load_user_activity', '1', 0),
('max_attachments', '3', 0),
('max_attachments_pm', '1', 0),
('max_autologin_time', '0', 0),
('max_filesize', '262144', 0),
('max_filesize_pm', '262144', 0),
('max_login_attempts', '3', 0),
('max_name_chars', '20', 0),
('max_num_search_keywords', '10', 0),
('max_pass_chars', '100', 0),
('max_poll_options', '10', 0),
('max_post_chars', '60000', 0),
('max_post_font_size', '200', 0),
('max_post_img_height', '0', 0),
('max_post_img_width', '0', 0),
('max_post_smilies', '0', 0),
('max_post_urls', '0', 0),
('max_quote_depth', '3', 0),
('max_reg_attempts', '5', 0),
('max_sig_chars', '255', 0),
('max_sig_font_size', '200', 0),
('max_sig_img_height', '0', 0),
('max_sig_img_width', '0', 0),
('max_sig_smilies', '0', 0),
('max_sig_urls', '5', 0),
('min_name_chars', '3', 0),
('min_pass_chars', '6', 0),
('min_post_chars', '1', 0),
('min_search_author_chars', '3', 0),
('mime_triggers', 'body|head|html|img|plaintext|a href|pre|script|table|title', 0),
('new_member_post_limit', '3', 0),
('new_member_group_default', '0', 0),
('override_user_style', '0', 0),
('pass_complex', 'PASS_TYPE_ANY', 0),
('plupload_salt', '286b5d679848dc277c97b15f9b0e24c5', 0),
('pm_edit_time', '0', 0),
('pm_max_boxes', '4', 0),
('pm_max_msgs', '50', 0),
('pm_max_recipients', '0', 0),
('posts_per_page', '10', 0),
('print_pm', '1', 0),
('queue_interval', '60', 0),
('ranks_path', 'images/ranks', 0),
('read_notification_expire_days', '30', 0),
('read_notification_gc', '86400', 0),
('require_activation', '0', 0),
('referer_validation', '1', 0),
('script_path', '/phpBB3', 0),
('search_block_size', '250', 0),
('search_gc', '7200', 0),
('search_interval', '0', 0),
('search_anonymous_interval', '0', 0),
('search_type', '\\phpbb\\search\\fulltext_native', 0),
('search_store_results', '1800', 0),
('secure_allow_deny', '1', 0),
('secure_allow_empty_referer', '1', 0),
('secure_downloads', '0', 0),
('server_name', '127.0.0.1', 0),
('server_port', '8888', 0),
('server_protocol', 'http://', 0),
('session_gc', '3600', 0),
('session_length', '3600', 0),
('site_desc', 'Está com dúvidas ? Tire-as agora mesmo!', 0),
('site_home_url', 'http://127.0.0.1:8888/EENEMP%20-%20TCC/EENEMP/index.php', 0),
('site_home_text', '', 0),
('sitename', 'EENEMP', 0),
('smilies_path', 'images/smilies', 0),
('smilies_per_page', '50', 0),
('smtp_auth_method', 'PLAIN', 0),
('smtp_delivery', '0', 0),
('smtp_host', '', 0),
('smtp_password', '', 0),
('smtp_port', '25', 0),
('smtp_username', '', 0),
('teampage_memberships', '1', 0),
('teampage_forums', '1', 0),
('topics_per_page', '25', 0),
('tpl_allow_php', '0', 0),
('upload_icons_path', 'images/upload_icons', 0),
('upload_path', 'files', 0),
('use_system_cron', '0', 0),
('version', '3.1.11', 0),
('warnings_expire_days', '90', 0),
('warnings_gc', '14400', 0),
('cache_last_gc', '1511307011', 1),
('cron_lock', '0', 1),
('database_last_gc', '1511226292', 1),
('last_queue_run', '1508804504', 1),
('newest_user_colour', '', 1),
('newest_user_id', '48', 1),
('newest_username', 'viniciussmelo', 1),
('num_files', '0', 1),
('num_posts', '6', 1),
('num_topics', '2', 1),
('num_users', '2', 1),
('plupload_last_gc', '0', 1),
('rand_seed', '28e2c8ca540460d2b32a640e5152f8ce', 1),
('rand_seed_last_update', '1511307015', 1),
('read_notification_last_gc', '1511226226', 1),
('record_online_date', '1508801989', 1),
('record_online_users', '1', 1),
('search_indexing_state', '', 1),
('search_last_gc', '1511306990', 1),
('session_last_gc', '1511306977', 1),
('upload_dir_size', '0', 1),
('warnings_last_gc', '1511306970', 1),
('board_startdate', '1508801464', 0),
('default_lang', 'pt_br', 0),
('questionnaire_unique_id', '3afd7af826eec1cf', 0),
('auth_oauth_bitly_key', '', 0),
('auth_oauth_bitly_secret', '', 0),
('auth_oauth_facebook_key', '', 0),
('auth_oauth_facebook_secret', '', 0),
('auth_oauth_google_key', '', 0),
('auth_oauth_google_secret', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_config_text`
--

CREATE TABLE IF NOT EXISTS `phpbb_config_text` (
  `config_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `config_value` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_config_text`
--

INSERT INTO `phpbb_config_text` (`config_name`, `config_value`) VALUES
('contact_admin_info', ''),
('contact_admin_info_uid', ''),
('contact_admin_info_bitfield', ''),
('contact_admin_info_flags', 0x37);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_confirm`
--

CREATE TABLE IF NOT EXISTS `phpbb_confirm` (
  `confirm_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `confirm_type` tinyint(3) NOT NULL DEFAULT '0',
  `code` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `seed` int(10) unsigned NOT NULL DEFAULT '0',
  `attempts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`,`confirm_id`),
  KEY `confirm_type` (`confirm_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_confirm`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_disallow`
--

CREATE TABLE IF NOT EXISTS `phpbb_disallow` (
  `disallow_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `disallow_username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`disallow_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_disallow`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_drafts`
--

CREATE TABLE IF NOT EXISTS `phpbb_drafts` (
  `draft_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `save_time` int(11) unsigned NOT NULL DEFAULT '0',
  `draft_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `draft_message` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`draft_id`),
  KEY `save_time` (`save_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_drafts`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_ext`
--

CREATE TABLE IF NOT EXISTS `phpbb_ext` (
  `ext_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ext_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ext_state` text COLLATE utf8_bin NOT NULL,
  UNIQUE KEY `ext_name` (`ext_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_ext`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_extensions`
--

CREATE TABLE IF NOT EXISTS `phpbb_extensions` (
  `extension_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extension` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`extension_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=67 ;

--
-- Extraindo dados da tabela `phpbb_extensions`
--

INSERT INTO `phpbb_extensions` (`extension_id`, `group_id`, `extension`) VALUES
(1, 1, 'gif'),
(2, 1, 'png'),
(3, 1, 'jpeg'),
(4, 1, 'jpg'),
(5, 1, 'tif'),
(6, 1, 'tiff'),
(7, 1, 'tga'),
(8, 2, 'gtar'),
(9, 2, 'gz'),
(10, 2, 'tar'),
(11, 2, 'zip'),
(12, 2, 'rar'),
(13, 2, 'ace'),
(14, 2, 'torrent'),
(15, 2, 'tgz'),
(16, 2, 'bz2'),
(17, 2, '7z'),
(18, 3, 'txt'),
(19, 3, 'c'),
(20, 3, 'h'),
(21, 3, 'cpp'),
(22, 3, 'hpp'),
(23, 3, 'diz'),
(24, 3, 'csv'),
(25, 3, 'ini'),
(26, 3, 'log'),
(27, 3, 'js'),
(28, 3, 'xml'),
(29, 4, 'xls'),
(30, 4, 'xlsx'),
(31, 4, 'xlsm'),
(32, 4, 'xlsb'),
(33, 4, 'doc'),
(34, 4, 'docx'),
(35, 4, 'docm'),
(36, 4, 'dot'),
(37, 4, 'dotx'),
(38, 4, 'dotm'),
(39, 4, 'pdf'),
(40, 4, 'ai'),
(41, 4, 'ps'),
(42, 4, 'ppt'),
(43, 4, 'pptx'),
(44, 4, 'pptm'),
(45, 4, 'odg'),
(46, 4, 'odp'),
(47, 4, 'ods'),
(48, 4, 'odt'),
(49, 4, 'rtf'),
(50, 5, 'rm'),
(51, 5, 'ram'),
(52, 6, 'wma'),
(53, 6, 'wmv'),
(54, 7, 'swf'),
(55, 8, 'mov'),
(56, 8, 'm4v'),
(57, 8, 'm4a'),
(58, 8, 'mp4'),
(59, 8, '3gp'),
(60, 8, '3g2'),
(61, 8, 'qt'),
(62, 9, 'mpeg'),
(63, 9, 'mpg'),
(64, 9, 'mp3'),
(65, 9, 'ogg'),
(66, 9, 'ogm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_extension_groups`
--

CREATE TABLE IF NOT EXISTS `phpbb_extension_groups` (
  `group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `cat_id` tinyint(2) NOT NULL DEFAULT '0',
  `allow_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `download_mode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `upload_icon` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `max_filesize` int(20) unsigned NOT NULL DEFAULT '0',
  `allowed_forums` text COLLATE utf8_bin NOT NULL,
  `allow_in_pm` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `phpbb_extension_groups`
--

INSERT INTO `phpbb_extension_groups` (`group_id`, `group_name`, `cat_id`, `allow_group`, `download_mode`, `upload_icon`, `max_filesize`, `allowed_forums`, `allow_in_pm`) VALUES
(1, 'IMAGES', 1, 1, 1, '', 0, '', 0),
(2, 'ARCHIVES', 0, 1, 1, '', 0, '', 0),
(3, 'PLAIN_TEXT', 0, 0, 1, '', 0, '', 0),
(4, 'DOCUMENTS', 0, 0, 1, '', 0, '', 0),
(5, 'REAL_MEDIA', 3, 0, 1, '', 0, '', 0),
(6, 'WINDOWS_MEDIA', 2, 0, 1, '', 0, '', 0),
(7, 'FLASH_FILES', 5, 0, 1, '', 0, '', 0),
(8, 'QUICKTIME_MEDIA', 6, 0, 1, '', 0, '', 0),
(9, 'DOWNLOADABLE_FILES', 0, 0, 1, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_forums`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums` (
  `forum_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `left_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `right_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_parents` mediumtext COLLATE utf8_bin NOT NULL,
  `forum_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_desc` text COLLATE utf8_bin NOT NULL,
  `forum_desc_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_desc_options` int(11) unsigned NOT NULL DEFAULT '7',
  `forum_desc_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_link` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_password` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_style` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_image` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_rules` text COLLATE utf8_bin NOT NULL,
  `forum_rules_link` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_rules_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_rules_options` int(11) unsigned NOT NULL DEFAULT '7',
  `forum_rules_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_topics_per_page` tinyint(4) NOT NULL DEFAULT '0',
  `forum_type` tinyint(4) NOT NULL DEFAULT '0',
  `forum_status` tinyint(4) NOT NULL DEFAULT '0',
  `forum_last_post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_last_poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_last_post_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_last_post_time` int(11) unsigned NOT NULL DEFAULT '0',
  `forum_last_poster_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_last_poster_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_flags` tinyint(4) NOT NULL DEFAULT '32',
  `display_on_index` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_indexing` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_icons` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_prune` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prune_next` int(11) unsigned NOT NULL DEFAULT '0',
  `prune_days` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `prune_viewed` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `prune_freq` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `display_subforum_list` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `forum_options` int(20) unsigned NOT NULL DEFAULT '0',
  `enable_shadow_prune` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prune_shadow_days` mediumint(8) unsigned NOT NULL DEFAULT '7',
  `prune_shadow_freq` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `prune_shadow_next` int(11) NOT NULL DEFAULT '0',
  `forum_posts_approved` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_posts_unapproved` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_posts_softdeleted` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_topics_approved` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_topics_unapproved` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_topics_softdeleted` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`forum_id`),
  KEY `left_right_id` (`left_id`,`right_id`),
  KEY `forum_lastpost_id` (`forum_last_post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `phpbb_forums`
--

INSERT INTO `phpbb_forums` (`forum_id`, `parent_id`, `left_id`, `right_id`, `forum_parents`, `forum_name`, `forum_desc`, `forum_desc_bitfield`, `forum_desc_options`, `forum_desc_uid`, `forum_link`, `forum_password`, `forum_style`, `forum_image`, `forum_rules`, `forum_rules_link`, `forum_rules_bitfield`, `forum_rules_options`, `forum_rules_uid`, `forum_topics_per_page`, `forum_type`, `forum_status`, `forum_last_post_id`, `forum_last_poster_id`, `forum_last_post_subject`, `forum_last_post_time`, `forum_last_poster_name`, `forum_last_poster_colour`, `forum_flags`, `display_on_index`, `enable_indexing`, `enable_icons`, `enable_prune`, `prune_next`, `prune_days`, `prune_viewed`, `prune_freq`, `display_subforum_list`, `forum_options`, `enable_shadow_prune`, `prune_shadow_days`, `prune_shadow_freq`, `prune_shadow_next`, `forum_posts_approved`, `forum_posts_unapproved`, `forum_posts_softdeleted`, `forum_topics_approved`, `forum_topics_unapproved`, `forum_topics_softdeleted`) VALUES
(3, 0, 1, 2, '', 'Duvidas Gerais sobre Português', 0x436f6e666972612061732061732064c3ba7669646173206672657175656e74657320736f6272652061206cc3ad6e67756120706f727475677565736121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 5, 48, 'Re: Olá', 1508804356, 'viniciussmelo', '', 112, 0, 1, 1, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 4, 0, 0, 1, 0, 0),
(5, 0, 3, 4, '', 'Duvidas Gerais sobre Física', 0x436f6e666972612061732064c3ba766964617320736f62726520612066c3ad7369636121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 7, 48, 'Re: Velocidade constante', 1508804445, 'viniciussmelo', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 2, 0, 0, 1, 0, 0),
(6, 0, 5, 6, '', 'Duvidas Gerais sobre Inglês', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f6272652061206cc3ad6e67756120696e676c65736121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 7, 8, '', 'Duvidas Gerais sobre Espanhol', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f6272652061206cc3ad6e67756120657370616e686f6c6121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 9, 10, '', 'Duvidas Gerais sobre História', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f62726520612048697374c3b372696121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 11, 12, '', 'Duvidas Gerais sobre Geografia', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f62726520612047656f67726166696121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 13, 14, '', 'Duvidas Gerais sobre Filosofia', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f6272652066696c6f736f66696121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 15, 16, '', 'Duvidas Gerais sobre Sociologia', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f627265206120736f63696f6c6f67696121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 17, 18, '', 'Duvidas Gerais sobre Química', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f6272652061207175c3ad6d69636121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 19, 20, '', 'Duvidas Gerais sobre Biologia', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f6272652062696f6c6f67696121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 21, 22, '', 'Duvidas Gerais sobre Literatura', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f6272652061206c69746572617475726121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 23, 24, '', 'Duvidas Gerais sobre Artes', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f62726520417274657321, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 25, 26, '', 'Duvidas Gerais sobre Educação Física', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f627265206564756361c3a7c3a36f2066c3ad7369636121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 27, 28, '', 'Duvidas Gerais sobre Tecnologia da Informação', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f627265207465636e6f6c6f67696120646120696e666f726d61c3a7c3a36f21, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 29, 30, '', 'Duvidas Gerais sobre Comunicação', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f62726520636f6d756e696361c3a7c3a36f21, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 31, 32, '', 'Duvidas Gerais sobre Matemática e suas Tecnologias', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f627265206d6174656dc3a17469636120652073756173207465636e6f6c6f6769617321, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 33, 34, '', 'Duvidas Gerais sobre Matemática', 0x436f6e666972612061732064c3ba7669646173206672657175656e74657320736f627265206d6174656dc3a17469636121, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 0, 0, 7, 7, 1, 1, 0, 0, 7, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_forums_access`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums_access` (
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`forum_id`,`user_id`,`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_forums_access`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_forums_track`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums_track` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mark_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_forums_track`
--

INSERT INTO `phpbb_forums_track` (`user_id`, `forum_id`, `mark_time`) VALUES
(2, 3, 1508804316),
(48, 3, 1508804356),
(2, 5, 1508804468),
(48, 5, 1508804445);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_forums_watch`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums_watch` (
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `notify_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  KEY `forum_id` (`forum_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_stat` (`notify_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_forums_watch`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_groups`
--

CREATE TABLE IF NOT EXISTS `phpbb_groups` (
  `group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_type` tinyint(4) NOT NULL DEFAULT '1',
  `group_founder_manage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_skip_auth` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_desc` text COLLATE utf8_bin NOT NULL,
  `group_desc_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_desc_options` int(11) unsigned NOT NULL DEFAULT '7',
  `group_desc_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_display` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_avatar` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_avatar_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_avatar_width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `group_avatar_height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `group_rank` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_sig_chars` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_receive_pm` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_message_limit` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_legend` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_max_recipients` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`),
  KEY `group_legend_name` (`group_legend`,`group_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `phpbb_groups`
--

INSERT INTO `phpbb_groups` (`group_id`, `group_type`, `group_founder_manage`, `group_skip_auth`, `group_name`, `group_desc`, `group_desc_bitfield`, `group_desc_options`, `group_desc_uid`, `group_display`, `group_avatar`, `group_avatar_type`, `group_avatar_width`, `group_avatar_height`, `group_rank`, `group_colour`, `group_sig_chars`, `group_receive_pm`, `group_message_limit`, `group_legend`, `group_max_recipients`) VALUES
(1, 3, 0, 0, 'GUESTS', '', '', 7, '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 5),
(2, 3, 0, 0, 'REGISTERED', '', '', 7, '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 5),
(3, 3, 0, 0, 'REGISTERED_COPPA', '', '', 7, '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 5),
(4, 3, 0, 0, 'GLOBAL_MODERATORS', '', '', 7, '', 0, '', '', 0, 0, 0, '00AA00', 0, 0, 0, 2, 0),
(5, 3, 1, 0, 'ADMINISTRATORS', '', '', 7, '', 0, '', '', 0, 0, 0, 'AA0000', 0, 0, 0, 1, 0),
(6, 3, 0, 0, 'BOTS', '', '', 7, '', 0, '', '', 0, 0, 0, '9E8DA7', 0, 0, 0, 0, 5),
(7, 3, 0, 0, 'NEWLY_REGISTERED', '', '', 7, '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_icons`
--

CREATE TABLE IF NOT EXISTS `phpbb_icons` (
  `icons_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `icons_url` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `icons_width` tinyint(4) NOT NULL DEFAULT '0',
  `icons_height` tinyint(4) NOT NULL DEFAULT '0',
  `icons_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `display_on_posting` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`icons_id`),
  KEY `display_on_posting` (`display_on_posting`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `phpbb_icons`
--

INSERT INTO `phpbb_icons` (`icons_id`, `icons_url`, `icons_width`, `icons_height`, `icons_order`, `display_on_posting`) VALUES
(1, 'misc/fire.gif', 16, 16, 1, 1),
(2, 'smile/redface.gif', 16, 16, 9, 1),
(3, 'smile/mrgreen.gif', 16, 16, 10, 1),
(4, 'misc/heart.gif', 16, 16, 4, 1),
(5, 'misc/star.gif', 16, 16, 2, 1),
(6, 'misc/radioactive.gif', 16, 16, 3, 1),
(7, 'misc/thinking.gif', 16, 16, 5, 1),
(8, 'smile/info.gif', 16, 16, 8, 1),
(9, 'smile/question.gif', 16, 16, 6, 1),
(10, 'smile/alert.gif', 16, 16, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_lang`
--

CREATE TABLE IF NOT EXISTS `phpbb_lang` (
  `lang_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `lang_iso` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_dir` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_english_name` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_local_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_author` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`lang_id`),
  KEY `lang_iso` (`lang_iso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `phpbb_lang`
--

INSERT INTO `phpbb_lang` (`lang_id`, `lang_iso`, `lang_dir`, `lang_english_name`, `lang_local_name`, `lang_author`) VALUES
(1, 'en', 'en', 'British English', 'British English', 'phpBB Limited'),
(2, 'pt_br', 'pt_br', 'Brazilian Portuguese', 'Português Brasileiro', 'Suporte phpBB Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_log`
--

CREATE TABLE IF NOT EXISTS `phpbb_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `log_type` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reportee_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `log_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  `log_operation` text COLLATE utf8_bin NOT NULL,
  `log_data` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_type` (`log_type`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `reportee_id` (`reportee_id`),
  KEY `user_id` (`user_id`),
  KEY `log_time` (`log_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=86 ;

--
-- Extraindo dados da tabela `phpbb_log`
--

INSERT INTO `phpbb_log` (`log_id`, `log_type`, `user_id`, `forum_id`, `topic_id`, `reportee_id`, `log_ip`, `log_time`, `log_operation`, `log_data`) VALUES
(1, 2, 2, 0, 0, 0, '127.0.0.1', 1508801478, 0x4c4f475f4552524f525f454d41494c, 0x613a313a7b693a303b733a3336313a223c7374726f6e673e454d41494c2f5048502f6d61696c28293c2f7374726f6e673e3c6272202f3e3c656d3e2f7068704242332f696e7374616c6c2f696e6465782e7068703c2f656d3e3c6272202f3e3c6272202f3e4572726e6f20323a206d61696c2829205b3c6120687265663d2766756e6374696f6e2e6d61696c273e66756e6374696f6e2e6d61696c3c2f613e5d3a204661696c656420746f20636f6e6e65637420746f206d61696c736572766572206174202671756f743b3132372e302e302e312671756f743b20706f72742032352c2076657269667920796f7572202671756f743b534d54502671756f743b20616e64202671756f743b736d74705f706f72742671756f743b2073657474696e6720696e207068702e696e69206f722075736520696e695f7365742829206174205b524f4f545d2f696e636c756465732f66756e6374696f6e735f6d657373656e6765722e706870206c696e6520313831323c6272202f3e223b7d),
(2, 0, 2, 0, 0, 0, '127.0.0.1', 1508801478, 0x4c4f475f494e5354414c4c5f494e5354414c4c4544, 0x613a313a7b693a303b733a363a22332e312e3131223b7d),
(3, 0, 2, 0, 0, 0, '127.0.0.1', 1508801827, 0x4c4f475f5354594c455f414444, 0x613a313a7b693a303b733a31323a2277655f636c656172626c7565223b7d),
(4, 0, 2, 0, 0, 0, '127.0.0.1', 1508802237, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(5, 0, 2, 0, 0, 0, '127.0.0.1', 1508802326, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(6, 0, 2, 0, 0, 0, '127.0.0.1', 1508802460, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(7, 0, 2, 0, 0, 0, '127.0.0.1', 1508802632, 0x4c4f475f464f52554d5f44454c5f464f52554d53, 0x613a313a7b693a303b733a32323a22537561207072696d656972612063617465676f726961223b7d),
(8, 0, 2, 0, 0, 0, '127.0.0.1', 1508802766, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32363a2244c3ba766964617320736f627265206d6174656dc3a174696361223b7d),
(9, 0, 2, 0, 0, 0, '127.0.0.1', 1508802791, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a32363a2244c3ba766964617320736f627265206d6174656dc3a174696361223b693a313b733a34303a223c7370616e20636c6173733d22736570223e41646d696e6973747261646f7265733c2f7370616e3e223b7d),
(10, 0, 2, 0, 0, 0, '127.0.0.1', 1508802828, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a32363a2244c3ba766964617320736f627265206d6174656dc3a174696361223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(11, 0, 2, 0, 0, 0, '127.0.0.1', 1508802862, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b7d),
(12, 0, 2, 0, 0, 0, '127.0.0.1', 1508802909, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b7d),
(13, 0, 2, 0, 0, 0, '127.0.0.1', 1508802930, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a34303a223c7370616e20636c6173733d22736570223e41646d696e6973747261646f7265733c2f7370616e3e223b7d),
(14, 0, 2, 0, 0, 0, '127.0.0.1', 1508802988, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a33313a22447576696461732047657261697320736f62726520506f7274756775c3aa73223b7d),
(15, 0, 2, 0, 0, 0, '127.0.0.1', 1508802988, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33313a22447576696461732047657261697320736f62726520506f7274756775c3aa73223b7d),
(16, 0, 2, 0, 0, 0, '127.0.0.1', 1508803008, 0x4c4f475f464f52554d5f44454c5f504f535453, 0x613a313a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b7d),
(17, 0, 2, 0, 0, 0, '127.0.0.1', 1508803050, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a35313a22447576696461732047657261697320736f627265204d6174656dc3a17469636120652073756173205465636e6f6c6f67696173223b7d),
(18, 0, 2, 0, 0, 0, '127.0.0.1', 1508803050, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a35313a22447576696461732047657261697320736f627265204d6174656dc3a17469636120652073756173205465636e6f6c6f67696173223b7d),
(19, 0, 2, 0, 0, 0, '127.0.0.1', 1508803072, 0x4c4f475f464f52554d5f44454c5f504f535453, 0x613a313a7b693a303b733a33313a22447576696461732047657261697320736f62726520506f7274756775c3aa73223b7d),
(20, 0, 2, 0, 0, 0, '127.0.0.1', 1508803087, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33313a22447576696461732047657261697320736f62726520506f7274756775c3aa73223b7d),
(21, 0, 2, 0, 0, 0, '127.0.0.1', 1508803087, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33313a22447576696461732047657261697320736f62726520506f7274756775c3aa73223b7d),
(22, 0, 2, 0, 0, 0, '127.0.0.1', 1508803118, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32383a22447576696461732047657261697320736f6272652046c3ad73696361223b7d),
(23, 0, 2, 0, 0, 0, '127.0.0.1', 1508803118, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a32383a22447576696461732047657261697320736f6272652046c3ad73696361223b7d),
(24, 0, 2, 0, 0, 0, '127.0.0.1', 1508803139, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32383a22447576696461732047657261697320736f62726520496e676cc3aa73223b7d),
(25, 0, 2, 0, 0, 0, '127.0.0.1', 1508803139, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a32383a22447576696461732047657261697320736f62726520496e676cc3aa73223b7d),
(26, 0, 2, 0, 0, 0, '127.0.0.1', 1508803163, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32393a22447576696461732047657261697320736f62726520457370616e686f6c223b7d),
(27, 0, 2, 0, 0, 0, '127.0.0.1', 1508803163, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a32393a22447576696461732047657261697320736f62726520457370616e686f6c223b7d),
(28, 0, 2, 0, 0, 0, '127.0.0.1', 1508803181, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33303a22447576696461732047657261697320736f6272652048697374c3b3726961223b7d),
(29, 0, 2, 0, 0, 0, '127.0.0.1', 1508803181, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33303a22447576696461732047657261697320736f6272652048697374c3b3726961223b7d),
(30, 0, 2, 0, 0, 0, '127.0.0.1', 1508803194, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33303a22447576696461732047657261697320736f6272652047656f677261666961223b7d),
(31, 0, 2, 0, 0, 0, '127.0.0.1', 1508803194, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33303a22447576696461732047657261697320736f6272652047656f677261666961223b7d),
(32, 0, 2, 0, 0, 0, '127.0.0.1', 1508803206, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33303a22447576696461732047657261697320736f6272652046696c6f736f666961223b7d),
(33, 0, 2, 0, 0, 0, '127.0.0.1', 1508803206, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33303a22447576696461732047657261697320736f6272652046696c6f736f666961223b7d),
(34, 0, 2, 0, 0, 0, '127.0.0.1', 1508803218, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33313a22447576696461732047657261697320736f62726520536f63696f6c6f676961223b7d),
(35, 0, 2, 0, 0, 0, '127.0.0.1', 1508803218, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33313a22447576696461732047657261697320736f62726520536f63696f6c6f676961223b7d),
(36, 0, 2, 0, 0, 0, '127.0.0.1', 1508803231, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32393a22447576696461732047657261697320736f627265205175c3ad6d696361223b7d),
(37, 0, 2, 0, 0, 0, '127.0.0.1', 1508803231, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a32393a22447576696461732047657261697320736f627265205175c3ad6d696361223b7d),
(38, 0, 2, 0, 0, 0, '127.0.0.1', 1508803252, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32393a22447576696461732047657261697320736f6272652042696f6c6f676961223b7d),
(39, 0, 2, 0, 0, 0, '127.0.0.1', 1508803252, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a32393a22447576696461732047657261697320736f6272652042696f6c6f676961223b7d),
(40, 0, 2, 0, 0, 0, '127.0.0.1', 1508803266, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33313a22447576696461732047657261697320736f627265204c697465726174757261223b7d),
(41, 0, 2, 0, 0, 0, '127.0.0.1', 1508803266, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33313a22447576696461732047657261697320736f627265204c697465726174757261223b7d),
(42, 0, 2, 0, 0, 0, '127.0.0.1', 1508803280, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32363a22447576696461732047657261697320736f627265204172746573223b7d),
(43, 0, 2, 0, 0, 0, '127.0.0.1', 1508803280, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a32363a22447576696461732047657261697320736f627265204172746573223b7d),
(44, 0, 2, 0, 0, 0, '127.0.0.1', 1508803307, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32363a22447576696461732047657261697320736f627265204172746573223b7d),
(45, 0, 2, 0, 0, 0, '127.0.0.1', 1508803307, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a32363a22447576696461732047657261697320736f627265204172746573223b7d),
(46, 0, 2, 0, 0, 0, '127.0.0.1', 1508803320, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33393a22447576696461732047657261697320736f627265204564756361c3a7c3a36f2046c3ad73696361223b7d),
(47, 0, 2, 0, 0, 0, '127.0.0.1', 1508803320, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33393a22447576696461732047657261697320736f627265204564756361c3a7c3a36f2046c3ad73696361223b7d),
(48, 0, 2, 0, 0, 0, '127.0.0.1', 1508803336, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a34373a22447576696461732047657261697320736f627265205465636e6f6c6f67696120646120496e666f726d61c3a7c3a36f223b7d),
(49, 0, 2, 0, 0, 0, '127.0.0.1', 1508803336, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a34373a22447576696461732047657261697320736f627265205465636e6f6c6f67696120646120496e666f726d61c3a7c3a36f223b7d),
(50, 0, 2, 0, 0, 0, '127.0.0.1', 1508803350, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33343a22447576696461732047657261697320736f62726520436f6d756e696361c3a7c3a36f223b7d),
(51, 0, 2, 0, 0, 0, '127.0.0.1', 1508803350, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a33343a22447576696461732047657261697320736f62726520436f6d756e696361c3a7c3a36f223b7d),
(52, 0, 2, 0, 0, 0, '127.0.0.1', 1508803372, 0x4c4f475f464f52554d5f44454c5f464f52554d, 0x613a313a7b693a303b733a32363a2244c3ba766964617320736f627265206d6174656dc3a174696361223b7d),
(53, 0, 2, 0, 0, 0, '127.0.0.1', 1508803385, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b7d),
(54, 0, 2, 0, 0, 0, '127.0.0.1', 1508803491, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a36323a22447576696461732047657261697320736f6272652047656f6772616669612c20447576696461732047657261697320736f6272652046696c6f736f666961223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(55, 0, 2, 0, 0, 0, '127.0.0.1', 1508803491, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a36313a22447576696461732047657261697320736f62726520457370616e686f6c2c20447576696461732047657261697320736f6272652048697374c3b3726961223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(56, 0, 2, 0, 0, 0, '127.0.0.1', 1508803491, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a35393a22447576696461732047657261697320736f62726520496e676cc3aa732c20447576696461732047657261697320736f62726520457370616e686f6c223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(57, 0, 2, 0, 0, 0, '127.0.0.1', 1508803491, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a36313a22447576696461732047657261697320736f62726520506f7274756775c3aa732c20447576696461732047657261697320736f6272652046c3ad73696361223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(58, 0, 2, 0, 0, 0, '127.0.0.1', 1508803491, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a35383a22447576696461732047657261697320736f6272652046c3ad736963612c20447576696461732047657261697320736f62726520496e676cc3aa73223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(59, 0, 2, 0, 0, 0, '127.0.0.1', 1508803491, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a36333a22447576696461732047657261697320736f6272652046696c6f736f6669612c20447576696461732047657261697320736f62726520536f63696f6c6f676961223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(60, 0, 2, 0, 0, 0, '127.0.0.1', 1508803492, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a36323a22447576696461732047657261697320736f62726520536f63696f6c6f6769612c20447576696461732047657261697320736f627265205175c3ad6d696361223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(61, 0, 2, 0, 0, 0, '127.0.0.1', 1508803492, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a38333a22447576696461732047657261697320736f627265205465636e6f6c6f67696120646120496e666f726d61c3a7c3a36f2c20447576696461732047657261697320736f62726520436f6d756e696361c3a7c3a36f223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(62, 0, 2, 0, 0, 0, '127.0.0.1', 1508803492, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a36373a22447576696461732047657261697320736f6272652041727465732c20447576696461732047657261697320736f627265204564756361c3a7c3a36f2046c3ad73696361223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(63, 0, 2, 0, 0, 0, '127.0.0.1', 1508803492, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a38383a22447576696461732047657261697320736f627265204564756361c3a7c3a36f2046c3ad736963612c20447576696461732047657261697320736f627265205465636e6f6c6f67696120646120496e666f726d61c3a7c3a36f223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(64, 0, 2, 0, 0, 0, '127.0.0.1', 1508803492, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a35393a22447576696461732047657261697320736f627265204c6974657261747572612c20447576696461732047657261697320736f627265204172746573223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(65, 0, 2, 0, 0, 0, '127.0.0.1', 1508803493, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a36303a22447576696461732047657261697320736f627265205175c3ad6d6963612c20447576696461732047657261697320736f6272652042696f6c6f676961223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(66, 0, 2, 0, 0, 0, '127.0.0.1', 1508803494, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a3134343a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(67, 0, 2, 0, 0, 0, '127.0.0.1', 1508803494, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a38353a22447576696461732047657261697320736f627265204d6174656dc3a17469636120652073756173205465636e6f6c6f676961732c20447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a3139303a223c7370616e20636c6173733d22736570223e5669736974616e7465733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4d6f64657261646f72657320676c6f626169733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e557375c3a172696f73207265676973747261646f7320726563656e74656d656e74653c2f7370616e3e223b7d),
(68, 2, 1, 0, 0, 0, '127.0.0.1', 1508803651, 0x4c4f475f4552524f525f454d41494c, 0x613a313a7b693a303b733a3336333a223c7374726f6e673e454d41494c2f5048502f6d61696c28293c2f7374726f6e673e3c6272202f3e3c656d3e2f45454e454d50202d205443432f466f72756d2f7563702e7068703c2f656d3e3c6272202f3e3c6272202f3e4572726e6f20323a206d61696c2829205b3c6120687265663d2766756e6374696f6e2e6d61696c273e66756e6374696f6e2e6d61696c3c2f613e5d3a204661696c656420746f20636f6e6e65637420746f206d61696c736572766572206174202671756f743b3132372e302e302e312671756f743b20706f72742032352c2076657269667920796f7572202671756f743b534d54502671756f743b20616e64202671756f743b736d74705f706f72742671756f743b2073657474696e6720696e207068702e696e69206f722075736520696e695f7365742829206174205b524f4f545d2f696e636c756465732f66756e6374696f6e735f6d657373656e6765722e706870206c696e6520313831323c6272202f3e223b7d),
(69, 0, 2, 0, 0, 0, '127.0.0.1', 1508803733, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(70, 0, 2, 0, 0, 0, '127.0.0.1', 1508803754, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b7d),
(71, 0, 2, 0, 0, 0, '127.0.0.1', 1508803790, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33323a22447576696461732047657261697320736f627265204d6174656dc3a174696361223b693a313b733a3535333a22447576696461732047657261697320736f62726520506f7274756775c3aa732c20447576696461732047657261697320736f6272652046c3ad736963612c20447576696461732047657261697320736f62726520496e676cc3aa732c20447576696461732047657261697320736f62726520457370616e686f6c2c20447576696461732047657261697320736f6272652048697374c3b37269612c20447576696461732047657261697320736f6272652047656f6772616669612c20447576696461732047657261697320736f6272652046696c6f736f6669612c20447576696461732047657261697320736f62726520536f63696f6c6f6769612c20447576696461732047657261697320736f627265205175c3ad6d6963612c20447576696461732047657261697320736f6272652042696f6c6f6769612c20447576696461732047657261697320736f627265204c6974657261747572612c20447576696461732047657261697320736f6272652041727465732c20447576696461732047657261697320736f627265204564756361c3a7c3a36f2046c3ad736963612c20447576696461732047657261697320736f627265205465636e6f6c6f67696120646120496e666f726d61c3a7c3a36f2c20447576696461732047657261697320736f62726520436f6d756e696361c3a7c3a36f2c20447576696461732047657261697320736f627265204d6174656dc3a17469636120652073756173205465636e6f6c6f67696173223b7d),
(72, 0, 2, 0, 0, 0, '127.0.0.1', 1508803870, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(73, 0, 2, 0, 0, 0, '127.0.0.1', 1508803917, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(74, 0, 2, 0, 0, 0, '127.0.0.1', 1508804026, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(75, 0, 2, 0, 0, 0, '127.0.0.1', 1508804101, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(76, 0, 2, 0, 0, 0, '127.0.0.1', 1508804139, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(77, 2, 2, 0, 0, 0, '127.0.0.1', 1508804505, 0x4c4f475f4552524f525f454d41494c, 0x613a313a7b693a303b733a3336343a223c7374726f6e673e454d41494c2f5048502f6d61696c28293c2f7374726f6e673e3c6272202f3e3c656d3e2f45454e454d50202d205443432f466f72756d2f63726f6e2e7068703c2f656d3e3c6272202f3e3c6272202f3e4572726e6f20323a206d61696c2829205b3c6120687265663d2766756e6374696f6e2e6d61696c273e66756e6374696f6e2e6d61696c3c2f613e5d3a204661696c656420746f20636f6e6e65637420746f206d61696c736572766572206174202671756f743b3132372e302e302e312671756f743b20706f72742032352c2076657269667920796f7572202671756f743b534d54502671756f743b20616e64202671756f743b736d74705f706f72742671756f743b2073657474696e6720696e207068702e696e69206f722075736520696e695f7365742829206174205b524f4f545d2f696e636c756465732f66756e6374696f6e735f6d657373656e6765722e706870206c696e6520313831323c6272202f3e223b7d),
(78, 0, 2, 0, 0, 0, '127.0.0.1', 1511226474, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(79, 0, 2, 0, 0, 0, '127.0.0.1', 1511226829, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(80, 0, 2, 0, 0, 0, '127.0.0.1', 1511226938, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(81, 0, 2, 0, 0, 0, '127.0.0.1', 1511228609, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(82, 0, 2, 0, 0, 0, '127.0.0.1', 1511228660, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(83, 0, 2, 0, 0, 0, '127.0.0.1', 1511228707, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(84, 0, 2, 0, 0, 0, '127.0.0.1', 1511291217, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(85, 0, 2, 0, 0, 0, '127.0.0.1', 1511291230, 0x4c4f475f434f4e4649475f53455454494e4753, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_login_attempts`
--

CREATE TABLE IF NOT EXISTS `phpbb_login_attempts` (
  `attempt_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `attempt_browser` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT '',
  `attempt_forwarded_for` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `attempt_time` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `username_clean` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  KEY `att_ip` (`attempt_ip`,`attempt_time`),
  KEY `att_for` (`attempt_forwarded_for`,`attempt_time`),
  KEY `att_time` (`attempt_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_login_attempts`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_migrations`
--

CREATE TABLE IF NOT EXISTS `phpbb_migrations` (
  `migration_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `migration_depends_on` text COLLATE utf8_bin NOT NULL,
  `migration_schema_done` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `migration_data_done` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `migration_data_state` text COLLATE utf8_bin NOT NULL,
  `migration_start_time` int(11) unsigned NOT NULL DEFAULT '0',
  `migration_end_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`migration_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_migrations`
--

INSERT INTO `phpbb_migrations` (`migration_name`, `migration_depends_on`, `migration_schema_done`, `migration_data_done`, `migration_data_state`, `migration_start_time`, `migration_end_time`) VALUES
('\\phpbb\\db\\migration\\data\\v30x\\local_url_bbcode', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31325f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_0', 0x613a303a7b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_1', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f315f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_10', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31305f726333223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_10_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f39223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_10_rc2', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31305f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_10_rc3', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31305f726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_11', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31315f726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_11_rc1', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3130223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_11_rc2', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31315f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_12', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31325f726333223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_12_rc1', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_12_rc2', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31325f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_12_rc3', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31325f726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_13', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31335f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_13_pl1', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3133223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_13_rc1', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3132223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_14', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31345f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_14_rc1', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3133223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_1_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f30223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_2', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f325f726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_2_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_2_rc2', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f325f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_3', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f335f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_3_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f32223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_4', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f345f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_4_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f33223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_5', 0x613a313a7b693a303b733a35323a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f355f7263317061727432223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_5_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f34223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_5_rc1part2', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f355f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_6', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f365f726334223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_6_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f35223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_6_rc2', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f365f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_6_rc3', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f365f726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_6_rc4', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f365f726333223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_7', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f375f726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_7_pl1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f37223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_7_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f36223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_7_rc2', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f375f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_8', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f385f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_8_rc1', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f375f706c31223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_9', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f395f726334223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_9_rc1', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f38223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_9_rc2', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f395f726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_9_rc3', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f395f726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v30x\\release_3_0_9_rc4', 0x613a313a7b693a303b733a34373a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f395f726333223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\acp_prune_users_module', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6265746131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\acp_style_components_module', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\allow_cdn', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6a71756572795f757064617465223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\alpha1', 0x613a31383a7b693a303b733a34363a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c6c6f63616c5f75726c5f6262636f6465223b693a313b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3132223b693a323b733a35373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6163705f7374796c655f636f6d706f6e656e74735f6d6f64756c65223b693a333b733a33393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c616c6c6f775f63646e223b693a343b733a34393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c617574685f70726f76696465725f6f61757468223b693a353b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c61766174617273223b693a363b733a34303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c626f617264696e646578223b693a373b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c636f6e6669675f64625f74657874223b693a383b733a34353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c666f72676f745f70617373776f7264223b693a393b733a34313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6d6f645f72657772697465223b693a31303b733a34393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6d7973716c5f66756c6c746578745f64726f70223b693a31313b733a34303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e616d65737061636573223b693a31323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e735f63726f6e223b693a31333b733a36303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e5f6f7074696f6e735f7265636f6e76657274223b693a31343b733a33383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c706c75706c6f6164223b693a31353b733a35313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7369676e61747572655f6d6f64756c655f61757468223b693a31363b733a35323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c736f667464656c6574655f6d63705f6d6f64756c6573223b693a31373b733a33383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7465616d70616765223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\alpha2', 0x613a323a7b693a303b733a33363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c616c70686131223b693a313b733a35313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e735f63726f6e5f7032223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\alpha3', 0x613a343a7b693a303b733a33363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c616c70686132223b693a313b733a34323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6176617461725f7479706573223b693a323b733a33393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70617373776f726473223b693a333b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\auth_provider_oauth', 0x613a303a7b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\auth_provider_oauth2', 0x613a313a7b693a303b733a34393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c617574685f70726f76696465725f6f61757468223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\avatars', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\avatar_types', 0x613a323a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b693a313b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c61766174617273223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\beta1', 0x613a373a7b693a303b733a33363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c616c70686133223b693a313b733a34323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70617373776f7264735f7032223b693a323b733a35323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c706f7374677265735f66756c6c746578745f64726f70223b693a333b733a36333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6368616e67655f6c6f61645f73657474696e6773223b693a343b733a35313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6c6f636174696f6e223b693a353b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c736f66745f64656c6574655f6d6f645f636f6e7665727432223b693a363b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7563705f706f707570706d5f6d6f64756c65223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\beta2', 0x613a333a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6265746131223b693a313b733a35323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6163705f7072756e655f75736572735f6d6f64756c65223b693a323b733a35393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6c6f636174696f6e5f636c65616e7570223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\beta3', 0x613a363a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6265746132223b693a313b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c617574685f70726f76696465725f6f6175746832223b693a323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c626f6172645f636f6e746163745f6e616d65223b693a333b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6a71756572795f75706461746532223b693a343b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6c6976655f73656172636865735f636f6e666967223b693a353b733a34393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7072756e655f736861646f775f746f70696373223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\beta4', 0x613a333a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6265746133223b693a313b733a36393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c657874656e73696f6e735f76657273696f6e5f636865636b5f666f7263655f756e737461626c65223b693a323b733a35383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c72657365745f6d697373696e675f636170746368615f706c7567696e223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\boardindex', 0x613a303a7b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\board_contact_name', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6265746132223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\bot_update', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726336223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\captcha_plugins', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\config_db_text', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\contact_admin_acp_module', 0x613a303a7b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\contact_admin_form', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c636f6e6669675f64625f74657874223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\dev', 0x613a353a7b693a303b733a34303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c657874656e73696f6e73223b693a313b733a34353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7374796c655f7570646174655f7032223b693a323b733a34313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c74696d657a6f6e655f7032223b693a333b733a35323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7265706f727465645f706f7374735f646973706c6179223b693a343b733a34363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6d6967726174696f6e735f7461626c65223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\extensions', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\extensions_version_check_force_unstable', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\forgot_password', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\gold', 0x613a323a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726336223b693a313b733a34303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c626f745f757064617465223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\jquery_update', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\jquery_update2', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6a71756572795f757064617465223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\live_searches_config', 0x613a303a7b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\migrations_table', 0x613a303a7b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\mod_rewrite', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\mysql_fulltext_drop', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\namespaces', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\notifications', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\notifications_cron', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e73223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\notifications_cron_p2', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e735f63726f6e223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\notifications_schema_fix', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e73223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\notifications_use_full_name', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726333223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\notification_options_reconvert', 0x613a313a7b693a303b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e735f736368656d615f666978223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\passwords', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\passwords_convert_p1', 0x613a313a7b693a303b733a34323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70617373776f7264735f7032223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\passwords_convert_p2', 0x613a313a7b693a303b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70617373776f7264735f636f6e766572745f7031223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\passwords_p2', 0x613a313a7b693a303b733a33393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70617373776f726473223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\plupload', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\postgres_fulltext_drop', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_aol', 0x613a313a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7961686f6f5f636c65616e7570223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_aol_cleanup', 0x613a313a7b693a303b733a34363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f616f6c223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_change_load_settings', 0x613a313a7b693a303b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f616f6c5f636c65616e7570223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_cleanup', 0x613a323a7b693a303b733a35323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f696e74657265737473223b693a313b733a35333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6f636375706174696f6e223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_contact_field', 0x613a313a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6f6e5f6d656d6265726c697374223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_facebook', 0x613a333a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f636f6e746163745f6669656c64223b693a313b733a35353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f73686f775f6e6f76616c7565223b693a323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_field_validation_length', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726333223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_googleplus', 0x613a333a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f636f6e746163745f6669656c64223b693a313b733a35353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f73686f775f6e6f76616c7565223b693a323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_icq', 0x613a313a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f636f6e746163745f6669656c64223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_icq_cleanup', 0x613a313a7b693a303b733a34363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f696371223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_interests', 0x613a323a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b693a313b733a35353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f73686f775f6e6f76616c7565223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_location', 0x613a323a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b693a313b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6f6e5f6d656d6265726c697374223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_location_cleanup', 0x613a313a7b693a303b733a35313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6c6f636174696f6e223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_occupation', 0x613a313a7b693a303b733a35323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f696e74657265737473223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_on_memberlist', 0x613a313a7b693a303b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f636c65616e7570223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_show_novalue', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_skype', 0x613a333a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f636f6e746163745f6669656c64223b693a313b733a35353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f73686f775f6e6f76616c7565223b693a323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_twitter', 0x613a333a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f636f6e746163745f6669656c64223b693a313b733a35353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f73686f775f6e6f76616c7565223b693a323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_types', 0x613a313a7b693a303b733a33363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c616c70686132223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_website', 0x613a323a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6f6e5f6d656d6265726c697374223b693a313b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6963715f636c65616e7570223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_website_cleanup', 0x613a313a7b693a303b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f77656273697465223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_wlm', 0x613a313a7b693a303b733a35383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f776562736974655f636c65616e7570223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_wlm_cleanup', 0x613a313a7b693a303b733a34363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f776c6d223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_yahoo', 0x613a313a7b693a303b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f776c6d5f636c65616e7570223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_yahoo_cleanup', 0x613a313a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7961686f6f223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\profilefield_youtube', 0x613a333a7b693a303b733a35363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f636f6e746163745f6669656c64223b693a313b733a35353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f73686f775f6e6f76616c7565223b693a323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f7479706573223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\prune_shadow_topics', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\rc1', 0x613a393a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6265746134223b693a313b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c636f6e746163745f61646d696e5f6163705f6d6f64756c65223b693a323b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c636f6e746163745f61646d696e5f666f726d223b693a333b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70617373776f7264735f636f6e766572745f7032223b693a343b733a35313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f66616365626f6f6b223b693a353b733a35333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f676f6f676c65706c7573223b693a363b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f736b797065223b693a373b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f74776974746572223b693a383b733a35303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f796f7574756265223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\rc2', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\rc3', 0x613a353a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726332223b693a313b733a34353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c636170746368615f706c7567696e73223b693a323b733a35333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c72656e616d655f746f6f5f6c6f6e675f696e6465786573223b693a333b733a34313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7365617263685f74797065223b693a343b733a34393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c746f7069635f736f72745f757365726e616d65223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\rc4', 0x613a323a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726333223b693a313b733a35373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c6e6f74696669636174696f6e735f7573655f66756c6c5f6e616d65223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\rc5', 0x613a333a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726334223b693a313b733a36363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c70726f66696c656669656c645f6669656c645f76616c69646174696f6e5f6c656e677468223b693a323b733a35333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c72656d6f76655f6163705f7374796c65735f6361636865223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\rc6', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726335223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\remove_acp_styles_cache', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c726334223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\rename_too_long_indexes', 0x613a313a7b693a303b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f30223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\reported_posts_display', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\reset_missing_captcha_plugin', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\search_type', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\signature_module_auth', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\softdelete_mcp_modules', 0x613a323a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b693a313b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c736f667464656c6574655f7032223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\softdelete_p1', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\softdelete_p2', 0x613a323a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b693a313b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c736f667464656c6574655f7031223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\soft_delete_mod_convert', 0x613a313a7b693a303b733a33363a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c616c70686133223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\soft_delete_mod_convert2', 0x613a313a7b693a303b733a35333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c736f66745f64656c6574655f6d6f645f636f6e76657274223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\style_update_p1', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\style_update_p2', 0x613a313a7b693a303b733a34353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c7374796c655f7570646174655f7031223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\teampage', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\timezone', 0x613a313a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\timezone_p2', 0x613a313a7b693a303b733a33383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c74696d657a6f6e65223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\topic_sort_username', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v310\\ucp_popuppm_module', 0x613a313a7b693a303b733a33333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c646576223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\add_jabber_ssl_context_config_options', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\add_latest_topics_index', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\add_log_time_index', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333139223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\add_smtp_ssl_context_config_options', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\increase_size_of_dateformat', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333137223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\increase_size_of_emotion', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\m_pm_report', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333136726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\m_softdelete_global', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\plupload_last_gc_dynamic', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333132223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\profilefield_remove_underscore_from_alpha', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333131223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\profilefield_yahoo_update_url', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333132223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\remove_duplicate_migrations', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\style_update', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c676f6c64223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\update_custom_bbcodes_with_idn', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333132223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\update_hashes', 0x613a313a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v311', 0x613a323a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331305c676f6c64223b693a313b733a34323a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7374796c655f757064617465223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v3110', 0x613a313a7b693a303b733a33383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v3110rc1', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333139223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v3111', 0x613a313a7b693a303b733a33383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313131726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v3111rc1', 0x613a383a7b693a303b733a33353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7633313130223b693a313b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c6164645f6c6f675f74696d655f696e646578223b693a323b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c696e6372656173655f73697a655f6f665f656d6f74696f6e223b693a333b733a36373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c6164645f6a61626265725f73736c5f636f6e746578745f636f6e6669675f6f7074696f6e73223b693a343b733a36353a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c6164645f736d74705f73736c5f636f6e746578745f636f6e6669675f6f7074696f6e73223b693a353b733a34333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7570646174655f686173686573223b693a363b733a35373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c72656d6f76655f6475706c69636174655f6d6967726174696f6e73223b693a373b733a35333a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c6164645f6c61746573745f746f706963735f696e646578223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v312', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333132726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v312rc1', 0x613a323a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333131223b693a313b733a34393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c6d5f736f667464656c6574655f676c6f62616c223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v313', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333133726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v313rc1', 0x613a353a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31335f726331223b693a313b733a35343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c706c75706c6f61645f6c6173745f67635f64796e616d6963223b693a323b733a37313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c70726f66696c656669656c645f72656d6f76655f756e64657273636f72655f66726f6d5f616c706861223b693a333b733a35393a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c70726f66696c656669656c645f7961686f6f5f7570646174655f75726c223b693a343b733a36303a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c7570646174655f637573746f6d5f6262636f6465735f776974685f69646e223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v313rc2', 0x613a323a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31335f706c31223b693a313b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333133726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v314', 0x613a323a7b693a303b733a34343a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f3134223b693a313b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333134726332223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v314rc1', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333133223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v314rc2', 0x613a323a7b693a303b733a34383a225c70687062625c64625c6d6967726174696f6e5c646174615c763330785c72656c656173655f335f305f31345f726331223b693a313b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333134726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v315', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333135726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v315rc1', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333134223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v316', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333136726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v316rc1', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333135223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v317', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333137726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v317pl1', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333137223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v317rc1', 0x613a323a7b693a303b733a34313a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c6d5f706d5f7265706f7274223b693a313b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333136223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v318', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333138726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v318rc1', 0x613a323a7b693a303b733a35373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c696e6372656173655f73697a655f6f665f64617465666f726d6174223b693a313b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333137706c31223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v319', 0x613a313a7b693a303b733a33373a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333139726331223b7d, 1, 1, '', 1508801478, 1508801478),
('\\phpbb\\db\\migration\\data\\v31x\\v319rc1', 0x613a313a7b693a303b733a33343a225c70687062625c64625c6d6967726174696f6e5c646174615c763331785c76333138223b7d, 1, 1, '', 1508801478, 1508801478);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_moderator_cache`
--

CREATE TABLE IF NOT EXISTS `phpbb_moderator_cache` (
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_on_index` tinyint(1) unsigned NOT NULL DEFAULT '1',
  KEY `disp_idx` (`display_on_index`),
  KEY `forum_id` (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_moderator_cache`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_modules`
--

CREATE TABLE IF NOT EXISTS `phpbb_modules` (
  `module_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `module_enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `module_display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `module_basename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `module_class` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `left_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `right_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module_langname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `module_mode` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `module_auth` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`module_id`),
  KEY `left_right_id` (`left_id`,`right_id`),
  KEY `module_enabled` (`module_enabled`),
  KEY `class_left_id` (`module_class`,`left_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=207 ;

--
-- Extraindo dados da tabela `phpbb_modules`
--

INSERT INTO `phpbb_modules` (`module_id`, `module_enabled`, `module_display`, `module_basename`, `module_class`, `parent_id`, `left_id`, `right_id`, `module_langname`, `module_mode`, `module_auth`) VALUES
(1, 1, 1, '', 'acp', 0, 1, 66, 'ACP_CAT_GENERAL', '', ''),
(2, 1, 1, '', 'acp', 1, 4, 17, 'ACP_QUICK_ACCESS', '', ''),
(3, 1, 1, '', 'acp', 1, 18, 43, 'ACP_BOARD_CONFIGURATION', '', ''),
(4, 1, 1, '', 'acp', 1, 44, 51, 'ACP_CLIENT_COMMUNICATION', '', ''),
(5, 1, 1, '', 'acp', 1, 52, 65, 'ACP_SERVER_CONFIGURATION', '', ''),
(6, 1, 1, '', 'acp', 0, 67, 86, 'ACP_CAT_FORUMS', '', ''),
(7, 1, 1, '', 'acp', 6, 68, 73, 'ACP_MANAGE_FORUMS', '', ''),
(8, 1, 1, '', 'acp', 6, 74, 85, 'ACP_FORUM_BASED_PERMISSIONS', '', ''),
(9, 1, 1, '', 'acp', 0, 87, 114, 'ACP_CAT_POSTING', '', ''),
(10, 1, 1, '', 'acp', 9, 88, 101, 'ACP_MESSAGES', '', ''),
(11, 1, 1, '', 'acp', 9, 102, 113, 'ACP_ATTACHMENTS', '', ''),
(12, 1, 1, '', 'acp', 0, 115, 172, 'ACP_CAT_USERGROUP', '', ''),
(13, 1, 1, '', 'acp', 12, 116, 151, 'ACP_CAT_USERS', '', ''),
(14, 1, 1, '', 'acp', 12, 152, 161, 'ACP_GROUPS', '', ''),
(15, 1, 1, '', 'acp', 12, 162, 171, 'ACP_USER_SECURITY', '', ''),
(16, 1, 1, '', 'acp', 0, 173, 222, 'ACP_CAT_PERMISSIONS', '', ''),
(17, 1, 1, '', 'acp', 16, 176, 185, 'ACP_GLOBAL_PERMISSIONS', '', ''),
(18, 1, 1, '', 'acp', 16, 186, 197, 'ACP_FORUM_BASED_PERMISSIONS', '', ''),
(19, 1, 1, '', 'acp', 16, 198, 207, 'ACP_PERMISSION_ROLES', '', ''),
(20, 1, 1, '', 'acp', 16, 208, 221, 'ACP_PERMISSION_MASKS', '', ''),
(21, 1, 1, '', 'acp', 0, 223, 238, 'ACP_CAT_CUSTOMISE', '', ''),
(22, 1, 1, '', 'acp', 21, 228, 233, 'ACP_STYLE_MANAGEMENT', '', ''),
(23, 1, 1, '', 'acp', 21, 224, 227, 'ACP_EXTENSION_MANAGEMENT', '', ''),
(24, 1, 1, '', 'acp', 21, 234, 237, 'ACP_LANGUAGE', '', ''),
(25, 1, 1, '', 'acp', 0, 239, 258, 'ACP_CAT_MAINTENANCE', '', ''),
(26, 1, 1, '', 'acp', 25, 240, 249, 'ACP_FORUM_LOGS', '', ''),
(27, 1, 1, '', 'acp', 25, 250, 257, 'ACP_CAT_DATABASE', '', ''),
(28, 1, 1, '', 'acp', 0, 259, 282, 'ACP_CAT_SYSTEM', '', ''),
(29, 1, 1, '', 'acp', 28, 260, 263, 'ACP_AUTOMATION', '', ''),
(30, 1, 1, '', 'acp', 28, 264, 273, 'ACP_GENERAL_TASKS', '', ''),
(31, 1, 1, '', 'acp', 28, 274, 281, 'ACP_MODULE_MANAGEMENT', '', ''),
(32, 1, 1, '', 'acp', 0, 283, 284, 'ACP_CAT_DOT_MODS', '', ''),
(33, 1, 1, 'acp_attachments', 'acp', 3, 19, 20, 'ACP_ATTACHMENT_SETTINGS', 'attach', 'acl_a_attach'),
(34, 1, 1, 'acp_attachments', 'acp', 11, 103, 104, 'ACP_ATTACHMENT_SETTINGS', 'attach', 'acl_a_attach'),
(35, 1, 1, 'acp_attachments', 'acp', 11, 105, 106, 'ACP_MANAGE_EXTENSIONS', 'extensions', 'acl_a_attach'),
(36, 1, 1, 'acp_attachments', 'acp', 11, 107, 108, 'ACP_EXTENSION_GROUPS', 'ext_groups', 'acl_a_attach'),
(37, 1, 1, 'acp_attachments', 'acp', 11, 109, 110, 'ACP_ORPHAN_ATTACHMENTS', 'orphan', 'acl_a_attach'),
(38, 1, 1, 'acp_attachments', 'acp', 11, 111, 112, 'ACP_MANAGE_ATTACHMENTS', 'manage', 'acl_a_attach'),
(39, 1, 1, 'acp_ban', 'acp', 15, 163, 164, 'ACP_BAN_EMAILS', 'email', 'acl_a_ban'),
(40, 1, 1, 'acp_ban', 'acp', 15, 165, 166, 'ACP_BAN_IPS', 'ip', 'acl_a_ban'),
(41, 1, 1, 'acp_ban', 'acp', 15, 167, 168, 'ACP_BAN_USERNAMES', 'user', 'acl_a_ban'),
(42, 1, 1, 'acp_bbcodes', 'acp', 10, 89, 90, 'ACP_BBCODES', 'bbcodes', 'acl_a_bbcode'),
(43, 1, 1, 'acp_board', 'acp', 3, 21, 22, 'ACP_BOARD_SETTINGS', 'settings', 'acl_a_board'),
(44, 1, 1, 'acp_board', 'acp', 3, 23, 24, 'ACP_BOARD_FEATURES', 'features', 'acl_a_board'),
(45, 1, 1, 'acp_board', 'acp', 3, 25, 26, 'ACP_AVATAR_SETTINGS', 'avatar', 'acl_a_board'),
(46, 1, 1, 'acp_board', 'acp', 3, 27, 28, 'ACP_MESSAGE_SETTINGS', 'message', 'acl_a_board'),
(47, 1, 1, 'acp_board', 'acp', 10, 91, 92, 'ACP_MESSAGE_SETTINGS', 'message', 'acl_a_board'),
(48, 1, 1, 'acp_board', 'acp', 3, 29, 30, 'ACP_POST_SETTINGS', 'post', 'acl_a_board'),
(49, 1, 1, 'acp_board', 'acp', 10, 93, 94, 'ACP_POST_SETTINGS', 'post', 'acl_a_board'),
(50, 1, 1, 'acp_board', 'acp', 3, 31, 32, 'ACP_SIGNATURE_SETTINGS', 'signature', 'acl_a_board'),
(51, 1, 1, 'acp_board', 'acp', 3, 33, 34, 'ACP_FEED_SETTINGS', 'feed', 'acl_a_board'),
(52, 1, 1, 'acp_board', 'acp', 3, 35, 36, 'ACP_REGISTER_SETTINGS', 'registration', 'acl_a_board'),
(53, 1, 1, 'acp_board', 'acp', 4, 45, 46, 'ACP_AUTH_SETTINGS', 'auth', 'acl_a_server'),
(54, 1, 1, 'acp_board', 'acp', 4, 47, 48, 'ACP_EMAIL_SETTINGS', 'email', 'acl_a_server'),
(55, 1, 1, 'acp_board', 'acp', 5, 53, 54, 'ACP_COOKIE_SETTINGS', 'cookie', 'acl_a_server'),
(56, 1, 1, 'acp_board', 'acp', 5, 55, 56, 'ACP_SERVER_SETTINGS', 'server', 'acl_a_server'),
(57, 1, 1, 'acp_board', 'acp', 5, 57, 58, 'ACP_SECURITY_SETTINGS', 'security', 'acl_a_server'),
(58, 1, 1, 'acp_board', 'acp', 5, 59, 60, 'ACP_LOAD_SETTINGS', 'load', 'acl_a_server'),
(59, 1, 1, 'acp_bots', 'acp', 30, 265, 266, 'ACP_BOTS', 'bots', 'acl_a_bots'),
(60, 1, 1, 'acp_captcha', 'acp', 3, 37, 38, 'ACP_VC_SETTINGS', 'visual', 'acl_a_board'),
(61, 1, 0, 'acp_captcha', 'acp', 3, 39, 40, 'ACP_VC_CAPTCHA_DISPLAY', 'img', 'acl_a_board'),
(62, 1, 1, 'acp_contact', 'acp', 3, 41, 42, 'ACP_CONTACT_SETTINGS', 'contact', 'acl_a_board'),
(63, 1, 1, 'acp_database', 'acp', 27, 251, 252, 'ACP_BACKUP', 'backup', 'acl_a_backup'),
(64, 1, 1, 'acp_database', 'acp', 27, 253, 254, 'ACP_RESTORE', 'restore', 'acl_a_backup'),
(65, 1, 1, 'acp_disallow', 'acp', 15, 169, 170, 'ACP_DISALLOW_USERNAMES', 'usernames', 'acl_a_names'),
(66, 1, 1, 'acp_email', 'acp', 30, 267, 268, 'ACP_MASS_EMAIL', 'email', 'acl_a_email && cfg_email_enable'),
(67, 1, 1, 'acp_extensions', 'acp', 23, 225, 226, 'ACP_EXTENSIONS', 'main', 'acl_a_extensions'),
(68, 1, 1, 'acp_forums', 'acp', 7, 69, 70, 'ACP_MANAGE_FORUMS', 'manage', 'acl_a_forum'),
(69, 1, 1, 'acp_groups', 'acp', 14, 153, 154, 'ACP_GROUPS_MANAGE', 'manage', 'acl_a_group'),
(70, 1, 1, 'acp_groups', 'acp', 14, 155, 156, 'ACP_GROUPS_POSITION', 'position', 'acl_a_group'),
(71, 1, 1, 'acp_icons', 'acp', 10, 95, 96, 'ACP_ICONS', 'icons', 'acl_a_icons'),
(72, 1, 1, 'acp_icons', 'acp', 10, 97, 98, 'ACP_SMILIES', 'smilies', 'acl_a_icons'),
(73, 1, 1, 'acp_inactive', 'acp', 13, 117, 118, 'ACP_INACTIVE_USERS', 'list', 'acl_a_user'),
(74, 1, 1, 'acp_jabber', 'acp', 4, 49, 50, 'ACP_JABBER_SETTINGS', 'settings', 'acl_a_jabber'),
(75, 1, 1, 'acp_language', 'acp', 24, 235, 236, 'ACP_LANGUAGE_PACKS', 'lang_packs', 'acl_a_language'),
(76, 1, 1, 'acp_logs', 'acp', 26, 241, 242, 'ACP_ADMIN_LOGS', 'admin', 'acl_a_viewlogs'),
(77, 1, 1, 'acp_logs', 'acp', 26, 243, 244, 'ACP_MOD_LOGS', 'mod', 'acl_a_viewlogs'),
(78, 1, 1, 'acp_logs', 'acp', 26, 245, 246, 'ACP_USERS_LOGS', 'users', 'acl_a_viewlogs'),
(79, 1, 1, 'acp_logs', 'acp', 26, 247, 248, 'ACP_CRITICAL_LOGS', 'critical', 'acl_a_viewlogs'),
(80, 1, 1, 'acp_main', 'acp', 1, 2, 3, 'ACP_INDEX', 'main', ''),
(81, 1, 1, 'acp_modules', 'acp', 31, 275, 276, 'ACP', 'acp', 'acl_a_modules'),
(82, 1, 1, 'acp_modules', 'acp', 31, 277, 278, 'UCP', 'ucp', 'acl_a_modules'),
(83, 1, 1, 'acp_modules', 'acp', 31, 279, 280, 'MCP', 'mcp', 'acl_a_modules'),
(84, 1, 1, 'acp_permission_roles', 'acp', 19, 199, 200, 'ACP_ADMIN_ROLES', 'admin_roles', 'acl_a_roles && acl_a_aauth'),
(85, 1, 1, 'acp_permission_roles', 'acp', 19, 201, 202, 'ACP_USER_ROLES', 'user_roles', 'acl_a_roles && acl_a_uauth'),
(86, 1, 1, 'acp_permission_roles', 'acp', 19, 203, 204, 'ACP_MOD_ROLES', 'mod_roles', 'acl_a_roles && acl_a_mauth'),
(87, 1, 1, 'acp_permission_roles', 'acp', 19, 205, 206, 'ACP_FORUM_ROLES', 'forum_roles', 'acl_a_roles && acl_a_fauth'),
(88, 1, 1, 'acp_permissions', 'acp', 16, 174, 175, 'ACP_PERMISSIONS', 'intro', 'acl_a_authusers || acl_a_authgroups || acl_a_viewauth'),
(89, 1, 0, 'acp_permissions', 'acp', 20, 209, 210, 'ACP_PERMISSION_TRACE', 'trace', 'acl_a_viewauth'),
(90, 1, 1, 'acp_permissions', 'acp', 18, 187, 188, 'ACP_FORUM_PERMISSIONS', 'setting_forum_local', 'acl_a_fauth && (acl_a_authusers || acl_a_authgroups)'),
(91, 1, 1, 'acp_permissions', 'acp', 18, 189, 190, 'ACP_FORUM_PERMISSIONS_COPY', 'setting_forum_copy', 'acl_a_fauth && acl_a_authusers && acl_a_authgroups && acl_a_mauth'),
(92, 1, 1, 'acp_permissions', 'acp', 18, 191, 192, 'ACP_FORUM_MODERATORS', 'setting_mod_local', 'acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),
(93, 1, 1, 'acp_permissions', 'acp', 17, 177, 178, 'ACP_USERS_PERMISSIONS', 'setting_user_global', 'acl_a_authusers && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(94, 1, 1, 'acp_permissions', 'acp', 13, 121, 122, 'ACP_USERS_PERMISSIONS', 'setting_user_global', 'acl_a_authusers && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(95, 1, 1, 'acp_permissions', 'acp', 18, 193, 194, 'ACP_USERS_FORUM_PERMISSIONS', 'setting_user_local', 'acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),
(96, 1, 1, 'acp_permissions', 'acp', 13, 123, 124, 'ACP_USERS_FORUM_PERMISSIONS', 'setting_user_local', 'acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),
(97, 1, 1, 'acp_permissions', 'acp', 17, 179, 180, 'ACP_GROUPS_PERMISSIONS', 'setting_group_global', 'acl_a_authgroups && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(98, 1, 1, 'acp_permissions', 'acp', 14, 157, 158, 'ACP_GROUPS_PERMISSIONS', 'setting_group_global', 'acl_a_authgroups && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(99, 1, 1, 'acp_permissions', 'acp', 18, 195, 196, 'ACP_GROUPS_FORUM_PERMISSIONS', 'setting_group_local', 'acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),
(100, 1, 1, 'acp_permissions', 'acp', 14, 159, 160, 'ACP_GROUPS_FORUM_PERMISSIONS', 'setting_group_local', 'acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),
(101, 1, 1, 'acp_permissions', 'acp', 17, 181, 182, 'ACP_ADMINISTRATORS', 'setting_admin_global', 'acl_a_aauth && (acl_a_authusers || acl_a_authgroups)'),
(102, 1, 1, 'acp_permissions', 'acp', 17, 183, 184, 'ACP_GLOBAL_MODERATORS', 'setting_mod_global', 'acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),
(103, 1, 1, 'acp_permissions', 'acp', 20, 211, 212, 'ACP_VIEW_ADMIN_PERMISSIONS', 'view_admin_global', 'acl_a_viewauth'),
(104, 1, 1, 'acp_permissions', 'acp', 20, 213, 214, 'ACP_VIEW_USER_PERMISSIONS', 'view_user_global', 'acl_a_viewauth'),
(105, 1, 1, 'acp_permissions', 'acp', 20, 215, 216, 'ACP_VIEW_GLOBAL_MOD_PERMISSIONS', 'view_mod_global', 'acl_a_viewauth'),
(106, 1, 1, 'acp_permissions', 'acp', 20, 217, 218, 'ACP_VIEW_FORUM_MOD_PERMISSIONS', 'view_mod_local', 'acl_a_viewauth'),
(107, 1, 1, 'acp_permissions', 'acp', 20, 219, 220, 'ACP_VIEW_FORUM_PERMISSIONS', 'view_forum_local', 'acl_a_viewauth'),
(108, 1, 1, 'acp_php_info', 'acp', 30, 269, 270, 'ACP_PHP_INFO', 'info', 'acl_a_phpinfo'),
(109, 1, 1, 'acp_profile', 'acp', 13, 125, 126, 'ACP_CUSTOM_PROFILE_FIELDS', 'profile', 'acl_a_profile'),
(110, 1, 1, 'acp_prune', 'acp', 7, 71, 72, 'ACP_PRUNE_FORUMS', 'forums', 'acl_a_prune'),
(111, 1, 1, 'acp_prune', 'acp', 13, 127, 128, 'ACP_PRUNE_USERS', 'users', 'acl_a_userdel'),
(112, 1, 1, 'acp_ranks', 'acp', 13, 129, 130, 'ACP_MANAGE_RANKS', 'ranks', 'acl_a_ranks'),
(113, 1, 1, 'acp_reasons', 'acp', 30, 271, 272, 'ACP_MANAGE_REASONS', 'main', 'acl_a_reasons'),
(114, 1, 1, 'acp_search', 'acp', 5, 61, 62, 'ACP_SEARCH_SETTINGS', 'settings', 'acl_a_search'),
(115, 1, 1, 'acp_search', 'acp', 27, 255, 256, 'ACP_SEARCH_INDEX', 'index', 'acl_a_search'),
(116, 1, 1, 'acp_send_statistics', 'acp', 5, 63, 64, 'ACP_SEND_STATISTICS', 'send_statistics', 'acl_a_server'),
(117, 1, 1, 'acp_styles', 'acp', 22, 229, 230, 'ACP_STYLES', 'style', 'acl_a_styles'),
(118, 1, 1, 'acp_styles', 'acp', 22, 231, 232, 'ACP_STYLES_INSTALL', 'install', 'acl_a_styles'),
(119, 1, 1, 'acp_update', 'acp', 29, 261, 262, 'ACP_VERSION_CHECK', 'version_check', 'acl_a_board'),
(120, 1, 1, 'acp_users', 'acp', 13, 119, 120, 'ACP_MANAGE_USERS', 'overview', 'acl_a_user'),
(121, 1, 0, 'acp_users', 'acp', 13, 131, 132, 'ACP_USER_FEEDBACK', 'feedback', 'acl_a_user'),
(122, 1, 0, 'acp_users', 'acp', 13, 133, 134, 'ACP_USER_WARNINGS', 'warnings', 'acl_a_user'),
(123, 1, 0, 'acp_users', 'acp', 13, 135, 136, 'ACP_USER_PROFILE', 'profile', 'acl_a_user'),
(124, 1, 0, 'acp_users', 'acp', 13, 137, 138, 'ACP_USER_PREFS', 'prefs', 'acl_a_user'),
(125, 1, 0, 'acp_users', 'acp', 13, 139, 140, 'ACP_USER_AVATAR', 'avatar', 'acl_a_user'),
(126, 1, 0, 'acp_users', 'acp', 13, 141, 142, 'ACP_USER_RANK', 'rank', 'acl_a_user'),
(127, 1, 0, 'acp_users', 'acp', 13, 143, 144, 'ACP_USER_SIG', 'sig', 'acl_a_user'),
(128, 1, 0, 'acp_users', 'acp', 13, 145, 146, 'ACP_USER_GROUPS', 'groups', 'acl_a_user && acl_a_group'),
(129, 1, 0, 'acp_users', 'acp', 13, 147, 148, 'ACP_USER_PERM', 'perm', 'acl_a_user && acl_a_viewauth'),
(130, 1, 0, 'acp_users', 'acp', 13, 149, 150, 'ACP_USER_ATTACH', 'attach', 'acl_a_user'),
(131, 1, 1, 'acp_words', 'acp', 10, 99, 100, 'ACP_WORDS', 'words', 'acl_a_words'),
(132, 1, 1, 'acp_users', 'acp', 2, 5, 6, 'ACP_MANAGE_USERS', 'overview', 'acl_a_user'),
(133, 1, 1, 'acp_groups', 'acp', 2, 7, 8, 'ACP_GROUPS_MANAGE', 'manage', 'acl_a_group'),
(134, 1, 1, 'acp_forums', 'acp', 2, 9, 10, 'ACP_MANAGE_FORUMS', 'manage', 'acl_a_forum'),
(135, 1, 1, 'acp_logs', 'acp', 2, 11, 12, 'ACP_MOD_LOGS', 'mod', 'acl_a_viewlogs'),
(136, 1, 1, 'acp_bots', 'acp', 2, 13, 14, 'ACP_BOTS', 'bots', 'acl_a_bots'),
(137, 1, 1, 'acp_php_info', 'acp', 2, 15, 16, 'ACP_PHP_INFO', 'info', 'acl_a_phpinfo'),
(138, 1, 1, 'acp_permissions', 'acp', 8, 75, 76, 'ACP_FORUM_PERMISSIONS', 'setting_forum_local', 'acl_a_fauth && (acl_a_authusers || acl_a_authgroups)'),
(139, 1, 1, 'acp_permissions', 'acp', 8, 77, 78, 'ACP_FORUM_PERMISSIONS_COPY', 'setting_forum_copy', 'acl_a_fauth && acl_a_authusers && acl_a_authgroups && acl_a_mauth'),
(140, 1, 1, 'acp_permissions', 'acp', 8, 79, 80, 'ACP_FORUM_MODERATORS', 'setting_mod_local', 'acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),
(141, 1, 1, 'acp_permissions', 'acp', 8, 81, 82, 'ACP_USERS_FORUM_PERMISSIONS', 'setting_user_local', 'acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),
(142, 1, 1, 'acp_permissions', 'acp', 8, 83, 84, 'ACP_GROUPS_FORUM_PERMISSIONS', 'setting_group_local', 'acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),
(143, 1, 1, '', 'mcp', 0, 1, 10, 'MCP_MAIN', '', ''),
(144, 1, 1, '', 'mcp', 0, 11, 22, 'MCP_QUEUE', '', ''),
(145, 1, 1, '', 'mcp', 0, 23, 36, 'MCP_REPORTS', '', ''),
(146, 1, 1, '', 'mcp', 0, 37, 42, 'MCP_NOTES', '', ''),
(147, 1, 1, '', 'mcp', 0, 43, 52, 'MCP_WARN', '', ''),
(148, 1, 1, '', 'mcp', 0, 53, 60, 'MCP_LOGS', '', ''),
(149, 1, 1, '', 'mcp', 0, 61, 68, 'MCP_BAN', '', ''),
(150, 1, 1, 'mcp_ban', 'mcp', 149, 62, 63, 'MCP_BAN_USERNAMES', 'user', 'acl_m_ban'),
(151, 1, 1, 'mcp_ban', 'mcp', 149, 64, 65, 'MCP_BAN_IPS', 'ip', 'acl_m_ban'),
(152, 1, 1, 'mcp_ban', 'mcp', 149, 66, 67, 'MCP_BAN_EMAILS', 'email', 'acl_m_ban'),
(153, 1, 1, 'mcp_logs', 'mcp', 148, 54, 55, 'MCP_LOGS_FRONT', 'front', 'acl_m_ || aclf_m_'),
(154, 1, 1, 'mcp_logs', 'mcp', 148, 56, 57, 'MCP_LOGS_FORUM_VIEW', 'forum_logs', 'acl_m_,$id'),
(155, 1, 1, 'mcp_logs', 'mcp', 148, 58, 59, 'MCP_LOGS_TOPIC_VIEW', 'topic_logs', 'acl_m_,$id'),
(156, 1, 1, 'mcp_main', 'mcp', 143, 2, 3, 'MCP_MAIN_FRONT', 'front', ''),
(157, 1, 1, 'mcp_main', 'mcp', 143, 4, 5, 'MCP_MAIN_FORUM_VIEW', 'forum_view', 'acl_m_,$id'),
(158, 1, 1, 'mcp_main', 'mcp', 143, 6, 7, 'MCP_MAIN_TOPIC_VIEW', 'topic_view', 'acl_m_,$id'),
(159, 1, 1, 'mcp_main', 'mcp', 143, 8, 9, 'MCP_MAIN_POST_DETAILS', 'post_details', 'acl_m_,$id || (!$id && aclf_m_)'),
(160, 1, 1, 'mcp_notes', 'mcp', 146, 38, 39, 'MCP_NOTES_FRONT', 'front', ''),
(161, 1, 1, 'mcp_notes', 'mcp', 146, 40, 41, 'MCP_NOTES_USER', 'user_notes', ''),
(162, 1, 1, 'mcp_pm_reports', 'mcp', 145, 30, 31, 'MCP_PM_REPORTS_OPEN', 'pm_reports', 'acl_m_pm_report'),
(163, 1, 1, 'mcp_pm_reports', 'mcp', 145, 32, 33, 'MCP_PM_REPORTS_CLOSED', 'pm_reports_closed', 'acl_m_pm_report'),
(164, 1, 1, 'mcp_pm_reports', 'mcp', 145, 34, 35, 'MCP_PM_REPORT_DETAILS', 'pm_report_details', 'acl_m_pm_report'),
(165, 1, 1, 'mcp_queue', 'mcp', 144, 12, 13, 'MCP_QUEUE_UNAPPROVED_TOPICS', 'unapproved_topics', 'aclf_m_approve'),
(166, 1, 1, 'mcp_queue', 'mcp', 144, 14, 15, 'MCP_QUEUE_UNAPPROVED_POSTS', 'unapproved_posts', 'aclf_m_approve'),
(167, 1, 1, 'mcp_queue', 'mcp', 144, 16, 17, 'MCP_QUEUE_DELETED_TOPICS', 'deleted_topics', 'aclf_m_approve'),
(168, 1, 1, 'mcp_queue', 'mcp', 144, 18, 19, 'MCP_QUEUE_DELETED_POSTS', 'deleted_posts', 'aclf_m_approve'),
(169, 1, 1, 'mcp_queue', 'mcp', 144, 20, 21, 'MCP_QUEUE_APPROVE_DETAILS', 'approve_details', 'acl_m_approve,$id || (!$id && aclf_m_approve)'),
(170, 1, 1, 'mcp_reports', 'mcp', 145, 24, 25, 'MCP_REPORTS_OPEN', 'reports', 'aclf_m_report'),
(171, 1, 1, 'mcp_reports', 'mcp', 145, 26, 27, 'MCP_REPORTS_CLOSED', 'reports_closed', 'aclf_m_report'),
(172, 1, 1, 'mcp_reports', 'mcp', 145, 28, 29, 'MCP_REPORT_DETAILS', 'report_details', 'acl_m_report,$id || (!$id && aclf_m_report)'),
(173, 1, 1, 'mcp_warn', 'mcp', 147, 44, 45, 'MCP_WARN_FRONT', 'front', 'aclf_m_warn'),
(174, 1, 1, 'mcp_warn', 'mcp', 147, 46, 47, 'MCP_WARN_LIST', 'list', 'aclf_m_warn'),
(175, 1, 1, 'mcp_warn', 'mcp', 147, 48, 49, 'MCP_WARN_USER', 'warn_user', 'aclf_m_warn'),
(176, 1, 1, 'mcp_warn', 'mcp', 147, 50, 51, 'MCP_WARN_POST', 'warn_post', 'acl_m_warn && acl_f_read,$id'),
(177, 1, 1, '', 'ucp', 0, 1, 14, 'UCP_MAIN', '', ''),
(178, 1, 1, '', 'ucp', 0, 15, 28, 'UCP_PROFILE', '', ''),
(179, 1, 1, '', 'ucp', 0, 29, 38, 'UCP_PREFS', '', ''),
(180, 1, 1, 'ucp_pm', 'ucp', 0, 39, 48, 'UCP_PM', '', ''),
(181, 1, 1, '', 'ucp', 0, 49, 54, 'UCP_USERGROUPS', '', ''),
(182, 1, 1, '', 'ucp', 0, 55, 60, 'UCP_ZEBRA', '', ''),
(183, 1, 1, 'ucp_attachments', 'ucp', 177, 10, 11, 'UCP_MAIN_ATTACHMENTS', 'attachments', 'acl_u_attach'),
(184, 1, 1, 'ucp_auth_link', 'ucp', 178, 26, 27, 'UCP_AUTH_LINK_MANAGE', 'auth_link', 'authmethod_oauth'),
(185, 1, 1, 'ucp_groups', 'ucp', 181, 50, 51, 'UCP_USERGROUPS_MEMBER', 'membership', ''),
(186, 1, 1, 'ucp_groups', 'ucp', 181, 52, 53, 'UCP_USERGROUPS_MANAGE', 'manage', ''),
(187, 1, 1, 'ucp_main', 'ucp', 177, 2, 3, 'UCP_MAIN_FRONT', 'front', ''),
(188, 1, 1, 'ucp_main', 'ucp', 177, 4, 5, 'UCP_MAIN_SUBSCRIBED', 'subscribed', ''),
(189, 1, 1, 'ucp_main', 'ucp', 177, 6, 7, 'UCP_MAIN_BOOKMARKS', 'bookmarks', 'cfg_allow_bookmarks'),
(190, 1, 1, 'ucp_main', 'ucp', 177, 8, 9, 'UCP_MAIN_DRAFTS', 'drafts', ''),
(191, 1, 1, 'ucp_notifications', 'ucp', 179, 36, 37, 'UCP_NOTIFICATION_OPTIONS', 'notification_options', ''),
(192, 1, 1, 'ucp_notifications', 'ucp', 177, 12, 13, 'UCP_NOTIFICATION_LIST', 'notification_list', ''),
(193, 1, 0, 'ucp_pm', 'ucp', 180, 40, 41, 'UCP_PM_VIEW', 'view', 'cfg_allow_privmsg'),
(194, 1, 1, 'ucp_pm', 'ucp', 180, 42, 43, 'UCP_PM_COMPOSE', 'compose', 'cfg_allow_privmsg'),
(195, 1, 1, 'ucp_pm', 'ucp', 180, 44, 45, 'UCP_PM_DRAFTS', 'drafts', 'cfg_allow_privmsg'),
(196, 1, 1, 'ucp_pm', 'ucp', 180, 46, 47, 'UCP_PM_OPTIONS', 'options', 'cfg_allow_privmsg'),
(197, 1, 1, 'ucp_prefs', 'ucp', 179, 30, 31, 'UCP_PREFS_PERSONAL', 'personal', ''),
(198, 1, 1, 'ucp_prefs', 'ucp', 179, 32, 33, 'UCP_PREFS_POST', 'post', ''),
(199, 1, 1, 'ucp_prefs', 'ucp', 179, 34, 35, 'UCP_PREFS_VIEW', 'view', ''),
(200, 1, 1, 'ucp_profile', 'ucp', 178, 16, 17, 'UCP_PROFILE_PROFILE_INFO', 'profile_info', 'acl_u_chgprofileinfo'),
(201, 1, 1, 'ucp_profile', 'ucp', 178, 18, 19, 'UCP_PROFILE_SIGNATURE', 'signature', 'acl_u_sig'),
(202, 1, 1, 'ucp_profile', 'ucp', 178, 20, 21, 'UCP_PROFILE_AVATAR', 'avatar', 'cfg_allow_avatar'),
(203, 1, 1, 'ucp_profile', 'ucp', 178, 22, 23, 'UCP_PROFILE_REG_DETAILS', 'reg_details', ''),
(204, 1, 1, 'ucp_profile', 'ucp', 178, 24, 25, 'UCP_PROFILE_AUTOLOGIN_KEYS', 'autologin_keys', ''),
(205, 1, 1, 'ucp_zebra', 'ucp', 182, 56, 57, 'UCP_ZEBRA_FRIENDS', 'friends', ''),
(206, 1, 1, 'ucp_zebra', 'ucp', 182, 58, 59, 'UCP_ZEBRA_FOES', 'foes', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_notifications`
--

CREATE TABLE IF NOT EXISTS `phpbb_notifications` (
  `notification_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notification_type_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `item_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `item_parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `notification_read` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `notification_time` int(11) unsigned NOT NULL DEFAULT '1',
  `notification_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`notification_id`),
  KEY `item_ident` (`notification_type_id`,`item_id`),
  KEY `user` (`user_id`,`notification_read`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `phpbb_notifications`
--

INSERT INTO `phpbb_notifications` (`notification_id`, `notification_type_id`, `item_id`, `item_parent_id`, `user_id`, `notification_read`, `notification_time`, `notification_data`) VALUES
(1, 5, 7, 3, 2, 1, 1508804445, 0x613a363a7b733a393a22706f737465725f6964223b693a34383b733a31313a22746f7069635f7469746c65223b733a32303a2256656c6f63696461646520636f6e7374616e7465223b733a31323a22706f73745f7375626a656374223b733a32343a2252653a2056656c6f63696461646520636f6e7374616e7465223b733a31333a22706f73745f757365726e616d65223b733a303a22223b733a383a22666f72756d5f6964223b693a353b733a31303a22666f72756d5f6e616d65223b733a32383a22447576696461732047657261697320736f6272652046c3ad73696361223b7d);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_notification_types`
--

CREATE TABLE IF NOT EXISTS `phpbb_notification_types` (
  `notification_type_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `notification_type_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `notification_type_enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`notification_type_id`),
  UNIQUE KEY `type` (`notification_type_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `phpbb_notification_types`
--

INSERT INTO `phpbb_notification_types` (`notification_type_id`, `notification_type_name`, `notification_type_enabled`) VALUES
(1, 'notification.type.topic', 1),
(2, 'notification.type.approve_topic', 1),
(3, 'notification.type.quote', 1),
(4, 'notification.type.bookmark', 1),
(5, 'notification.type.post', 1),
(6, 'notification.type.approve_post', 1),
(7, 'notification.type.group_request', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_oauth_accounts`
--

CREATE TABLE IF NOT EXISTS `phpbb_oauth_accounts` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `provider` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `oauth_provider_id` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`,`provider`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_oauth_accounts`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_oauth_tokens`
--

CREATE TABLE IF NOT EXISTS `phpbb_oauth_tokens` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `provider` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `oauth_token` mediumtext COLLATE utf8_bin NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `provider` (`provider`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_oauth_tokens`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_poll_options`
--

CREATE TABLE IF NOT EXISTS `phpbb_poll_options` (
  `poll_option_id` tinyint(4) NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poll_option_text` text COLLATE utf8_bin NOT NULL,
  `poll_option_total` mediumint(8) unsigned NOT NULL DEFAULT '0',
  KEY `poll_opt_id` (`poll_option_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_poll_options`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_poll_votes`
--

CREATE TABLE IF NOT EXISTS `phpbb_poll_votes` (
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poll_option_id` tinyint(4) NOT NULL DEFAULT '0',
  `vote_user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `vote_user_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  KEY `topic_id` (`topic_id`),
  KEY `vote_user_id` (`vote_user_id`),
  KEY `vote_user_ip` (`vote_user_ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_poll_votes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_posts`
--

CREATE TABLE IF NOT EXISTS `phpbb_posts` (
  `post_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `icon_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poster_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_time` int(11) unsigned NOT NULL DEFAULT '0',
  `post_reported` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `enable_bbcode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_smilies` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_magic_url` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_sig` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `post_username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `post_text` mediumtext COLLATE utf8_bin NOT NULL,
  `post_checksum` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_attachment` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_postcount` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `post_edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `post_edit_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_edit_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `post_edit_count` smallint(4) unsigned NOT NULL DEFAULT '0',
  `post_edit_locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `post_visibility` tinyint(3) NOT NULL DEFAULT '0',
  `post_delete_time` int(11) unsigned NOT NULL DEFAULT '0',
  `post_delete_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_delete_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_ip` (`poster_ip`),
  KEY `poster_id` (`poster_id`),
  KEY `tid_post_time` (`topic_id`,`post_time`),
  KEY `post_username` (`post_username`),
  KEY `post_visibility` (`post_visibility`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `phpbb_posts`
--

INSERT INTO `phpbb_posts` (`post_id`, `topic_id`, `forum_id`, `poster_id`, `icon_id`, `poster_ip`, `post_time`, `post_reported`, `enable_bbcode`, `enable_smilies`, `enable_magic_url`, `enable_sig`, `post_username`, `post_subject`, `post_text`, `post_checksum`, `post_attachment`, `bbcode_bitfield`, `bbcode_uid`, `post_postcount`, `post_edit_time`, `post_edit_reason`, `post_edit_user`, `post_edit_count`, `post_edit_locked`, `post_visibility`, `post_delete_time`, `post_delete_reason`, `post_delete_user`) VALUES
(2, 2, 3, 2, 0, '127.0.0.1', 1508803558, 0, 1, 1, 1, 1, '', 'Olá', 0x4f6cc3a1, 'd88974e041697e460ab0d4abfed6a8c4', 0, '', '28li8mvu', 1, 0, '', 0, 0, 0, 1, 0, '', 0),
(3, 2, 3, 48, 0, '127.0.0.1', 1508803823, 0, 1, 1, 1, 1, '', 'Re: Olá', 0x4f6cc3a1, 'd88974e041697e460ab0d4abfed6a8c4', 0, '', '22yxwop3', 1, 0, '', 0, 0, 0, 1, 0, '', 0),
(4, 2, 3, 2, 0, '127.0.0.1', 1508804316, 0, 1, 1, 1, 1, '', 'Re: Olá', 0x446169, '2c27f527571abefdf54480d3f2e4295d', 0, '', '2b3s8fzi', 1, 0, '', 0, 0, 0, 1, 0, '', 0),
(5, 2, 3, 48, 0, '127.0.0.1', 1508804356, 0, 1, 1, 1, 1, '', 'Re: Olá', 0x5e5e, 'ea01662a5bcbe94a3236d555bbcb3da3', 0, '', 'mhpcefod', 1, 0, '', 0, 0, 0, 1, 0, '', 0),
(6, 3, 5, 2, 0, '127.0.0.1', 1508804413, 0, 1, 1, 1, 1, '', 'Velocidade constante', 0x436172726f203130306b6d, 'b140f2b676f5235412631d979b1999e2', 0, '', 'tyjetfa5', 1, 0, '', 0, 0, 0, 1, 0, '', 0),
(7, 3, 5, 48, 0, '127.0.0.1', 1508804445, 0, 1, 1, 1, 1, '', 'Re: Velocidade constante', 0x53696d, 'cbb5486e85a63cdc1a3539ad3b9d5d93', 0, '', '2hyczfwj', 1, 0, '', 0, 0, 0, 1, 0, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_privmsgs`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs` (
  `msg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `root_level` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `author_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `icon_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `author_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_time` int(11) unsigned NOT NULL DEFAULT '0',
  `enable_bbcode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_smilies` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_magic_url` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_sig` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `message_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_text` mediumtext COLLATE utf8_bin NOT NULL,
  `message_edit_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_edit_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message_attachment` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `message_edit_count` smallint(4) unsigned NOT NULL DEFAULT '0',
  `to_address` text COLLATE utf8_bin NOT NULL,
  `bcc_address` text COLLATE utf8_bin NOT NULL,
  `message_reported` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`),
  KEY `author_ip` (`author_ip`),
  KEY `message_time` (`message_time`),
  KEY `author_id` (`author_id`),
  KEY `root_level` (`root_level`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_privmsgs`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_privmsgs_folder`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs_folder` (
  `folder_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `folder_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pm_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`folder_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_privmsgs_folder`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_privmsgs_rules`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs_rules` (
  `rule_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_check` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_connection` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_string` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `rule_user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_folder_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rule_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_privmsgs_rules`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_privmsgs_to`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs_to` (
  `msg_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `author_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pm_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pm_new` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `pm_unread` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `pm_replied` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pm_marked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pm_forwarded` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `folder_id` int(11) NOT NULL DEFAULT '0',
  KEY `msg_id` (`msg_id`),
  KEY `author_id` (`author_id`),
  KEY `usr_flder_id` (`user_id`,`folder_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_privmsgs_to`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_profile_fields`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_fields` (
  `field_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `field_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_type` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_ident` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_length` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_minlen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_maxlen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_novalue` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_default_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_validation` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_required` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_on_reg` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_hide` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_no_view` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field_show_profile` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_on_vt` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_novalue` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_on_pm` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_on_ml` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_is_contact` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_contact_desc` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_contact_url` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`),
  KEY `fld_type` (`field_type`),
  KEY `fld_ordr` (`field_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `phpbb_profile_fields`
--

INSERT INTO `phpbb_profile_fields` (`field_id`, `field_name`, `field_type`, `field_ident`, `field_length`, `field_minlen`, `field_maxlen`, `field_novalue`, `field_default_value`, `field_validation`, `field_required`, `field_show_on_reg`, `field_hide`, `field_no_view`, `field_active`, `field_order`, `field_show_profile`, `field_show_on_vt`, `field_show_novalue`, `field_show_on_pm`, `field_show_on_ml`, `field_is_contact`, `field_contact_desc`, `field_contact_url`) VALUES
(1, 'phpbb_location', 'profilefields.type.string', 'phpbb_location', '20', '2', '100', '', '', '.*', 0, 0, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0, '', ''),
(2, 'phpbb_website', 'profilefields.type.url', 'phpbb_website', '40', '12', '255', '', '', '', 0, 0, 0, 0, 1, 2, 1, 1, 0, 1, 1, 1, 'VISIT_WEBSITE', '%s'),
(3, 'phpbb_interests', 'profilefields.type.text', 'phpbb_interests', '3|30', '2', '500', '', '', '.*', 0, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 0, '', ''),
(4, 'phpbb_occupation', 'profilefields.type.text', 'phpbb_occupation', '3|30', '2', '500', '', '', '.*', 0, 0, 0, 0, 0, 4, 1, 0, 0, 0, 0, 0, '', ''),
(5, 'phpbb_aol', 'profilefields.type.string', 'phpbb_aol', '40', '5', '255', '', '', '.*', 0, 0, 0, 0, 0, 5, 1, 1, 0, 1, 1, 1, '', ''),
(6, 'phpbb_icq', 'profilefields.type.string', 'phpbb_icq', '20', '3', '15', '', '', '[0-9]+', 0, 0, 0, 0, 0, 6, 1, 1, 0, 1, 1, 1, 'SEND_ICQ_MESSAGE', 'https://www.icq.com/people/%s/'),
(7, 'phpbb_wlm', 'profilefields.type.string', 'phpbb_wlm', '40', '5', '255', '', '', '.*', 0, 0, 0, 0, 0, 7, 1, 1, 0, 1, 1, 1, '', ''),
(8, 'phpbb_yahoo', 'profilefields.type.string', 'phpbb_yahoo', '40', '5', '255', '', '', '.*', 0, 0, 0, 0, 0, 8, 1, 1, 0, 1, 1, 1, 'SEND_YIM_MESSAGE', 'ymsgr:sendim?%s'),
(9, 'phpbb_facebook', 'profilefields.type.string', 'phpbb_facebook', '20', '5', '50', '', '', '[\\w.]+', 0, 0, 0, 0, 1, 9, 1, 1, 0, 1, 1, 1, 'VIEW_FACEBOOK_PROFILE', 'http://facebook.com/%s/'),
(10, 'phpbb_twitter', 'profilefields.type.string', 'phpbb_twitter', '20', '1', '15', '', '', '[\\w_]+', 0, 0, 0, 0, 1, 10, 1, 1, 0, 1, 1, 1, 'VIEW_TWITTER_PROFILE', 'http://twitter.com/%s'),
(11, 'phpbb_skype', 'profilefields.type.string', 'phpbb_skype', '20', '6', '32', '', '', '[a-zA-Z][\\w\\.,\\-_]+', 0, 0, 0, 0, 1, 11, 1, 1, 0, 1, 1, 1, 'VIEW_SKYPE_PROFILE', 'skype:%s?userinfo'),
(12, 'phpbb_youtube', 'profilefields.type.string', 'phpbb_youtube', '20', '3', '60', '', '', '[a-zA-Z][\\w\\.,\\-_]+', 0, 0, 0, 0, 1, 12, 1, 1, 0, 1, 1, 1, 'VIEW_YOUTUBE_CHANNEL', 'http://youtube.com/user/%s'),
(13, 'phpbb_googleplus', 'profilefields.type.googleplus', 'phpbb_googleplus', '20', '3', '255', '', '', '[\\w]+', 0, 0, 0, 0, 1, 13, 1, 1, 0, 1, 1, 1, 'VIEW_GOOGLEPLUS_PROFILE', 'http://plus.google.com/%s');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_profile_fields_data`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_fields_data` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pf_phpbb_interests` mediumtext COLLATE utf8_bin NOT NULL,
  `pf_phpbb_occupation` mediumtext COLLATE utf8_bin NOT NULL,
  `pf_phpbb_facebook` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_googleplus` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_icq` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_location` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_skype` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_twitter` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_website` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_wlm` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_yahoo` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_youtube` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pf_phpbb_aol` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_profile_fields_data`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_profile_fields_lang`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_fields_lang` (
  `field_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lang_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field_type` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`,`lang_id`,`option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_profile_fields_lang`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_profile_lang`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_lang` (
  `field_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lang_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lang_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_explain` text COLLATE utf8_bin NOT NULL,
  `lang_default_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`,`lang_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_profile_lang`
--

INSERT INTO `phpbb_profile_lang` (`field_id`, `lang_id`, `lang_name`, `lang_explain`, `lang_default_value`) VALUES
(1, 1, 'LOCATION', '', ''),
(1, 2, 'LOCATION', '', ''),
(2, 1, 'WEBSITE', '', ''),
(2, 2, 'WEBSITE', '', ''),
(3, 1, 'INTERESTS', '', ''),
(3, 2, 'INTERESTS', '', ''),
(4, 1, 'OCCUPATION', '', ''),
(4, 2, 'OCCUPATION', '', ''),
(5, 1, 'AOL', '', ''),
(5, 2, 'AOL', '', ''),
(6, 1, 'ICQ', '', ''),
(6, 2, 'ICQ', '', ''),
(7, 1, 'WLM', '', ''),
(7, 2, 'WLM', '', ''),
(8, 1, 'YAHOO', '', ''),
(8, 2, 'YAHOO', '', ''),
(9, 1, 'FACEBOOK', '', ''),
(9, 2, 'FACEBOOK', '', ''),
(10, 1, 'TWITTER', '', ''),
(10, 2, 'TWITTER', '', ''),
(11, 1, 'SKYPE', '', ''),
(11, 2, 'SKYPE', '', ''),
(12, 1, 'YOUTUBE', '', ''),
(12, 2, 'YOUTUBE', '', ''),
(13, 1, 'GOOGLEPLUS', '', ''),
(13, 2, 'GOOGLEPLUS', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_ranks`
--

CREATE TABLE IF NOT EXISTS `phpbb_ranks` (
  `rank_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `rank_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `rank_min` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rank_special` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `rank_image` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `phpbb_ranks`
--

INSERT INTO `phpbb_ranks` (`rank_id`, `rank_title`, `rank_min`, `rank_special`, `rank_image`) VALUES
(1, 'Administrador', 0, 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_reports`
--

CREATE TABLE IF NOT EXISTS `phpbb_reports` (
  `report_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `reason_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_notify` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `report_closed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `report_time` int(11) unsigned NOT NULL DEFAULT '0',
  `report_text` mediumtext COLLATE utf8_bin NOT NULL,
  `pm_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reported_post_enable_bbcode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `reported_post_enable_smilies` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `reported_post_enable_magic_url` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `reported_post_text` mediumtext COLLATE utf8_bin NOT NULL,
  `reported_post_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `reported_post_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`report_id`),
  KEY `post_id` (`post_id`),
  KEY `pm_id` (`pm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_reports`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_reports_reasons`
--

CREATE TABLE IF NOT EXISTS `phpbb_reports_reasons` (
  `reason_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `reason_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `reason_description` mediumtext COLLATE utf8_bin NOT NULL,
  `reason_order` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`reason_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `phpbb_reports_reasons`
--

INSERT INTO `phpbb_reports_reasons` (`reason_id`, `reason_title`, `reason_description`, `reason_order`) VALUES
(1, 'warez', 0x41206d656e736167656d2064656e756e636961646120706f7373756920656e64657265c3a76f7320696c6567616973206f7520736f667477617265732070697261746561646f732e, 1),
(2, 'spam', 0x41206d656e736167656d2064656e756e636961646120706f73737569206170656e6173206f2070726f70c3b37369746f20646520616e756e6369617220616c67756d206f7574726f2077656273697465206f752070726f6475746f2e, 2),
(3, 'off_topic', 0x41206d656e736167656d2064656e756e636961646120656e636f6e7472612d736520666f72612064652064697363757373c3a36f206e6f2074c3b37069636f2e, 3),
(4, 'other', 0x41206d656e736167656d2064656e756e6369616461206ec3a36f20736520656e636169786120656d207175616c71756572206f757472612063617465676f7269612e20506f72206661766f722c207574696c697a65206f2063616d706f20646520696e666f726d61c3a7c3b565732061646963696f6e6169732e, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_search_results`
--

CREATE TABLE IF NOT EXISTS `phpbb_search_results` (
  `search_key` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_time` int(11) unsigned NOT NULL DEFAULT '0',
  `search_keywords` mediumtext COLLATE utf8_bin NOT NULL,
  `search_authors` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`search_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_search_results`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_search_wordlist`
--

CREATE TABLE IF NOT EXISTS `phpbb_search_wordlist` (
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word_text` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `word_common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `word_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`word_id`),
  UNIQUE KEY `wrd_txt` (`word_text`),
  KEY `wrd_cnt` (`word_count`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=77 ;

--
-- Extraindo dados da tabela `phpbb_search_wordlist`
--

INSERT INTO `phpbb_search_wordlist` (`word_id`, `word_text`, `word_common`, `word_count`) VALUES
(1, 'esta', 0, 1),
(2, 'apenas', 0, 1),
(3, 'uma', 0, 1),
(4, 'mensagem', 0, 1),
(5, 'exemplo', 0, 1),
(6, 'sua', 0, 1),
(7, 'instalação', 0, 1),
(8, 'phpbb3', 0, 2),
(9, 'tudo', 0, 1),
(10, 'parece', 0, 1),
(11, 'estar', 0, 1),
(12, 'funcionando', 0, 1),
(13, 'normalmente', 0, 1),
(14, 'você', 0, 1),
(15, 'pode', 0, 1),
(16, 'excluir', 0, 1),
(17, 'desejar', 0, 1),
(18, 'continuar', 0, 1),
(19, 'configurar', 0, 1),
(20, 'seu', 0, 1),
(21, 'painel', 0, 1),
(22, 'durante', 0, 1),
(23, 'processo', 0, 1),
(24, 'primeira', 0, 1),
(25, 'categoria', 0, 1),
(26, 'primeiro', 0, 1),
(27, 'fórum', 0, 1),
(28, 'foram', 0, 1),
(29, 'assinalados', 0, 1),
(30, 'set', 0, 1),
(31, 'permissões', 0, 1),
(32, 'apropriado', 0, 1),
(33, 'aos', 0, 1),
(34, 'grupos', 0, 1),
(35, 'usuários', 0, 1),
(36, 'pré', 0, 1),
(37, 'definidos', 0, 1),
(38, 'como', 0, 1),
(39, 'administradores', 0, 1),
(40, 'bots', 0, 1),
(41, 'moderadores', 0, 1),
(42, 'globais', 0, 1),
(43, 'visitantes', 0, 1),
(44, 'registrados', 0, 1),
(45, 'coppa', 0, 1),
(46, 'optar', 0, 1),
(47, 'por', 0, 1),
(48, 'não', 0, 1),
(49, 'esqueça', 0, 1),
(50, 'atribuir', 0, 1),
(51, 'para', 0, 1),
(52, 'todos', 0, 1),
(53, 'estes', 0, 1),
(54, 'relação', 0, 1),
(55, 'todas', 0, 1),
(56, 'novas', 0, 1),
(57, 'categorias', 0, 1),
(58, 'fóruns', 0, 1),
(59, 'que', 0, 1),
(60, 'criar', 0, 1),
(61, 'recomendável', 0, 1),
(62, 'renomeie', 0, 1),
(63, 'copie', 0, 1),
(64, 'destes', 0, 1),
(65, 'enquanto', 0, 1),
(66, 'suas', 0, 1),
(67, 'divirta', 0, 1),
(68, 'bem', 0, 1),
(69, 'vindo', 0, 1),
(70, 'olá', 0, 6),
(71, 'dai', 0, 1),
(72, 'carro', 0, 1),
(73, '100km', 0, 1),
(74, 'velocidade', 0, 2),
(75, 'constante', 0, 2),
(76, 'sim', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_search_wordmatch`
--

CREATE TABLE IF NOT EXISTS `phpbb_search_wordmatch` (
  `post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `word_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title_match` tinyint(1) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `un_mtch` (`word_id`,`post_id`,`title_match`),
  KEY `word_id` (`word_id`),
  KEY `post_id` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_search_wordmatch`
--

INSERT INTO `phpbb_search_wordmatch` (`post_id`, `word_id`, `title_match`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(1, 7, 0),
(1, 8, 0),
(1, 8, 1),
(1, 9, 0),
(1, 10, 0),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 0),
(1, 24, 0),
(1, 25, 0),
(1, 26, 0),
(1, 27, 0),
(1, 28, 0),
(1, 29, 0),
(1, 30, 0),
(1, 31, 0),
(1, 32, 0),
(1, 33, 0),
(1, 34, 0),
(1, 35, 0),
(1, 36, 0),
(1, 37, 0),
(1, 38, 0),
(1, 39, 0),
(1, 40, 0),
(1, 41, 0),
(1, 42, 0),
(1, 43, 0),
(1, 44, 0),
(1, 45, 0),
(1, 46, 0),
(1, 47, 0),
(1, 48, 0),
(1, 49, 0),
(1, 50, 0),
(1, 51, 0),
(1, 52, 0),
(1, 53, 0),
(1, 54, 0),
(1, 55, 0),
(1, 56, 0),
(1, 57, 0),
(1, 58, 0),
(1, 59, 0),
(1, 60, 0),
(1, 61, 0),
(1, 62, 0),
(1, 63, 0),
(1, 64, 0),
(1, 65, 0),
(1, 66, 0),
(1, 67, 0),
(1, 68, 1),
(1, 69, 1),
(2, 70, 0),
(2, 70, 1),
(3, 70, 0),
(3, 70, 1),
(4, 70, 1),
(5, 70, 1),
(4, 71, 0),
(6, 72, 0),
(6, 73, 0),
(6, 74, 1),
(7, 74, 1),
(6, 75, 1),
(7, 75, 1),
(7, 76, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_sessions`
--

CREATE TABLE IF NOT EXISTS `phpbb_sessions` (
  `session_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_last_visit` int(11) unsigned NOT NULL DEFAULT '0',
  `session_start` int(11) unsigned NOT NULL DEFAULT '0',
  `session_time` int(11) unsigned NOT NULL DEFAULT '0',
  `session_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_browser` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_forwarded_for` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_page` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_viewonline` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `session_autologin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `session_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `session_forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`),
  KEY `session_time` (`session_time`),
  KEY `session_user_id` (`session_user_id`),
  KEY `session_fid` (`session_forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_sessions`
--

INSERT INTO `phpbb_sessions` (`session_id`, `session_user_id`, `session_last_visit`, `session_start`, `session_time`, `session_ip`, `session_browser`, `session_forwarded_for`, `session_page`, `session_viewonline`, `session_autologin`, `session_admin`, `session_forum_id`) VALUES
('eafb42c3d2f6363017405d96f5c23f89', 2, 1511291234, 1511307015, 1511307016, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36', '', 'index.php', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_sessions_keys`
--

CREATE TABLE IF NOT EXISTS `phpbb_sessions_keys` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`key_id`,`user_id`),
  KEY `last_login` (`last_login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_sessions_keys`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_sitelist`
--

CREATE TABLE IF NOT EXISTS `phpbb_sitelist` (
  `site_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `site_hostname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ip_exclude` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_sitelist`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_smilies`
--

CREATE TABLE IF NOT EXISTS `phpbb_smilies` (
  `smiley_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `emotion` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `smiley_url` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `smiley_width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `smiley_height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `smiley_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `display_on_posting` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`smiley_id`),
  KEY `display_on_post` (`display_on_posting`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=43 ;

--
-- Extraindo dados da tabela `phpbb_smilies`
--

INSERT INTO `phpbb_smilies` (`smiley_id`, `code`, `emotion`, `smiley_url`, `smiley_width`, `smiley_height`, `smiley_order`, `display_on_posting`) VALUES
(1, ':D', 'Muito Feliz', 'icon_e_biggrin.gif', 15, 17, 1, 1),
(2, ':-D', 'Muito Feliz', 'icon_e_biggrin.gif', 15, 17, 2, 1),
(3, ':grin:', 'Muito Feliz', 'icon_e_biggrin.gif', 15, 17, 3, 1),
(4, ':)', 'Sorridente', 'icon_e_smile.gif', 15, 17, 4, 1),
(5, ':-)', 'Sorridente', 'icon_e_smile.gif', 15, 17, 5, 1),
(6, ':smile:', 'Sorridente', 'icon_e_smile.gif', 15, 17, 6, 1),
(7, ';)', 'Piscar os olhos', 'icon_e_wink.gif', 15, 17, 7, 1),
(8, ';-)', 'Piscar os olhos', 'icon_e_wink.gif', 15, 17, 8, 1),
(9, ':wink:', 'Piscar os olhos', 'icon_e_wink.gif', 15, 17, 9, 1),
(10, ':(', 'Triste', 'icon_e_sad.gif', 15, 17, 10, 1),
(11, ':-(', 'Triste', 'icon_e_sad.gif', 15, 17, 11, 1),
(12, ':sad:', 'Triste', 'icon_e_sad.gif', 15, 17, 12, 1),
(13, ':o', 'Surpreso', 'icon_e_surprised.gif', 15, 17, 13, 1),
(14, ':-o', 'Surpreso', 'icon_e_surprised.gif', 15, 17, 14, 1),
(15, ':eek:', 'Surpreso', 'icon_e_surprised.gif', 15, 17, 15, 1),
(16, ':shock:', 'Chocado', 'icon_eek.gif', 15, 17, 16, 1),
(17, ':?', 'Confuso', 'icon_e_confused.gif', 15, 17, 17, 1),
(18, ':-?', 'Confuso', 'icon_e_confused.gif', 15, 17, 18, 1),
(19, ':???:', 'Confuso', 'icon_e_confused.gif', 15, 17, 19, 1),
(20, '8-)', 'Cool', 'icon_cool.gif', 15, 17, 20, 1),
(21, ':cool:', 'Cool', 'icon_cool.gif', 15, 17, 21, 1),
(22, ':lol:', 'Laughing', 'icon_lol.gif', 15, 17, 22, 1),
(23, ':x', 'Nervoso', 'icon_mad.gif', 15, 17, 23, 1),
(24, ':-x', 'Nervoso', 'icon_mad.gif', 15, 17, 24, 1),
(25, ':mad:', 'Nervoso', 'icon_mad.gif', 15, 17, 25, 1),
(26, ':P', 'Razz', 'icon_razz.gif', 15, 17, 26, 1),
(27, ':-P', 'Razz', 'icon_razz.gif', 15, 17, 27, 1),
(28, ':razz:', 'Razz', 'icon_razz.gif', 15, 17, 28, 1),
(29, ':oops:', 'Envergonhado', 'icon_redface.gif', 15, 17, 29, 1),
(30, ':cry:', 'Chorando ou Muito Triste', 'icon_cry.gif', 15, 17, 30, 1),
(31, ':evil:', 'Mal ou Muito Nervoso', 'icon_evil.gif', 15, 17, 31, 1),
(32, ':twisted:', 'Twisted Evil', 'icon_twisted.gif', 15, 17, 32, 1),
(33, ':roll:', 'Virando os olhos', 'icon_rolleyes.gif', 15, 17, 33, 1),
(34, ':!:', 'Exclamação', 'icon_exclaim.gif', 15, 17, 34, 1),
(35, ':?:', 'Questão', 'icon_question.gif', 15, 17, 35, 1),
(36, ':idea:', 'Idea', 'icon_idea.gif', 15, 17, 36, 1),
(37, ':arrow:', 'Seta', 'icon_arrow.gif', 15, 17, 37, 1),
(38, ':|', 'Neutro', 'icon_neutral.gif', 15, 17, 38, 1),
(39, ':-|', 'Neutro', 'icon_neutral.gif', 15, 17, 39, 1),
(40, ':mrgreen:', 'Mr. Green', 'icon_mrgreen.gif', 15, 17, 40, 1),
(41, ':geek:', 'Geek', 'icon_e_geek.gif', 17, 17, 41, 1),
(42, ':ugeek:', 'Uber Geek', 'icon_e_ugeek.gif', 17, 18, 42, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_styles`
--

CREATE TABLE IF NOT EXISTS `phpbb_styles` (
  `style_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `style_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `style_copyright` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `style_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `style_path` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'kNg=',
  `style_parent_id` int(4) unsigned NOT NULL DEFAULT '0',
  `style_parent_tree` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`style_id`),
  UNIQUE KEY `style_name` (`style_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `phpbb_styles`
--

INSERT INTO `phpbb_styles` (`style_id`, `style_name`, `style_copyright`, `style_active`, `style_path`, `bbcode_bitfield`, `style_parent_id`, `style_parent_tree`) VALUES
(1, 'prosilver', '&copy; phpBB Limited', 0, 'prosilver', 'kNg=', 0, ''),
(2, 'we_clearblue', '© INVENTEA', 1, 'we_clearblue', '+Ng=', 1, 0x70726f73696c766572);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_teampage`
--

CREATE TABLE IF NOT EXISTS `phpbb_teampage` (
  `teampage_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `teampage_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `teampage_position` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `teampage_parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`teampage_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `phpbb_teampage`
--

INSERT INTO `phpbb_teampage` (`teampage_id`, `group_id`, `teampage_name`, `teampage_position`, `teampage_parent`) VALUES
(1, 5, '', 1, 0),
(2, 4, '', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_topics`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics` (
  `topic_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `icon_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_attachment` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `topic_reported` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `topic_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `topic_poster` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_time` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_time_limit` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_status` tinyint(3) NOT NULL DEFAULT '0',
  `topic_type` tinyint(3) NOT NULL DEFAULT '0',
  `topic_first_post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_first_poster_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `topic_first_poster_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_last_poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_last_poster_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_poster_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_post_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_post_time` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_last_view_time` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_moved_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_bumped` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `topic_bumper` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poll_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `poll_start` int(11) unsigned NOT NULL DEFAULT '0',
  `poll_length` int(11) unsigned NOT NULL DEFAULT '0',
  `poll_max_options` tinyint(4) NOT NULL DEFAULT '1',
  `poll_last_vote` int(11) unsigned NOT NULL DEFAULT '0',
  `poll_vote_change` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `topic_visibility` tinyint(3) NOT NULL DEFAULT '0',
  `topic_delete_time` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_delete_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_delete_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_posts_approved` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_posts_unapproved` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_posts_softdeleted` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`topic_id`),
  KEY `forum_id` (`forum_id`),
  KEY `forum_id_type` (`forum_id`,`topic_type`),
  KEY `last_post_time` (`topic_last_post_time`),
  KEY `fid_time_moved` (`forum_id`,`topic_last_post_time`,`topic_moved_id`),
  KEY `topic_visibility` (`topic_visibility`),
  KEY `forum_vis_last` (`forum_id`,`topic_visibility`,`topic_last_post_id`),
  KEY `latest_topics` (`forum_id`,`topic_last_post_time`,`topic_last_post_id`,`topic_moved_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `phpbb_topics`
--

INSERT INTO `phpbb_topics` (`topic_id`, `forum_id`, `icon_id`, `topic_attachment`, `topic_reported`, `topic_title`, `topic_poster`, `topic_time`, `topic_time_limit`, `topic_views`, `topic_status`, `topic_type`, `topic_first_post_id`, `topic_first_poster_name`, `topic_first_poster_colour`, `topic_last_post_id`, `topic_last_poster_id`, `topic_last_poster_name`, `topic_last_poster_colour`, `topic_last_post_subject`, `topic_last_post_time`, `topic_last_view_time`, `topic_moved_id`, `topic_bumped`, `topic_bumper`, `poll_title`, `poll_start`, `poll_length`, `poll_max_options`, `poll_last_vote`, `poll_vote_change`, `topic_visibility`, `topic_delete_time`, `topic_delete_reason`, `topic_delete_user`, `topic_posts_approved`, `topic_posts_unapproved`, `topic_posts_softdeleted`) VALUES
(2, 3, 0, 0, 0, 'Olá', 2, 1508803558, 0, 8, 0, 0, 2, 'vinicius', 'AA0000', 5, 48, 'viniciussmelo', '', 'Re: Olá', 1508804356, 1508804356, 0, 0, 0, '', 0, 0, 1, 0, 0, 1, 0, '', 0, 4, 0, 0),
(3, 5, 0, 0, 0, 'Velocidade constante', 2, 1508804413, 0, 3, 0, 0, 6, 'vinicius', 'AA0000', 7, 48, 'viniciussmelo', '', 'Re: Velocidade constante', 1508804445, 1508804468, 0, 0, 0, '', 0, 0, 1, 0, 0, 1, 0, '', 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_topics_posted`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics_posted` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_posted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_topics_posted`
--

INSERT INTO `phpbb_topics_posted` (`user_id`, `topic_id`, `topic_posted`) VALUES
(2, 1, 1),
(2, 2, 1),
(48, 2, 1),
(2, 3, 1),
(48, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_topics_track`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics_track` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mark_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`topic_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_topics_track`
--

INSERT INTO `phpbb_topics_track` (`user_id`, `topic_id`, `forum_id`, `mark_time`) VALUES
(2, 2, 3, 1508804316),
(48, 2, 3, 1508804356),
(48, 3, 5, 1508804445);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_topics_watch`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics_watch` (
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `notify_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_stat` (`notify_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_topics_watch`
--

INSERT INTO `phpbb_topics_watch` (`topic_id`, `user_id`, `notify_status`) VALUES
(3, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_users`
--

CREATE TABLE IF NOT EXISTS `phpbb_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(2) NOT NULL DEFAULT '0',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '3',
  `user_permissions` mediumtext COLLATE utf8_bin NOT NULL,
  `user_perm_from` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_regdate` int(11) unsigned NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `username_clean` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_password` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_passchg` int(11) unsigned NOT NULL DEFAULT '0',
  `user_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_email_hash` bigint(20) NOT NULL DEFAULT '0',
  `user_birthday` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_lastvisit` int(11) unsigned NOT NULL DEFAULT '0',
  `user_lastmark` int(11) unsigned NOT NULL DEFAULT '0',
  `user_lastpost_time` int(11) unsigned NOT NULL DEFAULT '0',
  `user_lastpage` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_last_confirm_key` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_last_search` int(11) unsigned NOT NULL DEFAULT '0',
  `user_warnings` tinyint(4) NOT NULL DEFAULT '0',
  `user_last_warning` int(11) unsigned NOT NULL DEFAULT '0',
  `user_login_attempts` tinyint(4) NOT NULL DEFAULT '0',
  `user_inactive_reason` tinyint(2) NOT NULL DEFAULT '0',
  `user_inactive_time` int(11) unsigned NOT NULL DEFAULT '0',
  `user_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_lang` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_timezone` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_dateformat` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT 'd M Y H:i',
  `user_style` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_rank` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_new_privmsg` int(4) NOT NULL DEFAULT '0',
  `user_unread_privmsg` int(4) NOT NULL DEFAULT '0',
  `user_last_privmsg` int(11) unsigned NOT NULL DEFAULT '0',
  `user_message_rules` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_full_folder` int(11) NOT NULL DEFAULT '-3',
  `user_emailtime` int(11) unsigned NOT NULL DEFAULT '0',
  `user_topic_show_days` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_topic_sortby_type` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 't',
  `user_topic_sortby_dir` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'd',
  `user_post_show_days` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_post_sortby_type` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 't',
  `user_post_sortby_dir` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'a',
  `user_notify` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_notify_pm` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_notify_type` tinyint(4) NOT NULL DEFAULT '0',
  `user_allow_pm` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_allow_viewonline` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_allow_viewemail` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_allow_massemail` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_options` int(11) unsigned NOT NULL DEFAULT '230271',
  `user_avatar` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_avatar_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_avatar_width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_avatar_height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_sig` mediumtext COLLATE utf8_bin NOT NULL,
  `user_sig_bbcode_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_sig_bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_jabber` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_actkey` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_newpasswd` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_form_salt` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_new` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_reminded` tinyint(4) NOT NULL DEFAULT '0',
  `user_reminded_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username_clean` (`username_clean`),
  KEY `user_birthday` (`user_birthday`),
  KEY `user_email_hash` (`user_email_hash`),
  KEY `user_type` (`user_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=49 ;

--
-- Extraindo dados da tabela `phpbb_users`
--

INSERT INTO `phpbb_users` (`user_id`, `user_type`, `group_id`, `user_permissions`, `user_perm_from`, `user_ip`, `user_regdate`, `username`, `username_clean`, `user_password`, `user_passchg`, `user_email`, `user_email_hash`, `user_birthday`, `user_lastvisit`, `user_lastmark`, `user_lastpost_time`, `user_lastpage`, `user_last_confirm_key`, `user_last_search`, `user_warnings`, `user_last_warning`, `user_login_attempts`, `user_inactive_reason`, `user_inactive_time`, `user_posts`, `user_lang`, `user_timezone`, `user_dateformat`, `user_style`, `user_rank`, `user_colour`, `user_new_privmsg`, `user_unread_privmsg`, `user_last_privmsg`, `user_message_rules`, `user_full_folder`, `user_emailtime`, `user_topic_show_days`, `user_topic_sortby_type`, `user_topic_sortby_dir`, `user_post_show_days`, `user_post_sortby_type`, `user_post_sortby_dir`, `user_notify`, `user_notify_pm`, `user_notify_type`, `user_allow_pm`, `user_allow_viewonline`, `user_allow_viewemail`, `user_allow_massemail`, `user_options`, `user_avatar`, `user_avatar_type`, `user_avatar_width`, `user_avatar_height`, `user_sig`, `user_sig_bbcode_uid`, `user_sig_bbcode_bitfield`, `user_jabber`, `user_actkey`, `user_newpasswd`, `user_form_salt`, `user_new`, `user_reminded`, `user_reminded_time`) VALUES
(1, 2, 1, 0x3030303030303030303030673133796471380a0a0a3030303030303030303030300a0a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a3030303030303030303030300a0a303030303030303030303030, 0, '', 1508801464, 'Anonymous', 'anonymous', '$2a$10$nNLNLQVvAzlUXoj4N5KRfeYo/gyRak2FxlPINDEi8E2/7P5WWTrq6', 0, '', 0, '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', '', 'd M Y H:i', 2, 0, '', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '8dd15792079287e2', 1, 0, 0),
(2, 3, 5, 0x7a696b307a6a7a696b307a6a7a696b307a670a0a0a7a696b307a6a3030303030300a0a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a7a696b307a6a3030303030300a0a7a696b307a6a303030303030, 0, '127.0.0.1', 1508801464, 'vinicius', 'vinicius', '$2a$10$38i4q3EYhrMnNxfTXgYuMOvC8dSPIMyCbFRR3k9tLfKxZ/XDqPvKe', 0, 'viniciusspmelo@gmail.com', 15189406124, '', 1511291234, 0, 1508804413, 'index.php', '', 0, 0, 0, 0, 0, 0, 3, 'pt_br', 'America/Sao_Paulo', 'd/M/Y, H:i', 2, 1, 'AA0000', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 1, 230271, '', '', 0, 0, '', '', '', '', '', '', '6b029f2d90c69954', 0, 0, 0),
(3, 2, 6, '', 0, '', 1508801476, 'AdsBot [Google]', 'adsbot [google]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '5ee2bf25e3b7baaa', 0, 0, 0),
(4, 2, 6, '', 0, '', 1508801476, 'Alexa [Bot]', 'alexa [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '58af3b85f9939eb9', 0, 0, 0),
(5, 2, 6, '', 0, '', 1508801476, 'Alta Vista [Bot]', 'alta vista [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '84c21215c69af59a', 0, 0, 0),
(6, 2, 6, '', 0, '', 1508801476, 'Ask Jeeves [Bot]', 'ask jeeves [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'df4a01150864f68b', 0, 0, 0),
(7, 2, 6, '', 0, '', 1508801476, 'Baidu [Spider]', 'baidu [spider]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'd7b8f63937507712', 0, 0, 0),
(8, 2, 6, '', 0, '', 1508801476, 'Bing [Bot]', 'bing [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '9406e6cb509aa1ef', 0, 0, 0),
(9, 2, 6, '', 0, '', 1508801476, 'Exabot [Bot]', 'exabot [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'b342945b333cfb32', 0, 0, 0),
(10, 2, 6, '', 0, '', 1508801476, 'FAST Enterprise [Crawler]', 'fast enterprise [crawler]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '99ffbc4f3e1b9274', 0, 0, 0),
(11, 2, 6, '', 0, '', 1508801476, 'FAST WebCrawler [Crawler]', 'fast webcrawler [crawler]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '411bb508b2d2cda5', 0, 0, 0),
(12, 2, 6, '', 0, '', 1508801476, 'Francis [Bot]', 'francis [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'e3e2c8d28fc1fb34', 0, 0, 0),
(13, 2, 6, '', 0, '', 1508801476, 'Gigabot [Bot]', 'gigabot [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'a9e7f4384c37ec20', 0, 0, 0),
(14, 2, 6, '', 0, '', 1508801476, 'Google Adsense [Bot]', 'google adsense [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'fcd1a4a914e46c96', 0, 0, 0),
(15, 2, 6, '', 0, '', 1508801476, 'Google Desktop', 'google desktop', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '5ac96a4757233d07', 0, 0, 0),
(16, 2, 6, '', 0, '', 1508801476, 'Google Feedfetcher', 'google feedfetcher', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '80e2471b568d2212', 0, 0, 0),
(17, 2, 6, '', 0, '', 1508801476, 'Google [Bot]', 'google [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'f7575bd0dffb9053', 0, 0, 0),
(18, 2, 6, '', 0, '', 1508801476, 'Heise IT-Markt [Crawler]', 'heise it-markt [crawler]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '5c8d346b971d054f', 0, 0, 0),
(19, 2, 6, '', 0, '', 1508801476, 'Heritrix [Crawler]', 'heritrix [crawler]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'd3c24fb4dde910a6', 0, 0, 0),
(20, 2, 6, '', 0, '', 1508801476, 'IBM Research [Bot]', 'ibm research [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '8d8a3218b26de7bf', 0, 0, 0),
(21, 2, 6, '', 0, '', 1508801476, 'ICCrawler - ICjobs', 'iccrawler - icjobs', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'a56dc64737942481', 0, 0, 0),
(22, 2, 6, '', 0, '', 1508801476, 'ichiro [Crawler]', 'ichiro [crawler]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'f3dbb70139ae593c', 0, 0, 0),
(23, 2, 6, '', 0, '', 1508801476, 'Majestic-12 [Bot]', 'majestic-12 [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '77b255e42a13b411', 0, 0, 0),
(24, 2, 6, '', 0, '', 1508801476, 'Metager [Bot]', 'metager [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '97f56e1da5fa59f0', 0, 0, 0),
(25, 2, 6, '', 0, '', 1508801476, 'MSN NewsBlogs', 'msn newsblogs', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'e72ab906b6264b5d', 0, 0, 0),
(26, 2, 6, '', 0, '', 1508801476, 'MSN [Bot]', 'msn [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '1ede2cf51b3d5494', 0, 0, 0),
(27, 2, 6, '', 0, '', 1508801476, 'MSNbot Media', 'msnbot media', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'c05358c7c1449b59', 0, 0, 0),
(28, 2, 6, '', 0, '', 1508801476, 'Nutch [Bot]', 'nutch [bot]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'd8b11e272bbfebb6', 0, 0, 0),
(29, 2, 6, '', 0, '', 1508801476, 'Online link [Validator]', 'online link [validator]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'c0285cef08368730', 0, 0, 0),
(30, 2, 6, '', 0, '', 1508801476, 'psbot [Picsearch]', 'psbot [picsearch]', '', 1508801476, '', 0, '', 0, 1508801476, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '82ac88ab83c2b02d', 0, 0, 0),
(31, 2, 6, '', 0, '', 1508801477, 'Sensis [Crawler]', 'sensis [crawler]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '66aa44ac4758b35b', 0, 0, 0),
(32, 2, 6, '', 0, '', 1508801477, 'SEO Crawler', 'seo crawler', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '6ef9e88fe5cb6600', 0, 0, 0),
(33, 2, 6, '', 0, '', 1508801477, 'Seoma [Crawler]', 'seoma [crawler]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'eb31997d0169a62c', 0, 0, 0),
(34, 2, 6, '', 0, '', 1508801477, 'SEOSearch [Crawler]', 'seosearch [crawler]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'e7a22e78ad38a43e', 0, 0, 0),
(35, 2, 6, '', 0, '', 1508801477, 'Snappy [Bot]', 'snappy [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', 'fdc27df640e79994', 0, 0, 0),
(36, 2, 6, '', 0, '', 1508801477, 'Steeler [Crawler]', 'steeler [crawler]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '6be038e5a066112d', 0, 0, 0),
(37, 2, 6, '', 0, '', 1508801477, 'Telekom [Bot]', 'telekom [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '1d8ffb338c299c13', 0, 0, 0),
(38, 2, 6, '', 0, '', 1508801477, 'TurnitinBot [Bot]', 'turnitinbot [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '5efaed85879e71fa', 0, 0, 0),
(39, 2, 6, '', 0, '', 1508801477, 'Voyager [Bot]', 'voyager [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '2494b7e2a8030c92', 0, 0, 0),
(40, 2, 6, '', 0, '', 1508801477, 'W3 [Sitesearch]', 'w3 [sitesearch]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '7da278b66ea388dd', 0, 0, 0),
(41, 2, 6, '', 0, '', 1508801477, 'W3C [Linkcheck]', 'w3c [linkcheck]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '521c0785759b2167', 0, 0, 0),
(42, 2, 6, '', 0, '', 1508801477, 'W3C [Validator]', 'w3c [validator]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '1a8f11ece7e3721c', 0, 0, 0),
(43, 2, 6, '', 0, '', 1508801477, 'YaCy [Bot]', 'yacy [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '26689121bdad86b7', 0, 0, 0),
(44, 2, 6, '', 0, '', 1508801477, 'Yahoo MMCrawler [Bot]', 'yahoo mmcrawler [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '854816ce66c4060a', 0, 0, 0),
(45, 2, 6, '', 0, '', 1508801477, 'Yahoo Slurp [Bot]', 'yahoo slurp [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '3c9d52ee42613ca5', 0, 0, 0),
(46, 2, 6, '', 0, '', 1508801477, 'Yahoo [Bot]', 'yahoo [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '1e281478cfbbc955', 0, 0, 0),
(47, 2, 6, '', 0, '', 1508801477, 'YahooSeeker [Bot]', 'yahooseeker [bot]', '', 1508801477, '', 0, '', 0, 1508801477, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'pt_br', 'UTC', 'd/M/Y, H:i', 0, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 0, 1, 1, 0, 230271, '', '', 0, 0, '', '', '', '', '', '', '35eb829eba2aecc9', 0, 0, 0),
(48, 0, 2, 0x303030303030303030303076386c6d6378670a0a0a716c63747a723030303030300a0a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a716c63747a723030303030300a0a716c63747a72303030303030, 0, '127.0.0.1', 1508803650, 'viniciussmelo', 'viniciussmelo', '$2a$10$Lid8jRG/OVmy/bpnFKrzye5SpXYpI1b5cM5ZRRWiLSL8RiYVsgMWS', 1508803650, 'vinicius-smelo@hotmail.com', 225303115526, '', 1508804446, 1508803650, 1508804445, '', '', 0, 0, 0, 3, 0, 0, 3, 'pt_br', 'America/Godthab', 'D/M/A', 2, 0, '', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 1, 230271, '', '', 0, 0, '', '', '', '', '', '', '08b769ea613f9f44', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_user_group`
--

CREATE TABLE IF NOT EXISTS `phpbb_user_group` (
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_leader` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_pending` tinyint(1) unsigned NOT NULL DEFAULT '1',
  KEY `group_id` (`group_id`),
  KEY `user_id` (`user_id`),
  KEY `group_leader` (`group_leader`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_user_group`
--

INSERT INTO `phpbb_user_group` (`group_id`, `user_id`, `group_leader`, `user_pending`) VALUES
(1, 1, 0, 0),
(2, 2, 0, 0),
(4, 2, 0, 0),
(5, 2, 1, 0),
(6, 3, 0, 0),
(6, 4, 0, 0),
(6, 5, 0, 0),
(6, 6, 0, 0),
(6, 7, 0, 0),
(6, 8, 0, 0),
(6, 9, 0, 0),
(6, 10, 0, 0),
(6, 11, 0, 0),
(6, 12, 0, 0),
(6, 13, 0, 0),
(6, 14, 0, 0),
(6, 15, 0, 0),
(6, 16, 0, 0),
(6, 17, 0, 0),
(6, 18, 0, 0),
(6, 19, 0, 0),
(6, 20, 0, 0),
(6, 21, 0, 0),
(6, 22, 0, 0),
(6, 23, 0, 0),
(6, 24, 0, 0),
(6, 25, 0, 0),
(6, 26, 0, 0),
(6, 27, 0, 0),
(6, 28, 0, 0),
(6, 29, 0, 0),
(6, 30, 0, 0),
(6, 31, 0, 0),
(6, 32, 0, 0),
(6, 33, 0, 0),
(6, 34, 0, 0),
(6, 35, 0, 0),
(6, 36, 0, 0),
(6, 37, 0, 0),
(6, 38, 0, 0),
(6, 39, 0, 0),
(6, 40, 0, 0),
(6, 41, 0, 0),
(6, 42, 0, 0),
(6, 43, 0, 0),
(6, 44, 0, 0),
(6, 45, 0, 0),
(6, 46, 0, 0),
(6, 47, 0, 0),
(2, 48, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_user_notifications`
--

CREATE TABLE IF NOT EXISTS `phpbb_user_notifications` (
  `item_type` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `item_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `method` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `notify` tinyint(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_user_notifications`
--

INSERT INTO `phpbb_user_notifications` (`item_type`, `item_id`, `user_id`, `method`, `notify`) VALUES
('notification.type.post', 0, 2, '', 1),
('notification.type.post', 0, 2, 'notification.method.email', 1),
('notification.type.topic', 0, 2, '', 1),
('notification.type.topic', 0, 2, 'notification.method.email', 1),
('notification.type.post', 0, 3, '', 1),
('notification.type.post', 0, 3, 'notification.method.email', 1),
('notification.type.topic', 0, 3, '', 1),
('notification.type.topic', 0, 3, 'notification.method.email', 1),
('notification.type.post', 0, 4, '', 1),
('notification.type.post', 0, 4, 'notification.method.email', 1),
('notification.type.topic', 0, 4, '', 1),
('notification.type.topic', 0, 4, 'notification.method.email', 1),
('notification.type.post', 0, 5, '', 1),
('notification.type.post', 0, 5, 'notification.method.email', 1),
('notification.type.topic', 0, 5, '', 1),
('notification.type.topic', 0, 5, 'notification.method.email', 1),
('notification.type.post', 0, 6, '', 1),
('notification.type.post', 0, 6, 'notification.method.email', 1),
('notification.type.topic', 0, 6, '', 1),
('notification.type.topic', 0, 6, 'notification.method.email', 1),
('notification.type.post', 0, 7, '', 1),
('notification.type.post', 0, 7, 'notification.method.email', 1),
('notification.type.topic', 0, 7, '', 1),
('notification.type.topic', 0, 7, 'notification.method.email', 1),
('notification.type.post', 0, 8, '', 1),
('notification.type.post', 0, 8, 'notification.method.email', 1),
('notification.type.topic', 0, 8, '', 1),
('notification.type.topic', 0, 8, 'notification.method.email', 1),
('notification.type.post', 0, 9, '', 1),
('notification.type.post', 0, 9, 'notification.method.email', 1),
('notification.type.topic', 0, 9, '', 1),
('notification.type.topic', 0, 9, 'notification.method.email', 1),
('notification.type.post', 0, 10, '', 1),
('notification.type.post', 0, 10, 'notification.method.email', 1),
('notification.type.topic', 0, 10, '', 1),
('notification.type.topic', 0, 10, 'notification.method.email', 1),
('notification.type.post', 0, 11, '', 1),
('notification.type.post', 0, 11, 'notification.method.email', 1),
('notification.type.topic', 0, 11, '', 1),
('notification.type.topic', 0, 11, 'notification.method.email', 1),
('notification.type.post', 0, 12, '', 1),
('notification.type.post', 0, 12, 'notification.method.email', 1),
('notification.type.topic', 0, 12, '', 1),
('notification.type.topic', 0, 12, 'notification.method.email', 1),
('notification.type.post', 0, 13, '', 1),
('notification.type.post', 0, 13, 'notification.method.email', 1),
('notification.type.topic', 0, 13, '', 1),
('notification.type.topic', 0, 13, 'notification.method.email', 1),
('notification.type.post', 0, 14, '', 1),
('notification.type.post', 0, 14, 'notification.method.email', 1),
('notification.type.topic', 0, 14, '', 1),
('notification.type.topic', 0, 14, 'notification.method.email', 1),
('notification.type.post', 0, 15, '', 1),
('notification.type.post', 0, 15, 'notification.method.email', 1),
('notification.type.topic', 0, 15, '', 1),
('notification.type.topic', 0, 15, 'notification.method.email', 1),
('notification.type.post', 0, 16, '', 1),
('notification.type.post', 0, 16, 'notification.method.email', 1),
('notification.type.topic', 0, 16, '', 1),
('notification.type.topic', 0, 16, 'notification.method.email', 1),
('notification.type.post', 0, 17, '', 1),
('notification.type.post', 0, 17, 'notification.method.email', 1),
('notification.type.topic', 0, 17, '', 1),
('notification.type.topic', 0, 17, 'notification.method.email', 1),
('notification.type.post', 0, 18, '', 1),
('notification.type.post', 0, 18, 'notification.method.email', 1),
('notification.type.topic', 0, 18, '', 1),
('notification.type.topic', 0, 18, 'notification.method.email', 1),
('notification.type.post', 0, 19, '', 1),
('notification.type.post', 0, 19, 'notification.method.email', 1),
('notification.type.topic', 0, 19, '', 1),
('notification.type.topic', 0, 19, 'notification.method.email', 1),
('notification.type.post', 0, 20, '', 1),
('notification.type.post', 0, 20, 'notification.method.email', 1),
('notification.type.topic', 0, 20, '', 1),
('notification.type.topic', 0, 20, 'notification.method.email', 1),
('notification.type.post', 0, 21, '', 1),
('notification.type.post', 0, 21, 'notification.method.email', 1),
('notification.type.topic', 0, 21, '', 1),
('notification.type.topic', 0, 21, 'notification.method.email', 1),
('notification.type.post', 0, 22, '', 1),
('notification.type.post', 0, 22, 'notification.method.email', 1),
('notification.type.topic', 0, 22, '', 1),
('notification.type.topic', 0, 22, 'notification.method.email', 1),
('notification.type.post', 0, 23, '', 1),
('notification.type.post', 0, 23, 'notification.method.email', 1),
('notification.type.topic', 0, 23, '', 1),
('notification.type.topic', 0, 23, 'notification.method.email', 1),
('notification.type.post', 0, 24, '', 1),
('notification.type.post', 0, 24, 'notification.method.email', 1),
('notification.type.topic', 0, 24, '', 1),
('notification.type.topic', 0, 24, 'notification.method.email', 1),
('notification.type.post', 0, 25, '', 1),
('notification.type.post', 0, 25, 'notification.method.email', 1),
('notification.type.topic', 0, 25, '', 1),
('notification.type.topic', 0, 25, 'notification.method.email', 1),
('notification.type.post', 0, 26, '', 1),
('notification.type.post', 0, 26, 'notification.method.email', 1),
('notification.type.topic', 0, 26, '', 1),
('notification.type.topic', 0, 26, 'notification.method.email', 1),
('notification.type.post', 0, 27, '', 1),
('notification.type.post', 0, 27, 'notification.method.email', 1),
('notification.type.topic', 0, 27, '', 1),
('notification.type.topic', 0, 27, 'notification.method.email', 1),
('notification.type.post', 0, 28, '', 1),
('notification.type.post', 0, 28, 'notification.method.email', 1),
('notification.type.topic', 0, 28, '', 1),
('notification.type.topic', 0, 28, 'notification.method.email', 1),
('notification.type.post', 0, 29, '', 1),
('notification.type.post', 0, 29, 'notification.method.email', 1),
('notification.type.topic', 0, 29, '', 1),
('notification.type.topic', 0, 29, 'notification.method.email', 1),
('notification.type.post', 0, 30, '', 1),
('notification.type.post', 0, 30, 'notification.method.email', 1),
('notification.type.topic', 0, 30, '', 1),
('notification.type.topic', 0, 30, 'notification.method.email', 1),
('notification.type.post', 0, 31, '', 1),
('notification.type.post', 0, 31, 'notification.method.email', 1),
('notification.type.topic', 0, 31, '', 1),
('notification.type.topic', 0, 31, 'notification.method.email', 1),
('notification.type.post', 0, 32, '', 1),
('notification.type.post', 0, 32, 'notification.method.email', 1),
('notification.type.topic', 0, 32, '', 1),
('notification.type.topic', 0, 32, 'notification.method.email', 1),
('notification.type.post', 0, 33, '', 1),
('notification.type.post', 0, 33, 'notification.method.email', 1),
('notification.type.topic', 0, 33, '', 1),
('notification.type.topic', 0, 33, 'notification.method.email', 1),
('notification.type.post', 0, 34, '', 1),
('notification.type.post', 0, 34, 'notification.method.email', 1),
('notification.type.topic', 0, 34, '', 1),
('notification.type.topic', 0, 34, 'notification.method.email', 1),
('notification.type.post', 0, 35, '', 1),
('notification.type.post', 0, 35, 'notification.method.email', 1),
('notification.type.topic', 0, 35, '', 1),
('notification.type.topic', 0, 35, 'notification.method.email', 1),
('notification.type.post', 0, 36, '', 1),
('notification.type.post', 0, 36, 'notification.method.email', 1),
('notification.type.topic', 0, 36, '', 1),
('notification.type.topic', 0, 36, 'notification.method.email', 1),
('notification.type.post', 0, 37, '', 1),
('notification.type.post', 0, 37, 'notification.method.email', 1),
('notification.type.topic', 0, 37, '', 1),
('notification.type.topic', 0, 37, 'notification.method.email', 1),
('notification.type.post', 0, 38, '', 1),
('notification.type.post', 0, 38, 'notification.method.email', 1),
('notification.type.topic', 0, 38, '', 1),
('notification.type.topic', 0, 38, 'notification.method.email', 1),
('notification.type.post', 0, 39, '', 1),
('notification.type.post', 0, 39, 'notification.method.email', 1),
('notification.type.topic', 0, 39, '', 1),
('notification.type.topic', 0, 39, 'notification.method.email', 1),
('notification.type.post', 0, 40, '', 1),
('notification.type.post', 0, 40, 'notification.method.email', 1),
('notification.type.topic', 0, 40, '', 1),
('notification.type.topic', 0, 40, 'notification.method.email', 1),
('notification.type.post', 0, 41, '', 1),
('notification.type.post', 0, 41, 'notification.method.email', 1),
('notification.type.topic', 0, 41, '', 1),
('notification.type.topic', 0, 41, 'notification.method.email', 1),
('notification.type.post', 0, 42, '', 1),
('notification.type.post', 0, 42, 'notification.method.email', 1),
('notification.type.topic', 0, 42, '', 1),
('notification.type.topic', 0, 42, 'notification.method.email', 1),
('notification.type.post', 0, 43, '', 1),
('notification.type.post', 0, 43, 'notification.method.email', 1),
('notification.type.topic', 0, 43, '', 1),
('notification.type.topic', 0, 43, 'notification.method.email', 1),
('notification.type.post', 0, 44, '', 1),
('notification.type.post', 0, 44, 'notification.method.email', 1),
('notification.type.topic', 0, 44, '', 1),
('notification.type.topic', 0, 44, 'notification.method.email', 1),
('notification.type.post', 0, 45, '', 1),
('notification.type.post', 0, 45, 'notification.method.email', 1),
('notification.type.topic', 0, 45, '', 1),
('notification.type.topic', 0, 45, 'notification.method.email', 1),
('notification.type.post', 0, 46, '', 1),
('notification.type.post', 0, 46, 'notification.method.email', 1),
('notification.type.topic', 0, 46, '', 1),
('notification.type.topic', 0, 46, 'notification.method.email', 1),
('notification.type.post', 0, 47, '', 1),
('notification.type.post', 0, 47, 'notification.method.email', 1),
('notification.type.topic', 0, 47, '', 1),
('notification.type.topic', 0, 47, 'notification.method.email', 1),
('notification.type.post', 0, 48, '', 1),
('notification.type.post', 0, 48, 'notification.method.email', 1),
('notification.type.topic', 0, 48, '', 1),
('notification.type.topic', 0, 48, 'notification.method.email', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_warnings`
--

CREATE TABLE IF NOT EXISTS `phpbb_warnings` (
  `warning_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `log_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `warning_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`warning_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_warnings`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_words`
--

CREATE TABLE IF NOT EXISTS `phpbb_words` (
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `replacement` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`word_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `phpbb_words`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `phpbb_zebra`
--

CREATE TABLE IF NOT EXISTS `phpbb_zebra` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `zebra_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `friend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `foe` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`zebra_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `phpbb_zebra`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `idQuestao` int(11) NOT NULL AUTO_INCREMENT,
  `idSimulado` int(11) NOT NULL,
  `questao` varchar(300) NOT NULL,
  PRIMARY KEY (`idQuestao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`idQuestao`, `idSimulado`, `questao`) VALUES
(1, 1, 'Qual o resultado da conta: 1x0+2²-4x0'),
(2, 1, 'Qual a formula criada por pitagoras?'),
(3, 1, 'Um aluno prestou vestibular em apenas duas Universidades. Suponha que, em uma delas, a probabilidade de que ele seja aprovado é de 30%, enquanto na outra, pelo fato de a prova ter sido mais fácil, a probabilidade de sua aprovação sobe para 40%. Nessas condições, a probabilidade deque esse aluno seja'),
(4, 1, 'Quatro moedas são lançadas simultaneamente. Qual é a probabilidade de ocorrer coroa em uma só moeda?'),
(5, 2, 'Indique o prefixo grego que indica posição inferior:'),
(6, 2, 'Neste período: "Talvez os diretores antevejam uma solução para o caso", indique o modo e o tempo do verbo.'),
(7, 2, 'Indique a alternativa que contenha o verbo "querer" conjugado na primeira pessoal do singular do futuro do presente (indicativo).'),
(8, 2, 'Nem sempre nós ................... (ir - pretérito imperfeito do indicativo) lá com vontade."Indique a conjugação correta.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `idResultado` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProva` varchar(40) NOT NULL,
  `materiaProva` varchar(40) NOT NULL,
  `usuario` varchar(11) NOT NULL,
  `emailUsuario` varchar(200) NOT NULL,
  `acertosUsuario` int(2) NOT NULL,
  `errosUsuario` int(2) NOT NULL,
  `porcentagemDeAcertosUsuario` int(2) NOT NULL,
  `data` varchar(10) NOT NULL,
  PRIMARY KEY (`idResultado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `resultados`
--

INSERT INTO `resultados` (`idResultado`, `nomeProva`, `materiaProva`, `usuario`, `emailUsuario`, `acertosUsuario`, `errosUsuario`, `porcentagemDeAcertosUsuario`, `data`) VALUES
(7, 'prova de matematica', 'analise combinatoria', 'Professor', 'vinicius-smelo@hotmail.com', 2, 8, 20, '12/11/2017'),
(8, 'prova de matematica', 'analise combinatoria', 'Aluno', 'vinicius-smelo@hotmail.com', 0, 10, 0, '12/11/2017'),
(9, 'prova de matematica', 'potenciacao', 'Professor', '', 3, 7, 30, '21/11/2017'),
(10, 'prova de matematica', 'potenciacao', 'Professor', '', 3, 7, 30, '21/11/2017');
