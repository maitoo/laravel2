<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('serial_number');
            $table->string('user_id',20);
            $table->string('store_name',20);
            $table->text('store_information');
            $table->text('store_introduction');
            $table->string('rural_code',4);
            $table->longtext('photo_pass')->nullable($value = true);
            $table->string('allergies',255)->nullable($value = true);
            $table->string('store_stype',5)->nullable($value = true);
            $table->string('area',100);
            $table->text('religion')->nullable($value = true);
            $table->string('url',1000)->nullable($value = true);
            $table->string('street_address',100)->nullable($value = true);
            $table->integer('flag')->length(1)->default(0);
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
        Schema::dropIfExists('information');
    }
}
