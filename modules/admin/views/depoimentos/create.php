<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Depoimentos */

$this->title = 'Novo Depoimento';
$this->params['breadcrumbs'][] = ['label' => 'Depoimentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="depoimentos-create">

    <h5><?= Html::encode($this->title) ?></h5>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
