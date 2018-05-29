<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\notification\models\Kullanici */

$this->title = $model->kullanici_id;
$this->params['breadcrumbs'][] = ['label' => 'Kullanicilar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanici-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kullanici_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kullanici_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kullanici_id',
            'kullanici_adSoyad',
            'okundu_tarih',
        ],
    ]) ?>

</div>
