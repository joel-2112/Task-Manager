<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();                   
            $table->string('title');        
            //description field may be empty
            $table->text('description')->nullable(); 
            $table->boolean('completed')->default(false); 
            //for both created and updated time
            $table->timestamps();          
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}