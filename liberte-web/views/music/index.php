<?php
    $this->title = 'Music';
?>

<h1>Music</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis vitae nisi eget eleifend. Phasellus tristique ut augue a consequat. Sed at dignissim augue, et tempor enim.</p>

<section class="music-list">
    <h2>In English</h2>
    <ul>
        <li <?php echo strtolower($model->id) == 'closetoyou' ? 'class=\'selected\'' : ''; ?>><a href='/music/CloseToYou'>Close to You</a></li>
        <li <?php echo strtolower($model->id) == 'aboutagirl' ? 'class=\'selected\'' : ''; ?>><a href='/music/AboutAGirl'>About a Girl</a></li>
        <li <?php echo strtolower($model->id) == 'friendship' ? 'class=\'selected\'' : ''; ?>><a href='/music/Friendship'>Frienship</a></li>
        <li <?php echo strtolower($model->id) == 'meandshe' ? 'class=\'selected\'' : ''; ?>><a href='/music/MeAndShe'>He and She</a></li>
        <li <?php echo strtolower($model->id) == 'ourworldtoday' ? 'class=\'selected\'' : ''; ?>><a href='/music/OurWorldToday'>Our World Today</a></li>
        <li <?php echo strtolower($model->id) == 'youare' ? 'class=\'selected\'' : ''; ?>><a href='/music/YouAre'>You Are</a></li>
    </ul>

    <h2>In French</h2>
    <ul>
        <li <?php echo strtolower($model->id) == 'jaivoulufuir' ? 'class=\'selected\'' : ''; ?>><a href='/music/JaiVouluFuir'>Jai voulu fuir</a></li>
        <li <?php echo strtolower($model->id) == 'caroline' ? 'class=\'selected\'' : ''; ?>><a href='/music/Caroline'>Caroline</a></li>
    </ul>

    <h2>In Spanish</h2>
    <ul>
        <li <?php echo strtolower($model->id) == 'cercadeti' ? 'class=\'selected\'' : ''; ?>><a href='/music/CercaDeTi'>Cerca de ti</a></li>
        <li <?php echo strtolower($model->id) == 'atraccion' ? 'class=\'selected\'' : ''; ?>><a href='/music/Atraccion'>Atraccion</a></li>
        <li <?php echo strtolower($model->id) == 'mibilateral' ? 'class=\'selected\'' : ''; ?>><a href='/music/MiBilateral'>Mi Bilateral</a></li>
    </ul>
</section>

<section class="music-play container-lozenge">
    <h2><?php echo $model->title; ?></h2>

    <?php if(array_key_exists('mp4', $model->types)) { ?>
        <video controls="controls">
            <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['mp4']; ?>" type="video/mp4">
            <p>Unsupported media</p>
        </video> 
    <? 
    } else {
    ?>
        <img alt="Music score for <?php echo $model->title; ?>" src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['png']; ?>" />
        <audio title="<?php echo $model->title; ?>" controls="controls">
            <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['mp3']; ?>" type='audio/mpeg; codecs="mp3"'>
            <source src="http://libertedexpression.co.uk/art/audio/<?php echo $model->types['ogg']; ?>" type='audio/ogg; codecs="vorbis"'>
            <p>Unsupported media</p>
        </audio>
    <? 
    }
    ?>
    <!-- / HTML5 default player -->



    <!-- HTML to inject for custom 'javascript' player -->
<!--<div class="players">         
     <div class="jp-audio">
                <div class="jp-type-single">
                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                    <div id="jp_container_1" class="jp-interface">
                        <ul class="jp-controls">
                            <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                            <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                            <li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
                            <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                            <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                        </ul>
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                        <div class="jp-current-time"></div>
                        <div class="jp-duration"></div>
                    </div>
                    <div id="jp_playlist_1" class="jp-playlist">
                        <ul>
                            <li><?php echo $model->title; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
