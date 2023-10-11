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
            $table->string('foto', 64)->nullable();
            $table->string('login', 30)->unique();
            $table->char('senha', 32);
            $table->enum('perfil', ['adm', 'user']);
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
