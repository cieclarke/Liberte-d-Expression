<?php
    $this->title = 'Music';
?>

<h1>Music</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis vitae nisi eget eleifend. Phasellus tristique ut augue a consequat. Sed at dignissim augue, et tempor enim.</p>

<section class="music-english">
    <h2>In English</h2>
    <ul>
        <li <?php echo strtolower($model->id) == 'closetoyou' ? 'class=\'selected\'' : ''; ?>><a href='/music/CloseToYou'>Close to You</a></li>
        <li <?php echo strtolower($model->id) == 'aboutagirl' ? 'class=\'selected\'' : ''; ?>><a href='/music/AboutAGirl'>About a Girl</a></li>
        <li <?php echo strtolower($model->id) == 'friendship' ? 'class=\'selected\'' : ''; ?>><a href='/music/Friendship'>Friendship</a></li>
        <li <?php echo strtolower($model->id) == 'meandshe' ? 'class=\'selected\'' : ''; ?>><a href='/music/MeAndShe'>He and She</a></li>
        <li <?php echo strtolower($model->id) == 'ourworldtoday' ? 'class=\'selected\'' : ''; ?>><a href='/music/OurWorldToday'>Our World Today</a></li>
        <li <?php echo strtolower($model->id) == 'youare' ? 'class=\'selected\'' : ''; ?>><a href='/music/YouAre'>You Are</a></li>
    </ul>
</section>

<section class="music-french">
    <h2>In French</h2>
    <ul>
        <li <?php echo strtolower($model->id) == 'jaivoulufuir' ? 'class=\'selected\'' : ''; ?>><a href='/music/JaiVouluFuir'>Jai voulu fuir</a></li>
        <li <?php echo strtolower($model->id) == 'caroline' ? 'class=\'selected\'' : ''; ?>><a href='/music/Caroline'>Caroline</a></li>
    </ul>
</section>

<section class="music-spanish">
    <h2>In Spanish</h2>
    <ul>
        <li <?php echo strtolower($model->id) == 'cercadeti' ? 'class=\'selected\'' : ''; ?>><a href='/music/CercaDeTi'>Cerca de ti</a></li>
        <li <?php echo strtolower($model->id) == 'atraccion' ? 'class=\'selected\'' : ''; ?>><a href='/music/Atraccion'>Atraccion</a></li>
        <li <?php echo strtolower($model->id) == 'mibilateral' ? 'class=\'selected\'' : ''; ?>><a href='/music/MiBilateral'>Mi Bilateral</a></li>
    </ul>
</section>


<section class="music-play">
    <h2><?php echo $model->title; ?></h2>

    <?php if(array_key_exists('mp4', $model->types)) { ?>
        <video controls="controls" preload="metadata">
            <source src="http://libertedexpression.co.uk/art/video/<?php echo $model->types['mp4']; ?>" type="video/mp4">
            <p>Unsupported media</p>
        </video> 
    <?php
    } else {
    ?>
        <img alt="Music score for <?php echo $model->title; ?>" src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['png']; ?>" />
        <audio title="<?php echo $model->title; ?>" controls="controls">
            <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['mp3']; ?>" type='audio/mpeg; codecs="mp3"'>
            <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['ogg']; ?>" type='audio/ogg; codecs="vorbis"'>
            <p>Unsupported media</p>
        </audio>
    <?php 
    }
    ?>
   