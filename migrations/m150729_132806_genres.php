<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_132806_genres extends Migration
{
    public function safeUp()
    {
	$this->createTable("{{%genre}}", [
	    "id"              => "pk",
	    "name"            => "string",
	    "description"     => "text",
            "parent_genre_id" => "integer",
	]);

    }

    public function safeDown()
    {
	$this->dropTable("{{%genre}}");
	return true;
    }
}
