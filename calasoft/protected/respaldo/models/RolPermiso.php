<?php

/**
 * This is the model class for table "rol_permiso".
 *
 * The followings are the available columns in table 'rol_permiso':
 * @property integer $idrol_permiso
 * @property integer $idRol
 * @property integer $idPermiso
 *
 * The followings are the available model relations:
 * @property Rol $idRol0
 * @property Permiso $idPermiso0
 */
class RolPermiso extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RolPermiso the static model class
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
		return 'rol_permiso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idRol, idPermiso', 'required'),
			array('idRol, idPermiso', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idrol_permiso, idRol, idPermiso', 'safe', 'on'=>'search'),
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
			'idRol0' => array(self::BELONGS_TO, 'Rol', 'idRol'),
			'idPermiso0' => array(self::BELONGS_TO, 'Permiso', 'idPermiso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idrol_permiso' => 'Idrol Permiso',
			'idRol' => 'Id Rol',
			'idPermiso' => 'Id Permiso',
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

		$criteria->compare('idrol_permiso',$this->idrol_permiso);
		$criteria->compare('idRol',$this->idRol);
		$criteria->compare('idPermiso',$this->idPermiso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}