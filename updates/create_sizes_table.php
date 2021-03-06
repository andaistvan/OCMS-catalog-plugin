<?php namespace Arteriaweb\Catalog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSizesTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_catalog_sizes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('item_id')->unsigned()->nullable()->default(null);
            $table->string('size_name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_catalog_sizes');
    }
}
