<?php

use yii\db\Schema;
use yii\db\Migration;

class m150728_223939_game_companies extends Migration
{
    public function safeUp()
    {
	$this->createTable("{{%game_company}}", [
	    "id"          => "pk",
	    "name"        => "string",
	    "description" => "text"
	]);

	$this->createTable("{{%book_author}}", [
	    "id"              => "pk",
            "game_company_id" => "integer",
	    "name"            => "string",
	    "description"     => "text"
	]);

	$this->addForeignKey( "author_company_id", "{{%book_author}}", "game_company_id", "{{%game_company}}", "id" );
    }

    public function safeDown()
    {
	$this->dropTable("{{%book_author}}");
	$this->dropTable("{{%game_company}}");
	return true;
    }
}
