<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->index();
            $table->string('last_name')->default('')->index();
            $table->string('phone')->default('');
            $table->string('email')->default('');
            $table->decimal('salary', 7, 2)->default(0);
            $table->string('avatar')->default('');
            $table->date('hiring_date')->nullable();
            $table->integer('parent_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('restrict')->onUpdate('cascade');
            $table->tinyInteger('level')->unsigned();
            $table->softDeletes();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
