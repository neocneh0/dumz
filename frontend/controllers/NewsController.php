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
    public function actionIndex($category)
    
    {
        
        
        $model = new News();
        //Передача через страку данных в гет//
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionForm()
{
    echo 1111;
}
    
}







    
