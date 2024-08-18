<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->id(); // Adds an auto-incrementing ID column
            $table->string('drugId')->unique(); // Unique drug ID
            $table->string('name'); // Name of the drug
            $table->string('batchNumber'); // Batch number
            $table->string('manufacturer'); // Manufacturer
            $table->date('expiryDate'); // Expiry date
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs');
    }
}
