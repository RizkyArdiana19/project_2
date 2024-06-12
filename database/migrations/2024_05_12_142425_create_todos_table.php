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
        // Create the todos table if it doesn't exist
        if (!Schema::hasTable('todos')) {
            Schema::create('todos', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description')->nullable();
                $table->boolean('isDone')->default(false);
                $table->date('due_date')->nullable(); // Add the due_date column
                $table->timestamps();
            });
        } else {
            // Add the due_date column if the table already exists
            Schema::table('todos', function (Blueprint $table) {
                if (!Schema::hasColumn('todos', 'due_date')) {
                    $table->date('due_date')->nullable();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the due_date column if it exists
        Schema::table('todos', function (Blueprint $table) {
            if (Schema::hasColumn('todos', 'due_date')) {
                $table->dropColumn('due_date');
            }
        });

        // Drop the todos table
        Schema::dropIfExists('todos');
    }
};
