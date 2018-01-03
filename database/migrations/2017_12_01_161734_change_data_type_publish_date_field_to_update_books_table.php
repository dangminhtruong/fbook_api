<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDataTypePublishDateFieldToUpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('update_books', function (Blueprint $table) {
            \DB::statement("ALTER TABLE update_books CHANGE publish_date publish_date DATE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('update_books', function (Blueprint $table) {
            \DB::statement("ALTER TABLE update_books CHANGE publish_date publish_date DATETIME");
        });
    }
}
