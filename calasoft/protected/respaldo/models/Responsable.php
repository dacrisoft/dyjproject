<?php

/**
 * This is the model class for table "responsable".
 *
 * The followings are the available columns in table 'responsable':
 * @property integer $idresponsable
 * @property string $tipoResponsable
 * @property integer $idPersona
 *
 * The followings are the available model relations:
 * @property Empresa[] $empresas
 * @property Persona $idPersona0
 */
class Responsable extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Responsable the static model class
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
		return 'responsable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipoResponsable, idPersona', 'required'),
			array('idPersona', 'numerical', 'integerOnly'=>true),
			array('tipoResponsable', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idresponsable, tipoResponsable, idPersona', 'safe', 'on'=>'search'),
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
			'empresas' => array(self::HAS_MANY, 'Empresa', 'idResponsable'),
			'idPersona0' => array(self::BELONGS_TO, 'Persona', 'idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idresponsable' => 'Idresponsable',
			'tipoResponsable' => 'Tipo Responsable',
			'idPersona' => 'Id Persona',
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

		$criteria->compare('idresponsable',$this->idresponsable);
		$criteria->compare('tipoResponsable',$this->tipoResponsable,true);
		$criteria->compare('idPersona',$this->idPersona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}