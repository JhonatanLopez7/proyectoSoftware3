<?php

/**
 * This is the model class for table "formulario".
 *
 * The followings are the available columns in table 'formulario':
 * @property integer $codigo_Formulario
 * @property string $fechaCreacion
 * @property string $activoHasta
 * @property integer $estado
 * @property integer $orden
 * @property integer $tipo
 * @property integer $numero_Convocatoria
 * @property integer $codigo_Cronograma
 * @property integer $codigo_Presupuesto
 *
 * The followings are the available model relations:
 * @property Convocatoria $numeroConvocatoria
 * @property Cronograma $codigoCronograma
 * @property Presupuesto $codigoPresupuesto
 * @property PalabraClave[] $palabraClaves
 * @property Participante[] $participantes
 * @property Plantilla[] $plantillas
 * @property Producto[] $productos
 * @property RequisitoMinimo[] $requisitoMinimos
 * @property SeccionDinamica[] $seccionDinamicas
 */
class Formulario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'formulario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_Formulario, numero_Convocatoria, codigo_Cronograma, codigo_Presupuesto', 'required'),
			array('codigo_Formulario, estado, orden, tipo, numero_Convocatoria, codigo_Cronograma, codigo_Presupuesto', 'numerical', 'integerOnly'=>true),
			array('fechaCreacion, activoHasta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_Formulario, fechaCreacion, activoHasta, estado, orden, tipo, numero_Convocatoria, codigo_Cronograma, codigo_Presupuesto', 'safe', 'on'=>'search'),
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
			'numeroConvocatoria' => array(self::BELONGS_TO, 'Convocatoria', 'numero_Convocatoria'),
			'codigoCronograma' => array(self::BELONGS_TO, 'Cronograma', 'codigo_Cronograma'),
			'codigoPresupuesto' => array(self::BELONGS_TO, 'Presupuesto', 'codigo_Presupuesto'),
			'palabraClaves' => array(self::HAS_MANY, 'PalabraClave', 'codigo_Formulario'),
			'participantes' => array(self::HAS_MANY, 'Participante', 'codigo_Formulario'),
			'plantillas' => array(self::HAS_MANY, 'Plantilla', 'codigo_Formulario'),
			'productos' => array(self::HAS_MANY, 'Producto', 'codigo_Formulario'),
			'requisitoMinimos' => array(self::HAS_MANY, 'RequisitoMinimo', 'codigo_Formulario'),
			'seccionDinamicas' => array(self::HAS_MANY, 'SeccionDinamica', 'codigo_Formulario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_Formulario' => 'Codigo Formulario',
			'fechaCreacion' => 'Fecha Creacion',
			'activoHasta' => 'Activo Hasta',
			'estado' => 'Estado',
			'orden' => 'Orden',
			'tipo' => 'Tipo',
			'numero_Convocatoria' => 'Numero Convocatoria',
			'codigo_Cronograma' => 'Codigo Cronograma',
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

		$criteria->compare('codigo_Formulario',$this->codigo_Formulario);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);
		$criteria->compare('activoHasta',$this->activoHasta,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('numero_Convocatoria',$this->numero_Convocatoria);
		$criteria->compare('codigo_Cronograma',$this->codigo_Cronograma);
		$criteria->compare('codigo_Presupuesto',$this->codigo_Presupuesto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Formulario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
