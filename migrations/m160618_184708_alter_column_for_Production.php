<?php

use yii\db\Migration;

class m160618_184708_alter_column_for_Production extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('Production','Status',$this->string(25)->notNull());
    }

    public function safeDown()
    {
        echo "m160618_184708_alter_column_for_Production cannot be reverted.\n";

        return false;
    }

}
