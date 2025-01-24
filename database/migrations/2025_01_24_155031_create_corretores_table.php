<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('corretores', function (Blueprint $table) {
        $table->id();
        $table->string('name', 255);
        $table->string('cpf', 11)->unique();
        $table->string('creci', 10);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corretors');
    }
};
