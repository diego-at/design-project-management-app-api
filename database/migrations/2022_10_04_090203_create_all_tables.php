<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */

  public function up()
  {
    //create the tables and columns
    Schema::create('projects', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("name");
      $table->integer("revision_rounds");
      $table->enum('status',  ['work_in_progress', 'waiting_for_review', 'finished'])->default('work_in_progress');
    });

    Schema::create('images', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->enum('status',  ['making_first_version', 'in_review', 'making_revisions', 'final_version_delivered',])->default('making_first_version');
    });

    Schema::create('versions', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("url");
      $table->string("version_number");
      $table->boolean("is_current")->default(true);
    });

    Schema::create('revisions', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("message");
      $table->boolean("is_done")->default(false);
      $table->json("geometry_object")->default(false);
    });

    Schema::create('companies', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("name");
      $table->enum('company_type',  ['designer', 'client']);
    });


    //Create the relations 
    Schema::table('images', function (Blueprint $table) {
      $table->unsignedBigInteger('project_id');
      $table->foreign('project_id')->references('id')->on('projects');
    });

    Schema::table('versions', function (Blueprint $table) {
      $table->unsignedBigInteger('image_id');
      $table->foreign('image_id')->references('id')->on('images');
    });

    Schema::table('revisions', function (Blueprint $table) {
      $table->unsignedBigInteger('image_id');
      $table->foreign('image_id')->references('id')->on('images');

      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users');
    });

    Schema::table('users', function (Blueprint $table) {
      $table->unsignedBigInteger('company_id');
      $table->foreign('company_id')->references('id')->on('companies');

      $table->unsignedBigInteger('revision_id');
      $table->foreign('revision_id')->references('id')->on('revisions');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('companies');
    Schema::dropIfExists('projects');
    Schema::dropIfExists('images');
    Schema::dropIfExists('versions');
    Schema::dropIfExists('revisions');
  }
};
