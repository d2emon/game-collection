<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_172954_tags extends Migration
{
    public function safeUp()
    {
	$this->createTable("{{%tag}}", [
	    "id"              => "pk",
	    "name"            => "string",
	]);

    }

    public function safeDown()
    {
	$this->dropTable("{{%tag}}");
	return true;
    }
}
