<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_package', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');        
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('service_id')
            ->references('id')
            ->on('services')
            ->onDelete('cascade');

            $table->foreign('package_id')
            ->references('id')
            ->on('packages')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_package');
    }
}
