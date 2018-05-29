<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\notification\models\Kullanici */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kullanici-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kullanici_adSoyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'okundu_tarih')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
