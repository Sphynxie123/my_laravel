<!-- Pridėkite į anskščiau sukurta bookslentelę atskira migracija foreign raktą kuris uždraustu trinti vartotoją jeigu jam yra priskirta knyga. -->
<!-- https://laravel.com/docs/9.x/migrations#updating-tables -->
<!-- sukuriam lentelę php artisan make:migration update_books_table -->
<!-- https://laravel.com/docs/9.x/migrations#foreign-key-constraints -->
<!-- php artisan migrate -->
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
        Schema::table('books', function (Blueprint $table) {            
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
        });
                
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->foreignId('user_id')
        // ->constrained()
        // // ->onUpdate('cascade')
        // ->onDelete('cascade');
    }
};
