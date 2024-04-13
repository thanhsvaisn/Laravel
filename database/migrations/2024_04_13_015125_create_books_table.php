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
           Schema::create('books', function (Blueprint $table) {
            $table->increments('id'); // Auto-incrementing primary key
            $table->unsignedInteger('author_id')->default(0); // Foreign key to authors table
            $table->string('title', 55); // Title of the book
            $table->string('isbn', 25); // ISBN of the book
            $table->smallInteger('pub_year')->default(0); // Publication year of the book
$table->tinyInteger('available')->nullable(); // Availability status of the book, defaulting to NULLto an empty string
            $table->timestamps(); // Created_at and updated_at timestamps

            // Foreign key constraint
            // $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
