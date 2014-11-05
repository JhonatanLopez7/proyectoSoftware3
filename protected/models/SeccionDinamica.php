<?php

/**
 * This is the model class for table "seccion_dinamica".
 *
 * The followings are the available columns in table 'seccion_dinamica':
 * @property integer $codigo_SeccionDinamica
 * @property string $descripcion
 * @property integer $estado
 * @property integer $codigo_Formulario
 *
 * The followings are the available model relations:
 * @property Campo[] $campos
 * @property Formulario $codigoFormulario
 */
class SeccionDinamica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seccion_dinamica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_SeccionDinamica, descripcion, estado, codigo_Formulario', 'required'),
			array('codigo_SeccionDinamica, estado, codigo_Formulario', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_SeccionDinamica, descripcion, estado, codigo_Formulario', 'safe', 'on'=>'search'),
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
			'campos' => array(self::HAS_MANY, 'Campo', 'codigo_SeccionDinamica'),
			'codigoFormulario' => array(self::BELONGS_TO, 'Formulario', 'codigo_Formulario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_SeccionDinamica' => 'Codigo Seccion Dinamica',
			'descripcion' => 'Descripcion',
			'estado' => 'Estado',
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

		$criteria->compare('codigo_SeccionDinamica',$this->codigo_SeccionDinamica);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('codigo_Formulario',$this->codigo_Formulario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SeccionDinamica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
