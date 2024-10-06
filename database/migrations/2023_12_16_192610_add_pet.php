<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('type');
            $table->string('breed');
            $table->string('nickname');
            $table->integer('age');
            $table->string('gender');
            $table->string('group');
            $table->decimal('price', 10, 2);
            $table->text('owner_msg');
            $table->string('training');
            $table->string('vaccination');
            $table->string('behaviour');
            $table->string('image_path')->nullable();
            // $table->foreignId('owner_id')->constrained('owners');
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
