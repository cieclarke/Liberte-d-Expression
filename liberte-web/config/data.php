<?php

$imageSet1 = [
    ['title' => 'image one', 'description' => '', 'urls' => [ 'thumbnail' => 'tn01.jpg', 'main' => '01.jpg' ] ],
    ['title' => 'image two', 'description' => '', 'urls' => [ 'thumbnail' => 'tn02.jpg', 'main' => '02.jpg' ] ]
];

$imageSet2 = [
    ['title' => 'image one', 'description' => '', 'urls' => [ 'thumbnail' => 'tn01.jpg', 'main' => '01.jpg' ] ],
    ['title' => 'image two', 'description' => '', 'urls' => [ 'thumbnail' => 'tn02.jpg', 'main' => '02.jpg' ] ]
];

return [
    'title' => 'gallery title',
    'albums' => 
    [
        [ 
            'title' => 'liberte-one', 
            'description' => 'a',
            'images' => $imageSet1
        ],
        [ 
            'title' => 'liberte-next', 
            'description' => 'b',
            'images' => $imageSet2
        ]
    ]
];