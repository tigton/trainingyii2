<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
     public function actionPage1()
    {
        return $this->render('page1');
    }
     public function actionPage2()
    {
         $hello="Hello World  Page 2";
         $a=99;
         $b=1;
        return $this->render('page2',
                ['hello'=>$hello,
                'x'=>$a,
                'b'=>$a+$b]);
        // array()=[]   
    }
      public function actionPage3()
    {
        return $this->render('page3');
    }
}
