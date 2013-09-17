<?php

/**
 * This is the model class for table "venta".
 *
 * The followings are the available columns in table 'venta':
 * @property integer $idventa
 * @property integer $idpuntoVenta
 * @property string $nitCliente
 * @property string $razonSocial
 * @property string $numFact
 * @property string $numAut
 * @property string $fechaCliente
 * @property string $totalFact
 * @property string $importeIce
 * @property string $importeExento
 * @property string $importeNeto
 * @property string $debitoFiscal
 * @property string $estadoFact
 * @property string $codigoControl
 * @property string $mes
 * @property integer $ano
 * @property integer $idrubro
 *
 * The followings are the available model relations:
 * @property Puntoventa $idpuntoVenta0
 */
class Venta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Venta the static model class
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
		return 'venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idpuntoVenta, nitCliente, razonSocial, numFact, numAut, fechaCliente, totalFact, importeIce, importeExento, importeNeto, debitoFiscal, estadoFact, codigoControl, mes, ano, idrubro', 'required'),
			array('idpuntoVenta, ano, idrubro', 'numerical', 'integerOnly'=>true),
			array('nitCliente, numFact', 'length', 'max'=>20),
			array('razonSocial', 'length', 'max'=>500),
			array('numAut, totalFact, importeIce, importeExento, importeNeto, debitoFiscal', 'length', 'max'=>18),
			array('estadoFact', 'length', 'max'=>10),
			array('codigoControl, mes', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idventa, idpuntoVenta, nitCliente, razonSocial, numFact, numAut, fechaCliente, totalFact, importeIce, importeExento, importeNeto, debitoFiscal, estadoFact, codigoControl, mes, ano, idrubro', 'safe', 'on'=>'search'),
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
			'idpuntoVenta0' => array(self::BELONGS_TO, 'Puntoventa', 'idpuntoVenta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idventa' => 'Idventa',
			'idpuntoVenta' => 'Idpunto Venta',
			'nitCliente' => 'Nit Cliente',
			'razonSocial' => 'Razon Social',
			'numFact' => 'Num Fact',
			'numAut' => 'Num Aut',
			'fechaCliente' => 'Fecha Cliente',
			'totalFact' => 'Total Fact',
			'importeIce' => 'Importe Ice',
			'importeExento' => 'Importe Exento',
			'importeNeto' => 'Importe Neto',
			'debitoFiscal' => 'Debito Fiscal',
			'estadoFact' => 'Estado Fact',
			'codigoControl' => 'Codigo Control',
			'mes' => 'Mes',
			'ano' => 'Ano',
			'idrubro' => 'Idrubro',
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

		$criteria->compare('idventa',$this->idventa);
		$criteria->compare('idpuntoVenta',$this->idpuntoVenta);
		$criteria->compare('nitCliente',$this->nitCliente,true);
		$criteria->compare('razonSocial',$this->razonSocial,true);
		$criteria->compare('numFact',$this->numFact,true);
		$criteria->compare('numAut',$this->numAut,true);
		$criteria->compare('fechaCliente',$this->fechaCliente,true);
		$criteria->compare('totalFact',$this->totalFact,true);
		$criteria->compare('importeIce',$this->importeIce,true);
		$criteria->compare('importeExento',$this->importeExento,true);
		$criteria->compare('importeNeto',$this->importeNeto,true);
		$criteria->compare('debitoFiscal',$this->debitoFiscal,true);
		$criteria->compare('estadoFact',$this->estadoFact,true);
		$criteria->compare('codigoControl',$this->codigoControl,true);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('ano',$this->ano);
		$criteria->compare('idrubro',$this->idrubro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}