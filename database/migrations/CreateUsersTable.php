<?php
use IlluminateDatabaseSchemaBlueprint;
use IlluminateDatabaseMigrationsMigration;
class CreateUsersTable extends Migration {
    // Run the migrations.
    public function up(){
        Schema::create('usersp', function(Blueprint $table){
            $table->increments('id');
            $table->String('username');
            $table->String('email')->unique();
            $table->String('password');
            $table->text('remember_token')->nullable();
            $table->timestamps();
        });
    }
    // Reverse the migrations.
    public function down(){
        Schema::drop('usersp');
    }
}