<?php

namespace app\controllers;

use app\models\Clientes;
use app\models\Depoimentos;
use app\models\HomeBanner;
use app\models\NossosClientes;
use app\models\Numeros;
use app\models\Pages;
use app\models\Post;
use app\models\Produtos;
use app\models\Servico;
use Codeception\PHPUnit\Constraint\Page;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $banner = HomeBanner::find()->one();
        $sobre = Pages::findOne(['slug' => 'sobre_nos']);
        $blog_page = Pages::findOne(['slug' => 'blog']);
        $posts = Post::find()->limit(3)->all();
        $servico_page = Pages::findOne(['slug' => 'servicos']);
        $servicos = Servico::find()->limit(3)->all();
        $numeros_page = Pages::findOne(['slug' => 'numeros']);
        $numeros = Numeros::find()->limit(4)->all();
        $clientes_page = Pages::findOne(['slug' => 'clientes']);
        $clientes = Clientes::find()->all();
        $depoimentos_page = Pages::findOne(['slug' => 'depoimentos']);
        $depoimentos = Depoimentos::find()->all();

        return $this->render('home',[
            'banner' => $banner,
            'sobre' => $sobre,
            'blog_page' => $blog_page,
            'posts' => $posts,
            'servico_page' => $servico_page,
            'servicos' => $servicos,
            'numeros_page' => $numeros_page,
            'numeros' => $numeros,
            'depoimentos_page' => $depoimentos_page,
            'depoimentos' => $depoimentos,
            'clientes_page' => $clientes_page,
            'clientes' => $clientes,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admin');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContato()
    {
        $model = new ContactForm();
        $page = Pages::findOne(['slug' => 'contato']);
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contato', [
            'model' => $model,
            'page' => $page
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionSobreNos()
    {
        $page = Pages::findOne(['slug' => 'sobre_nos']);
        return $this->render('sobre-nos', [
            'page' => $page
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionProdutos()
    {
        $page = Pages::findOne(['slug' => 'produtos']);
        $produtos = Produtos::find()->all();

        return $this->render('produtos', [
            'page' => $page,
            'produtos' => $produtos
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionServicos()
    {
        return $this->render('servicos');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionBlog()
    {
        $page = Pages::findOne(['slug' => 'blog']);
        $posts = Post::find()->all();
        return $this->render('blog', ['page' => $page, 'posts' => $posts]);
    }
}
