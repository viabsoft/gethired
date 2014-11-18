<?php

class ResumeController extends Controller
{
	public function actionIndex()
	{
		$model=new Users("signup");
		$loginmodel=new Users("login");
		$this->render('seeker.views.default.index',array(
			'model'=>$model,'loginmodel'=>$loginmodel,
		));
	}
	
	public function actionNew()
	{
		$model = new Users();
		$this->render('seeker.views.default.new_resume',array(
			'model'=>$model,
		));
	}
	
}