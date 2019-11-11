<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

echo "Hello!";
?>
<?php
$form=ActiveForm::begin();
?>
<?= $form->field($model, 'email')->textInput(['autofocus'=>true]); 
?>
<?= $form->field($model, 'password')->passwordInput(); ?>
<? ActiveForm::end(); ?>
