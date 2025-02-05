<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Mindegyik sor átfordul a megfelelő MYSQL kódra.
        Schema::create('stormtroopers', function (Blueprint $table) {
            $table->id(); //BigInt, auto_increment primary key
            $table->string("name"); //Ha nem nullable, akkor kötelező
            $table->integer("age")->nullable();
            $table->boolean("isActive");
            $table->date("recruited");
            $table->string("picture")->default('placeholder.jpg');
            $table->timestamps(); //created_at updated_at
            $table->softDeletes(); //deleted_at
            $table->foreignId("created_by")->nullable()->constrained('users', 'id');
            $table->foreignId("updated_by")->nullable()->constrained('users', 'id');
            $table->foreignId("deleted_by")->nullable()->constrained('users', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stormtroopers');
    }
};
