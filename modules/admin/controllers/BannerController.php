<?php

namespace app\modules\admin\controllers;

use app\models\HomeBanner;
use app\models\Media;
use app\models\NossosClientes;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class BannerController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'upload' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        if (($model = HomeBanner::find()->one()) !== null) {
            $this->redirect('/admin/banner/update');
        } else
            $this->redirect('/admin/banner/create');
    }

    public function actionCreate()
    {
        $model = new HomeBanner();

        if ($model->load(\Yii::$app->request->post())) {

            $model->images = isset($model->images) ? serialize($model->images) : null;
            $model->typpings = isset($model->typpings) ? serialize($model->typpings) : null;

            $model->save();
            return $this->redirect('update');
        }

        return $this->render('form', ['model' => $model]);
    }

    public function actionUpdate()
    {
        $model = HomeBanner::find()->one();

        if ($model->load(\Yii::$app->request->post())) {

            $model->images = isset($model->images) ? serialize($model->images) : null;
            $model->typpings = isset($model->typpings) ? serialize($model->typpings) : null;
            $model->save();
        }

        return $this->render('form', ['model' => $model]);
    }

    public function actionAddTypping()
    {
        Yii::$app->response->format = Response::FORMAT_HTML;
        $uniqid = uniqid();

        return "<div id=\"form-group-{$uniqid}\" class=\"form-group col-6\">
            <label for=\"homebanner-typpings-{$uniqid}\">Novo Texto</label>
            <div class=\"input-group\">
                <input type=\"text\" name=\"HomeBanner[typpings][{$uniqid}]\" id=\"homebanner-typpings-{$uniqid}\" class=\"form-control\">
                <div class=\"input-group-append\">
                    <button class=\"remove btn btn-outline-secondary\" type=\"button\" id=\"button-typpings-{$uniqid}\">Remover</button>
                </div>
            </div>
        </div>";
    }

    public function actionAddImage()
    {
        Yii::$app->response->format = Response::FORMAT_HTML;
        $params = Yii::$app->request->post();
        $uniqid = uniqid();

        return "<div id=\"image-{$uniqid}\" data-item=\"{$uniqid}\" class=\"gallery-thumbnail col-6 mb-2\" style=\"position: relative\">
            <span class=\"drop-image btn btn-sm btn-danger btn-icon\" id=\"trash-{$uniqid}\" data-id=\"{$uniqid}\" style=\"display: none; position: absolute; top: -7px; right: 0; height: 1.8rem; width: 1.8rem\">
                <i class=\"fa fa-trash\"></i>
            </span>
            <img class=\"img-thumbnail img-fluid\" src=\"/{$params['link']}\" alt=\"\">            
            <input type=\"hidden\" name=\"HomeBanner[images][{$uniqid}][id]\" value=\"{$params['id']}\">
            <input type=\"hidden\" name=\"HomeBanner[images][{$uniqid}][link]\" value=\"{$params['link']}\">
        </div>";
    }

    public function actionUpload(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $session = Yii::$app->session;

        $uploaddir = "storage/";
        $filename = md5(time() . $_FILES['file']['name']) . '.jpg';
        $uploadfile = $uploaddir . basename($filename);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

            $model = new Media();
            $model->name = $filename;
            $model->link = $uploadfile;
            $model->save();

            print_r($model->hasErrors()); die;

        } else {
            echo "Possible file upload attack!\n";
        }
    }

    /**
     * Deletes an existing ProductStorage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDropImage($id)
    {
        $photo = ProductPhoto::findOne($id);

        if($photo->delete()){
            @unlink($photo->link);
            return true;
        }else{
            return false;
        }

    }

}
