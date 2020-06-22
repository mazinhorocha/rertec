<?php

namespace app\modules\admin\controllers;

use app\models\Media;
use app\models\NossosClientes;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class UploadController extends \yii\web\Controller
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
