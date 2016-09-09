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
    <title><?= Html::encode($this->title) ?> :: Liberté d'Expression</title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>-->

    <link rel="stylesheet" href="/css/a_normalise.css">
    <link rel="stylesheet" href="/css/b_layout.css">
    <link rel="stylesheet" href="/css/c_theme.css">
    <link rel="stylesheet" href="/css/d_typography.css">
    <link rel="stylesheet" href="/css/e_vendor.css">

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

    <!-- older IE support - remove this and associated files when IE8 support is dropped -->
    <!--[if lt IE 9]>
        <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 9]>
        <script src="scripts/oldIE.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="/css/z_ie.css" media="screen" />
    <![endif]-->

    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
</head>
<body class="<?= $this->params['class'] ?>">
    <a class="skip off-screen" href="#main">Skip to content</a>

    <header role="banner">
        <p class="logo-site anchor-image_">
            <a href="/">Liberté d'Expression</a><br />
            The underground world of art and design
        </p>
        
        <nav role="navigation">
            <ul class="menu-site">
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
    </header>
    <main id="main" class="main" role="main">
        <?= $content ?>
    </main>
    <footer role="contentinfo">
        <p>&copy; 2016 Liberté d'Expression Ltd., All rights reserved.</p>
        <ul>
            <li>
                <a href="/about/">About Liberté d'Expression</a>
            </li>
            <li>
                <a href="/contact/">Get in touch</a>
            </li>
        </ul>
    </footer>
</body>
</html>
<?php $this->endPage() ?>
