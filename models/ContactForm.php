<?php

namespace app\models;

use Yii;
use yii\base\Model;
use romi45\yii2jsonvalidator\JsonValidator;
/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name'],  JsonValidator::class],
          //  [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
         //   ['email', 'email'],
            // verifyCode needs to be entered correctly
        //    ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function check($attribute)
    {
       
        foreach ($attribute as $value)
            {
               
                if($value['priority']>4){
                    $this->addError('name','priorite should not be greater than 3');
                    var_dump($value['priority']);
                
                    return false;
                }
               
               // return true;
            }
       
    }
}
