<?php

/**
 * This is the model class for table "experiance_level".
 *
 * The followings are the available columns in table 'experiance_level':
 * @property integer $Id
 * @property string $Name
 * @property integer $IsActive
 * @property string $DateAdded
 * @property string $DateUpdated
 */
class Experiance_Level extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experiance_Level the static model class
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
		return 'experiance_level';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IsActive', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>45),
			array('DateAdded, DateUpdated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Name, IsActive, DateAdded, DateUpdated', 'safe', 'on'=>'search'),
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
			'Name' => 'Name',
			'IsActive' => 'Is Active',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('IsActive',$this->IsActive);
		$criteria->compare('DateAdded',$this->DateAdded,true);
		$criteria->compare('DateUpdated',$this->DateUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}