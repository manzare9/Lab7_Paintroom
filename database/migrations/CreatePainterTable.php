<?php
use IlluminateDatabaseSchemaBlueprint;
use IlluminateDatabaseMigrationsMigration;
class CreatePainterTable extends Migration {
    // Run the migrations.
    public function up(){
        Schema::create('painters', function(Blueprint $table){
            $table->increments('id');
            $table->String('name');
            $table->text('bio');
            $table->timestamps();
        });
    }
    // Reverse the migrations.
    public function down(){
        Schema::drop('painters');
    }
}
