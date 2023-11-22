
    <link rel="stylesheet" href="style.css">

<?php
if($_COOKIE['select'] == 'tecnologia')
{
    $array = [
        [
            "titulo" => "Inteligência Artificial traz debate sobre avanços e consequências da tecnologia",
            "materia" => "IA é um segmento de pesquisa da ciência da computação que visa criar dispositivos capazes de simular capacidades dos seres humanos, com base em símbolos computacionais. Os primeiros estudos da área se deram nos anos 50, com os cientistas Hebert Simon e Allen Newell, criadores do primeiro laboratório de inteligência artificial na Universidade de Carnegie Mellon, nos Estados Unidos."
        ],
        [
            "titulo" => "Câncer de mama: diferença de tecnologia entre o SUS e a rede privada pode ser uma questão de vida ou morte",
            "materia" => "A demora para conseguir o diagnóstico e iniciar o tratamento, a diferença de tecnologia disponível no SUS e no sistema privado e a baixa cobertura mamográfica são desafios que a saúde pública brasileira precisa enfrentar."
        ],
        [
            "titulo" => "Musk, Zuckerberg e Bill Gates: por que os bilionários da tecnologia estão perdendo dinheiro em 2023",
            "materia" => "Pandemia, guerra na Ucrânia e alta na taxa de juros global afetaram o lucro das empresas de tecnologia e, por consequência, a fortuna de executivos do setor."
        ]
        ];
        $num = rand(0, 2);
    echo "<h1>" . $array[$num]['titulo'] . "</h1>";
    echo "<h4>" . $array[$num]['materia'] . "</h4>";
    
};
if($_COOKIE['select'] == 'esportes')
{
    $array = [
        [
            "titulo" => "Balneário Camboriú investe em esporte e tem atletas medalhistas no Pan Americano",
            "materia" => "O estímulo ao esporte acontece através da Fundação Municipal de Esportes (FME), que atua desde março de 1992. Entre os principais objetivos da organização, está o fomento das práticas esportivas formais e não formais, e a proposta de atividades esportivas na cidade. Assim, é possível facilitar o acesso de toda a população às políticas públicas destinadas à prática esportiva, contribuindo com a saúde, educação e o bem-estar da comunidade."
        ],
        [
            "titulo" => "Além da sala de aulas: A importância dos esportes nas escolas",
            "materia" => "A prática regular de esportes nas escolas é essencial para o desenvolvimento físico dos estudantes. Além de combater o sedentarismo, os esportes promovem a coordenação motora, fortalecem músculos e ossos, e contribuem para a prevenção de diversas doenças relacionadas ao estilo de vida. O esporte é uma ferramenta poderosa para promover a socialização e o trabalho em equipe. Ao participar de atividades esportivas, os estudantes aprendem a colaborar, a respeitar as diferenças e a desenvolver habilidades de comunicação. Essas são competências fundamentais para o convívio social e para o ambiente profissional no futuro."
        ],
        [
            "titulo" => "O esporte também é de excelência no Colégio Jean Piaget",
            "materia" => "O Colégio Jean Piaget foi o vice-campeão geral dos Jogos Estudantis de Angra dos Reis – JEAR, e foi o campeão disparado entre as escolas particulares. O Colégio disputou a maioria das modalidades, conquistando, ao todo, 10 medalhas: sendo 6 de ouro, duas de prata e duas de bronze. Os times femininos de Vôlei e Basquete foram imbatíveis. O Handebol masculino venceu de forma espetacular."
        ]
        ];
        $num = rand(0, 2);
    echo "<h1>" . $array[$num]['titulo'] . "</h1>";
    echo "<h4>" . $array[$num]['materia'] . "</h4>";
    
};
if($_COOKIE['select'] == 'entretenimento')
{
    $array = [
        [
            "titulo" => "Paróquia vai proporcionar dia de lazer e cidadania a 270 famílias carentes de Rio Branco neste domingo (19)",
            "materia" => "Ação marca o Dia Mundial dos Pobres, data escolhida pelo Papa Francisco para chamar atenção à solidariedade e apoio. Programação contará com atividades de entretenimento, corte de cabelo e atendimento médico."
        ],
        [
            "titulo" => "Cooperativismo em destaque na dramaturgia brasileira",
            "materia" => "As novelas são um meio de entretenimento enraizado na sociedade brasileira. Mais do que cativar a atenção e conquistar quem assiste, seus autores, elenco e emissora buscam, muitas vezes, retratar narrativas baseadas em realidades e situações que façam o telespectador refletir e repensar suas atitudes. São inúmeros os exemplos. A dramaturgia brasileira, por exemplo, trabalha com pautas relevantes e traz vários temas que envolvem o dia a dia da sociedade. Entre os principais temas, a força do agronegócio e a importância do cooperativismo para o desenvolvimento de uma região estão fortes no momento."
        ],
        [
            "titulo" => "Agenda: confira opções de eventos nesta terceira semana de outubro em Sergipe",
            "materia" => "A cantora Sandyalê se apresenta nesta quinta-feira (19), às 19h, no Museu da Gente Sergipana. A artista vai se apresentar no palco do Quintas da Gente."
        ]
        ];
        $num = rand(0, 2);
    echo "<h1>" . $array[$num]['titulo'] . "</h1>";
    echo "<h4>" . $array[$num]['materia'] . "</h4>";
    
};
if($_COOKIE['select'] == 'politica')
{
    $array = [
        [
            "titulo" => "Guarujá abre inscrições para compor Conselho da Comunidade Negra; veja como participar",
            "materia" => "O Conselho Municipal de Desenvolvimento e Participação da Comunidade Negra de Guarujá, no litoral de São Paulo, está com inscrições abertas para novos membros. Ao todo, são 22 vagas para compor a entidade no biênio 2023/2025."
        ],
        [
            "titulo" => "Família que Acolhe completa 10 anos como referência em política de primeira infância",
            "materia" => "Com o tema “Família que Acolhe 10 anos, eu faço parte dessa história!”, a Prefeitura de Boa Vista promoveu nesta segunda-feira, 25, na sede do programa, um evento especial para celebrar uma década de vidas transformadas. Um dos pontos altos da programação foi o anúncio do Bebê Prefeito 2023. Quem levou o título foi a pequena Maria Helena, de 7 meses, selecionada com base em diversos critérios voltados a saúde."
        ],
        [
            "titulo" => "Javier Milei moderou discurso e se voltou para a casta política para se eleger presidente argentino",
            "materia" => "Venceu o louco, como o libertário midiático de extrema direita Javier Milei é conhecido, para governar uma Argentina imersa em hiperinflação e pobreza. A ampla e inesperada vantagem nas urnas refletiu a obstinação do eleitor, desencantado com os governos peronistas predominantes em 16 dos últimos 20 anos, mas com uma certeza: não se deixou seduzir pelo apelo do medo, propagado pelo adversário Sergio Massa para frear a sua ascensão."
        ]
        ];
        $num = rand(0, 2);
    echo "<h1>" . $array[$num]['titulo'] . "</h1>";
    echo "<h4>" . $array[$num]['materia'] . "</h4>";
    
};
if($_COOKIE['select'] == 'ciencias')
{
    $array = [
        [
            "titulo" => "Centro de Ciências Tecnológicas da Unifor realiza acolhida para novos alunos",
            "materia" => "O Centro de Ciências Tecnológicas (CCT) promoverá no dia 30 de agosto a acolhida aos alunos ingressantes no semestre 2022.2. O evento será realizado no Teatro Celina Queiroz, às 7h30, e tem como objetivo acolher os alunos recém-ingressos, bem como fomentar o espírito de pertencimento ao Centro, o engajamento dos discentes entre si e a dinâmica da Universidade."
        ],
        [
            "titulo" => "IFSertãoPE realiza programação da Semana Nacional de Ciência e Tecnologia em Salgueiro",
            "materia" => "O IFSertãoPE, Campus Salgueiro, no Sertão de Pernambuco, está com uma programação em alusão a Semana Nacional de Ciência e Tecnologia. O evento começa nesta terça-feira (21) e segue até a quarta-feira (22) com apresentações culturais, palestras, minicursos e mostras de iniciação científica."
        ],
        [
            "titulo" => "Símbolo nazista é desenhado em sala de aula no Centro de Ciências Jurídicas da UFSC",
            "materia" => "O desenho de uma suástica nazista foi encontrado em uma cadeira dentro da sala de aula no Centro de Ciências Jurídicas (CCJ) da Universidade Federal de Santa Catarina (UFSC), em Florianópolis. A coordenação da instituição, que comunicou o crime à Polícia Civil, informou que imagens são procuradas para tentar identificar um ou mais autores."
        ]
        ];
        $num = rand(0, 2);
    echo "<h1>" . $array[$num]['titulo'] . "</h1>";
    echo "<h4>" . $array[$num]['materia'] . "</h4>";
    
};
if($_COOKIE['select'] == 'saude')
{
    $array = [
        [
            "titulo" => "Conviver bem na velhice: Como os relacionamentos afetam a saúde",
            "materia" => "A pesquisa acompanhou mais de 7 mil mulheres por duas décadas e constatou que aquelas que tinham níveis mais baixos de satisfação nos relacionamentos apresentaram maior risco de desenvolver doenças cardiovasculares, diabetes, hipertensão, asma, osteoporose, depressão e ansiedade."
        ],
        [
            "titulo" => "Frota de ambulância e veículos da Saúde passa por alterações em Marília",
            "materia" => "A Central de Ambulância de Marília (SP) e o Serviço de Frota de Saúde da cidade passarão a operar em outro endereço a partir desta segunda-feira (20). A alteração fará com que os telefones comumente usados pelos moradores para agendarem os serviços fiquem indisponível."
        ],
        [
            "titulo" => "O que é a Saúde 4.0 e quais são os benefícios para a gestão do SST?",
            "materia" => "O avanço no desenvolvimento da tecnologia e a velocidade do consumo de informação que impactaram a indústria no início do século XXI, agora oferecem à área da saúde uma nova abordagem para a melhoria das práticas globais."
        ]
        ];
        $num = rand(0, 2);
    echo "<h1>" . $array[$num]['titulo'] . "</h1>";
    echo "<h4>" . $array[$num]['materia'] . "</h4>";
    
};