<?php

/**
 * This is the model class for table "claactivos".
 *
 * The followings are the available columns in table 'claactivos':
 * @property integer $idclaActivos
 * @property string $descripcion
 * @property string $vidaUtil
 * @property string $coefDepreciacion
 *
 * The followings are the available model relations:
 * @property Activos $idclaActivos0
 */
class Claactivos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Claactivos the static model class
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
		return 'claactivos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, vidaUtil, coefDepreciacion', 'required'),
			array('descripcion', 'length', 'max'=>45),
			array('vidaUtil, coefDepreciacion', 'length', 'max'=>18),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idclaActivos, descripcion, vidaUtil, coefDepreciacion', 'safe', 'on'=>'search'),
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
			'idclaActivos0' => array(self::BELONGS_TO, 'Activos', 'idclaActivos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idclaActivos' => 'Idcla Activos',
			'descripcion' => 'Descripcion',
			'vidaUtil' => 'Vida Util',
			'coefDepreciacion' => 'Coef Depreciacion',
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

		$criteria->compare('idclaActivos',$this->idclaActivos);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('vidaUtil',$this->vidaUtil,true);
		$criteria->compare('coefDepreciacion',$this->coefDepreciacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}