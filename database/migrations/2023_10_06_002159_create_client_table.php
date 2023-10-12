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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('proyecto',25);
            $table->string('nombre',25);
            $table->string('apellido_paterno',25);
            $table->string('apellido_materno',20);
            $table->string('rfc',10);
            $table->string('email',20);
            $table->string('dir_calle',50);
            $table->string('dir_numExt',10);
            $table->string('dir_numInt',10);
            $table->string('telefono',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
