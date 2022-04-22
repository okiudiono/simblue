<?php
class UserIdentity extends CUserIdentity
{
	private $_id;

	// public function rules()
	// {
		// return array(
		// array('nama','ga bolehkosong'),);
	// }
	public function authenticate()
	{
		$val1 = User::model()->find('username=?',array($this->username) ); 
		// print_r($val1);
		// die();
		$user = $val1; 
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;  
		else
		{
			$this->_id=$this->username; 
			$this->setState('username',$this->username);
			$this->setState('password',$user->password);  
			$this->setState('role',$user->role);    

			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}

}