<?php

/**
 * This is the model class for table "plantilla".
 *
 * The followings are the available columns in table 'plantilla':
 * @property integer $numero_Plantilla
 * @property string $nombre
 * @property integer $tipo
 * @property string $fechaCreacion
 * @property string $fechaModificacion
 * @property integer $codigo_Formulario
 *
 * The followings are the available model relations:
 * @property Formulario $codigoFormulario
 */
class Plantilla extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plantilla';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_Plantilla, nombre, tipo, fechaCreacion, fechaModificacion, codigo_Formulario', 'required'),
			array('numero_Plantilla, tipo, codigo_Formulario', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('numero_Plantilla, nombre, tipo, fechaCreacion, fechaModificacion, codigo_Formulario', 'safe', 'on'=>'search'),
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
			'numero_Plantilla' => 'Numero Plantilla',
			'nombre' => 'Nombre',
			'tipo' => 'Tipo',
			'fechaCreacion' => 'Fecha Creacion',
			'fechaModificacion' => 'Fecha Modificacion',
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

		$criteria->compare('numero_Plantilla',$this->numero_Plantilla);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);
		$criteria->compare('fechaModificacion',$this->fechaModificacion,true);
		$criteria->compare('codigo_Formulario',$this->codigo_Formulario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plantilla the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
