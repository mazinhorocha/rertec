<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
use richardfan\widget\JSRegister;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos */
/* @var $form yii\widgets\ActiveForm */
/* @var wraper yii\bootstrap4\ActiveForm */

function wraper($col = null, $style = null){
    return [
        'options' => ['class' => "form-group col-md-{$col}", 'style' => $style],
        'inputTemplate' => "{input}",
        'inputOptions' => ['class' => 'form-control form-control-sm'],
    ];
}
?>

<div class="produtos-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-9">
            <div class="row">
                <?= $form->field($model, 'title', wraper(12))->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'body', wraper(12))->textarea(['rows' => 6]) ?>
            </div>
        </div>
        <div class="col-3">

            <div class="card mb-3">
                <div class="card-header">
                    Ações
                </div>
                <div class="card-body">
                    <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-block']) ?>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Imagem
                </div>
                <div class="card-body" style="position: relative">
                    <div id="thumbnail" data-toggle="modal" data-target="#media-manager" style="position: relative; min-height: 100px; background: url(<?= Url::to('@web/storage/') . 'placeholder.png'?>); background-size: cover; background-position: center center">
                        <img src="/<?= $model->image ?: '' ?>" id="thumbnail-image" class="img-thumbnail" style="display: <?= $model->image ? 'block':'none' ?>" alt="">
                        <input id="thumbnail-input" type="hidden" name="Post[image]" value="<?= $model->image ?: '' ?>">
                    </div>
                    <span id="drop-image" class="btn btn-sm btns-danger btn-icon" style="display: <?= $model->image ? 'block':'none';?>; position: absolute; top: 10px; right: 10px; background: indianred; color: #fff">
                            <i class="fa fa-trash"></i>
                        </span>
                </div>
            </div>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <!-- Modal -->
    <div class="modal fade" id="media-manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 bd-example">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="true">Galeria</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Enviar</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">

                                    <div class="row pt-3">
                                        <?php
                                        $photos = \app\models\Media::find()->all();
                                        if($photos) :
                                            foreach ($photos as $photo) { ?>
                                                <div class="col-3">
                                                    <div class="card">
                                                        <div class="card-body gallery-thumbnail" style="position: relative">
                                                            <div class="" style="position: absolute; top: -7px; right: 0;">
                                                                <button class="drop-image btn btn-sm btn-danger" id="trash-<?= $photo->id ?>" data-id="<?= $photo->id ?>">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>

                                                                <button class="btn btn-sm btn-secondary">
                                                                    <label for="<?= $photo->id ?>" style="padding: 0">
                                                                        <input id="<?= $photo->id ?>" data-link="<?=$photo->link?>" class="check-image" type="checkbox"
                                                                               name="NossosClientes[clients][<?=$photo->link?>]">
                                                                    </label>
                                                                </button>
                                                            </div>
                                                            <img src="<?= Url::to('@web/') . $photo->link ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php endif; ?>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                                    <form action="upload" class="dropzone mt-5" style="border-radius: 6px">
                                        <h6 class="text-center">Enviar Fotos</h6>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>

</div>



<?php JSRegister::begin([
    'position' => \yii\web\View::POS_END
]); ?>
<script>
    $(document).ready(function(){
        $('.check-image').on('change', function(){
            if( $(this).prop( "checked" ) === true ) {
                let link = $(this).attr('data-link');
                $('#thumbnail-image').attr('src', '/'+$(this).attr('data-link')).show();
                $('#thumbnail-image').show('slow');
                $('#thumbnail-input').val($(this).attr('data-link'))
                $('#drop-image').show();
                $('#media-manager').modal('hide');
                $('#media-manager input[type=checkbox]').prop('checked', false);
            }
        })

        $('#drop-image').click(function(){
            $('#thumbnail-image').attr('src', '')
            $('#thumbnail-image').hide();
            $('#thumbnail-input').val('');
        })
    })

</script>
<?php JSRegister::end(); ?>
