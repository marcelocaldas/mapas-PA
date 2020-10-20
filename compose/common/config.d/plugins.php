<?php
return [
    'plugins' => [
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
        
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'AldirBlanc' => [
            'namespace' => 'AldirBlanc',
            'config' => [
                'project_id' => 3,
                'inciso2_default' => (array) json_decode('{"avatar":"aldirblanc-para.png","seal":2,"shortDescription":"Benef\u00edcio para auxiliar espa\u00e7os e organiza\u00e7\u00f5es culturais a manter suas atividades durante o isolamento social ocasionado pela pandemia covid-19 - orientada pela Lei Aldir Blanc (Lei n\u00ba 14.017)."}'),
                'inciso2' => 
                [
                    (object) ["owner" => 1, "city" => "Conceição do Araguaia"],
                    (object) ["owner" => 1, "city" => "Igarapé-Miri"],
                    (object) ["owner" => 1, "city" => "Abel Figueired"],
                    (object) ["owner" => 1, "city" => "Acará"],
                    (object) ["owner" => 1, "city" => "Augusto Correa"],
                    (object) ["owner" => 1, "city" => "Bragança"],
                    (object) ["owner" => 1, "city" => "Breu Branco"],
                    (object) ["owner" => 1, "city" => "Capitação Poço"],
                    (object) ["owner" => 1, "city" => "Castanhal"],
                    (object) ["owner" => 1, "city" => "Ananindeua"],
                    (object) ["owner" => 1, "city" => "Bagre"],
                    (object) ["owner" => 1, "city" => "Baião"],
                    (object) ["owner" => 1, "city" => "Barcarena"],
                    (object) ["owner" => 1, "city" => "Capanema"],
                    (object) ["owner" => 1, "city" => "Colares"],
                    (object) ["owner" => 1, "city" => "Curuçá"],
                    (object) ["owner" => 1, "city" => "Medicilândia"],
                    (object) ["owner" => 1, "city" => "Melgaço"],
                    (object) ["owner" => 1, "city" => "Nova Ipixuna"],
                    (object) ["owner" => 1, "city" => "Ourém"],
                    (object) ["owner" => 1, "city" => "Pacajá"],
                    (object) ["owner" => 1, "city" => "Paragominas"],
                    (object) ["owner" => 1, "city" => "Placas"],
                    (object) ["owner" => 1, "city" => "Sapucaia"],
                    (object) ["owner" => 1, "city" => "Viseu"],
                    (object) ["owner" => 1, "city" => "Garrafão do Norte"],
                    (object) ["owner" => 1, "city" => "Igarapé-Açu"],
                    (object) ["owner" => 1, "city" => "Jacareacanga"],
                    (object) ["owner" => 1, "city" => "Juruti"],
                    (object) ["owner" => 1, "city" => "Limoeiro do Ajuru"],
                    (object) ["owner" => 1, "city" => "Mãe do Rio"],
                    (object) ["owner" => 1, "city" => "Magalhães Barata"],
                    (object) ["owner" => 1, "city" => "Marabá"],
                    (object) ["owner" => 1, "city" => "Mojuí dos Campos"],
                    (object) ["owner" => 1, "city" => "Monte Alegre"],
                    (object) ["owner" => 1, "city" => "Muaná"],
                    (object) ["owner" => 1, "city" => "Nova Esperança do Piriá"],
                    (object) ["owner" => 1, "city" => "Palestina do Pará"],
                    (object) ["owner" => 1, "city" => "Pau D\'Arco"],
                    (object) ["owner" => 1, "city" => "Peixe-Boi"],
                    (object) ["owner" => 1, "city" => "Piçarra"],
                    (object) ["owner" => 1, "city" => "Ponta de Pedras"],
                    (object) ["owner" => 1, "city" => "Porto de Moz"],
                    (object) ["owner" => 1, "city" => "Rio Maria"],
                    (object) ["owner" => 1, "city" => "Santarém"],
                    (object) ["owner" => 1, "city" => "São Domingos do Araguaia Pará"],
                    (object) ["owner" => 1, "city" => "São Domingos do Capim"],
                    (object) ["owner" => 1, "city" => "São Felix do Xingu"],
                    (object) ["owner" => 1, "city" => "São Francisco do Pará"],
                    (object) ["owner" => 1, "city" => "São Miguel do Guamá"],
                    (object) ["owner" => 1, "city" => "São Sebastião da Boa Vista"],
                    (object) ["owner" => 1, "city" => "Terra Alta"],
                    (object) ["owner" => 1, "city" => "Tomé-Açu"],
                    (object) ["owner" => 1, "city" => "Tracuateua"],
                    (object) ["owner" => 1, "city" => "Trairão"],
                    (object) ["owner" => 1, "city" => "Ulianópolis"],
                    (object) ["owner" => 1, "city" => "Floresta do Araguaia"],
                    (object) ["owner" => 1, "city" => "Tucumã"],
                    (object) ["owner" => 1, "city" => "Xinguara "],
                    (object) ["owner" => 1, "city" => "Curuá"],
                    (object) ["owner" => 1, "city" => "Óbidos"],
                    (object) ["owner" => 1, "city" => "São João do Araguaia"],
                    (object) ["owner" => 1, "city" => "Marapanim"],
                    (object) ["owner" => 1, "city" => "São Caetano de Odivelas"],
                    (object) ["owner" => 1, "city" => "Vigia"],
                    (object) ["owner" => 1, "city" => "Cachoeira do Arari"],
                    (object) ["owner" => 1, "city" => "Curralinho"],
                    (object) ["owner" => 1, "city" => "Gurupá"],
                    (object) ["owner" => 1, "city" => "Portel"],
                    (object) ["owner" => 1, "city" => "Santa Cruz do Arari"],
                    (object) ["owner" => 1, "city" => "Nova Timboteua"],
                    (object) ["owner" => 1, "city" => "Santa Luzia do Pará"],
                    (object) ["owner" => 1, "city" => "Concordia do Pará"],
                    (object) ["owner" => 1, "city" => "Ipixuna do Pará"],
                    (object) ["owner" => 1, "city" => "Irituia"],
                    (object) ["owner" => 1, "city" => "Rondon do Pará"],
                    (object) ["owner" => 1, "city" => "Aveiro"],
                    (object) ["owner" => 1, "city" => "Novo Progresso"],
                    (object) ["owner" => 1, "city" => "Moju "],
                    (object) ["owner" => 1, "city" => "Alenquer"],
                    (object) ["owner" => 1, "city" => "Belterra"],
                    (object) ["owner" => 1, "city" => "Faro"],
                    (object) ["owner" => 1, "city" => "Primavera"],
                    (object) ["owner" => 1, "city" => "Quatipuru"],
                    (object) ["owner" => 1, "city" => "Rurópolis"],
                    (object) ["owner" => 1, "city" => "Vitória do Xingu"],
                    (object) ["owner" => 1, "city" => "Alenquer"],
                    (object) ["owner" => 1, "city" => "Canaã do Carajás"],
                    (object) ["owner" => 1, "city" => "Breves"],
                    (object) ["owner" => 1, "city" => "Cametá"],
                    (object) ["owner" => 1, "city" => "Tailândia"],
                    (object) ["owner" => 1, "city" => "Redenção"],
                    (object) ["owner" => 1, "city" => "Município de Ourilândia do Norte"],
                    (object) ["owner" => 1, "city" => "Dom Eliseu"],
                    (object) ["owner" => 1, "city" => "Município Bom Jesus do Tocantins"],
                    (object) ["owner" => 1, "city" => "Santa Barbara do Pará"],
                    (object) ["owner" => 1, "city" => "Jacunda"],
                ],
                'inciso1_opportunity_id' => 9,
                'inciso2_opportunity_ids' => (array) json_decode(env('AB_INCISO2_OPPORTUNITY_IDS', '{}')),
                'msg_inciso2_disabled' => 'Em breve!',
                'link_suporte' => 'https://tawk.to/chat/5f47c17bcc6a6a5947af53ba/default',
                'msg_inciso2_disabled' => 'A solicitação deste benefício será lançada em breve. Acompanhe a divulgação pelas instituições responsáveis pela gestão da cultura em seu município!',
                'prefix_project' =>  'Lei Aldir Blanc | ',
                'mediados_owner' => 7036,
                'homolog_requer_validacao' => [],
                 
            ],
        ],

        'AldirBlancDataprev' => [
            'namespace' => 'AldirBlancDataprev',
            'config' => [
                'exportador_requer_homologacao' => false,
                'consolidacao_requer_homologacao' => true,
                'consolidacao_requer_validacoes' => ['financeiro']
            ]
        ]
    ]
];
