<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property string $id
 * @property string $pipd
 * @property string $pipp
 * @property string $place_home
 * @property string $place_birth
 * @property string $number_passport
 * @property string $who_gave
 * @property string $idcode
 * @property integer $marital_status
 * @property string $date
 */
class Person extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pipd, pipp, place_home, place_birth, number_passport, who_gave, idcode', 'required'),
			array('marital_status', 'numerical', 'integerOnly'=>true),
			array('pipd, pipp, place_home, place_birth', 'length', 'max'=>60),
			array('number_passport', 'length', 'max'=>32),
			array('who_gave, idcode', 'length', 'max'=>100),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pipd, pipp, place_home, place_birth, number_passport, who_gave, idcode, marital_status, date', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'pipd' => 'Pipd',
			'pipp' => 'Pipp',
			'place_home' => 'Place Home',
			'place_birth' => 'Place Birth',
			'number_passport' => 'Number Passport',
			'who_gave' => 'Who Gave',
			'idcode' => 'Idcode',
			'marital_status' => 'Marital Status',
			'date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('pipd',$this->pipd,true);
		$criteria->compare('pipp',$this->pipp,true);
		$criteria->compare('place_home',$this->place_home,true);
		$criteria->compare('place_birth',$this->place_birth,true);
		$criteria->compare('number_passport',$this->number_passport,true);
		$criteria->compare('who_gave',$this->who_gave,true);
		$criteria->compare('idcode',$this->idcode,true);
		$criteria->compare('marital_status',$this->marital_status);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Person the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
