<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\notification\models\Bildirim */

$this->title = 'Create Bildirim';
$this->params['breadcrumbs'][] = ['label' => 'Bildirims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bildirim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
