<?php

/**
 * This is the model class for table "documento".
 *
 * The followings are the available columns in table 'documento':
 * @property integer $iddocumento
 * @property integer $idempresa
 * @property integer $idresponsable
 * @property string $nombre
 * @property string $descripcion
 * @property integer $idbitacora
 * @property string $tipo
 * @property string $ruta
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 * @property Empresa $idempresa0
 */
class Documento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Documento the static model class
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
		return 'documento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idempresa, idresponsable, nombre, descripcion, idbitacora, tipo', 'required'),
			array('idempresa, idresponsable, idbitacora', 'numerical', 'integerOnly'=>true),
			array('nombre, tipo', 'length', 'max'=>45),
			array('ruta', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iddocumento, idempresa, idresponsable, nombre, descripcion, idbitacora, tipo, ruta', 'safe', 'on'=>'search'),
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
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'iddocumento'),
			'idempresa0' => array(self::BELONGS_TO, 'Empresa', 'idempresa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddocumento' => 'Iddocumento',
			'idempresa' => 'Idempresa',
			'idresponsable' => 'Idresponsable',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'idbitacora' => 'Idbitacora',
			'tipo' => 'Tipo',
			'ruta' => 'Ruta',
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

		$criteria->compare('iddocumento',$this->iddocumento);
		$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('idresponsable',$this->idresponsable);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('idbitacora',$this->idbitacora);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('ruta',$this->ruta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}