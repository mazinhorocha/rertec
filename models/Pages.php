<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
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
class Pages extends \yii\db\ActiveRecord
{
    public $add_metafield;
    public $metafields;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
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
            [['add_metafield', 'metafields'], 'safe'],
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

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFields()
    {
        return $this->hasMany(Metafields::className(), ['page_id' => 'id']);
    }
}
