<?php
    $this->title = 'Books';
?>

<h1><?php echo $model->title; ?></h1>

<embed
    style="width:100%"
    src="http://libertedexpression.co.uk/art/literature/<?php echo $model->types['pdf']; ?>"
    width="400"
    height="400"
    alt="pdf"
    pluginspage="http://www.adobe.com/products/acrobt/readstep2.html">
</embed>