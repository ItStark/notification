<?php

namespace kouosl\notification\models;

use Yii;

/**
 * This is the model class for table "bildirim".
 *
 * @property int $id
 * @property string $bildirim_tip
 * @property string $bildirim_icerik
 * @property string $bildirim_tarih
 */
class Bildirim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bildirim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bildirim_tip', 'bildirim_icerik', 'bildirim_tarih'], 'required'],
            [['bildirim_tip'], 'string', 'max' => 55],
            [['bildirim_icerik', 'bildirim_tarih'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bildirim_tip' => 'Bildirim Tip',
            'bildirim_icerik' => 'Bildirim Icerik',
            'bildirim_tarih' => 'Bildirim Tarih',
        ];
    }
}
