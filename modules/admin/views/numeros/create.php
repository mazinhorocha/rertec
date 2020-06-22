<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Numeros */

$this->title = 'Novo';
$this->params['breadcrumbs'][] = ['label' => 'Numeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="numeros-create">

    <h5><?= Html::encode($this->title) ?></h5>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
