<?php
namespace api\controllers;

use Yii;
use yii\rest\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return 'API HOME!';
    }


    public function actionError()
    {

        return 'An error occured';
    }
}
