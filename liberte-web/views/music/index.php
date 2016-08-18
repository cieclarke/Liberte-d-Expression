<?php
    $this->title = 'Music';
?>

<h1>Music</h1>

<dl>
<?php foreach($model->Songs as $key=>$value): ?>
<dt>
<?php echo $model->Songs[$key]->title; ?>
</dt>
<dd>
<audio controls="controls">
   <source src="http://libertedexpression.co.uk/songs/<?php echo $model->Songs[$key]->types['mp3']; ?>" type='audio/mpeg; codecs="mp3"'>
   <source src="http://libertedexpression.co.uk/songs/<?php echo $model->Songs[$key]->types['ogg']; ?>" type='audio/ogg; codecs="vorbis"'>
   <p>Unsupported media</p>
</audio>
</dd>
<?php endforeach; ?>
</dl>
