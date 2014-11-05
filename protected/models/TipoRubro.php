<?php

/**
 * This is the model class for table "tipo_rubro".
 *
 * The followings are the available columns in table 'tipo_rubro':
 * @property integer $codigo_TipoRubro
 * @property string $nombre
 * @property integer $rubroEspecial
 * @property string $descripcion
 * @property integer $codigo_PresupuestoConvocatoria
 * @property integer $codigo_Atributo
 *
 * The followings are the available model relations:
 * @property PresupuestoConvocatoria $codigoPresupuestoConvocatoria
 * @property Atributo $codigoAtributo
 */
class TipoRubro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_rubro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_TipoRubro, nombre, rubroEspecial, codigo_PresupuestoConvocatoria, codigo_Atributo', 'required'),
			array('codigo_TipoRubro, rubroEspecial, codigo_PresupuestoConvocatoria, codigo_Atributo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			array('descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_TipoRubro, nombre, rubroEspecial, descripcion, codigo_PresupuestoConvocatoria, codigo_Atributo', 'safe', 'on'=>'search'),
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
			'codigoPresupuestoConvocatoria' => array(self::BELONGS_TO, 'PresupuestoConvocatoria', 'codigo_PresupuestoConvocatoria'),
			'codigoAtributo' => array(self::BELONGS_TO, 'Atributo', 'codigo_Atributo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_TipoRubro' => 'Codigo Tipo Rubro',
			'nombre' => 'Nombre',
			'rubroEspecial' => 'Rubro Especial',
			'descripcion' => 'Descripcion',
			'codigo_PresupuestoConvocatoria' => 'Codigo Presupuesto Convocatoria',
			'codigo_Atributo' => 'Codigo Atributo',
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

		$criteria->compare('codigo_TipoRubro',$this->codigo_TipoRubro);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('rubroEspecial',$this->rubroEspecial);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('codigo_PresupuestoConvocatoria',$this->codigo_PresupuestoConvocatoria);
		$criteria->compare('codigo_Atributo',$this->codigo_Atributo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoRubro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
