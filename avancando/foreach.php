<?php 
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

$contasCorrentes['123.256.789-15'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes['123.296.789-16'] = [
    'titular' => 'Lucas',
    'saldo' => 2500
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}


