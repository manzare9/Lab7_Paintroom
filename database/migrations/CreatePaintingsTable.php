<?php
use IlluminateDatabaseSchemaBlueprint;
use IlluminateDatabaseMigrationsMigration;
class CreatePaintingsTable extends Migration {
    // Run the migrations.
    public function up(){
        Schema::create('paintings', function(Blueprint $table){
            $table->increments('id');
            $table->String('title');
            $table->text('body');
            $table->integer('painter_id');
            $table->timestamps();
        });
    }
    // Reverse the migrations.
    public function down(){
        Schema::drop('paintings');
    }
}
