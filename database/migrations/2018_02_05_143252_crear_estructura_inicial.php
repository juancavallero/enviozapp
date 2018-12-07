<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEstructuraInicial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('rol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('slug', 50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('apellido', 100)->nullable();
            $table->string('direccion', 150)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->integer('idRol')->unsigned();
            $table->foreign('idRol')->references('id')->on('rol');
            $table->boolean('habilitado')->default(true);
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        DB::table('rol')->insert([
            ['nombre' => 'administrador', 'slug' => 'admin'],
            ['nombre' => 'asociados', 'slug' => 'socio']
        ]);

        DB::table('users')->insert([
            ['id' => 1, 'nombre' => 'Juan Jose', 'apellido' => 'Cavallero', 'email' => 'juanchi289@hotmail.com', 'password' => '$2y$10$pqF2I5KjOBlp275qYVgQW.GzmAoPZUWbYbX5xpx8Y9rxdoKE.o7Fq', 'idRol' => 1],
            ['id' => 2, 'nombre' => 'Admin', 'apellido' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$pqF2I5KjOBlp275qYVgQW.GzmAoPZUWbYbX5xpx8Y9rxdoKE.o7Fq', 'idRol' => 1]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('rol');
        Schema::dropIfExists('password_resets');
    }
}
