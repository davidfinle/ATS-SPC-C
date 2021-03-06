<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $user_photo
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class admins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'last_name', 'username', 'user_photo', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'username', 'user_photo', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'user_photo' => 'User Photo',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
