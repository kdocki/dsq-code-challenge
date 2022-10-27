<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_locations', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitude', 8, 6);
            $table->decimal('longitude', 9, 6);
            $table->string('forecast_url');
            $table->dateTime('last_fetched_at')->nullable();
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
        Schema::dropIfExists('weather_locations');
    }
}
