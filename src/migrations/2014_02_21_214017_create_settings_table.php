<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateSettingsTable
 */
class CreateSettingsTable extends Migration {


    /**
     * @var string
     */
    private $_tableName = 'settings';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table
        Schema::create(
            $this->_tableName,
            function ($table) {
                $table
                    ->engine = 'InnoDB';
                $table
                    ->increments('id')
                    ->unique()
                    ->unsigned();
                $table
                    ->string('key')
                    ->unique();
                $table
                    ->text('value');
                $table
                    ->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop table
        Schema::dropIfExists($this->_tableName);
    }

}
