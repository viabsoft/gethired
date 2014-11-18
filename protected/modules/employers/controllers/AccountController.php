<?php

class AccountController extends Controller
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
				'actions'=>array('index','view','create','verify','login','profile','home','org','departments','new_dept','del_dept','edit_dept','jobs','new_job'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
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
				$this->redirect(array("index"));
		}
		// display the login form
		Yii::app()->user->setFlash('info', "Invalid Email or Password.");
		$this->render('employers.views.default.index',array(
			'model'=>new Users('signup'),'loginmodel'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users("signup");
		$loginmodel=new Users("login");
		
 
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
if(isset($_POST['ajax']) && $_POST['ajax']==='employer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_POST['Users'][1]))
		{
			$model->attributes=$_POST['Users'][1];
			$model->IsActive = 0;
			$model->IsDeleted = 0;
			//$model->Status = 1;
			$model->DateAdded = time();
			$model->IsVerified = 0;
			$model->VerificationCode =substr(number_format(time() * rand(),0,'',''),0,10); 
			//unset($model->Confirm_Password);
			if($model->save())
			{
				$this->render('success',array('model'=>new Users("verify")));
			}
			
		}
		Yii::app()->user->setFlash('error', "Uh ho!!, Please check the error(s).");
		$this->render('employers.views.default.index',array(
			'model'=>$model,'loginmodel'=>$loginmodel,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Employer']))
		{
			$model->attributes=$_POST['Employer'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionVerify()
	{
		$model=new Users("verify");
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['VerificationCode']))
		{
		
			$command = Yii::app()->db->createCommand();
			$rows_ = $command->update('users', array(
									    'IsVerified'=>'1',
									), 'VerificationCode=:VerificationCode', array(':VerificationCode'=>trim($_POST['VerificationCode'])));
   			
   			print_r($rows_);
   			if($rows_){
   				Yii::app()->user->setFlash('info', "Account Verified, You can login to acess your account now.");
   				$this->redirect(array('//employers'));
   			}
   			else
   			{
   				Yii::app()->user->setFlash('info', "Account Already Verified or Invalid Verification Code.");
   				$this->render('verify',array('model'=>$model));
   			}

   			
		}

		$this->render('verify',array(
			'model'=>$model,
		));
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

	/**
	 * Lists all models.
	 */
	 public function actionHome()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		
		$emp_data =  Employer::model()->findByPk(Yii::app()->user->Id);
		$emp_data->scenario ='profile';
		if(!isset($emp_data->Company_Name))
		{
			$model = new Employer('profile');
			$this->redirect('org');
		}
		else
		{
			$this->render('employers.views.default.home',array('model'=>$emp_data,));
		}
	}
	 
	 public function actionProfile()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		$emp_data =  Users::model()->findByPk(Yii::app()->user->Id);
		$emp_data->scenario ='profile';
		if(isset($_POST['Users'])){
		//echo "hi";
			$emp_data->attributes = $_POST['Users'];
			$emp_data->IsActive = 1;
			$emp_data->IsDeleted = 0;			
			$emp_data->DateUpdated = time();			
	$emp_data->User_Type_Id = $emp_data->User_Type_Id;
			if($emp_data->validate())
			{		//	echo "ho";
				
				$emp_data->save();
				$this->redirect('home');
			}
		}
		
		
		$emp_data->Confirm_Email = $emp_data->Email;
		$this->render('employers.views.default.profile',array('model'=>$emp_data,));
		
	}
	public function actionIndex()
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
			$this->render('employers.views.default.home',array('model'=>$emp_data,));
		}
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
			//$this->render('employers.views.default.jobs',array('model'=>$emp_data,));
		}
	}
	public function actionDepartments()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		
		$model =  new CActiveDataProvider('Departments' ,array('criteria'=>array(
        'condition'=>'UserId='.Yii::app()->user->Id,)));
		
		//Departments::model()->findAllByAttributes(array('UserId'=>Yii::app()->user->Id));
		$this->render('employers.views.default.departments',array('dataProvider'=>$model,));
		
	}
	
	public function actionEdit_dept($id)
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		$model = Departments::model()->findByPk($id);
		if(isset($_POST['Departments'])){
			$model->attributes = $_POST['Departments'];

			
			$model->DateUpdated = date("Y-m-d H:i:s");
			
			
	
			if($model->validate())
			{
				
				
				$model->save();
				$_model =  new CActiveDataProvider('Departments' ,array('criteria'=>array(
			'condition'=>'UserId='.Yii::app()->user->Id,)));
			
			//Departments::model()->findAllByAttributes(array('UserId'=>Yii::app()->user->Id));
			$this->render('employers.views.default.departments',array('dataProvider'=>$_model,));
			}
		}
		
		$this->render('employers.views.default.new_dept',array('model'=>$model,));
	}
	public function actionDel_dept($id)
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		$model = Departments::model()->findByPk($id);
		$recs = $model->delete();
		$model =  new CActiveDataProvider('Departments' ,array('criteria'=>array(
        'condition'=>'UserId='.Yii::app()->user->Id,)));
		
		//Departments::model()->findAllByAttributes(array('UserId'=>Yii::app()->user->Id));
		$this->render('employers.views.default.departments',array('dataProvider'=>$model,));
	}
	public function actionNew_dept()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		$model = new Departments();
		if(isset($_POST['Departments'])){
			$model->attributes = $_POST['Departments'];
			
			$model->IsActive = 1;
			
			$model->UserId = Yii::app()->user->id;
			
			$model->DateAdded = date("Y-m-d H:i:s");
			$model->DateUpdated = date("Y-m-d H:i:s");
			
			
	
			if($model->validate())
			{
				
				
				$model->save();
				$this->redirect('departments');
			}
		}
		$this->render('employers.views.default.new_dept',array('model'=>$model,));
		
	}
	
public function actionOrg()
	{
		if(Yii::app()->user->isGuest)
		{
			$this->redirect(array('//employers'));
		}
		
		//$model =  Employer('profile');
		$model =Employer::model()->findByPk(Yii::app()->user->Id);// $model->findByAttributes(array('User_Id'=>Yii::app()->user->Id));
		$model->scenario ='profile';
		//print_r($emp_data);
		if(isset($_POST['Employer'])){
			$model->attributes = $_POST['Employer'];
			$model->Status = 1;
			$model->IsActive = 1;
			$model->IsDeleted = 0;
			$model->User_Id = Yii::app()->user->id;
			$model->Incorporation_Date = date("Y-m-d",strtotime($_POST['Employer']['Incorporation_Date']));
			$model->Date_Added = date("Y-m-d H:i:s");
			$model->Date_Updated = date("Y-m-d H:i:s");
			$model->Date_Activated = date("Y-m-d H:i:s");
			
	
			if($model->validate())
			{
				
				
				$model->save();
				$this->redirect('home');
			}
		}
		$this->render('employers.views.default.org',array('model'=>$model,));

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
