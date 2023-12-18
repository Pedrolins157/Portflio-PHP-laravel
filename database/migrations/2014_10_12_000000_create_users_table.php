<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('email', 50)->unique();
            $table->date('data_nascimento');
            $table->char('cpf', 14);
            $table->string('foto', 255);
            $table->string('login', 30)->unique();
            $table->char('password', 255);
            $table->enum('perfil', [
                'gerente_geral',
                'gerente_loja',
                'gerente_departamento',
                'gerente_recursos_humanos',
                'gerente_vendas',
                'gerente_financeiro',
                'gerente_marketing',
                'atendente_balcao',
                'atendente_caixa',
                'assistente_vendas',
                'consultor_vendas',
                'estoquista',
                'auxiliar_estoque',
                'analista_logistica',
                'coordenador_logistica',
                'operador_maquinas',
                'auxiliar_producao',
                'auxiliar_limpeza',
                'analista_suporte',
                'desenvolvedor_software',
                'administrador_redes',
                'analista_marketing',
                'designer_grafico',
                'coordenador_marketing',
                'assistente_administrativo',
                'recepcionista',
                'contador',
                'seguranca',
                'estagiario'
            ]);
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
        Schema::dropIfExists('users');
    }
}
