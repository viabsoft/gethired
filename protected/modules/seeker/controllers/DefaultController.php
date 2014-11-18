<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$model=new Users("signup");
		$loginmodel=new Users("login");
		$this->render('seeker.views.default.index',array(
			'model'=>$model,'loginmodel'=>$loginmodel,
		));
	}
	
	public function actionAccount()
	{
		$model = new Users();
		$this->render('seeker.views.default.account',array(
			'model'=>$model,
		));
	}
	public function actionLogin()
	{
		$model=new Users("login");
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		// collect user input data
		if(isset($_POST['Users'][2]))
		{


			$model->attributes=$_POST['Users'][2];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(array("/seeker/account"));
		}
		// display the login form
		Yii::app()->user->setFlash('info', "Invalid Email or Password.");
		$this->render('seeker.views.default.index',array(
			'model'=>new Users('signup'),'loginmodel'=>$model,
		));
	}
}