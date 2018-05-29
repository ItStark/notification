<?php

namespace kouosl\notification\controllers\frontend;


class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }		
	
	//Kendi yazdigim hello page
	//Frontend controller -> frontend view i calistirir

}
