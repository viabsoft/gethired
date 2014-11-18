<?php

class JobsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','verify','login','profile','home','org','departments','new_dept','edit_job','del_job','del_dept','edit_dept','jobs','new_job'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionNew_job()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		$model = new Job();
		if(isset($_POST['Job'])){
			$model->attributes = $_POST['Job'];
			//print_r($_POST['Job']);
			$model->IsActive = 1;
			
			$model->UserId = Yii::app()->user->id;
			
			$model->DateAdded = date("Y-m-d H:i:s");
			$model->DateUpdated = date("Y-m-d H:i:s");
			$model->ExpirationDate = date("Y-m-d H:i:s",strtotime($_POST['Job']['ExpirationDate']) );

			if($model->validate())
			{
				
				
				$model->save();
				$this->redirect(array('account/jobs'));
			}
		}
		$this->render('employers.views.default.new_job',array('model'=>$model,));
		
	}
	public function actionDel_job($id)
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		$model = Job::model()->findByPk($id);
		$recs = $model->delete();
		$this->redirect(array('account/jobs'));
	}
	public function actionEdit_job($id)
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		$model = Job::model()->findByPk($id);
		if(isset($_POST['Job'])){
			$model->attributes = $_POST['Job'];
			//print_r($_POST['Job']);
			$model->IsActive = 1;
			
			$model->UserId = Yii::app()->user->id;
			
			//$model->DateAdded = date("Y-m-d H:i:s");
			$model->DateUpdated = date("Y-m-d H:i:s");
			$model->ExpirationDate = date("Y-m-d H:i:s",strtotime($_POST['Job']['ExpirationDate']) );

			if($model->validate())
			{
				
				
				$model->save();
				$this->redirect(array('account/jobs'));
			}
		}
		$this->render('employers.views.default.edit_job',array('model'=>$model,));
		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}


	public function actionIndex()
	{
		$this->actionJobs();
	}
	
	public function actionJobs()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		
		$emp_data =  Employer::model()->findByPk(Yii::app()->user->Id);
		//$emp_data = $model->findByAttributes(array('User_Id'=>Yii::app()->user->Id));
		//$emp_data =$model->findByPk(Yii::app()->user->Id);
		$emp_data->scenario ='profile';
		//print_r($emp_data);
		if(!isset($emp_data->Company_Name))
		{
			$model = new Employer('profile');
			$this->render('employers.views.default.org',array('model'=>$model,));
		}
		else
		{
			$model =  new CActiveDataProvider('Job' ,array('criteria'=>array(
        'condition'=>'UserId='.Yii::app()->user->Id,)));
		
		//Departments::model()->findAllByAttributes(array('UserId'=>Yii::app()->user->Id));
		$this->render('employers.views.default.jobs',array('dataProvider'=>$model,));
			//$this->render('employers.views.default.jobs',array('model'=>$emp_data,));
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Employer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Employer']))
			$model->attributes=$_GET['Employer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Employer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='employer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
