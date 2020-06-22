<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $image
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'body', 'image'], 'required'],
            [['body'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 80],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Titulo',
            'body' => 'Conteúdo',
            'image' => 'Imagem',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
