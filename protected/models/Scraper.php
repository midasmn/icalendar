<?php

/**
 * This is the model class for table "{{scraper}}".
 *
 * The followings are the available columns in table '{{scraper}}':
 * @property integer $id
 * @property string $exm
 * @property string $name
 * @property string $baseurl
 * @property string $cronname
 * @property integer $order
 * @property string $createdate
 * @property string $updatedate
 */
class Scraper extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{scraper}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('exm, name, baseurl, cronname, order, createdate, updatedate', 'required'),
			array('order', 'numerical', 'integerOnly'=>true),
			array('exm, name, cronname', 'length', 'max'=>100),
			array('baseurl', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, exm, name, baseurl, cronname, order, createdate, updatedate', 'safe', 'on'=>'search'),
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
			'exm' => 'Exm',
			'name' => 'Name',
			'baseurl' => 'Baseurl',
			'cronname' => 'Cronname',
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
		$criteria->compare('exm',$this->exm,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('baseurl',$this->baseurl,true);
		$criteria->compare('cronname',$this->cronname,true);
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
	 * @return Scraper the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
