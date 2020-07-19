<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoal', function (Blueprint $table) {
            $table->increments('pes_id');
            $table->string('pes_posto_grad',20);
            $table->string('pes_arma_quadro_servico',15);
            $table->string('pes_nome',100);
            $table->string('pes_sobrenome',20);
            $table->string('pes_su',15);
            $table->string('pes_destino',30);
            $table->string('pes_funcao',30);
            $table->date('pes_data_praca');
            $table->date('pes_data_nasc');
            $table->string('pes_email')->unique();
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
        Schema::dropIfExists('pessoal');
    }
}
