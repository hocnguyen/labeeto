<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property integer $id
 * @property integer $parent_id
 * @property string $username
 * @property integer $gender
 * @property integer $interesting
 * @property string $email
 * @property string $password
 * @property integer $joined
 * @property string $data
 * @property string $passwordreset
 * @property string $role
 * @property string $ipaddress
 * @property string $fname
 * @property string $lname
 * @property string $birthday
 * @property string $photo
 * @property string $address
 * @property string $phone
 * @property string $vericode
 * @property integer $current_plan
 * @property string $street
 * @property string $nr
 * @property string $ext_information
 * @property integer $postcode
 * @property string $state
 * @property string $city
 * @property integer $country_id
 * @property integer $status
 * @property string $last_logged
 */
class Members extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Members the static model class
	 */
    public $agefrom, $ageto,$near;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'members';
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
			array('country_id', 'required'),
			array('parent_id, gender, interesting, joined, current_plan, postcode, country_id, status', 'numerical', 'integerOnly'=>true),
			array('username, email, photo, address, city', 'length', 'max'=>155),
			array('password, passwordreset, fname, lname, phone, vericode', 'length', 'max'=>40),
			array('role, ipaddress', 'length', 'max'=>30),
			array('street, nr, ext_information, state', 'length', 'max'=>255),
			array('data, birthday, last_logged', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_id, username, gender, interesting, email, password, joined, data, passwordreset, role, ipaddress, fname, lname, birthday, photo, address, phone, vericode, current_plan, street, nr, ext_information, postcode, state, city, country_id, status, last_logged', 'safe', 'on'=>'search'),
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
			'parent_id' => Yii::t('global', 'Parent'),
			'username' => Yii::t('global', 'Username'),
			'gender' => Yii::t('global', 'Gender'),
			'interesting' => Yii::t('global', 'Interesting'),
			'email' => Yii::t('global', 'Email'),
			'password' => Yii::t('global', 'Password'),
			'joined' => Yii::t('global', 'Joined'),
			'data' => Yii::t('global', 'Data'),
			'passwordreset' => Yii::t('global', 'Passwordreset'),
			'role' => Yii::t('global', 'Role'),
			'ipaddress' => Yii::t('global', 'Ipaddress'),
			'fname' => Yii::t('global', 'Fname'),
			'lname' => Yii::t('global', 'Lname'),
			'birthday' => Yii::t('global', 'Birthday'),
			'photo' => Yii::t('global', 'Photo'),
			'address' => Yii::t('global', 'Address'),
			'phone' => Yii::t('global', 'Phone'),
			'vericode' => Yii::t('global', 'Vericode'),
			'current_plan' => Yii::t('global', 'Current Plan'),
			'street' => Yii::t('global', 'Street'),
			'nr' => Yii::t('global', 'Nr'),
			'ext_information' => Yii::t('global', 'Ext Information'),
			'postcode' => Yii::t('global', 'Postcode'),
			'state' => Yii::t('global', 'State'),
			'city' => Yii::t('global', 'City'),
			'country_id' => Yii::t('global', 'Country'),
			'status' => Yii::t('global', 'Status'),
			'last_logged' => Yii::t('global', 'Last Logged'),
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
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('interesting',$this->interesting);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('joined',$this->joined);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('passwordreset',$this->passwordreset,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('ipaddress',$this->ipaddress,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('vericode',$this->vericode,true);
		$criteria->compare('current_plan',$this->current_plan);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('nr',$this->nr,true);
		$criteria->compare('ext_information',$this->ext_information,true);
		$criteria->compare('postcode',$this->postcode);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('last_logged',$this->last_logged,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}