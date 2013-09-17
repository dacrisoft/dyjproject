<?php

/**
 * This is the model class for table "distamb".
 *
 * The followings are the available columns in table 'distamb':
 * @property integer $intdistAmb
 * @property integer $idarea
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Areaact $areaact
 * @property Activos $intdistAmb0
 */
class Distamb extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Distamb the static model class
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
		return 'distamb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idarea, descripcion', 'required'),
			array('idarea', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('intdistAmb, idarea, descripcion', 'safe', 'on'=>'search'),
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
			'areaact' => array(self::HAS_ONE, 'Areaact', 'idareaAct'),
			'intdistAmb0' => array(self::BELONGS_TO, 'Activos', 'intdistAmb'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'intdistAmb' => 'Intdist Amb',
			'idarea' => 'Idarea',
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

		$criteria->compare('intdistAmb',$this->intdistAmb);
		$criteria->compare('idarea',$this->idarea);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}