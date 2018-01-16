<?php
return [
    [
        'pattern' => 'car-leasing/<categories:.*>',
        'route' => 'product/category',
        'encodeParams' => false,
    ],
    [
        'pattern' => 'car-leasing',
        'route' => 'car-leasing/manulist',
        'encodeParams' => false,
    ],

];