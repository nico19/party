<?php


class RegForm extends CFormModel
{
	public $username;
	public $email;
	public $password;
	public $retypepassword;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password, email, retypepassword', 'required'),
			array('email', 'email'),
			array('password', 'compare', 'compareAttribute'=>'retypepassword'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
		);
	}
}
