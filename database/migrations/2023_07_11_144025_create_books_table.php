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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->String("name",50);
            $table->String("nic",20);
            $table->String("email");
            $table->integer("nop");
            $table->string("location",255);
            $table->String("package");
            $table->String("phone",14);
            $table->date("date");
            $table->string("gender",15);
            $table->string('isclear')->default('0');
            $table->foreignId('users_id')->default('0');
            $table->foreignId('admins_id')->default('0');
            $table->String('admins_name')->default('user-book');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
