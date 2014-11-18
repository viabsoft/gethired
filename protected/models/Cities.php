<?php

/**
 * This is the model class for table "cities".
 *
 * The followings are the available columns in table 'cities':
 * @property integer $Id
 * @property integer $ProvinceId
 * @property string $Name
 * @property integer $IsActive
 * @property integer $IsDeleted
 * @property integer $DateAdded
 * @property integer $DateUpdated
 */
class Cities extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cities the static model class
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
		return 'cities';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ProvinceId, IsActive, IsDeleted, DateAdded, DateUpdated', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, ProvinceId, Name, IsActive, IsDeleted, DateAdded, DateUpdated', 'safe', 'on'=>'search'),
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
			'ProvinceId' => 'Province',
			'Name' => 'Name',
			'IsActive' => 'Is Active',
			'IsDeleted' => 'Is Deleted',
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
		$criteria->compare('ProvinceId',$this->ProvinceId);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('IsActive',$this->IsActive);
		$criteria->compare('IsDeleted',$this->IsDeleted);
		$criteria->compare('DateAdded',$this->DateAdded);
		$criteria->compare('DateUpdated',$this->DateUpdated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}