<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabasehandletablemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databasehandletablemodels', function (Blueprint $table) {
          //  $table->Id();
            $table->increments('ID');

         // $table->Task();
           $table->String('Task');

        //  $table->Completed();
          $table->boolean('Completed')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('databasehandletablemodels');
    }
}
