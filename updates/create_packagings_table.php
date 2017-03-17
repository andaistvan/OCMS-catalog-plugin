<?php namespace Arteriaweb\Catalog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePackagingsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_catalog_packagings', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('packaging_name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_catalog_packagings');
    }
}
