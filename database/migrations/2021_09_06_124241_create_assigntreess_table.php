<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssigntreessTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigntreess', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tree_category');
            $table->text('schoo_to_be_assigned_to');
            $table->integer('number_to_assign');
            $table->longText('comment');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assigntreess');
    }
}
