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
                'mp3' => 'Atraccion.mp3', 
                'ogg' => 'Atraccion.ogg' 
                ] 
            ],
            ['title' => 'Close To You', 'description' => 'Close To You', 'urls' => [
                'mp3' => 'Close to You.mp3', 
                'ogg' => 'Close to You.ogg' 
                ] 
            ]
        ],
    'Books' => [
            ['title' => 'MrTandtheJMan', 'description' => 'MrTandtheJMan', 'urls' => [
                'pdf' => 'MrTandtheJMan.pdf'
                ] 
            ]
        ]

    ];