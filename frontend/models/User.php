<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property bool $is_admin
 * @property int|null $subdivision_id
 * @property int|null $organization_id
 * @property string $name
 * @property int $id_post
 * @property string|null $description
 * @property int|null $phone
 * @property bool $reinstruction
 * @property string|null $verification_token
 *
 * @property Organization $organization
 * @property Subdivision $subdivision
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'is_admin', 'name', 'id_post', 'reinstruction'], 'required'],
            [['status', 'created_at', 'updated_at', 'subdivision_id', 'organization_id', 'id_post', 'phone'], 'default', 'value' => null],
            [['status', 'created_at', 'updated_at', 'subdivision_id', 'organization_id', 'id_post', 'phone'], 'integer'],
            [['is_admin', 'reinstruction'], 'boolean'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 256],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['username'], 'unique'],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::className(), 'targetAttribute' => ['subdivision_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_admin' => 'Is Admin',
            'subdivision_id' => 'Subdivision ID',
            'organization_id' => 'Organization ID',
            'name' => 'Name',
            'id_post' => 'Id Post',
            'description' => 'Description',
            'phone' => 'Phone',
            'reinstruction' => 'Reinstruction',
            'verification_token' => 'Verification Token',
        ];
    }

    /**
     * Gets query for [[Organization]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'organization_id']);
    }

    /**
     * Gets query for [[Subdivision]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivision()
    {
        return $this->hasOne(Subdivision::className(), ['id' => 'subdivision_id']);
    }
}
