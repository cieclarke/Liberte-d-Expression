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

    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="/scripts/fancybox/source/jquery.fancybox.min.css?v=2.1.6" type="text/css" media="screen" />

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="/scripts/static.min.js"></script>

    <?php
        if (strlen($this->params['script-bgswitcher']) > 0) {
        ?>
            <script src="/scripts/jquery.bgswitcher.min.js"></script>
        <?php
        }
    ?>

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
        <a href="/" title="Liberté d'Expression, The underground world of art and design">
            <img class="site-home" src="../images/LiberteLogo_white_450x144.png" alt="Home" />
        </a>
        <nav role="navigation">
            <ul class="menu-site">
                <li class="home">
                    <a href="/">Home</a>
                </li>
                <li class="paintings">
                    <a href="/paintings/">Paintings</a>
                </li>
                <li class="interior-design">
                    <a href="/interior-design/">Interior Design</a>
                </li>
                <li class="music">
                    <a href="/music/">Music</a>
                </li>
                <li class="books">
                    <a href="/books/">Childrens' Books</a>
                </li>
            </ul>
        </nav>
    </header>
    <main id="main" class="main" role="main">
        <?= $content ?>
    </main>
    <footer role="contentinfo">
        <ul>
            <!-- view temporarily disabled by request, 8/4/2017
            <li>
                <a href="/about/">About the team</a>
            </li>
            -->
            <li>
                <a href="/contact/">Get in touch</a>
            </li>
        </ul>
        <p>Liberte d’Expression Ltd Registered in England &amp; Wales as a company number 5850952. Registered office: Lupins Business Centre 1-3 Greenhill, Weymouth, Dorset DT4 7SP.</p>
        <p>&copy; 2017 Liberté d'Expression Ltd., All rights reserved.</p>
    </footer>
</body>
</html>
<?php $this->endPage() ?>
