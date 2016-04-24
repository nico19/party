<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class OrderForm extends CFormModel
{
    public $pipd_m;
    public $pipp_m;
    public $place_birth_m;
    public $place_home_m;
    public $number_passport_m;
    public $who_gave_m;
    public $date_gave_m;
    public $marital_status_m;
    public $idcode_m;

    public $pipd_w;
    public $pipp_w;
    public $place_birth_w;
    public $place_home_w;
    public $number_passport_w;
    public $who_gave_w;
    public $date_gave_w;
    public $marital_status_w;
    public $idcode_w;

    public $ceremony;
    public $data_registration;


    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(

            array('pipd_m, pipp_m, place_birth_m,  place_home_m , number_passport_m,
                who_gave_m ,date_gave_m ,marital_status_m ,idcode_m ,
                pipd_w, pipp_w, place_birth_w, place_home_w , number_passport_w,
                who_gave_w ,date_gave_w ,marital_status_w ,idcode_w',
                'required'),
            array('date_gave_m, date_gave_w, data_registration', 'type', 'type' => 'date', 'message' => '{attribute}: is not a date!', 'dateFormat' => 'dd-MM-yyyy'),
            array('idcode_m, idcode_w,', 'numerical', 'integerOnly' => true),
            array('idcode_m, idcode_w', 'length', 'max' => 10, 'min' => 10),
        );
    }
}

