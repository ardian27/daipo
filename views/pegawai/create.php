<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
if (!Yii::$app->user->can("admin")) {
    throw new HttpException(403, 'You are not allowed to perform this action.');
} else {
    
$this->title = 'Create Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php 

}
?>