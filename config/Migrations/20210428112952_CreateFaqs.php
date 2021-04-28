<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateFaqs extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('faqs');
        $table->addColumn('category_dataset_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('question', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->addColumn('answer', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
