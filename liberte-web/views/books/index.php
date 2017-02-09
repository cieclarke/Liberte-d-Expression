<?php
    $this->title = 'Books';
?>

<h1>Books</h1>

<dl>
    <?php foreach($model->Books as $key=>$value): ?>
    <dt>
        <h6><?php echo $model->Books[$key]->title; ?></h6>
    </dt>
    <dd>
        <?php echo $model->Books[$key]->description; ?>
        <p><a href="http://libertedexpression.co.uk/art/literature/<?php echo $model->Books[$key]->types['pdf']; ?>">PDF</a></p>
        <p><a href="/books/book/<?php echo $model->Books[$key]->id; ?>">Read Inline</a></p>
    </dd>
    <?php endforeach; ?>
</dl>
