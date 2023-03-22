<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->time('hour');
            $table->date('reservation_date');
            $table->foreignId('table_id')->constrained('tables')->onDelete('cascade');
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_table');
    }
}