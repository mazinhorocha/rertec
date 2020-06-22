<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "metafields".
 *
 * @property int $id
 * @property int $page_id
 * @property string|null $name
 * @property string|null $key
 * @property string|null $value
 */
class Metafields extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metafields';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id'], 'required'],
            [['page_id'], 'integer'],
            [['value'], 'string'],
            [['name', 'key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'name' => 'Name',
            'key' => 'Key',
            'value' => 'Value',
        ];
    }
}
