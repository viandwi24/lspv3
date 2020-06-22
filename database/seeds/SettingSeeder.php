<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert(
            ['name' => 'lembaga', 'value' => 'SMKN 1 Mojokerto'],
        );
    }
}
