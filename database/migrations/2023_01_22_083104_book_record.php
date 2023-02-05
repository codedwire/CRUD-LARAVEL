<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('book_records', function (Blueprint $table) {
            $table->id();
            $table->string('book_id')->unique();
            $table->string('title');
            $table->string('author_id')->default("---");
            $table->string('description')->nullable();
            $table->double('price')->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('book_records');
    }
};
