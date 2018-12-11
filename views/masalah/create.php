<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Masalah */

$this->title = 'Buat Laporan';
$this->params['breadcrumbs'][] = ['label' => 'Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masalah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
