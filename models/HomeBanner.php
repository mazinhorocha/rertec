<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home_banner".
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string|null $typpings
 * @property string|null $text
 * @property string|null $images
 * @property string|null $services
 */
class HomeBanner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'subtitle'], 'required'],
            [['typpings', 'text', 'images', 'services'], 'string'],
            [['title', 'subtitle'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'typpings' => 'Typpings',
            'text' => 'Text',
            'images' => 'Images',
            'services' => 'Services',
        ];
    }
}
