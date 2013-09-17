<?php

/**
 * This is the model class for table "parametro".
 *
 * The followings are the available columns in table 'parametro':
 * @property integer $idparametro
 * @property integer $ano
 * @property string $mes
 * @property string $iva
 * @property string $it
 */
class Parametro extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Parametro the static model class
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
		return 'parametro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano', 'numerical', 'integerOnly'=>true),
			array('mes', 'length', 'max'=>45),
			array('iva, it', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idparametro, ano, mes, iva, it', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idparametro' => 'Idparametro',
			'ano' => 'Ano',
			'mes' => 'Mes',
			'iva' => 'Iva',
			'it' => 'It',
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

		$criteria->compare('idparametro',$this->idparametro);
		$criteria->compare('ano',$this->ano);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('iva',$this->iva,true);
		$criteria->compare('it',$this->it,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}