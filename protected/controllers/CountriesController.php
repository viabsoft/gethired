<?php

class CountriesController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionLoadprovince()
{
   $data=Province::model()->findAll('CountryId=:country_id', 
   array(':country_id'=>(int) $_POST['country_id']));
 
   $data=CHtml::listData($data,'Id','Name');
	
   echo "<option value=''>Select Province</option>";
   foreach($data as $value=>$Name)
   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($Name),true);
}


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}