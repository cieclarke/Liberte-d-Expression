<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>


</head>
<body class="<?= $this->params['class'] ?>">

<nav>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/paintings/">Paintings</a>
        </li>
        <li>
            <a href="/interior-design/">Interior Design</a>
        </li>
        <li>
            <a href="/music/">Music</a>
        </li>
        <li>
            <a href="/books/">Books</a>
        </li>
    </ul>
</nav>

<?= $content ?>

</body>
</html>
<?php $this->endPage() ?>
