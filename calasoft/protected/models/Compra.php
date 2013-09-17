<?php

/**
 * This is the model class for table "compra".
 *
 * The followings are the available columns in table 'compra':
 * @property integer $idcompra
 * @property integer $idPuntoVenta
 * @property string $nitProv
 * @property string $razonSocialProv
 * @property string $numfact
 * @property string $fechaProv
 * @property string $totalFact
 * @property string $importeIce
 * @property string $importexecto
 * @property string $importeNeto
 * @property string $creditoFiscal
 * @property string $codigoControl
 * @property string $Mes
 * @property integer $ano
 * @property integer $idrubro
 *
 * The followings are the available model relations:
 * @property Puntoventa $idPuntoVenta0
 */
class Compra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Compra the static model class
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
		return 'compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPuntoVenta, nitProv, razonSocialProv, numfact, fechaProv, totalFact, importeIce, importexecto, importeNeto, creditoFiscal, codigoControl, Mes, ano, idrubro', 'required'),
			array('idPuntoVenta, ano, idrubro', 'numerical', 'integerOnly'=>true),
			array('nitProv, numfact', 'length', 'max'=>20),
			array('razonSocialProv', 'length', 'max'=>100),
			array('totalFact, importexecto, importeNeto, creditoFiscal', 'length', 'max'=>18),
			array('importeIce, codigoControl, Mes', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcompra, idPuntoVenta, nitProv, razonSocialProv, numfact, fechaProv, totalFact, importeIce, importexecto, importeNeto, creditoFiscal, codigoControl, Mes, ano, idrubro', 'safe', 'on'=>'search'),
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
			'idPuntoVenta0' => array(self::BELONGS_TO, 'Puntoventa', 'idPuntoVenta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcompra' => 'Idcompra',
			'idPuntoVenta' => 'Id Punto Venta',
			'nitProv' => 'Nit Prov',
			'razonSocialProv' => 'Razon Social Prov',
			'numfact' => 'Numfact',
			'fechaProv' => 'Fecha Prov',
			'totalFact' => 'Total Fact',
			'importeIce' => 'Importe Ice',
			'importexecto' => 'Importexecto',
			'importeNeto' => 'Importe Neto',
			'creditoFiscal' => 'Credito Fiscal',
			'codigoControl' => 'Codigo Control',
			'Mes' => 'Mes',
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

		$criteria->compare('idcompra',$this->idcompra);
		$criteria->compare('idPuntoVenta',$this->idPuntoVenta);
		$criteria->compare('nitProv',$this->nitProv,true);
		$criteria->compare('razonSocialProv',$this->razonSocialProv,true);
		$criteria->compare('numfact',$this->numfact,true);
		$criteria->compare('fechaProv',$this->fechaProv,true);
		$criteria->compare('totalFact',$this->totalFact,true);
		$criteria->compare('importeIce',$this->importeIce,true);
		$criteria->compare('importexecto',$this->importexecto,true);
		$criteria->compare('importeNeto',$this->importeNeto,true);
		$criteria->compare('creditoFiscal',$this->creditoFiscal,true);
		$criteria->compare('codigoControl',$this->codigoControl,true);
		$criteria->compare('Mes',$this->Mes,true);
		$criteria->compare('ano',$this->ano);
		$criteria->compare('idrubro',$this->idrubro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}