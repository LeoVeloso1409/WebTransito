<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('cod_ait')->unique()->require();
            $table->string('orgao_autuador')->require();

            $table->string('placa')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('cor')->nullable();
            $table->string('chassi')->nullable();
            $table->string('pais')->nullable();
            $table->string('especie')->nullable();
            $table->string('nome_condutor')->nullable();
            $table->string('cpf_condutor')->nullable();
            $table->string('rg_condutor')->nullable();
            $table->string('cnh_condutor')->nullable();
            $table->string('uf_cnh')->nullable();
            $table->string('categoria_cnh')->nullable();
            $table->string('validade_cnh')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('data')->nullable();
            $table->string('hora')->nullable();
            $table->string('uf_mg')->nullable();
            $table->string('codigo_infracao')->nullable();
            $table->string('descricao')->nullable();
            $table->string('equipamento_afericao')->nullable();
            $table->string('medicao_realizada')->nullable();
            $table->string('limite_regulamentado')->nullable();
            $table->string('valor_considerado')->nullable();
            $table->string('observacoes')->nullable();
            $table->string('medida1')->nullable();
            $table->string('medida2')->nullable();
            $table->string('ficha_vistoria')->nullable();
            $table->string('imagem')->nullable();
            $table->string('matricula')->require();
            $table->string('nome')->require();

            $table->boolean('status')->nullable();

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
        Schema::dropIfExists('aits');
    }
}
