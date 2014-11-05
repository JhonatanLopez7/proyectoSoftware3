<?php

/**
 * This is the model class for table "atributo".
 *
 * The followings are the available columns in table 'atributo':
 * @property integer $codigo_Atributo
 * @property string $nombre
 * @property integer $tipo
 *
 * The followings are the available model relations:
 * @property TipoRubro[] $tipoRubros
 */
class Atributo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'atributo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_Atributo, nombre, tipo', 'required'),
			array('codigo_Atributo, tipo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_Atributo, nombre, tipo', 'safe', 'on'=>'search'),
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
			'tipoRubros' => array(self::HAS_MANY, 'TipoRubro', 'codigo_Atributo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_Atributo' => 'Codigo Atributo',
			'nombre' => 'Nombre',
			'tipo' => 'Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('codigo_Atributo',$this->codigo_Atributo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Atributo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
