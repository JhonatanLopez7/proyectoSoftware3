<?php

/**
 * This is the model class for table "campo".
 *
 * The followings are the available columns in table 'campo':
 * @property integer $codigo_Campo
 * @property string $nombre
 * @property integer $tipo
 * @property double $longitud
 * @property integer $obligatorio
 * @property integer $visible
 * @property integer $codigo_SeccionDinamica
 *
 * The followings are the available model relations:
 * @property SeccionDinamica $codigoSeccionDinamica
 */
class Campo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'campo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_Campo, nombre, obligatorio, codigo_SeccionDinamica', 'required'),
			array('codigo_Campo, tipo, obligatorio, visible, codigo_SeccionDinamica', 'numerical', 'integerOnly'=>true),
			array('longitud', 'numerical'),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_Campo, nombre, tipo, longitud, obligatorio, visible, codigo_SeccionDinamica', 'safe', 'on'=>'search'),
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
			'codigoSeccionDinamica' => array(self::BELONGS_TO, 'SeccionDinamica', 'codigo_SeccionDinamica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_Campo' => 'Codigo Campo',
			'nombre' => 'Nombre',
			'tipo' => 'Tipo',
			'longitud' => 'Longitud',
			'obligatorio' => 'Obligatorio',
			'visible' => 'Visible',
			'codigo_SeccionDinamica' => 'Codigo Seccion Dinamica',
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

		$criteria->compare('codigo_Campo',$this->codigo_Campo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('longitud',$this->longitud);
		$criteria->compare('obligatorio',$this->obligatorio);
		$criteria->compare('visible',$this->visible);
		$criteria->compare('codigo_SeccionDinamica',$this->codigo_SeccionDinamica);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Campo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
