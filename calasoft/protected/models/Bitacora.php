<?php

/**
 * This is the model class for table "bitacora".
 *
 * The followings are the available columns in table 'bitacora':
 * @property integer $idbitacora
 * @property integer $idresTemp
 * @property integer $idresponsable
 * @property integer $iddocumento
 * @property integer $idarea
 * @property integer $idareaAnterior
 * @property integer $idproceso
 * @property string $fechaRecepcion
 * @property string $fechaAceptar
 * @property integer $estado
 * @property integer $confirmacion
 *
 * The followings are the available model relations:
 * @property Area $idarea0
 * @property Documento $iddocumento0
 * @property Proceso $idproceso0
 * @property User $idresponsable0
 * @property Origen $idresTemp0
 */
class Bitacora extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bitacora the static model class
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
		return 'bitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idresTemp, idresponsable, iddocumento, idarea, idareaAnterior, idproceso, fechaRecepcion, fechaAceptar, estado, confirmacion', 'required'),
			array('idresTemp, idresponsable, iddocumento, idarea, idareaAnterior, idproceso, estado, confirmacion', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idbitacora, idresTemp, idresponsable, iddocumento, idarea, idareaAnterior, idproceso, fechaRecepcion, fechaAceptar, estado, confirmacion', 'safe', 'on'=>'search'),
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
			'idarea0' => array(self::BELONGS_TO, 'Area', 'idarea'),
			'iddocumento0' => array(self::BELONGS_TO, 'Documento', 'iddocumento'),
			'idproceso0' => array(self::BELONGS_TO, 'Proceso', 'idproceso'),
			'idresponsable0' => array(self::BELONGS_TO, 'User', 'idresponsable'),
			'idresTemp0' => array(self::BELONGS_TO, 'Origen', 'idresTemp'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbitacora' => 'Idbitacora',
			'idresTemp' => 'Idres Temp',
			'idresponsable' => 'Idresponsable',
			'iddocumento' => 'Iddocumento',
			'idarea' => 'Idarea',
			'idareaAnterior' => 'Idarea Anterior',
			'idproceso' => 'Idproceso',
			'fechaRecepcion' => 'Fecha Recepcion',
			'fechaAceptar' => 'Fecha Aceptar',
			'estado' => 'Estado',
			'confirmacion' => 'Confirmacion',
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

		$criteria->compare('idbitacora',$this->idbitacora);
		$criteria->compare('idresTemp',$this->idresTemp);
		$criteria->compare('idresponsable',$this->idresponsable);
		$criteria->compare('iddocumento',$this->iddocumento);
		$criteria->compare('idarea',$this->idarea);
		$criteria->compare('idareaAnterior',$this->idareaAnterior);
		$criteria->compare('idproceso',$this->idproceso);
		$criteria->compare('fechaRecepcion',$this->fechaRecepcion,true);
		$criteria->compare('fechaAceptar',$this->fechaAceptar,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('confirmacion',$this->confirmacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}