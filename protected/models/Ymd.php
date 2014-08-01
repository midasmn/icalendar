<?php

/**
 * This is the model class for table "{{ymd}}".
 *
 * The followings are the available columns in table '{{ymd}}':
 * @property integer $id
 * @property integer $calendar_id
 * @property integer $yyyy
 * @property integer $mm
 * @property integer $dd
 * @property string $img_path
 * @property string $img_alt
 * @property integer $order
 * @property string $createdate
 * @property string $updatedate
 *
 * The followings are the available model relations:
 * @property Calendar $calendar
 */
class Ymd extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{ymd}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, calendar_id, yyyy, mm, dd, order', 'numerical', 'integerOnly'=>true),
			array('img_path, img_alt', 'length', 'max'=>255),
			array('createdate, updatedate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, calendar_id, yyyy, mm, dd, img_path, img_alt, order, createdate, updatedate', 'safe', 'on'=>'search'),
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
			'calendar' => array(self::BELONGS_TO, 'Calendar', 'calendar_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'calendar_id' => 'Calendar',
			'yyyy' => 'Yyyy',
			'mm' => 'Mm',
			'dd' => 'Dd',
			'img_path' => 'Img Path',
			'img_alt' => 'Img Alt',
			'order' => 'Order',
			'createdate' => 'Createdate',
			'updatedate' => 'Updatedate',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('calendar_id',$this->calendar_id);
		$criteria->compare('yyyy',$this->yyyy);
		$criteria->compare('mm',$this->mm);
		$criteria->compare('dd',$this->dd);
		$criteria->compare('img_path',$this->img_path,true);
		$criteria->compare('img_alt',$this->img_alt,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('updatedate',$this->updatedate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ymd the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
