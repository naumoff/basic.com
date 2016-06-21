<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Production".
 *
 * @property integer $idProduction
 * @property string $Status
 *
 * @property Product[] $products
 */
class Production extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Production';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Status'], 'required'],
            [['Status'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProduction' => Yii::t('app', 'Id Production'),
            'Status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['idProduction' => 'idProduction']);
    }

    /**
     * @inheritdoc
     * @return ProductionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductionQuery(get_called_class());
    }
}
