<?php

/**
 * This is the model class for table "rol".
 *
 * The followings are the available columns in table 'rol':
 * @property integer $idRol
 * @property string $rolName
 * @property integer $idUser
 *
 * The followings are the available model relations:
 * @property User $idUser0
 * @property Modulo $idRol0
 * @property RolPermiso[] $rolPermisos
 */
class Rol extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rol the static model class
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
		return 'rol';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rolName', 'required'),
			array('idUser', 'numerical', 'integerOnly'=>true),
			array('rolName', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idRol, rolName, idUser', 'safe', 'on'=>'search'),
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
			'idUser0' => array(self::BELONGS_TO, 'User', 'idUser'),
			'idRol0' => array(self::BELONGS_TO, 'Modulo', 'idRol'),
			'rolPermisos' => array(self::HAS_MANY, 'RolPermiso', 'idRol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRol' => 'Id Rol',
			'rolName' => 'Rol Name',
			'idUser' => 'Id User',
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

		$criteria->compare('idRol',$this->idRol);
		$criteria->compare('rolName',$this->rolName,true);
		$criteria->compare('idUser',$this->idUser);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}