<?php
    $this->title = 'Books';
?>

<h1>Books</h1>

<dl>
<?php foreach($model->Books as $key=>$value): ?>
<dt>
<?php echo $model->Books[$key]->title; ?>
</dt>
<dd>
<?php echo $model->Books[$key]->description; ?>
</dd>
<?php endforeach; ?>
</dl>
