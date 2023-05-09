<?php namespace common\form;

class Form extends \yii\base\Model
{
    public $fio;
    public $phone;
    public $email;

    public function rules()
    {
        return [
            [['fio', 'phone', 'email'], 'required'],
            [['fio'], 'string'],
            [['email'], 'email'],
        ];
    }

}