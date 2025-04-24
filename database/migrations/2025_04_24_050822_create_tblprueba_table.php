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
        Schema::create('1', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('2', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('3', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('rol_id')->constrained('2')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('4', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('5', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('3')->onDelete('cascade');
            $table->foreignId('producto_id')->constrained('4')->onDelete('cascade');
            $table->integer('cantidad');
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('1');
    }
};
