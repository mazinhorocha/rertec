<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nossos_clientes".
 *
 * @property string $title
 * @property string $back_title
 * @property string $resumo
 * @property string|null $parallax
 * @property string|null $logo
 */
class NossosClientes extends \yii\db\ActiveRecord
{
    public $new_image;
    public $deleted;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nossos_clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'back_title', 'resumo'], 'required'],
            [['clients'], 'string'],
            [['new_image', 'deleted'], 'safe'],
            [['title', 'back_title'], 'string', 'max' => 50],
            [['resumo', 'parallax'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'back_title' => 'Back Title',
            'resumo' => 'Resumo',
            'parallax' => 'Parallax',
            'clients' => 'Logo',
            'client_name' => 'Cliente',
            'client_logo' => 'Logo',
        ];
    }
}
