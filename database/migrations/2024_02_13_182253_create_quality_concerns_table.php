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
        Schema::create('quality_concerns', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('work_id');

            $table->foreign('work_id')
                ->references('id')
                ->on('works')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('selection_id');

            $table->foreign('selection_id')
                ->references('id')
                ->on('selections')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quality_concerns');
    }
};