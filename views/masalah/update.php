<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Masalah */

$this->title = 'Update Masalah: ' . $model->id_masalah;
$this->params['breadcrumbs'][] = ['label' => 'Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_masalah, 'url' => ['view', 'id' => $model->id_masalah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="masalah-update">

    <h1><?= Html::encode($this->title) ?></h1>
<p class="pull-right">
       <button onclick="history.go(-1);" class="btn btn-warning">Kembali</button>
      
    </p>
    <?= $this->render('update_status', [
        'model' => $model,
    ]) ?>

</div>
