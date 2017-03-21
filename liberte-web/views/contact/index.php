<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>
        <p class="advice-form-fields">Required fields</p>
        <form id="contact-form" action="/contact/" method="post" role="form">
            <fieldset>
                <legend>Drop us a line</legend>
                <dl>
                    <dt>
                        <label class="required" for="contactform-name">Your name</label>
                    </dt>
                    <dd>
                        <input id="contactform-name" name="ContactForm[name]" autofocus="" type="text" required="required" />
                        <?php echo array_key_exists('name', $model->errors) ? '<span>' . $model->errors['name'][0] . '</span>' : ''; ?>
                    </dd>
                    <dt>
                        <label class="required" for="contactform-email">Your e-mail</label>
                    </dt>
                    <dd>
                        <input id="contactform-email" name="ContactForm[email]" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required="required" />  
                        <?php echo array_key_exists('email', $model->errors) ? '<span>' . $model->errors['email'][0] . '</span>' : ''; ?>
                    </dd>
                    <dt>
                        <label class="required" for="contactform-subject">Subject</label>
                    </dt>
                    <dd>
                        <input id="contactform-subject" name="ContactForm[subject]" type="text" required="required" />
                        <?php echo array_key_exists('subject', $model->errors) ? '<span>' . $model->errors['subject'][0] . '</span>' : ''; ?>
                    </dd>
                    <dt>
                        <label class="required" for="contactform-body">Message</label>
                    </dt>
                    <dd>
                        <textarea id="contactform-body" name="ContactForm[body]" rows="6" required="required"></textarea>
                        <?php echo array_key_exists('body', $model->errors) ? '<span>' . $model->errors['body'][0] . '</span>' : ''; ?>
                    </dd>
                </dl>
            </fieldset>
            <input type="submit" value="Submit" name="contact-button" />
        </form>

    <?php endif; ?>
</div>
