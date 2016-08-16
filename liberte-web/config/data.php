<?php

$imageSet1 = [
    ['title' => 'image one', 'description' => '', 'urls' => [ 'thumbnail' => 'tn01.jpg', 'main' => '01.jpg' ] ],
    ['title' => 'image two', 'description' => '', 'urls' => [ 'thumbnail' => 'tn02.jpg', 'main' => '02.jpg' ] ]
];

$imageSet2 = [
    ['title' => 'image one', 'description' => '', 'urls' => [ 'thumbnail' => 'tn01.jpg', 'main' => '01.jpg' ] ],
    ['title' => 'image two', 'description' => '', 'urls' => [ 'thumbnail' => 'tn02.jpg', 'main' => '02.jpg' ] ]
];

return
    [
    'Gallery' => [
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
        ],
    
    'Audio' => [
            ['title' => 'Attracion', 'description' => 'Attracion', 'urls' => [
                'mp3' => '01 Atraccion Master 04_10_2005_converted.mp3', 
                'ogg' => '01 Atraccion Master 04_10_2005_converted.ogg' 
                ] 
            ],
            ['title' => 'Close To You', 'description' => 'Close To You', 'urls' => [
                'mp3' => '01 Close to You_Master July 2005_converted.mp3', 
                'ogg' => '01 Close to You_Master July 2005_converted.ogg' 
                ] 
            ]
        ]

    ];