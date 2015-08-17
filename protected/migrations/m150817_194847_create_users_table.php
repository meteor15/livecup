<?php

class m150817_194847_create_users_table extends CDbMigration
{
	public function safeUp()
	{
        $this->createTable('tbl_users', array(
            'id' => 'INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT',
            'username' => 'VARCHAR(128) NOT NULL',
            'password' => 'VARCHAR(128) NOT NULL',
            'email' => 'VARCHAR(128) NOT NULL',
        ));
	}

	public function safeDown()
	{
        $this->dropTable('tbl_users');
	}
}
