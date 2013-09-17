<?php

/**
 * This is the model class for table "puntoventa".
 *
 * The followings are the available columns in table 'puntoventa':
 * @property integer $idPuntoVenta
 * @property integer $idEmpresa
 * @property integer $num_sucursall
 * @property string $direccion_suc
 *
 * The followings are the available model relations:
 * @property Compra[] $compras
 * @property Empresa $idEmpresa0
 * @property Venta[] $ventas
 */
class Puntoventa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Puntoventa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'puntoventa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idEmpresa, num_sucursall', 'required'),
			array('idEmpresa, num_sucursall', 'numerical', 'integerOnly'=>true),
			array('direccion_suc', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPuntoVenta, idEmpresa, num_sucursall, direccion_suc', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'compras' => array(self::HAS_MANY, 'Compra', 'idPuntoVenta'),
			'idEmpresa0' => array(self::BELONGS_TO, 'Empresa', 'idEmpresa'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'idpuntoVenta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPuntoVenta' => 'Id Punto Venta',
			'idEmpresa' => 'Id Empresa',
			'num_sucursall' => 'Num Sucursall',
			'direccion_suc' => 'Direccion Suc',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idPuntoVenta',$this->idPuntoVenta);
		$criteria->compare('idEmpresa',$this->idEmpresa);
		$criteria->compare('num_sucursall',$this->num_sucursall);
		$criteria->compare('direccion_suc',$this->direccion_suc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}