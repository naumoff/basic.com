<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Product".
 *
 * @property integer $idProduct
 * @property integer $idCategory
 * @property integer $idProduction
 * @property string $ProductName
 * @property string $Description
 * @property string $BasePrice
 *
 * @property Category $idCategory0
 * @property Production $idProduction0
 * @property ProductColors[] $productColors
 * @property Colors[] $idColors
 * @property ProductMaterials[] $productMaterials
 * @property Materials[] $idMaterials
 * @property ProductTechniques[] $productTechniques
 * @property Techniques[] $idTechniques
 * @property Sizes[] $sizes
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCategory', 'idProduction', 'ProductName'], 'required'],
            [['idCategory', 'idProduction'], 'integer'],
            [['Description'], 'string'],
            [['BasePrice'], 'number'],
            [['ProductName'], 'string', 'max' => 45],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['idCategory' => 'idCategory']],
            [['idProduction'], 'exist', 'skipOnError' => true, 'targetClass' => Production::className(), 'targetAttribute' => ['idProduction' => 'idProduction']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProduct' => Yii::t('app', 'Id Product'),
            'idCategory' => Yii::t('app', 'Id Category'),
            'idProduction' => Yii::t('app', 'Id Production'),
            'ProductName' => Yii::t('app', 'Product Name'),
            'Description' => Yii::t('app', 'Description'),
            'BasePrice' => Yii::t('app', 'Base Price'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory0()
    {
        return $this->hasOne(Category::className(), ['idCategory' => 'idCategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduction0()
    {
        return $this->hasOne(Production::className(), ['idProduction' => 'idProduction']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductColors()
    {
        return $this->hasMany(ProductColors::className(), ['idProduct' => 'idProduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdColors()
    {
        return $this->hasMany(Colors::className(), ['idColor' => 'idColor'])->viaTable('Product_Colors', ['idProduct' => 'idProduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductMaterials()
    {
        return $this->hasMany(ProductMaterials::className(), ['idProduct' => 'idProduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMaterials()
    {
        return $this->hasMany(Materials::className(), ['idMaterial' => 'idMaterial'])->viaTable('Product_Materials', ['idProduct' => 'idProduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductTechniques()
    {
        return $this->hasMany(ProductTechniques::className(), ['idProduct' => 'idProduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTechniques()
    {
        return $this->hasMany(Techniques::className(), ['idTechnique' => 'idTechnique'])->viaTable('Product_Techniques', ['idProduct' => 'idProduct']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSizes()
    {
        return $this->hasMany(Sizes::className(), ['idProduct' => 'idProduct']);
    }

    /**
     * @inheritdoc
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
