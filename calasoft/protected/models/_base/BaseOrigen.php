<?php

/**
 * This is the model base class for the table "origen".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Origen".
 *
 * Columns in table "origen" available as properties of the model,
 * followed by relations of table "origen" available as properties of the model.
 *
 * @property integer $idorigen
 * @property string $tipo
 * @property integer $idpersona
 *
 * @property Bitacora[] $bitacoras
 * @property Persona $idpersona0
 */
abstract class BaseOrigen extends CActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'origen';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Origen|Origens', $n);
	}

	public static function representingColumn() {
		return 'tipo';
	}

	public function rules() {
		return array(
			array('idpersona', 'required'),
			array('idpersona', 'numerical', 'integerOnly'=>true),
			array('tipo', 'length', 'max'=>50),
			array('tipo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idorigen, tipo, idpersona', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'idresTemp'),
			'idpersona0' => array(self::BELONGS_TO, 'Persona', 'idpersona'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idorigen' => Yii::t('app', 'Idorigen'),
			'tipo' => Yii::t('app', 'Tipo'),
			'idpersona' => null,
			'bitacoras' => null,
			'idpersona0' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idorigen', $this->idorigen);
		$criteria->compare('tipo', $this->tipo, true);
		$criteria->compare('idpersona', $this->idpersona);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}