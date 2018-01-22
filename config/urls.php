<?php
return [
    [
        'pattern' => 'car-leasing/<categories:.*>',
        'route' => 'product/category',
        'encodeParams' => false,
    ],
    'car-leasing' => 'site/manulist',
    'about' => 'site/about',
    [
        'pattern' => 'searchrestapi/<categories:.*>',
        'route' => 'searchrest/category',
        'encodeParams' => false,
    ],
];