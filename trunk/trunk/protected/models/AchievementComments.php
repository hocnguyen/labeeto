<?php

/**
 * This is the model class for table "achievement_comments".
 *
 * The followings are the available columns in table 'achievement_comments':
 * @property integer $id
 * @property integer $achievement_id
 * @property integer $user_id
 * @property string $comments
 * @property string $ip
 * @property string $created
 */
class AchievementComments extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AchievementComments the static model class
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
		return 'achievement_comments';
	}
    public function behaviors()
    {
        return array('datetimeI18NBehavior' => array('class' => 'ext.DateTimeI18NBehavior')); 
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('achievement_id, user_id, comments, ip, created', 'required'),
			array('achievement_id, user_id', 'numerical', 'integerOnly'=>true),
			array('ip', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, achievement_id, user_id, comments, ip, created', 'safe', 'on'=>'search'),
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
			'id' => Yii::t('global', 'ID'),
			'achievement_id' => Yii::t('global', 'Achievement'),
			'user_id' => Yii::t('global', 'User'),
			'comments' => Yii::t('global', 'Comments'),
			'ip' => Yii::t('global', 'Ip'),
			'created' => Yii::t('global', 'Created'),
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

		$criteria->compare('id',$this->id);
		$criteria->compare('achievement_id',$this->achievement_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}