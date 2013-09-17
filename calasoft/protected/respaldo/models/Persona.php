<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $idpersona
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property string $ci
 * @property string $direccion
 * @property string $telefono
 *
 * The followings are the available model relations:
 * @property Origen[] $origens
 * @property Responsable[] $responsables
 * @property User[] $users
 */
class Persona extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Persona the static model class
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
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, paterno, ci', 'required'),
			array('nombre, paterno, materno, ci, direccion, telefono', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpersona, nombre, paterno, materno, ci, direccion, telefono', 'safe', 'on'=>'search'),
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
			'origens' => array(self::HAS_MANY, 'Origen', 'idpersona'),
			'responsables' => array(self::HAS_MANY, 'Responsable', 'idPersona'),
			'users' => array(self::HAS_MANY, 'User', 'idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpersona' => 'Idpersona',
			'nombre' => 'Nombre',
			'paterno' => 'Paterno',
			'materno' => 'Materno',
			'ci' => 'Ci',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
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

		$criteria->compare('idpersona',$this->idpersona);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('paterno',$this->paterno,true);
		$criteria->compare('materno',$this->materno,true);
		$criteria->compare('ci',$this->ci,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}