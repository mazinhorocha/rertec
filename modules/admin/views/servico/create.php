<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Servico */

$this->title = 'Novo Servico';
$this->params['breadcrumbs'][] = ['label' => 'Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servico-create">

    <h5><?= Html::encode($this->title) ?></h5>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
