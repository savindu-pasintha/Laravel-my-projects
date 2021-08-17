<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tableforms', function (Blueprint $table) {
            $table->id();
         // $table->data_type_of feild('columname',length->default('default value')->null or not?
            $table->text('email')->default('no')->nullable();
            $table->text('password',20)->default('no')->nullable();

            $table->timestamps();//auto creTED & update feild hadenw 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catagories');

    }
}
