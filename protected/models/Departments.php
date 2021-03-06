<?php

/**
 * This is the model class for table "departments".
 *
 * The followings are the available columns in table 'departments':
 * @property integer $Id
 * @property string $Title
 * @property string $Description
 * @property integer $IsActive
 * @property string $DateAdded
 * @property string $DateUpdated
 * @property integer $UserId
 */
class Departments extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Departments the static model class
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
		return 'departments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IsActive, UserId', 'numerical', 'integerOnly'=>true),
			array('Title, Description', 'length', 'max'=>255),
			array('Title, Description', 'required'),
			array('DateAdded, DateUpdated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Title, Description, IsActive, DateAdded, DateUpdated, UserId', 'safe', 'on'=>'search'),
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
			'Description' => 'Description',
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
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('IsActive',$this->IsActive);
		$criteria->compare('DateAdded',$this->DateAdded,true);
		$criteria->compare('DateUpdated',$this->DateUpdated,true);
		$criteria->compare('UserId',$this->UserId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}