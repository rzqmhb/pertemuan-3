<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table){
            $table->string('title', 100)->index();
            $table->string('slug', 100)->index();
            $table->text('content');
            $table->boolean('draft')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('title');
        Schema::dropColumns('slug');
        Schema::dropColumns('content');
        Schema::dropColumns('draft');
    }
};
