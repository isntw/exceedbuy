<?php

use Illuminate\Database\Seeder;
use App\Settings;

class SettingsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Settings::create([
            'phone' => '0736 395 135',
            'email' => 'moneaiustin@gmail.com',
            'location' => 'London',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor',
        ]);
    }

}
