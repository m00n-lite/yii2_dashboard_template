<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles adding surname_field to table `profile`.
 */
class m160710_232209_add_surname_field_to_profile extends \yii\db\Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
		$this->addColumn('{{%profile}}', 'surname', Schema::TYPE_STRING);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
		$this->dropColumn('{{%profile}}', 'surname');
    }
}
