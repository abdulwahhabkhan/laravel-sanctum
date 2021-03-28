<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('start_date')->nullable()->index()->index();
            $table->date('end_date')->nullable()->index()->index();
            $table->unsignedBigInteger('owner')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->tinyInteger('progress')->default(0);
            $table->boolean('status')->default(0)->index();
            $table->timestamps();
            $table->foreign('owner')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->index(['created_by', 'owner', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