</div>-->
<!-- / inject -->
</section>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js"></script>-->
<!--<script>
$(document).ready(function(){

var mpthree = $($('audio source')[0]).attr('src');
var ogg = $($('audio source')[1]).attr('src');

console.log(mpthree);
console.log(ogg);

    $("#jquery_jplayer_1").jPlayer({
        ready: function () {
            console.log('ready');
            $(this).jPlayer("setMedia", {
                mp3: mpthree,
                ogg: ogg
            }); // auto play
            console.log('ready end');
        },
        ended: function (event) {
            $(this).jPlayer("play");
            console.log('ended');
        },
        //swfPath: "swf",
        supplied: "mp3, ogg"
    })
    .bind($.jPlayer.event.play, function() { // pause other instances of player when current one play
            $(this).jPlayer("pauseOthers");
            console.log('pause');
    });


});
</script>-->

<!--
<style>
div.jp-audio, div.jp-video {
    color: #666;
    font-family: Verdana,Arial,sans-serif;
    font-size: 1em;
    line-height: 1.6;
}
div.jp-audio {
    width: 420px;
}
div.jp-video-270p {
    width: 480px;
}
div.jp-video-360p {
    width: 640px;
}
div.jp-interface {
    background-color: #eee;
    border: 1px solid #009be3;
    position: relative;
    width: 100%;
}
div.jp-audio div.jp-type-single div.jp-interface {
    border-bottom: medium none;
    height: 80px;
}
div.jp-audio div.jp-type-playlist div.jp-interface {
    height: 80px;
}
div.jp-video div.jp-type-single div.jp-interface {
    border-bottom: medium none;
    height: 60px;
}
div.jp-video div.jp-type-playlist div.jp-interface {
    height: 60px;
}
div.jp-interface ul.jp-controls {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
div.jp-interface ul.jp-controls li {
    display: inline;
}
div.jp-interface ul.jp-controls a {
    overflow: hidden;
    position: absolute;
    text-indent: -9999px;
}
a.jp-play, a.jp-pause {
    height: 40px;
    width: 40px;
    z-index: 1;
}
div.jp-audio div.jp-type-single a.jp-play, div.jp-audio div.jp-type-single a.jp-pause {
    left: 40px;
    top: 20px;
}
div.jp-audio div.jp-type-playlist a.jp-play, div.jp-audio div.jp-type-playlist a.jp-pause {
    left: 48px;
    top: 20px;
}
div.jp-video a.jp-play, div.jp-video a.jp-pause {
    top: 15px;
}
div.jp-video-270p div.jp-type-single a.jp-play, div.jp-video-270p div.jp-type-single a.jp-pause {
    left: 195px;
}
div.jp-video-270p div.jp-type-playlist a.jp-play, div.jp-video-270p div.jp-type-playlist a.jp-pause {
    left: 220px;
}
div.jp-video-360p div.jp-type-single a.jp-play, div.jp-video-360p div.jp-type-single a.jp-pause {
    left: 275px;
}
div.jp-video-360p div.jp-type-playlist a.jp-play, div.jp-video-360p div.jp-type-playlist a.jp-pause {
    left: 300px;
}
a.jp-play {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll 0 0;
}
a.jp-play:hover {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll -41px 0;
}
a.jp-pause {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll 0 -42px;
    display: none;
}
a.jp-pause:hover {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll -41px -42px;
}
div.jp-audio div.jp-type-single a.jp-stop {
    left: 90px;
    top: 26px;
}
div.jp-audio div.jp-type-playlist a.jp-stop {
    left: 126px;
    top: 26px;
}
div.jp-video a.jp-stop {
    top: 21px;
}
div.jp-video-270p div.jp-type-single a.jp-stop {
    left: 245px;
}
div.jp-video-270p div.jp-type-playlist a.jp-stop {
    left: 298px;
}
div.jp-video-360p div.jp-type-single a.jp-stop {
    left: 325px;
}
div.jp-video-360p div.jp-type-playlist a.jp-stop {
    left: 378px;
}
a.jp-stop {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll 0 -83px;
    height: 28px;
    width: 28px;
    z-index: 1;
}
a.jp-stop:hover {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll -29px -83px;
}
div.jp-audio div.jp-type-playlist a.jp-previous {
    left: 20px;
    top: 26px;
}
div.jp-video div.jp-type-playlist a.jp-previous {
    top: 21px;
}
div.jp-video-270p div.jp-type-playlist a.jp-previous {
    left: 192px;
}
div.jp-video-360p div.jp-type-playlist a.jp-previous {
    left: 272px;
}
a.jp-previous {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll 0 -112px;
    height: 28px;
    width: 28px;
}
a.jp-previous:hover {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll -29px -112px;
}
div.jp-audio div.jp-type-playlist a.jp-next {
    left: 88px;
    top: 26px;
}
div.jp-video div.jp-type-playlist a.jp-next {
    top: 21px;
}
div.jp-video-270p div.jp-type-playlist a.jp-next {
    left: 260px;
}
div.jp-video-360p div.jp-type-playlist a.jp-next {
    left: 340px;
}
a.jp-next {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll 0 -141px;
    height: 28px;
    width: 28px;
}
a.jp-next:hover {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll -29px -141px;
}
div.jp-progress {
    background-color: #ddd;
    overflow: hidden;
    position: absolute;
}
div.jp-audio div.jp-type-single div.jp-progress {
    height: 15px;
    left: 130px;
    top: 32px;
    width: 122px;
}
div.jp-audio div.jp-type-playlist div.jp-progress {
    height: 15px;
    left: 164px;
    top: 32px;
    width: 122px;
}
div.jp-video div.jp-progress {
    height: 10px;
    left: 0;
    top: 0;
    width: 100%;
}
div.jp-seek-bar {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") repeat-x scroll 0 -202px;
    cursor: pointer;
    height: 100%;
    width: 0;
}
div.jp-play-bar {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") repeat-x scroll 0 -218px;
    height: 100%;
    width: 0;
}
div.jp-seeking-bg {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/pbar-ani.gif") repeat scroll 0 0;
}
a.jp-mute, a.jp-unmute {
    height: 15px;
    width: 18px;
}
div.jp-audio div.jp-type-single a.jp-mute, div.jp-audio div.jp-type-single a.jp-unmute {
    left: 274px;
    top: 32px;
}
div.jp-audio div.jp-type-playlist a.jp-mute, div.jp-audio div.jp-type-playlist a.jp-unmute {
    left: 296px;
    top: 32px;
}
div.jp-video a.jp-mute, div.jp-video a.jp-unmute {
    top: 27px;
}
div.jp-video-270p div.jp-type-single a.jp-mute, div.jp-video-270p div.jp-type-single a.jp-unmute {
    left: 304px;
}
div.jp-video-270p div.jp-type-playlist a.jp-unmute, div.jp-video-270p div.jp-type-playlist a.jp-mute {
    left: 363px;
}
div.jp-video-360p div.jp-type-single a.jp-mute, div.jp-video-360p div.jp-type-single a.jp-unmute {
    left: 384px;
}
div.jp-video-360p div.jp-type-playlist a.jp-mute, div.jp-video-360p div.jp-type-playlist a.jp-unmute {
    left: 443px;
}
a.jp-mute {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll 0 -186px;
}
a.jp-mute:hover {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll -19px -170px;
}
a.jp-unmute {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll 0 -170px;
    display: none;
}
a.jp-unmute:hover {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") no-repeat scroll -19px -186px;
}
div.jp-volume-bar {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") repeat-x scroll 0 -250px;
    cursor: pointer;
    height: 5px;
    overflow: hidden;
    position: absolute;
    width: 46px;
}
div.jp-audio div.jp-type-single div.jp-volume-bar {
    left: 302px;
    top: 37px;
}
div.jp-audio div.jp-type-playlist div.jp-volume-bar {
    left: 324px;
    top: 37px;
}
div.jp-video div.jp-volume-bar {
    top: 32px;
}
div.jp-video-270p div.jp-type-single div.jp-volume-bar {
    left: 332px;
}
div.jp-video-270p div.jp-type-playlist div.jp-volume-bar {
    left: 391px;
}
div.jp-video-360p div.jp-type-single div.jp-volume-bar {
    left: 412px;
}
div.jp-video-360p div.jp-type-playlist div.jp-volume-bar {
    left: 471px;
}
div.jp-volume-bar-value {
    background: rgba(0, 0, 0, 0) url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.jpg") repeat-x scroll 0 -256px;
    height: 5px;
    width: 0;
}
div.jp-current-time, div.jp-duration {
    font-size: 0.64em;
    font-style: oblique;
    position: absolute;
}
div.jp-duration {
    text-align: right;
}
div.jp-audio div.jp-type-single div.jp-current-time, div.jp-audio div.jp-type-single div.jp-duration {
    left: 130px;
    top: 49px;
    width: 122px;
}
div.jp-audio div.jp-type-playlist div.jp-current-time, div.jp-audio div.jp-type-playlist div.jp-duration {
    left: 164px;
    top: 49px;
    width: 122px;
}
div.jp-video div.jp-current-time, div.jp-video div.jp-duration {
    left: 0;
    padding: 0 1%;
    top: 10px;
    width: 98%;
}
div.jp-playlist {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #ccc;
    border-color: -moz-use-text-color #009be3 #009be3;
    border-image: none;
    border-style: none solid solid;
    border-width: medium 1px 1px;
    width: 100%;
}
div.jp-playlist ul {
    font-size: 0.72em;
    list-style-type: none;
    margin: 0;
    padding: 0 20px;
}
div.jp-type-single div.jp-playlist li {
    font-weight: bold;
    padding: 5px 0 5px 20px;
}
div.jp-type-playlist div.jp-playlist li {
    border-bottom: 1px solid #eee;
    padding: 5px 0 4px 20px;
}
div.jp-type-playlist div.jp-playlist li.jp-playlist-last {
    border-bottom: medium none;
    padding: 5px 0 5px 20px;
}
div.jp-type-playlist div.jp-playlist li.jp-playlist-current {
    list-style-position: inside;
    list-style-type: square;
    padding-left: 8px;
}
div.jp-type-playlist div.jp-playlist a {
    color: #666;
    text-decoration: none;
}
div.jp-type-playlist div.jp-playlist a:hover {
    color: #0d88c1;
}
div.jp-type-playlist div.jp-playlist a.jp-playlist-current {
    color: #0d88c1;
}
div.jp-type-playlist div.jp-playlist div.jp-free-media {
    display: inline;
    margin-left: 20px;
}
div.jp-video div.jp-video-play {
    background: transparent url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.video.play.png") no-repeat scroll center center;
    cursor: pointer;
    position: absolute;
    z-index: 2;
}
div.jp-video div.jp-video-play:hover {
    background: transparent url("https://www.script-tutorials.com/demos/45/css/jplayer.blue.monday.video.play.hover.png") no-repeat scroll center center;
}
div.jp-video-270p div.jp-video-play {
    height: 270px;
    top: -270px;
    width: 480px;
}
div.jp-video-360p div.jp-video-play {
    height: 360px;
    top: -360px;
    width: 640px;
}
div.jp-jplayer {
    height: 0;
    width: 0;
}
div.jp-video div.jp-jplayer {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #009be3 #009be3 -moz-use-text-color;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px 1px medium;
    z-index: 1;
}
div.jp-video-270p div.jp-jplayer {
    height: 270px;
    width: 480px;
}
div.jp-video-360p div.jp-jplayer {
    height: 360px;
    width: 640px;
}
div.jp-jplayer {
    background-color: #000000;
}

</style>
-->
