<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\User;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function actionTest(){
        $users = User::find()->all();
        return $this->render('test',['users'=>$users]);
    }

    public function actionCreate(){
        
        return $this->render('create');
    }
 
 
    public function actionUpdate(){
       # $user_id= ;
       $user = User::find()->where(['id' => $_GET['id']])->one();
        return $this->render('userUpdate',['user'=>$user]);
    }
     public function actionUpdateInDb(){
       # $user_id= ;
       $user = User::find()->where(['id' => $_GET['id']])->one();
       $user->name=$_GET['name'];
       $user->username=$_GET['username'];
       $user->email=$_GET['email'];
       $user->password=$_GET['password'];
       $user->mobile=$_GET['mobile'];
       $user->gender=$_GET['gender'];
          if(!$user->update())
       {
        Yii::$app->getSession()->setFlash('error', 'Missing field');
       }
        $this->redirect(Url::to(['site/test']));
    }
     public function actionCreateInDb(){
       # $user_id= ;
       $user=New User();
       $user->name=$_GET['name'];
       $user->username=$_GET['username'];
       $user->email=$_GET['email'];
       $user->password=$_GET['password'];
       $user->mobile=$_GET['mobile'];
       $user->gender=$_GET['gender'];
       
       if(!$user->save())
       {
        Yii::$app->getSession()->setFlash('error', 'Missing field');
       }
        $this->redirect(Url::to(['site/test']));
    }
    

       public function actionDeleteUser(){
       $user = User::find()->where(['id' => $_GET['id']])->one();
        $user->delete();
        $this->redirect(Url::to(['site/test']));
    }


    public function actionIndex()
    {
        return $this->render('index');
    }
}
