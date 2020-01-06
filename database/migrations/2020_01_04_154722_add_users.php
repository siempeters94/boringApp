<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
          array(
              'name' => 'Bob',
              'username' => 'bob',
              'password' => Hash::make('bob'),
          )
        );

        DB::table('users')->insert(
          array(
              'name' => 'Joris',
              'username' => 'joris',
              'password' =>  Hash::make('knz'),
          )
        );

        DB::table('users')->insert(
          array(
              'name' => 'Ayla',
              'username' => 'ayla',
              'password' => Hash::make('woef'),
          )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('username', '==', 'bob')->delete();
        DB::table('users')->where('username', '==', 'joris')->delete();
        DB::table('users')->where('username', '==', 'ayla')->delete();
    }
}
