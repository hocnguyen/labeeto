<?php
/**
 * Internal Identity Class
 * Basically verifies a member by his email from the DB
 * 
 * 
 */
class InternalIdentity extends CUserIdentity
{
    /**
     * @var int unique member id
     */
    private $_id;

    /**
     * Authenticate a member
     *
     * @return int value greater then 0 means an error occurred 
     */
    public function authenticate(){

        $record = User::model()->findByAttributes(array(),array(
            'condition'=>'user_name=:name OR email=:name ',
            'params'=>array('name'=>$this->name),
        ));

        if($record===null){

            $this->errorCode=self::ERROR_USERNAME_INVALID;
            $this->errorMessage = 'Sorry, email not exist';

        } elseif( $record->password !== $record->hashPassword($this->password)) {

            $this->errorCode=self::ERROR_PASSWORD_INVALID;
            $this->errorMessage = 'Password not correct';
        } else {
            $this->setStateMember($record);
        }
        return !$this->errorCode;
    }
    
    function setStateMember($record){

        $this->_id = $record->id;
        
        // We add username to the state
        $this->setState('user_name', $record->user_name);
        $this->setState('email', $record->email);
        $this->setState('firstname', $record->first_name);
        $this->setState('lastname', $record->last_name);
        $this->setState('email', $record->email);
        $this->setState('roles', $record->roles);
        
        $this->errorCode = self::ERROR_NONE;
    }

    public function getId(){

        return $this->_id;
    }
}