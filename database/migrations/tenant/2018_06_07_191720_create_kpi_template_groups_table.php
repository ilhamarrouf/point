<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKpiTemplateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpi_template_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kpi_template_id')->index();
            $table->string('name');
            $table->timestamps();

            $table->foreign('kpi_template_id')
                ->references('id')
                ->on('kpi_templates')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kpi_template_groups');
    }
}
