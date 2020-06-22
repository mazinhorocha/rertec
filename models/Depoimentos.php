<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "depoimentos".
 *
 * @property int $id
 * @property string $nome
 * @property string $empresa
 * @property string $cargo
 * @property string $depoimento
 * @property string $image
 */
class Depoimentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'depoimentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'empresa', 'cargo', 'depoimento', 'image'], 'required'],
            [['depoimento'], 'string'],
            [['nome', 'empresa', 'cargo'], 'string', 'max' => 80],
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
            'nome' => 'Nome',
            'empresa' => 'Empresa',
            'cargo' => 'Cargo',
            'depoimento' => 'Depoimento',
            'image' => 'Image',
        ];
    }
}
