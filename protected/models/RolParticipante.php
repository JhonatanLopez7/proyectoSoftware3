<?php

/**
 * This is the model class for table "rol_participante".
 *
 * The followings are the available columns in table 'rol_participante':
 * @property integer $codigo_RolParticipante
 * @property string $nombre
 * @property integer $codigo_Participante
 *
 * The followings are the available model relations:
 * @property Participante $codigoParticipante
 */
class RolParticipante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rol_participante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_RolParticipante, nombre, codigo_Participante', 'required'),
			array('codigo_RolParticipante, codigo_Participante', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_RolParticipante, nombre, codigo_Participante', 'safe', 'on'=>'search'),
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
			'codigoParticipante' => array(self::BELONGS_TO, 'Participante', 'codigo_Participante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_RolParticipante' => 'Codigo Rol Participante',
			'nombre' => 'Nombre',
			'codigo_Participante' => 'Codigo Participante',
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

		$criteria->compare('codigo_RolParticipante',$this->codigo_RolParticipante);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('codigo_Participante',$this->codigo_Participante);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RolParticipante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
