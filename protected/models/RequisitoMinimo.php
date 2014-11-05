<?php

/**
 * This is the model class for table "requisito_minimo".
 *
 * The followings are the available columns in table 'requisito_minimo':
 * @property integer $codigo_RequisitoMinimo
 * @property string $nombre
 * @property integer $obligatorio
 * @property string $validoHasta
 * @property integer $categoria
 * @property integer $codigo_Formulario
 *
 * The followings are the available model relations:
 * @property Formulario $codigoFormulario
 */
class RequisitoMinimo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'requisito_minimo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_RequisitoMinimo, nombre, obligatorio, validoHasta, codigo_Formulario', 'required'),
			array('codigo_RequisitoMinimo, obligatorio, categoria, codigo_Formulario', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_RequisitoMinimo, nombre, obligatorio, validoHasta, categoria, codigo_Formulario', 'safe', 'on'=>'search'),
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
			'codigoFormulario' => array(self::BELONGS_TO, 'Formulario', 'codigo_Formulario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_RequisitoMinimo' => 'Codigo Requisito Minimo',
			'nombre' => 'Nombre',
			'obligatorio' => 'Obligatorio',
			'validoHasta' => 'Valido Hasta',
			'categoria' => 'Categoria',
			'codigo_Formulario' => 'Codigo Formulario',
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

		$criteria->compare('codigo_RequisitoMinimo',$this->codigo_RequisitoMinimo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('obligatorio',$this->obligatorio);
		$criteria->compare('validoHasta',$this->validoHasta,true);
		$criteria->compare('categoria',$this->categoria);
		$criteria->compare('codigo_Formulario',$this->codigo_Formulario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RequisitoMinimo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
