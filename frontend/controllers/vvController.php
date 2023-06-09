<?php
//обращение к базе
namespace frontend\controllers;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use common\models\News;


/**
 * Сайт контроллер
 */
class NewsController extends Controller
{

    /**
     * Отображение домашней страницы
     *
     * @return mixed
     */
    public function actionVv()
    
    {
        return $this->render('vv', [
        ]);
    } 
}







    
