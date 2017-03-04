<?php
    $this->title = 'Books';
?>

<h1>Childrens' Books</h1>

<p>
    Over the past 10 years, Liberte d'Expression's focus has been towards illustrated childrens' books, of which "Mr. T &amp; the J Man", "Cheeky Monkey" and a series of six books under the title of "Happy Lane".
</p>

<?php 
$happyLane = [];
$otherBooks = [];

foreach($model->Books as $key=>$value):
    if($model->Books[$key]->category == 'Happy Lane Series') {
        array_push($happyLane, $value);
    } elseif($model->Books[$key]->category == 'Other Books') {
        array_push($otherBooks, $value);
    } 
endforeach;
?>

<section class="happy-lane-series">
    <h2>Happy Lane Series</h2>
    <ul>
        <?php foreach($happyLane as $book): ?>
        <li>
            <?php echo $book->description; ?> <a href="/books/<?php echo $book->id; ?>" title="View book">"<?php echo $book->title; ?>"</a>
            <a href="http://libertedexpression.co.uk/art/literature/<?php echo $book->types['pdf']; ?>" title="Download PDF">PDF</a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<section class="other-books">
    <h2>Other Books</h2>
    <ul>
        <?php foreach($otherBooks as $book): ?>
        <li>
            <?php echo $book->description; ?> <a href="/books/<?php echo $book->id; ?>" title="View book">"<?php echo $book->title; ?>"</a>
            <a href="http://libertedexpression.co.uk/art/literature/<?php echo $book->types['pdf']; ?>" title="Download PDF">PDF</a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php if($model->SelectedBook != null) { ?>
    <div class="media-play">
        <embed
            style="width:100%"
            src="http://libertedexpression.co.uk/art/literature/<?php echo $model->SelectedBook->types['pdf']; ?>"
            width="400"
            height="400"
            alt="pdf"
            pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" />
    </div>
<?php } ?>