<?php

namespace app\models;

use dektrium\user\models\Profile as BaseProfile;
/**
 * This is the model class for table "profile".
 *
 * @property string  $surname
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com
 */
class Profile extends BaseProfile
{
    public function rules()
    {
        return array_merge(
            parent::rules(),
            ['surnameString' => ['surname', 'string', 'max' => 255]]

        );

    }
    public function attributeLabels()
    {
        return array_merge(
            parent::attributeLabels(),
            ['surname' => \Yii::t('user', 'Surname')]

        );
    }

}
