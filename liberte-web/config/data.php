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
            ['id' => 'CloseToYou', 'title' => 'Close To You', 'description' => 'Close To You', 'urls' => ['mp3' => 'CloseToYou.mp3', 'ogg' => 'CloseToYou.ogg', 'jpg' => 'closetoyou.jpg']],
            ['id' => 'Atraccion',  'title' => 'Atraccion', 'description' => 'Atraccion', 'urls' => ['mp3' => 'Atraccion.mp3', 'ogg' => 'Atraccion.ogg', 'jpg' => 'atraccion.jpg']],
            ['id' => 'AboutAGirl',  'title' => 'About A Girl', 'description' => 'About A Girl', 'urls' => ['mp3' => 'AboutAGirl.mp3', 'ogg' => 'AboutAGirl.ogg', 'jpg' => 'aboutagirl.jpg']],
            ['id' => 'Caroline',  'title' => 'Caroline', 'description' => 'Caroline', 'urls' => ['mp4' => 'Caroline.mp4', 'mp3' => 'Caroline.mp3', 'ogg' => 'Caroline.ogg', 'jpg' => 'caroline.jpg']],
            ['id' => 'CercaDeTi',  'title' => 'Cerca De Ti', 'description' => 'Cerca De Ti', 'urls' => ['mp3' => 'CercaDeTi.mp3', 'ogg' => 'CercaDeTi.ogg', 'jpg' => 'cercadeti.jpg']],
            ['id' => 'Friendship',  'title' => 'Friendship', 'description' => 'Friendship', 'urls' => ['mp3' => 'Friendship.mp3', 'ogg' => 'Friendship.ogg', 'jpg' => 'friendship.jpg']],
            ['id' => 'HeAndShe',  'title' => 'He And She', 'description' => 'He And She', 'urls' => ['mp3' => 'HeAndShe.mp3', 'ogg' => 'HeAndShe.ogg', 'jpg' => 'heandshe.jpg']],
            ['id' => 'JaiVouluFuir',  'title' => 'J\'ai Voulu Fuir', 'description' => 'J\'ai Voulu Fuir', 'urls' => ['mp3' => 'JaiVouluFuir.mp3', 'ogg' => 'JaiVouluFuir.ogg', 'jpg' => 'jaivoulufuir.jpg']],
            ['id' => 'MiBilateral',  'title' => 'Mi Bilateral', 'description' => 'Mi Bilateral', 'urls' => ['mp3' => 'MiBilateral.mp3', 'ogg' => 'MiBilateral.ogg', 'jpg' => 'mibilateral.jpg']],
            ['id' => 'OurWorldToday',  'title' => 'Our  World Today', 'description' => 'Our World Today', 'urls' => ['mp3' => 'OurWorldToday.mp3', 'ogg' => 'OurWorldToday.ogg', 'jpg' => 'ourworldtoday.jpg']],
            ['id' => 'Pista',  'title' => 'Pista', 'description' => 'Pista', 'urls' => ['mp3' => 'Pista.mp3', 'ogg' => 'Pista.ogg', 'jpg' => 'pista.jpg']],
            ['id' => 'Realism',  'title' => 'Realism', 'description' => 'Realism', 'urls' => ['mp3' => 'Realism.mp3', 'ogg' => 'Realism.ogg', 'jpg' => 'realism.jpg']],
            ['id' => 'YouAre',  'title' => 'You Are', 'description' => 'You Are', 'urls' => ['mp3' => 'YouAre.mp3', 'ogg' => 'YouAre.ogg', 'jpg' => 'youare.jpg']]
        ],
    'Books' => [
            ['id' => 'MrTandtheJMan', 'category' => 'Other Books', 'title' => 'The Smarty Big Bang', 'description' => 'Mr T &amp; the J Man', 'types' => ['pdf' => 'MrTandtheJMan.pdf', 'img' => 'mrtandthejman_cover_sml.jpg']],
            ['id' => 'CheekyMonkey', 'category' => 'Other Books', 'title' => 'Cheeky Monkey', 'description' => 'Cheeky Monkey', 'types' => ['pdf' => 'CheekyMonkey.pdf', 'img' => 'cheekymonkey_cover_sml.jpg']],
            ['id' => 'HappyLane1', 'category' => 'Happy Lane Series', 'title' => 'Home, Sweet Home', 'description' => 'No. 1', 'types' => ['pdf' => 'HappyLane1.pdf', 'img' => 'happylane1_cover_sml.jpg']],
            ['id' => 'HappyLane2', 'category' => 'Happy Lane Series', 'title' => 'Reduce, Reuse, Recycle all', 'description' => 'No. 2', 'types' => ['pdf' => 'HappyLane2.pdf', 'img' => 'happylane2_cover_sml.jpg']],
            ['id' => 'HappyLane3', 'category' => 'Happy Lane Series', 'title' => 'Take the Alien Oath', 'description' => 'No. 3', 'types' => ['pdf' => 'HappyLane3.pdf', 'img' => 'happylane3_cover_sml.jpg']],
            ['id' => 'HappyLane4', 'category' => 'Happy Lane Series', 'title' => 'Scouts to the Rescue', 'description' => 'No. 4', 'types' => ['pdf' => 'HappyLane4.pdf', 'img' => 'happylane4_cover_sml.jpg']],
            ['id' => 'HappyLane5', 'category' => 'Happy Lane Series', 'title' => 'Don\'t be Mean, Keep it Green', 'description' => 'No. 5', 'types' => ['pdf' => 'HappyLane5.pdf', 'img' => 'happylane5_cover_sml.jpg']],
            ['id' => 'HappyLane6', 'category' => 'Happy Lane Series', 'title' => 'The Hidden Clues!', 'description' => 'No. 6', 'types' => ['pdf' => 'HappyLane6.pdf', 'img' => 'happylane6_cover_sml.jpg']]
        ]

    ];