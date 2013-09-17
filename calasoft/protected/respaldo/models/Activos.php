<?php

/**
 * This is the model class for table "activos".
 *
 * The followings are the available columns in table 'activos':
 * @property integer $idactivos
 * @property integer $idempresa
 * @property integer $idclaActivos
 * @property integer $iddistamb
 * @property string $clase
 * @property string $codigo
 * @property string $descripcion
 * @property string $unidad
 * @property integer $cantidad
 * @property integer $idarea
 * @property string $responsable
 * @property string $fechaCompra
 * @property string $ufv
 * @property string $costoTotal
 * @property string $costoNeto
 * @property string $tipoRegistro
 * @property string $estado
 * @property string $garantia
 * @property string $bienDepresiable
 * @property integer $numeroComponentes
 * @property string $datosAdicionales
 *
 * The followings are the available model relations:
 * @property Empresa $idempresa0
 * @property Claactivos $claactivos
 * @property Distamb $distamb
 */
class Activos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Activos the static model class
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
		return 'activos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idempresa, idclaActivos, iddistamb, clase, codigo, descripcion, unidad, cantidad, idarea, responsable, fechaCompra, ufv, costoTotal, costoNeto, tipoRegistro, estado, garantia, bienDepresiable, numeroComponentes, datosAdicionales', 'required'),
			array('idempresa, idclaActivos, iddistamb, cantidad, idarea, numeroComponentes', 'numerical', 'integerOnly'=>true),
			array('clase, codigo, descripcion, unidad, responsable, tipoRegistro, estado', 'length', 'max'=>45),
			array('ufv', 'length', 'max'=>5),
			array('costoTotal, costoNeto', 'length', 'max'=>18),
			array('garantia, bienDepresiable', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idactivos, idempresa, idclaActivos, iddistamb, clase, codigo, descripcion, unidad, cantidad, idarea, responsable, fechaCompra, ufv, costoTotal, costoNeto, tipoRegistro, estado, garantia, bienDepresiable, numeroComponentes, datosAdicionales', 'safe', 'on'=>'search'),
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
			'idempresa0' => array(self::BELONGS_TO, 'Empresa', 'idempresa'),
			'claactivos' => array(self::HAS_ONE, 'Claactivos', 'idclaActivos'),
			'distamb' => array(self::HAS_ONE, 'Distamb', 'intdistAmb'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idactivos' => 'Idactivos',
			'idempresa' => 'Idempresa',
			'idclaActivos' => 'Idcla Activos',
			'iddistamb' => 'Iddistamb',
			'clase' => 'Clase',
			'codigo' => 'Codigo',
			'descripcion' => 'Descripcion',
			'unidad' => 'Unidad',
			'cantidad' => 'Cantidad',
			'idarea' => 'Idarea',
			'responsable' => 'Responsable',
			'fechaCompra' => 'Fecha Compra',
			'ufv' => 'Ufv',
			'costoTotal' => 'Costo Total',
			'costoNeto' => 'Costo Neto',
			'tipoRegistro' => 'Tipo Registro',
			'estado' => 'Estado',
			'garantia' => 'Garantia',
			'bienDepresiable' => 'Bien Depresiable',
			'numeroComponentes' => 'Numero Componentes',
			'datosAdicionales' => 'Datos Adicionales',
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

		$criteria->compare('idactivos',$this->idactivos);
		$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('idclaActivos',$this->idclaActivos);
		$criteria->compare('iddistamb',$this->iddistamb);
		$criteria->compare('clase',$this->clase,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('unidad',$this->unidad,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('idarea',$this->idarea);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('fechaCompra',$this->fechaCompra,true);
		$criteria->compare('ufv',$this->ufv,true);
		$criteria->compare('costoTotal',$this->costoTotal,true);
		$criteria->compare('costoNeto',$this->costoNeto,true);
		$criteria->compare('tipoRegistro',$this->tipoRegistro,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('garantia',$this->garantia,true);
		$criteria->compare('bienDepresiable',$this->bienDepresiable,true);
		$criteria->compare('numeroComponentes',$this->numeroComponentes);
		$criteria->compare('datosAdicionales',$this->datosAdicionales,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}