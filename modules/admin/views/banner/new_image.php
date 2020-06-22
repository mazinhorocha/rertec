<?php
/* @var $this yii\web\View */

?>

<div id="image-<?= $data['id'] ?>" data-item="<?= $data['id'] ?>" class="product-thumbnail col-6 mb-2" style="position: relative">
    <span class="drop-image btn btn-sm btn-danger btn-icon" id="trash-<?= $data['id'] ?>" data-id="<?= $data['id'] ?>" style="display: none; position: absolute; top: -7px; right: 0; height: 1.8rem; width: 1.8rem">
        <i class="fa fa-trash"></i>
    </span>
    <img class="img-thumbnail img-fluid" src="/<?= $data['link'] ?>" alt="">
    <input type="file" name="NossosClientes[clients][]">
</div>