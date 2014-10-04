<?php

/**
 * This is the model class for table "report_user".
 *
 * The followings are the available columns in table 'report_user':
 * @property integer $id
 * @property integer $user_id
 * @property string $blocked_user
 */
class ReportUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ReportUser the static model class
	 */

	const STATUS_ACTIVE=0;
    const STATUS_INACTIVE=1;
    const STATUS_UNVERIFIED=2;
    const STATUS_SUSPENDED=3;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report_user';
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
			array('user_id, blocked_user', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('blocked_user', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, , blocked_user', 'safe', 'on'=>'search'),
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
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
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
			'blocked_user' => Yii::t('global', 'Blocked User'),
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
		$criteria->compare('blocked_user',$this->blocked_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    public function getBlockedUser(){
        $result = self::model()->findByAttributes(array('user_id'=>Yii::app()->user->id));
        if($result){
            if(strlen($result->blocked_user) > 0){
                return substr($result->blocked_user,0, -1);
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }

    public function getTypeReport($type){
        if($type==self::STATUS_ACTIVE)
            return Yii::t('global','Offensive Messaging');
        else if( $type == self::STATUS_INACTIVE )
            Yii::t('global','Offensive Profile');
        else if( $type== self::STATUS_UNVERIFIED )
            Yii::t('global','Offensive Image');
        else if($type == self::STATUS_SUSPENDED )
            Yii::t('global','Offensive Scamming');
        
    }

    public function getActiveProduct(){
        $active_product = array(
          Yii::t('global','Offensive Messaging'),
          Yii::t('global','Offensive Profile'),
          Yii::t('global','Offensive Image'),
          Yii::t('global','Offensive Scamming'),
        
        );
        return $active_product;
    }

}