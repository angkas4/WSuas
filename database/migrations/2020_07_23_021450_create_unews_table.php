<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
 
        Schema::create('unews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('gambar');
            $table->string('isi', 5000);
             $table->timestamp('created_at')->useCurrent();
             $table->timestamp('updated_at')->useCurrent();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unews');
    }
}
