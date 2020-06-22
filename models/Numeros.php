<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "numeros".
 *
 * @property int $id
 * @property string $title
 * @property string $strong
 * @property string $numeros
 * @property string $resume
 * @property string $image
 */
class Numeros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'numeros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'numeros'], 'required'],
            [['title', 'numeros'], 'string', 'max' => 60],
            [['strong'], 'string', 'max' => 50],
            [['resume', 'image'], 'string', 'max' => 255],
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
            'strong' => 'Marcador',
            'numeros' => 'Numeros',
            'resume' => 'Resume',
            'image' => 'Image',
        ];
    }
}
