<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page_servicos".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string|null $backtitle
 * @property string|null $subtitle
 * @property string|null $resume
 * @property string|null $body
 * @property string|null $image
 * @property string|null $background
 * @property string|null $custom
 */
class PageServicos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page_servicos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title'], 'required'],
            [['resume', 'body', 'custom'], 'string'],
            [['name'], 'string', 'max' => 80],
            [['title', 'backtitle', 'subtitle'], 'string', 'max' => 120],
            [['image', 'background'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'backtitle' => 'Backtitle',
            'subtitle' => 'Subtitle',
            'resume' => 'Resume',
            'body' => 'Body',
            'image' => 'Image',
            'background' => 'Background',
            'custom' => 'Custom',
        ];
    }
}
