<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Catagory migration
    public function up()
    {
        Schema::create('catagories', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('catagories');
    }
};
