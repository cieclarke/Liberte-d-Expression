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
            ['id' => 'CloseToYou', 'title' => 'Close To You', 'description' => 'Close To You', 'urls' => ['mp3' => 'CloseToYou.mp3', 'ogg' => 'CloseToYou.ogg', 'png' => 'CloseToYou.png']],
            ['id' => 'Atraccion',  'title' => 'Atraccion', 'description' => 'Atraccion', 'urls' => ['mp3' => 'Atraccion.mp3', 'ogg' => 'Atraccion.ogg', 'png' => 'Atraccion.png']],
            ['id' => 'AboutAGirl',  'title' => 'About A Girl', 'description' => 'About A Girl', 'urls' => ['mp3' => 'AboutAGirl.mp3', 'ogg' => 'AboutAGirl.ogg', 'png' => 'AboutAGirl.png']],
            ['id' => 'Caroline',  'title' => 'Caroline', 'description' => 'Caroline', 'urls' => ['mp3' => 'Caroline.mp3', 'ogg' => 'Caroline.ogg', 'png' => 'Caroline.png']],
            ['id' => 'CercaDeTi',  'title' => 'Cerca De Ti', 'description' => 'Cerca De Ti', 'urls' => ['mp3' => 'CercaDeTi.mp3', 'ogg' => 'CercaDeTi.ogg', 'png' => 'CercaDeTi.png']],
            ['id' => 'Friendship',  'title' => 'Friendship', 'description' => 'Friendship', 'urls' => ['mp3' => 'Friendship.mp3', 'ogg' => 'Friendship.ogg', 'png' => 'Friendship.png']],
            ['id' => 'HeAndShe',  'title' => 'He And She', 'description' => 'He And She', 'urls' => ['mp3' => 'HeAndShe.mp3', 'ogg' => 'HeAndShe.ogg', 'png' => 'HeAndShe.png']],
            ['id' => 'JaiVouluFuir',  'title' => 'Jai Voulu Fuir', 'description' => 'Jai Voulu Fuir', 'urls' => ['mp3' => 'JaiVouluFuir.mp3', 'ogg' => 'JaiVouluFuir.ogg', 'png' => 'JaiVouluFuir.png']],
            ['id' => 'MiBilateral',  'title' => 'Mi Bilateral', 'description' => 'Mi Bilateral', 'urls' => ['mp3' => 'MiBilateral.mp3', 'ogg' => 'MiBilateral.ogg', 'png' => 'MiBilateral.png']],
            ['id' => 'OurWorldToday',  'title' => 'Our  World Today', 'description' => 'Our World Today', 'urls' => ['mp3' => 'OurWorldToday.mp3', 'ogg' => 'OurWorldToday.ogg', 'png' => 'OurWorldToday.png']],
            ['id' => 'Pista',  'title' => 'Pista', 'description' => 'Pista', 'urls' => ['mp3' => 'Pista.mp3', 'ogg' => 'Pista.ogg', 'png' => 'Pista.png']],
            ['id' => 'Realism',  'title' => 'Realism', 'description' => 'Realism', 'urls' => ['mp3' => 'Realism.mp3', 'ogg' => 'Realism.ogg', 'png' => 'Realism.png']],
            ['id' => 'YouAre',  'title' => 'You Are', 'description' => 'You Are', 'urls' => ['mp3' => 'YouAre.mp3', 'ogg' => 'YouAre.ogg', 'png' => 'YouAre.png']]
        ],
    'Books' => [
            ['id' => 'MrTandtheJMan', 'title' => 'Mr T and the J Man', 'description' => 'Mr T and the J Man', 'types' => [
                'pdf' => 'MrTandtheJMan.pdf'
                ] 
            ],
            ['id' => 'CheekyMonkey', 'title' => 'Cheeky Monkey', 'description' => 'Cheeky Monkey', 'types' => [
                'pdf' => 'CheekyMonkey.pdf'
                ] 
            ],
            ['id' => 'HappyLane1', 'title' => 'Happy Lane 1', 'description' => 'Happy Lane 1', 'types' => [
                'pdf' => 'HappyLane1.pdf'
                ] 
            ],
            ['id' => 'HappyLane2', 'title' => 'Happy Lane 2', 'description' => 'Happy Lane 2', 'types' => [
                'pdf' => 'HappyLane2.pdf'
                ] 
            ],
            ['id' => 'HappyLane3', 'title' => 'Happy Lane 3', 'description' => 'Happy Lane 3', 'types' => [
                'pdf' => 'HappyLane3.pdf'
                ] 
            ],
            ['id' => 'HappyLane4', 'title' => 'Happy Lane 4', 'description' => 'Happy Lane 4', 'types' => [
                'pdf' => 'HappyLane4.pdf'
                ] 
            ],
            ['id' => 'HappyLane5', 'title' => 'Happy Lane 5', 'description' => 'Happy Lane 5', 'types' => [
                'pdf' => 'HappyLane5.pdf'
                ] 
            ],
            ['id' => 'HappyLane6', 'title' => 'Happy Lane 6', 'description' => 'Happy Lane 6', 'types' => [
                'pdf' => 'HappyLane6.pdf'
                ] 
            ]            
        ]

    ];