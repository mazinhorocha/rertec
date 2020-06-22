<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Depoimentos */

$this->title = 'Editar Depoimento';
$this->params['breadcrumbs'][] = ['label' => 'Depoimentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="depoimentos-update">

    <h5><?= Html::encode($this->title) ?></h5>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
