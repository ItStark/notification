<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\notification\models\Bildirim */

$this->title = 'Update Bildirim: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bildirims', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bildirim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
