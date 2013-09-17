<?php

/**
 * This is the model class for table "modulo".
 *
 * The followings are the available columns in table 'modulo':
 * @property integer $idmodulo
 * @property string $rutaModulo
 * @property string $descripcion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Rol $rol
 */
class Modulo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Modulo the static model class
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
		return 'modulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rutaModulo', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('rutaModulo', 'length', 'max'=>1000),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idmodulo, rutaModulo, descripcion, estado', 'safe', 'on'=>'search'),
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
			'rol' => array(self::HAS_ONE, 'Rol', 'idRol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmodulo' => 'Idmodulo',
			'rutaModulo' => 'Ruta Modulo',
			'descripcion' => 'Descripcion',
			'estado' => 'Estado',
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

		$criteria->compare('idmodulo',$this->idmodulo);
		$criteria->compare('rutaModulo',$this->rutaModulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}