<?php
    $this->title = 'Music';
?>


    <h1>Music</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis vitae nisi eget eleifend. Phasellus tristique ut augue a consequat. Sed at dignissim augue, et tempor enim.</p>

<section class="music-english">
    <h2>In English</h2>
    <ul>
        <li>
            <a href='/music/CloseToYou'>Close to You</a>
            <audio title="Close to You" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/CloseToYou.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio//CloseToYou.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/AboutAGirl'>About a Girl</a>
            <audio title="About a Girl" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/AboutAGirl.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio//AboutAGirl.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/Friendship'>Friendship</a>
            <audio title="Friendship" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/Friendship.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/Friendship.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/HeAndShe'>He and She</a>
            <audio title="He and She" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/HeAndShe.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/HeAndShe.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/OurWorldToday'>Our World Today</a>
            <audio title="Our World Today" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/OurWorldToday.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/OurWorldToday.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/YouAre'>You Are</a>
            <audio title="You Are" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/YouAre.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/YouAre.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
    </ul>
</section>

<section class="music-french">
    <h2>In French</h2>
    <ul>
        <li>
            <a href='/music/JaiVouluFuir'>Jai voulu fuir</a>
            <audio title="Jai voulu fuir" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/JaiVouluFuir.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/JaiVouluFuir.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/Caroline'>Caroline</a>
            <audio title="Caroline" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/Caroline.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/Caroline.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
    </ul>
</section>

<div class="music-spanish">
    <h2>In Spanish</h2>
    <ul>
        <li>
            <a href='/music/CercaDeTi'>Cerca de ti</a>
            <audio title="Cerca de ti" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/CercaDeTi.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/CercaDeTi.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/Atraccion'>Atraccion</a>
            <audio title="Atraccion" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/Atraccion.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/Atraccion.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
        <li>
            <a href='/music/MiBilateral'>Mi Bilateral</a>
            <audio title="Mi Bilateral" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/Atraccion.mp3" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/Atraccion.ogg" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        </li>
    </ul>
</div>



<?php if($model->SelectedSong != null) { ?>
    <h2><?php echo $model->SelectedSong->title; ?></h2>
    
    <div class="music-play">
        <?php if(array_key_exists('mp4', $model->SelectedSong->types)) { ?>
        <h2>Play the video</h2>
            <video controls="controls" preload="metadata">
                <source src="http://libertedexpression.co.uk/art/video/<?php echo $model->SelectedSong->types['mp4']; ?>" type="video/mp4">
                <p>Unsupported media</p>
            </video>
        <?php } else { ?>
            <h2>Play the song</h2>
            <img alt="Music score for <?php echo $model->SelectedSong->title; ?>" src="http://libertedexpression.co.uk/art/audio/<?php echo $model->SelectedSong->types['png']; ?>" />
            <audio title="<?php echo $model->SelectedSong->title; ?>" controls="controls">
                <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->SelectedSong->types['mp3']; ?>" type='audio/mpeg; codecs="mp3"'>
                <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->SelectedSong->types['ogg']; ?>" type='audio/ogg; codecs="vorbis"'>
                <p>Unsupported media</p>
            </audio>
        <?php } ?>
    </div>
<?php } ?>