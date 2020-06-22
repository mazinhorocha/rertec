<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use richardfan\widget\JSRegister;
use yii\helpers\Url;

function fieldOptions($col = null, $style = null){
    return [
        'options' => ['class' => "form-group col-md-{$col}", 'style' => $style],
        'inputTemplate' => "{input}",
        'inputOptions' => ['class' => 'form-control form-control-sm'],
    ];
}
?>
<h5>Banner - Página inicial</h5>
<hr>

<?php $form = ActiveForm::begin([
    'options' => [
        'enctype'=>'multipart/form-data'
    ]
]); ?>
    <div class="row">
        <div class="col-9">
            <div class="row">
                <?= $form->field($model, 'title', fieldOptions(6))->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'subtitle', fieldOptions(6))->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'text', fieldOptions(12))->textarea(['maxlength' => true, 'rows' => 8]) ?>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Textos Automáticos <button type="button" id="add-text" class="btn btm-sm btn-link pull-right">+ Adicionar</button>
                        </div>
                        <div class="card-body">
                            <div id="typpings" class="row">
                                <?php
                                if(isset($model->typpings) && gettype(unserialize($model->typpings)) == 'array'){
                                    $indice = 1;
                                    foreach (unserialize($model->typpings) as $k => $typping) { ?>
                                        <div id="form-group-<?= $k ?>" class="form-group col-6">
                                            <label for="homebanner-typpings-<?= $k ?>">Texto <?= $indice ?></label>
                                            <div class="input-group">
                                                <input type="text" name="HomeBanner[typpings][<?= $k ?>]" value="<?= $typping ?>" id="homebanner-typpings-<?= $k ?>" class="form-control">
                                                <div class="input-group-append">
                                                    <button class="remove btn btn-outline-secondary" type="button" id="button-typpings-<?= $k ?>">Remover</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $indice++; }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card mt-2">
                <div class="card-header">
                    Ações
                </div>
                <div class="card-body">
                    <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-block']) ?>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header d-flex align-content-center justify-content-between">
                    Clientes
                    <button type="button" class="btn btn-sm btn-primary btn-default pull-right" data-toggle="modal" data-target="#exampleModal">
                        + <i class="fa fa-image"></i>
                    </button>
                </div>
                <div class="card-body">
                    <div id="client-logos" class="row">
                        <?php if(isset($model->images)) : ?>
                            <?php foreach (unserialize($model->images) as $k => $item) : ?>
                                <div id="image-<?= $k ?>" data-item="<?= $k ?>" class="gallery-thumbnail col-6 mb-2" style="position: relative">
                                    <span class="drop-image btn btn-sm btns-danger btn-icon" id="trash-<?= $k ?>" data-id="<?= $k ?>" style="display: none; position: absolute; top: -7px; right: 0; background: indianred; color: #fff">
                                        <i class="fa fa-trash"></i>
                                    </span>
                                    <img class="img-thumbnail" src="/<?= $item['link'] ?>" alt="">
                                    <input type="hidden" name="HomeBanner[images][<?= $k ?>][id]" value="<?= $item['id'] ?>">
                                    <input type="hidden" name="HomeBanner[images][<?= $k ?>][link]" value="<?= $item['link'] ?>">
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
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


<?php JSRegister::begin([
    'position' => \yii\web\View::POS_END
]); ?>
    <script>
        $(document).ready(function(){
            $('.check-image').on('change', function(){
                if( $(this).prop( "checked" ) === true )
                    $.ajax({
                        method: "POST",
                        url: "add-image",
                        data: { id: $(this).attr('id'), link: $(this).attr('data-link') }
                    })
                    .done(function( html ) {
                        $("#client-logos").append(html)
                    });
                else
                    alert('remover')
            })
        })

        $('#add-text').click(function(){
            $.ajax({
                method: "POST",
                url: "add-typping"
            })
            .done(function( html ) {
                $("#typpings").append(html)
            });
        })

        //////////////////////////////////////
        //////// DROP ZONE CONFIG
        $('.drop-image').click( function() {
            let meta = confirm('Confirma a exclusão?');
            const img_id = $(this).attr('data-id');

            if (meta === true) {
                $(`#image-${img_id}`).remove()
                /*fetch(`drop-image?id=${img_id}`)
                .then(result => {
                    $(`#image-${img_id}`).hide('slow')
                    console.warn('RESULT', result);
                }, error => {
                    console.warn('Falhou!!!', error);
                })*/
            }
        })

        $('.gallery-thumbnail').mouseover(function(){
            let element = $(this).attr('data-item');
            $(`#trash-${element}`).show('fast');
        })
        $('.gallery-thumbnail').mouseleave(function(){
            let element = $(this).attr('data-item');
            $(`#trash-${element}`).hide('fast');
        })

    </script>
<?php JSRegister::end(); ?>