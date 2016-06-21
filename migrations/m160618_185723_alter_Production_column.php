<?php

use yii\db\Migration;

class m160618_185723_alter_Production_column extends Migration
{
    public function safeUp()
    {

        $this->alterColumn('Production','Status',$this->string(25)->notNull());
 
    }

    public function safeDown()
    {
        echo "m160618_185723_alter_Production_column cannot be reverted.\n";

        return false;
    }

}
