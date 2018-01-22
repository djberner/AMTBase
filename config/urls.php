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
        'pattern' => 'resultsapis/<categories:.*>',
        'route' => 'resultsapi/category',
        'encodeParams' => false,
    ],
];