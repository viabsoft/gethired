<?php

/**
 * This is the model class for table "employer".
 *
 * The followings are the available columns in table 'employer':
 * @property string $Company_Name
 * @property integer $Company_Type
 * @property string $Registration_Number
 * @property string $NTN_Number
 * @property string $Incorporation_Date
 * @property string $Incorporation_City
 * @property string $First_Name
 * @property string $Last_Name
 * @property string $Cell_Number
 * @property string $LandLine
 * @property string $Fax
 * @property string $City
 * @property string $Address
 * @property string $Province
 * @property string $Postal_Code
 * @property integer $Country
 * @property integer $IsActive
 * @property integer $IsDeleted
 * @property string $Date_Added
 * @property string $Date_Updated
 * @property string $Date_Activated
 * @property integer $Status
 * @property string $Remarks
 * @property string $Internal_Remarks
 * @property integer $User_Id
 * @property string $Url
 * @property integer $Total_Emp
 * @property string $CompanyProfile
 */
class Employer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employer the static model class
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
		return 'employer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('User_Id', 'required'),
			array('Company_Type, Country, IsActive, IsDeleted, Status, User_Id, Total_Emp', 'numerical', 'integerOnly'=>true),
			array('Company_Name, Incorporation_City, First_Name, Last_Name, Address, Remarks, Internal_Remarks', 'length', 'max'=>255),
			array('Registration_Number, NTN_Number, Cell_Number, LandLine, Fax, City, Province, Postal_Code', 'length', 'max'=>45),
			array('Url', 'length', 'max'=>500),
			array('CompanyProfile', 'length', 'max'=>8000),
			array('Incorporation_Date, Date_Added, Date_Updated, Date_Activated', 'safe'),
			// The following rule is used by search().
			array('Url','url'),
			// Please remove those attributes that should not be searched.
			array('Company_Name, Company_Type, Registration_Number, NTN_Number, Incorporation_Date, Incorporation_City, First_Name, Last_Name, Cell_Number, LandLine, Fax, City, Address, Province, Postal_Code, Country, IsActive, IsDeleted, Date_Added, Date_Updated, Date_Activated, Status, Remarks, Internal_Remarks, User_Id, Url, Total_Emp, CompanyProfile', 'safe', 'on'=>'search'),
			array('Company_Name, Company_Type, Registration_Number, NTN_Number, Incorporation_Date, Incorporation_City, First_Name, Last_Name, Cell_Number, LandLine, Fax, City, Address, Province, Postal_Code, Country, Url, Total_Emp, CompanyProfile', 'required', 'on'=>'profile'),
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
			'Company_Name' => 'Company Name',
			'Company_Type' => 'Company Type',
			'Registration_Number' => 'Registration Number',
			'NTN_Number' => 'Ntn Number',
			'Incorporation_Date' => 'Incorporation Date',
			'Incorporation_City' => 'Incorporation City',
			'First_Name' => 'First Name',
			'Last_Name' => 'Last Name',
			'Cell_Number' => 'Phone (Mobile)',
			'LandLine' => 'Phone',
			'Fax' => 'Fax',
			'City' => 'City',
			'Address' => 'Address',
			'Province' => 'Province',
			'Postal_Code' => 'Postal Code',
			'Country' => 'Country',
			'IsActive' => 'Is Active',
			'IsDeleted' => 'Is Deleted',
			'Date_Added' => 'Date Added',
			'Date_Updated' => 'Date Updated',
			'Date_Activated' => 'Date Activated',
			'Status' => 'Status',
			'Remarks' => 'Remarks',
			'Internal_Remarks' => 'Internal Remarks',
			'User_Id' => 'User',
			'Url' => 'Website URL',
			'Total_Emp' => 'Total Employees',
			'CompanyProfile' => 'Company Profile',
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

		$criteria->compare('Company_Name',$this->Company_Name,true);
		$criteria->compare('Company_Type',$this->Company_Type);
		$criteria->compare('Registration_Number',$this->Registration_Number,true);
		$criteria->compare('NTN_Number',$this->NTN_Number,true);
		$criteria->compare('Incorporation_Date',$this->Incorporation_Date,true);
		$criteria->compare('Incorporation_City',$this->Incorporation_City,true);
		$criteria->compare('First_Name',$this->First_Name,true);
		$criteria->compare('Last_Name',$this->Last_Name,true);
		$criteria->compare('Cell_Number',$this->Cell_Number,true);
		$criteria->compare('LandLine',$this->LandLine,true);
		$criteria->compare('Fax',$this->Fax,true);
		$criteria->compare('City',$this->City,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Province',$this->Province,true);
		$criteria->compare('Postal_Code',$this->Postal_Code,true);
		$criteria->compare('Country',$this->Country);
		$criteria->compare('IsActive',$this->IsActive);
		$criteria->compare('IsDeleted',$this->IsDeleted);
		$criteria->compare('Date_Added',$this->Date_Added,true);
		$criteria->compare('Date_Updated',$this->Date_Updated,true);
		$criteria->compare('Date_Activated',$this->Date_Activated,true);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('Remarks',$this->Remarks,true);
		$criteria->compare('Internal_Remarks',$this->Internal_Remarks,true);
		$criteria->compare('User_Id',$this->User_Id);
		$criteria->compare('Url',$this->Url,true);
		$criteria->compare('Total_Emp',$this->Total_Emp);
		$criteria->compare('CompanyProfile',$this->CompanyProfile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}