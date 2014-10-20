<?php

/**
 * This is the model class for table "vote".
 *
 * The followings are the available columns in table 'vote':
 * @property integer $id
 * @property integer $user_id
 * @property integer $achievements_id
 * @property integer $up_vote
 * @property integer $down_vote
 * @property string $created
 * @property string $updated
 * @property string $ip
 */
class Vote extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vote the static model class
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
		return 'vote';
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
			array('user_id, achievements_id, created, updated', 'required'),
			array('user_id, achievements_id, up_vote, down_vote', 'numerical', 'integerOnly'=>true),
			array('ip', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, achievements_id, up_vote, down_vote, created, updated, ip', 'safe', 'on'=>'search'),
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
			'user_id' => Yii::t('global', 'User'),
			'achievements_id' => Yii::t('global', 'Achievements'),
			'up_vote' => Yii::t('global', 'Up Vote'),
			'down_vote' => Yii::t('global', 'Down Vote'),
			'created' => Yii::t('global', 'Created'),
			'updated' => Yii::t('global', 'Updated'),
			'ip' => Yii::t('global', 'Ip'),
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('achievements_id',$this->achievements_id);
		$criteria->compare('up_vote',$this->up_vote);
		$criteria->compare('down_vote',$this->down_vote);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('ip',$this->ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    public function getSumVote($achievements_id){
        $sql_1 = "SELECT SUM(up_vote) AS  up_vote FROM vote WHERE achievements_id = ". $achievements_id;
        $up_vote = Yii::app()->db->createCommand($sql_1)->queryScalar();
        $sql_2 = "SELECT SUM(down_vote) AS  down_vote FROM vote WHERE achievements_id = ". $achievements_id;
        $down_vote = Yii::app()->db->createCommand($sql_2)->queryScalar();
        $sum = $up_vote - $down_vote;
        if($sum < 0)
            $sum = 0;
        return $sum;
    }
}