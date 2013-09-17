<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $idUser
 * @property string $nameUser
 * @property string $password
 * @property string $pastPassword
 * @property string $changeDate
 * @property integer $idPersona
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 * @property Rol[] $rols
 * @property Persona $idPersona0
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nameUser, password, idPersona', 'required'),
			array('idPersona', 'numerical', 'integerOnly'=>true),
			array('nameUser', 'length', 'max'=>50),
			array('password, pastPassword', 'length', 'max'=>1000),
			array('changeDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUser, nameUser, password, pastPassword, changeDate, idPersona', 'safe', 'on'=>'search'),
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
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'idresponsable'),
			'rols' => array(self::HAS_MANY, 'Rol', 'idUser'),
			'idPersona0' => array(self::BELONGS_TO, 'Persona', 'idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUser' => 'Id User',
			'nameUser' => 'Name User',
			'password' => 'Password',
			'pastPassword' => 'Past Password',
			'changeDate' => 'Change Date',
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

		$criteria->compare('idUser',$this->idUser);
		$criteria->compare('nameUser',$this->nameUser,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('pastPassword',$this->pastPassword,true);
		$criteria->compare('changeDate',$this->changeDate,true);
		$criteria->compare('idPersona',$this->idPersona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}