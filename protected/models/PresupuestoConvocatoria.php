<?php

/**
 * This is the model class for table "presupuesto_convocatoria".
 *
 * The followings are the available columns in table 'presupuesto_convocatoria':
 * @property integer $codigo_PresupuestoConvocatoria
 * @property string $nombre
 * @property integer $codigo_Presupuesto
 *
 * The followings are the available model relations:
 * @property Presupuesto $codigoPresupuesto
 * @property TipoRubro[] $tipoRubros
 */
class PresupuestoConvocatoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'presupuesto_convocatoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_PresupuestoConvocatoria, nombre, codigo_Presupuesto', 'required'),
			array('codigo_PresupuestoConvocatoria, codigo_Presupuesto', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_PresupuestoConvocatoria, nombre, codigo_Presupuesto', 'safe', 'on'=>'search'),
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
			'codigoPresupuesto' => array(self::BELONGS_TO, 'Presupuesto', 'codigo_Presupuesto'),
			'tipoRubros' => array(self::HAS_MANY, 'TipoRubro', 'codigo_PresupuestoConvocatoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_PresupuestoConvocatoria' => 'Codigo Presupuesto Convocatoria',
			'nombre' => 'Nombre',
			'codigo_Presupuesto' => 'Codigo Presupuesto',
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

		$criteria->compare('codigo_PresupuestoConvocatoria',$this->codigo_PresupuestoConvocatoria);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('codigo_Presupuesto',$this->codigo_Presupuesto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PresupuestoConvocatoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
