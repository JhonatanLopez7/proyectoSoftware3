<?php

/**
 * This is the model class for table "usuario_has_convocatoria".
 *
 * The followings are the available columns in table 'usuario_has_convocatoria':
 * @property integer $codigo_Usuario
 * @property integer $numero_Convocatoria
 *
 * The followings are the available model relations:
 * @property Usuario $codigoUsuario
 * @property Convocatoria $numeroConvocatoria
 */
class UsuarioHasConvocatoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario_has_convocatoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_Usuario, numero_Convocatoria', 'required'),
			array('codigo_Usuario, numero_Convocatoria', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo_Usuario, numero_Convocatoria', 'safe', 'on'=>'search'),
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
			'codigoUsuario' => array(self::BELONGS_TO, 'Usuario', 'codigo_Usuario'),
			'numeroConvocatoria' => array(self::BELONGS_TO, 'Convocatoria', 'numero_Convocatoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_Usuario' => 'Codigo Usuario',
			'numero_Convocatoria' => 'Numero Convocatoria',
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

		$criteria->compare('codigo_Usuario',$this->codigo_Usuario);
		$criteria->compare('numero_Convocatoria',$this->numero_Convocatoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsuarioHasConvocatoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
