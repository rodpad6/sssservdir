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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('category_cd', 2)->comment('Category of the Program');

            $table->foreign('category_cd')
            ->references('category_cd')
            ->on('service_categories')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->string('service_name')->comment('Name of the service/program');
            $table->text('service_desc')->comment('Short description of the service/program');
            $table->string('office_unit')->comment('Office/Unit in charge');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
