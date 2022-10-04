<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */

  public function up()
  {
    Schema::create('company_project', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->unsignedBigInteger('company_id');
      $table->unsignedBigInteger('project_id');

      $table->foreign('company_id')->references('id')->on('companies')
        ->onDelete('restrict')
        ->onUpdate('restrict');
      $table->foreign('project_id')->references('id')->on('projects')
        ->onDelete('restrict')
        ->onUpdate('restrict');
    });
  }

  public function down()
  {
    Schema::drop('company_project');

    Schema::table('company_project', function (Blueprint $table) {
      $table->dropForeign('company_project_company_id_foreign');
    });
    Schema::table('company_project', function (Blueprint $table) {
      $table->dropForeign('company_project_project_id_foreign');
    });
  }
};
