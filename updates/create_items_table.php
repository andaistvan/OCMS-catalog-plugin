<?php namespace Arteriaweb\Catalog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_catalog_items', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable()->default(null);
            $table->decimal('price', 8)->nullable()->default(null);
            $table->integer('qty')->default(1);
            $table->string('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_catalog_items');
    }
}
