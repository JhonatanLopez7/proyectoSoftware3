<?php

/**
 * This is the model class for table "participante".
 *
 * The followings are the available columns in table 'participante':
 * @property integer $codigo_Participante
 * @property integer $cantidad
 * @property string $seccion
 * @property integer $rol
 * @property integer $codigo_Formulario
 *
 * The followings are the available model relations:
 * @property Formulario $codigoFormulario
 * @property RolOrganizador[] $rolOrganizadors
 * @property RolParticipante[] $rolParticipantes
 */
class Participante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_Participante, cantidad, codigo_Formulario', 'required'),
			array('codigo_Participante, cantidad, rol, codigo_Formulario', 'numerical', 'integerOnly'=>true),
			array('seccion', 'length', 'max'=>127),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_Participante, cantidad, seccion, rol, codigo_Formulario', 'safe', 'on'=>'search'),
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
			'rolOrganizadors' => array(self::HAS_MANY, 'RolOrganizador', 'codigo_Participante'),
			'rolParticipantes' => array(self::HAS_MANY, 'RolParticipante', 'codigo_Participante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_Participante' => 'Codigo Participante',
			'cantidad' => 'Cantidad',
			'seccion' => 'Seccion',
			'rol' => 'Rol',
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

		$criteria->compare('codigo_Participante',$this->codigo_Participante);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('seccion',$this->seccion,true);
		$criteria->compare('rol',$this->rol);
		$criteria->compare('codigo_Formulario',$this->codigo_Formulario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
