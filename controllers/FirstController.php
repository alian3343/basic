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
		$hello="Hello World."; // กำหนดตัวแปร hello
		$x=8;
		$y=9;
		$tt=$x+$y;
        return $this->render('page2',[
			'hello'=>$hello,
			'x'=>$x,
			'y'=>$y,
			'z'=>$tt
		]);
		// การส่งค่าจะส่งเป็น array  'hello'=>$hello
    }

	public function actionPage3()
    {
        return $this->render('page3');
    }

}
