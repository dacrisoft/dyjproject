<?php

/**
 * This is the model class for table "area".
 *
 * The followings are the available columns in table 'area':
 * @property integer $idarea
 * @property integer $idempresa
 * @property string $cod
 * @property string $nombreArea
 * @property string $responsable
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 */
class Area extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Area the static model class
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
		return 'area';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idempresa, cod, nombreArea, responsable, descripcion', 'required'),
			array('idempresa', 'numerical', 'integerOnly'=>true),
			array('cod, nombreArea, responsable, descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idarea, idempresa, cod, nombreArea, responsable, descripcion', 'safe', 'on'=>'search'),
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
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'idarea'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idarea' => 'Idarea',
			'idempresa' => 'Idempresa',
			'cod' => 'Cod',
			'nombreArea' => 'Nombre Area',
			'responsable' => 'Responsable',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idarea',$this->idarea);
		$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('cod',$this->cod,true);
		$criteria->compare('nombreArea',$this->nombreArea,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}