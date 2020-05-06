<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Room::create([
            'name' => 'Puigraciós',
            'description' => 'Habitación (con baño)',
            'services' => ' Acceso internet, Se sirven cenas, Se sirven comidas',
            'price' => '85.00',

        ]);

        App\Room::create([
            'name' => 'Sant Cristòfol',
            'description' => 'Habitación (con baño)',
            'services' => 'Se sirven cenas, Se sirven comidas',
            'price' => '85.00',
        ]);

        App\Room::create([
            'name' => 'Rocacentella',
            'description' => 'Habitación (con baño)',
            'services' => 'Paseos con guía, Se sirven cenas, Se sirven comidas',
            'price' => '85.00',
        ]);
    }
}
