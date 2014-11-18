<?php

/**
 * This is the model class for table "professional_exp".
 *
 * The followings are the available columns in table 'professional_exp':
 * @property integer $Id
 * @property integer $ResumeId
 * @property string $CompanyName
 * @property string $CompanyWeb
 * @property string $CompanyEmail
 * @property string $CompanyNumber
 * @property integer $CityId
 * @property integer $ProvinceId
 * @property integer $CountryId
 * @property string $JobTitle
 * @property integer $JobTypeId
 * @property string $Responsibilities
 * @property string $ReasonForLeaving
 * @property string $DurationStart
 * @property string $DurationEnd
 * @property integer $CurrentlyWorking
 * @property string $JoiningSalary
 * @property string $LastSalary
 * @property string $Benefits
 * @property integer $Active
 * @property integer $Blocked
 * @property string $DateAdded
 * @property string $DateUpdated
 */
class ProfessionalExp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProfessionalExp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'professional_exp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ResumeId, CityId, ProvinceId, CountryId, JobTypeId, CurrentlyWorking, Active, Blocked', 'numerical', 'integerOnly'=>true),
			array('CompanyName, JobTitle', 'length', 'max'=>255),
			array('CompanyWeb', 'length', 'max'=>500),
			array('CompanyEmail', 'length', 'max'=>300),
			array('CompanyNumber', 'length', 'max'=>45),
			array('Responsibilities, ReasonForLeaving, Benefits', 'length', 'max'=>1000),
			array('JoiningSalary, LastSalary', 'length', 'max'=>10),
			array('DurationStart, DurationEnd, DateAdded, DateUpdated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, ResumeId, CompanyName, CompanyWeb, CompanyEmail, CompanyNumber, CityId, ProvinceId, CountryId, JobTitle, JobTypeId, Responsibilities, ReasonForLeaving, DurationStart, DurationEnd, CurrentlyWorking, JoiningSalary, LastSalary, Benefits, Active, Blocked, DateAdded, DateUpdated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'ResumeId' => 'Resume',
			'CompanyName' => 'Company Name',
			'CompanyWeb' => 'Company Web',
			'CompanyEmail' => 'Company Email',
			'CompanyNumber' => 'Company Number',
			'CityId' => 'City',
			'ProvinceId' => 'Province',
			'CountryId' => 'Country',
			'JobTitle' => 'Job Title',
			'JobTypeId' => 'Job Type',
			'Responsibilities' => 'Responsibilities',
			'ReasonForLeaving' => 'Reason For Leaving',
			'DurationStart' => 'Duration Start',
			'DurationEnd' => 'Duration End',
			'CurrentlyWorking' => 'Currently Working',
			'JoiningSalary' => 'Joining Salary',
			'LastSalary' => 'Last Salary',
			'Benefits' => 'Benefits',
			'Active' => 'Active',
			'Blocked' => 'Blocked',
			'DateAdded' => 'Date Added',
			'DateUpdated' => 'Date Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('ResumeId',$this->ResumeId);
		$criteria->compare('CompanyName',$this->CompanyName,true);
		$criteria->compare('CompanyWeb',$this->CompanyWeb,true);
		$criteria->compare('CompanyEmail',$this->CompanyEmail,true);
		$criteria->compare('CompanyNumber',$this->CompanyNumber,true);
		$criteria->compare('CityId',$this->CityId);
		$criteria->compare('ProvinceId',$this->ProvinceId);
		$criteria->compare('CountryId',$this->CountryId);
		$criteria->compare('JobTitle',$this->JobTitle,true);
		$criteria->compare('JobTypeId',$this->JobTypeId);
		$criteria->compare('Responsibilities',$this->Responsibilities,true);
		$criteria->compare('ReasonForLeaving',$this->ReasonForLeaving,true);
		$criteria->compare('DurationStart',$this->DurationStart,true);
		$criteria->compare('DurationEnd',$this->DurationEnd,true);
		$criteria->compare('CurrentlyWorking',$this->CurrentlyWorking);
		$criteria->compare('JoiningSalary',$this->JoiningSalary,true);
		$criteria->compare('LastSalary',$this->LastSalary,true);
		$criteria->compare('Benefits',$this->Benefits,true);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('Blocked',$this->Blocked);
		$criteria->compare('DateAdded',$this->DateAdded,true);
		$criteria->compare('DateUpdated',$this->DateUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}