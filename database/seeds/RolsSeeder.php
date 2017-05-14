<?php

use Illuminate\Database\Seeder;

class RolsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \DB::table('merlin_rols')->insert(array(
            'nombre' => 'Invitado',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        \DB::table('merlin_rols')->insert(array(
            'nombre' => 'Investigador',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        \DB::table('merlin_rols')->insert(array(
            'nombre' => 'Investigador principal',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        \DB::table('merlin_rols')->insert(array(
            'nombre' => 'Admin',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }

}
