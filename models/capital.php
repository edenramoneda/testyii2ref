<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "capital".
 *
 * @property int $id
 * @property int $country_id
 * @property string $capital_name
 * @property string $created_at
 * @property string $updated_at
 */
class Capital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'capital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['capital_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'capital_name' => 'Capital Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
