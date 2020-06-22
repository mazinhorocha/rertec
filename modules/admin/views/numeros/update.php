<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Numeros */

$this->title = 'Update Numeros: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Numeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="numeros-update">

    <h5><?= Html::encode($this->title) ?></h5>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
