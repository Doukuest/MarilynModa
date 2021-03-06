<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('empleado', function (Blueprint $table) {
          $table->string('pk_emp_cedula',12)->primary();
          $table->string('emp_celular',15)->unique();
          $table->string('emp_email',100)->unique();
          $table->string('emp_clave',60);
          $table->char('emp_genero',1)->default('o'); //[m,f,o (otro)]
          $table->string('emp_direccion',255);
          $table->string('emp_nombre',50);
          $table->string('emp_apellido',50);
          $table->char('emp_privilegio',1)->default('e'); //[a (administrador), g (gerente), e (empleado)]
          $table->string('remember_token',100)->default('')->nullabe();
          $table->timestamps();
          $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('empleado');
    }
}
