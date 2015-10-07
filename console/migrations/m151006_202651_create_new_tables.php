<?php

use yii\db\Schema;
use yii\db\Migration;

class m151006_202651_create_new_tables extends Migration
{
    public function up()
    {

//        $this->createTable('product', [
//            'id' => 'int(10) unsigned NOT NULL PRIMARY_KEY AUTO_INCREMENT',
//            'name' => 'varchar(255) NOT NULL',
//            'description' => 'varchar(255) NOT NULL',
//            'price' => 'varchar(255) NOT NULL',
//        ]);

        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'price' => $this->string()->notNull(),
        ]);

//        $this->createTable('characteristics_title', [
//            'id' => 'int(10) unsigned NOT NULL PRIMARY_KEY AUTO_INCREMENT',
//            'title' => 'varchar(255) NOT NULL',
//        ]);

        $this->createTable('{{%characteristics_title}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),

        ]);

//        $this->createTable('characteristics', [
//            'id' => 'int(10) unsigned NOT NULL PRIMARY_KEY AUTO_INCREMENT',
//            'id_title' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
//            'id_product' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
//            'value' => 'varchar(255) NOT NULL',
//            'FOREIGN KEY (id_title) REFERENCES characteristics_title (id)',
//            'FOREIGN KEY (id_product) REFERENCES product (id)'
//        ]);


        $this->createTable('{{%characteristics}}', [
            'id' => $this->primaryKey(),
            'id_title' => $this->integer()->notNull(),
            'id_product' => $this->integer()->notNull(),
            'value' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('fk_characteristics_id_product', 'characteristics', 'id_product', 'product', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_characteristics_id_title', 'characteristics', 'id_title', 'characteristics_title', 'id', 'RESTRICT', 'CASCADE');

//        $this->createTable('order1', [
//            'id' => 'int(10) unsigned NOT NULL PRIMARY_KEY AUTO_INCREMENT',
//            'id_product' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
//            'number' => 'int(10) unsigned NOT NULL',
//            'customer_name' => 'varchar(255) NOT NULL',
//            'customer_phone' => 'varchar(255) NOT NULL',
//            'order_time' => 'timestamp',
//            'FOREIGN KEY (id_product) REFERENCES product (id)'
//        ]);

        $this->createTable('{{%order1}}', [
            'id' => $this->primaryKey(),
            'id_product' => $this->integer()->notNull(),
            'number' => $this->integer()->notNull(),
            'customer_name' => $this->string()->notNull(),
            'customer_phone' => $this->string()->notNull(),
            'order_time' => $this->timestamp()
        ]);

        $this->addForeignKey('fk_order1_id_product', 'order1', 'id_product', 'product', 'id', 'RESTRICT', 'CASCADE');


    }

    public function down()
    {
        echo "m151006_202651_create_new_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
