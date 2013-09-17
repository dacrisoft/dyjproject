<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $idempresa
 * @property string $razonSocial
 * @property string $nit
 * @property string $num_empresa
 * @property integer $ter_cliente
 * @property string $mesCierre
 * @property string $direccionFiscal
 * @property string $telefonoFiscal
 * @property integer $idResponsable
 * @property string $actividad
 * @property string $usuario_OfV
 * @property string $pass_OfV
 * @property string $tarjeta_galileo
 * @property string $pin_galileo
 *
 * The followings are the available model relations:
 * @property Activos[] $activoses
 * @property Documento[] $documentos
 * @property Responsable $idResponsable0
 * @property Puntoventa[] $puntoventas
 */
class Empresa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Empresa the static model class
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
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('razonSocial, nit, num_empresa, ter_cliente, mesCierre, direccionFiscal, telefonoFiscal, idResponsable', 'required'),
			array('ter_cliente, idResponsable', 'numerical', 'integerOnly'=>true),
			array('razonSocial, mesCierre, direccionFiscal, usuario_OfV, pass_OfV, tarjeta_galileo, pin_galileo', 'length', 'max'=>45),
			array('nit, num_empresa, telefonoFiscal', 'length', 'max'=>20),
			array('actividad', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idempresa, razonSocial, nit, num_empresa, ter_cliente, mesCierre, direccionFiscal, telefonoFiscal, idResponsable, actividad, usuario_OfV, pass_OfV, tarjeta_galileo, pin_galileo', 'safe', 'on'=>'search'),
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
			'activoses' => array(self::HAS_MANY, 'Activos', 'idempresa'),
			'documentos' => array(self::HAS_MANY, 'Documento', 'idempresa'),
			'idResponsable0' => array(self::BELONGS_TO, 'Responsable', 'idResponsable'),
			'puntoventas' => array(self::HAS_MANY, 'Puntoventa', 'idEmpresa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idempresa' => 'Idempresa',
			'razonSocial' => 'Razon Social',
			'nit' => 'Nit',
			'num_empresa' => 'Num Empresa',
			'ter_cliente' => 'Ter Cliente',
			'mesCierre' => 'Mes Cierre',
			'direccionFiscal' => 'Direccion Fiscal',
			'telefonoFiscal' => 'Telefono Fiscal',
			'idResponsable' => 'Id Responsable',
			'actividad' => 'Actividad',
			'usuario_OfV' => 'Usuario Of V',
			'pass_OfV' => 'Pass Of V',
			'tarjeta_galileo' => 'Tarjeta Galileo',
			'pin_galileo' => 'Pin Galileo',
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

		$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('razonSocial',$this->razonSocial,true);
		$criteria->compare('nit',$this->nit,true);
		$criteria->compare('num_empresa',$this->num_empresa,true);
		$criteria->compare('ter_cliente',$this->ter_cliente);
		$criteria->compare('mesCierre',$this->mesCierre,true);
		$criteria->compare('direccionFiscal',$this->direccionFiscal,true);
		$criteria->compare('telefonoFiscal',$this->telefonoFiscal,true);
		$criteria->compare('idResponsable',$this->idResponsable);
		$criteria->compare('actividad',$this->actividad,true);
		$criteria->compare('usuario_OfV',$this->usuario_OfV,true);
		$criteria->compare('pass_OfV',$this->pass_OfV,true);
		$criteria->compare('tarjeta_galileo',$this->tarjeta_galileo,true);
		$criteria->compare('pin_galileo',$this->pin_galileo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}