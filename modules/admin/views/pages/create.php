<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */

$this->title = 'Create Pages';
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="pages-create">

    <h5><?= Html::encode($this->title) ?></h5>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
