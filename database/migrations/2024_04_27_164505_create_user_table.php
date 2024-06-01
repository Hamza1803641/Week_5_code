<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {

            $table->string('email', 100)->unique();
            $table->string('name', 255);
            $table->string('password');
            $table->unsignedInteger('age');
            $table->string('picture');
            $table->string('bio');
            $table->enum('interest', ['sports', 'music', 'movies'])->nullable();
            $table->string('gender', 10);
            $table->date('birthdate');
            $table->string('phone');
            $table->string('address', 255);
            $table->string('city', 255);
            $table->integer('zip_code');
            $table->string('country', 255);
            $table->string('url');

            $table->boolean('terms_and_conditions')->default(false);
            $table->timestamps();


            // Set email as the primary key
            $table->primary('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }

};

