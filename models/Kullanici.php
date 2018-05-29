<?php

namespace kouosl\notification\models;

use Yii;

/**
 * This is the model class for table "kullanici".
 *
 * @property int $kullanici_id
 * @property string $kullanici_adSoyad
 * @property string $okundu_tarih
 */
class Kullanici extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kullanici';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kullanici_adSoyad', 'okundu_tarih'], 'required'],
            [['okundu_tarih'], 'safe'],
            [['kullanici_adSoyad'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kullanici_id' => 'Kullanici ID',
            'kullanici_adSoyad' => 'Kullanici Ad Soyad',
            'okundu_tarih' => 'Okundu Tarih',
        ];
    }
}
