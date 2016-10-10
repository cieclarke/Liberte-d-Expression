<?php
    $this->title = 'Music';
?>

<h1>Music</h1>

<section>

    <h2>Songs</h2>

    <ul>
        <li>
            English Songs
            <ul>
                <li <?php echo strtolower($model->id) == 'closetoyou' ? 'class=\'selected\'' : ''; ?>><a href='/music/CloseToYou'>Close to You</a></li>
                <li <?php echo strtolower($model->id) == 'aboutagirl' ? 'class=\'selected\'' : ''; ?>><a href='/music/AboutAGirl'>About a Girl</a></li>
                <li <?php echo strtolower($model->id) == 'frienship' ? 'class=\'selected\'' : ''; ?>><a href='/music/Frienship'>Frienship</a></li>
                <li <?php echo strtolower($model->id) == 'meandshe' ? 'class=\'selected\'' : ''; ?>><a href='/music/MeAndShe'>He and She</a></li>
                <li <?php echo strtolower($model->id) == 'ourworldtoday' ? 'class=\'selected\'' : ''; ?>><a href='/music/OurWorldToday'>Our World Today</a></li>
                <li <?php echo strtolower($model->id) == 'youare' ? 'class=\'selected\'' : ''; ?>><a href='/music/YouAre'>You Are</a></li>
            </ul>
        </li>
        <li>
            French Songs
            <ul>
                <li <?php echo strtolower($model->id) == 'jaivoulufuir' ? 'class=\'selected\'' : ''; ?>><a href='/music/JaiVouluFuir'>Jai voulu fuir</a></li>
                <li <?php echo strtolower($model->id) == 'caroline' ? 'class=\'selected\'' : ''; ?>><a href='/music/Caroline'>Caroline</a></li>
            </ul>
        </li>
        <li>
            Spanish Songs
            <ul>
                <li <?php echo strtolower($model->id) == 'cercadeti' ? 'class=\'selected\'' : ''; ?>><a href='/music/CercaDeTi'>Cerca de ti</a></li>
                <li <?php echo strtolower($model->id) == 'attracion' ? 'class=\'selected\'' : ''; ?>><a href='/music/Attracion'>Attracion</a></li>
                <li <?php echo strtolower($model->id) == 'mibilateral' ? 'class=\'selected\'' : ''; ?>><a href='/music/MiBilateral'>Mi Bilateral</a></li>
            </ul>        
        </li>
    </ul>

</section>

<section>

    <h2>Music</h2>
    <h3><?php echo $model->title; ?></h3>
    <img width="300" src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['png']; ?>" />
    <audio title="<?php echo $model->title; ?>" controls="controls">
        <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['mp3']; ?>" type='audio/mpeg; codecs="mp3"'>
        <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['ogg']; ?>" type='audio/ogg; codecs="vorbis"'>
        <p>Unsupported media</p>
    </audio>

</section>