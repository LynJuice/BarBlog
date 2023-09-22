<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->foreignId('catagory_id')->constrained('catagory');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog');
    }
};
