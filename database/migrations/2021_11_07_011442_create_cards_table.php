<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nit')->nulleable();
            $table->string('address');
            $table->string('phone')->nulleable();
            $table->string('movil')->nulleable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->time('start')->nulleable();
            $table->time('end')->nulleable();
            $table->text('description')->nulleable();
            $table->string('path')->nulleable();
            $table->timestamps();

            $table->foreign( 'city_id' )->references( 'id' )->on( 'cities' );
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' );
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
