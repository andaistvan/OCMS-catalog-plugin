<?php namespace Arteriaweb\Catalog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_catalog_units', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('unit_name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_catalog_units');
    }
}
