<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Sizes".
 *
 * @property integer $idSize
 * @property integer $idProduct
 * @property string $Size
 * @property integer $Availability
 * @property string $PriceCorrection
 *
 * @property Product $idProduct0
 */
class Sizes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Sizes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idProduct', 'Size'], 'required'],
            [['idProduct', 'Availability'], 'integer'],
            [['PriceCorrection'], 'number'],
            [['Size'], 'string', 'max' => 45],
            [['idProduct'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['idProduct' => 'idProduct']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSize' => Yii::t('app', 'Id Size'),
            'idProduct' => Yii::t('app', 'Id Product'),
            'Size' => Yii::t('app', 'Size'),
            'Availability' => Yii::t('app', 'Availability'),
            'PriceCorrection' => Yii::t('app', 'Price Correction'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct0()
    {
        return $this->hasOne(Product::className(), ['idProduct' => 'idProduct']);
    }

    /**
     * @inheritdoc
     * @return SizesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SizesQuery(get_called_class());
    }
}
