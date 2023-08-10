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
            $table->String("trip");
            $table->String("package");
            $table->String("phone",14);
            $table->date("date");
            $table->String("hour");
            $table->string("minute");
            $table->string("am_or_pm");
            $table->string('isclear')->default('0');
            $table->foreignId('users_id');
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
