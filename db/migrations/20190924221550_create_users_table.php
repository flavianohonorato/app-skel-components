<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');

        $table->addColumn('name', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ]);

        $table->addColumn('email','string', [
            'default'   => null,
            'limit'     => 150,
            'null'      => false,
        ]) ->addIndex(['email'], ['unique' => true]);

        $table->addColumn('password', 'string', [
            'default'   => null,
            'limit'     => 255,
            'null'      => false,
        ]);

        $table->addColumn('created_at', 'timestamp', [
            'default'   => null,
            'limit'     => null,
            'null'      => true,
        ]);

        $table->addColumn('updated_at', 'timestamp', [
            'default'   => null,
            'limit'     => null,
            'null'      => true,
        ]);

        $table->create();
    }
}
