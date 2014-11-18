<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $Id
 * @property integer $User_Type_Id
 * @property string $First_Name
 * @property string $Last_Name
 * @property string $Mobile
 * @property integer $CountryId
 * @property integer $StateProvinceId
 * @property integer $CityId
 * @property string $Email
 * @property string $Password
 * @property string $Password_Salt
 * @property integer $IsActive
 * @property integer $IsDeleted
 * @property integer $DateAdded
 * @property integer $DateUpdated
 */
class Users extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->Email,$this->Password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('User_Type_Id, CountryId, StateProvinceId, CityId, IsActive, IsDeleted, DateAdded, DateUpdated', 'numerical', 'integerOnly'=>true),
			array('First_Name, Last_Name, Password, Password_Salt', 'length', 'max'=>255),
			array('Mobile', 'length', 'max'=>15),
			array('Email', 'length', 'max'=>400),
			array('First_Name,Last_Name,Email,Password,Mobile,CountryId,StateProvinceId,CityId','required','on'=>'signup'),
			
			
			array('First_Name,Last_Name,Email,Confirm_Email,Address,Mobile,CountryId,StateProvinceId,CityId','required','on'=>'profile'),
			array('Email', 'compare', 'on'=>'profile', 'compareAttribute'=>'Confirm_Email'),
			array('Email,Password','required','on'=>'login'),
			array('VerificationCode','required','on'=>'verify'),
			array('Email','email','on'=>'login'),
			//array('Email','unique','on'=>'signup'),
			
			array('Email','email','on'=>'signup'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, User_Type_Id, First_Name, Last_Name, Mobile, CountryId, StateProvinceId, CityId, Email, Password, Password_Salt, IsActive, IsDeleted, DateAdded, DateUpdated', 'safe', 'on'=>'search'),
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
	public $rememberMe;

	private $_identity;
	public $Confirm_Email;
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->Email,$this->Password);
			
			$this->_identity->authenticate();
		}
		print_r($this->_identity);
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'User_Type_Id' => 'User Type',
			'First_Name' => 'First Name',
			'Last_Name' => 'Last Name',
			'Mobile' => 'Phone (Mobile)',
			'CountryId' => 'Country',
			'Address' => 'Address',
			'StateProvinceId' => 'State/Province',
			'CityId' => 'City',
			'Email' => 'Email',
			'Confirm_Email' => 'Confirm Email',
			'Password' => 'Password',
			'Password_Salt' => 'Password Salt',
			'IsActive' => 'Is Active',
			'IsDeleted' => 'Is Deleted',
			'DateAdded' => 'Date Added',
			'DateUpdated' => 'Date Updated',
			'VerificationCode'=>'Verification Code',
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
		$criteria->compare('User_Type_Id',$this->User_Type_Id);
		$criteria->compare('First_Name',$this->First_Name,true);
		$criteria->compare('Last_Name',$this->Last_Name,true);
		$criteria->compare('Mobile',$this->Mobile,true);
		$criteria->compare('CountryId',$this->CountryId);
		$criteria->compare('StateProvinceId',$this->StateProvinceId);
		$criteria->compare('CityId',$this->CityId);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Password_Salt',$this->Password_Salt,true);
		$criteria->compare('IsActive',$this->IsActive);
		$criteria->compare('IsDeleted',$this->IsDeleted);
		$criteria->compare('DateAdded',$this->DateAdded);
		$criteria->compare('DateUpdated',$this->DateUpdated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}