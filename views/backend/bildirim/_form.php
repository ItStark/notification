<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\notification\models\Bildirim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bildirim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bildirim_tip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bildirim_icerik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bildirim_tarih')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
