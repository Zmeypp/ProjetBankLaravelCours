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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->timestamps();
        });

        DB::insert('insert into banks (id, libelle) values (?, ?)', [1, 'Boursorama']);

        DB::insert('insert into banks (id, libelle) values (?, ?)', [2, 'Société Générale']);

        DB::insert('insert into banks (id, libelle) values (?, ?)', [3, 'Crédit Agricole']);

        DB::insert('insert into banks (id, libelle) values (?, ?)', [4, 'La Banque Postale']);

        DB::insert('insert into banks (id, libelle) values (?, ?)', [5, 'Fortuneo']);

        DB::insert('insert into banks (id, libelle) values (?, ?)', [6, 'ING']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
