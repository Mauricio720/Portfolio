type Tecnologies={
    icon:string,
    title:string,
    alt:string
};

type Pictures={
    src:string,
    isMobile:boolean
};

type GitHub={
    title:string,
    url:string
}

type DataProject={
    projectName:string,
    target:string,
    category:string,
    title:string,
    tecnologies:Tecnologies[],
    pictures:Pictures[],
    description:string,
    github:GitHub[]
}

let data:DataProject[]=[
    {
        projectName:'Fotografia',
        target:"fotografia",
        category:'Site',
        title:'Galeria de fotos e CMS',
        tecnologies:[
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg',
                title:'HTML',
                alt:"HTML"
            },
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg',
                title:'CSS',
                alt:"CSS"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg',
                title:'JQuery',
                alt:"JQuery"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg',
                title:'Laravel',
                alt:"Laravel"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                title:'PHP',
                alt:"PHP"
            },
        ],
        pictures:[
            {src:'public/images/site_fotografia/fotografia.jpeg',isMobile:false},
            {src:'public/images/site_fotografia/fotografia2.jpeg',isMobile:false},
            {src:'public/images/site_fotografia/fotografia3.jpeg',isMobile:false},
            {src:'public/images/site_fotografia/fotografia4.jpeg',isMobile:false},
            {src:'public/images/site_fotografia/fotografia5.jpeg',isMobile:false},
            {src:'public/images/site_fotografia/fotografia6.jpeg',isMobile:false},
        ],
        description:`Site para divulgação do trabalho de um fotografo junto com um CMS integrado.
        Esse site foi iniciado o desenvolvimento em junho de 2020. Escolhi o laravel para desenvolver por conta da sua praticidade 
        e para colocar em prática meus conhecimentos em cima do framework. Utilizando os recursos 
        ja dísponiveis e usando também da criatividade para pode criar o layout do jeito que o 
        cliente gostaria.
        `,
        github:[
            {
                title:'Galeria de fotos e CMS',
                url:'https://github.com/Mauricio720/SiteFotografia'
            }
        ]
    },
    
    {
        projectName:'Imobiliaria',
        target:"imobiliaria",
        category:'Sistema',
        title:'Sistema Imobiliaria',
        tecnologies:[
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg',
                title:'HTML',
                alt:"HTML"
            },
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg',
                title:'CSS',
                alt:"CSS"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg',
                title:'JQuery',
                alt:"JQuery"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg',
                title:'Laravel',
                alt:"Laravel"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                title:'PHP',
                alt:"PHP"
            },
        ],
        pictures:[
            {src:'public/images/imobiliaria/imobiliaria2.jpeg',isMobile:false},
            {src:'public/images/imobiliaria/imobiliaria3.jpeg',isMobile:false},
            {src:'public/images/imobiliaria/imobiliaria4.jpeg',isMobile:false},
            {src:'public/images/imobiliaria/imobiliaria5.jpeg',isMobile:false},
        ],
        description:`Sistema de gerenciamento completo para uma imobiliária do Paraná Gênesis Urbana. 
            O sistema teve seu desenvolvimento feito em laravel 8, usando o template no front Admin LTE. 
            O sistema tem como objetivo gerenciar completamente as atividades da Imobiliaria Genesis Urbana: 
            seus clientes, as vendas feitas por ele, as parcelas pagas ou atrasadas, um gerador de boletos automatizado
             e alguns gerenciamentos administrativos internos da empresa. Além de ações feitas por contatos para mudanças
            de status em cada contrato, cancelamentos, mudança de lote, mudança de vencimento. Escolhi o laravel novamente por seus 
            inúmeros recursos e ao lado de uma biblioteca que integrava o laravel ao Admin Lte, 
            tive poucas preocupações em relação ao front. Mas claro sempre tendo uma certa liberdade para dar um toque a mais, para o sistema ficar completo.`,
        github:[
            {
                title:'Sistema Imobiliaria',
                url:'https://github.com/Mauricio720/SistemaImobiliaria-GenesisUrbana'
            }
        ]
    },

    {
        projectName:'Tarefas',
        target:"tarefas",
        category:'Sistema',
        title:'Sistema de Tarefas',
        tecnologies:[
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg',
                title:'React',
                alt:"React"
            },
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg',
                title:'React Native',
                alt:"React Native"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg',
                title:'Laravel',
                alt:"Laravel"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                title:'PHP',
                alt:"PHP"
            },
        ],
        pictures:[
            {src:'public/images/tarefas/tarefas.jpeg',isMobile:false},
            {src:'public/images/tarefas/tarefas2.jpeg',isMobile:false},
            {src:'public/images/tarefas/tarefas3.jpeg',isMobile:false},
            {src:'public/images/tarefas/tarefas4.jpeg',isMobile:false},
            {src:'public/images/tarefas/tarefas5.jpeg',isMobile:false},
            {src:'public/images/tarefas/tarefas6.png',isMobile:true},
            {src:'public/images/tarefas/tarefas7.png',isMobile:true},
            {src:'public/images/tarefas/tarefas8.png',isMobile:true},
        ],
        description:`O objetivo desse projeto foi treinar o React e foi de extrema ajuda, 
        ja que foi um projeto simples mas ao mesmo tempo desafiador em alguns momentos. 
        Desenvolvi uma api em laravel para usar no projeto  e tive a experiência de desenvolver 
        projetos separados do front e o back. Recentemente desenvolvi também aplicativo nativo 
        em react native desse mesmo projeto.`,
        github:[
            {
                title:'Frontend',
                url:'https://github.com/Mauricio720/TarefasApp-Front',
            },
            
            {
                title:'Backend',
                url:'https://github.com/Mauricio720/TarefasApp-Api',
                
            },

            {
                title:'Aplicativo',
                url:'https://github.com/Mauricio720/TarefasApp-Mobile',
            },
        ]
    },

    {
        projectName:'Endoquiz',
        target:"endoquiz",
        category:'Sistema',
        title:'Endoquiz Api/Painel',
        tecnologies:[
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg',
                title:'HTML',
                alt:"HTML"
            },
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg',
                title:'CSS',
                alt:"CSS"
            },
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg',
                title:'Javascript',
                alt:"Javascript"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg',
                title:'Laravel',
                alt:"Laravel"
            },
            {
                icon:'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                title:'PHP',
                alt:"PHP"
            },
        ],
        pictures:[
            {src:'public/images/endoquiz/endoquiz3.jpeg',isMobile:false},
            {src:'public/images/endoquiz/endoquiz4.jpeg',isMobile:false},
            {src:'public/images/endoquiz/endoquiz5.jpeg',isMobile:false},
            {src:'public/images/endoquiz/endoquiz6.jpeg',isMobile:false},
            {src:'public/images/endoquiz/endoquiz2.jpeg',isMobile:false},
            {src:'public/images/endoquiz/endoquiz.jpeg',isMobile:false},
            
        ],
        description:`Foi desenvolvido uma API junto com um painel administrativo para uma 
            aplicação de criação de simulados para provas de endocrinologia. A tecnologia utilizada
            foi o laravel que tem a capacidade de criar um projeto com front-end utilizando o blade 
            (que é o painel administrativo) e api que é consumida pela aplicação de simulado 
            desenvolvida em react http://app.endoquiz.com.br.`,
        github:[
            {
                title:'Endoquiz',
                url:'https://github.com/Mauricio720/painelEndoquizApi'
            }
            
        ]
    },

    {
        projectName:'Processo Agil App',
        target:"processoAgil",
        category:'Aplicativo',
        title:'Processo Agil App',
        tecnologies:[
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg',
                title:'React Native',
                alt:"React Native"
            },
        ],
        pictures:[
            {src:'public/images/processoAgil/processo.png',isMobile:true},
            {src:'public/images/processoAgil/processo2.png',isMobile:true},
            {src:'public/images/processoAgil/processo3.png',isMobile:true},
            {src:'public/images/processoAgil/processo4.png',isMobile:true},
        ],
        description:`Aplicativo desenvolvido para uma empresa de advogacia focado
             na filtragens de processos dos seus clientes.`,
        github:[
            {
                title:'Processo Agil App',
                url:'https://github.com/Mauricio720/Processo-Agil-App'
            }
        ]
    },

    {
        projectName:'BM Cereais',
        target:"bmcereais",
        category:'Site',
        title:'BM Cereais Site',
        tecnologies:[
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg',
                title:'HTML',
                alt:"HTML"
            },
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg',
                title:'CSS',
                alt:"CSS"
            },
            {
                icon:'https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg',
                title:'Javascript',
                alt:"Javascript"
            },
        ],
        pictures:[
            {src:'public/images/bmcereais/bm.jpeg',isMobile:false},
            {src:'public/images/bmcereais/bm2.jpeg',isMobile:false},
            {src:'public/images/bmcereais/bm3.jpeg',isMobile:false},
            {src:'public/images/bmcereais/bm4.jpeg',isMobile:false},
        ],
        description:`Site institucional para a empresa de cereais especializada em comercialização de cereais.`,
        github:[
            {
                title:'BM Cereais',
                url:'https://github.com/Mauricio720/Bm-Cereais'
            }
        ]
    },

];