<?php

/**
 * This is the model class for table "achievements".
 *
 * The followings are the available columns in table 'achievements':
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property string $content
 * @property string $location
 * @property integer $status
 * @property integer $user_id
 * @property string $created
 * @property string $updated
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class Achievements extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Achievements the static model class
	 */
    const STATUS_ACTIVE = 1;
    public $users;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'achievements';
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
			array('status, user_id', 'numerical', 'integerOnly'=>true),
			array('name, alias', 'length', 'max'=>255),
			array('content, created, updated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, alias, content, location, status, user_id, created, updated, users', 'safe', 'on'=>'search'),
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
			'name' => Yii::t('global', 'Name'),
			'alias' => Yii::t('global', 'Alias'),
			'content' => Yii::t('global', 'Content'),
            'location' => Yii::t('global', 'Location'),
            'status' => Yii::t('global', 'Status'),
            'user_id' => Yii::t('global', 'User'),
			'created' => Yii::t('global', 'Created'),
			'updated' => Yii::t('global', 'Updated'),
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
        $criteria->together = true;
        $criteria->with = array('user');

		$criteria->compare('t.id',$this->id);
		$criteria->compare('t.name',$this->name,true);
		$criteria->compare('t.alias',$this->alias,true);
		$criteria->compare('t.content',$this->content,true);
        $criteria->compare('t.location',$this->location,true);
		$criteria->compare('t.status',$this->status);
        $criteria->compare('t.user_id',$this->user_id);
        if ($this->created)
            $criteria->compare('t.created', date('Y-m-d ', strtotime($this->created)), true);
		$criteria->compare('t.updated',$this->updated,true);
        $criteria->compare('user.id',$this->users);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'t.id DESC',
                'attributes'=>array(
                    'usernames'=>array(
                        'asc'=>'users.username',
                        'desc'=>'users.username DESC',
                    ),
                    '*',
                ),
            )
		));
	}

    function getStatus($status){
        if($status==self::STATUS_ACTIVE)
            return Yii::t('global','active');
        return Yii::t('global','Inactive');
    }
    public function getAirchivements($id){
        $result = Achievements::model()->find(array(
                'select'=>'name',
                'condition'=>'id=:id',
                'params'=>array( ':id'=>$id ) )
        );

        return  $result['name'];
    }

}