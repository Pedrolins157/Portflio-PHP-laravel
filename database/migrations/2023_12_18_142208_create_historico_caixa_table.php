<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoCaixaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_caixa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Se houver um relacionamento com usuários
            $table->decimal('valor_abertura', 10, 2);
            $table->decimal('valor_fechamento', 10, 2)->nullable();
            $table->dateTime('data_abertura');
            $table->dateTime('data_fechamento')->nullable();
            // Outros campos relevantes para seu histórico de caixa
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
        Schema::dropIfExists('historico_caixa');
    }
}
