<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Masalah */

$this->title = $model->id_masalah;
$this->params['breadcrumbs'][] = ['label' => 'Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masalah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="pull-right">
       <button onclick="history.go(-1);" class="btn btn-warning">Kembali</button>
      <a class="btn btn-success" href="index.php?r=masalah">Riwayat</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_masalah',
            'nama_pelapor',
            'id_jenis_masalah',
            'waktu_pelaporan',
            'detail_masalah:ntext',
            'status',
        ],
    ]) ?>

</div>
