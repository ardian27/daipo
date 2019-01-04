<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisMasalah */

$this->title = 'Create Jenis Masalah';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-masalah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
