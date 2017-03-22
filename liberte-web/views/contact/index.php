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

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <h1>Thanks</h1>
        <p class="fwibble">Please expect a reply soon.</p>

    <?php else: ?>
        <h1>Get in touch</h1>
        <p>
            We're always keen to hear from you. Please get in touch regarding any enquiries.
        </p>
        <form id="contact-form" action="/contact/" method="post" role="form">
            <p class="advice-form-fields">Required fields</p>
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
