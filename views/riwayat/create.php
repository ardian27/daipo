<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Riwayat */

$this->title = 'Create Riwayat';
$this->params['breadcrumbs'][] = ['label' => 'Riwayats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
