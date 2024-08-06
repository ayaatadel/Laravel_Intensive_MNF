<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // => create table
        /**
         * students => id , name ,email,grade ,gender , image , address
         */
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email')->unique()->nullable();
            $table->integer('grade')->default(0);
            $table->enum('gender',['male','female'])->default('male');
            $table->string('image')->nullable();
            $table->string('address');

            $table->timestamps();// created_at (date=> creation) , updated_at=(date=>update)
        });
    }

    /**
     * Reverse the migrations.
     * //  rollback , reset migration
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
