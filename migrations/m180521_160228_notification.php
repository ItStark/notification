<?php

use yii\db\Migration;

/**
 * Class m180521_160228_notification
 */
class m180521_160228_notification extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bildirim',array (
            'id' => $this->primaryKey(),
            'bildirim_tip' => $this->string(60)->notNull(),
            'bildirim_icerik' => $this->text()->notNull(),
            'bildirim_tarih' => $this->date()->notNull(),
        ) );

        $this->createTable('kullanici', array(
            'kullanici_id' => $this->primaryKey(),
            'kullanici_adSoyad' => $this->string(55)->notNull(),
            'okundu_tarih' => $this->date()->notNull()
        ) );
//  unique tanımlama
        $this->createIndex('unique_id','bildirim', 'bildirim_tip', true);
 
// tablolar arası bağlantı

        $this->addForeignKey(
            'fk_bildirim_id',
            'bildirim',
            'id',
            'kullanici',
            'kullanici_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bildirim');
        $this->dropTable('kullanici');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180521_160228_notification cannot be reverted.\n";

        return false;
    }
    */
}
