<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocFiscalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_fiscal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Tipo',1);
            $table->bigInteger('CnpjCpf');
            $table->string('Numero');
            $table->string('Serie');
            $table->string('Modelo');
            $table->string('Chave');
            $table->decimal('ValorTotal', 8, 2);
            $table->decimal('ValorProd', 8, 2);
            $table->decimal('ValorICMS', 8, 2);
            $table->decimal('ValorIPI', 8, 2);
            $table->string('Status');
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
        Schema::dropIfExists('doc_fiscal');
    }
}
