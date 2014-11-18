<?php

/**
 * This is the model class for table "jobs".
 *
 * The followings are the available columns in table 'jobs':
 * @property integer $Id
 * @property string $Title
 * @property integer $DepartmentId
 * @property string $Description
 * @property string $Specs
 * @property string $Qualification
 * @property integer $CategoryId
 * @property integer $CareerLevelId
 * @property integer $ExperianceLevelId
 * @property integer $JobTypeId
 * @property integer $ShiftsId
 * @property integer $RequiredTraveling
 * @property string $SalaryMin
 * @property string $SalaryMax
 * @property integer $CurrencyId
 * @property integer $NoVacancies
 * @property integer $CountryId
 * @property integer $ProvinceId
 * @property integer $CityId
 * @property string $ExpirationDate
 * @property integer $EmailResume
 * @property integer $HotJob
 * @property integer $Showcase
 * @property integer $Highlighted
 * @property integer $IsActive
 * @property string $DateAdded
 * @property string $DateUpdated
 * @property integer $UserId
 */
class Job extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Job the static model class
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
		return 'jobs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DepartmentId, CategoryId, CareerLevelId, ExperianceLevelId, JobTypeId, ShiftsId, RequiredTraveling, CurrencyId, NoVacancies, CountryId, ProvinceId, CityId, EmailResume, HotJob, Showcase, Highlighted, IsActive, UserId', 'numerical', 'integerOnly'=>true),
			array('Title, Description, Specs,Qualification,DepartmentId, CategoryId, CareerLevelId, ExperianceLevelId, JobTypeId, ShiftsId, RequiredTraveling, CurrencyId, NoVacancies, CountryId, ProvinceId, CityId,ExpirationDate,SalaryMin,SalaryMax', 'required'),
			array('Title, Qualification', 'length', 'max'=>255),
			array('Description, Specs', 'length', 'max'=>2000),
			array('SalaryMin, SalaryMax', 'length', 'max'=>10),
			array('ExpirationDate, DateAdded, DateUpdated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Title, DepartmentId, Description, Specs, Qualification, CategoryId, CareerLevelId, ExperianceLevelId, JobTypeId, ShiftsId, RequiredTraveling, SalaryMin, SalaryMax, CurrencyId, NoVacancies, CountryId, ProvinceId, CityId, ExpirationDate, EmailResume, HotJob, Showcase, Highlighted, IsActive, DateAdded, DateUpdated, UserId', 'safe', 'on'=>'search'),
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
			'Title' => 'Title',
			'DepartmentId' => 'Department',
			'Description' => 'Description',
			'Specs' => 'Specs',
			'Qualification' => 'Qualification',
			'CategoryId' => 'Category',
			'CareerLevelId' => 'Career Level',
			'ExperianceLevelId' => 'Experiance Level',
			'JobTypeId' => 'Job Type',
			'ShiftsId' => 'Shifts',
			'RequiredTraveling' => 'Required Traveling',
			'SalaryMin' => 'Salary Min',
			'SalaryMax' => 'Salary Max',
			'CurrencyId' => 'Currency',
			'NoVacancies' => 'No Vacancies',
			'CountryId' => 'Country',
			'ProvinceId' => 'Province',
			'CityId' => 'City',
			'ExpirationDate' => 'Expiration Date',
			'EmailResume' => 'Email Resume',
			'HotJob' => 'Hot Job',
			'Showcase' => 'Showcase',
			'Highlighted' => 'Highlighted',
			'IsActive' => 'Is Active',
			'DateAdded' => 'Date Added',
			'DateUpdated' => 'Date Updated',
			'UserId' => 'User',
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
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('DepartmentId',$this->DepartmentId);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Specs',$this->Specs,true);
		$criteria->compare('Qualification',$this->Qualification,true);
		$criteria->compare('CategoryId',$this->CategoryId);
		$criteria->compare('CareerLevelId',$this->CareerLevelId);
		$criteria->compare('ExperianceLevelId',$this->ExperianceLevelId);
		$criteria->compare('JobTypeId',$this->JobTypeId);
		$criteria->compare('ShiftsId',$this->ShiftsId);
		$criteria->compare('RequiredTraveling',$this->RequiredTraveling);
		$criteria->compare('SalaryMin',$this->SalaryMin,true);
		$criteria->compare('SalaryMax',$this->SalaryMax,true);
		$criteria->compare('CurrencyId',$this->CurrencyId);
		$criteria->compare('NoVacancies',$this->NoVacancies);
		$criteria->compare('CountryId',$this->CountryId);
		$criteria->compare('ProvinceId',$this->ProvinceId);
		$criteria->compare('CityId',$this->CityId);
		$criteria->compare('ExpirationDate',$this->ExpirationDate,true);
		$criteria->compare('EmailResume',$this->EmailResume);
		$criteria->compare('HotJob',$this->HotJob);
		$criteria->compare('Showcase',$this->Showcase);
		$criteria->compare('Highlighted',$this->Highlighted);
		$criteria->compare('IsActive',$this->IsActive);
		$criteria->compare('DateAdded',$this->DateAdded,true);
		$criteria->compare('DateUpdated',$this->DateUpdated,true);
		$criteria->compare('UserId',$this->UserId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}