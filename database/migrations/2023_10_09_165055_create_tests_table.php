<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('test_category_id');
            $table->unsignedBigInteger('test_department_id');
            $table->unsignedBigInteger('test_template_id')->nullable();
            $table->unsignedInteger('fee')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();

            //foreign keys
            $table->foreign('test_category_id')->references('id')->on('test_categories');
            $table->foreign('test_department_id')->references('id')->on('test_departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
