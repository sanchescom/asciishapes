<?php

return [
    'default' => [
        'size'   => [
            'small',
            'medium',
            'large',
        ],
        'amount' => 3,
    ],
	'cli' => [
		'size' => [
			'alias'   => 's',
			'help'    => 'Size of the shape',
		],
        'amount' => [
            'alias'   => 'a',
            'help'    => 'Amount of the shapes',
        ],
        'type' => [
            'alias'   => 't',
            'help'    => 'Shape\'s type',
        ]
	],
];