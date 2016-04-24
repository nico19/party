<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property string $id
 * @property string $user_id
 * @property string $personm_id
 * @property string $personw_id
 * @property string $organDRATC_id new
 * @property string $date
 * @property integer $ceremony
 *
 * The followings are the available model relations:
 * @property Person $personw
 * @property Person $personm
 * @property OrganDRATC $organDRATC
 * @property User $user
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, personm_id, personw_id, organDRATC_id', 'required'),
			array('ceremony', 'numerical', 'integerOnly'=>true),
			array('user_id, personm_id, personw_id, organDRATC_id', 'length', 'max'=>10),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, personm_id, personw_id, organDRATC_id, date, ceremony', 'safe', 'on'=>'search'),
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
			'personw' => array(self::BELONGS_TO, 'Person', 'personw_id'),
			'personm' => array(self::BELONGS_TO, 'Person', 'personm_id'),
			'organDRATC' => array(self::BELONGS_TO, 'OrganDRATC', 'organDRATC_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'personm_id' => 'Personm',
			'personw_id' => 'Personw',
			'organDRATC_id' => 'Organ Dratc',
			'date' => 'Date',
			'ceremony' => 'Ceremony',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('personm_id',$this->personm_id,true);
		$criteria->compare('personw_id',$this->personw_id,true);
		$criteria->compare('organDRATC_id',$this->organDRATC_id,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ceremony',$this->ceremony);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
