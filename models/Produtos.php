<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $body
 * @property float|null $price
 * @property float|null $sale_price
 * @property string|null $image
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'subtitle', 'body'], 'required'],
            [['body'], 'string'],
            [['price', 'sale_price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'subtitle'], 'string', 'max' => 80],
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
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'body' => 'Body',
            'price' => 'Price',
            'sale_price' => 'Sale Price',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
