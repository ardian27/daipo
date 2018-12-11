<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Riwayat */

$this->title = $model->id_riwayat;
$this->params['breadcrumbs'][] = ['label' => 'Riwayats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_riwayat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_riwayat], [
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
            'id_riwayat',
            'id_tiket',
            'riwayat',
            'user',
        ],
    ]) ?>

</div>
