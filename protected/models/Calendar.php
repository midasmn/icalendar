<?php

/**
 * This is the model class for table "{{calendar}}".
 *
 * The followings are the available columns in table '{{calendar}}':
 * @property integer $id
 * @property string $title
 * @property string $tags
 * @property string $description
 * @property string $sc_url
 * @property string $sc_tag
 * @property string $img_url
 * @property string $img_tag
 * @property integer $status
 * @property string $createdate
 * @property string $updatedate
 * @property integer $author_id
 *
 * The followings are the available model relations:
 * @property Ymd[] $ymds
 */
class Calendar extends CActiveRecord
{
	const STATUS_DRAFT=1;
    const STATUS_PUBLISHED=2;
    const STATUS_ARCHIVED=3;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{calendar}}';
	}

	// urlプロバティの追加
	public function getUrl()
    {
        return Yii::app()->createUrl('calendar/view', array(
            'id'=>$this->id,
            'title'=>$this->title,
        ));
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, status, author_id', 'required'),
			array('status, author_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>128),
			array('sc_url, sc_tag, img_url, img_tag', 'length', 'max'=>255),
			array('tags, description, createdate, updatedate', 'safe'),
			// array('tags' , 'match' , 'pattern'=>'/^[\w\s,]+$/' ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, tags, description, sc_url, sc_tag, img_url, img_tag, status, createdate, updatedate, author_id', 'safe', 'on'=>'search'),
		);
	}

	public function normalizeTags($attribute,$params)
	{
    	$this->tags=Tag::array2string(array_unique(Tag::string2array($this->tags)));
	}
	public static function string2array($tags)
	{
    	return preg_split('/\s*,\s*/',trim($tags),-1,PREG_SPLIT_NO_EMPTY);
	} 
	public static function array2string($tags)
	{
	    return implode(', ',$tags);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ymds' => array(self::HAS_MANY, 'Ymd', 'calendar_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'tags' => 'Tags',
			'description' => 'Description',
			'sc_url' => 'Sc Url',
			'sc_tag' => 'Sc Tag',
			'img_url' => 'Img Url',
			'img_tag' => 'Img Tag',
			'status' => 'Status',
			'createdate' => 'Createdate',
			'updatedate' => 'Updatedate',
			'author_id' => 'Author',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('sc_url',$this->sc_url,true);
		$criteria->compare('sc_tag',$this->sc_tag,true);
		$criteria->compare('img_url',$this->img_url,true);
		$criteria->compare('img_tag',$this->img_tag,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('createdate',$this->createdate,true);
		$criteria->compare('updatedate',$this->updatedate,true);
		$criteria->compare('author_id',$this->author_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	// protected function beforeSave()
	// {
	//     if(parent::beforeSave())
	//     {
	//         if($this->isNewRecord)
	//         {
	//             $this->create_time=$this->update_time=time();
	//             $this->author_id=Yii::app()->user->id;
	//         }
	//         else
	//             $this->update_time=time();
	//         return true;
	//     }
	//     else
	//         return false;
	// }
	// protected function afterSave()
	// {
	//     parent::afterSave();
	//     Tag::model()->updateFrequency($this->_oldTags, $this->tags);
	// }
	 
	// private $_oldTags;
	 
	// protected function afterFind()
	// {
	//     parent::afterFind();
	//     $this->_oldTags=$this->tags;
	// }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Calendar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
