<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Basic Fields
            $table->string('name', 255)->default('');
            $table->string('url', 255)->default('');
            $table->string('route_name', 255)->default(null)->nullable()->unique();
            $table->string('module', 255)->nullable()->default(null);
            $table->boolean('display')->default(false);
            $table->boolean('noindex')->default(false);
            // Tree Fields
            $table->bigInteger('parent')->nullable()->default(null);
            $table->integer('left_key')->nullable()->default(null);
            $table->integer('right_key')->nullable()->default(null);
            $table->integer('level')->default(1);
            // Additional Fields
            $table->string('title', 255)->default('');
            $table->string('description', 500)->default('');
            $table->string('h1', 255)->default('');
            $table->text('text')->nullable()->default(null);
            // Menu Fields
            $table->boolean('menu1')->default(false);
            $table->boolean('menu2')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
